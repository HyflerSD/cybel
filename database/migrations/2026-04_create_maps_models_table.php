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
            $table->json('courses');
            $table->date('effective_date');
            $table->integer('course_count');
            $table->integer('identifier_key');
            $table->string('concentration_code');
            $table->string('institution')->default('MDC');

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
