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
            $table->id('studentID');
            $table->string('name', 100);
            $table->string('email', 100)->unique();
            $table->string('phone', 15)->nullable();
            $table->string('address', 200)->nullable();
            $table->string('program', 100);
            $table->decimal('GPA', 3, 2)->nullable();
            $table->date('birthdate')->nullable();
            $table->string('Residency Status', 50);
            $table->string('Enrollment Status', 50);
            $table->string('Academic Standing', 50)->nullable();
            $table->date('Start Date')->nullable();
            $table->date('Expected Graduation Date')->nullable();
            $table->string('password');
            $table->integer('Total Credits Earned')->default(0);
            $table->unsignedBigInteger('advisorID')->nullable();
            $table->unsignedBigInteger('campusID');

            $table->foreign('campusID')->references('campusID')->on('campus');
            $table->foreign('advisorID')->references('advisorID')->on('advisors')->onDelete('set null'); // Adjust foreign key constraint as necessary
            $table->timestamps();
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
