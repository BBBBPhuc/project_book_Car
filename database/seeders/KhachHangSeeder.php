<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KhachHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('danh_sach_tai_khoans')->delete();

        DB::table('danh_sach_tai_khoans')->truncate();

        DB::table('danh_sach_tai_khoans')->insert([
            [
                'ten_khach_hang' => 'Nguyễn Thái Bảo Phúc',
                'dia_chi'  => 'Đà Nẵng',
                'so_dien_thoai' => '0912456789',
                'ngay_sinh' => '2003-10-06',
                'email' => 'phimmoizzzzz@gmail.com',
                'password' => bcrypt(123),
                'can_cuoc_cong_dan' => '01234567899',
                'hinh_anh' => '',
                'tinh_trang' => 1
            ],
            [
                'ten_khach_hang' => 'Bùi Thành Rin',
                'dia_chi'  => 'Đà Nẵng',
                'so_dien_thoai' => '0912456789',
                'ngay_sinh' => '2003-10-06',
                'email' => 'client@gmail.com',
                'password' => bcrypt(123),
                'can_cuoc_cong_dan' => '01234567899',
                'hinh_anh' => '',
                'tinh_trang' => 1
            ],
            [
                'ten_khach_hang' => 'Võ Minh Tuấn',
                'dia_chi'  => 'Đà Nẵng',
                'so_dien_thoai' => '0933336789',
                'ngay_sinh' => '2003-10-06',
                'email' => 'guest@gmail.com',
                'password' => bcrypt(123),
                'can_cuoc_cong_dan' => '01234567899',
                'hinh_anh' => '',
                'tinh_trang' => 1
            ],
            [
                'ten_khach_hang' => 'Nguyễn Tấn Đại',
                'dia_chi'  => 'Đà Nẵng',
                'so_dien_thoai' => '0915236789',
                'ngay_sinh' => '2003-10-06',
                'email' => 'tourist@gmail.com',
                'password' => bcrypt(123),
                'can_cuoc_cong_dan' => '01234567899',
                'hinh_anh' => '',
                'tinh_trang' => 1
            ],
            [
                'ten_khach_hang' => 'Nguyễn Phúc',
                'dia_chi'  => 'Đà Nẵng',
                'so_dien_thoai' => '0911456689',
                'ngay_sinh' => '2003-10-06',
                'email' => 'asd@gmail.com',
                'password' => bcrypt(123),
                'can_cuoc_cong_dan' => '01234567899',
                'hinh_anh' => '',
                'tinh_trang' => 1
            ],
            [
                'ten_khach_hang' => 'Nguyễn Thái Bảo',
                'dia_chi'  => 'Đà Nẵng',
                'so_dien_thoai' => '0912777789',
                'ngay_sinh' => '2003-10-06',
                'email' => 'dsa@gmail.com',
                'password' => bcrypt(123),
                'can_cuoc_cong_dan' => '01234567899',
                'hinh_anh' => '',
                'tinh_trang' => 1
            ],
        ]);
    }
}
