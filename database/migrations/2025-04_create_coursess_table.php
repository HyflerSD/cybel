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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('course_code')->unique();
            $table->string('course_name', 100);
            $table->integer('credits')->default(4);
            $table->integer('course_level')->nullable();
            $table->text('course_description')->nullable();
            $table->boolean('gen_ed')->nullable();
            $table->boolean('core_ed')->nullable();
            $table->boolean('elective_ed')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
