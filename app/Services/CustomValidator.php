<?php namespace App\Services;

use Illuminate\Http\Request;
use App\User;
use App\Department;
use App\Sales_department;
use Session;
use Input;
use Util;

class CustomValidator extends \Illuminate\Validation\Validator
{
	public function validateTest($attribute,$value,$parameters){
		return $value == "foo";
	}

	// 売上表の入力で権限がない場合にfalseを返す
	public function validateEditSalesPermission($attribute,$value,$parameters){
		// 権限編集の権限がないログインアカウントの場合は403
		return (Util::check_permission('edit_sales')) ? TRUE : FALSE;
	}

	public function validateDuplicateSalesDepartmentName($attribute,$value,$parameters){
		$result = Sales_department::where('sales_department_name', $value)
				->where('sales_department_id', '!=', Input::input('sales_department_id'))
				->get();
		return ($result->count() == 0) ? TRUE : FALSE;
	}

	public function validateDuplicateEmailUpdate($attribute,$value,$parameters){
		$user = User::where('user_email', $value)
				->where('user_id', '!=', Session::get('update_user_id'))
				->get();
		return ($user->count() == 0) ? TRUE : FALSE;
	}

	public function validateDuplicateDepartmentName($attribute,$value,$parameters){
		$user = Department::where('department_name', $value)
				->where('department_id', '!=', Session::get('update_department_id'))
				->get();
		return ($user->count() == 0) ? TRUE : FALSE;
	}
}