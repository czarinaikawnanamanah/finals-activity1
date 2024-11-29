<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHangmanTable extends Migration
{
    public function up()
    {
        Schema::create('hangman', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('player_id');
            $table->integer('score');
            $table->timestamps();
            $table->foreign('player_id')
                  ->references('id')->on('players')
                  ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('hangman');
    }
}
