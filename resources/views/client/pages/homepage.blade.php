@extends('client.shares.master')
@section('noi_dung')
    <div id="app">
        <section class="mt-4">
            <div class="container">
                <div class="card rounded-4 bg-success">
                    <div class="card-body d-flex">
                        <div class="card rounded-4" style="width: 580px">
                            <div class="card-header text-center align-middle bg-warning">
                                <h2 style="font-family: Courier New
                                'Courier New', Courier, monospace ">Tìm Kiếm Xe Thuê</h2>
                            </div>
                            <div class="card-body">
                                <div class="d-flex mb-4 ">
                                    <div>
                                        <label style="margin-left: 100px"><span class="text-danger fa-lg">* </span>Ngày Đi</label>
                                        <input v-model="info_xe.ngay_di" type="datetime-local" style="height: 100px;width: 250px; margin-right: 40px; border-right: 5px solid black" class="form-control">
                                    </div>
                                    <div  class="text-center align-middle">
                                        <label><span class="text-danger fa-lg">* </span>Ngày Về</label>
                                        <input v-model="info_xe.ngay_tra" type="datetime-local" style="height: 100px;width: 250px;border-right: 5px solid black" class="form-control">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <select v-model="info_xe.id_hang_xe" style="height: 50px" class="form-control">
                                        <option disabled value="-1">--Vui lòng chọn hãng xe--</option>
                                        <template v-for="(v, k) in list_hang">
                                            <option v-bind:value="v.id">@{{v.ten_hang_xe}}</option>
                                        </template>
                                    </select>
                                </div>
                                <div class="mb-4 ">
                                    <select v-model="info_xe.id_dong_xe" style="height: 50px" class="form-control">
                                        <option disabled value="-1">--Vui lòng chọn dòng xe--</option>
                                        <template v-for="(v, k) in list_dong">
                                            <option v-bind:value="v.id">@{{v.ten_dong_xe}}</option>
                                        </template>
                                    </select>
                                </div>
                                <div class="mb-4 ">
                                    <select v-model="info_xe.id_loai" style="height: 50px" class="form-control">
                                        <option disabled value="-1">--Vui lòng chọn loại xe--</option>
                                        <template v-for="(v, k) in list_loai">
                                            <option v-bind:value="v.id">@{{v.ten_loai}}</option>
                                        </template>
                                    </select>
                                </div>
                                <div class="mb-4 ">
                                    <p class="text-danger">(*): Bắt buộc phải nhập</p>
                                </div>
                                <div class="mb-4 ">
                                    <button v-on:click="searchXe()" style="margin-left: 220px" class="btn btn-outline-primary">Tìm Kiếm</button>
                                </div>
                            </div>
                        </div>
                        <img src="https://www.mioto.vn/static/media/thue_xe_oto_tu_lai_va_co_tai.9df79c9f.png"
                            class="rounded-4" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="products-section-two">
            <div class="bottom-white-border"></div>
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title centered">
                    <h4><span>Populer</span> Products For You !</h4>
                </div>
                <div class="inner-container">
                    <div class="single-item-carousel owl-carousel owl-theme">

                        <!-- Slide -->
                        <div class="slide">
                            <div class="row clearfix">

                                <!-- Product Block Four -->
                                <div class="col">
                                    <div style="width: 400px" class="product-block-four col-lg-3 col-md-6 col-sm-6">
                                        <div class="inner-box d-flex justify-content-between align-items-center flex-wrap">
                                            <div class="image">
                                                <span class="number">01</span>
                                                <img src="/client_assets/images/resource/product-1.png" alt="" />
                                            </div>
                                            <div class="content">
                                                <h6><a href="/client_assets/shop-detail.html">Full Sleeve Cotton</a></h6>
                                                <div class="total-products">(312 Product)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Product Block Four -->
                                <div class="col">
                                    <div style="width: 400px" class="product-block-four col-lg-3 col-md-6 col-sm-6">
                                        <div class="inner-box d-flex justify-content-between align-items-center flex-wrap">
                                            <div class="image">
                                                <span class="number">02</span>
                                                <img src="/client_assets/images/resource/product-2.png" alt="" />
                                            </div>
                                            <div class="content">
                                                <h6><a href="/client_assets/shop-detail.html">Full Sleeve Cotton</a></h6>
                                                <div class="total-products">(312 Product)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Product Block Four -->
                                <div class="col">
                                    <div style="width: 400px" class="product-block-four col-lg-3 col-md-6 col-sm-6">
                                        <div class="inner-box d-flex justify-content-between align-items-center flex-wrap">
                                            <div class="image">
                                                <span class="number">03</span>
                                                <img src="/client_assets/images/resource/product-3.png" alt="" />
                                            </div>
                                            <div class="content">
                                                <h6><a href="/client_assets/shop-detail.html">Monkey Red Caps</a></h6>
                                                <div class="total-products">(213 Product)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Products Section Two -->
        <section class="mt-4">
            <div class="container text-center align-middle">
                <div class="sec-title centered">
                    <h4><span>Populer</span> Products For You !</h4>
                </div>
                <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3">
                    <template v-for="(v, k) in list_data">
                        <template v-if="v.page == select_page">
                            <div class="col">
                                <div class="p-3">
                                    <a v-bind:href="/detail/+ v.id">
                                        <div class="card rounded-0" style="width: 18rem">
                                            <img style="height: 200px; width: 400px" v-bind:src="v.hinh_anh_main"
                                                class="card-img-top rounded-0" alt="...">
                                            <div class="card-body" style="height: 100px">
                                                <h5 class="card-title">@{{ v.ten_san_pham }}</h5>
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                <li  class="list-group-item">
                                                    <h6><span class="text-danger">Đơn Giá</span>: @{{ v.don_gia }}/Ngày</h6>
                                                </li>
                                                <li class="list-group-item">
                                                    <a v-bind:href="/detail/+ v.id" class="btn btn-outline-danger">THUÊ XE</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </template>
                    </template>
                </div>
                <div style="display: flex; margin-left: 570px" class="text-center">
                    <button v-on:click="select_page = 1" class="btn btn-danger" style="margin: 10px">1</button>
                    <button v-on:click="select_page = 2" class="btn btn-danger" style="margin: 10px">2</button>
                    <button v-on:click="select_page = 3" class="btn btn-danger" style="margin: 10px">3</button>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('js')
    <script>
        new Vue({
            el: '#app',
            data: {
                list_data: [],
                select_page: 1,
                info_xe : {},
                list_hang : [],
                list_dong : [],
                list_loai : [],
            },
            created() {
                this.loadData();
            },
            methods: {
                setPages(arr) {
                    var j = 1;
                    for (let i = 0; i < arr.length; i++) {
                        arr[i].page = j;
                        if ((i + 1) % 8 == 0) {
                            j++;
                        }
                    }
                    return arr;
                },
                loadData() {
                    var title = document.querySelector('title');
                    title.innerText = 'Trang Chủ';
                    this.info_xe.id_hang_xe = -1;
                    this.info_xe.id_dong_xe = -1;
                    this.info_xe.id_loai = -1;
                    axios
                        .post('{{ Route('dataHome') }}')
                        .then((res) => {
                            var newArr = res.data.data;
                            this.list_data = this.setPages(newArr);
                            this.list_hang = res.data.dataHangXe
                            this.list_dong = res.data.dataDongXe
                            this.list_loai = res.data.dataLoaiXe
                        })
                        .catch((res) => {
                            $.each(res.response.data.errors, function(k, v) {
                                toastr.error(v[0], 'Error');
                            });
                        });
                },
                searchXe() {
                    var dateGo = new Date(this.info_xe.ngay_di);
                    var dateBack = new Date(this.info_xe.ngay_tra);
                    if (this.info_xe.ngay_di == null || this.info_xe.ngay_tra == null) {
                        toastr.error('Ngày Đi Và Ngày Về Không Được Bỏ Trống!', 'Error');
                        return;
                    }
                    var totalDate = dateBack.getTime() - dateGo.getTime();
                    if (totalDate < 86400000) {
                        toastr.error('Tối Thiểu Ngày Đi Và Ngày Về Là: 1 Ngày', 'Error');
                        return;
                    }
                    axios
                        .post('{{Route('searchCar')}}', this.info_xe)
                        .then((res) => {
                            if (res.data.status) {
                                window.location.href = `/detail/${res.data.resultSearch}}`
                            } else {
                                toastr.error('Không tìm thấy xe!', 'Error');
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
