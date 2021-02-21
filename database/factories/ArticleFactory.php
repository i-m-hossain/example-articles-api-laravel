<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use App\People;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        
        'title' => $faker->text(50),
        'author_id' => $faker->unique()->numberBetween(1, People::count()),

    ];
});
