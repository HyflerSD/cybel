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
        Schema::create('student_profiles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('priority');
            $table->json('time_of_day');
            $table->json('days_of_week');
            $table->string('mode_of_instruction');
            $table->string('interest_area')->nullable();
            $table->date('expected_graduation_date')->nullable();
            $table->integer('courses_per_semester')->default(1);
            $table->string('concentration_code', 200)->nullable();
            $table->unsignedBigInteger('total_credits_earned')->default(0);

            $table->foreignId('campus_id')->constrained();
            $table->foreignId('user_id')->constrained('users');
            $table->foreign('concentration_code')->references('concentration_code')->on('concentrations')->nullOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_profiles');
    }
};
