<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class couponTest extends TestCase
{
	use WithoutMiddleware;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testValidCoupon()
    {
        $response = $this->post('/compraproducto', [
            'id1' => '1',
            'precio' => '800.19',
            'cantidad'=>'1',
            'cupon'=>'Cupon01',
            'id'=>'1'
        ]);
        $response= $this->get('/compra')
        ->assertSee('COMPRA EXITOSA');
    }


     /**
     * A basic test example.
     *
     * @return void
     */
    public function testInvalidCoupon()
    {
        $response = $this->post('/compraproducto', [
            'id1' => '1',
            'precio' => '800.19',
            'cantidad'=>'1',
            'cupon'=>'4',
            'id'=>'9'
        ]);
        $response= $this->get('/compra')
        ->assertSee('CUPON NO ENCONTRADO, SE PAGO LA TOTALIDAD');
    }
}
