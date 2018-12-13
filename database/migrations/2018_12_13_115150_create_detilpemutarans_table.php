<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetilpemutaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detilpemutarans', function (Blueprint $table) {
            $table->string('id_putar')->primary();
            $table->string('id_studio');
            $table->string('id_film');
            $table->string('jam_mulai');
            $table->string('jam_selesai');
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
        Schema::dropIfExists('detilpemutarans');
    }
}
