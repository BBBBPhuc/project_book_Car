<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NhanVienController extends Controller
{
    public function index() {
        return view('admin.pages.nhan_vien.index');
    }

    public function login() {
        return view('admin.pages.dang_nhap.index');
    }
}
