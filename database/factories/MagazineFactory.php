<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Magazine;
use Faker\Generator as Faker;

$factory->define(Magazine::class, function (Faker $faker) {
    return [
        'title' => $faker->text(50),
        'body' => $faker->text(200),
        'author' => $faker->text(10)
    ];
});
