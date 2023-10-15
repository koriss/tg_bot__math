<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maths', function (Blueprint $table) {
            $table->id();
            $table->ulid();
            $table->foreignId('students_chat_id')->constrained('students_chats')->cascadeOnDelete();
            $table->string('data');
            $table->string('answer');
            $table->jsonb('wrong_answers');
            $table->integer('try');
            $table->timestamps();
            $table->softDeletes();      
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maths');
    }
};
