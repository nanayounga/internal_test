<?php 
class PermissionCest
{
	public $dataLogin = array('user_email'=>'dung@remcorp.jp','user_password'=>'123456');
	public $dataAdd = array('permission_id'=>'auto_test',
							'permission_name'=>'unit test perm',
							'permission_description'=>'Test add permission',
							'permission_type'=>2);
    public function _before(){
		//$I->login($this->dataLogin); 
	}
    /**
	 * @Desc Test add new permission
	 * @param AcceptanceTester $I
	 */
    public function addPermission(AcceptanceTester $I)
    {
        //$I = new AcceptanceTester($scenario);
		$I->login($this->dataLogin); 
		$I->wantTo('Permission  page');		
		$I->amOnPage('/permission/list'); 
		$I->see('権限管理');
		
		$I->amOnPage('/permission/create');
		
		$I->fillField("permission_id", $this->dataAdd['permission_id']);
		$I->fillField("permission_name", $this->dataAdd['permission_name']);
		$I->fillField("permission_description", $this->dataAdd['permission_description']);
		$I->selectOption("permission_type", $this->dataAdd['permission_type']);				
		
		$I->click('submit');
		
		//$I->see($this->dataAdd['permission_id']);
    }
	
	/**
	 * @desc test delete a permission
	 * @param AcceptanceTester $I
	 */
    public function deletePermission(AcceptanceTester $I)
    {		 
		$I->login($this->dataLogin); 
		$I->wantTo('Permission  page');		
		$I->amOnPage('/permission/list'); 
		$I->see('権限管理');
						
		//$I->click('#delete-permission-'.$this->dataAdd['permission_id']);		
		//$I->click("button:contains('confirm')");
		$I->amOnPage('/permission/delete/'.$this->dataAdd['permission_id']);
		
		//$I->see('追加処理が完了しました。');
		$I->cantSee('auto_test');
		
    }
	/**
	 * @desc test update a permission
	 * @param AcceptanceTester $I
	 */
	public function updatePermission(AcceptanceTester $I){
		/* test update permission source 
		 */
	}
}