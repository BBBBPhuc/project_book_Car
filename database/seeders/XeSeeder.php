<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class XeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('san_phams')->delete();

        DB::table('san_phams')->truncate();

        DB::table('san_phams')->insert([
            [
                'ten_san_pham' => 'MAZDA 3 PREMIUM 2021',
                'id_loai' => 1,
                'don_gia' => 850000,
                'mo_ta' => 'MAZDA 3 PREMIUM 2021 Full option
                - Xe trang bị thêm màn hình Android tích hợp điều khiển giọng nói,
                VIET MAP V2,  CAM 360độ, Youtube, Cam hành trình, áp suất lốp…
                - Xe dán full phim cách nhiệt
                - Xe gia đình, biển trắng,  bảo dưỡng định kỳ thường xuyên , anh chủ xe nhiệt tình, thật thà',
                'hinh_anh_main' => 'https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mazda_3_premium_2021/p/g/2023/09/16/10/0yjzTDcDVYFrzyPt3EU6CQ.jpg',
                'hinh_anh_1' => 'https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mazda_3_premium_2021/p/g/2023/09/16/10/zvC7H17YOjdacB-RGRY-Dw.jpg',
                'hinh_anh_2' => 'https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mazda_3_premium_2021/p/g/2023/09/16/10/jgSbuEuIaCaATglGnKY2dA.jpg',
                'hinh_anh_3' => 'https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mazda_3_premium_2021/p/g/2023/09/16/10/-qU2Qy3C81Q-HM9P2utvCw.jpg',
                'id_dong_xe' => 1,
                'id_hang_xe' => 3,
                'tinh_trang' => 1,
                'bien_so_xe' => '43A-6789' ,
            ],
            [
                'ten_san_pham' => 'MAZDA 2 2023',
                'id_loai' => 1,
                'don_gia' => 800000,
                'mo_ta' => 'New Mazda 2023 sedan  xe nhà sạch sẽ,có luôn màn hình Android hỗ trợ cảnh báo tốc độ ,camera phạt nguội ,cam hành trình đầy đủ,xe đi rất tiết kiệm xăng,full đen LED .....co luôn cảm biến áp suất lốp nên đi xa rất yên tâm...co kèm bơm lốp trên xe đặc biệt cốp rất rộng rãi đểđồ thoải mái...LƯU Y ..xe mình co bảo hiểm nên mọi người yên tâm...',
                'hinh_anh_main' => 'https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mazda_2_2023/p/g/2023/06/04/17/2je7c7T86i5hMImkAdg_fA.jpg',
                'hinh_anh_1' => 'https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mazda_2_2023/p/g/2023/03/16/15/yPiYXnrx90Ds6UdhD7gFIA.jpg',
                'hinh_anh_2' => 'https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mazda_2_2023/p/g/2023/03/03/09/90loQxlX1EE-rXT1_-ljXw.jpg',
                'hinh_anh_3' => 'https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mazda_2_2023/p/g/2023/03/03/09/-DjgC_ODMJlrf0eHwIm3gQ.jpg',
                'id_dong_xe' => 1,
                'id_hang_xe' => 3,
                'tinh_trang' => 1,
                'bien_so_xe' => '43A-9999' ,
            ],
            [
                'ten_san_pham' => 'TOYOTA VIOS 2017',
                'id_loai' => 1,
                'don_gia' => 700000,
                'mo_ta' => 'TOYOTA VIOS 2017',
                'hinh_anh_main' => 'https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_vios_2017/p/g/2023/09/14/10/qiEi-f6vBopKg_qt4lHx-g.jpg',
                'hinh_anh_1' => 'https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_vios_2017/p/g/2023/09/14/10/QsIRy7ME0_yUVje_xZ8dBg.jpg',
                'hinh_anh_2' => 'https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_vios_2017/p/g/2023/09/14/10/GTagq-ph-bTdZ1VnXZE2mQ.jpg',
                'hinh_anh_3' => 'https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_vios_2017/p/g/2023/09/14/10/Lj0A9nBcGnwcn0wYAbqSdg.jpg',
                'id_dong_xe' => 1,
                'id_hang_xe' => 1,
                'tinh_trang' => 1,
                'bien_so_xe' => '43A-8888' ,
            ],
            [
                'ten_san_pham' => 'TOYOTA 1',
                'id_loai' => 2,
                'don_gia' => 700000,
                'mo_ta' => 'TOYOTA VIOS 2017',
                'hinh_anh_main' => 'https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_vios_2017/p/g/2023/09/14/10/qiEi-f6vBopKg_qt4lHx-g.jpg',
                'hinh_anh_1' => 'https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_vios_2017/p/g/2023/09/14/10/QsIRy7ME0_yUVje_xZ8dBg.jpg',
                'hinh_anh_2' => 'https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_vios_2017/p/g/2023/09/14/10/GTagq-ph-bTdZ1VnXZE2mQ.jpg',
                'hinh_anh_3' => 'https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_vios_2017/p/g/2023/09/14/10/Lj0A9nBcGnwcn0wYAbqSdg.jpg',
                'id_dong_xe' => 2,
                'id_hang_xe' => 1,
                'tinh_trang' => 1,
                'bien_so_xe' => '43A-8889' ,
            ],
            [
                'ten_san_pham' => 'TOYOTA 2',
                'id_loai' => 3,
                'don_gia' => 700000,
                'mo_ta' => 'TOYOTA VIOS 2017',
                'hinh_anh_main' => 'https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_vios_2017/p/g/2023/09/14/10/qiEi-f6vBopKg_qt4lHx-g.jpg',
                'hinh_anh_1' => 'https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_vios_2017/p/g/2023/09/14/10/QsIRy7ME0_yUVje_xZ8dBg.jpg',
                'hinh_anh_2' => 'https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_vios_2017/p/g/2023/09/14/10/GTagq-ph-bTdZ1VnXZE2mQ.jpg',
                'hinh_anh_3' => 'https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/toyota_vios_2017/p/g/2023/09/14/10/Lj0A9nBcGnwcn0wYAbqSdg.jpg',
                'id_dong_xe' => 2,
                'id_hang_xe' => 1,
                'tinh_trang' => 1,
                'bien_so_xe' => '43A-8878' ,
            ],
        ]);
    }
}
