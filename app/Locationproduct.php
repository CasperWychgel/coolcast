<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locationproduct extends Model
{
    public $timestamps = false;

    public function locations() 
    {
        return $this->hasOne('App\Location');
    }

    public function products()
    {
        return $this->hasMany('App\Product');
    }
}