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
            $table->id();
            $table->timestamps();
            $table->foreignId('campus_id')->constrained();
            $table->foreignId('student_id')->constrained();
            $table->foreignId('course_id')->constrained();
            $table->foreign('grade')->references('grade')->on('completed_courses');
            $table->string('term')->nullable();
            $table->string('concentration_code')->nullable();
            $table->foreign('concentration_code')->references('code')->on('concentrations');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('degree_plans');
    }
};
