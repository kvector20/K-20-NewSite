<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Magazine;
use Faker\Generator as Faker;

$factory->define(Magazine::class, function (Faker $faker) {
    return [
        'title' => $faker->text(50),
        'body' => $faker->text(450),
        'author' => $faker->text(10),
        'img' => $faker->text(15),
        'collection_name' => $faker->text(10),
        'collection_month' => $faker->text(5)
    ];
});
