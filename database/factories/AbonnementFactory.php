<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Abonnement::class, function (Faker $faker) {
    return [
        'activites_id' => factory(App\Activite::class),
        'abonnes_id' => factory(App\Abonne::class),
        'dateDebut' => $faker->dateTime(),
        'dateFin' => $faker->dateTime(),
        'montant' => $faker->randomNumber(),
        'datePaiement' => $faker->dateTime(),
    ];
});
