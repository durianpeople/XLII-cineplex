@extends('layouts.app')

@section('content')

<div class="container" >
    <a href="/comingsoon" class="btn btn-danger">Coming Soon</a>
    <h1 class="my-4" style="text-align:center;">NOW SHOWING</h1>
    @if(count($films)>0)
        <div class="row">
            @foreach ($films as $film)
                <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="/film/{{$film->id_film}}"><img class="card-img-top" src="uploads/film_art/{{$film->id_film}}.png" alt="{{$film->nama_film}}" style="max-width:100%; max-height:100%;"></a>
                    <div class="card-body">
                    <h4 class="card-title">
                        <a href="/film/{{$film->id_film}}">{{$film->nama_film}}</a>
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