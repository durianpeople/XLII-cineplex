<?php

use App\Film;
use App\DetilPemutaran;
$putar=DetilPemutaran::find($transaksi->id_putar);
$film=Film::find($putar->id_film);
?>

@extends('layouts.app')

@section('content')

<section class="jumbotron text-center">
  <div class="container">
    <h1>Checkout</h1>
    <div style="font-size:24px;">
      <b>Nama Film:</b> <?php echo $film->nama_film; ?><br>
      <b>Jam tayang:</b> <?php echo $putar->jam_mulai." - ".$putar->jam_selesai; ?><br>
      <b>Jumlah tiket:</b> <?php echo $transaksi->jumlah_tiket; ?><br>
      <b>Total harga:</b> <?php echo $transaksi->harga_total; ?><br>
    </div>
    <a class="btn btn-lg btn-primary" href="/nowshowing" role="button" style="margin-top:30px">Now Showing</a>
    <a class="btn btn-lg btn-success" href="/" role="button" style="margin-top:30px">Home</a>
  </div>
</section>

@endsection