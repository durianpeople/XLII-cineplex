@extends('layouts.app')

@section('content')

<div class="container" >
        <h1 class="my-4" style="text-align:center; padding-top:50px;">NOW SHOWING</h1>
        <div class="row">
        @if(count($films)>0)
            @foreach ($films as $film)
                <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="{{$film->id_film}}"><img class="card-img-top" src="images/{{$film->image}}" alt="" style="max-width:100%; max-height:100%;"></a>
                    <div class="card-body">
                    <h4 class="card-title">
                        <a href="{{$film->id_film}}">{{$film->nama_film}}</a>
                    </h4>
                    </div>
                </div>
                </div>
            @endforeach
        @else
            <h1>No films yet!</h1>
        @endif
    </div>

    <ul class="pagination justify-content-center">
            <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
            </a>
            </li>
            <li class="page-item">
            <a class="page-link" href="#">1</a>
            </li>
            <li class="page-item">
            <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item">
            <a class="page-link" href="#">3</a>
            </li>
            <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
            </a>
            </li>
        </ul>

    </div>
</div>

@endsection