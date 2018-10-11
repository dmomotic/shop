<?php 

class Dashboard_ClienteCest
{
    public function _before(FunctionalTester $I)
    {
     	$I->amOnPage('/login');
    	$I->seeResponseCodeIsSuccessful();
    	$I->fillField('email', 'customer1@mail.com');
    	$I->fillField('password', '123456');
    	$I->click('Ingresar');
    	$I->seeResponseCodeIsSuccessful();
    	$I->seeInCurrentUrl('/Dash');
    }

    // tests
    public function tryToTest(FunctionalTester $I)
    {
    	//Paso para verificar que se encuentra en el dashboard inicial.
    	$I->amOnPage('/Dash');
    	$I->seeResponseCodeIsSuccessful();
    	//Paso para presionar el botón de “Buscar producto”.
    	$I->click('Buscar Productos');
    	$I->seeResponseCodeIsSuccessful();
    	//Paso para verificar la redirección del botón “Buscar producto”.
    	$I->seeInCurrentUrl('/Dash');
    	$I->amOnPage('/Dash');
    	$I->seeResponseCodeIsSuccessful();
    	//Paso para presionar el botón de “Ver historial de compras”.
    	$I->click('Ver Historial de Compras');
    	$I->seeResponseCodeIsSuccessful();
    	//Paso para verificar la redirección del botón de “Ver historial de compras”.
    	$I->seeInCurrentUrl('/historial/1');
    }
}
