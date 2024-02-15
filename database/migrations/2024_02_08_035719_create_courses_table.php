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
        Schema::create('courses', function (Blueprint $table) {
            $table->id('courseID');
            $table->string('prefix', 10);
            $table->unsignedBigInteger('courseNumber');
            $table->string('sequence');// course in the order they have to be taken
            //prioty the order we want you to take your classes. level 1 can have corresponding priorities in it
            $table->string('referenceNumber');
            $table->string('courseName', 100);
            $table->unsignedBigInteger('departmentID');
            $table->integer('credits');
            $table->text('courseDescription');
            $table->string('Session', 50);
            $table->string('career', 50);
            $table->string('component', 50);
            $table->string('daysAndTimes', 50)->nullable();
            $table->string('room', 50)->nullable();
            $table->date('StartEndDate')->nullable();
            $table->text('ClassNotes')->nullable();
            $table->text('enrollmentRequirements')->nullable();
            $table->timestamps();
            $table->foreign('departmentID')->references('departmentID')->on('departments')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
