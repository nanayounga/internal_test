<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('user_id');
			$table->string('user_kanji_last_name')->comment('姓（漢字）');
			$table->string('user_kanji_first_name')->comment('名（漢字）');
			$table->string('user_kata_last_name')->comment('姓（カタカナ）');
			$table->string('user_kata_first_name')->comment('名（カタカナ）');
			$table->string('user_email')->unique();
			$table->string('user_password', 60);
			$table->integer('department_id');
			$table->rememberToken();
			$table->softDeletes();
			$table->datetime('last_login_at');
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
		//
		Schema::drop('users');
	}

}
