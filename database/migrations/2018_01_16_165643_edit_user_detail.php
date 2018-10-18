<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditUserDetail extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('user_details', function($table)
		{
			DB::statement('ALTER TABLE `user_details` CHANGE `detail_my_number` `detail_my_number` VARCHAR(20) NOT NULL COMMENT "マイナンバー"');
			DB::statement('ALTER TABLE `user_details` CHANGE `detail_shaho_kigo` `detail_shaho_kigo` VARCHAR(20) NOT NULL COMMENT "社会保険の記号"');
			DB::statement('ALTER TABLE `user_details` CHANGE `detail_shaho_bango` `detail_shaho_bango` VARCHAR(20) NOT NULL COMMENT "社会保険の番号"');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('user_details', function($table)
		{
			DB::statement('ALTER TABLE user_details CHANGE detail_my_number detail_my_number BIGINT(20) NOT NULL COMMENT "マイナンバー"');
			DB::statement('ALTER TABLE user_details CHANGE detail_shaho_kigo detail_shaho_kigo BIGINT(20) NOT NULL COMMENT "社会保険の記号"');
			DB::statement('ALTER TABLE user_details CHANGE detail_shaho_bango detail_shaho_bango BIGINT(20) NOT NULL COMMENT "社会保険の番号"');
		});
	}

}
