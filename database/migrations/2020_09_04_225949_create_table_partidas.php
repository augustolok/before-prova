<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePartidas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_partidas', function (Blueprint $table) {
            $table->id('id');
            $table->datetime('horarioinicio');
            $table->datetime('horariotermino');
            $table->unsignedBigInteger('timesid1');
            $table->unsignedBigInteger('timesid2');
            $table->unsignedBigInteger('vencendor');
            $table->unsignedBigInteger('perderdor');
            $table->timestamps();
            $table->foreign('timesid1')->references('id')->on('table_nomedotimes');
            $table->foreign('timesid2')->references('id')->on('table_nomedotimes');
            $table->foreign('Vencendor')->references('id')->on('table_nomedotimes');
            $table->foreign('perderdor')->references('id')->on('table_nomedotimes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_partidas');
    }
}
