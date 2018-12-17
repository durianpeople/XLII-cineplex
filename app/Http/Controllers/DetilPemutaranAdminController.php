<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\DetilPemutaran;
use App\Film;

class DetilPemutaranAdminController extends AdminController
{
    public function list() {
        return view('pages.admin.detilpemutaran');
    }
}
