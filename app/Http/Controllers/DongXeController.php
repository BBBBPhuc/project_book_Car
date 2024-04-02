<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DongXeController extends Controller
{
    public function index() {
        return view('admin.pages.dong_xe.index');
    }
}
