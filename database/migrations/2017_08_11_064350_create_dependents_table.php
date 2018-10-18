<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDependentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dependents', function(Blueprint $table)
		{			
			$table->increments('dependent_id');
			$table->integer('user_id');
			$table->string('dependent_kanji_last_name')->comment('姓（漢字');
			$table->string('dependent_kanji_first_name')->comment('名（漢字');
			$table->string('dependent_kata_last_name')->comment('姓（フリガナ）');
			$table->string('dependent_kata_first_name')->comment('名（フリガナ）');
			$table->enum('dependent_gender', ['男', '女'])->comment('性別');
			$table->enum('dependent_relative', ['配偶者', '子', '父', '母', '兄弟'])->comment('家族');
			$table->enum('dependent_social', ['扶養', '対象外'])->comment('社会保険の扶養');
			$table->enum('dependent_tax', ['扶養', '対象外'])->comment('税法上の扶養');
			$table->date('dependent_birthday')->comment('生年月日');
			$table->bigInteger('dependent_retire_code')->comment('基礎年金番号');
			$table->bigInteger('dependent_tel')->comment('マイナンバー');
			$table->enum('dependent_social_insurrance', ['加入', '未加入'])->comment('社会保険');
			$table->date('dependent_insurance_join_date')->comment('社会保険資格取得年月日');
			$table->bigInteger('dependent_insurance_card')->comment('社会保険の記号');
			$table->bigInteger('dependent_social_insurance_number')->comment('社会保険の番号');
			$table->enum('dependent_address', ['本人と同居', '他の住所に居住'])->comment('住所');
			$table->string('dependent_post_code')->comment('郵便番号');
			$table->string('dependent_post_address')->comment('住所');
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
		Schema::drop('dependents');
	}

}
