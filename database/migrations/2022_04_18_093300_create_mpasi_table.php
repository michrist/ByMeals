<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMpasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mpasi', function (Blueprint $table) {
            $table->increments('idmpasi');
            $table->text('nama', 100);
            $table->integer('umur');
            $table->text('bahan');
            $table->text('kuantitas');
            $table->text('kandungan');
            $table->text('deskripsi');
            $table->text('prosedur');
            $table->text('durasi');
            $table->text('waktu');
            $table->mediumText('gambar');
            $table->timestamps();
            $table->integer('kategorirentang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mpasi');
    }
}
