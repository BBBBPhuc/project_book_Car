@extends('admin.shares.master')
@section('noi_dung')
    <div id="app">
        <div style="margin-left: 1365px">
            <button id="btnCreate" @click="showCreate" class="btn btn-primary">THÊM MỚI</button>
        </div>
        <div class="row mt-3">
            <div id="col1" class="col-4 d-none">
                <div class="card">
                    <div class="card-header text-center bg-primary">
                        <h6>THÊM MỚI NHÂN VIÊN</h6>
                    </div>
                    <div class="card-body">
                        <div class="mb-2">
                            <label>Tên Loại Xe</label>
                            <input v-model="themmoi.ten_nhan_vien" type="text" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label>Số Điện Thoại</label>
                            <input v-model="themmoi.so_dien_thoai" type="tel" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label>Ngày Sinh</label>
                            <input v-model="themmoi.ngay_sinh" type="date" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label>Ngày Sinh</label>
                            <input v-model="themmoi.dia_chi" type="text" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label>Email</label>
                            <input v-model="themmoi.email" type="mail" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label>Password</label>
                            <input v-model="themmoi.password" type="password" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label>Căn Cước Công Dân</label>
                            <input v-model="themmoi.can_cuoc_cong_dan" type="text" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label>Hình Ảnh</label>
                            <input ref="hinhAnhInput" @change="handleFileChange" type="file" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label>Chức Vụ</label>
                            <select v-model="themmoi.id_chuc_vu" class="form-control">
                                <option value="">-- Vui Lòng Chọn Chức Vụ --</option>
                                <template v-for="(v, k) in dataChucVu">
                                    <option value="v.id">@{{ v.ten_chuc_vu }}</option>
                                </template>
                            </select>
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
            <div id="col2" class="col">
                <div class="card">
                    <div class="card-header text-center bg-primary">
                        <h6>Danh Sách NHÂN VIÊN</h6>
                    </div>
                    <div class="card-body">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Search</span>
                            <input v-model="info_search.info_search" @keyup="search_staff" type="text" class="form-control">
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center align-middle">#</th>
                                        <th class="text-center align-middle">Tên Nhân Viên</th>
                                        <th class="text-center align-middle">Số Điện Thoại</th>
                                        <th class="text-center align-middle">Hình Ảnh</th>
                                        <th class="text-center align-middle">Địa Chỉ</th>
                                        <th class="text-center align-middle">Chức Vụ</th>
                                        <th class="text-center align-middle">Email</th>
                                        <th class="text-center align-middle">Căn Cước Công Dân</th>
                                        <th class="text-center align-middle">Ngày Sinh</th>
                                        <th class="text-center align-middle">Tình Trạng</th>
                                        <th class="text-center align-middle">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <template v-for="(v, k) in list_data">
                                        <tr>
                                            <th class="text-center align-middle">@{{ k + 1 }}</th>
                                            <td class="text-center align-middle">@{{ v.ten_nhan_vien }}</td>
                                            <td class="text-center align-middle">@{{ v.so_dien_thoai }}</td>
                                            <td class="text-center align-middle">
                                                <img v-bind:src="v.image_url" height="100px" width="100px" class="rounded-circle mx-auto d-block" alt="...">
                                            </td>
                                            <td class="text-center align-middle">@{{ v.dia_chi }}</td>
                                            <td class="text-center align-middle">
                                                <template v-for="(v1, k1) in dataChucVu">
                                                    <template v-if="v1.id == v.id_chuc_vu">
                                                        @{{v1.ten_chuc_vu}}
                                                    </template>
                                                </template>
                                            </td>
                                            <td class="text-center align-middle">@{{ v.email }}</td>
                                            <td class="text-center align-middle">@{{ v.can_cuoc_cong_dan }}</td>
                                            <td class="text-center align-middle">@{{ v.ngay_sinh }}</td>
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
            <div class="modal" id="deleteModal" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-danger">
                            <h5 class="modal-title">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                <label>Tên Nhân Viên</label>
                                <input v-model="xoa.ten_nhan_vien" type="text" class="form-control">
                            </div>
                            <div class="mb-2">
                                <label>Số Điện Thoại</label>
                                <input v-model="xoa.so_dien_thoai" type="tel" class="form-control">
                            </div>
                            <div class="mb-2">
                                <label>Ngày Sinh</label>
                                <input v-model="xoa.ngay_sinh" type="date" class="form-control">
                            </div>
                            <div class="mb-2">
                                <label>Ngày Sinh</label>
                                <input v-model="xoa.dia_chi" type="text" class="form-control">
                            </div>
                            <div class="mb-2">
                                <label>Email</label>
                                <input v-model="xoa.email" type="mail" class="form-control">
                            </div>
                            <div class="mb-2">
                                <label>Password</label>
                                <input v-model="xoa.password" type="password" class="form-control">
                            </div>
                            <div class="mb-2">
                                <label>Căn Cước Công Dân</label>
                                <input v-model="xoa.can_cuoc_cong_dan" type="text" class="form-control">
                            </div>
                            <div class="mb-2">
                                <label>Hình Ảnh</label>
                                <input ref="hinhAnhInput" @change="handleFileChange" type="file" class="form-control">
                            </div>
                            <div class="mb-2">
                                <label>Chức Vụ</label>
                                <select v-model="xoa.id_chuc_vu" class="form-control">
                                    <option value="">-- Vui Lòng Chọn Chức Vụ --</option>
                                    <template v-for="(v, k) in dataChucVu">
                                        <option value="v.id">@{{ v.ten_chuc_vu }}</option>
                                    </template>
                                </select>
                            </div>
                            <div class="mb-2">
                                <label>Tình Trạng</label>
                                <select v-model="xoa.tinh_trang" class="form-control">
                                    <option value="0">Tạm Tắt</option>
                                    <option value="1">Hiển Thị</option>
                                </select>
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
                dataChucVu: [],
                hinh_anh : {},
                is_show_col: false,
                info_search: {}
            },
            created() {
                this.loadData()
            },
            methods: {
                search_staff() {
                    console.log(this.info_search);
                    axios
                        .post('{{ Route('searchNhanVien') }}', this.info_search)
                        .then((res) => {
                            this.list_data = res.data.data_search;
                        })
                        .catch((res) => {
                            $.each(res.response.data.errors, function(k, v) {
                                toastr.error(v[0], 'Error');
                            });
                        });
                },
                showCreate() {
                    this.is_show_col = !this.is_show_col;
                    var col1 = document.getElementById('col1');
                    var col2 = document.getElementById('col2');
                    var btnCreate = document.getElementById('btnCreate');
                    if (this.is_show_col) {
                        col1.classList.remove("d-none");
                        col2.classList.remove("col");
                        col2.classList.add("col-8");
                        btnCreate.innerHTML = '<i style="margin-left: 7px" class="fa-solid fa-x"></i>';
                    } else {
                        col1.classList.add("d-none");
                        col2.classList.add("col");
                        col2.classList.remove("col-8");
                        btnCreate.innerHTML = 'THÊM MỚI';
                    }

                },
                handleFileChange(e) {
                    this.hinh_anh.hinh_anh = e.target.files[0];
                    console.log(this.hinh_anh.hinh_anh);
                },
                themMoi() {
                    const formData = new FormData();

                    formData.append('image', this.hinh_anh.hinh_anh);
                    for (const key in this.themmoi) {
                        formData.append(key, this.themmoi[key]);
                    }


                    axios
                        .post('{{ Route('createNhanVien') }}', formData, {
                            headers: {
                                'Content-Type': 'multipart/form-data'
                            }
                        })
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
                        .post('{{ Route('dataNhanVien') }}')
                        .then((res) => {
                            this.list_data = res.data.data;
                            this.dataChucVu = res.data.dataChucVu;
                        })
                        .catch((res) => {
                            $.each(res.response.data.errors, function(k, v) {
                                toastr.error(v[0], 'Error');
                            });
                        });
                },
                xoaLoai() {
                    axios
                        .post('{{ Route('deleteNhanVien') }}', this.xoa)
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
                    const formData = new FormData();

                    formData.append('image', this.hinh_anh.hinh_anh);
                    for (const key in this.xoa) {
                        formData.append(key, this.xoa[key]);
                    }
                    axios
                        .post('{{ Route('updateNhanVien') }}', formData, {
                            headers: {
                                'Content-Type': 'multipart/form-data'
                            }
                        })
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
