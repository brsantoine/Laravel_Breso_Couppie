<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tournoi_id');
            $table->foreign('tournoi_id')->references('id')->on('tournois')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('equipeA_id');
            $table->foreign('equipeA_id')->references('id')->on('equipes')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('equipeB_id');
            $table->foreign('equipeB_id')->references('id')->on('equipes')->onDelete('cascade')->onUpdate('cascade');
            $table->text('score');
            $table->text('date');
            $table->text('duree');
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
        Schema::dropIfExists('matches');
    }
}
