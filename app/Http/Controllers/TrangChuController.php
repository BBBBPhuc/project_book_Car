<?php

namespace App\Http\Controllers;

use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TrangChuController extends Controller
{
    public function index() {
        $data =  SanPham::get();
        return view('client.pages.homepage', compact('data'));
    }

    public function indexDetail() {
        return view('client.pages.detail');
    }

    public function login_register() {
        return view('client.pages.login&register');
    }

    public function logout() {
        Auth::guard('client')->logout();
        return redirect('/login&register');
    }
}
