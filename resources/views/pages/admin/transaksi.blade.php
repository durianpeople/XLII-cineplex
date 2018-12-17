<?php 
use App\Transaksi;
?>
@extends('layouts.app')

@section('content')
<table class="table">
        <thead>
            <tr>
                <th scope="col">ID Transaksi</th>
                <th scope="col">ID Putar</th>
                <th scope="col">ID User</th>
                <th scope="col">Jumlah Tiket</th>
                <th scope="col">Harga Total</th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <?php foreach(Transaksi::all() as $transkasi):?>
            <?php 
                echo $transaksi;
                die();
            ?>
            <td>{{$transaksi->id_transaksi}}</td>
            <td>{{$transaksi->id_putar}}</td>
            <td>{{$transaksi->id_user}}</td>
            <td>{{$transaksi->jumlah_tiket}}</td>
            <td>{{$transaksi->harga_total}}</td>
            
            <?php endforeach;?>
        </tr>
        </tbody>
    </table>
@endsection