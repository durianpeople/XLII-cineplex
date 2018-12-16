<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    // protected $table='genres';
    protected $primaryKey='id_genre';
    protected $fillable=['nama_genre'];
    public $incrementing=false;
}
