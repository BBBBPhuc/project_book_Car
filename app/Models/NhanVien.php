<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class NhanVien extends Authenticatable
{
    use HasFactory;

    protected $table = 'nhan_viens';

    protected $fillable = [
            'ten_nhan_vien',
            'dia_chi',
            'so_dien_thoai',
            'ngay_sinh',
            'email',
            'password',
            'can_cuoc_cong_dan',
            'hinh_anh',
            'id_chuc_vu',
            'tinh_trang',
    ];
}
