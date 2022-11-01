<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Comentario;
use App\Models\Usuario;
use Faker\Generator as Faker;

$factory->define(Comentario::class, function (Faker $faker) {
    return [
        'contenido' => $faker->text,
        'usuario_id' => Usuario::inRandomOrder()->first()->id

    ];
});
