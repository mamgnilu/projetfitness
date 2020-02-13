<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Evalution::class, function (Faker $faker) {
    return [
        'taille' => $faker->word,
        'etat_tension' => $faker->word,
        'poids' => $faker->word,
        'create_at' => $faker->dateTime(),
        'update_at' => $faker->dateTime(),
        'delete_at' => $faker->dateTime(),
        'nom' => $faker->word,
        'prenom' => $faker->word,
        'ddn' => $faker->word,
        'abonnes_id' => factory(App\Abonne::class),
    ];
});
