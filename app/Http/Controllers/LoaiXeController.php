<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoaiXeController extends Controller
{
    public function index()
    {
        return view('admin.pages.loai_xe.index');
    }
}
