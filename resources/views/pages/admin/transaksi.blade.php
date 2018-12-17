<?php 
use App\Transaksi;
?>
@extends('layouts.app')

@section('content')
<ul class="list-group">
<?php foreach(Transaksi::all() as $transkasi):?>
<li>
    <div class="list-group-item">
    </div>
</li>
<?php endforeach;?>
</ul>
@endsection