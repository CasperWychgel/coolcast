<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Properties extends Model
{
    /**
     * Get the Product record associated with the property.
     */
    public function products()
    {
        return $this->hasOne('App\Products');
    }
}
