@extends('layouts.app')

@section('content')
<?php 
use App\Film;
use Illuminate\Support\Facades\Request;
use PhpParser\Node\Stmt\Echo_;
use Illuminate\Support\Facades\Storage;
if ($mode=="edit")
	$film=Film::find(Request::route('id'));
?>
<?php
if ($mode=="edit")
	echo Form::model($film, [
		'url' => '/admin/film/'.$film->id_film,
		'files' => true,
	]);
else if ($mode=="add")
	echo Form::open([
		'url' => '/admin/film/add',
		'files' => true,
	]);

echo Form::label('nama_film', 'Nama Film');
echo Form::text('nama_film');
echo "<br>";
echo Form::label('tahun_pembuatan', 'Tahun Pembuatan');
echo Form::number('tahun_pembuatan');
echo "<br>";
echo Form::label('durasi', 'Durasi');
echo Form::number('durasi');
echo "<br>";
if ($mode=="edit") {
	echo Form::label('image', 'Gambar');
	echo Form::file('image');
}
else if ($mode=="add") {
	echo "Tambahkan gambar dengan fitur edit";
}
?>
<?php if($mode=="edit"):?>
<img src="/uploads/film_art/{{$film->id_film}}.png" />
<?php endif;?>
<?php
echo "<br>";
echo Form::submit();
echo Form::close();
?>
@endsection