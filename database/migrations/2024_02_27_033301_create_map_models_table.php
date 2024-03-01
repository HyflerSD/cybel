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
            $table->string('level_combination');
            $table->foreignId('course_id')->unique()->constrained('courses')->cascadeOnDelete();
//          @todo don't think this belongs here
//          $table->boolean('is_course_taken')->default(false);
            $table->bigInteger('priority_index');
            $table->text('student_interests')->nullable();
            $table->date('effective_date')->nullable();
            $table->string('institution')->default('Miami Dade College');
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
