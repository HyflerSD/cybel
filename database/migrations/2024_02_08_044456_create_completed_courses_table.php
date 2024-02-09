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
            $table->id('studentCourseID');
            $table->unsignedBigInteger('studentID');
            $table->unsignedBigInteger('courseID');
            $table->string('term', 20);
            $table->integer('year');
            $table->string('grade', 5)->nullable();
            $table->string('status', 50);
            $table->timestamps();

            $table->foreign('studentID')->references('id')->on('students')->onDelete('cascade');
            $table->foreign('courseID')->references('courseID')->on('courses')->onDelete('cascade');
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
