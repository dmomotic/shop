<?php

use Illuminate\Database\Seeder;
use App\Coupon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Insercion de 20 clientes
		factory(App\User::class, 1)->create([
			'email' => 'customer1@mail.com',
    	]);
    	factory(App\User::class, 19)->create();

        //Insercion de producto para el paso de pruebas
        factory(App\Product::class, 1)->create([
            'name' => 'Cristian Keebler'
        ]);
        
        //Insercion de 30 productos
    	factory(App\Product::class, 30)->create();

        //Insertando 20 compras
        factory(App\Purchase::class, 20)->create();

        //Creacion de cupones para pruebas
        Coupon::create([
            'code' => 'Cupon01',
            'amount' => '15.0'
        ]);

        Coupon::create([
            'code' => 'Cupon02',
            'amount' => '10.0'
        ]);

        Coupon::create([
            'code' => 'Cupon03',
            'amount' => '5.0'
        ]);

        Coupon::create([
            'code' => 'Cupon04',
            'amount' => '20.0'
        ]);

        Coupon::create([
            'code' => 'Cupon05',
            'amount' => '8.0'
        ]);

    }
}
