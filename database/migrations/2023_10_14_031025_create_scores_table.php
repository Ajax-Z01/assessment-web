<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScoresTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('scores', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->integer('verbal_sw');
            $table->integer('verbal_kat');
            $table->integer('numeric_sw');
            $table->integer('numeric_kat');
            $table->integer('abstract_sw');
            $table->integer('abstract_kat');
            $table->integer('total_score');
            $table->integer('iq');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('scores');
    }
}
