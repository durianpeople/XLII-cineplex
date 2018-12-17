<?php 
use App\Transaksi;
?>
@extends('layouts.app')

@section('content')
<?php
$transaksis=Transaksi::all();
var_dump($transaksis);
?>
@endsection