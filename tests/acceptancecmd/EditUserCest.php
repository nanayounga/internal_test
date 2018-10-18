<?php
class EditUserCest
{
	public $data_login = array('user_email'=>'nga@remcorp.jp','user_password'=>'123456');
	public $data_add = array(
							'user_id'=>324,
							'detail_gender'=>'男',
							'detail_birthday'=>'2000-05-25',
							'detail_zip_code'=>'123-456',
							'detail_district'=>12,
							'detail_city'=>'Tokyo',
							'detail_address1'=>'Dinh Tien Hoang',
							'detail_address2'=>'Nguyen Dinh Chieu',
							'detail_tel'=>'090-74859-88',
							'detail_emergency_tel'=>'090-74859-88',
							'detail_enter_company_date'=>'2017-01-02',
							'detail_koyo_kubun'=>'正社員',
							'detail_kisonenkin_bango'=>123,
							'detail_koyo_hojin'=>'autoTest',
							'detail_koyohoken_bango'=>123,
							'detail_my_number'=>456,
							'detail_shakai_hoken'=>'加入',
							'detail_shaho_shutokubi'=>'autoTest',
							'detail_shaho_kigo'=>456,
							'detail_shaho_bango'=>123,
							'detail_hokensha_bango'=>456,
							'bank_name'=>'autoTest',
							'bank_branch'=>'autoTest',
							'bank_type'=>'普通',
							'bank_number'=>123,
							'detail_remarks'=>'autoTest',
							'detail_number_vacation_day'=>789,
							'detail_dependent'=>'なし'
							);
	
    public function _before(AcceptanceTester $I)
    {
//		$I->login($this->data_login); 
    }

	public function _after(AcceptanceTester $I){}    

    /**
	 * 
	 * @param AcceptanceTester $I
	 */
    public function edit_user_detail(AcceptanceTester $I)
    {			
		$I->login($this->data_login); 

		$I->amOnPage('/user_detail/edit/'.$this->data_add['user_id']);
		
		$I->fillField("detail_gender", $this->data_add['detail_gender']);
		$I->fillField("detail_birthday", $this->data_add['detail_birthday']);
		$I->fillField("detail_zip_code", $this->data_add['detail_zip_code']);
		$I->fillField("detail_district", $this->data_add['detail_district']);
		$I->fillField("detail_city", $this->data_add['detail_city']);
		$I->fillField("detail_address1", $this->data_add['detail_address1']);
		$I->fillField("detail_address2", $this->data_add['detail_address2']);
		$I->fillField("detail_tel", $this->data_add['detail_tel']);
		$I->fillField("detail_emergency_tel", $this->data_add['detail_emergency_tel']);
		$I->fillField("detail_enter_company_date", $this->data_add['detail_enter_company_date']);
		$I->fillField("detail_koyo_kubun", $this->data_add['detail_koyo_kubun']);
		$I->fillField("detail_kisonenkin_bango", $this->data_add['detail_kisonenkin_bango']);
		$I->fillField("detail_koyo_hojin", $this->data_add['detail_koyo_hojin']);
		$I->fillField("detail_koyohoken_bango", $this->data_add['detail_koyohoken_bango']);
		$I->fillField("detail_my_number", $this->data_add['detail_my_number']);
		$I->fillField("detail_shakai_hoken", $this->data_add['detail_shakai_hoken']);
		$I->fillField("detail_shaho_shutokubi", $this->data_add['detail_shaho_shutokubi']);
		$I->fillField("detail_shaho_kigo", $this->data_add['detail_shaho_kigo']);
		$I->fillField("detail_shaho_bango", $this->data_add['detail_shaho_bango']);
		$I->fillField("detail_hokensha_bango", $this->data_add['detail_hokensha_bango']);
		$I->fillField("bank_name", $this->data_add['bank_name']);
		$I->fillField("bank_branch", $this->data_add['bank_branch']);
		$I->fillField("bank_type", $this->data_add['bank_type']);
		$I->fillField("bank_number", $this->data_add['bank_number']);
		$I->fillField("detail_remarks", $this->data_add['detail_remarks']);
		$I->fillField("detail_number_vacation_day", $this->data_add['detail_number_vacation_day']);
		$I->fillField("detail_dependent", $this->data_add['detail_dependent']);
		
		$I->click('submit');
    }	
}
