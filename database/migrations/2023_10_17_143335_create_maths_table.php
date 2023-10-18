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
            $table->unsignedBigInteger('student_chat_id');
            $table->foreign('student_chat_id')->references('id')->on('student_chats');
            $table->string('data');
            $table->string('answer');
            $table->integer('status')->default(0); // 0 open 1 solved 2 skip
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
