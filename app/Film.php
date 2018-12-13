<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    //
    public function pemutaran() {
        return $this->hasMany('App\DetilPemutaran');
    }
}
