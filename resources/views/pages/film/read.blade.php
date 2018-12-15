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
          <h2 class="card-title">Judul disini</h2>
          <h5> Tahun pembuatan disini </h3>
          <small >Genre disini  </small><small> Durasi disini </small>
          <h4 style="margin-top:20px;">Harga disini</h4>
          <p class="card-text">
                <div class="d-block my-3">
                   
        
            <a href="/buytickets" class="btn btn-primary" style="margin:10px;">Buy Tickets</a> <br>

          </p>
         
        </div>
      </div>
      <!-- /.card -->
    </div>

    
@endsection