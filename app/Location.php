<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public $guarded = [];

    public function userproducts()
    {
        return $this->belongsToMany(Userproduct::class);
    }
}
