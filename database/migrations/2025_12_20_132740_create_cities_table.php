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
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // e.g., 'Marrakech'
            $table->decimal('daily_budget_usd', 10, 2)->nullable();
            $table->decimal('daily_mid_usd', 10, 2)->nullable();
            $table->decimal('daily_luxury_usd', 10, 2)->nullable();
            $table->json('tourist_spots')->nullable(); // Store an array of places to visit
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cities');
    }
};
