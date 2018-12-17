<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->increments('id_transaksi');
            $table->unsignedInteger('id_putar');
            $table->unsignedInteger('id_user');
            $table->unsignedInteger('jumlah_tiket');
            $table->integer('harga_total')->default(0);
            $table->timestamps();

            $table->foreign('id_putar')->references('id_putar')->on('detil_pemutarans');
            $table->foreign('id_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
}
