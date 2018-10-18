<?php
class PermissionTypeCest
{
	public $dataLogin = array('user_email'=>'dung@remcorp.jp','user_password'=>'123456');
	
    public function _before(AcceptanceTester $I)
    {
		//$I->login($this->dataLogin); 
    }

	public function _after(AcceptanceTester $I){}    

    /**
	 * 
	 * @param AcceptanceTester $I
	 */
    public function addPermissionType(AcceptanceTester $I)
    {		 
		$I->login($this->dataLogin); 
		$I->wantTo('Permission type page');		
		$I->amOnPage('/permission-type/list'); 
		$I->see('権限管理');
		
		$I->amOnPage('/permission-type/create');
		
		$I->fillField('permission_type_name', 'autoTest');
		
		$I->click('submit');
    }
	
	/**
	 * 
	 * @param AcceptanceTester $I
	 */
    public function deletePermissionType(AcceptanceTester $I)
    {		 
		$I->login($this->dataLogin); 
		$I->wantTo('Permission type page');		
		$I->amOnPage('/permission-type/list'); 
		$I->see('権限管理');
						
		//$I->click('#delete-permtype-8');		
		//$I->click("button:contains('confirm')");
		$I->amOnPage('/permission-type/delete/10');
		
		$I->see('追加処理が完了しました。');
		$I->cantSee('autoTest');
    }
}
