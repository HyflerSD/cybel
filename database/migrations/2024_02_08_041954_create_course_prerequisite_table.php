<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('course_prerequisite', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('courseID');
            $table->unsignedBigInteger('prerequisiteID');
            $table->foreign('courseID')->references('courseID')->on('courses')->onDelete('cascade');
            $table->foreign('prerequisiteID')->references('courseID')->on('courses')->onDelete('cascade');
            // Use cascade for onDelete if you want deleting a course to automatically remove its relationships
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_prerequisite');
    }
};
