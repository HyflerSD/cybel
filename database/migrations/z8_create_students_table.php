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
            $table->foreignId('user_id')->unique()->constrained('users');
            $table->unsignedBigInteger('student_id')->unique();
            $table->string('phone', 15)->nullable();
            $table->string('address', 200)->nullable();
            $table->string('email');
            $table->string('concentration_code', 200)->nullable();
            $table->decimal('gpa', 3, 2)->nullable();
            $table->date('birthdate')->nullable();
            $table->string('enrollment_status', 50)->default('enrolled');
            $table->string('academic_standing', 50)->nullable();
            $table->date('start_date')->nullable();
            $table->date('expected_graduation_date')->nullable();
            $table->integer('total_credits_earned')->default(0);
            $table->json('interests')->nullable();
            $table->foreignId('campus_id')->nullable();
            $table->timestamps();

            $table->foreign('email')->references('email')->on('users');
            $table->foreign('concentration_code')->references('concentration_code')->on('concentrations')->nullOnDelete();
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
