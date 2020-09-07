<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePlacares extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_placares', function (Blueprint $table) {
            $table->id('id');
            $table->Integer('gol');
            $table->unsignedBigInteger('jogadorid');
            $table->unsignedBigInteger('timeid');
            $table->unsignedBigInteger('partidaid');
            $table->timestamps();
            $table->foreign('jogadorid')->references('id')->on('table_jogadores');
            $table->foreign('timeid')->references('id')->on('table_nomedotimes');
            $table->foreign('partidaid')->references('id')->on('table_partidas');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_placares');
    }
}
