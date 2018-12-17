<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Film;
use App\FilmGenre;
use App\Genre;
use App\DetilPemutaran;

use DB;

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
        return view ('pages.buytickets');
    }

    public function testing() {
        return view('test');
    }

}
