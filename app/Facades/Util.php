<?php
namespace App\Facades;
use Illuminate\Support\Facades\Facade;
use App\User;
use Session;
use App\User_permission;

/**
 * @see \Illuminate\Cache\CacheManager
 * @see \Illuminate\Cache\Repository
 */
class Util extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
	protected static function getFacadeAccessor()
	{
	    return 'util';
	}

	public static function test()
	{
		print_r(User::all());
	}

	/**
	 *
	 * @param Array $permissions
	 * @param Boolean $and
	 * @return boolean
	 */
	public static function has_permissions($permissions, $and = TRUE)
	{

		$has_permission = self::check_permission($permissions, $and);

		if( ! $has_permission)
		{
			abort('403', '権限がありません。管理者にお問い合わせください。');
		}

		return TRUE;
	}
	/**
	 * @Desc check if user has permission or not
	 *
	 * @param array or string $permissions
	 * @param Boolean $and
	 * @return boolean
	 */
	public static function check_permission($permissions, $and = TRUE)
	{

		if(empty($permissions)) return TRUE;

		/* Check if it is not array then convert to array */
		if(!is_array($permissions)) $permissions = [$permissions];
		/*else filter unique for array */
		else $permissions = array_unique ($permissions);

		/* get user permissions */
		$data = User_permission::where('user_id', Session::get('user_id'))->get();

		if(!$data) return FALSE;

		$user_permission = $data->toArray();


		$user_perms = array();
		foreach ($user_permission as $perm) {
			if(in_array($perm['permission_id'], $permissions))
			{
				if($and)
				{
					$user_perms[] = $perm['permission_id'];
				}
				else
				{
					return TRUE;
				}
			}
		}

		$arr_check = array_diff($permissions, $user_perms);
		if(empty($arr_check))
			return TRUE;

		return FALSE;
	}
	/**
	 * @Desc get user name by user id
	 *
	 * @param int $user_id
	 *
	 * @return string $user_name
	 */
	public static function get_user_name($user_id)
	{
		$user_name = '';

		if(!empty($user_id)){
			$user = User::find(intval($user_id));

			if($user){
				$user_name = $user->user_kanji_last_name. ' '. $user->user_kanji_first_name;
			}
		}

		return $user_name;
	}

	/**
	 * Encode and decode salary
	 *
	 * @param  int  $money, integer $flag
	 * @return string
	 */
	public static function encode_decode($money, $flag=0)
	{
		$password = Session::get('password_salary');

		if ($flag == 1)
		{
			return $encrypt = openssl_encrypt($money, 'AES-128-ECB', $password);
		}
		else
		{
			return $decrypt = openssl_decrypt($money, 'AES-128-ECB', $password);
		}
	}
}