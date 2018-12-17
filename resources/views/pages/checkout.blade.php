<?php

use App\Film;
use App\DetilPemutaran;
$putar=DetilPemutaran::find($transaksi->id_putar);
$film=Film::find($putar->id_film);
?>

@extends('layouts.app')

@section('content')
<h1>Checkout</h1>
Nama film: <?php echo $film->nama_film; ?><br>
Jam tayang: <?php echo $putar->jam_mulai." - ".$putar->jam_selesai; ?><br>
Jumlah tiket: <?php echo $transaksi->jumlah_tiket; ?><br>
Total harga: <?php echo $transaksi->harga_total; ?><br>
<input type="button" value="Checkout" onclick="document.getElementById('checkout').submit()" />

<?php echo Form::open([
	'url' => '/checkout',
	'id' => 'checkout',
]);?>
@csrf
<input type="hidden" name="id_putar" value="{{$transaksi->id_putar}}" />
<input type="hidden" name="jumlah_tiket" value="{{$transaksi->jumlah_tiket}}" />
<input type="hidden" name="checkout" value="1" />
<?php echo Form::close(); ?>
@endsection