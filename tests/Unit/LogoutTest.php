<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class LogoutTest extends TestCase
{
    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function it_validates_a_successful_log_out()
    {
        $user = User::find(1);
        $this->actingAs($user)->get('/login');
        auth()->logout();
        $this->assertGuest();
    }

    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function it_validates_a_guest_cannot_see_a_log_out_opcion()
    {
        $response = $this->get('/');
        $response->assertSuccessful();
        $response->assertDontSee('Cerrar Sesion');
    }
}
