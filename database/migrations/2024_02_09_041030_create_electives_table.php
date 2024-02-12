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
        Schema::create('electives', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('courseID');
            $table->unsignedBigInteger('majorID');

            $table->foreign('courseID')->references('courseID')->on('courses')->onDelete('cascade');
            $table->foreign('majorID')->references('majorID')->on('majors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('electives');
    }
};
