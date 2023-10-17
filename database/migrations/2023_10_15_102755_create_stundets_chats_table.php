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
        Schema::create('stundets_chats', function (Blueprint $table) {
            $table->id();
            $table->ulid();
            $table->string('chat')->index(); // TG, VK, FB & etc
            $table->foreignId('students_id')->constrained('students')->cascadeOnDelete();
            $table->jsonb('settings');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stundets_chats');
    }
};
