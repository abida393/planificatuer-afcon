<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TravelPlan extends Model
{
    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
