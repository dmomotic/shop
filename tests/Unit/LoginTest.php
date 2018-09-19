<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginTest extends TestCase
{
    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function it_validates_login_with_valid_credentials()
    {
    	$response = $this->post('/login', [
            'email' => 'customer1@mail.com',
            'password' => '123456',
        ]);

        $response->assertSessionHasNoErrors();
    }

    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function it_validates_login_with_bad_credentials()
    {
    	$response = $this->post('/login', [
            'email' => 'badcustomer@mail.com',
            'password' => 'badpassword',
        ]);

        $response->assertSessionHasErrors();
    }

    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function it_validates_the_return_page_from_success_login()
    {
    	$response = $this->post('/login', [
            'email' => 'customer1@mail.com',
            'password' => '123456',
        ]);

        $response->assertRedirect('/');
    }

}
