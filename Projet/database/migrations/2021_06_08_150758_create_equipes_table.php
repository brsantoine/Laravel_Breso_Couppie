<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('club_id');
            $table->foreign('club_id')->references('id')->on('clubs')->onDelete('cascade')->onUpdate('cascade');
            $table->text('nom');
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
        Schema::dropIfExists('equipes');
    }
}
