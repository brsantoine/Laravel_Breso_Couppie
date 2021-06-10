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
            $table->text('score')->default($value = "0 - 0");

            $today = getdate();
            $today = $today['year'] . '-' . ($today['mon']-10 < 0 ? '0'.$today['mon']:$today['mon']) . '-' . ($today['mday']-10 < 0 ? '0'.$today['mday']:$today['mday']);
            $table->text('date')->default($today);
            
            $table->text('duree')->default($value = 40);
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
