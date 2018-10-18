<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

	/**
	 * Auto generated seed file
	 *
	 * @return vopermission_id
	 */
	public function run()
	{
		DB::statement('SET FOREIGN_KEY_CHECKS=0;');

		\DB::table('permissions')->truncate();

		\DB::table('permissions')->insert(array (
			array (
				'permission_id' => 'manage_account',
				'permission_name' => 'Manage account',
				'permission_description' => '',
				'permission_type_id' => 1,
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			),		
			array (
				'permission_id' => 'view_account',
				'permission_name' => 'View User',
				'permission_description' => '',
				'permission_type_id' => 1,
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			),
		
			array (
				'permission_id' => 'create_account',
				'permission_name' => 'Create user',
				'permission_description' => '',
				'permission_type_id' => 1,
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			),
			
			array (
				'permission_id' => 'edit_account',
				'permission_name' => 'Edit user',
				'permission_description' => '',
				'permission_type_id' => 1,
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			),
			
			array (
				'permission_id' => 'edit_user_detail',
				'permission_name' => '社員詳細情報の編集',
				'permission_description' => '',
				'permission_type_id' => 1,
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			),
			
			array (
				'permission_id' => 'delete_account',
				'permission_name' => 'Delete User',
				'permission_description' => '',
				'permission_type_id' => 1,
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			),
			array (
				'permission_id' => 'manage_department',
				'permission_name' => 'Manage department',
				'permission_description' => '',
				'permission_type_id' => 2,
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			),		
			array (
				'permission_id' => 'view_department',
				'permission_name' => 'View Department',
				'permission_description' => '',
				'permission_type_id' => 2,
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			),
			
			array (
				'permission_id' => 'create_department',
				'permission_name' => 'Create Department',
				'permission_description' => '',
				'permission_type_id' => 2,
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			),
			
			array (
				'permission_id' => 'edit_department',
				'permission_name' => 'Edit Department',
				'permission_description' => '',
				'permission_type_id' => 2,
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			),
			
			array (
				'permission_id' => 'delete_department',
				'permission_name' => 'Delete Department',
				'permission_description' => '',
				'permission_type_id' => 2,
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			), 
			array (
				'permission_id' => 'manage_salary',
				'permission_name' => 'Manage Salary',
				'permission_description' => '',
				'permission_type_id' => 3,
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			),		
			array (
				'permission_id' => 'password_salary',
				'permission_name' => 'Password Salary',
				'permission_description' => '',
				'permission_type_id' => 3,
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			),		
			
			array (
				'permission_id' => 'view_salary',
				'permission_name' => 'View Salary',
				'permission_description' => '',
				'permission_type_id' => 3,
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			),			
		
			array (
				'permission_id' => 'edit_salary',
				'permission_name' => 'Edit Salary',
				'permission_description' => '',
				'permission_type_id' => 3,
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			),
			
			array (
				'permission_id' => 'view_permission',
				'permission_name' => 'View User Permission',
				'permission_description' => '',
				'permission_type_id' => 4,
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			),
			
			array (
				'permission_id' => 'edit_permission',
				'permission_name' => 'Edit User Permission',
				'permission_description' => '',
				'permission_type_id' => 4,
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			),			
		
			array (
				'permission_id' => 'manage_permission',
				'permission_name' => 'Permission Manage',
				'permission_description' => '',
				'permission_type_id' => 5,
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			),
			array (
				'permission_id' => 'manage_vacation',
				'permission_name' => 'Manage vacation',
				'permission_description' => '',
				'permission_type_id' => 6,
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			),		
			array (
				'permission_id' => 'view_vacation',
				'permission_name' => 'View user vacation',
				'permission_description' => '',
				'permission_type_id' => 6,
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			),
			
			array (
				'permission_id' => 'edit_vacation',
				'permission_name' => 'Edit user vacation',
				'permission_description' => '',
				'permission_type_id' => 6,
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			),
			array (
				'permission_id' => 'create_vacation',
				'permission_name' => 'Apply vacation',
				'permission_description' => '',
				'permission_type_id' => 6,
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			),
			array (
				'permission_id' => 'edit_sales_department',
				'permission_name' => '売上管理用 部署の編集',
				'permission_description' => '',
				'permission_type_id' => 8,
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			),
			array (
				'permission_id' => 'view_cost',
				'permission_name' => '経費と利益率の閲覧',
				'permission_description' => '',
				'permission_type_id' => 8,
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			),
			array (
				'permission_id' => 'edit_cost',
				'permission_name' => '経費の登録',
				'permission_description' => '',
				'permission_type_id' => 8,
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			),
			array (
				'permission_id' => 'edit_sales',
				'permission_name' => '売上の追加・編集',
				'permission_description' => '',
				'permission_type_id' => 8,
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			),
		));

		DB::statement('SET FOREIGN_KEY_CHECKS=1;');
	}
}
