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
        Schema::create('degree_maps', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('map_id');
            $table->timestamps();
            $table->string('term_code');
            $table->json('days_of_week');
            $table->string('time_of_day');
            $table->string('course_code');
            $table->string('concentration_code')->nullable();
            $table->boolean('is_internal')->default(true);
            /*Students may have multiple maps (up to 3 maybe) main map is priority 0. 1 and 2 are draft maps*/
//            $table->integer('map_priority');

            $table->foreignId('user_id');
            $table->foreignId('campus_id')->constrained();
            $table->foreign('course_code')->references('course_code')->on('courses');
            $table->foreign('concentration_code')->references('concentration_code')->on('concentrations');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('degree_maps');
    }
};
