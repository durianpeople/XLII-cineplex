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
        $films = Film::all();
        return view('pages.film.nowshowing')->with('films',$films);
    }

}
