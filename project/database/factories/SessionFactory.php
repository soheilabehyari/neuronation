<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use App\Models\Session;
use Faker\Generator as Faker;


$factory->define(Session::class, function (Faker $faker) {
    return [
        'user_id' => User::inRandomOrder()->first(),
    ];
});
