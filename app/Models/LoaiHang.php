<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoaiHang extends Model
{
    use HasFactory;

    protected $table = 'loai_hangs';


    protected $fillable = [
        'ten_loai',
        'tinh_trang',
    ];
}
