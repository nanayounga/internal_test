<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMinutesDetails extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('minutes_details', function(Blueprint $table)
		{
			$table->increments('minutes_detail_id');
			$table->integer('minutes_group_id');
                        $table->text('minutes_detail_text');
                        $table->string('minutes_detail_agenda');
                        $table->string('user_id');
                        $table->string('minutes_detail_user_name');
			$table->datetime('minutes_detail_date')->comment('実施日時');
			$table->datetime('created_at');
			$table->datetime('updated_at');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('minutes_details');
	}

}
