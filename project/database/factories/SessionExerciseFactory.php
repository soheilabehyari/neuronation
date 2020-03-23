<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Exercise;
use App\Models\Session;
use App\Models\SessionExercise;
use Faker\Generator as Faker;


$factory->define(SessionExercise::class, function (Faker $faker) {
    return [
        'session_id' => Session::inRandomOrder()->first(),
        'exercise_id' => Exercise::inRandomOrder()->first(),
    ];
});
