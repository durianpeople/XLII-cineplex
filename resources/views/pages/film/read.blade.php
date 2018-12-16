@extends('layouts.app')

@section('content')
    
    <div class="container" style="padding:10px;">
    <a href="/nowshowing" class="btn btn-success">Now Showing</a>
    <a href="/comingsoon" class="btn btn-danger">Coming Soon</a>
    </div>

    <div class="container">
        <div class="card mt-4">
        <img class="card-img-top img-fluid" src="" alt="gambar disini">
        <div class="card-body">
          <h2 class="card-title">{{$film->nama_film}}</h2>
          <h5> {{$film->tahun_pembuatan}} </h3>
          <small >Genre:  </small>
          <br><small> Durasi: {{$film->durasi}} menit</small>
          <h4 style="margin-top:20px;">Harga Rp???.00</h4>
          <p class="card-text">
                <div class="d-block my-3">
                   
        
            <a href="/buytickets" class="btn btn-primary" style="margin:10px;">Buy Tickets</a> <br>

          </p>
         
        </div>
      </div>
      <!-- /.card -->
    </div>

    
@endsection