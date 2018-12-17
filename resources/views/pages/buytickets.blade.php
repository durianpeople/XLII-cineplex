@extends('layouts.app')

@section('content')
<?php
use App\Film;
$films=[];
foreach(Film::with('detilpemutaran')->get() as $film) {
	$films[$film->id_film]=$film->nama_film;
}
echo Form::open([
	'url' => '/checkout',
]);
echo Form::label('film', 'Nama Film');
echo Form::select('film', $films);
echo '<br>';
echo Form::submit();
echo Form::close();
?>
@endsection