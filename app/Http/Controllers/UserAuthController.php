<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\User;
use App\Auto_login;
use Hash;
use Validator;
use Session;
use App\Libraries\UserAuthConcreteProcess;
use Cookie;
use Config;

class UserAuthController extends Controller {

	public function __construct() {
		$this->middleware('user_auth');
		$this->auto_logins = new Auto_login();
	}

	/**
	 *
	 *
	 * @return Response
	 */
	public function login()
	{
		// ログインしてたらトップへリダイレクト
		if (Session::get('is_login') !== NULL)
		{
			return redirect('/');
		}

		return view('user_auth.login');
	}

	/**
	 * ログイン処理
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		// バリデーション
		$this->validate($request, [
			'user_email' => 'required|email',
			'user_password' => 'required|min:6|max:50',
		]);

		// ユーザー認証
		$user = User::where('user_email', $request->user_email)
				->first([
					'user_id',
					'user_kanji_last_name',
					'user_kanji_first_name',
					'user_email',
					'user_password',
					'department_id'
				]);

		if ($user !== NULL && Hash::check($request->user_password, $user->user_password))
		{
			// 認証成功
			// sessionへデータの追加
			UserAuthConcreteProcess::set_login_sessions($user);

			// 自動ログイン用のCookieを保存
			$cookie_new_value = UserAuthConcreteProcess::set_auto_logins_cookie($user->user_id);

			// 自動ログイン用のデータをauto_loginsテーブルへ保存
			$query_result =UserAuthConcreteProcess::save_login_id($user, $cookie_new_value);

			// 最終ログイン日時の更新
			User::where('user_id', $user->user_id)
				->update(['last_login_at' => date('Y-m-d H:i:s')]);

			// service worckerで使用用のログイン直後を示すcoockieを保存
			setcookie('after_login', 1, time() + 3600, '/');

			return redirect('/');
		}
		else
		{
			// 認証失敗
			Session::flash('notice', 'メールアドレス、またはパスワードに誤りがあります。');
			return redirect('login')->withInput();
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function logout()
	{
		Session::flush();
		setcookie(Config::get('const.cookie_auto_login'), '', time() - 60, '/login');
		setcookie(Config::get('const.cookie_user_id'), '', time() - 60, '/login');
		return redirect('/');
	}


}
