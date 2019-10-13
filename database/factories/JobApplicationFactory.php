<?php

use Faker\Generator as Faker;

$factory->define(App\JobApplication::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' =>$faker->safeEmail,
        'phone' => $faker->phoneNumber,
        'cv_link' =>$faker->text(20)
    ];
});

