<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserPermissionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_permissions', function(Blueprint $table)
		{			
			$table->integer('user_id')->unsigned();
			$table->string('permission_id');
			$table->foreign('permission_id')->references('permission_id')->on('permissions');
			$table->timestamps();
			$table->unique(['user_id', 'permission_id']);
		});		
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_permissions');
	}

}
