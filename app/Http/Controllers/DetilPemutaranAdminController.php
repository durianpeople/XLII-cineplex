<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DetilPemutaranAdminController extends AdminController
{
    public function list() {
        return view('pages.admin.detilpemutaran');
    }
}
