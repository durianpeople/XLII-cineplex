<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Input;
use App\Film;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function dashboard() {
        return view('pages.admin.dashboard');
    }

    public function film() {
        return view('pages.admin.film');
    }

    public function filmEdit() {
        return view('pages.admin.filmEdit');
    }

    public function filmEditSubmit() {
        $film=Film::find(Request::route('id'));
        if ($film->nama_film != Input::get('nama_film'))
            $film->nama_film = Input::get('nama_film');
        if ($film->tahun_pembuatan != Input::get('tahun_pembuatan'))
            $film->tahun_pembuatan = Input::get('tahun_pembuatan');
        if ($film->durasi != Input::get('durasi'))
            $film->durasi = Input::get('durasi');
        if (Input::hasFile('image')) {
            Storage::disk('local')->put($film->id_film, file_get_contents(Input::file('image')->getRealPath()));
        }

        $film->save();
        return redirect()->intended('/admin/film');
    }
}
