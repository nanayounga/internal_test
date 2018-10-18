<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Department;
use Session;
use DB;
use App\User;
use Util;

class DepartmentController extends Controller {
	private $pass_data = array();

	public function __construct()
	{
		$this->middleware('user_auth');
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
		Util::has_permissions('create_department');

		// 部署一覧取得
		$this->pass_data['departments'] = $this->department->get_all();
		return view('department/create', $this->pass_data);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		Util::has_permissions('create_department');

		$this->validate($request, [
			'department_name' => 'required|max:20|unique:departments,department_name',
			'department_parent_id' => 'numeric|max:100',
		]);

		// departmentテーブルへ新規追加
		$result = $this->department->add_new_department($request);

		if ($result)
		{
			Session::flash('notice', '追加処理が完了しました。');
			return redirect('department/create');
		}
		else
		{
			Session::flash('notice', '追加処理に失敗しました。');
			return redirect('department/create');
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
		// 部署情報を取得
		$this->pass_data['department'] = Department::where('department_id', $id)->first();
		if ($this->pass_data['department'] == NULL) abort('404');
		$this->pass_data['department'] = $this->pass_data['department']->toArray();

		// 親と子の部署を取得
		$this->pass_data['department_parent'] = $this->department->get_parent_and_child($this->pass_data['department']);

		// 配下の部署で所属する会員を全て取得
		$this->pass_data['users'] = $this->department->get_child_users($this->pass_data['department']);
// print_r($this->pass_data['users']);
		return view('department/show', $this->pass_data);
	}

	public function lists()
	{
		$this->pass_data['departments'] = Department::select(['department_id', 'department_name', 'department_layer'])
				->orderBy('department_layer', 'ASC')
				->groupBy('departments.department_id')
				->get();
		return view('department/lists', $this->pass_data);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		Util::has_permissions('edit_department');

		// 部署情報の取得
		$this->pass_data['department'] = Department::select('*')
				->where('department_id', $id)
				->first()
				->toArray();

		// バリデーションで戻ってきた場合、入力値とDBの会員情報をマージする
		if (old('_token') != NULL)
		{
			$this->pass_data['department'] = array_merge($this->pass_data['department'], $old_params);
		}

		// 部署一覧取得
		$this->pass_data['departments_all'] = $this->department->get_all();
		return view('department/edit', $this->pass_data);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		Session::flash('update_department_id', $id);

		$this->validate($request, [
			'department_name' => 'required|max:20|duplicate_department_name',
		]);

		// 更新処理
		$query = Department::find($id);
		$query->department_name = $request['department_name'];
		$query_result = $query->update();

		if ($query_result)
		{
			Session::flash('notice', '更新処理が完了しました。');
			return redirect("department/show/{$id}");
		}
		else
		{
			Session::flash('notice', '更新処理に失敗しました。');
			return redirect("department/edit/{$id}");
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Request $request, $id)
	{
		Util::has_permissions('edit_department');

		// 削除対象部署の物理削除
		Department::destroy($id);

		// 配下の部署の各値を更新する
		$this->department->delete_department($id);

		// 削除対象の部署を選択しているユーザーのdepartment_idを削除
		User::where('department_id', $id)
			->update(['department_id' => '']);

		return redirect("department/lists");
	}

}
