<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Film;

class FilmController extends Controller
{
    public function daftarFilm() {
        return view('pages.film.main');
    }

    public function nowShowing() {
        $films = Film::orderBy('id_film','asc')->paginate(4);
        return view('pages.film.nowshowing')->with('films',$films);
    }

    public function details($id)
    {
        $film = Film::find($id);
        return view('pages.film.details')->with('film',$film);
    }

    public function comingSoon() {
        return view ('pages.film.comingsoon');
    }

    public function buyTickets() {
        return view ('pages.buytickets');
    }

    public function testing() {
        return view('test');
    }

}
