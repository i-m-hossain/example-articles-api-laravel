<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use App\Article;
use App\People;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        //
        

        'body' => $faker->text(50),
        'author_id' => $faker->numberBetween(1, People::count()),
        'article_id' => $faker->numberBetween(1, Article::count()),

        
    ];
});
