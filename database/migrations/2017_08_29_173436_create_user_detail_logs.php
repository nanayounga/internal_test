<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDetailLogs extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_detail_logs', function(Blueprint $table)
		{			
			$table->increments('user_detail_log_id');			
			$table->integer('user_id_created');
			$table->integer('user_id');
			$table->integer('permission_type_id');			
			$table->text('user_detail_log_content');			
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
		Schema::drop('user_detail_logs');
	}

}
