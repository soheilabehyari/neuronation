<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Exercise;
use App\Models\Category;
use App\Models\Course;
use Faker\Generator as Faker;


$factory->define(Exercise::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'category_id' => Category::inRandomOrder()->first(),
        'course_id' => Course::inRandomOrder()->first(),
        'point' => $faker->numberBetween($min=20, $max=100)
    ];
});


