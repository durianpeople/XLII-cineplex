@extends('layouts.app')

@section('content')
<?php 
use App\Film;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;
if ($mode=="edit")
	$film=Film::find(Request::route('id'));
?>
<?php if ($mode=="edit"): ?>
<form action="/admin/film/{{$film->id_film}}" method="post" enctype='multipart/form-data'>
<?php elseif ($mode=="add"): ?>
<form action="/admin/film/add" method="post" enctype='multipart/form-data'>
<?php endif; ?>
<label for="nama_film">Nama Film</label>
<input type="text" name="nama_film" value="<?php echo ($mode=='edit')?$film->nama_film:'';?>"/>
<br>
<label for="tahun_pembuatan">Tahun Pembuatan</label>
<input type="number" name="tahun_pembuatan" value="<?php echo ($mode=='edit')?$film->tahun_pembuatan:'';?>" />
<br>
<label for="durasi">Durasi</label>
<input type="number" name="durasi" value="<?php echo ($mode=='edit')?$film->durasi:'';?>" />
<br>
<?php if ($mode=="edit"): ?>
<label for="image">Gambar</label>
<input type="file" name="image" />
<?php elseif ($mode=="add"): ?>
Tambahkan gambar dengan fitur edit
<?php endif; ?>
<?php if($mode=="edit"):?>
<img src="/uploads/film_art/{{$film->id_film}}.png" />
<?php endif;?>
<br>
<input type="submit" value="Submit" />
</form>
@endsection