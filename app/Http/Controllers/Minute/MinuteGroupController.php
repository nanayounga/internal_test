<?php namespace App\Http\Controllers\Minute;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\User;
use App\Department;
use App\Minutes_group;
use App\Minutes_user;
use App\Minutes_detail;
use Log;
use Session;

class MinuteGroupController extends Controller {
	private $pass_data = array();

	public function __construct()
	{
		$this->middleware('user_auth');
		$this->user = new User();
		$this->department = new Department();
		$this->minutes_group = new Minutes_group();
		$this->minutes_detail = new Minutes_detail();
		$this->minutes_user = new Minutes_user();
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
	public function create()
	{
		// ログインユーザー以外の会員全員分を取得
		$this->pass_data['users'] = User::select(['user_id', 'user_kanji_last_name', 'user_kanji_first_name'])
				->where('user_id', '!=', Session::get('user_id'))
				->get();

		return view('minute/group/create', $this->pass_data);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		// バリデーション
		$this->validate($request, [
			'minutes_group_name' => 'required|max:40',
			'minutes_group_desc' => 'required|max:500',
			'minutes_user_id' => 'max:500',
		]);

		// グループの新規追加
		$minutes_group_id = $this->minutes_group->add_new_record($request);
		if (! $minutes_group_id)
		{
			Session::flash('notice', '追加処理に失敗しました。');
			return redirect("minute/group/create");
		}

		// グループのユーザーを追加
		$query_result = $this->minutes_user->add_new_record($request, $minutes_group_id);

		if ($query_result)
		{
			Session::flash('notice', '追加処理が完了しました。');
			return redirect("minute/group/show/{$minutes_group_id}");
		}
		else
		{
			Session::flash('notice', '追加処理に失敗しました。');
			return redirect("minute/group/lists");
		}
	}

	public function lists()
	{
		return view('minute/group/lists', $this->pass_data);
	}

	// ajaxでグループのリストを検索する
	// 検索対象はグループ名 [カラム: minutes_group_name]
	public function get_lists(Request $request)
	{
		if (! $request->ajax()) exit();

		// 任意の文字列でグループ名からLIKE検索して、グループ情報を取得
		$minutes_group = $this->minutes_group->search_group_name($request);

		// return
		header("Content-Type: application/json; charset=utf-8");

		if ($minutes_group->count() == 0)
		{
			return json_encode('none');
		}
		else
		{
			return $minutes_group->toJson();
		}
		exit;
	}

	/**
	 * グループ詳細画面
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// グループの詳細内容を取得
		// ログインユーザーが登録されているグループのみ取得
		$this->pass_data['minutes_group'] = $this->minutes_group->get_group_detail($id);

		if ($this->pass_data['minutes_group'] == NULL) abort(404);

		// グループに登録されているユーザー情報を取得
		$this->pass_data['minutes_users'] = $this->minutes_user->get_user_in_group($id);

		// 任意のグループの議事録を取得
		$this->pass_data['minutes_details'] = $this->minutes_detail->get_group_detail($id);

		return view('minute/group/show', $this->pass_data);
	}

	/**
	 * グループ編集画面
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// 会員全員分を取得
		$this->pass_data['users'] = User::select(['user_id', 'user_kanji_last_name', 'user_kanji_first_name'])->get();

		// グループの詳細内容を取得
		// ログインユーザーが登録されているグループのみ取得
		$this->pass_data['minutes_group'] = $this->minutes_group->get_group_detail($id);

		if ($this->pass_data['minutes_group'] == NULL) abort(404, 'グループメンバーに登録されていません。');

		// グループに登録されているユーザー情報を取得
		$this->pass_data['minutes_users'] = $this->minutes_user->get_user_in_group($id);

		return view('minute/group/edit', $this->pass_data);
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
			'minutes_group_name' => 'required|max:40',
			'minutes_group_desc' => 'required|max:500',
			'minutes_user_id' => 'max:500',
		]);

		// グループの更新
		$minutes_group_id = $this->minutes_group->update_record($request, $id);
		if (! $minutes_group_id)
		{
			Session::flash('notice', '編集処理に失敗しました。');
			return redirect("minute/group/create");
		}

		// グループのユーザーを追加
		$query_result = $this->minutes_user->update_record($request, $minutes_group_id);

		if ($query_result)
		{
			Session::flash('notice', '編集処理が完了しました。');
			return redirect("minute/group/show/". $id);
		}
		else
		{
			Session::flash('notice', '編集処理に失敗しました。');
			return redirect("minute/group/show/". $id);
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// 削除フラグを立てる
		$minutes_group = Minutes_group::find($id);
		$minutes_group->deleted_at = date('Y-m-d H:i:s');
		$minutes_group->save();

		Session::flash('notice', $minutes_group->minutes_group_name . 'の削除が完了しました。');
		return redirect('minute/group/lists');
	}

}
