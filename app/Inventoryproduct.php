<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventoryproduct extends Model
{
    public function locations()
    {
        return $this->hasOne('App\Location');
    }
}
