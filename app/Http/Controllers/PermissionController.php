<?php

namespace App\Http\Controllers;

use Util;
use Session;
use App\Permission;
use App\Permission_type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\AccessController;

class PermissionController extends AccessController
{
	private $pass_data = array();
	
	public function __construct()
	{
		$this->middleware('user_auth');
		
		// 権限編集の権限がないログインアカウントの場合は403
		Util::has_permissions(['manage_permission']);
		$this->pass_data['user_perms'] = $this->user_permissions;
		
		$this->permission = new Permission();		
	}

	/**
	 * @Desc Defined array rules for valid permission
	 * 	 
	 * @return array rules
	*/
	public function rules()
	{
		$rules = [
			'permission_id' => 'required|unique:permissions',
			'permission_type' => 'required|exists:permission_types,permission_type_id'
		];

		return $rules;
	}

	/**
	 * @Desc Display a listing of permission 
	 *
	 * @return View permission list
	 */
	public function index()
	{				
		$permissions = $this->permission->get_permission_list();
		$this->pass_data['permissions'] = $permissions;

		return view('permission/list', $this->pass_data);		
	}
	
	/**
	 * @Desc Display view for permission create
	 * 
	 * @return View form for create permission
	*/
	public function create()
	{
		$permission_types = Permission_type::all();
		$this->pass_data['permission_types'] = $permission_types;
		
		return view('permission/add', $this->pass_data);
	}

	/**
	 * @Desc Store a permission
	 *
	 * @return View permission list if created success
	 */
	public function store(Request $request)
	{
		$validator = Validator::make($request->all(), $this->rules());

		if ($validator->fails())
		{
			Session::flash('fail_message', 'フォームが無効です。もう一度お試しください！');
			return redirect('permission/create')
							->withErrors($validator)
							->withInput();
		}
		else
		{
			// add vacation
			$result = $this->permission->add_permission($request->all());

			if ($result instanceof Paid_vacation)
			{
				Session::flash('success_message', '追加処理が完了しました。');
			}
			else
			{
				Session::flash('fail_message', '追加処理に失敗しました。');
			}

			return redirect('permission/list');
		}
	}

	/**
	 * @Desc Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id) {
		//
	}

	/**
	 * @Desc Show the form for editing the permission.
	 *
	 * @param  int  $id
	 * @return View edit permission
	*/
	public function edit($id)
	{
		$permission = Permission::find($id);
		if ($permission)
		{
			$this->pass_data['permission'] = $permission;
			
			$permission_types = Permission_type::all();
			$this->pass_data['permission_types'] = $permission_types;
			
		}
		else
		{
			Session::flash('fail_message', '追加処理に失敗しました。');
			return redirect('permission/list');
		}
		
		return view('permission/edit', $this->pass_data);
	}

	/**
	* @desc Update the permission in storage.
	*
	* @param  int  $id
	* @return Response permission list if success
	*/
	public function update(Request $request, $id)
	{
		$permission = Permission::find($id);
		if ($permission)
		{
			
			$validator = Validator::make($request->all(), ['permission_type' => 'required|exists:permission_types,permission_type_id']);

			if ($validator->fails())
			{
				Session::flash('fail_message', 'フォームが無効です。もう一度お試しください！');
				return redirect('permission/edit/'.$id)
								->withErrors($validator)
								->withInput();
			}
			else
			{
				$params = $request->only('permission_name', 'permission_type','permission_description');
				
				$permission->permission_name = $params['permission_name'];
				$permission->permission_type_id = $params['permission_type'];
				$permission->permission_description = $params['permission_description'];
				$result = $permission->save();

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
		
		return redirect('permission/list');
	}

	/**
	* @Desc Remove the Permission from storage.
	*
	* @param  int  $id
	* @return View permission list
	*/
	public function destroy($id)
	{
		$permission = Permission::find($id);
		
		if($permission)
		{
			$permission->delete();
			
			Session::flash('success_message', '追加処理が完了しました。');
		}
		else
		{
			Session::flash('fail_message', '追加処理に失敗しました。');
		}
		
		return redirect('permission/list');
	}
	/**
	* @Desc Ajax request get all user with specific permission
	* 
	* @param Request object, integer id of vacation
	* 
	* @return Json response of listing user
	*/
	public function users_permission(Request $request) {
		$message = '';
		$result = 'ok';
		$data = [];
		
		$perm_id = $request->get('perm_id');
		
		if(!empty($perm_id))
		{
			$users_perm_obj = \App\User::select([
							'users.user_id',
							'users.user_kanji_last_name',
							'users.user_kanji_first_name',
							'departments.department_name'
						])
						->join('departments','users.department_id', '=', 'departments.department_id', 'LEFT')
						->join('user_permissions','users.user_id', '=', 'user_permissions.user_id')
						->where('user_permissions.permission_id',$perm_id)
						->get();
			if($users_perm_obj)
			{
				$data = $users_perm_obj->toArray();
			}
			else
			{
				$message = 'リクエストは有効ではありません。';
				$result = 'fail';
			}			
		}
		else
		{
			$message = 'Invalid request !。';
		}								
		
		return response()->json(array('status' => $result, 'data' => $data, 'message' => $message));	
	}
}
