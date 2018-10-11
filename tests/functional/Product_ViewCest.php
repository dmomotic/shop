<?php 

class Product_ViewCest
{
    public function _before(FunctionalTester $I)
    {
    }

    // tests
    public function tryToTest(FunctionalTester $I)
    {
    	$I->amOnPage('/ProductView/1');
    	$I->seeResponseCodeIsSuccessful();
    	$I->see('$');
    	$I->click('Comprar');
    	$I->seeResponseCodeIsSuccessful();
    	$I->seeInCurrentUrl('/compra');
    }
}
