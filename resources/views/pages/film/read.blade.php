@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="container" style="padding:10px;">
          <a href="/nowshowing" class="btn btn-success">Now Showing</a>
          <a href="/comingsoon" class="btn btn-danger">Coming Soon</a>
        </div>

      <div class="row" style="margin-top:20px;">
        <div class="col-md-4 order-md-2 mb-4">
          <img class="card-img-top img-fluid" src="/uploads/film_art/{{$film->id_film}}.png" alt="gambar disini">
        </div>

          <div class="col-md-8 order-md-1">
            <div class="card-body">
              <h2 class="card-title">{{$film->nama_film}}</h2>
              <h5> {{$film->tahun_pembuatan}} </h3>
              <small >Genre:  
                @foreach ($genres as $genre)
                    {{$loop->first ? '' : ','}}
                    {{$genre->nama_genre}}
                @endforeach
              </small>
              <br><small> Durasi: {{$film->durasi}} menit</small><br>
              <?php
                echo Form::open([
                  'url' => '/checkout',
                  'id' => 'buytickets',
                ]);
              ?>
              <br><br>
                <label for="id_putar">Jam: </label>
                <select name="id_putar" form="buytickets">
                  @foreach($pemutarans as $pemutaran)
                    <option value="{{$pemutaran->id_putar}}">{{$pemutaran->jam_mulai}} - {{$pemutaran->jam_selesai}}</option>
                  @endforeach
                </select><br>
                <label for="jumlah_tiket">Jumlah: </label>
                <input type="number" name="jumlah_tiket" value="1" /><br>
                <input type="submit" value="Buy Ticket" class="btn btn-primary" />
              <?php echo Form::close(); ?>
              
            </div>  
          </div>
      </div>
    </div>

    
@endsection