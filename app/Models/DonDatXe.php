<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonDatXe extends Model
{
    use HasFactory;

    protected $table = 'don_dat_xes';


    protected $fillable = [
        'id_khach_hang',
        'ngay_di',
        'ngay_tra',
        'id_xe',
        'is_dat_coc',
        'tinh_trang',
    ];
}
