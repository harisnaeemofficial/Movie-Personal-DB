<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    /**
     * The roles that belong to the user.
     */
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
