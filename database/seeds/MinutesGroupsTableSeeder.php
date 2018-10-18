<?php

use Illuminate\Database\Seeder;

class MinutesGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
		DB::table('minutes_groups')->truncate();

		// `internal_manager`.`minutes_groups`
                $minutes_groups = array(
                  array('minutes_group_id' => '5','minutes_group_name' => 'なかよし','minutes_group_desc' => 'これは
                なかよしグループです。','created_at' => '2017-06-29 07:17:17','updated_at' => '2017-06-29 07:17:17','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '6','minutes_group_name' => 'システム課用','minutes_group_desc' => 'システム課専用
                グループ','created_at' => '2017-06-29 07:17:55','updated_at' => '2017-07-14 03:18:48','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '7','minutes_group_name' => 'なんでもない','minutes_group_desc' => 'なんでもない
                そんな感じ','created_at' => '2017-06-29 07:21:38','updated_at' => '2017-06-29 07:21:38','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '8','minutes_group_name' => 'Try18担当者','minutes_group_desc' => '担当者ミテーィング','created_at' => '2017-06-29 07:22:43','updated_at' => '2017-06-29 07:22:43','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '9','minutes_group_name' => 'ベトナムチャット','minutes_group_desc' => 'ベトナム人だけ','created_at' => '2017-06-29 07:50:26','updated_at' => '2017-06-29 07:50:26','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '11','minutes_group_name' => '自分が入ってる','minutes_group_desc' => 'そんな
                グループ','created_at' => '2017-06-30 06:02:16','updated_at' => '2017-06-30 06:02:16','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '912','minutes_group_name' => 'テスト0','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '913','minutes_group_name' => 'テスト1','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '914','minutes_group_name' => 'テスト2','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '915','minutes_group_name' => 'テスト3','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '916','minutes_group_name' => 'テスト4','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '917','minutes_group_name' => 'テスト5','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '918','minutes_group_name' => 'テスト6','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '919','minutes_group_name' => 'テスト7','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '920','minutes_group_name' => 'テスト8','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '921','minutes_group_name' => 'テスト9','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '922','minutes_group_name' => 'テスト10','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '923','minutes_group_name' => 'テスト11','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '924','minutes_group_name' => 'テスト12','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '925','minutes_group_name' => 'テスト13','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '926','minutes_group_name' => 'テスト14','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '927','minutes_group_name' => 'テスト15','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '928','minutes_group_name' => 'テスト16','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '929','minutes_group_name' => 'テスト17','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '930','minutes_group_name' => 'テスト18','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '931','minutes_group_name' => 'テスト19','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '932','minutes_group_name' => 'テスト20','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '933','minutes_group_name' => 'テスト21','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '934','minutes_group_name' => 'テスト22','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '935','minutes_group_name' => 'テスト23','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '936','minutes_group_name' => 'テスト24','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '937','minutes_group_name' => 'テスト25','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '938','minutes_group_name' => 'テスト26','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '939','minutes_group_name' => 'テスト27','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '940','minutes_group_name' => 'テスト28','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '941','minutes_group_name' => 'テスト29','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '942','minutes_group_name' => 'テスト30','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '943','minutes_group_name' => 'テスト31','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '944','minutes_group_name' => 'テスト32','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '945','minutes_group_name' => 'テスト33','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '946','minutes_group_name' => 'テスト34','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '947','minutes_group_name' => 'テスト35','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '948','minutes_group_name' => 'テスト36','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '949','minutes_group_name' => 'テスト37','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '950','minutes_group_name' => 'テスト38','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '951','minutes_group_name' => 'テスト39','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '952','minutes_group_name' => 'テスト40','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '953','minutes_group_name' => 'テスト41','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '954','minutes_group_name' => 'テスト42','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '955','minutes_group_name' => 'テスト43','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '956','minutes_group_name' => 'テスト44','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '957','minutes_group_name' => 'テスト45','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '958','minutes_group_name' => 'テスト46','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '959','minutes_group_name' => 'テスト47','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '960','minutes_group_name' => 'テスト48','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '961','minutes_group_name' => 'テスト49','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '962','minutes_group_name' => 'テスト50','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '963','minutes_group_name' => 'テスト51','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '964','minutes_group_name' => 'テスト52','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '965','minutes_group_name' => 'テスト53','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '966','minutes_group_name' => 'テスト54','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '967','minutes_group_name' => 'テスト55','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '968','minutes_group_name' => 'テスト56','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '969','minutes_group_name' => 'テスト57','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '970','minutes_group_name' => 'テスト58','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '971','minutes_group_name' => 'テスト59','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '972','minutes_group_name' => 'テスト60','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '973','minutes_group_name' => 'テスト61','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '974','minutes_group_name' => 'テスト62','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '975','minutes_group_name' => 'テスト63','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '976','minutes_group_name' => 'テスト64','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '977','minutes_group_name' => 'テスト65','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '978','minutes_group_name' => 'テスト66','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '979','minutes_group_name' => 'テスト67','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '980','minutes_group_name' => 'テスト68','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '981','minutes_group_name' => 'テスト69','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '982','minutes_group_name' => 'テスト70','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '983','minutes_group_name' => 'テスト71','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '984','minutes_group_name' => 'テスト72','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '985','minutes_group_name' => 'テスト73','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '986','minutes_group_name' => 'テスト74','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '987','minutes_group_name' => 'テスト75','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '988','minutes_group_name' => 'テスト76','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '989','minutes_group_name' => 'テスト77','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '990','minutes_group_name' => 'テスト78','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '991','minutes_group_name' => 'テスト79','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '992','minutes_group_name' => 'テスト80','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '993','minutes_group_name' => 'テスト81','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '994','minutes_group_name' => 'テスト82','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '995','minutes_group_name' => 'テスト83','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '996','minutes_group_name' => 'テスト84','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '997','minutes_group_name' => 'テスト85','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '998','minutes_group_name' => 'テスト86','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '999','minutes_group_name' => 'テスト87','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '1000','minutes_group_name' => 'テスト88','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '1001','minutes_group_name' => 'テスト89','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '1002','minutes_group_name' => 'テスト90','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '1003','minutes_group_name' => 'テスト91','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '1004','minutes_group_name' => 'テスト92','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '1005','minutes_group_name' => 'テスト93','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '1006','minutes_group_name' => 'テスト94','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '1007','minutes_group_name' => 'テスト95','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '1008','minutes_group_name' => 'テスト96','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '1009','minutes_group_name' => 'テスト97','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '1010','minutes_group_name' => 'テスト98','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '1011','minutes_group_name' => 'テスト99','minutes_group_desc' => 'テスト用グループです。','created_at' => '2017-06-30 06:51:17','updated_at' => '0000-00-00 00:00:00','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '1012','minutes_group_name' => 'DAYS担当者MTG','minutes_group_desc' => 'DAYS','created_at' => '2017-06-30 10:03:59','updated_at' => '2017-07-19 03:33:54','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '1013','minutes_group_name' => '社員旅行計画','minutes_group_desc' => '社員旅行に向けて','created_at' => '2017-07-03 00:57:51','updated_at' => '2017-07-03 00:57:51','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '1014','minutes_group_name' => 'システム開発部MTG','minutes_group_desc' => 'システム開発部で使うやつ','created_at' => '2017-07-12 04:26:46','updated_at' => '2017-07-18 04:57:51','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '1015','minutes_group_name' => '健康意識向上会','minutes_group_desc' => 'メンズエステや健康食品について語らう','created_at' => '2017-07-14 02:21:44','updated_at' => '2017-07-27 06:04:58','detail_updated_at' => '2017-07-27 06:04:58'),
                  array('minutes_group_id' => '1016','minutes_group_name' => '月例MTG','minutes_group_desc' => '月例用グループ','created_at' => '2017-07-14 07:51:45','updated_at' => '2017-07-27 14:05:52','detail_updated_at' => '2017-07-27 14:05:52'),
                  array('minutes_group_id' => '1017','minutes_group_name' => 'おしゃれぶ','minutes_group_desc' => 'おしゃれの話をする','created_at' => '2017-07-14 07:53:57','updated_at' => '2017-07-14 07:53:57','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '1018','minutes_group_name' => '経理','minutes_group_desc' => '経理ようグルーウ','created_at' => '2017-07-14 07:55:41','updated_at' => '2017-07-19 11:46:47','detail_updated_at' => '2017-07-19 11:46:47'),
                  array('minutes_group_id' => '1019','minutes_group_name' => '静岡メンバー','minutes_group_desc' => '静岡人だけ','created_at' => '2017-07-14 08:05:18','updated_at' => '2017-07-14 08:05:18','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '1020','minutes_group_name' => '静岡メンバー','minutes_group_desc' => '静岡人だけ','created_at' => '2017-07-14 08:05:43','updated_at' => '2017-07-14 08:05:43','detail_updated_at' => '0000-00-00 00:00:00'),
                  array('minutes_group_id' => '1021','minutes_group_name' => '個別面談','minutes_group_desc' => '個別面談','created_at' => '2017-07-20 04:11:49','updated_at' => '2017-07-20 04:11:49','detail_updated_at' => '0000-00-00 00:00:00')
                );


		DB::table('minutes_groups')->insert($minutes_groups);
		DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
