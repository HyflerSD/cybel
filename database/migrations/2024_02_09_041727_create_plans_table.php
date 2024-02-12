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
        Schema::create('plans', function (Blueprint $table) {
            $table->id('planID');
            $table->timestamps();
            $table->unsignedBigInteger('campusID');
            $table->unsignedBigInteger('majorID');
            $table->integer('numberOfCourses');
            $table->unsignedBigInteger('studentID');
//            $table->

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
