<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\HangXe;
use Illuminate\Http\Request;

class APIHangXeController extends Controller
{
    public function createHang(Request $request) {

        $data = $request->all();
        HangXe::create($data);
        return response()->json([
            'status'    => 1,
            'message'   => 'Đã Tạo Thành Công',
        ]);
    }

    public function dataHang() {
        $data = HangXe::get();
        return response()->json([
            'data'   => $data,
        ]);
    }

    public function deleteHang(Request $request) {
        $data = HangXe::find($request->id);
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

    public function updateHang(Request $request) {
        $data = HangXe::find($request->id);

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
