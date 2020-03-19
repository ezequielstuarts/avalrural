<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\ContactPrecalificate::class, function (Faker $faker) {
    return [
        'nombre_y_apellido' => $faker->name($gender = 'male'|'female'),
        'email' => $faker->safeEmail,
        'telefono' => $faker->phoneNumber,
        'celular' => $faker->phoneNumber,
        'empresa' => $faker->company,
        'cuit' => $faker->numberBetween($min = 1000, $max = 10000000),
        'rubro' => $faker->jobTitle,
        'codigo_afip' => $faker->numberBetween($min = 1000, $max = 10000000),
        'balance' => $faker->imageUrl($width = 640, $height = 480),
        'nomina' => $faker->imageUrl($width = 640, $height = 480),
        'actividad' => $faker->catchPhrase,
    ];
});
