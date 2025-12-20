<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function stadiums()
    {
        return $this->hasMany(Stadium::class);
    }
}
