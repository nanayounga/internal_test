<?php
class ExampleFunctionCest
{
    public function _before(FunctionalTester $I)
    {
		$I->amOnPage('/login'); 
		$I->see('PAS GROUP');
		$I->wantTo('See permission type');
		$I->fillField("user_email", 'dung@remcorp.jp');
		$I->fillField("user_password", '123456');
		$I->click('submit');
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function addPermissionType(FunctionalTester $I)
    {		 
		$I->wantTo('Permission type page');		
		$I->amOnPage('/permission-type/list'); 
		$I->see('権限管理');
		
		$I->amOnPage('/permission-type/create');
		
		$I->fillField('permission_type_name', 'autoTest');
		
		$I->click('submit');
    }
}
