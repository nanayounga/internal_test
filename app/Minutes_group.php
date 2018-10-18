<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Session;

class Minutes_group extends Model {
	use SoftDeletes;

	protected $table = 'minutes_groups';
	protected $primaryKey = 'minutes_group_id';
	protected $dates = ['deleted_at'];


	/**
	 * 議事録最新更新日を現在時刻で更新
	 *
	 * @param
	 * @return  bool   クエリ実行結果
	 */
	public function update_detail_date($minutes_group_id)
	{
		$minutes_group = $this->find($minutes_group_id);
		$minutes_group->detail_updated_at = date('Y-m-d H:i:s');
		return $minutes_group->save();
	}

	/**
	 * グループの詳細内容を取得
	 *
	 * @param   int
	 * @return  obj   クエリ取得結果
	 */
	public function get_group_detail($minutes_group_id)
	{
		return $this->where('minutes_groups.minutes_group_id', $minutes_group_id)
				->join('minutes_users', 'minutes_users.minutes_group_id', '=', 'minutes_groups.minutes_group_id')
				->where('minutes_users.user_id', '=', Session::get('user_id'))
				->first();
	}
	/**
	 * グループ名から任意の文字列でLIKE検索
	 * ログインユーザーがグループのメンバーに入っているグループのみ取得
	 *
	 * @param   obj   $request  リクエストパラメーター
	 * @return  obj   クエリ取得結果
	 */
	public function search_group_name($request)
	{
		return $this->select(['minutes_groups.minutes_group_id', 'minutes_group_name', 'minutes_details.updated_at'])
				->join('minutes_users', 'minutes_users.minutes_group_id', '=', 'minutes_groups.minutes_group_id', 'LEFT')
				->join('minutes_details', 'minutes_details.minutes_group_id', '=', 'minutes_groups.minutes_group_id', 'LEFT')
				->where('minutes_users.user_id', '=', Session::get('user_id'))
				->where('minutes_group_name', 'LIKE', '%'. $request->text. '%')
				->orderBy('minutes_groups.updated_at', 'DESC')
				->orderBy('minutes_groups.created_at', 'DESC')
				->groupBy('minutes_groups.minutes_group_id')
				->take(30)
				->skip($request->offset)
				->get();
	}

	/**
	 * グループ情報の更新
	 *
	 * @param   obj   $request  リクエストパラメーター
	 * @param   int   $minutes_group_id
	 * @return  int   insertしたprimary key
	 */
	public function update_record($request, $minutes_group_id)
	{
		$params = $request->input();
		$minutes_group = $this->find($minutes_group_id);

		$minutes_group->minutes_group_name = $params['minutes_group_name'];
		$minutes_group->minutes_group_desc = $params['minutes_group_desc'];
		if ( $minutes_group->save() )
		{
			return $minutes_group->minutes_group_id;
		}
		else
		{
			return false;
		}
	}

	/**
	 * 新しいグループを1つ新規追加
	 *
	 * @param   obj   $request  リクエストパラメーター
	 * @return  int   insertしたprimary key
	 */
	public function add_new_record($request)
	{
		$params = $request->input();

		$this->minutes_group_name = $params['minutes_group_name'];
		$this->minutes_group_desc = $params['minutes_group_desc'];
		if ( $this->save() )
		{
			return $this->minutes_group_id;
		}
		else
		{
			return false;
		}
	}
}
