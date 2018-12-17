@extends('layouts.app')

@section('content')
<?php
use App\Film;
use App\DetilPemutaran;
$id_pemutarans=[];
foreach(DetilPemutaran::all() as $pemutaran) {
	$id_pemutarans[]=$pemutaran->id_film;
}
$films=[];
foreach(Film::find($id_pemutarans) as $film) {
	$films[$film->id_film]=$film->nama_film;
}
echo Form::open([
	'url' => '/checkout',
	'id' => 'buytickets',
]);
?>
<label for="id_film">Nama Film</label>
<select name="id_film" form="buytickets">
	<?php foreach($films as $id_film => $nama_film): ?>
	<option value="{{$id_film}}">{{$nama_film}}</option>
	<?php endforeach;?>
</select>
<br>
<label for="id_putar">Jam</label>
<select name="id_putar" form="buytickets">
	
</select>
<input type="submit" value="Submit" />
<?php echo Form::close(); ?>
@endsection