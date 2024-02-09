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
            $table->id('StudentID');
            $table->string('Name', 100);
            $table->string('Email', 100)->unique();
            $table->string('Phone', 15)->nullable();
            $table->string('Address', 200)->nullable();
            $table->string('Program', 100);
            $table->decimal('GPA', 3, 2)->nullable();
            $table->date('Birthdate')->nullable();
            $table->string('Residency Status', 50);
            $table->string('Enrollment Status', 50);
            $table->string('Academic Standing', 50)->nullable();
            $table->date('Start Date')->nullable();
            $table->date('Expected Graduation Date')->nullable();
            $table->string('password');
            $table->integer('Total Credits Earned')->default(0);
            $table->unsignedBigInteger('AdvisorID')->nullable();

            $table->foreign('AdvisorID')->references('id')->on('advisors')->onDelete('set null'); // Adjust foreign key constraint as necessary
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
