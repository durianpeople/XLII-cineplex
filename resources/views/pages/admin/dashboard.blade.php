@extends('layouts.app')

@section('content')

<main role="main">

	<section class="jumbotron text-center">
	  <div class="container" style="height:300px;">
		<h1 class="jumbotron-heading">Admin Dashboard</h1>

		<p>
		  <a href="/admin/film" class="btn btn-secondary my-2" style="height:70px; width:200px; font-size:30px;">Film List</a>
		  <a href="/admin/transaksi" class="btn btn-secondary my-2" style="height:70px; width:200px; font-size:30px;">Transaction</a>
			<a href="/admin/user" class="btn btn-secondary my-2" style="height:70px; width:200px; font-size:30px;">User</a>
			<a href="/admin/putar" class="btn btn-secondary my-2" style="height:70px; width:200px; font-size:30px;">Schedule</a>
		</p>
	  </div>
	</section>

@endsection