<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * Get the Location record associated with the product.
     */
    public function locations()
    {
        return $this->hasOne('App\Location');
    }
}
