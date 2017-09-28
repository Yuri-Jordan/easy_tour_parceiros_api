<?php
use Faker\Generator as Faker;

$factory->define(App\Ponto::class, function (Faker $faker) {

    return [
        'categoria_ponto_id' => function(){
          return factory('App\CategoriaPonto')->create()->id;
        },



        'proprietario_id' =>  function(){
          return factory('App\Parceiro')->create()->id;
        },


        'nome' => $faker->company,
        'descricao' => $faker->bs,
        'latitude' => $faker->latitude,
        'longitude' => $faker->longitude,
        'cidade' => $faker->city,
        'uf' => $faker->state,
        'pais' => $faker->country,
        'media_avaliacao' => $faker->randomDigit,
        'qte_avaliacoes' => $faker->randomNumber,

    ];
});
