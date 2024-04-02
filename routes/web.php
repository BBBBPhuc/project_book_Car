<?php

use App\Http\Controllers\ChucVuController;
use App\Http\Controllers\DanhSachTaiKhoanController;
use App\Http\Controllers\DonDatXeController;
use App\Http\Controllers\DongXeController;
use App\Http\Controllers\HangXeController;
use App\Http\Controllers\LoaiXeController;
use App\Http\Controllers\NhanVienController;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\TrangChuController;
use App\Http\Controllers\XeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [TrangChuController::class, 'index']);
Route::get('/detail/{id}', [TrangChuController::class, 'indexDetail']);
Route::get('/login&register', [TrangChuController::class, 'login_register']);
Route::get('/admin-login', [NhanVienController::class, 'login']);
Route::get('/client-logout', [TrangChuController::class, 'logout']);

Route::get('/grub', [DonDatXeController::class, 'grupClient'])->middleware('ClientMiddleWare');

Route::prefix('admin')->middleware('AdminMiddleWare')->group(function () {
    Route::prefix('xe')->group(function () {
        Route::get('/', [XeController::class, 'index']);
    });
    Route::prefix('hang-xe')->group(function () {
        Route::get('/', [HangXeController::class, 'index']);
    });
    Route::prefix('dong-xe')->group(function () {
        Route::get('/', [DongXeController::class, 'index']);
    });
    Route::prefix('loai-xe')->group(function () {
        Route::get('/', [LoaiXeController::class, 'index']);
    });
    Route::prefix('tai-khoan')->group(function () {
        Route::get('/', [DanhSachTaiKhoanController::class, 'index']);
    });
    Route::prefix('nhan-vien')->group(function () {
        Route::get('/', [NhanVienController::class, 'index']);
    });
    Route::prefix('chuc-vu')->group(function () {
        Route::get('/', [ChucVuController::class, 'index']);
    });
    Route::prefix('don-dat')->group(function () {
        Route::get('/', [DonDatXeController::class, 'index']);
    });
});
