<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studio extends Model
{
    protected $primaryKey='id';
    protected $fillable=['kapasitas'];
    public $incrementing=false;
}
