<?php
use Faker\Generator as Faker;

$factory->define(App\CategoriaParceiro::class, function (Faker $faker) {

    return [
        'nome' => $faker->company,
    ];
});
