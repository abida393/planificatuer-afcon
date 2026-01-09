<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $guarded = [];

    public function matchesAsTeam1()
    {
        return $this->hasMany(Game::class, 'team_1_id');
    }

    public function matchesAsTeam2()
    {
        return $this->hasMany(Game::class, 'team_2_id');
    }

    public function travelPlans()
    {
        return $this->hasMany(TravelPlan::class);
    }
}
