<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locationuser extends Model
{
    public function users()
    {
        return $this->hasMany('App\User');
    }

    public function locations()
    {
        return $this->hasMany('App\Location');
    }
}
