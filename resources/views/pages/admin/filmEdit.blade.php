@extends('layouts.app')

@section('content')
<?php 
use App\Film;
use App\DetilPemutaran;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;
if ($mode=="edit") {
	$film=Film::find(Request::route('id'));
	$pemutarans=DetilPemutaran::where('id_film', $film->id_film)->get();
}
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
	<?php echo Form::close(); ?>
	@if($mode=="edit")
	<h1>Daftar pemutaran</h1>
	<ul>
		@foreach($pemutarans as $pemutaran)
			<li>{{$pemutaran->jam_mulai}} - {{$pemutaran->jam_selesai}} <a href="/admin/film/delete-putar/{{$pemutaran->id_putar}}">(hapus)</a></li>
		@endforeach
	</ul>

	<?php echo Form::open([
		'url' => '/admin/film/add-putar',
	]);?>
		<input type="hidden" name="id_film" value="{{$film->id_film}}" />
		<input type="time" id="jm" name="jam_mulai" min="10:00" max="22:00"> - <input type="time" id="js" name="jam_selesai" min="10:00" max="22:00">
		<input type="submit" value="Tambah jadwal" />
	<?php echo Form::close(); ?>
	<script>
	$(function(){
		$('#jm').change(function(){
			$('#js').val(addTime($('#jm').val(),{{$film->durasi}}));
		});
	})
	function addTime(time, minsToAdd) {
		var newTime = new Date(new Date("1970/01/01 " + time).getTime() + minsToAdd * 60000).toLocaleTimeString('en-UK', { hour: '2-digit', minute: '2-digit', hour12: false });
		return newTime;
	}
	</script>
	@endif
</div>

@endsection