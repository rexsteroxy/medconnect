<?php

use Faker\Generator as Faker;

$factory->define(App\JobApplication::class, function (Faker $faker) {
    $user_ids = DB::table('users')->pluck('id')->all();
    return [
        'name' => $faker->name,
        'user_id' => $faker->randomElement($user_ids),
        'email' =>$faker->safeEmail,
        'phone' => $faker->phoneNumber,
        'cv_link' =>$faker->text(20)
    ];
});

