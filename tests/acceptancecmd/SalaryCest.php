<?php
class SalaryCest
{
	public $data_login = array('user_email'=>'nga@remcorp.jp','user_password'=>'123456');
	public $data_salary_login = array('permission_password'=>'123456Aa@');
	public $data_add = array(
							'user_detail_log_id'=>50,
							'user_id'=>324,							
							'salary_basic'=>'1000000',							
							'salary_allowance'=>'2000000',
							'salary_child_allowance'=>'3000000',
							'salary_trans_allowance'=>'4000000',
							'salary_others'=>'5000000'
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
    public function edit_salary(AcceptanceTester $I)
    {			
		$I->login($this->data_login); 
		$I->login_salary($this->data_salary_login); 

		$I->amOnPage('/salary/edit/'.$this->data_add['user_id']);
		
		$I->fillField("salary_basic", $this->data_add['salary_basic']);
		$I->fillField("salary_allowance", $this->data_add['salary_allowance']);
		$I->fillField("salary_child_allowance", $this->data_add['salary_child_allowance']);
		$I->fillField("salary_trans_allowance", $this->data_add['salary_trans_allowance']);
		$I->fillField("salary_others", $this->data_add['salary_others']);
		
		$I->click('submit');
    }
	
	/**
	 * @desc test delete a salary log
	 * @param AcceptanceTester $I
	 */
    public function delete_log(AcceptanceTester $I)
    {		 
		$I->login($this->data_login); 
		
		$I->amOnPage('/log/delete/' . $this->data_add['user_detail_log_id']);
				
		$I->cantSee('auto_test');		
    }
}
