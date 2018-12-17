<?php 
use App\DetilPemutaran;
use App\Film;
use App\Studio;
?>
@extends('layouts.app')

@section('content')
<div class="container">
        <table class="table">
            <tbody>
            @foreach(DetilPemutaran::all() as $detilpemutaran)
            <tr>
                <td>{{$detilpemutaran->nama_film}}</td>
                <td>{{$detilpemutaran->jam_mulai}}</td>
                <td>{{$detilpemutaran->jam_selesai}}</td>
                <td>{{$detilpemutaran->studio}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection