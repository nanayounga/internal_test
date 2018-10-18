<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionPasswordsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('permission_passwords', function(Blueprint $table)
		{			
			$table->increments('permission_password_id');			
			$table->string('permission_id');
			$table->string('permission_password', 60);
			$table->datetime('created_at');
			$table->datetime('updated_at');
			$table->datetime('last_login_at');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('permission_passwords');
	}

}
