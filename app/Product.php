<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function locations()
    {
        return $this->belongsToMany(Location::class);
    }

    public function userproducts()
    {
        return $this->belongsToMany(Userproduct::class);
    }
}
