<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DongXeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dong_xes')->delete();

        DB::table('dong_xes')->truncate();

        DB::table('dong_xes')->insert([
            [
                'ten_dong_xe' => 'Sedan',
                'mo_ta' => 'Thiết kế lịch lãm, nội thất cao cấp, động cơ mạnh mẽ, nhiều công nghệ tiên tiến',
                'tinh_trang' => 1,
            ],
            [
                'ten_dong_xe' => 'SUV',
                'mo_ta' => 'Thiết kế cá tính, nội thất hiện đại, nhiều tiện nghi, vận hành linh hoạt.',
                'tinh_trang' => 1,
            ],
            [
                'ten_dong_xe' => 'Bán tải',
                'mo_ta' => 'Thiết kế mạnh mẽ, nội thất rộng rãi, khả năng off-road tốt, nhiều công nghệ tiên tiến',
                'tinh_trang' => 1,
            ],
        ]);
    }
}
