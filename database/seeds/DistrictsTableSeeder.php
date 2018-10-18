<?php

use Illuminate\Database\Seeder;

class DistrictsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
		DB::table('districts')->truncate();

		// `internal_manager`.`cities`
                $districts = array(
					array('district_id' => '1', 'district_name' => '北海道'),
					array('district_id' => '2', 'district_name' => '青森県'),
					array('district_id' => '3', 'district_name' => '岩手県'),
					array('district_id' => '4', 'district_name' => '宮城県'),
					array('district_id' => '5', 'district_name' => '秋田県'),
					array('district_id' => '6', 'district_name' => '山形県'),
					array('district_id' => '7', 'district_name' => '福島県'),
					array('district_id' => '8', 'district_name' => '茨城県'),
					array('district_id' => '9', 'district_name' => '栃木県'),
					array('district_id' => '10', 'district_name' => '群馬県'),
					array('district_id' => '11', 'district_name' => '埼玉県'),
					array('district_id' => '12', 'district_name' => '千葉県'),
					array('district_id' => '13', 'district_name' => '東京都'),
					array('district_id' => '14', 'district_name' => '神奈川県'),
					array('district_id' => '15', 'district_name' => '新潟県'),
					array('district_id' => '16', 'district_name' => '富山県'),
					array('district_id' => '17', 'district_name' => '石川県'),
					array('district_id' => '18', 'district_name' => '福井県'),
					array('district_id' => '19', 'district_name' => '山梨県'),
					array('district_id' => '20', 'district_name' => '長野県'),
					array('district_id' => '21', 'district_name' => '岐阜県'),
					array('district_id' => '22', 'district_name' => '静岡県'),
					array('district_id' => '23', 'district_name' => '愛知県'),
					array('district_id' => '24', 'district_name' => '三重県'),
					array('district_id' => '25', 'district_name' => '滋賀県'),
					array('district_id' => '26', 'district_name' => '京都府'),
					array('district_id' => '27', 'district_name' => '大阪府'),
					array('district_id' => '28', 'district_name' => '兵庫県'),
					array('district_id' => '29', 'district_name' => '奈良県'),
					array('district_id' => '30', 'district_name' => '和歌山県'),
					array('district_id' => '31', 'district_name' => '鳥取県'),
					array('district_id' => '32', 'district_name' => '島根県'),
					array('district_id' => '33', 'district_name' => '岡山県'),
					array('district_id' => '34', 'district_name' => '広島県'),
					array('district_id' => '35', 'district_name' => '山口県'),
					array('district_id' => '36', 'district_name' => '徳島県'),
					array('district_id' => '37', 'district_name' => '香川県'),
					array('district_id' => '38', 'district_name' => '愛媛県'),
					array('district_id' => '39', 'district_name' => '高知県'),
					array('district_id' => '40', 'district_name' => '福岡県'),
					array('district_id' => '41', 'district_name' => '佐賀県'),
					array('district_id' => '42', 'district_name' => '長崎県'),
					array('district_id' => '43', 'district_name' => '熊本県'),
					array('district_id' => '44', 'district_name' => '大分県'),
					array('district_id' => '45', 'district_name' => '宮崎県'),
					array('district_id' => '46', 'district_name' => '鹿児島県'),
					array('district_id' => '47', 'district_name' => '沖縄県')
				  );

		DB::table('districts')->insert($districts);
		DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
