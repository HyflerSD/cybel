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
            $table->timestamps();
            $table->string('term_code');
            $table->json('days_of_week');
            $table->string('time_of_day');
            $table->string('updated_by');
            $table->string('course_code');
            $table->string('substitution_course_code')->nullable();
            $table->unsignedBigInteger('map_id')->unique();
            $table->string('mode_of_instruction');
            $table->string('concentration_code')->nullable();
            $table->boolean('is_internal')->default(true);
            $table->boolean('generated_by_advisor')->default(false);
// System generated map vs advisor generated map TODO: add updated by when recordds are updated (system, student, advisor)
            $table->foreignId('user_id')->constrained();
            $table->foreignId('campus_id')->constrained();
            $table->foreign('term_code')->references('term_code')->on('terms');
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
