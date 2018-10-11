<?php 

class PruebaHistorialCest
{
    

    // tests
    public function tryToTest(FunctionalTester $I)
    {
    	//1 se verifica estar en registro con usuario id=1
    	$I->amOnPage('/historial/15');
    	$I->seeResponseCodeIsSuccessful();
    	// al abrir la pagina muestran las compras, al mostrar la pagina exitosamente
    	//comprueba que existe el usuario ya que es en base a su id
    	
    }
}

 