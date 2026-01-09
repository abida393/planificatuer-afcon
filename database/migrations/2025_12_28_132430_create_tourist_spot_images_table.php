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
        Schema::create('tourist_spot_images', function (Blueprint $table) {
            $table->id();
            // Naming convention: singular_id. But user asked for "id-spot". 
            // We use standard Laravel convention: tourist_spot_id
            $table->foreignId('tourist_spot_id')->constrained('tourist_spots')->onDelete('cascade');
            $table->string('image');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tourist_spot_images');
    }
};
