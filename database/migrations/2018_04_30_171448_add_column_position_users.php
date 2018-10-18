<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnPositionUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('user_details', function (Blueprint $table) {
			$table->string('detail_position')->after('detail_emergency_tel')->comment('役職名');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('user_details', function (Blueprint $table) {
			$table->dropColumn('detail_position');
		});
	}

}
