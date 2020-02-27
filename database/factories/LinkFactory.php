<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Link::class, function (Faker $faker) {
    return [
        'user_id' => \App\User::inRandomOrder()->limit(1)->get()->first()->id,
        'short_code' => uniqid(),
        'source_link' => $faker->url,

    ];
});
