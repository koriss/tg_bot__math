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
        Schema::create('math_examples', function (Blueprint $table) {
            $table->id();
            $table->id();
            $table->string('question');
            $table->decimal('answer', 8, 2);
            $table->string('type'); // Model Const
            $table->tinyInteger('min_number_in_tens');
            $table->tinyInteger('max_number_in_tens');
            $table->tinyInteger('max_answer_in_tens');
            $table->timestamps();

            // Добавление индексов
            $table->index('type');
            $table->index(['min_number_in_tens', 'max_number_in_tens', 'max_answer_in_tens']);
        });
    }    
     
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('math_examples');
    }
};
