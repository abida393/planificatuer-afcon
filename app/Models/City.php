<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'name', 
        'description', 
        'image', 
        'daily_budget_usd', 
        'daily_mid_usd', 
        'daily_luxury_usd'
    ];

    public function stadiums()
    {
        return $this->hasMany(Stadium::class);
    }

    public function touristSpots()
    {
        return $this->hasMany(TouristSpot::class);
    }
}
