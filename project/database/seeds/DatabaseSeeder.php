<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call('CourseTableSeeder');
         $this->call('CategoryTableSeeder');
         $this->call('ExerciseTableSeeder');
         $this->call('UserTableSeeder');
         $this->call('SessionTableSeeder');
         $this->call('SessionExerciseTableSeeder');
         $this->call('ScoreTableSeeder');
    }
}
