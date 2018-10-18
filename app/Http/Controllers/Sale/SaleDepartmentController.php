<?php namespace App\Http\Controllers\Sale;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Sales_department;
use Session;
use Util;

class SaleDepartmentController extends Controller {
	private $pass_data = [];

	public function __construct()
	{
		$this->middleware('user_auth');

		// 権限編集の権限がないログインアカウントの場合は403
		Util::has_permissions('edit_sales_department');

		$this->sales_department = new Sales_department();
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
		return view('sale/department/create', $this->pass_data);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$this->validate($request, [
			'sales_department_name' => 'required|max:20|unique:sales_departments,sales_department_name',
			'sales_department_start' => 'required|date_format: Y/m/d',
			'sales_department_end' => 'required|date_format: Y/m/d',
		]);

		// sales_departmentsテーブルへ新規追加
		$this->sales_department->sales_department_name = $request->sales_department_name;
		$this->sales_department->sales_department_start = $request->sales_department_start;
		$this->sales_department->sales_department_end = $request->sales_department_end;
		$result = $this->sales_department->save();

		if ($result)
		{
			Session::flash('notice', '追加処理が完了しました。');
			return redirect('sale/department/lists');
		}
		else
		{
			Session::flash('notice', '追加処理に失敗しました。');
			return redirect('department/create');
		}
	}

	public function lists()
	{
		$this->pass_data['sales_departments'] = $this->sales_department
				->orderBy('updated_at', 'DESC')
				->get();
		return view('sale/department/lists', $this->pass_data);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$this->pass_data['sales_department'] = $this->sales_department
				->where('sales_department_id', $id)
				->first()
				->toArray();

		// バリデーションで戻ってきた場合、入力値とDBの会員情報をマージする
		if (old('_token') != NULL)
		{
			$this->pass_data['sales_department'] = array_merge($this->pass_data['sales_department'], old());
		}
		return view('sale/department/edit', $this->pass_data);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$this->validate($request, [
			'sales_department_name' => 'required|max:20|duplicate_sales_department_name',
			'sales_department_start' => 'required|date_format: Y/m/d',
			'sales_department_end' => 'required|date_format: Y/m/d',
		]);

		// 更新処理
		$sales_department = Sales_department::find($id);
		$sales_department->sales_department_name = $request->sales_department_name;
		$sales_department->sales_department_start = $request->sales_department_start;
		$sales_department->sales_department_end = $request->sales_department_end;
		$result = $sales_department->save();

		if ($result)
		{
			Session::flash('notice', '更新処理が完了しました。');
			return redirect('sale/department/lists');
		}
		else
		{
			Session::flash('notice', '更新処理に失敗しました。');
			return redirect('sale/department/edit/'. $id);
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
