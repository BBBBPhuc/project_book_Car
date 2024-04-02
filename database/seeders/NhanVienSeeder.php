<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NhanVienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nhan_viens')->delete();

        DB::table('nhan_viens')->truncate();

        DB::table('nhan_viens')->insert([
            [
                'ten_nhan_vien' => 'Nguyễn Thái Bảo Phúc',
                'dia_chi' => 'Đà Nẵng',
                'so_dien_thoai' => '0977578147',
                'ngay_sinh' => '2003-10-03',
                'email' => 'phimmoizzzzz@gmail.com',
                'password' => bcrypt(123),
                'can_cuoc_cong_dan' =>'0123456789',
                'hinh_anh' => '1.png',
                'id_chuc_vu' => 2,
                'tinh_trang' => 1,
            ],
            [
                'ten_nhan_vien' => 'Võ Như Đại',
                'dia_chi' => 'Đà Nẵng',
                'so_dien_thoai' => '0977578147',
                'ngay_sinh' => '2003-05-03',
                'email' => 'admin@gmail.com',
                'password' => bcrypt(123),
                'can_cuoc_cong_dan' =>'0123456789',
                'hinh_anh' => '2.png',
                'id_chuc_vu' => 1,
                'tinh_trang' => 1,
            ],
            [
                'ten_nhan_vien' => 'Bùi Thành Rin',
                'dia_chi' => 'Đà Nẵng',
                'so_dien_thoai' => '0977578147',
                'ngay_sinh' => '2003-04-03',
                'email' => 'staff@gmail.com',
                'password' => bcrypt(123),
                'can_cuoc_cong_dan' =>'0123456789',
                'hinh_anh' => '3.png',
                'id_chuc_vu' => 1,
                'tinh_trang' => 1,
            ],
        ]);
    }
}
