<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\User;
use App\Department;
use Session;

class MypageController extends Controller {

	public function __construct()
	{
		$this->middleware('user_auth');
		$this->user = new User();
		$this->department = new Department();
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
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  
	 * @return Response
	 */
	public function show()
	{
		$this->pass_data['user'] = User::select([
					'users.*', 'users.created_at', 'users.updated_at', 
					'department_name'
				])
				->where('user_id', Session::get('user_id'))
				->join('departments', 'departments.department_id', '=', 'users.department_id', 'left')
				->first();
		return view('mypage/show', $this->pass_data);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit()
	{
		// 部署一覧取得
		$this->pass_data['departments'] = $this->department->get_all();

		// 会員情報の取得
		$this->pass_data['user'] = User::where('user_id', Session::get('user_id'))->first()->toArray();

		// バリデーションで戻ってきた場合、入力値とDBの会員情報をマージする
		$old_params = old();
		if (! empty($old_params['_token']))
		{
			$this->pass_data['user'] = array_merge($this->pass_data['user'], $old_params);
		}

		return view('mypage/edit', $this->pass_data);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request)
	{
		Session::flash('update_user_id', Session::get('user_id'));

		// バリデーション
		$this->validate($request, [
			'user_kanji_last_name' => 'required|max:20',
			'user_kanji_first_name' => 'required|max:20',
			'user_kata_last_name' => 'required|max:20',
			'user_kata_first_name' => 'required|max:20',
			'user_email' => 'required|email|Duplicate_email_update',
			'user_password' => 'min:6|max:50|same:user_password_confirm',
			'user_password_confirm' => 'min:6|max:50',
			'department_id' => 'required|max:20',
		]);

		// 登録情報のupdate処理
		$query_result = $this->user->update_user($request);

		if ($query_result)
		{
			Session::flash('notice', '更新処理が完了しました。');
			return redirect("mypage/show");
		}
		else
		{
			Session::flash('notice', '更新処理に失敗しました。');
			return redirect("mypage/edit");
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
		//
	}

}
