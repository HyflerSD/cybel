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
            $table->foreignId('campus_id')->constrained();
            $table->unsignedBigInteger('student_id');
            $table->string('course_code');
            $table->string('map_id');
            $table->string('term')->nullable();
            $table->string('concentration_code')->nullable();
            $table->foreign('concentration_code')->references('concentration_code')->on('concentrations');
            $table->foreign('student_id')->references('student_id')->on('students');
            $table->foreign('course_code')->references('course_code')->on('courses');
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