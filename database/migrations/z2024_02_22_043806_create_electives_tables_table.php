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
            $table->foreignId('course_id')->references('id')->on('courses')->cascadeOnDelete();
            $table->foreignId('plan_id')->references('id')->on('academic_plans')->cascadeOnDelete();
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
