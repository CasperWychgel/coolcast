<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locationuser extends Model
{
    /**
     * Get the comments for the blog post.
     */
    public function locations()
    {
        return $this->hasOne('App\Locations');
    }

    public function users()
    {
        return $this->hasOne('App\Users');
    }
}
