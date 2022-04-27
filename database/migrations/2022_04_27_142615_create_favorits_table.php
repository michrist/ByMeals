<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFavoritsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favorits', function (Blueprint $table) {
            $table->id('idfavorit');
            $table->bigInteger('idmpasi')->unsigned();
            $table->foreign('idmpasi')->references('id')->on('mpasi');
            $table->bigInteger('id')->unsigned();
            $table->foreign('id')->references('id')->on('users');
        });
        Schema::table('mpasi', function (Blueprint $table) {
            $table->bigInteger('favorit_count')->nullable();
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('favorits');
    }
}
