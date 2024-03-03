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
        Schema::create('concentrations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('program_code');
            $table->string('plan_code')->unique();
            $table->text('description');
            $table->foreign('program_code')->references('code')->on('programs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('concentrations');
    }
};
