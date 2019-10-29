<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locations extends Model
{
    /**
     * Get the Locationuser record associated with the Location.
     */
    public function locationuser()
    {
        return $this->hasMany('App\Locationuser');
    }

    public function products()
    {
        return $this->hasMany('App\Products');
    }
}
