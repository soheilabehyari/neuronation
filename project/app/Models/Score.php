<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Score extends Model {
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'session_id', 'score'
    ];


    /**
     * Get the session associated with the score
     */
    public function session()
    {
        return $this->hasOne('App\Model\Session');
    }

}
