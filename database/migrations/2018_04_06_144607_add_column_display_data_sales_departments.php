<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnDisplayDataSalesDepartments extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('sales_departments', function (Blueprint $table) {
			$table->dropColumn('sales_department_old_flag');
			$table->date('sales_department_start')->after('sales_department_name');;
			$table->date('sales_department_end')->after('sales_department_start');;
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('sales_departments', function (Blueprint $table) {
			$table->dropColumn('sales_department_start');
			$table->dropColumn('sales_department_end');
		});
	}

}
