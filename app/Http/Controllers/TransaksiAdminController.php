<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransaksiAdminController extends AdminController
{
    public function list() {
        return view('pages.admin.transaksi');
    }
}
