<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class historialTest extends TestCase
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
	public function verifica_ventana()
    {	
    	$this->get('/historial/1')
    		->assertStatus(200);
    }

}
