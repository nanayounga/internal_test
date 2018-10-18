<?php namespace App\Http\Middleware;

use Closure;
use DB;
use App\User;
use App\Auto_login;
use App\Libraries\UserAuthConcreteProcess;
use Config;
use Session;
use Request;
use Cookie;

class UserAuth {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		// $response = $next($request);

		$login_check = false;

		// ログイン用sessionデータのチェック
		if (Session::get('is_login') != NULL)
		{
			$login_check = true;

			// 自動ログイン用のtokenが30分以上更新されていなかったら、新しい値で更新する
			// 自動ログイン用のデータがあるかチェック
			if ($request->cookie(Config::get('const.cookie_auto_login')) != NULL)
			{

			}
		}
		// 自動ログイン用のcookieがあるかチェック
		elseif ($request->cookie(Config::get('const.cookie_auto_login')) != NULL)
		{
			// 自動ログイン用のcookieの値で認証チェック
			if ($auto_login_id = UserAuthConcreteProcess::check_auto_login())
			{
				// 自動ログイン認証成功
				$login_check = true;

				// sessionに保存するユーザーデータを取得
				$user = UserAuthConcreteProcess::get_session_user_info(Cookie::get(Config::get('const.cookie_user_id')));

				// sessionへデータの追加
				UserAuthConcreteProcess::set_login_sessions($user);

				// 自動ログイン用のCookieを保存
				$cookie_new_value = UserAuthConcreteProcess::set_auto_logins_cookie($user->user_id);

				// 自動ログイン用のDBデータを更新
				UserAuthConcreteProcess::update_auto_login_data($auto_login_id, $cookie_new_value);

				// 最終ログイン日時の更新
				User::where('user_id', $user->user_id)
					->update(['last_login_at' => date('Y-m-d H:i:s')]);

				// service worckerで使用用のログイン直後を示すcoockieを保存
				setcookie('after_login', 1, time() + 3600, '/');
			}
		}

		if ($login_check)
		{
			if (Cookie::get('request_url') != NULL)
			{
				// ログインページへ遷移する前のURLがcookieに有る場合、そのURLへリダイレクトする
				$request_url = Cookie::get('request_url');

				// cookieの削除
				setcookie('request_url', '', time() - 60, '/');

				return redirect($request_url);
			}
			return $next($request);
		}
		elseif (Request::path() == Config::get('const.login_url'))
		{
			return $next($request);
		}
		else
		{
			// ログインページへ遷移する前のURLをcookieへ保存する
			// ログイン後にこのURLへ自動リダイレクトさせるためにとっておく値
			Cookie::queue('request_url', Request::path());

			// ログイン画面へリダイレクト
			return redirect(Config::get('const.login_url'));
		}
	}

}
