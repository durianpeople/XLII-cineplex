<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserAdminController extends AdminController
{
    public function list() {
        return view('pages.admin.user');
    }
}
