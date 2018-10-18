<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnFlagSalesDepartment extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('sales_departments', function (Blueprint $table) {
		$table->tinyInteger('sales_department_old_flag')
			->unsigned()
			->default(0)
			->comment('1: 売上表に表示しない')
			->after('sales_department_name');
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
			$table->dropColumn('sales_department_old_flag');
		});
	}

}
