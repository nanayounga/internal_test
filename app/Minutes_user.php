<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;

class Minutes_user extends Model {

	protected $table = 'minutes_users';
	protected $primaryKey = ['minutes_group_id', 'user_id'];

	/**
	 * グループに登録されているユーザー情報を取得
	 *
	 * @param   obj   $request  リクエストパラメーター
	 * @param   obj   $minutes_group_id   minutes_groupsテーブルのprimary key
	 * @return  obj   クエリの取得結果
	 */
	public 	function get_user_in_group($minutes_group_id)
	{
		return $this->select([
					'users.user_id', 'user_kanji_last_name', 'user_kanji_first_name'
				])
				->where('minutes_users.minutes_group_id', $minutes_group_id)
				->join('users', 'minutes_users.user_id', '=',  'users.user_id')
				->groupBy('users.user_id')
				->get();
	}

	/**
	 * グループの更新時、選択されたユーザーの数をinsertする
	 * 先に$minutes_group_idのユーザーを全て削除してからinsertを実行する
	 *
	 * @param   obj   $request  リクエストパラメーター
	 * @param   obj   $minutes_group_id  minutes_groupsテーブルのprimary key
	 * @return  bool  クエリの結果
	 */
	public function update_record($request, $minutes_group_id)
	{
		// 削除実行
		$this->where('minutes_group_id', $minutes_group_id)->delete();

		$params = $request->input();

		foreach ($params['minutes_user_id'] as $user_id)
		{
			$insert_data[] = array(
				'minutes_group_id' => $minutes_group_id,
				'user_id' => $user_id,
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
			);
		}

		return $this->insert($insert_data);
	}

	/**
	 * グループの新規追加時、選択されたユーザーの数をinsertする
	 *
	 * @param   obj   $request  リクエストパラメーター
	 * @param   obj   $minutes_group_id  minutes_groupsテーブルのprimary key
	 * @return  bool  クエリの結果
	 */
	public function add_new_record($request, $minutes_group_id)
	{
		$params = $request->input();

		if (! empty($params['minutes_user_id']))
		{
			foreach ($params['minutes_user_id'] as $user_id)
			{
				$insert_data[] = array(
					'minutes_group_id' => $minutes_group_id,
					'user_id' => $user_id,
					'created_at' => date('Y-m-d H:i:s'),
					'updated_at' => date('Y-m-d H:i:s'),
				);
			}
		}

		// ログインユーザーは強制追加
		$insert_data[] = array(
				'minutes_group_id' => $minutes_group_id,
				'user_id' => Session::get('user_id'),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
		);

		return $this->insert($insert_data);
	}
}
