@extends('layouts.app')

@section('content')
<?php use App\Film; ?>
Film yang tersedia:<br>
<ul>
	@foreach(Film::all() as $film)
		<li>{{$film->nama_film}}</li>
	@endforeach
</ul>
@endsection