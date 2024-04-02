<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoaiXeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('loai_hangs')->delete();

        DB::table('loai_hangs')->truncate();

        DB::table('loai_hangs')->insert([
            [
                'ten_loai' => 'Xe 5 Chỗ',
                'tinh_trang' => 1,
            ],
            [
                'ten_loai' => 'Xe 7 Chỗ',
                'tinh_trang' => 1,
            ],
            [
                'ten_loai' => 'Xe 16 Chỗ',
                'tinh_trang' => 1,
            ],
        ]);
    }
}
