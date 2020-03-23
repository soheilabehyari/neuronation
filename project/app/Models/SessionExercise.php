<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SessionExercise extends Model
{

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'session_id', 'exercise_id'
    ];

}
