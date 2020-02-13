<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Seance::class, function (Faker $faker) {
    return [
        'moniteurs_id' => factory(App\Moniteur::class),
        'activites_id' => factory(App\Activite::class),
        'tauxHoaire' => $faker->randomNumber(),
        'montant' => $faker->randomFloat(),
        'duree' => $faker->dateTime(),
        'create_at' => $faker->dateTime(),
        'update_at' => $faker->dateTime(),
        'delete_at' => $faker->dateTime(),
    ];
});
