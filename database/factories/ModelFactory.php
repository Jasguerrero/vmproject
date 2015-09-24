<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

//Crear usuario Guest aleatorio.
$factory->defineAs(App\User::class, 'guest', function (Faker\Generator $faker) {
    return [
        'name' => $faker->userName,
        'email' => $faker->email,
        'password' => bcrypt('password'),
        'room' => $faker->numberBetween($min = 1, $max = 150),
        'type' => 1
    ];
});

//Crear usuario Administrativo.
$factory->defineAs(App\User::class, 'admin', function (Faker\Generator $faker) {
    return [
        'name' => 'admin',
        'email' => 'admin@admin.com',
        'password' => bcrypt('admin'),
        'room' => 0,
        'type' => 2
    ];
});

//Crear usuario test.
$factory->defineAs(App\User::class, 'test', function (Faker\Generator $faker) {
    return [
        'name' => 'test',
        'email' => 'test@test.com',
        'password' => bcrypt('test'),
        'room' => 0,
        'type' => 1
    ];
});
