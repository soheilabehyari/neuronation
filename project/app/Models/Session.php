<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id'
    ];


    /**
     * Get the user that owns the session.
     */
    public function user()
    {
        return $this->belongsTo('App\Model\User');
    }

    /**
     * The exercises that belong to the session.
     */
    public function exercises()
    {
        return $this->belongsToMany('App\Model\SessionExercise');
    }

    /**
     * Get the score that owns the session.
     */
    public function score()
    {
        return $this->belongsTo('App\Model\Score');
    }
}
