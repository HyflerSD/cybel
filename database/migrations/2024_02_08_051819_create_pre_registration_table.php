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
        Schema::create('pre_registration', function (Blueprint $table) {
            $table->id('mapID');
            $table->unsignedBigInteger('studentID')->nullable(); // Allowing null for potential students
            $table->json('mapData');
            $table->string('status');
            $table->timestamps();
            $table->boolean('reviewedByAdvisor')->default(false);

            // Foreign key constraint
            $table->foreign('studentID')->references('studentID')->on('students');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pre_registration');
    }
};
