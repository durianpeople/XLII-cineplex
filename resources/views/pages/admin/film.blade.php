<?php 
use App\Film;
?>
@extends('layouts.app')

@section('content')
<ul class="list-group">
<?php foreach(Film::all() as $film):?>
<li>
    <div class="list-group-item">
    <a href="/admin/film/{{$film->id_film}}" >{{$film->nama_film}}</a> 
    <a href="/admin/film/delete/{{$film->id_film}}" class="btn btn-lg btn-danger" style="height:30px; width:70px; font-size:12px; margin-left:5px;">Delete</a>
    </div>
</li>
<?php endforeach;?>
</ul>
<a href="/admin/film/add/" class="btn btn-secondary my-2">Tambah film</a>
@endsection