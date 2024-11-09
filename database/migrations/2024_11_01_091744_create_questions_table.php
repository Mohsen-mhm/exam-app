<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();

            $table->foreignId('section_id')->constrained('sections')->cascadeOnDelete()->cascadeOnUpdate();

            $table->enum('type', ['essay', 'short-answer', 'true-false', 'multiple-choice'])->default('multiple-choice');
            $table->string('question');
            $table->enum('difficulty_level', ['easy', 'medium', 'hard'])->default('easy');

            $table->foreignId('created_by')->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
