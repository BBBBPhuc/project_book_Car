<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\LoaiHang;
use Illuminate\Http\Request;
use PHPUnit\Event\TestSuite\Loaded;

class APILoaiXeController extends Controller
{
    public function createLoai(Request $request) {

        $data = $request->all();
        LoaiHang::create($data);
        return response()->json([
            'status'    => 1,
            'message'   => 'Đã Tạo Thành Công',
        ]);
    }

    public function dataLoai() {
        $data = LoaiHang::get();
        return response()->json([
            'data'   => $data,
        ]);
    }

    public function deleteLoai(Request $request) {
        $data = LoaiHang::find($request->id);
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

    public function updateLoai(Request $request) {
        $data = LoaiHang::find($request->id);

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
