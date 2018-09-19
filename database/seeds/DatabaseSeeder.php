<?php

use Illuminate\Database\Seeder;

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

        //Insercion de 30 productos
    	factory(App\Product::class, 30)->create();

        //Insertando 20 compras
        factory(App\Purchase::class, 20)->create();
    }
}
