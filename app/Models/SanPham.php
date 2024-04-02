<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    use HasFactory;

    protected $table = 'san_phams';

    protected $fillable = [
        'ten_san_pham',
        'id_loai',
        'don_gia',
        'mo_ta',
        'hinh_anh_main',
        'hinh_anh_1',
        'hinh_anh_2',
        'hinh_anh_3',
        'id_dong_xe',
        'id_hang_xe',
        'tinh_trang',
        'bien_so_xe',
    ];
}
