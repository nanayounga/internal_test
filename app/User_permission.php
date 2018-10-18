<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_permission extends Model
{

	protected $table = 'user_permissions';
	protected $primaryKey = 'user_permission_id';

	/**
	 * @desc Update permission for a user
	 *
	 * @param   array  $permission_req  
	 * @param   int    $user_id
	 * @return  boolean value
	 */
	public function update_user_permission($permission_req, $user_id)
	{
		$delete = true;
		if ($this->where('user_id', $user_id)->count() > 0)
		{
			/* delete old user permission */
			$delete = $this->where('user_id', $user_id)->delete();
		}
		if ($delete)
		{
			foreach ($permission_req as $per)
			{
				$user_permission = new User_permission();

				$user_permission->user_id = $user_id;
				$user_permission->permission_id = $per;

				$user_permission->save();
			}
		}

		return true;
	}

}
