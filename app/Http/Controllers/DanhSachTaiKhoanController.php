<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DanhSachTaiKhoanController extends Controller
{
    public function index() {
        return view('admin.pages.tai_khoan.index');
    }
}
