<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username');
            $table->string('id_number');
            $table->unsignedBigInteger('section_id'); 
            $table->unsignedBigInteger('score_id');   
            $table->timestamps();

           
            $table->foreign('section_id')->references('id')->on('sections')->onDelete('cascade');
            $table->foreign('score_id')->references('id')->on('scores')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
}
