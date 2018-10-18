<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class User_detail_log extends Model {

	protected $table = 'user_detail_logs';
	protected $primaryKey = 'user_detail_log_id';
	
	/**
	 * add user detail log
	 *
	 * @param   obj   $request  リクエストパラメーター
	 * @return  int   user_id
	 */
	public function add_user_detail_log($request)
	{		
		$params = $request->input();

		$user_detail_log = $this->where('user_detail_log_id', $params['user_detail_log_id'])->first();

		// 更新処理
				
		return $user_detail_log->save();
	}
	
	/**
	 * get log list
	 * @return array
	 */
	public function get_log_list()
	{
		
		$log_list = $this->select([
						'user_detail_logs.*', 
						'permission_types.permission_type_name', 
						'users.user_kanji_last_name',
						'users.user_kanji_first_name',
					])
					->join('permission_types', 'permission_types.permission_type_id', '=', 'user_detail_logs.permission_type_id')
					->join('users', 'users.user_id', '=', 'user_detail_logs.user_id_created')
					->orderBy('user_detail_logs.updated_at', 'DESC')
					->get();
		
		return $log_list;
	}
	
	/**
	 * get log list by user_id
	 * @param   integer $user_id
	 * @return array
	 */
	public function get_log_list_by_user_id($user_id)
	{		
		$log_list = $this->select([
						'user_detail_logs.*', 
						'permission_types.permission_type_name', 
						'users.user_kanji_last_name',
						'users.user_kanji_first_name',
					])
					->join('permission_types', 'permission_types.permission_type_id', '=', 'user_detail_logs.permission_type_id')
					->join('users', 'users.user_id', '=', 'user_detail_logs.user_id_created')
					->where('user_detail_logs.user_id', $user_id)
					->orderBy('user_detail_logs.updated_at', 'DESC')
					->get();
		
		return $log_list;
	}

}
