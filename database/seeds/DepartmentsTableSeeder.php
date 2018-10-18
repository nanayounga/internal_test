<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
		DB::table('departments')->truncate();

		// `internal_manager`.`departments`
                $departments = array(
                  array('department_id' => '1','department_name' => '制作部','department_parent_id' => '0','department_parent_id_all' => '','department_layer' => '0','created_at' => '2017-06-06 00:00:00','updated_at' => '2017-06-06 00:00:00'),
                  array('department_id' => '2','department_name' => 'web広告事業部','department_parent_id' => '0','department_parent_id_all' => '','department_layer' => '0','created_at' => '2017-06-06 00:00:00','updated_at' => '2017-06-06 00:00:00'),
                  array('department_id' => '17','department_name' => 'デザイン課','department_parent_id' => '1','department_parent_id_all' => ',1,','department_layer' => '1','created_at' => '2017-06-09 08:06:51','updated_at' => '2017-06-09 08:06:51'),
                  array('department_id' => '19','department_name' => 'システム開発部','department_parent_id' => '0','department_parent_id_all' => '','department_layer' => '0','created_at' => '2017-06-09 08:07:37','updated_at' => '2017-06-23 11:53:59'),
                  array('department_id' => '20','department_name' => 'デザイン課2','department_parent_id' => '17','department_parent_id_all' => ',1,17,','department_layer' => '2','created_at' => '2017-06-09 08:08:01','updated_at' => '2017-06-27 05:14:38'),
                  array('department_id' => '21','department_name' => 'システム開発ベトナム支部','department_parent_id' => '19','department_parent_id_all' => ',19,','department_layer' => '1','created_at' => '2017-06-10 04:04:23','updated_at' => '2017-06-26 02:50:04'),
                  array('department_id' => '23','department_name' => 'SEO課','department_parent_id' => '1','department_parent_id_all' => ',1,','department_layer' => '1','created_at' => '2017-06-10 04:13:39','updated_at' => '2017-06-10 04:13:39'),
                  array('department_id' => '24','department_name' => 'デザイン課3','department_parent_id' => '20','department_parent_id_all' => ',1,17,20,','department_layer' => '3','created_at' => '2017-06-10 05:18:08','updated_at' => '2017-06-27 05:14:42'),
                  array('department_id' => '25','department_name' => 'オフィスエム','department_parent_id' => '0','department_parent_id_all' => '','department_layer' => '0','created_at' => '2017-06-19 00:56:15','updated_at' => '2017-06-19 00:56:15'),
                  array('department_id' => '26','department_name' => 'Passend 人材派遣','department_parent_id' => '0','department_parent_id_all' => '','department_layer' => '0','created_at' => '2017-06-19 00:56:36','updated_at' => '2017-06-26 08:28:31'),
                  array('department_id' => '27','department_name' => 'SHS','department_parent_id' => '0','department_parent_id_all' => '','department_layer' => '0','created_at' => '2017-06-19 00:57:52','updated_at' => '2017-06-19 00:57:52'),
                  array('department_id' => '29','department_name' => 'SEO2','department_parent_id' => '23','department_parent_id_all' => ',1,23,','department_layer' => '2','created_at' => '2017-06-23 02:09:25','updated_at' => '2017-06-23 02:09:25'),
                  array('department_id' => '32','department_name' => 'TRY18運営事業部','department_parent_id' => '27','department_parent_id_all' => ',27,','department_layer' => '1','created_at' => '2017-06-23 06:52:24','updated_at' => '2017-06-23 06:52:24'),
                  array('department_id' => '33','department_name' => 'システム開発東京支部','department_parent_id' => '19','department_parent_id_all' => ',19,','department_layer' => '1','created_at' => '2017-06-26 06:45:52','updated_at' => '2017-06-26 06:46:30'),
                  array('department_id' => '35','department_name' => 'フォトスタジオ事業部','department_parent_id' => '0','department_parent_id_all' => '','department_layer' => '0','created_at' => '2017-06-26 07:06:55','updated_at' => '2017-06-26 07:06:55'),
                  array('department_id' => '36','department_name' => 'days博多リバレイン','department_parent_id' => '35','department_parent_id_all' => ',35,','department_layer' => '1','created_at' => '2017-06-26 07:08:15','updated_at' => '2017-06-26 07:08:15'),
                  array('department_id' => '39','department_name' => 'abc','department_parent_id' => '35','department_parent_id_all' => ',35,','department_layer' => '1','created_at' => '2017-08-01 08:58:11','updated_at' => '2017-08-01 08:58:11')
                );


		DB::table('departments')->insert($departments);
		DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
