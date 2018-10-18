<?php
 
use Illuminate\Database\Seeder;
 
class UserPermissionsTableSeeder extends Seeder {
 
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('user_permissions')->truncate();
        				
		// `internal_manager`.`user_permissions`
		$user_permissions = array(
			array('user_id' => '324','permission_id' => 'edit_permission','created_at' => '2017-08-24 13:26:08','updated_at' => '2017-08-24 13:26:08'),
			array('user_id' => '324','permission_id' => 'edit_salary','created_at' => '2017-08-24 13:26:08','updated_at' => '2017-08-24 13:26:08'),
			array('user_id' => '324','permission_id' => 'manage_permission','created_at' => '2017-08-24 13:26:08','updated_at' => '2017-08-24 13:26:08'),
			array('user_id' => '324','permission_id' => 'view_permission','created_at' => '2017-08-24 13:26:08','updated_at' => '2017-08-24 13:26:08'),
			array('user_id' => '324','permission_id' => 'view_salary','created_at' => '2017-08-24 13:26:08','updated_at' => '2017-08-24 13:26:08'),
			array('user_id' => '328','permission_id' => 'edit_permission','created_at' => '2017-08-25 16:38:58','updated_at' => '2017-08-25 16:38:58'),
			array('user_id' => '328','permission_id' => 'edit_salary','created_at' => '2017-08-25 16:38:58','updated_at' => '2017-08-25 16:38:58'),
			array('user_id' => '328','permission_id' => 'manage_permission','created_at' => '2017-08-25 16:38:58','updated_at' => '2017-08-25 16:38:58'),
			array('user_id' => '328','permission_id' => 'password_salary','created_at' => '2017-08-25 16:38:58','updated_at' => '2017-08-25 16:38:58'),
			array('user_id' => '328','permission_id' => 'view_permission','created_at' => '2017-08-25 16:38:58','updated_at' => '2017-08-25 16:38:58'),
			array('user_id' => '328','permission_id' => 'view_salary','created_at' => '2017-08-25 16:38:58','updated_at' => '2017-08-25 16:38:58')
		);
		
        DB::table('user_permissions')->insert($user_permissions);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
 
}