<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HangXe extends Model
{
    use HasFactory;

    protected $table = 'hang_xes';


    protected $fillable = [
        'ten_hang_xe',
        'logo',
        'mo_ta',
        'tinh_trang',
    ];
}
