<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userproduct extends Model
{
    public function locations()
    {
        return $this->hasOne(Location::class);
    }

    public function products()
    {
        return $this->hasOne(Product::class);
    }
}
