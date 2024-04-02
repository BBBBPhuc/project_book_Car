<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\DanhSachTaiKhoan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Termwind\Components\Raw;

class APIDanhSachTaiKhoanController extends Controller
{
    public function createTaiKhoan(Request $request){
        $data = $request->all();
        $data['password'] = bcrypt($request->password);
        DanhSachTaiKhoan::create($data);
        return response()->json([
            'status'    => 1,
            'message'   => 'Tạo Tài Khoản Thành Công',
        ]);
    }

    public function login(Request $request) {
        $check = Auth::guard('client')->attempt(['email' => $request->email, 'password' => $request->password]);
        if ($check) {
            return response()->json([
                'status'    => 1,
                'message'   => 'Đăng Nhập Thành Công',
            ]);
        } else {
            return response()->json([
                'status'    => 0,
                'message'   => 'Sai Tài Khoản Hoặc Mật Khẩu',
            ]);
        }
    }

    public function dataTaiKhoan() {
        $data = DanhSachTaiKhoan::get();

        return response()->json([
            'data' => $data,
        ]);
    }



}
