<?php

use Illuminate\Database\Seeder;

class SalesDepartmentsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::statement('SET FOREIGN_KEY_CHECKS=0;');
		DB::table('sales_departments')->truncate();

		$sales_departments = array(
			array(
				'sales_department_id' =>1,
				'sales_department_name' =>'オフィスエム',
				'deleted_at' => NULL,
				'created_at' => '2017-08-28 05:53:42',
				'updated_at' => '2017-08-28 05:53:42'
			),
			array(
				'sales_department_id' =>2,
				'sales_department_name' =>'SHS（派遣・求人）',
				'deleted_at' => NULL,
				'created_at' => '2017-08-28 05:53:55',
				'updated_at' => '2017-08-28 07:02:26'
			),
			array(
				'sales_department_id' =>3,
				'sales_department_name' =>'DAYS',
				'deleted_at' => NULL,
				'created_at' => '2017-08-28 05:54:00',
				'updated_at' => '2017-08-28 05:54:00'
			),
			array(
				'sales_department_id' =>4,
				'sales_department_name' =>'制作部',
				'deleted_at' => NULL,
				'created_at' => '2017-08-28 05:54:06',
				'updated_at' => '2017-08-28 05:54:13'
			),
			array(
				'sales_department_id' =>5,
				'sales_department_name' =>'WEB広告事業部',
				'deleted_at' => NULL,
				'created_at' => '2017-08-28 07:02:32',
				'updated_at' => '2017-08-28 07:02:32'
			),
			array(
				'sales_department_id' =>6,
				'sales_department_name' =>'人材紹介事業部 ',
				'deleted_at' => NULL,
				'created_at' => '2017-08-28 07:02:44',
				'updated_at' => '2017-08-28 07:02:44'
			),
			array(
				'sales_department_id' =>7,
				'sales_department_name' =>'フォトスタジオ事業部',
				'deleted_at' => NULL,
				'created_at' => '2017-08-28 07:02:53',
				'updated_at' => '2017-08-28 07:02:53'
			),
			array(
				'sales_department_id' =>8,
				'sales_department_name' =>'kazcom事業部',
				'deleted_at' => NULL,
				'created_at' => '2017-08-28 07:03:02',
				'updated_at' => '2017-08-28 07:03:02'
			),
			array(
				'sales_department_id' =>9,
				'sales_department_name' =>'福岡web(スピ・その他）',
				'deleted_at' =>NULL,
				'created_at' => '2017-08-28 07:03:08',
				'updated_at' => '2017-08-28 07:03:08'
			)
		);

		DB::table('sales_departments')->insert($sales_departments);
		DB::statement('SET FOREIGN_KEY_CHECKS=1;');
	}
}
