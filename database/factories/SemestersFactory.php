<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Semesters;
use Faker\Generator as Faker;

$factory->define(Semesters::class, function (Faker $faker) {

    return [
        'semester_name' => $faker->word,
        'semester_code' => $faker->word,
        'semester_duration' => $faker->word,
        'semester_description' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
