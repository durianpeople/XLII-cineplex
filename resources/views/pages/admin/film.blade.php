@extends('layouts.app')

@section('content')
<ul>
<?php 
use App\Film;
foreach(Film::all() as $film):
?>
<li><a href="/admin/film/{{$film->id_film}}">{{$film->nama_film}}</a></li>
<?php endforeach;?>
</ul>
@endsection