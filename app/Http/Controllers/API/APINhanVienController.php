<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\ChucVu;
use App\Models\NhanVien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class APINhanVienController extends Controller
{
    public function createNhanVien(Request $request)
    {
        $user = Auth::guard('admin')->user();
        if ($user->id_chuc_vu ==  1) {
            return response()->json([
                'status'    => 0,
                'message'   => 'Bạn không có quyền này!',
            ]);
        }

        $test = $request->image->getclientmimeType();
        $str = explode('/', $test)[1];
        bcrypt($request['password']);
        try {
            $data = NhanVien::create([
                'ten_nhan_vien' => $request->ten_nhan_vien,
                'so_dien_thoai' => $request->so_dien_thoai,
                'dia_chi'  => $request->dia_chi,
                'email' => $request->email,
                'password' => $request->password,
                'ngay_sinh' => $request->ngay_sinh,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status'    => 0,
                'message'   => 'Chưa Đầy Đủ Nhập Thông Tin',
            ]);
        }
        $file = $request->image;
        $fileName = strval($data->id) . '.' . $str;
        $file->move(public_path('img_staff'), $fileName);
        $data->hinh_anh = $fileName;
        $data->save();
        return response()->json([
            'status'    => 1,
            'message'   => 'Đã Tạo Thành Công',
        ]);
    }

    public function dataNhanVien()
    {
        $user = Auth::guard('admin')->user();
        if ($user->id_chuc_vu ==  1) {
            return response()->json([
                'status'    => 0,
                'message'   => 'Bạn không có quyền này!',
            ]);
        }

        $data = NhanVien::get();
        foreach ($data as $key => $value) {
            $imageUrl = asset('img_staff/' . $value->hinh_anh);
            $data[$key]->image_url = $imageUrl;
        }
        $dataChucVu = ChucVu::get();

        return response()->json([
            'data'   => $data,
            'dataChucVu' => $dataChucVu
        ]);
    }

    public function deleteNhanVien(Request $request)
    {
        $user = Auth::guard('admin')->user();
        if ($user->id_chuc_vu ==  1) {
            return response()->json([
                'status'    => 0,
                'message'   => 'Bạn không có quyền này!',
            ]);
        }
        $data = NhanVien::find($request->id);
        if ($data) {
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

    public function updateNhanVien(Request $request)
    {
        $user = Auth::guard('admin')->user();
        if ($user->id_chuc_vu ==  1) {
            return response()->json([
                'status'    => 0,
                'message'   => 'Bạn không có quyền này!',
            ]);
        }
        $data = NhanVien::find($request->id);

        if ($data) {
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

    public function searchNhanVien(Request $request)
    {
        $user = Auth::guard('admin')->user();
        if ($user->id_chuc_vu ==  1) {
            return response()->json([
                'status'    => 0,
                'message'   => 'Bạn không có quyền này!',
            ]);
        }
        $data = NhanVien::where('ten_nhan_vien', 'LIKE', '%' . $request->info_search . '%')
            ->orWhere('so_dien_thoai', 'LIKE', '%' . $request->info_search . '%')
            ->get();
        foreach ($data as $key => $value) {
            $imageUrl = asset('img_staff/' . $value->hinh_anh);
            $data[$key]->image_url = $imageUrl;
        }

        return response()->json([
            'data_search' => $data,
        ]);
    }

    public function loginAdmin(Request $request) {
        $user = Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password]);

        if ($user) {
            return response()->json([
                'status'    => 1,
                'message'   => 'Đăng Nhập Thành Công',
            ]);
        }
        return response()->json([
            'status'    => 0,
            'message'   => 'Sai Mật Khẩu Hoặc Tài Khoản',
        ]);
    }
}
