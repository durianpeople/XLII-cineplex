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
        Schema::create('detil_pemutarans', function (Blueprint $table) {
            $table->increments('id_putar');
            $table->unsignedInteger('id_studio');
            $table->unsignedInteger('id_film');
            $table->string('jam_mulai');
            $table->string('jam_selesai');
            $table->integer('harga_per_tiket');
            $table->timestamps();

            $table->foreign('id_film')->references('id_film')->on('films');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detil_pemutarans');
    }
}
