<?php
use Faker\Generator as Faker;
use Faker\Provider\pt_BR\Person;

$factory->define(App\Parceiro::class, function (Faker $faker) {

    return [
        'categoria_parceiros_id' => function(){
          return factory('App\CategoriaParceiro')->create()->id;
        },

        'cpf' => $faker->ssn(false),
        'cnpj' => $faker->ssn(false),
        'nome_fantasia' => $faker->name($gender = null),
        'razao_social' => $faker->catchPhrase,
        'endereco' => $faker->address,


    ];
});
