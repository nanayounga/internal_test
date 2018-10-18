<?php namespace App\Libraries;
/**
 * ログイン認証によるsession管理や
 * 自動ログイン認証による処理全般を扱うライブラリ
 *
 */

use App\User;
use App\Auto_login;
// use App\Helpers\RandomValue;
use Config;
use Session;
use Request;
use Cookie;
use Hash;

class UserAuthConcreteProcess {
	/**
	 * auto_login用のcookieの値がDBの値と一致するか調べ、
	 * 一致していたら新しい値でDBを更新、一致しない、もしくはcookieが空だった場合、新規追加する
	 *
	 * @param   obj      $request  リクエストパラメーター
	 * @param   string   $cookie_new_value  新しく発行されたauto_login用のcookieの値
	 * @return  bool  クエリの結果
	 */
	public static function save_login_id($user, $cookie_new_value)
	{
		$data = [
			'auto_login_id' => $cookie_new_value,
			'user_id'       => $user->user_id,
		];

		$auto_login = Auto_login::where('user_id', $user->user_id)
				->where('auto_login_id', Cookie::get('foundation'))
				->first();

		if ($auto_login == NULL) 
		{
			// 新規追加
			$data['created_at'] = $data['updated_at'] = date('Y-m-d H:i:s');
			return Auto_login::insert($data);
		}
		else
		{
			// 更新
			return Auto_login::where('user_id', $user->user_id)
				->where('auto_login_id', Cookie::get('foundation'))
				->update($data);
		}
	}

	/**
	 * 自動ログイン用cookieデータをDBへ保存
	 *
	 * @param  string  $cookie_new_value
	 * @return 
	 */
	public static function update_auto_login_data($auto_login_id, $cookie_new_value)
	{
		Auto_login::where('user_id', Cookie::get(Config::get('const.cookie_user_id')))
				->where('auto_login_id', $auto_login_id)
				->update(['auto_login_id' => $cookie_new_value]);
	}

	/**
	 * sessionに保存するユーザーデータを取得
	 *
	 * @param  int  $user_id
	 * @return obj  ログインユーザーデータ
	 */
	public static function get_session_user_info($user_id)
	{
		return User::where('user_id', $user_id)
				->first([
					'user_id',
					'user_kanji_last_name',
					'user_kanji_first_name',
					'user_email',
					'user_password',
					'department_id'
				]);
	}

	/**
	 * 自動ログイン認証
	 *
	 * @param  
	 * @return string auto_login_id
	 */
	public static function check_auto_login()
	{
		$auto_logins = Auto_login::where('auto_logins.user_id', Cookie::get(Config::get('const.cookie_user_id')))
				->where('auto_logins.auto_login_id', Cookie::get(Config::get('const.cookie_auto_login')))
				->orderBy('updated_at', 'DESC')
				->first();

		return ($auto_logins == NULL)? false : $auto_logins->auto_login_id;

	}

	/**
	 * sessionへユーザーデータを保存する
	 *
	 * @param  obj  $user  ユーザーデータ
	 * @return 
	 */
	public static function set_login_sessions($user)
	{
		Session::put('is_login', TRUE);
		Session::put('user_id', $user->user_id);
		Session::put('user_name', $user->user_kanji_last_name. ' ' . $user->user_kanji_first_name);
		Session::put('user_email', $user->user_email);
		Session::put('department_id', $user->department_id);
	}

	/**
	 * 自動ログイン用のtokenをCookieに保存
	 *
	 * @param  string  $user_id
	 * @return string  $random_value cookieへ保存した値
	 */
	public static function set_auto_logins_cookie($user_id)
	{
		$random_value = \App\Helpers\RandomValue(180, 180);

		Cookie::queue(
			Config::get('const.cookie_auto_login'),
			$random_value,
			Config::get('const.token_minutes'),
			'/login'
		);

		Cookie::queue(
			Config::get('const.cookie_user_id'), 
			$user_id, 
			Config::get('const.token_minutes'), 
			'/login'
		);

		return $random_value;
	}

}
