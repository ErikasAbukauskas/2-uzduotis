<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Client;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'surname' => $faker->sentence(4),
        'username' => Str::random(15),
        'company_id' => rand(1,10),
        'image_url' => $faker->url()
    ];
});
