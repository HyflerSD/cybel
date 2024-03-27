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
        Schema::create('enrollment_preferences', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('session');
            $table->json('days_of_week');
            $table->json('time_of_day');
            $table->json('mode_of_instruction');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrollment_preferences');
    }
};
