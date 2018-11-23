<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChallengeScoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('challenge_score', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('challenge_id');
            $table->foreign('challenge_id')->references('id')->on('challenges');
            $table->unsignedInteger('score_id');
            $table->foreign('score_id')->references('id')->on('scores');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('challenge_score');
    }
}
