<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\DongXe;
use App\Models\HangXe;
use App\Models\LoaiHang;
use App\Models\SanPham;
use Illuminate\Http\Request;

class APIXeController extends Controller
{
    public function createXe(Request $request) {
        $data = $request->all();
        SanPham::create($data);
        return response()->json([
            'status'    => 1,
            'message'   => 'Đã Tạo Thành Công',
        ]);
    }

    public function dataXe() {
        $data = SanPham::get();
        $listLoai = LoaiHang::get();
        $listHang = HangXe::get();
        $listDong = DongXe::get();
        return response()->json([
            'data'   => $data,
            'listLoai' => $listLoai,
            'listHang' => $listHang,
            'listDong' => $listDong,
        ]);
    }

    public function deleteXe(Request $request) {
        $data = SanPham::find($request->id);
        if($data) {
            $data->delete();
            return response()->json([
                'status'    => 1,
                'message'   => 'Đã Xóa Thành Công',
            ]);
        } else {
            return response()->json([
                'status'    => 0,
                'message'   => 'Không Tìm Thấy Loại Xe',
            ]);
        }
    }

    public function updateXe(Request $request) {
        $data = SanPham::find($request->id);

        if($data) {
            $dulieu = $request->all();
            $data->update($dulieu);
            return response()->json([
                'status'    => 1,
                'message'   => 'Đã Xóa Thành Công',
            ]);
        } else {
            return response()->json([
                'status'    => 0,
                'message'   => 'Không Tìm Thấy Loại Xe',
            ]);
        }
    }
}
