<?php 
/*
$I = new AcceptanceTester($scenario);
$I->wantTo('See Login page');
$I->amOnPage('/login'); 
$I->see('PAS GROUP');
$I->wantTo('See dashboard');
$I->fillField("user_email", 'dung@remcorp.jp');
$I->fillField("user_password", '123456');
$I->click('submit');
//$I->amLoggedAs(['user_email' => 'dung@remcorp.jp', 'user_password' => '123456']);

$I->amOnPage('/'); 
$I->see('Dashboard');
 */
class PaidVacationCest
{
	public $dataLogin = array('user_email'=>'dung@remcorp.jp','user_password'=>'123456',);
	public $dataVacation = array('vacation_date'=>'2017-09-14',
							'vacation_reason'=>'Personal reason');
    public function _before(){
		
	}
    public function _after(){}
	
	/**
	 * @desc Test user apply vacation and show list vacation of user login
	 * @param \AcceptanceTester $I
	 */
	public function add_vacation(\AcceptanceTester $I){
		$I->login($this->dataLogin); 
		
		$I->wantTo('Vacation list');		
		$I->amOnPage('/paid-vacation'); 
		$I->see('ツールを残す');		
		
		/* test create vacation */
		$I->fillField("vacation_date", $this->dataVacation['vacation_date']);
		$I->fillField("vacation_reason", $this->dataVacation['vacation_reason']);
		
		$I->click('submit');
		$I->amOnPage('/paid-vacation'); 
		
		$I->canSee('2017-09-14');	

	}
	/**
	 * @desc Test statistic of vacation of all users
	 * @param \AcceptanceTester $I
	 */
	public function admin_vacation(\AcceptanceTester $I){
		$I->login($this->dataLogin); 
		$I->wantTo('Vacation list all staff');		
		$I->amOnPage('/paid-vacation/users-vacation'); 
		$I->see('休暇管理');		
		
		/* test search user */
		$I->fillField("text_search", 'dung');				
		$I->click('filter');		
		$I->see('dung');	
		
		$I->click('#reset_filter');
		$I->selectOption("department", 25);
		$I->click('filter');		
		$I->see('濱野常務');	
	}
	/**
	 * @desc Test history of vacation of all users
	 * @param \AcceptanceTester $I
	 */
	public function history_vacation(\AcceptanceTester $I){
		$I->login($this->dataLogin); 
		$I->wantTo('Vacation list all staff');		
		$I->amOnPage('/paid-vacation/users-vacation-history'); 
		$I->see($this->dataVacation['vacation_date']);		
		
		/* test search user */
		$I->fillField("user_id", 325);				
		$I->click('filter');		
		$I->see('Dung');	
		
		$I->click('#reset_filter');
		$I->selectOption("vacation_status", 'waitting');
		$I->click('filter');		
		$I->see('Approve');	
		$I->see('UnApprove');	
	}
}
