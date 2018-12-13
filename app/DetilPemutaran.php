<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetilPemutaran extends Model
{
	protected $primaryKey='id_putar';
	public $incrementing=false;
    public function film() {
		return $this->belongsTo('App\Film');
	}
}
