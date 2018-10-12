<?php 

class LogoutCest
{
    // tests
    public function tryToTest(FunctionalTester $I)
    {
    	$I->amOnPage('/login');
    	$I->fillField('email', 'customer1@mail.com');
    	$I->fillField('password', '123456');
    	$I->click('Ingresar');
    	$I->seeResponseCodeIsSuccessful();
    	$I->seeInCurrentUrl('/Dash');
    	$I->submitForm('#logout-form', []);
    	$I->seeResponseCodeIsSuccessful();
    	$I->seeInCurrentUrl('');
    	$I->see('Iniciar Sesion');
    }
}
