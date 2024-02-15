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
        Schema::create('degree_plans', function (Blueprint $table) {
            $table->id('planID');
            $table->timestamps();
            $table->unsignedBigInteger('campusID');
            $table->unsignedBigInteger('majorID');
            $table->integer('numberOfCourses');// for the degree
            $table->unsignedBigInteger('studentID');
            $table->boolean('active')->default(true);
            $table->json('courses');// or csv format add electives to this as well, structure properly
            // check electives first then substitutions, must also include the substitutions

            $courses = [
                'gened' => [],
                'electives' => ['1','3', 'jj', 'rjj'],
            ];
            $table->foreign('majorID')->references('majorID')->on('majors');
            $table->foreign('campusID')->references('campusID')->on('campus');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plans');
    }
};
