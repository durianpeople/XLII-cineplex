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
				<img class="first-slide" src="images/ralph cover.jpg" alt="First slide">
				<div class="container">
					<div class="carousel-caption text-left">
						<h1>Now Showing</h1>
						<p>Buat ngeliat ke daftar film yang ada di detail pemutaran</p>
						<p><a class="btn btn-lg btn-primary" href="/nowshowing" role="button">Now Showing</a></p>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<img class="second-slide" src="images/dragon cover.jpg" alt="Second slide">
				<div class="container">
					<div class="carousel-caption text-right">
						<h1>Coming Soon</h1>
						<p>Buat lihat film yang udah didaftarin tapi ga ada di detail pemutaran</p>
						<p><a class="btn btn-lg btn-primary" href="/comingsoon" role="button">Coming Soon</a></p>
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


<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
	<h1 class="display-4">TOP FILMS</h1>
</div>


<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
		<div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
        <div class="my-3 py-3" style="height:100px">
          <h2 class="display-5">Aquaman</h2>
				</div>
				<div class="my-3 py-3" style="height:50px">
						<p class="lead">Now Showing</p>
					</div>
				<div class="bg-dark box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
				<img src="{{ asset('images/aquaman.jpg') }}" style="max-width:100%; max-height:100%;">
				</div>
      </div>
			<div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
					<div class="my-3 py-3" style="height:100px">
						<h2 class="display-5">Ralph Breaks the Internet</h2>
					</div>
					<div class="my-3 py-3" style="height:50px">
							<p class="lead">Now Showing</p>
						</div>
					<div class="bg-dark box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
					<img src="{{ asset('images/ralph.jpg') }}" style="max-width:100%; max-height:100%;">
					</div>
				</div>
				<div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
						<div class="my-3 py-3" style="height:100px">
							<h2 class="display-5">Fantastic Beasts: The Crimes of Grindelwald</h2>
						</div>
						<div class="my-3 py-3" style="height:50px">
								<p class="lead">Now Showing</p>
							</div>
						<div class="bg-dark box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
						<img src="{{ asset('images/fantastic.jpg') }}" style="max-width:100%; max-height:100%;">
						</div>
					</div>
					<div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
							<div class="my-3 py-3" style="height:100px">
								<h2 class="display-5">Hanum dan Rangga</h2>
							</div>
							<div class="my-3 py-3" style="height:50px">
									<p class="lead">Now Showing</p>
								</div>
							<div class="bg-dark box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
							<img src="{{ asset('images/hanum.jpg') }}" style="max-width:100%; max-height:100%;">
							</div>
						</div>
		</div>
</div>

</div>

@endsection