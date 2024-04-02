<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChucVuController extends Controller
{
    public function index() {
        return view('admin.pages.chuc_vu.index');
    }
}
