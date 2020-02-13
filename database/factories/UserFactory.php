<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'uuid' => $faker->uuid,
        'nom' => $faker->word,
        'prenom' => $faker->word,
        'telephone' => $faker->word,
        'email' => $faker->safeEmail,
        'role' => $faker->word,
        'password' => bcrypt($faker->password),
        'remember_token' => Str::random(10),
        'create_at' => $faker->dateTime(),
        'update_at' => $faker->dateTime(),
        'delete_at' => $faker->dateTime(),
    ];
});
