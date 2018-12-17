<?php 
use App\DetilPemutaran;
use App\Film;
?>
@extends('layouts.app')

@section('content')
<ul class="list-group">
<?php foreach(DetilPemutaran::all() as $detilpemutaran):?>
<li>
    <div class="list-group-item">
        <!--row disini-->

    </div>
</li>
<?php endforeach;?>
</ul>
@endsection