<?php

use Illuminate\Database\Seeder;

class PermissionTypesTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return 
	 */
	public function run()
	{
		DB::statement('SET FOREIGN_KEY_CHECKS=0;');
		DB::table('permission_types')->truncate();

		$components = [
			[
				'permission_type_id' => 1,
				'permission_type_name' => 'ユーザー情報',
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			],			
			[
				'permission_type_id' => 2,
				'permission_type_name' => '部署',
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			],		
			[
				'permission_type_id' => 3,
				'permission_type_name' => '給与',
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			],
			[
				'permission_type_id' => 4,
				'permission_type_name' => '権限編集',
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			],
			[
				'permission_type_id' => 5,
				'permission_type_name' => 'アクセス許可',
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			],
			[
				'permission_type_id' => 6,
				'permission_type_name' => '有給',
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			],
			[
				'permission_type_id' => 8,
				'permission_type_name' => '売上',
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			],
		];

		DB::table('permission_types')->insert($components);
		DB::statement('SET FOREIGN_KEY_CHECKS=1;');
	}
}
