<?php

use Faker\Generator as Faker;

$factory->define(App\Purchase::class, function (Faker $faker) {

	$user = App\User::inRandomOrder()->first();
	$product = App\Product::inRandomOrder()->first();
	$quantity = $faker->numberBetween(1,10);
    return [
        'user_id' => $user->id,
        'product_id' => $product->id,
        'quantity' => $quantity,
        'payment' => round($product->price * $quantity, 2),
    ];
});
