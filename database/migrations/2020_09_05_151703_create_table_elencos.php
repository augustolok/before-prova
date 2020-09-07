<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableElencos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_elencos', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('jogadorid');
            $table->unsignedBigInteger('timeid');
            $table->timestamps();
            $table->foreign('jogadorid')->references('id')->on('table_jogadores');
            $table->foreign('timeid')->references('id')->on('table_nomedotimes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_elencos');
    }
}
