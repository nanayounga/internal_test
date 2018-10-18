<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesCostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sales_costs', function(Blueprint $table)
		{
			$table->increments('sales_cost_id');
			$table->integer('sales_department_id');
			$table->string('sales_cost_year_month');
			$table->double('sales_cost_value')->comment('経費');
			$table->integer('user_id');
			$table->timestamps();
		});
		DB::statement("ALTER TABLE sales_costs COMMENT '部署毎の月の経費'");
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sales_costs');
	}

}
