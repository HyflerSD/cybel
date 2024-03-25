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
            $table->string('session');
            $table->string('priority');
            $table->json('days_of_week');
            $table->string('time_of_day');
            $table->string('interest_area')->nullable();
            $table->string('mode_of_instruction');
            $table->date('expected_graduation_date')->nullable();
            $table->string('concentration_code', 200)->nullable();

            $table->foreignId('campus_id')->nullable();
            $table->foreignId('user_id')->unique()->constrained('users');
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
