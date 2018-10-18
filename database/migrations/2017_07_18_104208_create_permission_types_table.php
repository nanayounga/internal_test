<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionTypesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('permission_types', function(Blueprint $table) {
			$table->increments('permission_type_id');
			$table->string('permission_type_name');
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
		Schema::dropIfExists('permission_types');
	   // Schema::enableForeignKeyConstraints();  

	}
}
