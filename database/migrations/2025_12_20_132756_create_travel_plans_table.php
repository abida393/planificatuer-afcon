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
        Schema::create('travel_plans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('team_id')->constrained('teams');
            $table->string('predicted_endpoint')->nullable(); // e.g., 'Semi-Final'
            $table->enum('budget_tier', ['budget', 'mid', 'luxury'])->nullable();
            $table->decimal('total_estimated_cost', 10, 2)->nullable();
            $table->json('itinerary_data')->nullable(); // Stores the JSON array returned by FastAPI
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('travel_plans');
    }
};
