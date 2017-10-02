<?php
use Faker\Generator as Faker;

$factory->define(App\Parceiro::class, function (Faker $faker) {

    return [
        'categoria_parceiros_id' => function(){
          return factory('App\CategoriaParceiro')->create()->id;
        },

        'cnpj' => $faker->ssn(false),
        'razao_social' => $faker->catchPhrase,
        'nome_fantasia' => $faker->company,
        'latitude' => $faker->latitude,
        'longitude' => $faker->longitude,
        'logradouro' => $faker->address,
        'numero' => $faker->randomDigit,
        'complemento' => $faker->address,
        'cep' => $faker->text($maxNbChars = 8),
        'bairro' => $faker->city,
        'municipio' => $faker->city,
        'uf' => $faker->stateAbbr,
        'pais' => $faker->country,
        'email' => $faker->email,
        'telefone' =>  $faker->text($maxNbChars = 8),
        'responsavel' => $faker->name($gender = null),
        'descricao' => $faker->text($maxNbChars = 100),
        'media_avaliacao' => $faker->randomDigit,
        'qte_avaliacoes' => $faker->randomNumber,

    ];
});
