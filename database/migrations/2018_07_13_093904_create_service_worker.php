<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceWorker extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('service_workers', function(Blueprint $table)
		{
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')
				->references('user_id')
				->on('users')
				->onDelete('cascade')
				->onUpdate('cascade');
			$table->string('service_worker_token');
			$table->tinyInteger('service_worker_error_count')->comments('push通知のerror数');
			$table->primary(['user_id', 'service_worker_token']);
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
		Schema::drop('service_workers');
	}

}
