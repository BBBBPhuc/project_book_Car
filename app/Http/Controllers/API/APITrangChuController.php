<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\DonDatXe;
use App\Models\DongXe;
use App\Models\HangXe;
use App\Models\LoaiHang;
use App\Models\SanPham;
use Illuminate\Http\Request;

class APITrangChuController extends Controller
{
    public function dataHome()
    {
        $data =  SanPham::where('tinh_trang', 1)
            ->get();
        $dataHangXe = HangXe::where('tinh_trang', 1)
            ->get();
        $dataDongXe = DongXe::where('tinh_trang', 1)
            ->get();
        $dataLoaiXe = LoaiHang::where('tinh_trang', 1)
            ->get();


        return response()->json([
            'data' => $data,
            'dataHangXe' => $dataHangXe,
            'dataDongXe' => $dataDongXe,
            'dataLoaiXe' => $dataLoaiXe,
        ]);
    }

    public function dataDetail(Request $request)
    {
        $data = SanPham::find($request->id);
        if ($data) {
            $list_relate = SanPham::where('id_loai', $data->id_loai)
                ->whereNot('id', $data->id)
                ->take(4)
                ->get();

            return response()->json([
                'data' => $data,
                'list_relate' => $list_relate
            ]);
        }
    }

    public function searchCar(Request $request)
    {
        $list_xe = SanPham::where('tinh_trang', 1)
            ->get();

        foreach ($list_xe as $key => $value) {
            $data_check = DonDatXe::where('id_xe', $value->id)
                ->where(function ($query) use ($request) {
                    $query->where('ngay_di', '>=', $request->ngay_di)
                        ->where('ngay_di', '<=', $request->ngay_tra);
                    $query->orwhere('ngay_di', '<=', $request->ngay_di)
                        ->where('ngay_tra', '>=', $request->ngay_tra);
                    $query->orwhere('ngay_tra', '>=', $request->ngay_di)
                        ->where('ngay_tra', '<=', $request->ngay_tra);
                })
                ->first();
            if (!$data_check) {
                $data = $value;
                if ($request->id_hang_xe != -1) {
                    if ($value->id_hang_xe != $request->id_hang_xe) {
                        $data = null;
                    }
                }

                if ($request->id_dong_xe != -1) {
                    if ($value->id_dong_xe != $request->id_dong_xe) {
                        $data = null;
                    }
                }

                if ($request->id_loai != -1) {
                    if ($value->id_loai != $request->id_loai) {
                        $data = null;
                    }
                }

                if ($data != null) {
                    return response()->json([
                        'status' => 1,
                        'resultSearch' => $data->id
                    ]);
                }
            }
        }
    }


}
