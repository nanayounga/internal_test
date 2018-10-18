<?php 
namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission_password extends Model {
	
	protected $table = 'permission_passwords';
	protected $primaryKey = 'permission_password_id';
	
	/**
	 * 
	 * @return type
	 */
	public function get_permission_password_list() {
		
		$passwords = $this->all();
		
		return $passwords;
	}
	/**
	 * 
	 * @return type
	 */
	public static function get_all_permission_passwords() {
		
		$results = [];
		$permission_passwords = self::all();
		
		if( ! empty($permission_passwords))
		{
			foreach ($permission_passwords as $permission_password)
			{
				$results[$permission_password->permission_password_id] = $permission_password->permission_password;
			}
		}
		
		return $results;
	}	
	
	/**
	 * Add password for permission is salary
	 *
	 * @param   obj   $request  リクエストパラメーター
	 * @return  int   permission_password_id
	 */
	public function add_password($request)
	{
		$params = $request->input();

		// 追加処理		
		$this->permission_id		= config('const.password_salary');
		$this->permission_password  = bcrypt($params['permission_password']);		
		$this->save();
		return $this->permission_password_id;
	}
	
	/**
	 * get password for salary
	 *
	 * @param   integer $permission_id
	 * @return  string password
	 */
	public function get_password_from_permission_id($permission_id)
	{
		// 配下の部署を全て取得
		$password = $this->select('permission_password')
				->where('permission_id', config('const.password_salary'))
				->get()->toArray();

		return $password;
	}
}
