<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;

class Minutes_detail extends Model {

	protected $table = 'minutes_details';
	protected $primaryKey = 'minutes_detail_id';

	/**
	 * 議事録詳細を取得
	 * 自分が参加しているグループの議事録のみ取得
	 *
	 * @param   int   $minutes_detail_id
	 * @return  obj  クエリ結果
	 */
	public function get_details($minutes_detail_id)
	{
		return $this->where('minutes_detail_id', $minutes_detail_id)
				->join('minutes_groups', 'minutes_groups.minutes_group_id', '=', 'minutes_details.minutes_group_id')
				->join('minutes_users', 'minutes_users.minutes_group_id', '=', 'minutes_groups.minutes_group_id')
				->where('minutes_users.user_id', Session::get('user_id'))
				->whereNull('minutes_groups.deleted_at')
				->first();
	}

	/**
	 * 議事録の更新
	 *
	 * @param   obj   $request  リクエストパラメーター
	 * @param   int   $minutes_detail_id
	 * @return  bool   クエリ実行結果
	 */
	public function edit_details($request, $minutes_detail_id)
	{
		$minutes_detail = $this->find($minutes_detail_id);

		$minutes_detail->minutes_detail_text    = $request->minutes_detail_text;
		$minutes_detail->minutes_detail_agenda  = $request->minutes_detail_agenda;
		$minutes_detail->minutes_detail_date    = $request->minutes_detail_date;
		return $minutes_detail->save();
	}

	/**
	 * 任意のグループの議事録を取得
	 *
	 * @param   obj   $request  リクエストパラメーター
	 * @return  obj   取得結果
	 */
	public function get_group_detail($minutes_group_id)
	{
		return $this->select(['minutes_detail_date', 'minutes_detail_id', 'minutes_detail_user_name', 'users.user_id', 'minutes_detail_agenda'])
				->join('users', 'users.user_id', '=', 'minutes_details.user_id', 'LEFT')
				->where('minutes_group_id', $minutes_group_id)
				->orderBy('minutes_detail_date', 'DESC')
				->paginate(50);
	}

	/**
	 * 議事録を新規追加
	 *
	 * @param   obj   $request  リクエストパラメーター
	 * @return  int   insertした主キー
	 */
	public function add_details($request, $minutes_group_id)
	{
		$this->minutes_detail_text      = $request->minutes_detail_text;
		$this->minutes_detail_agenda    = $request->minutes_detail_agenda;
		$this->minutes_group_id         = $minutes_group_id;
		$this->minutes_detail_date      = $request->minutes_detail_date;
		$this->user_id                  = Session::get('user_id');
		$this->minutes_detail_user_name = Session::get('user_name');
		$this->save();
		return $this->minutes_detail_id;
	}

}
