<?php

use Faker\Generator as Faker;

$factory->define(App\JobApplication::class, function (Faker $faker) {
    $user_ids = DB::table('users')->pluck('id')->all();
    $job_ids = DB::table('jobs')->pluck('id')->all();
    return [
        'name' => $faker->name,
        'user_id' => $faker->randomElement($user_ids),
        'job_id' => $faker->randomElement($job_ids),
        'email' =>$faker->safeEmail,
        'phone' => $faker->phoneNumber,
        'cv' =>'applications/webview-ac013af3-f15f-4420-a8a1-b72ed206d0cc.pdf'
    ];
});

