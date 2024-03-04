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
        Schema::create('student_histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->string('term_code');
            $table->string('concentration_code');
            $table->string('course_code');
            $table->string('grade')->nullable();
            $table->decimal('credits_earned', 3)->nullable();
            $table->decimal('credits_attempted', 3)->nullable();

            $table->foreign('concentration_code')->references('concentration_code')->on('concentrations');
//            $table->foreign('course_code')->references('course_code')->on('courses');
            $table->foreign('term_code')->references('term_code')->on('terms');
            $table->foreign('student_id')->references('student_id')->on('students');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_histories');
    }
};
