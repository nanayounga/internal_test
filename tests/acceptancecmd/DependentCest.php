<?php
class DependentCest
{
	public $data_login = array('user_email'=>'nga@remcorp.jp','user_password'=>'123456');
	public $data_add = array(
							'user_id'=>324,
							'dependent_id'=>8,
							'dependent_kanji_last_name'=>'abc',
							'dependent_kanji_first_name'=>'def',
							'dependent_kata_last_name'=>'だろ',
							'dependent_kata_first_name'=>'だろ',
							'dependent_gender'=>'女',
							'dependent_relative'=>'配偶者',
							'dependent_social'=>'不要',
							'dependent_tax'=>'不要',
							'dependent_birthday'=>'2000-05-06',
							'dependent_retire_code'=>147,
							'dependent_tel'=>'123-456',
							'dependent_social_insurrance'=>'加入',
							'dependent_insurance_join_date'=>'2000-02-05',
							'dependent_insurance_card'=>258,
							'dependent_social_insurance_number'=>369,
							'dependent_address'=>'本人と同居',
							'dependent_post_code'=>'fasdf',
							'dependent_post_address'=>'asdfasdf',
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
    public function edit_dependent(AcceptanceTester $I)
    {			
		$I->login($this->data_login); 

		$I->amOnPage('/dependent/edit/' . $this->data_add['dependent_id']);
		
		$I->fillField("dependent_kanji_last_name", $this->data_add['dependent_kanji_last_name']);
		$I->fillField("dependent_kanji_first_name", $this->data_add['dependent_kanji_first_name']);
		$I->fillField("dependent_kata_last_name", $this->data_add['dependent_kata_last_name']);
		$I->fillField("dependent_kata_first_name", $this->data_add['dependent_kata_first_name']);
		$I->fillField("dependent_gender", $this->data_add['dependent_gender']);
		$I->fillField("dependent_relative", $this->data_add['dependent_relative']);
		$I->fillField("dependent_social", $this->data_add['dependent_social']);
		$I->fillField("dependent_tax", $this->data_add['dependent_tax']);
		$I->fillField("dependent_birthday", $this->data_add['dependent_birthday']);
		$I->fillField("dependent_retire_code", $this->data_add['dependent_retire_code']);
		$I->fillField("dependent_tel", $this->data_add['dependent_tel']);
		$I->fillField("dependent_social_insurrance", $this->data_add['dependent_social_insurrance']);
		$I->fillField("dependent_insurance_join_date", $this->data_add['dependent_insurance_join_date']);
		$I->fillField("dependent_insurance_card", $this->data_add['dependent_insurance_card']);
		$I->fillField("dependent_social_insurance_number", $this->data_add['dependent_social_insurance_number']);
		$I->fillField("dependent_address", $this->data_add['dependent_address']);
		$I->fillField("dependent_post_code", $this->data_add['dependent_post_code']);
		$I->fillField("dependent_post_address", $this->data_add['dependent_post_address']);
		
		$I->click('submit');
    }	
	
	/**
	 * 
	 * @param AcceptanceTester $I
	 */
    public function add_dependent(AcceptanceTester $I)
    {			
		$I->login($this->data_login); 

		$I->amOnPage('/dependent/create/' . $this->data_add['user_id']);
		
		$I->fillField("dependent_kanji_last_name", $this->data_add['dependent_kanji_last_name']);		
		$I->fillField("dependent_kanji_first_name", $this->data_add['dependent_kanji_first_name']);
		$I->fillField("dependent_kata_last_name", $this->data_add['dependent_kata_last_name']);
		$I->fillField("dependent_kata_first_name", $this->data_add['dependent_kata_first_name']);
		$I->fillField("dependent_gender", $this->data_add['dependent_gender']);
		$I->fillField("dependent_relative", $this->data_add['dependent_relative']);
		$I->fillField("dependent_social", $this->data_add['dependent_social']);
		$I->fillField("dependent_tax", $this->data_add['dependent_tax']);
		$I->fillField("dependent_birthday", $this->data_add['dependent_birthday']);
		$I->fillField("dependent_retire_code", $this->data_add['dependent_retire_code']);
		$I->fillField("dependent_tel", $this->data_add['dependent_tel']);
		$I->fillField("dependent_social_insurrance", $this->data_add['dependent_social_insurrance']);
		$I->fillField("dependent_insurance_join_date", $this->data_add['dependent_insurance_join_date']);
		$I->fillField("dependent_insurance_card", $this->data_add['dependent_insurance_card']);
		$I->fillField("dependent_social_insurance_number", $this->data_add['dependent_social_insurance_number']);
		$I->fillField("dependent_address", $this->data_add['dependent_address']);
		$I->fillField("dependent_post_code", $this->data_add['dependent_post_code']);
		$I->fillField("dependent_post_address", $this->data_add['dependent_post_address']);
		$I->fillField("user_id", $this->data_add['user_id']);
		
		$I->click('submit');
    }
	
	/**
	 * @desc test delete a dependent
	 * @param AcceptanceTester $I
	 */
//    public function delete_dependent(AcceptanceTester $I)
//    {		 
//		$I->login($this->data_login); 
//		
//		$I->amOnPage('/dependent/destroy/' . $this->data_add['dependent_id']);
//				
//		$I->cantSee('auto_test');
//		
//    }
}
