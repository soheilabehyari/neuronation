<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Score;
use App\Models\Session;
use Faker\Generator as Faker;


$factory->define(Score::class, function (Faker $faker) {
    return [
        'session_id' => Session::inRandomOrder()->first(),
        'score' => $faker->randomFloat($nbMaxDecimals = 3, $min = 0, $max = 100),
        'start_difficulty'  => $faker->date(),
        'end_difficulty'  => $faker->date(),
    ];
});
