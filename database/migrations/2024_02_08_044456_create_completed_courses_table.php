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
            $table->id('StudentCourseID');
            $table->unsignedBigInteger('StudentID');
            $table->unsignedBigInteger('CourseID');
            $table->string('Term', 20);
            $table->integer('Year');
            $table->string('Grade', 5)->nullable();
            $table->string('Status', 50);
            $table->timestamps();

//            $table->foreign('StudentID')->references('id')->on('students')->onDelete('cascade');
//            $table->foreign('CourseID')->references('CourseID')->on('courses')->onDelete('cascade');
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
