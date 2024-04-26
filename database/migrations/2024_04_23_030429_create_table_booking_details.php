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
        Schema::create('table_booking_details', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('futsal_id');
            $table->foreign('futsal_id')->references('id')->on('futsal_details');
            $table->foreignId('futsaluser_id');
            $table->foreign('futsaluser_id')->references('id')->on('futsalusers');
            $table->date('selected_date');
            $table->json('selected_timelsots')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_booking_details');
    }
};
