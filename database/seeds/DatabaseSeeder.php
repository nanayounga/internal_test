<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		//Model::unguard();
				DB::statement('SET FOREIGN_KEY_CHECKS=0;');
				$this->call('PermissionTypesTableSeeder');
				$this->call('PermissionsTableSeeder');
				$this->call('UsersTableSeeder');
				$this->call('UserDetailsTableSeeder');
				$this->call('DepartmentsTableSeeder');
				$this->call('MinutesGroupsTableSeeder');
				$this->call('MinutesDetailsTableSeeder');
				$this->call('MinutesUsersTableSeeder');
				$this->call('SalesDepartmentsTableSeeder');
				// $this->call('CitiesTableSeeder');
				$this->call('SalariesTableSeeder');
				$this->call('UserBanksTableSeeder');
				$this->call('UserPermissionsTableSeeder');
				$this->call('PermissionPasswordsTableSeeder');
				DB::statement('SET FOREIGN_KEY_CHECKS=1;');
	}

}
