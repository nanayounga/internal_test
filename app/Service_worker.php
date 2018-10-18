<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Service_worker extends Model {

	protected $table = 'service_workers';
	protected $primaryKey = 'service_worker_id';

	/**
	 * 新規追加
	 *
	 * @param   array   $insert_data
	 * @return  bool
	 */
	public function create_token($insert_data)
	{
		$this->user_id = $insert_data['user_id'];
		$this->service_worker_token = $insert_data['service_worker_token'];
		return $this->save();
	}

	/**
	 * 引数の$user_idと$tokenの組み合わせで存在のチェック
	 *
	 * @param   int      $user_id
	 * @param   string   $token
	 * @return  obj
	 */
	public function check_exist($user_id, $token)
	{
		return $this->select('user_id')
				->where('user_id', $user_id)
				->where('service_worker_token', $token)
				->first();
	}

	/**
	 * 引数の$user_idsと一致するレコードを全て取得
	 *
	 * @param   array   $user_ids
	 * @return  int
	 */
	public function get_tokens_by_user_ids($user_ids)
	{
		return $this->select('service_worker_token')
				->whereIn('user_id', $user_ids)
				->get();
	}

	/**
	 * 引数の$tokenと一致するレコードを削除
	 *
	 * @param   string   $token
	 * @return  bool
	 */
	public function delete_by_token($token)
	{
		return $this->where('service_worker_token', $token)->delete();
	}
}
