<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetilPemutaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detil_pemutaran', function (Blueprint $table) {
            $table->string('id_putar');
            $table->string('id_studio');
            $table->string('id_film');
            $table->time('jam_mulai');
            $table->time('jam_selesai');
            $table->integer('harga_per_tiket');
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
        Schema::dropIfExists('detil__pemutarans');
    }
}
