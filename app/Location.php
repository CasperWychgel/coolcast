<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public $guarded = [];

    public function copies()
    {
        return $this->belongsToMany(Copy::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function hasAnyUsers($id) {
        return null !== $this->users()->where('user_id', $id)->first();
    }
}
