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
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->uuid();

            $table->string('title');
            $table->text('description');

            $table->integer('duration')->nullable();
            $table->dateTime('start_time')->nullable();
            $table->dateTime('end_time')->nullable();

            $table->enum('status', ['published', 'draft'])->default('draft');
            $table->foreignId('created_by')->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exams');
    }
};
