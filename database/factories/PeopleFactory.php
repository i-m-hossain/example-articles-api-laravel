<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\People;
use Faker\Generator as Faker;

$factory->define(People::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstNameMale,
        'last_name' => $faker->lastName,
        'twitter' => $faker->url,
    ];
});
