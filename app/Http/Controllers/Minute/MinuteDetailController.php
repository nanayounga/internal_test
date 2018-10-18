<?php namespace App\Http\Controllers\Minute;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Minutes_group;
use App\Minutes_detail;
use App\Minutes_user;
use App\Service_worker;
// use App\Helpers\PushNotificationFCM;
use Session;

class MinuteDetailController extends Controller {
	private $pass_data = array();

	public function __construct()
	{
		$this->middleware('user_auth');
		$this->minutes_user = new Minutes_user();
		$this->minutes_detail = new Minutes_detail();
		$this->minutes_group = new Minutes_group();
		$this->service_worker = new Service_worker();
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($id)
	{		
		// グループ情報を取得
		$this->pass_data['minutes_group'] = Minutes_group::select('*')
				->where('minutes_group_id', $id)
				->first();
		if ($this->pass_data['minutes_group']->count() == 0) abort(404);

		// グループの詳細内容を取得
		// ログインユーザーが登録されているグループのみ取得
		$this->pass_data['minutes_group'] = $this->minutes_group->get_group_detail($id);

		if ($this->pass_data['minutes_group'] == NULL)
		{
			abort(404, 'グループメンバーに登録されていません。');
		}

		// グループに登録されているユーザー情報を取得
		$this->pass_data['minutes_users'] = $this->minutes_user->get_user_in_group($id);

		return view('minute/detail/create', $this->pass_data);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request, $id)
	{
		// バリデーション
		$this->validate($request, [
			'minutes_detail_date' => 'required|max:16',
			'minutes_detail_agenda' => 'max:1000',
			'minutes_detail_text' => 'required|max:100000',
		]);
		
		// グループの詳細内容を取得
		$minutes_group = $this->minutes_group->get_group_detail($id);
		try
		{
			DB::beginTransaction();

			// 議事録の新規追加
			$minutes_detail_id = $this->minutes_detail->add_details($request, $id);

			// minutes_groupテーブルの議事録最新更新日を現在時刻で更新
			$this->minutes_group->update_detail_date($id);

			/***** push通知の送信 *****/
			// グループに登録されているユーザー全員に通知を送る。登録したユーザー自身には送らない
			$minutes_users = $this->minutes_user->get_user_in_group($id);

			foreach ($minutes_users as $minutes_user) $user_ids[] = $minutes_user->user_id;

			$user_ids = array_diff($user_ids, [session('user_id')]);
			$user_ids = array_values($user_ids);

			$service_workers = $this->service_worker->get_tokens_by_user_ids($user_ids);
			foreach ($service_workers as $service_worker) $tokens[] = $service_worker->service_worker_token;

			if (! empty($tokens))
			{
				$fcm_data = [
					'token' => config('const.fcm_auth_key'),
					'url' => config('const.fcm_url'),
					'registration_ids' => $tokens,
					'notification' => [
						'title' => config('const.app_name'),
						'body'  => "{$minutes_group->minutes_group_name}へ議事録が追加されました"
					],
					'data' => [
						'url' => url("minute/detail/show/{$minutes_detail_id}"),
						'action' => []
					],
				];

				// push通知送信
				$fcm_result = \App\Helpers\PushNotificationFCM($fcm_data);

				// 送信結果にエラーがあった場合、service_workersテーブルから該当のレコードを削除し今後送らないようにする
				if (! empty($fcm_result['failure']) && $fcm_result['failure'] >= 1)
				{
					foreach ($fcm_result['results'] as $key => $fcm)
					{
						if (! empty($fcm['error']))
						{
							$this->service_worker->delete_by_token($tokens[$key]);
						}
					}
				}
			}

			/***** end push通知の送信 *****/

			DB::commit();
		}
		catch(Exception $e)
		{
			DB::rollback();
			throw $e;
		}

		if ($minutes_detail_id)
		{
			Session::flash('notice', '追加処理が完了しました。');
			return redirect("minute/group/show/{$id}");
		}
		else
		{
			Session::flash('notice', '追加処理に失敗しました。');
			return redirect("minute/group/create/{$id}");
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// 議事録詳細を取得
		$this->pass_data['minutes_detail'] = $this->minutes_detail->get_details($id);
		if ($this->pass_data['minutes_detail'] == NULL) abort(404);

		$minutes_group_id = $this->pass_data['minutes_detail']->minutes_group_id;

		// グループ情報を取得
		$this->pass_data['minutes_group'] = Minutes_group::select('*')
				->where('minutes_group_id', $minutes_group_id)
				->first();

		// グループに登録されているユーザー情報を取得
		$this->pass_data['minutes_users'] = $this->minutes_user->get_user_in_group($minutes_group_id);
		return view('minute/detail/show', $this->pass_data);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// 議事録詳細を取得
		$this->pass_data['minutes_detail'] = $this->minutes_detail->get_details($id);
		if ($this->pass_data['minutes_detail'] == NULL) abort(404);

		$this->pass_data['minutes_detail'] = $this->pass_data['minutes_detail']->toArray();

		$minutes_group_id = $this->pass_data['minutes_detail']['minutes_group_id'];

		// グループ情報を取得
		$this->pass_data['minutes_group'] = Minutes_group::select('*')
				->where('minutes_group_id', $minutes_group_id)
				->first();

		// グループに登録されているユーザー情報を取得
		$this->pass_data['minutes_users'] = $this->minutes_user->get_user_in_group($minutes_group_id);

		// バリデーションで戻ってきた場合、入力値とDBの会員情報をマージする
		if (old('_token') != NULL)
		{
			$this->pass_data['minutes_detail'] = array_merge($this->pass_data['minutes_detail'], $old_params);
		}

		return view('minute/detail/edit', $this->pass_data);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		// バリデーション
		$this->validate($request, [
			'minutes_detail_date' => 'required|max:16',
			'minutes_detail_agenda' => 'max:1000',
			'minutes_detail_text' => 'required|max:100000',
		]);
		
		// 議事録の更新
		$query_result = $this->minutes_detail->edit_details($request, $id);

		// 議事録詳細、グループ情報を取得
		// minutes_groupテーブルの議事録更新日を更新する為にminutes_group_idを取得する為
		$minutes_detail = Minutes_detail::where('minutes_detail_id', $id)->first();
		$minutes_group  = Minutes_group::select('minutes_group_id')
				->where('minutes_group_id', $minutes_detail->minutes_group_id)
				->first();

		// minutes_groupテーブルの議事録最新更新日を現在時刻で更新
		$this->minutes_group->update_detail_date($minutes_group->minutes_group_id);

		if ($query_result)
		{
			Session::flash('notice', '編集処理が完了しました。');
			return redirect("minute/detail/show/{$id}");
		}
		else
		{
			Session::flash('notice', '編集処理に失敗しました。');
			return redirect("minute/detail/create/{$id}");
		}
	}

	public function search()
	{
		return view('minute/detail/search', $this->pass_data);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// 議事録詳細を取得
		$minutes_detail = $this->minutes_detail->get_details($id);
		if ($minutes_detail == NULL) abort(404);

		// 削除実行
		Minutes_detail::destroy($id);
		Session::flash('notice', '削除しました。');

		return redirect('minute/group/show/'. $minutes_detail->minutes_group_id);
	}

}
