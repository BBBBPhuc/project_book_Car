<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DongXe extends Model
{
    use HasFactory;

    protected $table = 'dong_xes';


    protected $fillable = [
        'ten_dong_xe',
        'mo_ta',
        'tinh_trang',
    ];
}
