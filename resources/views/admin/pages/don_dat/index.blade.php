@extends('admin.shares.master')
@section('noi_dung')
    <div id="app">
        <div class="card">
            <div class="card-header align-middle text-center text-danger">
                Danh Sách Đơn Đặt
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="align-middle text-center">#</th>
                                <th class="align-middle text-center">Mã Đơn Đặt</th>
                                <th class="align-middle text-center">Khách Hàng</th>
                                <th class="align-middle text-center">Ngày Đi</th>
                                <th class="align-middle text-center">Ngày Trả</th>
                                <th class="align-middle text-center">Xe</th>
                                <th class="align-middle text-center">Tình Trạng</th>
                                <th class="align-middle text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <template v-for="(v, k) in listData">
                                <tr>
                                    <th class="align-middle text-center">@{{k + 1}}</th>
                                    <td class="align-middle text-center">@{{v.id }}</td>
                                    <td class="align-middle text-center">@{{v.id_khach_hang}}</td>
                                    <td class="align-middle text-center">@{{v.ngay_di}}</td>
                                    <td class="align-middle text-center">@{{v.ngay_tra}}</td>
                                    <td class="align-middle text-center">@{{v.id_xe}}</td>
                                    <td class="align-middle text-center">
                                        <button class="btn btn-warning">Chưa Thanh Toán</button>
                                    </td>
                                    <td class="align-middle text-center">
                                        <button class="btn btn-success">Edit</button>
                                        <button class="btn btn-danger">Xóa</button>
                                    </td>
                                </tr>
                            </template>
                        </tbody>
                    </table>
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
                listData: []
            },
            created()   {
                this.loadData();
            },
            methods :   {
                loadData() {
                    axios
                        .post('{{Route('dataDonDat')}}')
                        .then((res) => {
                            this.listData = res.data.data;
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
