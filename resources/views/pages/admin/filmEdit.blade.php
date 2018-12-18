@extends('layouts.app')

@section('content')
<?php 
use App\Film;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;
if ($mode=="edit")
	$film=Film::find(Request::route('id'));
?>

<div class="container">
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
	?>
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
	<div style="height:500px; width:350px;">
	<?php if($mode=="edit"):?>
	<img src="/uploads/film_art/{{$film->id_film}}.png" class="card-img-top img-fluid"/>
	<?php endif;?>
	</div>
	<br>
	<input type="submit" value="Submit" />
	<?php Form::close(); ?>
</div>
@endsection