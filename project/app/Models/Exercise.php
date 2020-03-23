<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model {
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'category_id', 'course_id'
    ];


    /**
     * Get the category that owns the exercise.
     */
    public function category()
    {
        return $this->belongsTo('App\Model\Category');
    }

    /**
     * Get the course that owns the exercise.
     */
    public function course()
    {
        return $this->belongsTo('App\Model\Course');
    }

    /**
     * The sessions that belong to the exercise.
     */
    public function sessions()
    {
        return $this->belongsToMany('App\Model\SessionExercise');
    }

}
