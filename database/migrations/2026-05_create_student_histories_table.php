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
            $table->string('term_code');
            $table->string('course_code');
            $table->string('grade')->nullable();
            $table->decimal('credits_earned', 3)->nullable();
            $table->decimal('credits_attempted', 3)->nullable();

            $table->foreignId('user_id')->constrained();

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
