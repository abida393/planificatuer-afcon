<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stadium extends Model
{
    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function games()
    {
        return $this->hasMany(Game::class);
    }
}
