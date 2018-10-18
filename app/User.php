<?php namespace App;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Hash;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;
	use SoftDeletes;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';
	protected $primaryKey = 'user_id';
	protected $dates = ['deleted_at'];

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	// protected $fillable = ['name', 'email', 'password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	// protected $hidden = ['password', 'remember_token'];

	public function permissions()
    {
        return $this->belongsToMany('App\Permission','user_permissions', 'user_id', 'permission_id');
    }
	/**
	 * 1人分の会員情報の取得
	 *
	 * @param   int    $user_id
	 * @return  array  クエリ実行結果
	 */
	public function get_user($user_id)
	{
		return $this->select('users.*')
				->where('users.user_id', $user_id)
				->first()
				->toArray();
	}

	/**
	 * ユーザーによる入力値から会員の検索
	 *
	 * @param   obj   $request  リクエストパラメーター
	 * @return  obj   会員情報
	 */
	public function search_user($request)
	{
		$text = $request->input('text');
		$offset = $request->input('offset');

		$user = User::select([
					'user_id', 'user_kanji_last_name', 'user_kanji_first_name', 'user_email', 'users.department_id',
					'department_name'
				])
				->join('departments', 'departments.department_id', '=', 'users.department_id', 'LEFT')
				->take(30)
				->skip($offset)
				->orderBy('users.created_at', 'desc')
				->groupBy('users.user_id');

		if (ctype_digit($text))
		{
			// 数値の場合 user_idを検索
			$user = $user->where('user_id', $text);
		}
		else
		{
			// 文字列の場合 会員名、Email、部署名から検索
			$user = $user->where(function ($query) use($text) {
						$query->orWhere('user_kanji_last_name', 'LIKE', '%'. $text. '%')
							->orWhere('user_kanji_first_name', 'LIKE', '%'. $text. '%')
							->orWhere('departments.department_name', 'LIKE', '%'. $text. '%')
							->orWhere('users.user_email', 'LIKE', '%'. $text. '%');
					});
		}
		return $user->get();
	}

	/**
	 * ユーザーを一人分更新
	 *
	 * @param   obj   $request  リクエストパラメーター
	 * @return  bool  クエリ結果
	 */
	public function update_user($request)
	{
		$params = $request->input();

		$user = $this->where('user_id', $params['user_id'])->first();

		// 更新処理
		$user->user_kanji_last_name = $params['user_kanji_last_name'];
		$user->user_kanji_first_name = $params['user_kanji_first_name'];
		$user->user_kata_last_name = $params['user_kata_last_name'];
		$user->user_kata_first_name = $params['user_kata_first_name'];
		$user->user_email     = $params['user_email'];
		$user->department_id  = $params['department_id'];
		if (! empty($params['user_password']))
		{
			$user->user_password = bcrypt($params['user_password']);
		}
		return $user->save();
	}

	/**
	 * ユーザーを一人分追加
	 *
	 * @param   obj   $request  リクエストパラメーター
	 * @return  int   user_id
	 */
	public function add_user($request)
	{
		$params = $request->input();

		// 追加処理
		$this->user_kanji_last_name = $params['user_kanji_last_name'];
		$this->user_kanji_first_name = $params['user_kanji_first_name'];
		$this->user_kata_last_name = $params['user_kata_last_name'];
		$this->user_kata_first_name = $params['user_kata_first_name'];
		$this->user_email     = $params['user_email'];
		$this->user_password  = bcrypt($params['user_password']);
		$this->department_id  = $params['department_id'];
		$this->save();
		return $this->user_id;
	}
	
	/**
	 * get user information by id
	 *
	 * @param   integer $user_id
	 * @return  array $user
	 */
	public function get_user_info_by_id($user_id)
	{
		// 配下の部署を全て取得
		$user = $this->select('*')
				->where('user_id', $user_id)
				->get();

		return $user;
	}
}
