<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function locations()
    {
        return $this->belongsToMany(Copy::class);
    }
}
