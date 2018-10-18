<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissions extends Migration {

	 /**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('permissions', function(Blueprint $table) {
			$table->string('permission_id')->unique();
			$table->primary('permission_id');
			$table->string('permission_name');
			$table->text('permission_description');
			$table->integer('permission_type_id')->unsigned();
			$table->softDeletes();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//Schema::disableForeignKeyConstraints();            
		Schema::dropIfExists('permissions');
	   // Schema::enableForeignKeyConstraints();  
	}
}
