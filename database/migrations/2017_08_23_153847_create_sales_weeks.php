<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesWeeks extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sales_weeks', function(Blueprint $table)
		{
			$table->increments('sales_week_id');
			$table->enum('sales_week_some', ['1週目', '2週目', '3週目', '4週目', '5週目']);
			$table->double('sales_week_goal')->comment('売上目標');
			$table->double('sales_week_norma');
			$table->double('sales_week_result');
			$table->string('sales_week_year_month');
			$table->integer('user_id');
			$table->integer('sales_department_id');
			$table->timestamps();
		});
		DB::statement("ALTER TABLE sales_weeks COMMENT '週毎の目標売上や結果'");
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sales_weeks');
	}

}
