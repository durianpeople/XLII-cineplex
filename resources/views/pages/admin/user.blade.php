<?php 
use App\User;
?>
@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach(User::all() as $user):?>
            <tr>
                
                <td>{{$user->id}}</td> 
                <td>{{$user->name}}</td> 
                <td>{{$user->email}}</td>
                <td> <a href="/admin/film/delete/{{$user->id}}" class="btn btn-lg btn-danger" style="height:30px; width:70px; font-size:12px; margin-left:5px;">Delete</a> </td>
                </div>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>
@endsection