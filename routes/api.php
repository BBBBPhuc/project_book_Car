<?php

use App\Http\Controllers\API\APIChucVuController;
use App\Http\Controllers\API\APIDanhSachTaiKhoanController;
use App\Http\Controllers\API\APIDatXeController;
use App\Http\Controllers\API\APIDongXeController;
use App\Http\Controllers\API\APIHangXeController;
use App\Http\Controllers\API\APILoaiXeController;
use App\Http\Controllers\API\APINhanVienController;
use App\Http\Controllers\API\APITrangChuController;
use App\Http\Controllers\API\APIXeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/login', [APIDanhSachTaiKhoanController::class, 'login'])->name('login');
Route::post('/admin-login', [APINhanVienController::class, 'loginAdmin'])->name('loginAdmin');
Route::post('/data-home', [APITrangChuController::class, 'dataHome'])->name('dataHome');
Route::post('/data-detail', [APITrangChuController::class, 'dataDetail'])->name('dataDetail');
Route::post('/data-search', [APITrangChuController::class, 'searchCar'])->name('searchCar');


Route::prefix('client')->middleware('APIClientMiddleWare')->group(function () {
    Route::post('/create-don', [APIDatXeController::class, 'datXe'])->name('datXe');
});


Route::prefix('admin')->middleware('AdminMiddleWare')->group(function () {
    Route::prefix('hang-xe')->group(function () {
        Route::post('/create', [APIHangXeController::class, 'createHang'])->name('createHang');
        Route::post('/data', [APIHangXeController::class, 'dataHang'])->name('dataHang');
        Route::post('/delete', [APIHangXeController::class, 'deleteHang'])->name('deleteHang');
        Route::post('/update', [APIHangXeController::class, 'updateHang'])->name('updateHang');
    });
    Route::prefix('dong-xe')->group(function () {
        Route::post('/create', [APIDongXeController::class, 'createDong'])->name('createDong');
        Route::post('/data', [APIDongXeController::class, 'dataDong'])->name('dataDong');
        Route::post('/delete', [APIDongXeController::class, 'deleteDong'])->name('deleteDong');
        Route::post('/update', [APIDongXeController::class, 'updateDong'])->name('updateDong');
    });
    Route::prefix('loai-xe')->group(function () {
        Route::post('/create', [APILoaiXeController::class, 'createLoai'])->name('createLoai');
        Route::post('/data', [APILoaiXeController::class, 'dataLoai'])->name('dataLoai');
        Route::post('/delete', [APILoaiXeController::class, 'deleteLoai'])->name('deleteLoai');
        Route::post('/update', [APILoaiXeController::class, 'updateLoai'])->name('updateLoai');
    });
    Route::prefix('xe')->group(function () {
        Route::post('/create', [APIXeController::class, 'createXe'])->name('createXe');
        Route::post('/data', [APIXeController::class, 'dataXe'])->name('dataXe');
        Route::post('/delete', [APIXeController::class, 'deleteXe'])->name('deleteXe');
        Route::post('/update', [APIXeController::class, 'updateXe'])->name('updateXe');
    });
    Route::prefix('khach-hang')->group(function () {
        Route::post('/create', [APIDanhSachTaiKhoanController::class, 'createTaiKhoan'])->name('createTaiKhoan');
        Route::post('/data', [APIDanhSachTaiKhoanController::class, 'dataTaiKhoan'])->name('dataTaiKhoan');
        Route::post('/delete', [APIDanhSachTaiKhoanController::class, 'deleteTaiKhoan'])->name('deleteTaiKhoan');
        Route::post('/update', [APIDanhSachTaiKhoanController::class, 'updateTaiKhoan'])->name('updateTaiKhoan');
    });
    Route::prefix('chuc-vu')->group(function () {
        Route::post('/create', [APIChucVuController::class, 'createChucVu'])->name('createChucVu');
        Route::post('/data', [APIChucVuController::class, 'dataChucVu'])->name('dataChucVu');
        Route::post('/delete', [APIChucVuController::class, 'deleteChucVu'])->name('deleteChucVu');
        Route::post('/update', [APIChucVuController::class, 'updateChucVu'])->name('updateChucVu');
    });
    Route::prefix('nhan-vien')->group(function () {
        Route::post('/create', [APINhanVienController::class, 'createNhanVien'])->name('createNhanVien');
        Route::post('/data', [APINhanVienController::class, 'dataNhanVien'])->name('dataNhanVien');
        Route::post('/delete', [APINhanVienController::class, 'deleteNhanVien'])->name('deleteNhanVien');
        Route::post('/update', [APINhanVienController::class, 'updateNhanVien'])->name('updateNhanVien');
        Route::post('/search_staff', [APINhanVienController::class, 'searchNhanVien'])->name('searchNhanVien');
    });
    Route::prefix('don_dat')->group(function () {
        Route::post('/create', [APIDatXeController::class, 'createHang'])->name('createHang');
        Route::post('/data', [APIDatXeController::class, 'dataDonDat'])->name('dataDonDat');
        Route::post('/delete', [APIDatXeController::class, 'deleteHang'])->name('deleteHang');
        Route::post('/update', [APIDatXeController::class, 'updateHang'])->name('updateHang');
    });
});
