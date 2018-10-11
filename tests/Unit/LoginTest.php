<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

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
        $response->assertRedirect('/Dash');
    }

    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function it_validates_the_login_page_loads_successful()
    {
        $response = $this->get('/login');
        $response->assertSuccessful();
        $response->assertViewIs('auth.login');
    }

    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function it_validates_a_user_cannot_see_a_login_form_when_authenticated()
    {
        $user = User::find(1);
        $response = $this->actingAs($user)->get('/login');
        $response->assertRedirect('/');
    }

    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function it_validates_a_login_user_can_see_a_log_in_opcion()
    {
        $response = $this->get('/');
        $response->assertSuccessful();
        $response->assertSee('Iniciar Sesion');
    }
    
}
