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
        Schema::create('concentration_courses', function (Blueprint $table) {
            $table->id();
            $table->string('course_code');
            $table->integer('course_level');
            $table->string('concentration_code');

            $table->foreign('course_code')->references('course_code')->on('courses')->cascadeOnDelete();
            $table->foreign('concentration_code')->references('concentration_code')->on('concentrations')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('concentration_courses');
    }
};
