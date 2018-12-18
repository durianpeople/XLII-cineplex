@extends('layouts.app')

@section('content')
<?php
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
<label for="jam">Jam</label>
<select name="jam" form="buytickets">
	<?php foreach($jam as $jam1): ?>
	<option value="{{$jam1}}">{{$jam1->jam_mulai}} - {{$jam1->jam_selesai}}</option>
	<?php endforeach;?>
</select>
<input type="submit" value="Submit" />
<?php echo Form::close(); ?>
@endsection