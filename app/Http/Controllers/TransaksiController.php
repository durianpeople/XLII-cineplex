<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Transaksi;
use Illuminate\Support\Facades\Auth;
use App\DetilPemutaran;

class TransaksiController extends Controller
{
    public function checkout() {
        $transaksi=new Transaksi;
        $transaksi->id_putar=Input::get('id_putar');
        $transaksi->id_user=Auth::user()->id;
        $transaksi->jumlah_tiket=Input::get('jumlah_tiket');
        $transaksi->harga_total=DetilPemutaran::find(Input::get('id_putar'))->harga_per_tiket*Input::get('jumlah_tiket');
        if (Input::get('checkout')=='1')
            if ($transaksi->save())
                return redirect()->intended('/tickets');
        return view('pages.checkout')->with('transaksi', $transaksi);
    }

    public function tickets() {
        return view('pages.tickets');
    }
}
