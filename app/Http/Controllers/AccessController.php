<?php
namespace App\Http\Controllers;

//use Util;
use App\User_permission;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class AccessController extends Controller {

	protected $user_permissions = null;


	public function __construct()
	{
		$this->middleware('user_auth');

	}

	/**
	 * @Desc check if user has permission return TRUE, If not redirect to 404 page
	 *
	 * @param string or array $permissions
	 * @param boolean $and
	 *
	 * @return boolean or redirect to 404 page
	 */
	protected function has_permissions($permissions, $and = TRUE)
	{

		$has_permission = $this->check_permission($permissions, $and);

		if(!$has_permission)
		{
			abort('403', '権限がありません。管理者にお問い合わせください。');
		}

		return TRUE;
	}
	/**
	 * @Desc check if user has permission or not
	 * @param string or array $permissions
	 * @return boolean
	 */
	protected function check_permission($permissions, $and = TRUE)
	{

		if(empty($permissions)) return TRUE;

		if(!is_array($permissions)) $permissions = [$permissions];
		else $permissions = array_unique($permissions);

		$this->get_user_permissions();

		if(empty($this->user_permissions))
			return FALSE;

		if($and)
		{
			return (count($permissions) === count(array_intersect($permissions, $this->user_permissions)));
		}
		else
		{
			return (count(array_intersect($permissions, $this->user_permissions)) > 0);
		}
	}
	/**
	 * @Desc get all permission of login user

	 * @return array permissions of user
	 */
	protected function get_user_permissions()
	{
		// if empty user_permission the get user permissions from DB
		if(empty($this->user_permissions)){
			$user_permission = User_permission::select('permission_id')->where('user_id', Session::get('user_id'))->get();

			if(!$user_permission) return NULL;

			$user_perms = $user_permission->toArray();
			foreach ($user_perms as $perm) {
				$this->user_permissions[] = $perm['permission_id'];
			}
		}


		return $this->user_permissions;
	}
}
