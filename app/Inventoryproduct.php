<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventoryproduct extends Model
{
    public $timestamps = false;

    public function locations() 
    {
        return $this->hasOne('App\Location');
    }
}