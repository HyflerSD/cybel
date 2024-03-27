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
        Schema::create('course_prerequisites', function (Blueprint $table) {
            $table->string('course_code');
            $table->string('pre_req_course_code');
            $table->foreign('pre_req_course_code')->references('course_code')->on('courses')->cascadeOnDelete();
            $table->foreign('course_code')->references('course_code')->on('courses')->cascadeOnDelete();

            $table->unique(['course_code', 'pre_req_course_code']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_prerequisites');
    }
};
