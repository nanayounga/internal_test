<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartmentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('departments', function(Blueprint $table)
		{
			$table->increments('department_id');
			$table->string('department_name', 20);
			$table->integer('department_parent_id');
			$table->string('department_parent_id_all', 255);
			$table->integer('department_layer');
			$table->datetime('created_at');
			$table->datetime('updated_at');
		});
		DB::statement("ALTER TABLE departments COMMENT '部署'");
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('departments');
	}

}
