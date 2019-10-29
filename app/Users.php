<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    public function locationuser()
    {
        return $this->hasMany('App\Locationuser');
    }
}
