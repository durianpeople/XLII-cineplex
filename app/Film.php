<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $table='films';
    protected $primaryKey='id_film';
    protected $fillable=['nama_film', 'tahun_pembuatan', 'durasi'];
    public $incrementing=false;
    public function detilpemutaran() {
        return $this->hasMany('App\DetilPemutaran','id_film');
    }
}
