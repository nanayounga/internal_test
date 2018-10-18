<?php 
namespace App\Http\Controllers;

use Input;
use Util;
use Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\User;
use App\Permission;
use App\Salary;
use App\Permission_password;
use App\User_detail_log;
use App\Http\Controllers\AccessController;

use Validator;
use Session;

use Excel;

class SalaryController extends AccessController {
	private $pass_data = array();
	
	public function __construct()
	{
		$this->middleware('user_auth');
		// 権限編集の権限がないログインアカウントの場合は403
		Util::has_permissions('edit_cost');

		$this->user = new User();
		$this->salary = new Salary();
		$this->permission_password = new Permission_password();
		$this->user_detail_log = new User_detail_log();
	}

	/**
	 * Display a login page
	 *
	 * @return Response
	 */
	public function login($user_id)
	{
		Util::has_permissions('view_salary');

		// 会員情報の取得
		$this->pass_data['user'] = $this->user->get_user($user_id);
		
		$this->pass_data['editing_user_id'] = $user_id;
				
		return view('salary/login', $this->pass_data);
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
	public function create_password()
	{
		Util::has_permissions(['edit_salary', 'password_salary']);
		
		// 基本情報の取得
		$this->pass_data['user'] = User::find(Session::get('user_id'));
		if ($this->pass_data['user'] == NULL) abort(404);
				
		return view('salary/create_password', $this->pass_data);
	}
	
	/**
	 * Store password for salary
	 * method: post
	 * 
	 * @return Response
	 */
	public function store_password(Request $request)
	{
		Util::has_permissions(['edit_salary', 'password_salary']);
		
		// バリデーション
		$this->validate($request, [			
			'permission_password' => 'required|min:6|max:50|same:permission_password_confirm',
			'permission_password_confirm' => 'required|min:6|max:50',			
		]);

		// usersテーブルへユーザー情報を新規追加		
		$query = Permission_password::find(1);
		$query->permission_id		= config('const.password_salary');
		$query->permission_password  = bcrypt($request['permission_password']);	
		$query_result = $query->update();

		if ($query_result)
		{
			Session::flash('notice', '追加処理が完了しました。');
			return redirect('user/search');
		}
		else
		{
			Session::flash('notice', '追加処理に失敗しました。');
			return redirect('salary/create_password');
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
		Util::has_permissions('view_salary');
		if (Session::get('is_login_salary') !== NULL)
		{
			$this->pass_data['user'] = User::find(Session::get('user_id'));
			if ($this->pass_data['user'] == NULL) abort(404);
		
			$arr_db = Salary::select([
					'salaries.*', 'salaries.created_at as salary_created_at', 'salaries.updated_at as salary_updated_at',
					'users.user_kanji_last_name', 'users.user_kanji_first_name', 'users.user_email'
				])
				->where('salaries.user_id', $id)
				->join('users', 'users.user_id', '=', 'salaries.user_id', 'LEFT')
				->first();
			
			$arr_salary = $arr_db['attributes'];
			$arr_data = array();
			
			$arr_data								= $arr_salary;
			$arr_data['user_id']					= $arr_salary['user_id'];
			$arr_data['salary_basic']				= Util::encode_decode($arr_salary['salary_basic']);
			$arr_data['salary_allowance']			= Util::encode_decode($arr_salary['salary_allowance']);
			$arr_data['salary_child_allowance']		= Util::encode_decode($arr_salary['salary_child_allowance']);
			$arr_data['salary_trans_allowance']		= Util::encode_decode($arr_salary['salary_trans_allowance']);
			$arr_data['salary_others']				= Util::encode_decode($arr_salary['salary_others']);

			$this->pass_data['salary'] = $arr_data;

			//-- begin get salary log
			$log_list = $this->user_detail_log->get_log_list_by_user_id($id);
			
			$arr_user = $this->user->get_user_info_by_id($id);
			
			foreach ($log_list as $key=>$arr_data)
			{
				$arrContent = json_decode($arr_data['user_detail_log_content']);
				$arr_decode = array();

				foreach ($arrContent as $field=>$value)
				{
					if ($field != 'user_id')
					{
						$arr_decode["$field"] = Util::encode_decode($value);
					}
					else
					{
						$arr_decode["$field"] = "<a href='/user_detail/edit/". $value ."'>" . $arr_user[0]['user_kanji_last_name'] . $arr_user[0]['user_kanji_first_name'] . "</a>";
					}
				}

				$log_list[$key]['user_detail_log_content'] = $arr_decode;
			}

			$this->pass_data['log_list'] = $log_list;
			//-- end get salary log

			return view('salary/show', $this->pass_data);
		}	
		else
		{
			return redirect('salary/login/' . $id);
		}
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		Util::has_permissions('edit_salary');
		if (Session::get('is_login_salary') !== NULL)
		{
			// 基本情報の取得
			$this->pass_data['user'] = User::find($id);
			if ($this->pass_data['user'] == NULL) abort(404);

			// 詳細情報
			$this->pass_data['salary'] = Salary::find($id);	
			$this->pass_data['salary']['salary_basic']				= Util::encode_decode($this->pass_data['salary']['salary_basic']);
			$this->pass_data['salary']['salary_allowance']			= Util::encode_decode($this->pass_data['salary']['salary_allowance']);
			$this->pass_data['salary']['salary_child_allowance']	= Util::encode_decode($this->pass_data['salary']['salary_child_allowance']);
			$this->pass_data['salary']['salary_trans_allowance']	= Util::encode_decode($this->pass_data['salary']['salary_trans_allowance']);
			$this->pass_data['salary']['salary_others']				= Util::encode_decode($this->pass_data['salary']['salary_others']);
			if ($this->pass_data['salary'] == NULL) abort(404);
			
			return view('salary/edit', $this->pass_data);
		}	
		else
		{
			return redirect('salary/login/' . $id);
		}
	}
		
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  array  $request
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		Util::has_permissions('edit_salary');
		if (Session::get('is_login_salary') !== NULL)
		{
			Session::flash('update_salaries_id', $id);

			$this->validate($request, [
				'salary_basic'				=> 'required|numeric',
				'salary_allowance'			=> 'numeric',
				'salary_child_allowance'	=> 'numeric',
				'salary_trans_allowance'	=> 'numeric',
				'salary_others'				=> 'numeric'
			]);

			// 更新処理
			$query = Salary::find($id);			
			$query->salary_basic				= Util::encode_decode($request['salary_basic'], 1);
			$query->salary_allowance			= Util::encode_decode($request['salary_allowance'], 1);
			$query->salary_child_allowance		= Util::encode_decode($request['salary_child_allowance'], 1);
			$query->salary_trans_allowance		= Util::encode_decode($request['salary_trans_allowance'], 1);
			$query->salary_others				= Util::encode_decode($request['salary_others'], 1);
						
			//-- save log
			$arr_old_data = $query['original'];
			$dirty = $query->getDirty();
			
			$query_result = $query->update();

			if ($query_result)
			{
				//-- save log
				if (count($dirty) > 0)
				{
					$arr_log = array();
					$arr_log['user_id'] = $id;
					foreach ($dirty as $salary_key=>$salary_value)
					{
						$arr_log[$salary_key . '_old'] = $arr_old_data["$salary_key"];
						$arr_log[$salary_key] = $salary_value;
					}

					$this->user_detail_log->permission_type_id = config('const.salary_permission_type_id');
					$this->user_detail_log->user_id_created = Session::get('user_id');
					$this->user_detail_log->user_id = $id;
					$this->user_detail_log->user_detail_log_content = json_encode($arr_log);
					$this->user_detail_log->save();
				}
				
				Session::flash('notice', "更新処理が完了しました。給与と歴史を<a href='/salary/import_export'>エクスポート</a>しますか?");
				return redirect("salary/edit/{$id}");
			}
			else
			{
				Session::flash('notice', '更新処理に失敗しました。');
				return redirect("salary/edit/{$id}");
			}
		}
		else
		{
			return redirect('salary/login/' . $id);
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
		
	/**
	 * ログイン処理
	 *
	 * @return Response
	 */
	public function store(Request $request, $user_id)
	{
		Util::has_permissions('view_salary');
		// バリデーション
		$this->validate($request, [			
			'permission_password' => 'required|min:6|max:50',
		]);

		// ユーザー認証
		$password_salary = Permission_password::where('permission_id', config('const.password_salary'))
				->first([					
					'permission_password'
				]);

		if ($password_salary !== NULL && Hash::check($request->permission_password, $password_salary->permission_password))
		{			
			// 最終ログイン日時の更新
			Permission_password::where('permission_password_id', $password_salary->permission_password_id)
				->update(['last_login_at' => date('Y-m-d H:i:s')]);
			
			Session::put('is_login_salary', TRUE);
			Session::put('password_salary', $password_salary->permission_password);

			return redirect('salary/show/' . $user_id);
		}
		else
		{			
			// 認証失敗
			Session::flash('notice', 'メールアドレス、またはパスワードに誤りがあります。');
			return redirect('salary/login/' . $user_id);
		}
	}
	
	/**
	 * Export salary to CSV file
	 *
	 * @return Response
	 */
	public function export_salary($type)
	{		
		Util::has_permissions('edit_salary');
		if (Session::get('is_login_salary') !== NULL)
		{
			//-- begin export salary
			$data = $this->salary->get()->toArray();

			foreach ($data as $key=>$data_salary)
			{
				$data[$key]['user_id']					= $data_salary['user_id'];
				$data[$key]['salary_basic']				= Util::encode_decode($data_salary['salary_basic']);
				$data[$key]['salary_allowance']			= Util::encode_decode($data_salary['salary_allowance']);
				$data[$key]['salary_child_allowance']	= Util::encode_decode($data_salary['salary_child_allowance']);
				$data[$key]['salary_trans_allowance']	= Util::encode_decode($data_salary['salary_trans_allowance']);
				$data[$key]['salary_others']			= Util::encode_decode($data_salary['salary_others']);
			}

			Excel::create(date('Y-m-d_H:i').'_社員給与', function($excel) use ($data) {
				$excel->sheet('mySheet', function($sheet) use ($data)
				{
					$sheet->fromArray($data);
				});
			})->download($type);
			//-- end export salary

			// 基本情報の取得
			$this->pass_data['user'] = User::find(Session::get('user_id'));
			if ($this->pass_data['user'] == NULL) abort(404);

			$this->pass_data['success'] = "レコードを正常にエクスポートします。";

			return view('salary/import_export', $this->pass_data);
		}
		else
		{
			return redirect('user/search');
		}
	}
	
	/**
	 * Export salary log to CSV file
	 *
	 * @return Response
	 */
	public function export_log($type)
	{
		Util::has_permissions('edit_salary');
				
		if (Session::get('is_login_salary') !== NULL)
		{
			//-- begin export salary log
			$data_log = $this->user_detail_log->get()->toArray();

			foreach ($data_log as $key=>$data_salary_log)
			{
				$arr_log_content = json_decode($data_salary_log['user_detail_log_content']);
				$arr_changed = array();

				foreach ($arr_log_content as $key_content=>$value_content)
				{
					if ($key_content != 'user_id')
					{
						$arr_changed[$key_content] = Util::encode_decode($value_content);
					}
					else
					{
						$arr_changed[$key_content] = $value_content;
					}
				}
				$data_log[$key]['user_detail_log_content']	= json_encode($arr_changed);
			}

			Excel::create(date('Y-m-d_H:i').'_給与変更履歴', function($excel) use ($data_log) {
				$excel->sheet('mySheet', function($sheet) use ($data_log)
				{
					$sheet->fromArray($data_log);
				});
			})->download($type);
			//-- end export salary log

			// 基本情報の取得
			$this->pass_data['user'] = User::find(Session::get('user_id'));
			if ($this->pass_data['user'] == NULL) abort(404);

			$this->pass_data['success'] = "レコードを正常にエクスポートします。";

			return view('salary/import_export', $this->pass_data);
		}
		else
		{
			return redirect('user/search');
		}
	}
	
	/**
	 * Import salary from CSV file into database
	 *
	 * @return Response
	 */
	public function import_export()
	{		
		Util::has_permissions('edit_salary');
		if (Session::get('is_login_salary') !== NULL)
		{
			// 基本情報の取得
			$this->pass_data['user'] = User::find(Session::get('user_id'));
			if ($this->pass_data['user'] == NULL) abort(404);

			return view('salary/import_export', $this->pass_data);
		}
		else
		{
			return redirect('user/search');
		}
	}
	
	/**
	 * Import salary from CSV file into database
	 *
	 * @return Response
	 */
	public function do_import_salary(Request $request)
	{
		Util::has_permissions('edit_salary');
		if (Session::get('is_login_salary') !== NULL)
		{
			$this->pass_data['user'] = User::find(Session::get('user_id'));
			if ($this->pass_data['user'] == NULL) abort(404);

			// バリデーション
			$this->validate($request, [
				'import_file' => 'required',
			]);

			$path = Input::file('import_file')->getRealPath();
			$data = Excel::load($path, function($reader) {
			})->get();
			if ( ! empty($data) && $data->count())
			{
				foreach ($data as $key => $value)
				{
					$salary_basic			= ! empty($value->salary_basic) ? Util::encode_decode($value->salary_basic, 1) : "";
					$salary_allowance		= ! empty($value->salary_allowance) ? Util::encode_decode($value->salary_allowance, 1) : "";
					$salary_child_allowance = ! empty($value->salary_child_allowance) ? Util::encode_decode($value->salary_child_allowance, 1) : "";
					$salary_trans_allowance = ! empty($value->salary_trans_allowance) ? Util::encode_decode($value->salary_trans_allowance, 1) : "";
					$salary_others			= ! empty($value->salary_others) ? Util::encode_decode($value->salary_others, 1) : "";

					$query = Salary::find($value->user_id);
					$query->salary_basic				= $salary_basic;
					$query->salary_allowance			= $salary_allowance;
					$query->salary_child_allowance		= $salary_child_allowance;
					$query->salary_trans_allowance		= $salary_trans_allowance;
					$query->salary_others				= $salary_others;
					$query->updated_at					= date('Y-m-d H:i:s');

					$query_result = $query->update();
				}

				if ($query_result)
				{
					$this->pass_data['success'] = "インポートが完了しました。";
					return view('salary/import_export', $this->pass_data);
				}
			}
		}
		else
		{
			return redirect('user/search');
		}
	}
	
	/**
	 * Import salary log from CSV file into database
	 *
	 * @return Response
	 */
	public function do_import_log(Request $request)
	{
		Util::has_permissions('edit_salary');
		if (Session::get('is_login_salary') !== NULL)
		{
			$this->pass_data['user'] = User::find(Session::get('user_id'));
			if ($this->pass_data['user'] == NULL) abort(404);

			// バリデーション
			$this->validate($request, [
				'import_file' => 'required',
			]);

			$path = Input::file('import_file')->getRealPath();
			$data = Excel::load($path, function($reader) {
			})->get();
			if ( ! empty($data) && $data->count())
			{			
				foreach ($data as $key => $value)
				{
					$arr_log_content = json_decode($value['user_detail_log_content']);
					$arr_changed = array();
					if (count($arr_log_content) > 0)
					{
						foreach ($arr_log_content as $key_content=>$value_content)
						{
							if ($key_content != 'user_id')
							{
								$arr_changed[$key_content] = Util::encode_decode($value_content, 1);
							}
							else
							{
								$arr_changed[$key_content] = $value_content;
							}
						}
						$str_content_log	= json_encode($arr_changed);

						$query = User_detail_log::find($value->user_detail_log_id);
						$query->user_detail_log_content		= $str_content_log;
						$query->updated_at					= date('Y-m-d H:i:s');

						$query_result = $query->update();
					}
				}

				if ($query_result)
				{
					$this->pass_data['success_log'] = "インポートが完了しました。";
					return view('salary/import_export', $this->pass_data);
				}
			}
		}
		else
		{
			return redirect('user/search');
		}
	}
	
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy_log($id)
	{
		if (Session::get('is_login_salary') !== NULL)
		{
			$log = User_detail_log::find($id);

			if ($log)
			{
				$log->delete();

				Session::flash('success_message', '削除しました。');
			}
			else
			{
				Session::flash('fail_message', '削除に失敗しました。');
			}

			return redirect('salary/show/' . $log['user_id']);
		}
		else
		{
			return redirect('user/search');
		}
	}
}
