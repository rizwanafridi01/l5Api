<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        

    			'name' => $faker->name,
    			'detail' => $faker->paragraph,
    			'price' => $faker->numberBetween(100,1000),
    			'stock' => $faker->randomDigit,
    			'discount' => $faker->numberBetween(10,30),


    ];
});
