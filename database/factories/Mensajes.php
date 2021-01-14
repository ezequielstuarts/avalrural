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
        'cuit' => $faker->ean8,
        'localidad' => $localidad,
        'telefono' => $faker->phoneNumber,
        'email' => $faker->safeEmail,
        'consulta' => $faker->text,
        'status' => 0,
        'read' => 0,
        // 'status' => $faker->randomElement(['0', '0']),
        // 'read' => $faker->randomElement(['0', '0']),
        'created_at' => $faker->datetime()
    ];
});

