<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Cargo;
use Faker\Generator as Faker;

$factory->define(Cargo::class, function (Faker $faker) {
    $faker->addProvider(new \Faker\Provider\en_US\Company($faker));

    return [
        'descricao' => $faker->unique()->jobTitle
    ];
});
