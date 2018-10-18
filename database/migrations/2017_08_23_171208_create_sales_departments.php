<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesDepartments extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sales_departments', function(Blueprint $table)
		{
			$table->increments('sales_department_id');
			$table->string('sales_department_name');
			$table->softDeletes();
			$table->timestamps();
		});
		DB::statement("ALTER TABLE sales_departments COMMENT '売上管理で使用する部署名'");
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sales_departments');
	}

}
