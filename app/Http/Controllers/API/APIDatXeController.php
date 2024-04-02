<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\DonDatXe;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class APIDatXeController extends Controller
{
    public function datXe(Request $request)
    {
        $check =  Auth::guard('client')->user();

        if ($check) {
            $data_check = DonDatXe::where('id_xe', $request->id_xe)
                ->where(function ($query) use ($request) {
                    $query->where('ngay_di', '>=', $request->ngay_di)
                        ->where('ngay_di', '<=', $request->ngay_tra);
                    $query->orwhere('ngay_di', '<=', $request->ngay_di)
                        ->where('ngay_tra', '>=', $request->ngay_tra);
                    $query->orwhere('ngay_tra', '>=', $request->ngay_di)
                        ->where('ngay_tra', '<=', $request->ngay_tra);
                })
                ->first();
            if ($data_check) {
                $data_sanpham = SanPham::where('id_loai', $request->id_loai)
                    ->get();
                $arr = [];
                foreach ($data_sanpham as $k => $v) {
                    $data = DonDatXe::where('id_xe', $v->id)
                        ->where(function ($query) use ($request) {
                            $query->where('ngay_di', '>=', $request->ngay_di)
                                ->where('ngay_di', '<=', $request->ngay_tra);
                            $query->orwhere('ngay_di', '<=', $request->ngay_di)
                                ->where('ngay_tra', '>=', $request->ngay_tra);
                            $query->orwhere('ngay_tra', '>=', $request->ngay_di)
                                ->where('ngay_tra', '<=', $request->ngay_tra);
                        })
                        ->first();
                    if (!$data) {
                        array_push($arr, $v);
                    }
                }
                return response()->json([
                    'data' => $arr,
                    'status'    => 0,
                    'typeErr'   => 1,
                    'message'   => 'Xe Đã Có Người Đặt',
                ]);
            }
            $data_create = $request->all();
            $data_create['id_khach_hang'] = $check->id;
            $data = DonDatXe::create($data_create);
            return response()->json([
                'status'    => 1,
                'message'   => 'Đã Đặt Thành Công',
            ]);
        }
        // return response()->json([
        //     'status'    => 0,
        //     'typeErr'   => 0,
        //     'message'   => 'Chưa Đăng Nhập, Vui Lòng Đăng Nhập Để Sử Dụng Chức Năng!',
        // ]);
    }

    public function dataDonDat() {
        $data = DonDatXe::get();

        return response()->json([
            'data'    => $data,
        ]);
    }
}
