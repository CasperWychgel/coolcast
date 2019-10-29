<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    /**
     * Get the Property record associated with the product.
     */
    public function properties()
    {
        return $this->hasOne('App\Properties');
    }
}
