@extends('layouts.app')

@section('content')

<div class="container" >
        <a href="/nowshowing" class="btn btn-success">Now Showing</a>
        <h1 class="my-4" style="text-align:center; ">COMING SOON</h1>
    @if (count($films)>0)
        <div class="row">
        @foreach ($films as $film)
            <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <img class="card-img-top" src="uploads/film_art/{{$film->id_film}}.png" alt="{{$film->id_film}}" style="max-width:100%; max-height:100%;">
                <div class="card-body">
                <h4 class="card-title">
                    {{$film->nama_film}}
                </h4>
                </div>
            </div>
            </div>
        @endforeach
        </div>
        <div class="pagination justify-content-center">{{$films->links()}}</div>
    @else
        <h1>No films yet!</h1>
    @endif
    </div>
</div>

@endsection