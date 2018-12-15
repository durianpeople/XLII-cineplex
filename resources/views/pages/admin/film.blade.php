<?php 
use App\Film;
?>
@extends('layouts.app')

@section('content')
<ul>
<?php foreach(Film::all() as $film):?>
<li><a href="/admin/film/{{$film->id_film}}">{{$film->nama_film}}</a> 
<a href="/admin/film/delete/{{$film->id_film}}">(hapus)</a></li>
<?php endforeach;?>
<a href="/admin/film/add/">Tambah film</a>
</ul>
@endsection