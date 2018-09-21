<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RegistroTest extends TestCase
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
	public function it_validates_the_open_windows()
    {	
    	$this->get('/registro')
    		->assertStatus(200);
    }



    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function pruebaMetodoSaveData()
    {
	   $this->json('POST','/registro', [
            'nombre' => 'jossie',
            'correo' => 'prueba@correo.com',
            'password' => 'hola',
            'tarjeta'=>'12345678',
            
        ]);
	   $this->assertDatabaseHas('users', ['name' => 'jossie','email' => 'prueba@correo.com','password' => 'hola','card' => '12345678']);

	   
    }


}
