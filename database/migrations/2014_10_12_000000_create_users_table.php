<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username')->unique;
            $table->string('email')->unique();
            $table->string('pekerjaan')->nullable();
            $table->string('alamat')->nullable();
            $table->string('namebayi')->nullable();
            $table->date('date1')->nullable();
            $table->date('date')->nullable();
            $table->integer('tinggi')->nullable();
            $table->float('berat')->nullable();
            $table->string('gender')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->foreignId('mpasi_id')->nullable();
            $table->foreignId('jadwal_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
