<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaidVacationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('paid_vacations', function(Blueprint $table)
		{
			$table->increments('vacation_id');			
			$table->date('vacation_date')->default(NULL);			                        
			$table->enum('vacation_type', ['AL', 'SL', 'PL', 'CL', 'UL'])->default('AL');
			$table->text('vacation_reason')->nullable();
			$table->integer('vacation_confirm_by')->unsigned();
			$table->enum('vacation_status', ['waitting','approved', 'unapproved','cancel'])->default('waitting');
			$table->softDeletes();
			$table->timestamps();

			$table->integer('user_id')->unsigned();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		   // Schema::disableForeignKeyConstraints();            
			Schema::dropIfExists('paid_vacations');
		   // Schema::enableForeignKeyConstraints();  
	}

}
