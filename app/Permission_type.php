<?php 
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permission_type extends Model
{
	use SoftDeletes;
	
	protected $table = 'permission_types';
	protected $primaryKey = 'permission_type_id';
	
	/**
	 * 
	 * @return type
	 */
	public function get_permission_type_list()
	{
		
		$permissions = $this->all();
		
		return $permissions;
	}
	
	/**
	 * 
	 * @return type
	 */
	public static function get_all_permission_types()
	{
		
		$results = [];
		$permission_types = self::all();
		
		if(!empty($permission_types))
		{
			foreach ($permission_types as $permission_type)
			{
				$results[$permission_type->permission_type_id] = $permission_type->permission_type_name;
			}
		}
		
		return $results;
	}	
	
	/**
	 * get permission type by id
	 *
	 * @param   integer $permission_type_id
	 * @return  array $permission_type
	 */
	public function get_permission_type_by_id($permission_type_id)
	{
		// 配下の部署を全て取得
		$permission_type = $this->select('*')
				->where('permission_type_id', $permission_type_id)
				->get();

		return $permission_type;
	}
}
