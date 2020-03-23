<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    /**
     * Get the exercises for the category.
     */
    public function exercises()
    {
        return $this->hasMany('App\Model\Exercise');
    }


}
