<?php 

class PruebaFuncionalCest
{
    public function _before(FunctionalTester $I)
    {
    	/*En este metodo se realiza alguna configuracion que deseemos antes de las pruebas,
		  pero no es necesario, incluso lo podriamos borrar.*/
    }

    // tests
    public function tryToTest(FunctionalTester $I)
    {
    	$I->amOnPage('/login');
    	$I->see('Correo electronico');
    }
}
