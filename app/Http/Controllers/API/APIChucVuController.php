<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\ChucVu;
use Illuminate\Http\Request;

class APIChucVuController extends Controller
{
    public function createChucVu(Request $request) {

        $data = $request->all();
        ChucVu::create($data);
        return response()->json([
            'status'    => 1,
            'message'   => 'Đã Tạo Thành Công',
        ]);
    }

    public function dataChucVu() {
        $data = ChucVu::get();
        return response()->json([
            'data'   => $data,
        ]);
    }

    public function deleteChucVu(Request $request) {
        $data = ChucVu::find($request->id);
        if($data) {
            $data->delete();
            return response()->json([
                'status'    => 1,
                'message'   => 'Đã Xóa Thành Công',
            ]);
        } else {
            return response()->json([
                'status'    => 0,
                'message'   => 'Không Tìm Thấy Chức Vụ',
            ]);
        }
    }

    public function updateChucVu(Request $request) {
        $data = ChucVu::find($request->id);

        if($data) {
            $dulieu = $request->all();
            $data->update($dulieu);
            return response()->json([
                'status'    => 1,
                'message'   => 'Đã Cập Nhật Thành Công',
            ]);
        } else {
            return response()->json([
                'status'    => 0,
                'message'   => 'Không Tìm Thấy Chức Vụ',
            ]);
        }
    }
}
