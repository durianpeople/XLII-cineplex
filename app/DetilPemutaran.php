<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetilPemutaran extends Model
{
    public function film() {
		return $this->belongsTo('App\Film','id_film');
	}
}
