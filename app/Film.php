<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $primaryKey='id_film';
    public function detilpemutaran() {
        return $this->hasMany('App\DetilPemutaran','id_film');
    }
}
