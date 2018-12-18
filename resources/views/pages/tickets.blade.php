<?php

use App\Transaksi;
use App\DetilPemutaran;
use App\Film;
$transaksis=Transaksi::where('id_user', Auth::user()->id)->get();
?>

@extends('layouts.app')

@section('content')
<?php echo "ID user: ".Auth::user()->id."<br>"; ?>
Daftar tiket:<br>
@if ($transaksis->isEmpty())
Tidak ada tiket
@else
<ul>
	@foreach($transaksis as $transaksi)
		<?php $putar=DetilPemutaran::find($transaksi->id_putar); $film=Film::find($putar->id_film); ?>
		<li>Nama film: {{$film->nama_film}}<br>
		Tanggal main: {{$transaksi->created_at->toFormattedDateString()}}<br>
		Jam main: {{$putar->jam_mulai}} - {{$putar->jam_selesai}}<br>
		@if ($transaksi->created_at->isToday())
		<b>TAYANG HARI INI</b>
		@endif
		</li>
	@endforeach
</ul>
@endif
@endsection