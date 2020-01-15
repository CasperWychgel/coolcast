<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Copy extends Model
{
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function locations()
    {
        return $this->belongsToMany(Location::class);
    }
}
