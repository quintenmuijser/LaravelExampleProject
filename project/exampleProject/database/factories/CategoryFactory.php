<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'category_name' => $faker->unique()->name,
        'category_description' => $faker->unique()->realText($maxNbChars = 200, $indexSize = 2),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
