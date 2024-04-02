<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class DanhSachTaiKhoan extends Authenticatable
{
    use HasFactory;

    protected $table = 'danh_sach_tai_khoans';

    protected $fillable = [
        'ten_khach_hang',
        'dia_chi',
        'so_dien_thoai',
        'ngay_sinh',
        'email',
        'password',
        'can_cuoc_cong_dan',
        'hinh_anh',
        'tinh_trang'
    ];
}
