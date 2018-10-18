<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permission extends Model
{

	use SoftDeletes;

	protected $table = 'permissions';
	protected $primaryKey = 'permission_id';
	protected $fillable = ['permission_id', 'permission_name', 'permission_description', 'permission_type_id'];

	/**
	 * @desc get all permission in DB
	 * @return Object list permission
	 */
	public function get_permission_list()
	{
		$permissions = self::select(['permissions.*', 'permission_types.permission_type_name'])
				->join('permission_types', 'permissions.permission_type_id', '=', 'permission_types.permission_type_id')
				->orderBy('permissions.permission_type_id','DESC')
				->get();

		return $permissions;
	}
	/**
	 * @desc get all permissions in DB
	 * @return  array data
	 */
	public static function get_all_permissions()
	{
		$results = [];

		$permissions = self::select(['permissions.*', 'permission_types.*'])
				->join('permission_types', 'permissions.permission_type_id', '=', 'permission_types.permission_type_id')
				->get();
		if (!empty($permissions))
		{
			foreach ($permissions as $permission)
			{
				$data = [];
				$data['id'] = $permission->permission_id;
				$data['name'] = $permission->permission_name;
				$results[$permission->permission_type_id][] = $data;
			}
		}



		return $results;
	}

	/**
	 * @desc insert a permission to DB
	 * @param array $params
	 * @return permission object
	 */
	public function add_permission(array $params)
	{
		$data = array();

		$data['permission_id'] = trim($params['permission_id']);
		$data['permission_name'] = $params['permission_name'];
		$data['permission_type_id'] = $params['permission_type'];
		$data['permission_description'] = $params['permission_description'];

		return self::create($data);
	}

	/**
	 * @desc update a permission in DB 
	 * @param type $params
	 * @return permission object
	 */
	public function update_permission($id, array $params)
	{
		$data = array();

		$data['permission_id'] = $id;
		$data['permission_name'] = $params['permission_name'];
		$data['permission_type_id'] = $params['permission_type'];

		return self::updateOrCreate($data);
	}

}
