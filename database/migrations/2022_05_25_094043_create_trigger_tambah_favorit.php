<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateTriggerTambahFavorit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('CREATE TRIGGER tambahfavorit BEFORE INSERT ON favorits
        FOR EACH ROW
                    UPDATE `mpasi` SET favorit_count=favorit_count+1
            WHERE idmpasi=NEW.idmpasi ;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trigger_tambah_favorit');
    }
}
