<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedule', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->unsignedInteger('menu_pagi_id');
            $table->foreign('menu_pagi_id')->references('idmpasi')->on('mpasi');
            $table->time('waktu_pagi');
            $table->unsignedInteger('menu_siang_id');
            $table->foreign('menu_siang_id')->references('idmpasi')->on('mpasi');
            $table->time('waktu_siang');
            $table->unsignedInteger('menu_malam_id');
            $table->foreign('menu_malam_id')->references('idmpasi')->on('mpasi');
            $table->time('waktu_malam');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('schedule');
    }
}
