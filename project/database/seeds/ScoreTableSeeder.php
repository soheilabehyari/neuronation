<?php

use App\Models\Score;
use Illuminate\Database\Seeder;

class ScoreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Score::class, 100)->create();
        // inserting 200 per iteration (=100k)
//        for ($i=0; $i < 5000; $i++) {
//            factory(Score::class, 200)->create();
//        }
    }
}
