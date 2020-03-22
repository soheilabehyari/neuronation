<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionExercisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('session_exercises', function (Blueprint $table) {
            $table->integer('session_id')->unsigned()->nullable(false);
            $table->integer('exercise_id')->unsigned()->nullable(false);
        });

        Schema::table('session_exercises', function($table) {
            $table->foreign('session_id')->references('id')->on('sessions')->onDelete('cascade');
            $table->foreign('exercise_id')->references('id')->on('exercises')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('session_exercises');
    }
}
