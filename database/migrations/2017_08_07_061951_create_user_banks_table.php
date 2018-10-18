<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserBanksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_banks', function(Blueprint $table)
		{
			$table->integer('user_id')->unique();
			$table->string('bank_name')->comment('銀行名');
			$table->string('bank_branch')->comment('支店名');
			$table->enum('bank_type', ['普通', '当座'])->comment('口座種類');
			$table->integer('bank_number')->comment('口座番号');			
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
		Schema::drop('user_banks');
	}

}
