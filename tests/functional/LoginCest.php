<?php 

class LoginCest
{

    // tests
    public function tryToTest(FunctionalTester $I)
    {
    	$I->amOnPage('/login');
    	$I->seeResponseCodeIsSuccessful();
    	$I->fillField('email', 'customer1@mail.com');
    	$I->fillField('password', '123456');
    	$I->click('Ingresar');
    	$I->seeResponseCodeIsSuccessful();
    	$I->seeInCurrentUrl('/Dash');
    }
}
