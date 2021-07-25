<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'category_id' => Category::all()->random()->id,
        'product_name' => $faker->unique()->name,
        'product_description' => $faker->unique()->realText($maxNbChars = 200, $indexSize = 2),
        'price' => $faker->randomFloat(2, 0, 100),
        'created_at' =>  now(),
        'updated_at' => now(),
    ];
});
