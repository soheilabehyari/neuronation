<?php

use App\Models\SessionExercise;
use Illuminate\Database\Seeder;

class SessionExerciseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(SessionExercise::class, 50000)->create();
    }
}
