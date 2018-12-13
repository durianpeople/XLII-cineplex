@extends('layouts.app')

@section('content')

<main role="main">
	<div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top:60px;">
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
	
	</div>
@endsection