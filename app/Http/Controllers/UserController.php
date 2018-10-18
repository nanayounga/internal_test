<?php namespace App\Http\Controllers;

use DB;
use Util;
use Session;
use App\User;
use App\Salary;
use App\User_bank;
use App\Department;
use App\Permission;
use App\User_detail;
use App\Permission_type;
use App\User_permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller {
	private $pass_data = array();

	public function __construct()
	{
		$this->middleware('user_auth');
		$this->user = new User();
		$this->user_detail = new User_detail();
		$this->department = new Department();
		$this->user_bank = new User_bank();
		$this->salary = new Salary();
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
		Util::has_permissions('create_account');

		// 部署一覧取得
		$this->pass_data['departments'] = $this->department->get_all();
		return view('user/create', $this->pass_data);
	}

	/**
	 * Store a newly created resource in storage.
	 * method: post
	 * 会員情報の新規追加
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		Util::has_permissions('create_account');

		// バリデーション
		$this->validate($request, [
			'user_kanji_last_name' => 'required|max:20',
			'user_kanji_first_name' => 'required|max:20',
			'user_kata_last_name' => 'required|max:20',
			'user_kata_first_name' => 'required|max:20',
			'user_email' => 'required|email|unique:users,user_email',
			'user_password' => 'required|min:6|max:50|same:user_password_confirm',
			'user_password_confirm' => 'required|min:6|max:50',
			'department_id' => 'required|max:20',
		]);

		// usersテーブルへユーザー情報を新規追加
		$user_id = $this->user->add_user($request);

		if ($user_id)
		{
			// user_detailsテーブルへuser_id以外空データで新規追加
			$this->user_detail->user_id = $user_id;			
			$this->user_detail->save();
			
			$this->user_bank->user_id = $user_id;
			$this->user_bank->save();
			
			$this->salary->user_id = $user_id;
			$this->salary->save();

			Session::flash('notice', '追加処理が完了しました。');
			return redirect('user/search');
		}
		else
		{
			Session::flash('notice', '追加処理に失敗しました。');
			return redirect('user/create');
		}
	}

	public function lists()
	{
		$this->pass_data['users'] = User::select([
					'users.user_email', 'users.user_name', 'users.user_id',
					'departments.department_id', 'departments.department_name',
				])
				->join('departments', 'departments.department_id', '=', 'users.department_id', 'LEFT')
				->orderBy('users.created_at', 'DESC')
				->paginate(50);
		return view('user/lists', $this->pass_data);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$this->pass_data['user'] = User::select([
					'users.*', 'users.created_at as user_created_at', 'users.updated_at as user_updated_at',
					'departments.department_name',
					'user_details.detail_enter_company_date',
					'user_details.detail_position'
				])
				->where('users.user_id', $id)
				->join('departments', 'departments.department_id', '=', 'users.department_id', 'LEFT')
				->join('user_details', 'user_details.user_id', '=', 'users.user_id', 'LEFT')
				->first();
		if ($this->pass_data['user'] == NULL) abort('404');
		return view('user/show', $this->pass_data);
	}

	public function search()
	{		
		return view('user/search', $this->pass_data);
	}

	// 会員検索内容の取得
	public function get_search(Request $request)
	{
		if (! $request->ajax()) exit();

		$text = $request->input('text');

		// 会員情報の取得
		$user_data = $this->user->search_user($request);

		header("Content-Type: application/json; charset=utf-8");

		if ($user_data->count() == 0)
		{
			return json_encode('none');
		}
		else
		{
			return $user_data->toJson();
		}

		exit;
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		Util::has_permissions('edit_account');

		// 部署一覧取得
		$this->pass_data['departments'] = $this->department->get_all();

		// 会員情報の取得
		$this->pass_data['user'] = $this->user->get_user($id);

		// バリデーションで戻ってきた場合、入力値とDBの会員情報をマージする
		if (old('_token') != NULL)
		{
			$this->pass_data['user'] = array_merge($this->pass_data['user'], old());
		}

		return view('user/edit', $this->pass_data);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		Util::has_permissions('edit_account');

		Session::flash('update_user_id', $id);

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

		// 会員情報のupdate
		$query_result = $this->user->update_user($request);

		if ($query_result)
		{
			Session::flash('notice', '更新処理が完了しました。');
			return redirect("user/show/{$id}");
		}
		else
		{
			Session::flash('notice', '更新処理に失敗しました。');
			return redirect("user/edit/{$id}");
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
		User::destroy($id);
		Session::flash('notice', '削除しました。');
		return redirect("user/search");
	}
	
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit_permission($user_id)
	{
		Util::has_permissions('edit_permission');

		// ユーザー基本情報の取得
		$this->pass_data['user'] = User::find($user_id);

		
		$permission_of_user = [];
		$userPermissions = User_permission::where('user_id',$user_id)->get();
		foreach($userPermissions as $per){
			$permission_of_user[] = $per->permission_id;
		}
		//var_dump($permission_of_user);exit;
		$this->pass_data['permissions_of_user'] = $permission_of_user;
		
		$this->pass_data['permission_types'] = Permission_type::get_all_permission_types();
		// 権限の種類・初期値を取得
		//$this->pass_data['permission'] = Config::get('const.permission_type');
		$this->pass_data['permissions'] = Permission::get_all_permissions();
		
		// ユーザーの権限情報を取得
		$user_permissions = User_permission::where('user_id',$user_id)->get();

		if (!empty($user_permissions))
		{
			// view用にデータの整形
			foreach ($user_permissions as $key => $user_permission) {
				$this->pass_data['user_permissions'][] = $user_permission->permission_id;
			}
		}

		// バリデーションエラーで戻ってきた場合、入力値とDBの値をマージする
		/*if (old('_token') != NULL && is_array(old('permission')))
		{
			$this->pass_data['permission'] = array_merge($this->pass_data['permission'], old('permission'));
		}*/
		return view('user/edit_permission', $this->pass_data);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update_permission(Request $request, $user_id)
	{
		$permissions_req = $request->get('permissions',[]);
		
		if(!empty($permissions_req)){
			// バリデーション
			$this->validate($request, [
				'permissions' => 'required|exists:permissions,permission_id',			
			]);

			// pemissionテーブルへ新規追加 OR 編集
			$user_permission = new User_permission();
			
			$update = $user_permission->update_user_permission($permissions_req, $user_id);

			Session::flash('notice', '編集処理が完了しました。');
		}
		return redirect('user/edit_permission/' . $user_id);
	}

	/**
	 * csvのユーザーデータのインポート
	 *
	 * @param  
	 * @return 
	 */
	public function temp_csv_upload()
	{
		// 読み込み用にtest.csvを開きます。
		$f = fopen(base_path('public/pasgroup_user_data.csv'), "r");

		while($line = fgetcsv($f))
		{
			try
			{
				if (empty($line[0])) continue;

				DB::beginTransaction();
				$user = new User();
				$user->user_email = $line[0];
				$user->user_password = password_hash('remcorp', PASSWORD_DEFAULT);
				$user->user_kanji_last_name = $line[1];
				$user->user_kanji_first_name = $line[2];
				$user->user_kata_last_name = $line[3];
				$user->user_kata_first_name = $line[4];
				$user->save();

				DB::table('user_details')->insert([
					'user_id' => $user->user_id,
					'detail_gender' => $line[5],
					'detail_birthday' => $line[6],
					'detail_zip_code' => $line[7],
					'detail_district' => $line[8],
					'detail_city' => $line[9],
					'detail_address1' => $line[10],
					'detail_address2' => $line[11],
					'detail_tel' => $line[12],
					'detail_emergency_tel' => $line[13],
					'detail_enter_company_date' => $line[14],
					'detail_koyo_kubun' => $line[15],
					'detail_kisonenkin_bango' => $line[16],
					'detail_koyo_hojin' => $line[17],
					'detail_koyohoken_bango' => $line[18],
					'detail_my_number' => $line[19],
					'detail_shakai_hoken' => $line[20],
					'detail_shaho_shutokubi' => $line[21],
					'detail_shaho_kigo' => $line[22],
					'detail_shaho_bango' => $line[23],
					'detail_hokensha_bango' => $line[24],
					'detail_remarks' => $line[29],
					'created_at' => date('Y-m-d H:i:s'),
					'updated_at' => date('Y-m-d H:i:s'),
				]);

				DB::table('user_banks')->insert([
					'user_id' => $user->user_id,
					'bank_name' => $line[25],
					'bank_branch' => $line[26],
					'bank_type' => $line[27],
					'bank_number' => $line[28],
					'created_at' => date('Y-m-d H:i:s'),
					'updated_at' => date('Y-m-d H:i:s'),
				]);

				DB::table('salaries')->insert([
					'user_id' => $user->user_id,
					'created_at' => date('Y-m-d H:i:s'),
					'updated_at' => date('Y-m-d H:i:s'),
				]);
				DB::commit();

			} catch (Exception $e) {
				DB::rollback();
				echo "例外：", $e->getMessage(), "\n";
			}
		}
		fclose($f);
	}
}
