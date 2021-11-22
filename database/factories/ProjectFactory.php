<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Project;
use Faker\Generator as Faker;

$factory->define(Project::class, function (Faker $faker) {
    return [
       
       'name' => $faker->sentence(3),
       'execution_time' => $faker->time(),
       'is_active' => $faker->boolean()
    ];
});
