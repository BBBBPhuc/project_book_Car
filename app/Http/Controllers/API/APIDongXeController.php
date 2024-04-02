<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\DongXe;
use Illuminate\Http\Request;

class APIDongXeController extends Controller
{
    public function createDong(Request $request) {

        $data = $request->all();
        DongXe::create($data);
        return response()->json([
            'status'    => 1,
            'message'   => 'Đã Tạo Thành Công',
        ]);
    }

    public function dataDong() {
        $data = DongXe::get();
        return response()->json([
            'data'   => $data,
        ]);
    }

    public function deleteDong(Request $request) {
        $data = DongXe::find($request->id);
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

    public function updateDong(Request $request) {
        $data = DongXe::find($request->id);

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
