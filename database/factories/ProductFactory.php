<?php

use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'price' => $faker->randomFloat(2,100,1000),
        'quantity' => $faker->numberBetween(50,500),
        'description' => $faker->text(),
        'image' => 'https://picsum.photos/200/300/?random',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ];
});
