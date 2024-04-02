@extends('admin.shares.master')
@section('noi_dung')
    <div id="app">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-header text-center bg-primary">
                        <h6>THÊM MỚI LOẠI XE</h6>
                    </div>
                    <div class="card-body">
                        <div class="mb-2">
                            <label>Tên Loại Xe</label>
                            <input v-model="themmoi.ten_san_pham" type="text" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label>Loại Xe</label>
                            <select v-model="themmoi.id_loai" class="form-control">
                                <template v-for="(v, k) in list_loai">
                                    <option v-bind:value="v.id">@{{ v.ten_loai }}</option>
                                </template>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label>Đơn Giá</label>
                            <input v-model="themmoi.don_gia" type="number" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label>Mô Tả</label>
                            <input v-model="themmoi.mo_ta" type="text" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label>Hình Ảnh Chính</label>
                            <input v-model="themmoi.hinh_anh_main" type="text" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label>Hình Ảnh Phụ 1</label>
                            <input v-model="themmoi.hinh_anh_1" type="text" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label>Hình Ảnh Phụ 2</label>
                            <input v-model="themmoi.hinh_anh_2" type="text" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label>Hình Ảnh Phụ 3</label>
                            <input v-model="themmoi.hinh_anh_3" type="text" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label>Hãng Xe</label>
                            <select v-model="themmoi.id_hang_xe" class="form-control">
                                <template v-for="(v, k) in list_hang">
                                    <option v-bind:value="v.id">@{{ v.ten_hang_xe }}</option>
                                </template>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label>Dòng Xe</label>
                            <select v-model="themmoi.id_dong_xe" class="form-control">
                                <template v-for="(v, k) in list_dong">
                                    <option v-bind:value="v.id">@{{ v.ten_dong_xe }}</option>
                                </template>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label>Biển Số Xe</label>
                            <input v-model="themmoi.bien_so_xe" type="text" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label>Tình Trạng</label>
                            <select v-model="themmoi.tinh_trang" class="form-control">
                                <option value="0">Tạm Tắt</option>
                                <option value="1">Hiển Thị</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <button v-on:click="themMoi()" class="btn btn-primary">THÊM</button>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="card">
                    <div class="card-header text-center bg-primary">
                        <h6>Danh Sách XE</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center align-middle">#</th>
                                        <th class="text-center align-middle">Tên Loại Xe</th>
                                        <th class="text-center align-middle">Loại Xe</th>
                                        <th class="text-center align-middle">Đơn Giá</th>
                                        <th class="text-center align-middle">Mô Tả</th>
                                        <th class="text-center align-middle">Hình Ảnh</th>
                                        <th class="text-center align-middle">Tình Trạng</th>
                                        <th class="text-center align-middle">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <template v-for="(v, k) in list_data">
                                        <tr>
                                            <th class="text-center align-middle">@{{ k + 1 }}</th>
                                            <td class="text-center align-middle">@{{ v.ten_san_pham }}</td>
                                            <template v-for="(v1, k1) in list_loai">
                                                <td v-if="v1.id == v.id_loai" class="text-center align-middle">
                                                    @{{ v1.ten_loai }}</td>
                                            </template>
                                            <td class="text-center align-middle">@{{ v.don_gia }}</td>
                                            <td v-on:click="mota = v" data-bs-toggle="modal" data-bs-target="#motaModal" class="text-center align-middle"><i class="fa-solid fa-circle-info fa-2x" style="color: #63E6BE;"></i></td>
                                            <td class="text-center align-middle">
                                                <img v-bind:src="v.hinh_anh_main" class="rounded mx-auto d-block" height="130px"
                                                    width="200px" alt="">
                                            </td>
                                            <td class="text-center align-middle">
                                                <button v-if="v.tinh_trang" class="btn btn-primary">Hiển Thị</button>
                                                <button v-else class="btn btn-warning">Tạm Tắt</button>
                                            </td>
                                            <td class="text-center align-middle">
                                                <button v-on:click="xoa = v" data-bs-toggle="modal"
                                                    data-bs-target="#updateModal" class="btn btn-success">Edit</button>
                                                <button v-on:click="xoa = v" data-bs-toggle="modal"
                                                    data-bs-target="#deleteModal" class="btn btn-danger">Xóa</button>
                                            </td>
                                        </tr>
                                    </template>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal" id="motaModal" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p class="fs-5">@{{mota.mo_ta}}</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal" id="deleteModal" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-danger">
                            <h5 class="modal-title">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>BẠN MUỐN CHẮC CHẮN MUỐN XÓA!</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" v-on:click="xoaLoai()" class="btn btn-danger">Xóa</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal" id="updateModal" tabindex="-1">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header bg-danger">
                            <h5 class="modal-title">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-2">
                                <label>Tên Loại Xe</label>
                                <input v-model="xoa.ten_san_pham" type="text" class="form-control">
                            </div>
                            <div class="mb-2">
                                <label>Loại Xe</label>
                                <select v-model="xoa.id_loai" class="form-control">
                                    <template v-for="(v, k) in list_loai">
                                        <option v-bind:value="v.id">@{{ v.ten_loai }}</option>
                                    </template>
                                </select>
                            </div>
                            <div class="mb-2">
                                <label>Đơn Giá</label>
                                <input v-model="xoa.don_gia" type="number" class="form-control">
                            </div>
                            <div class="mb-2">
                                <label>Mô Tả</label>
                                <input v-model="xoa.mo_ta" type="text" class="form-control">
                            </div>
                            <div class="mb-2">
                                <label>Hình Ảnh</label>
                                <input v-model="xoa.hinh_anh" type="text" class="form-control">
                            </div>
                            <div class="mb-2">
                                <label>Biển Số Xe</label>
                                <input v-model="xoa.bien_so_xe" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" v-on:click="capnhat()" class="btn btn-danger">Cập Nhật</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        new Vue({
            el: '#app',
            data: {
                themmoi: {},
                list_data: [],
                xoa: {},
                list_loai: [],
                mota: {},
                list_hang: [],
                list_dong: []
            },
            created() {
                this.loadData()
            },
            methods: {
                themMoi() {
                    axios
                        .post('{{ Route('createXe') }}', this.themmoi)
                        .then((res) => {
                            if (res.data.status) {
                                toastr.success(res.data.message, 'Success');
                                this.loadData();
                            } else {
                                toastr.error(res.data.message, 'Error');
                            }
                        })
                        .catch((res) => {
                            $.each(res.response.data.errors, function(k, v) {
                                toastr.error(v[0], 'Error');
                            });
                        });
                },
                loadData() {
                    axios
                        .post('{{ Route('dataXe') }}')
                        .then((res) => {
                            this.list_loai = res.data.listLoai;
                            this.list_data = res.data.data;
                            this.list_hang = res.data.listHang;
                            this.list_dong = res.data.listDong;
                        })
                        .catch((res) => {
                            $.each(res.response.data.errors, function(k, v) {
                                toastr.error(v[0], 'Error');
                            });
                        });
                },
                xoaLoai() {
                    axios
                        .post('{{ Route('deleteXe') }}', this.xoa)
                        .then((res) => {
                            if (res.data.status) {
                                this.loadData();
                                toastr.success(res.data.message, 'Success');
                                $('#deleteModal').modal('hide');
                            } else {
                                toastr.error(res.data.message, 'Error');
                                $('#deleteModal').modal('hide');
                            }
                        })
                        .catch((res) => {
                            $.each(res.response.data.errors, function(k, v) {
                                toastr.error(v[0], 'Error');
                            });
                        });
                },
                capnhat() {
                    axios
                        .post('{{ Route('updateXe') }}', this.xoa)
                        .then((res) => {
                            if (res.data.status) {
                                this.loadData();
                                toastr.success(res.data.message, 'Success');
                                $('#updateModal').modal('hide');
                            } else {
                                toastr.error(res.data.message, 'Error');
                                $('#updateModal').modal('hide');
                            }
                        })
                        .catch((res) => {
                            $.each(res.response.data.errors, function(k, v) {
                                toastr.error(v[0], 'Error');
                            });
                        });
                }
            },
        });
    </script>
@endsection
