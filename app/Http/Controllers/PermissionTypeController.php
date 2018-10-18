<?php

namespace App\Http\Controllers;

use Util;
use Session;
use App\Permission_type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\AccessController;

class PermissionTypeController extends AccessController
{
	private $pass_data = array();
	
	public function __construct()
	{
		$this->middleware('user_auth');
		
		// 権限編集の権限がないログインアカウントの場合は403
		Util::has_permissions(['manage_permission']);
		
		$this->permission_type = new Permission_type();
	}

	/**
	 * @Desc Defined array rules for valid permission type
	 * 	 
	 * @return array rules
	*/
	public function rules()
	{
		$rules = [
			'permission_type_name' => 'required|unique:permission_types',
		];

		return $rules;
	}

	/**
	 * @Desc Display a listing of permission type
	 *
	 * @return View permission type list
	 */
	public function index()
	{
		$permission_types = $this->permission_type->get_permission_type_list();
		$this->pass_data['permission_types'] = $permission_types;

		return view('permission_type/list', $this->pass_data);
	}

	/**
	 * @Desc Display view for permission type create
	 * 
	 * @return View form for create permission type
	*/
	public function create()
	{

		return view('permission_type/add');
	}

	/**
	 * @Desc Store a permission type
	 *
	 * @return View permission type list if created success
	 */
	public function store(Request $request)
	{
		$validator = Validator::make($request->all(), $this->rules());

		if ($validator->fails())
		{
			Session::flash('fail_message', 'フォームが無効です。もう一度お試しください！');
			return redirect('permission-type/create')
							->withErrors($validator)
							->withInput();
		}
		else
		{
			// add vacation
			$permission_type_obj = new Permission_type();
			$permission_type_obj->permission_type_name = $request->get('permission_type_name');

			$result = $permission_type_obj->save();

			if ($result instanceof Paid_vacation)
			{
				Session::flash('success_message', '追加処理が完了しました。');
			}
			else
			{
				Session::flash('fail_message', '追加処理に失敗しました。');
			}

			return redirect('permission-type/list');
		}
	}

	/**
	* @Desc Show the form for editing the permission.
	*
	* @param  int  $id
	* @return View edit permission
	*/
	public function edit($id)
	{
		$permission_type = Permission_type::find($id);
		if ($permission_type)
		{
			$this->pass_data['permission_type'] = $permission_type;
		}
		else
		{
			Session::flash('fail_message', '追加処理に失敗しました。');
			return redirect('permission-type/list');
		}

		return view('permission_type/edit', $this->pass_data);
	}

	
	/**
	* @desc Update the permission type in storage.
	*
	* @param  int  $id
	* @return Response permission type list if success
	*/
	public function update(Request $request, $id)
	{
		$permission_type = Permission_type::find($id);
		if ($permission_type)
		{

			$validator = Validator::make($request->all(), ['permission_type_name' => 'required|unique:permission_types,permission_type_name,' . $id . ',permission_type_id']);

			if ($validator->fails())
			{
				Session::flash('fail_message', 'フォームが無効です。もう一度お試しください！');
				return redirect('permission-type/edit/' . $id)
								->withErrors($validator)
								->withInput();
			}
			else
			{
				$params = $request->only('permission_type_name');

				$permission_type->permission_type_name = $params['permission_type_name'];

				$result = $permission_type->save();

				if ($result)
				{
					Session::flash('success_message', '追加処理が完了しました。');
				}
				else
				{
					Session::flash('fail_message', '追加処理に失敗しました。');
				}
			}
		}
		else
		{
			Session::flash('fail_message', '追加処理に失敗しました。');
		}

		return redirect('permission-type/list');
	}

	/**
	* @Desc Remove the Permission type from storage.
	*
	* @param  int  $id
	* @return View permission list
	*/
	public function destroy($id)
	{
		$permission_type = Permission_type::find($id);

		if ($permission_type)
		{
			$permission_type->delete();

			Session::flash('success_message', '追加処理が完了しました。');
		}
		else
		{
			Session::flash('fail_message', '追加処理に失敗しました。');
		}

		return redirect('permission-type/list');
	}

}
