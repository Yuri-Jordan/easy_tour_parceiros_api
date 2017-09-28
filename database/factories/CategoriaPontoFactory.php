<?php
use Faker\Generator as Faker;

$factory->define(App\CategoriaPonto::class, function (Faker $faker) {

    return [
        'nome' => $faker->jobTitle,
        'tipo' => $faker->bs,
    ];
});
