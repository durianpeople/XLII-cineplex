<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $primaryKey='id_genre';
    protected $fillable=['id_putar','id_user','jumlah_tiket'];
    public $incrementing=false;
}
