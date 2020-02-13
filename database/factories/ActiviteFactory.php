<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Activite::class, function (Faker $faker) {
    return [
        'create_at' => $faker->dateTime(),
        'update_at' => $faker->dateTime(),
        'delete_at' => $faker->dateTime(),
        'gestionnaires_id' => factory(App\Gestionnaire::class),
        'nom' => $faker->word,
    ];
});
