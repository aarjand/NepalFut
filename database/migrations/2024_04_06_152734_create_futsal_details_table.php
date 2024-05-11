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
        Schema::create('futsal_details', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->string('pan_vat_docs');
            $table->string('location');
            $table->unsignedTinyInteger('ratings')->nullable();
            $table->decimal('price_per_hour', 8, 2);
            $table->date('available_date');
            $table->json('time_slots');
            $table->enum('status',['Active','Inactive'])->default('Active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('futsal_details');
    }
};
