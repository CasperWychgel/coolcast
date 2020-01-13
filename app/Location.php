<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public $guarded = [];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
