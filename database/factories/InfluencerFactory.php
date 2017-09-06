<?php

use Faker\Generator as Faker;

$factory->define(App\Influencer::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'url' => $faker->unique()->safeEmail,
        'is_featured' => 0,
    ];
});
