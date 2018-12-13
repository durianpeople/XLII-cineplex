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
	
		<div class="row">
			<div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
			<div class="card h-100">
				<a href="#"><img class="card-img-top" src="images/aquaman.jpg" alt="" style="max-width:100%; max-height:100%;"></a>
				<div class="card-body">
				<h4 class="card-title" style="height:100px;">
					<p>Aquaman</p>
				</h4>
				<p><a class="btn btn-lg btn-primary" href="" role="button">Read More</a></p>
				</div>
			</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
			<div class="card h-100">
				<a href="#"><img class="card-img-top" src="images/ralph.jpg" alt="" style="max-width:100%; max-height:100%;"></a>
				<div class="card-body">
				<h4 class="card-title" style="height:100px;">
					<p>Ralph Breaks the Internet</p>
				</h4>
				<p><a class="btn btn-lg btn-primary" href="" role="button">Read More</a></p>
				</div>
			</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
				<div class="card h-100">
					<a href="#"><img class="card-img-top" src="images/fantastic.jpg" alt="" style="max-width:100%; max-height:100%;"></a>
					<div class="card-body">
					<h4 class="card-title" style="height:100px;">
						<p>Fantastic Beasts: The Crimes of Grindelwald<p>
					</h4>
					<p><a class="btn btn-lg btn-primary" href="" role="button">Read More</a></p>
					</div>
				</div>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
				<div class="card h-100" >
					<a href="#"><img class="card-img-top" src="images/robin.jpg" alt="" style="max-width:100%; max-height:100%;"></a>
					<div class="card-body">
					<h4 class="card-title" style="height:100px;">
						<p>Robin Hood<p>
					</h4>
					<p><a class="btn btn-lg btn-primary" href="" role="button">Read More</a></p>
					</div>
				</div>
				</div>
		</div>
	
	
		</div>
	</div>
	</div>
@endsection