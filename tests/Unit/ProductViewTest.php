<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductViewTest extends TestCase
{
    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function if_product_exists()
    {	
    	$response = $this->get('/ProductView/1');
        $response->assertSee('Comprar');
        $response->assertSuccessful();
    }

    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function if_product_doesnt_exists()
    {	
    	$response = $this->get('/ProductView/321');
    	$response->assertSee('PRODUCTO NO ENCONTRADO');
        $response->assertSee('Regresar');
        $response->assertSuccessful();
    }
}
