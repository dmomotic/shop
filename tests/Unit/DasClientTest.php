<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DasClientTest extends TestCase
{
    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function testExample()
    {
                $response = $this->post('/login', [
            'email' => 'customer1@mail.com',
            'password' => '123456',
        ]);
        $response->assertSessionHasNoErrors();
       $response = $this->get('/Dash')
            ->assertStatus(200);
    }
}
