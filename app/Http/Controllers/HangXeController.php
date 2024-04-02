<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HangXeController extends Controller
{
    public function index() {
        return view('admin.pages.hang_xe.index');
    }
}
