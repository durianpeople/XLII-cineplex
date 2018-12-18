<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Film;
use App\FilmGenre;
use App\Genre;
use App\DetilPemutaran;

class FilmController extends Controller
{
    public function daftarFilm() {
        $films = Film::whereNotNull('durasi')->orderBy('id_film','asc')->paginate(4);
        return view('pages.film.main')->with('films',$films);
    }

    public function nowShowing() {
        $films = Film::whereNotNull('durasi')->orderBy('id_film','asc')->paginate(4);
        return view('pages.film.nowshowing')->with('films',$films);
    }

    public function details($id)
    {
        $film = Film::find($id);
        $filmgenres = FilmGenre::where('id_film',$id)->pluck('id_genre');
        $genres = Genre::whereIn('id_genre',$filmgenres)->get();
        $pemutarans = DetilPemutaran::where('id_film', $id)->get();
        return view('pages.film.read')->with('film',$film)->with('filmgenres',$filmgenres)->with('genres',$genres)->with('pemutarans',$pemutarans);
    }

    public function comingSoon() {
        $films = Film::whereNull('durasi')->paginate(4);
        return view ('pages.film.comingsoon')->with('films',$films);
    }

    public function buyTickets() {
        $id_pemutaran = DetilPemutaran::pluck('id_film');
        $films = Film::whereIn('id_film',$id_pemutaran)->pluck('nama_film');
        $jam = DetilPemutaran::select('jam_mulai','jam_selesai')->distinct()->get();
        return view ('pages.buytickets')->with('id_pemutaran',$id_pemutaran)->with('films',$films)->with('jam',$jam);
    }

    public function testing() {
        return view('test');
    }

}
