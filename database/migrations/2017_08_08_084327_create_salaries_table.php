<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalariesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('salaries', function(Blueprint $table)
		{
			$table->integer('user_id')->unique();
			$table->string('salary_basic')->comment('基本給');
			$table->string('salary_allowance')->comment('役職手当');
			$table->string('salary_child_allowance')->comment('家族（子供）手当');
			$table->string('salary_trans_allowance')->comment('通勤手当');			
			$table->string('salary_others')->comment('その他');						
			$table->datetime('created_at');
			$table->datetime('updated_at');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('salaries');
	}

}
