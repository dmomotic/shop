<?php 

class SearchProductCest
{
    public function _before(FunctionalTester $I)
    {
    }

    // tests
    public function tryToTest(FunctionalTester $I)
    {
    	$I->amOnPage('/');
    	$I->seeResponseCodeIsSuccessful();
    	$I->submitForm('#search', [
            'product_name' => 'a'
        ]);
        $I->seeResponseCodeIsSuccessful();
        $I->seeInCurrentUrl('product_name=a');
    }
}
