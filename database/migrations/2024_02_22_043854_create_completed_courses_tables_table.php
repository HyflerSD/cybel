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
        Schema::create('completed_courses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('substituting_course')->nullable();
            $table->foreignId('course_code')->nullable()->constrained();
            $table->string('grade')->nullable();
            $table->foreignId('id')->nullable()->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('completed_courses');
    }
};
