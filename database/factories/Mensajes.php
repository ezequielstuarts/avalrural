<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Mensaje::class, function (Faker $faker) {
    $localidad = $faker->sentence(2);
    return [
        'apellido' => $faker->lastName(),
        'nombre' => $faker->firstName(),
        'empresa' => $localidad,
        'cuit' => rand(1,100),
        'localidad' => $localidad,
        'telefono' => $faker->phoneNumber,
        'email' => $faker->safeEmail,
        'consulta' => $faker->text(10,100)
    ];
});

