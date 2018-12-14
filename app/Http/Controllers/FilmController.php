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

}
