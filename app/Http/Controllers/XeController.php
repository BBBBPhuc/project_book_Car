<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class XeController extends Controller
{
    public function index() {
        return view('admin.pages.xe.index');
    }
}
