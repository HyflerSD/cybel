<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('email');
            $table->date('birthdate')->nullable();
            $table->date('start_date')->nullable();
            $table->string('phone', 15)->nullable();
            $table->string('address', 200)->nullable();
            $table->unsignedBigInteger('student_id')->unique();
            $table->decimal('gpa', 3, 2)->nullable();
            $table->integer('total_credits_earned')->default(0);
            $table->string('academic_standing', 50)->nullable();
            $table->foreignId('user_id')->unique()->constrained('users');
            $table->foreign('email')->references('email')->on('users');
            $table->string('enrollment_status', 50)->default('enrolled');
            $table->foreignId('advisor_id')->nullable()->constrained('users')->onDelete('set null');
        });
    }




    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
