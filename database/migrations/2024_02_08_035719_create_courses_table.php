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
            $table->id('CourseID');
            $table->string('Prefix', 10);
            $table->unsignedBigInteger('CourseNumber');
            $table->string('Sequence');
            $table->string('ReferenceNumber');
            $table->string('CourseName', 100);
            $table->unsignedBigInteger('DepartmentID');
//            $table->foreign('DepartmentID')->references('id')->on('departments')->onDelete('cascade');
            $table->integer('Credits');
            $table->text('CourseDescription');
            $table->string('Session', 50);
            $table->string('Career', 50);
            $table->string('Component', 50);
            $table->string('DaysAndTimes', 50)->nullable();
            $table->string('Room', 50)->nullable();
//            $table->date('StartEndDate')->nullable();
//            $table->text('ClassNotes')->nullable();
            $table->text('EnrollmentRequirements')->nullable();
            $table->timestamps();
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
