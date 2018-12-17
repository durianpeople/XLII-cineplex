<?php 
use App\User;
?>
@extends('layouts.app')

@section('content')
<ul class="list-group">
<?php foreach(User::all() as $user):?>
<li>
    <div class="list-group-item">
    <!--Tampilin row disini-->
    <a href="/admin/film/delete/{{$film->id_film}}" class="btn btn-lg btn-danger" style="height:30px; width:70px; font-size:12px; margin-left:5px;">Delete</a>
    </div>
</li>
<?php endforeach;?>
</ul>
@endsection