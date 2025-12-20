<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->foreignId('team_1_id')->constrained('teams');
            $table->foreignId('team_2_id')->constrained('teams');
            $table->foreignId('stadium_id')->constrained('stadiums');
            $table->dateTime('match_date')->nullable();
            $table->string('stage')->nullable(); // e.g., 'Group Stage', 'Quarter-Final'
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('matches');
    }
};
