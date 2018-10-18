<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDetails extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_details', function(Blueprint $table)
		{
			$table->integer('user_id')->unique();
			$table->enum('detail_gender', ['男', '女']);
			$table->datetime('detail_birthday');
			$table->string('detail_zip_code');
			$table->string('detail_address1')->comment('住所');
			$table->string('detail_address2')->comment('住所');
			$table->integer('detail_district')->comment('都道府県');
			$table->string('detail_city')->comment('市区町村');
			$table->string('detail_tel')->comment('電話番号');
			$table->string('detail_emergency_tel')->comment('緊急連絡先');
			$table->date('detail_enter_company_date')->comment('入社年月日');
			$table->enum('detail_koyo_kubun', ['正社員', 'アルバイト'])->comment('雇用区分');
			$table->bigInteger('detail_kisonenkin_bango')->comment('基礎年金番号');
			$table->string('detail_koyo_hojin')->comment('雇用法人');
			$table->bigInteger('detail_koyohoken_bango')->comment('雇用保険番号');
			$table->bigInteger('detail_my_number')->comment('マイナンバー');
			$table->enum('detail_shakai_hoken', ['加入', '未加入'])->comment('社会保険');
			$table->date('detail_shaho_shutokubi')->comment('社会保険資格取得年月日');	
			$table->bigInteger('detail_shaho_kigo')->comment('社会保険の記号');
			$table->bigInteger('detail_shaho_bango')->comment('社会保険の番号');
			$table->bigInteger('detail_hokensha_bango')->comment('保険者番号');
			$table->text('detail_remarks')->comment('備考欄');
			$table->enum('detail_dependent', ['あり', 'なし'])->comment('扶養家族');
			$table->integer('detail_number_vacation_day')->default('5')->comment('デフォルトの休暇日');
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
		Schema::drop('user_details');
	}

}
