<?php 

class Register_purchaseCest
{
    public function _before(FunctionalTester $I)
    {
    }

    // tests
    public function tryToTest(FunctionalTester $I)
    {
        $I->amOnPage('/compra');
    	$I->seeResponseCodeIsSuccessful();
    	$I->fillField('product_code', '1');
        $I->fillField('product_cant', '1');
    	$I->click('¡Comprar!');
    	$I->seeInCurrentUrl('/compraproducto');
    }
}
