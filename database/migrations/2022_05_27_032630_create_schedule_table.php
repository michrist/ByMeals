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
            $table->datetime('tanggal');
            $table->string('menu_pagi_id');
            // $table->foreign('menu_pagi_id')->references('id')->on('mpasi');
            $table->time('waktu_pagi');
            $table->unsignedBigInteger('menu_siang_id');
            $table->foreign('menu_siang_id')->references('id')->on('mpasi');
            $table->time('waktu_siang');
            $table->unsignedBigInteger('menu_malam_id');
            $table->foreign('menu_malam_id')->references('id')->on('mpasi');
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
