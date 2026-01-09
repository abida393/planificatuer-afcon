<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TouristSpotImage extends Model
{
    protected $fillable = ['tourist_spot_id', 'image', 'description'];

    public function touristSpot()
    {
        return $this->belongsTo(TouristSpot::class);
    }
}
