<?php


/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method \Codeception\Lib\Friend haveFriend($name, $actorClass = NULL)
 *
 * @SuppressWarnings(PHPMD)
*/
class AcceptanceTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;

   /**
    * Define custom actions here
    */
	public function login($params){
		$I = $this;
		$I->amOnPage('/login');
		try {
			$I->see('PAS GROUP');
			$I->wantTo('Login');
			$I->fillField("user_email",$params['user_email']);
			$I->fillField("user_password", $params['user_password']);
			$I->click('submit');
		} catch (Exception $e) {
			// Do this if it's not present.
			$I->see('Dashboard');
		}
	}
	
	/**
    * Define custom actions here
    */
	public function login_salary($params){
		$I = $this;
		$I->amOnPage('salary/login/324');
		try {
			$I->see('PAS GROUP');
			$I->wantTo('Login');
			$I->fillField("permission_password",$params['permission_password']);			
			$I->click('submit');
		} catch (Exception $e) {
			// Do this if it's not present.
			$I->see('Salary');
		}
	}	
}
