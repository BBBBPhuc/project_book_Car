@extends('admin.shares.master')
@section('noi_dung')
    <div id="app">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-header text-center bg-primary">
                        <h6>THÊM MỚI CHỨC VỤ</h6>
                    </div>
                    <div class="card-body">
                        <div class="mb-2">
                            <label>Tên Chức Vụ</label>
                            <input v-model="themmoi.ten_chuc_vu" type="text" class="form-control">
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
                        <h6>Danh Sách Chức Vụ</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center align-middle">#</th>
                                        <th class="text-center align-middle">Tên Chức Vụ</th>
                                        <th class="text-center align-middle">Tình Trạng</th>
                                        <th class="text-center align-middle">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <template v-for="(v, k) in list_data">
                                        <tr>
                                            <th class="text-center align-middle">@{{k + 1}}</th>
                                            <td class="text-center align-middle">@{{v.ten_chuc_vu}}</td>
                                            <td class="text-center align-middle">
                                                <button v-if="v.tinh_trang" class="btn btn-primary">Hiển Thị</button>
                                                <button v-else class="btn btn-warning">Tạm Tắt</button>
                                            </td>
                                            <td class="text-center align-middle">
                                                <button v-on:click="xoa = v" data-bs-toggle="modal" data-bs-target="#updateModal" class="btn btn-success">Edit</button>
                                                <button v-on:click="xoa = v" data-bs-toggle="modal" data-bs-target="#deleteModal" class="btn btn-danger">Xóa</button>
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
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-2">
                            <label>Tên Chức Vụ</label>
                            <input v-model="xoa.ten_chuc_vu" type="text" class="form-control">
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
            el      :   '#app',
            data    :   {
                themmoi: {},
                list_data: [],
                xoa: {}
            },
            created()  {
                this.loadData()
            },
            methods :   {
                themMoi() {
                    axios
                        .post('{{Route('createChucVu')}}', this.themmoi)
                        .then((res) => {
                            if(res.data.status) {
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
                        .post('{{Route('dataChucVu')}}')
                        .then((res) => {
                            this.list_data = res.data.data;
                        })
                        .catch((res) => {
                            $.each(res.response.data.errors, function(k, v) {
                                toastr.error(v[0], 'Error');
                            });
                        });
                },
                xoaLoai() {
                    axios
                        .post('{{Route('deleteChucVu')}}', this.xoa)
                        .then((res) => {
                            if(res.data.status) {
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
                        .post('{{Route('updateChucVu')}}', this.xoa)
                        .then((res) => {
                            if(res.data.status) {
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
