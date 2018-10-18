<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\User;
use App\Permission;
use App\User_detail;
use App\User_bank;
use App\District;
use App\Dependent;

use Validator;
use Session;
use Util;

class UserDetailController extends Controller {
	private $pass_data = array();

	public function __construct()
	{
		$this->middleware('user_auth');
		// 権限編集の権限がないログインアカウントの場合は403
		Util::has_permissions('edit_user_detail');

		$this->user = new User();
		$this->user_detail = new User_detail();
		$this->user_bank = new User_bank();
		$this->district = new District();
		$this->dependent = new Dependent();
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
		// 基本情報の取得
		$this->pass_data['user'] = User::find($id);
		if ($this->pass_data['user'] == NULL) abort(404);

		// 詳細情報
		$this->pass_data['user_detail'] = User_detail::find($id);
		if ($this->pass_data['user_detail'] == NULL) abort(404);
		
		$this->pass_data['user_bank'] = User_bank::find($id);
		if ($this->pass_data['user_bank'] == NULL) abort(404);
		
		$this->pass_data['districts'] = $this->district->get_all();
		if ($this->pass_data['districts'] == NULL) abort(404);
		
		$this->pass_data['dependents'] = $this->dependent->get_dependent_by_user_id($id);
		if ($this->pass_data['dependents'] == NULL) abort(404);
		
		return view('user_detail/edit', $this->pass_data);
	}
		
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		Session::flash('update_user_details_id', $id);
		$this->validate($request, [
			'detail_gender' => 'max:1',
			'detail_birthday' => 'max:10',
			'detail_zip_code' => 'max:8',
			'detail_address1' => 'max:50',
			'detail_city' => 'max:50',
			'detail_address2' => 'max:50',
			'detail_district' => 'max:50',
			'detail_tel' => 'max:14',
			'detail_emergency_tel' => 'max:14',
			'detail_position' => 'max:20',
			'detail_enter_company_date' => 'max:10',
			'detail_koyo_kubun' => 'max:20',
			'detail_kisonenkin_bango' => 'string|max:10000000000',
			'detail_koyo_hojin' => 'max:20',
			'detail_koyohoken_bango' => 'string|max:100000000000',
			'detail_shakai_hoken' => 'max:5',
			'detail_shaho_shutokubi' => 'max:10',
			'detail_shaho_kigo' => 'numeric|max:100000000000',
			'detail_shaho_bango' => 'numeric|max:100000000000',
			'detail_hokensha_bango' => 'string|max:100000000000',
			'detail_remarks' => 'max:3000',
			'detail_dependent' => 'max:3',
			'detail_my_number' => 'numeric|max:1000000000000',
			'detail_number_vacation_day' => 'numeric|max:100000000000',
		]);
		
		$query_result = $this->user_detail->update_record($request, $id);
		
		$query_bank = User_bank::find($id);			
		$query_bank->bank_name		= $request['bank_name'];
		$query_bank->bank_branch	= $request['bank_branch'];
		$query_bank->bank_type		= $request['bank_type'];
		$query_bank->bank_number	= $request['bank_number'];
		
		$query_bank_result = $query_bank->update();
		
		if ($query_result)
		{
			if ($request['detail_dependent'] == 'なし')
			{
				//-- delete all this person's dependent
				$this->dependent->delete_by_user_id($id);
			}
			Session::flash('notice', '更新処理が完了しました。');
			return redirect("user_detail/edit/{$id}");
		}
		else
		{
			Session::flash('notice', '更新処理に失敗しました。');
			return redirect("user_detail/edit/{$id}");
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
