<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class searchTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testSearch()
    {
    	$response = $this->call('GET', '/', ['product_name' => 'a']);
      	$this->assertEquals(200, $response->status());
    }

     /**
     * A basic test example.
     * @test
     * @return void
     */
    public function require_name()
    {
        $this->from('/')
            ->get('/search', [
                'product_name' => '',
            ])
            ->assertRedirect('/')
            ->assertSessionHasErrors(['product_name']);
    }

    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function test_for_no_results()
    {
        $response = $this->json('GET', '/search', ['product_name' => 'asdfg']);
        $response->assertViewIs('search.showp');
        $response->assertSee('Sin resultados');
        $response->assertSee('Resultados de busqueda');
        $response->assertDontSee('asdfg');
        $response->assertSuccessful();
    }
}
