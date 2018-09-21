<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CompraTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }


    /**
     * A basic test example.
     * @test
     * @return void
     */
   public function code_name()
    {
        $this->from('/')
            ->get('/compraproducto', [
                'product_code' => '',
            ])
            ->assertRedirect('/')
            ->assertSessionHasErrors(['product_code']);
    }

    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function the_code_is_alphabetic()
    {
        $this->from('/')
            ->get('/compraproducto', [
                'product_code' => 'asd',
            ])
            ->assertRedirect('/')
            ->assertSessionHasErrors(['product_code']);
    }

    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function it_search_a_product_that_exits()
    {
        $response = $this->json('GET',  '/compraproducto', ['product_code'=>'1','product_cant' => '1']);
        $response->assertViewIs('CompraProducto');
        $response->assertSee('Resultados de Compra');
        $response->assertSee('Cristian Keebler');
        $response->assertSuccessful();
    }
    
    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function it_search_a_product_that_NO_exits()
    {
        $response = $this->json('GET',  '/compraproducto', ['product_code'=>'1988765','product_cant' => '1']);
        $response->assertViewIs('CompraProducto');
        $response->assertSee('Resultados de Compra');
        $response->assertSee('Sin resultados');
        $response->assertSuccessful();
    }

    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function purchaseTest()
    {
	   $this->json('POST','/compraproducto', [
            'user_id' => '1',
            'product_id' => '1',
            'quantity' => '10',
            'payment'=>'8767',
        ]);
	   $this->assertDatabaseHas('purchases', ['user_id' => '1']);
    }
}


  