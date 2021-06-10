<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdherentMatchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adherent_match', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('adherent_id');
            $table->foreign('adherent_id')->references('id')->on('adherents')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('match_id');
            $table->foreign('match_id')->references('id')->on('matches')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
            $table->unsignedInteger('panier2points')->default($value = 0);
            $table->unsignedInteger('panier3points')->default($value = 0);
            $table->unsignedInteger('fautesCommises')->default($value = 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adherent_match');
    }
}
