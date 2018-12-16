@extends('layouts.app')

@section('content')

<main role="main">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="first-slide" src="images/aquaman cover 2.jpg" alt="First slide" style="max-width:100%; max-height:100%;">
				<div class="container">
					<div class="carousel-caption text-center">
						<p><a class="btn btn-lg btn-success" href="/nowshowing" role="button">Now Showing</a></p>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<img class="second-slide" src="images/dragon cover.jpg" alt="Second slide" style="max-width:100%; max-height:100%;">
				<div class="container">
					<div class="carousel-caption text-center">
						<p><a class="btn btn-lg btn-danger" href="/comingsoon" role="button">Coming Soon</a></p>
					</div>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	
	<div class="container" style = "margin-bottom:40px;">
		<h1 class="my-4" style="text-align:center; padding-top:50px;">POPULAR TITLES</h1>
	
		@if(count($films)>0)
			<div class="row">
			@foreach ($films as $film)
				<div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
				<div class="card h-100">
					<a href="/read/{{$film->id_film}}"><img class="card-img-top" src="uploads/film_art/{{$film->id_film}}.png" alt="" style="max-width:100%; max-height:100%;"></a>
					<div class="card-body">
					<h4 class="card-title" style="height:100px;">
						<p>{{$film->nama_film}}</p>
					</h4>
					<p><a class="btn btn-lg btn-primary" href="/read/{{$film->id_film}}" role="button">Read More</a></p>
					</div>
				</div>
				</div>
			@endforeach
			</div>
			{{-- <div class="pagination justify-content-center">{{$films->links()}}</div> --}}
    	@else
        	<h1>No films yet!</h1>
    	@endif
	</div>
@endsection