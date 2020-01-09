<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public $guarded = [];

    public function locationproducts()
    {
        return $this->hasMany('App\Locationproduct');
    }

    public function locationusers()
    {
        return $this->hasMany('App\Locationuser');
    }
}
