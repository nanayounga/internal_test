<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class User_bank extends Model {

	protected $table = 'user_banks';
	protected $primaryKey = 'user_id';
	
	/**
	 * add user bank
	 *
	 * @param   obj   $request  リクエストパラメーター
	 * @return  boolean
	 */
	public function add_user_bank($request)
	{		
		$params = $request->input();

		$user_bank = $this->where('user_id', $params['user_id'])->first();

		// 更新処理
				
		return $user_bank->save();
	}

}
