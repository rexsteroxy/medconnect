<?php

use Faker\Generator as Faker;

$factory->define(App\Job::class, function (Faker $faker) {
    return [
       'job_title'  => $faker->text(20),
       'description'  => $faker->text(70) ,
       'requirement' =>   $faker->text(40),
       'location' =>  $faker->city,
       'salary_range' => "20000 - 40000"
    ];
});
