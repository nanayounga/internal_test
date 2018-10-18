<?php
 
use Illuminate\Database\Seeder;
 
class PermissionPasswordsTableSeeder extends Seeder {
 
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('permission_passwords')->truncate();
        				
		// `internal_manager`.`permission_passwords`
		$permission_passwords = array(
		  array('permission_password_id' => '1','permission_id' => 'password_salary','permission_password' => '$2y$10$homeNqG.jx9ZELli0CBpuulULJwAGoOeNyi6pt6YA6xui5BartlTO','created_at' => '2017-08-28 18:59:59','updated_at' => '2017-08-28 18:59:59','last_login_at' => '0000-00-00 00:00:00')
		);
		
        DB::table('permission_passwords')->insert($permission_passwords);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
 
}