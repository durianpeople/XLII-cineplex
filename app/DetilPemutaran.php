<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetilPemutaran extends Model
{
	protected $table="detil_pemutarans";
	protected $primaryKey='id_putar';
	protected $fillable=['id_studio', 'id_film', 'jam_mulai', 'jam_selesai', 'harga_per_tiket'];
	public $incrementing=false;
    public function film() {
		return $this->belongsTo('App\Film');
	}
}
