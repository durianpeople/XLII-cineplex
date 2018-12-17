<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table='transaksis';
    protected $primaryKey='id_transaksi';
    protected $fillable=['id_putar','id_user','jumlah_tiket', 'harga_total'];
    public $incrementing=false;
}
