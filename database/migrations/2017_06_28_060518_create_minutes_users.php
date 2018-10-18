<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMinutesUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('minutes_users', function(Blueprint $table)
		{
			$table->integer('minutes_group_id');
			$table->integer('user_id');
			$table->datetime('created_at');
			$table->datetime('updated_at');
			$table->unique(['minutes_group_id', 'user_id']);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('minutes_users');
	}

}
