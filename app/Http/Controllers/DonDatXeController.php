<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonDatXeController extends Controller
{
    public function index() {
        return view('admin.pages.don_dat.index');
    }

    public function grupClient() {
        return view('client.pages.grub');
    }
}
