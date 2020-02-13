<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Admin::class, function (Faker $faker) {
    return [
        'telephone' => $faker->word,
        'create_at' => $faker->dateTime(),
        'update_at' => $faker->dateTime(),
        'delete_at' => $faker->dateTime(),
        'users_id' => factory(App\User::class),
    ];
});
