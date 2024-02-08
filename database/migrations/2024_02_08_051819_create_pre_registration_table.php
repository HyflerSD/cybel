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
            $table->id('MapID');
            $table->unsignedBigInteger('StudentID')->nullable(); // Allowing null for potential students
            $table->json('MapData');
            $table->string('Status');
            $table->timestamp('CreatedAt')->useCurrent();
            $table->boolean('ReviewedByAdvisor')->default(false);

            // Foreign key constraint
//            $table->foreign('StudentID')->references('id')->on('students')
//                ->onDelete('set null'); // Set StudentID to null if the referenced student record is deleted
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
