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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique(); // e.g., 'Senegal'
            $table->integer('fifa_rank')->nullable();
            $table->integer('historical_score')->nullable(); // The score calculated from your CSV
            $table->string('flag_url')->nullable();
            $table->char('group_name', 1)->nullable(); // e.g., 'D'
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
