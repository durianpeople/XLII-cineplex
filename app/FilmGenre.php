<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FilmGenre extends Model
{
    protected $primaryKey=['id_film','id_genre'];
    protected $fillable=['id_film','id_genre'];
    public $incrementing=false;
}
