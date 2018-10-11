<?php 

class PruebaRegistroCest
{
   
    // tests
    //como se queman datos cambiar los campos :v
    public function tryToTest(FunctionalTester $I)
    {
    	//1. se verifica estar en registro
    	$I->amOnPage('/registro');
    	$I->seeResponseCodeIsSuccessful();
    	//2. pongo fijos los campos de registro
    	$I->fillField('nombre', 'prueba2');
    	$I->fillField('correo', 'prueba2@gmail.com');
    	$I->fillField('password', '123465');
    	$I->fillField('tarjeta', 'eee');
    	//3. peticion post a la ruta del registro
    	$I->click('Registrar');
    	//4. se verifica que no haya respuesta de error
    	$I->seeResponseCodeIsSuccessful();

    	
    }
}


