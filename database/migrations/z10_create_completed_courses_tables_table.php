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
        Schema::create('completed_courses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('substituting_course')->nullable();
            $table->string('course_code')->nullable();
            $table->string('grade')->nullable();
            $table->foreign('course_code')->references('course_code')->on('courses');
            $table->foreign('substituting_course')->references('course_code')->on('courses');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('completed_courses');
    }
};
