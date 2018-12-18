<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\AdminController;
use App\Film;
use App\DetilPemutaran;

class FilmAdminController extends AdminController
{
    public function film() {
        return view('pages.admin.film');
    }

    public function create() {
        return view('pages.admin.filmEdit')->with('mode','add');
    }

    public function createConfirm() {
        $film=Film::create([
            'nama_film' => Input::get('nama_film'),
            'tahun_pembuatan' => Input::get('tahun_pembuatan'),
            'durasi' => Input::get('durasi'),
        ]);
        //Storage::disk('public_upload')->put('film_art/'.$film->id_film.'.png', file_get_contents(Input::file('image')->getRealPath()));
        return redirect()->intended('/admin/film');
    }

    public function edit() {
        return view('pages.admin.filmEdit')->with('mode','edit');
    }

    public function editConfirm() {
        $film=Film::find(Request::route('id'));
        if ($film->nama_film != Input::get('nama_film'))
            $film->nama_film = Input::get('nama_film');
        if ($film->tahun_pembuatan != Input::get('tahun_pembuatan'))
            $film->tahun_pembuatan = Input::get('tahun_pembuatan');
        if ($film->durasi != Input::get('durasi'))
            $film->durasi = Input::get('durasi');
        if (Input::hasFile('image')) 
            Storage::disk('public_upload')->put('film_art/'.$film->id_film.'.png', file_get_contents(Input::file('image')->getRealPath()));

        $film->save();
        return redirect()->intended('/admin/film');
    }

    public function delete() {
        Film::find(Request::route('id'))->delete();
        return redirect()->intended('/admin/film');
    }

    public function addputar() {
        $putar=DetilPemutaran::create([
            'id_studio' => 1,
            'id_film' => Input::get('id_film'),
            'jam_mulai' => Input::get('jam_mulai'),
            'jam_selesai' => Input::get('jam_selesai'),
            'harga_per_tiket' => 45000,
        ]);
        
        return redirect()->intended('/admin/film');
    }

    public function deleteputar() {
        $putar=DetilPemutaran::find(Request::route('id'));
        $putar->delete();
        return redirect()->intended('/admin/film');
    }
}
