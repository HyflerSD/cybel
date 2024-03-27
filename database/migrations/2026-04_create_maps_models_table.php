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
        Schema::create('map_models', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('course_code');
            $table->integer('priority_index');
            $table->json('level_combination');
            $table->string('concentration_code');
            $table->date('effective_date')->nullable();
            $table->string('institution')->default('Miami Dade College');

            $table->foreign('course_code')->references('course_code')->on('courses');
            $table->foreign('concentration_code')->references('concentration_code')
                  ->on('concentrations');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('map_models');
    }
};
