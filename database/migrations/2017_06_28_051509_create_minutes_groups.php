<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMinutesGroups extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('minutes_groups', function(Blueprint $table)
		{
			$table->increments('minutes_group_id');
			$table->string('minutes_group_name', 40);
			$table->text('minutes_group_desc');
			$table->softDeletes();
			$table->dateTime('detail_updated_at')->comment('議事録の最新更新日付');
			$table->timestamps();
		});
		DB::statement("ALTER TABLE minutes_groups COMMENT '議事録グループ管理'");
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('minutes_groups');
	}

}
