<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function locationproducts()
    {
        return $this->hasMany('App\Locationproduct');
    }
}
