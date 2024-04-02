@extends('client.shares.master')
@section('noi_dung')
    <section class="page-title">
        <div class="auto-container">
            <h2>Shop Detail</h2>
            <ul class="bread-crumb clearfix">
                <li><a href="index.html">Home</a></li>
                <li>Pages</li>
                <li>Shop Details</li>
            </ul>
        </div>
    </section>
    <div id="app">
        <section class="shop-detail-section">
            <div class="auto-container">
                <div class="upper-box">
                    <div class="row clearfix">
                        <div class="gallery-column col-lg-8 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="carousel-outer">
                                    <div class="swiper-container content-carousel">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <figure class="image"><a href="images/resource/products/35.png"
                                                        class="lightbox-image"><img height="400px" width="600px" v-bind:src="tt_detail.hinh_anh_main"
                                                            alt=""></a></figure>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-container thumbs-carousel">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img style="height: 100px" v-bind:src="tt_detail.hinh_anh_1" alt="">
                                            </div>
                                            <div class="swiper-slide">

                                            </div>
                                            <div class="swiper-slide">
                                                <img style="height: 100px" v-bind:src="tt_detail.hinh_anh_2" alt="">
                                            </div>
                                            <div class="swiper-slide">

                                            </div>
                                            <div class="swiper-slide">
                                                <img style="height: 100px" v-bind:src="tt_detail.hinh_anh_3" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Content Column -->
                        <div class="content-column col-lg-4 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <h3>@{{ tt_detail.ten_san_pham }}</h3>
                                <!-- Rating -->
                                <div class="rating">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="light fa fa-star"></span>
                                    <i>(4 customer review)</i>
                                </div>
                                <!-- Price -->
                                <div class="price">GIÁ THUÊ: @{{ tt_detail.don_gia }}/Ngày</div>
                                <div style="display: flex">
                                    <div>
                                        <label class="mb-2">Ngày Đi: </label>
                                        <input v-model="tt_to_dat.ngay_di" type="datetime-local"
                                            style="height: 100px; border: 1px solid red" class="form-control rounded-start">
                                    </div>
                                    <div>
                                        <label class="mb-2">|Ngày Về: </label>
                                        <input v-model="tt_to_dat.ngay_tra" type="datetime-local"
                                            style="height: 100px; border: 1px solid red" class="form-control rounded-end">
                                    </div>
                                </div>
                                <div class="d-flex align-items-center flex-wrap mt-4">
                                    <div class="button-box">
                                        <a v-on:click="datxe()" class="theme-btn btn-style-one">
                                            THUÊ XE
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Upper Box -->

                <!-- Lower Box -->
                <div class="lower-box">

                    <!-- Product Info Tabs -->
                    <div class="product-info-tabs">
                        <!-- Product Tabs -->
                        <div class="prod-tabs tabs-box">

                            <!-- Tab Btns -->
                            <ul class="tab-btns tab-buttons clearfix">
                                <li data-tab="#prod-details" class="tab-btn active-btn">Product Details</li>
                            </ul>
                            <!-- Tabs Container -->
                            <div class="tabs-content">
                                <!-- Tab / Active Tab -->
                                <div class="tab active-tab" id="prod-details">
                                    <div class="content">
                                        <h3>Experience is over the world visit</h3>
                                        <p>@{{ tt_detail.mo_ta }}</p>
                                    </div>
                                </div>

                            </div>
                            <!--End Product Info Tabs-->

                        </div>
                        <!-- End Lower Box -->

                    </div>
        </section>
        <!-- End Shop Page Section -->
        {{-- Modal --}}
        <div class="modal" id="ModalSP" tabindex="-1">
            <div class="modal-dialog modal-xl modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div id="main_info" class="container">
                            <h5 style="color: red"><i class="fa-solid fa-triangle-exclamation"></i> Vui Lòng Sắp Xếp Lại
                                Lịch Hoặc Thuê Những Xe Khác Cùng Loại Dưới Đây</h5>
                            <h6 class="text-success mt-4">CHỌN LỊCH MỚI</h6>
                            <div class="card">
                                <div style="background-color: whitesmoke" class="card-body">
                                    <div class="d-flex mb-3">
                                        <div class="row">
                                            <div class="col-6 text-center">
                                                <label class="text-danger">Chọn Ngày Đi</label>
                                                <input v-model="tt_to_dat.ngay_di" type="datetime-local"
                                                    style="height: 100px; width: 500px; margin-left: 17px"
                                                    class="form-control mr-1 ml-2">
                                            </div>
                                            <div class="col-6 text-center">
                                                <label class="text-danger">Chọn Ngày Về</label>
                                                <input v-model="tt_to_dat.ngay_tra" type="datetime-local" style="height: 100px; width: 500px"
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div style="margin-left: 485px">
                                        <button v-on:click="datxe" class="btn btn-outline-danger">ĐẶT XE</button>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex mt-3">
                                <hr style="width: 510px">
                                <h6 class="text-secondary m-1">HOẶC</h6>
                                <hr style="width: 510px">
                            </div>
                            <h6 class="text-success mt-4">CHỌN NHỮNG XE CÙNG LOẠI ĐỂ THAY THẾ NHÉ! <i
                                    class="fa-regular fa-face-laugh-wink"></i></h6>
                            <div class="card">
                                <div class="card-body">
                                    <template v-for="(v, k) in list_xe_same">
                                        <div v-on:click="showInfoSP(v, k)" style="height: 100px"
                                            class="card mb-2 select_card bg-opacity-25">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <img v-bind:src="v.hinh_anh_main" class="rounded-4"
                                                            style="margin-top: -4px" height="100px" width="100px"
                                                            alt="">
                                                    </div>
                                                    <div class="col-8">
                                                        <label
                                                            style="text-transform: uppercase">@{{ v.ten_san_pham }}</label>
                                                        <p>GIÁ XE: @{{ v.don_gia }}/Ngày</p>
                                                        <p style="margin-top: -20px">LOẠI XE: @{{ tt_detail.id_loai }}</p>
                                                    </div>
                                                    <div class="col-2">
                                                        <button class="btn btn-outline-danger"><i
                                                                class="fa-solid fa-list fa-2x mt-3"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </template>
                                </div>
                            </div>
                        </div>
                        <div id="showinfo" class="d-none">
                            <button id="btnprev" style="width: 100px" class="btn btn-outline-secondary mb-4"><i
                                    class="fa-solid fa-left-long fa-2x"></i></button>
                            <div class="row">
                                <div class="col-6">
                                    <img v-bind:src="tt_in_card.hinh_anh_main" class="rounded-4" height="500px"
                                        width="500px" alt="">
                                </div>
                                <div class="col-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="mb-2">@{{ tt_in_card.ten_san_pham }}</h5>
                                            <h6 class="mb-2">@{{ tt_in_card.id_loai }}</h6>
                                            <textarea class="mb-2" disabled cols="69" rows="2.5">@{{ tt_in_card.mo_ta }}</textarea>
                                            <label class="m-1">Ngày Đi</label>
                                            <input v-model="tt_to_dat.ngay_di" class="form-control mb-2" style="height: 60px" type="datetime-local">
                                            <label class="m-1">Ngày Về</label>
                                            <input v-model="tt_to_dat.ngay_tra" class="form-control mb-2" style="height: 60px" type="datetime-local">
                                            <div class="d-flex">
                                                <h5 style="margin-right: 30px"><span class="text-danger">ĐƠN GIÁ:
                                                    </span>@{{ tt_in_card.don_gia }}/Ngày</h5>
                                                <button v-on:click="datxe()" class="btn btn-danger">THUÊ XE</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-4">
                                    <img class="rounded-4" v-bind:src="tt_in_card.hinh_anh_1" alt="">
                                </div>
                                <div class="col-4">
                                    <img class="rounded-4" v-bind:src="tt_in_card.hinh_anh_2" alt="">
                                </div>
                                <div class="col-4">
                                    <img class="rounded-4" v-bind:src="tt_in_card.hinh_anh_3" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Products Section Six -->
        <section class="products-section-six">
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title">
                    <h4><span>Populer</span> Products For You !</h4>
                </div>
                <div class="row clearfix">
                    <template v-for="(v, k) in list_relate">
                        <div class="shop-item-two col-lg-3 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <a v-bind:href="/detail/+ v.id"><img style="height: 200px" v-bind:src="v.hinh_anh_main" alt="" /></a>
                                </div>
                                <div class="content">
                                    <h6><a href="shop-detail.html">@{{ v.ten_san_pham }}</a></h6>
                                    <div class="lower-box">
                                        <div class="price">@{{ v.don_gia }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </template>
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
                tt_detail: {},
                list_relate: [],
                tt_to_dat: {},
                list_xe_same: [],
                tt_in_card: {},
                key: 0,
            },
            created() {
                this.loadData()
            },
            methods: {
                selectcardModal() {
                    var card = $('.select_card')
                    console.log(card);
                    for (let i = 0; i < card.length; i++) {
                        card[i].onmouseenter = () => {
                            card[i].classList.add('bg-success');
                        }
                        card[i].onmouseleave = () => {
                            card[i].classList.remove('bg-success');
                        }
                    }
                },
                chooseEle() {
                    var card = $('.select_card.bg-danger')[0]
                    setTimeout(function() {
                        if (card) {
                            card.scrollIntoView({
                                behavior: 'instant',
                                block: 'center'
                            });
                        } else {
                            console.error("Element with class 'active' not found.");
                        }
                    }, 250);
                },
                showInfoSP(v, k) {
                    var cardChoose = $('.select_card.bg-danger')[0];
                    if (cardChoose) {
                        cardChoose.classList.remove('bg-danger');
                    }
                    this.tt_in_card = v;
                    var card = $('.select_card')[k];
                    card.classList.add('bg-danger');
                    var main_info = $('#main_info')[0];
                    main_info.classList.add('d-none');
                    setTimeout(() => {
                        var showinfo = $('#showinfo')[0];
                        showinfo.classList.remove('d-none');
                    }, 500);
                    btnprev.onclick = () => {
                        showinfo.classList.add('d-none');
                        setTimeout(() => {
                            main_info.classList.remove('d-none');
                            this.key = k;
                            this.chooseEle();
                        }, 250);
                    }
                },
                loadData() {
                    var currentUrl = window.location.href;
                    var url = new URL(currentUrl);
                    var pathArray = url.pathname.split('/');
                    var number = pathArray[pathArray.length - 1];
                    var id = {
                        'id': number
                    }
                    axios
                        .post('{{ Route('dataDetail') }}', id)
                        .then((res) => {
                            this.tt_detail = res.data.data
                            this.list_relate = res.data.list_relate;
                        })
                        .catch((res) => {
                            $.each(res.response.data.errors, function(k, v) {
                                toastr.error(v[0], 'Error');
                            });
                        });
                },
                datxe() {
                    this.tt_to_dat.id_xe = this.tt_detail.id
                    this.tt_to_dat.id_loai = this.tt_detail.id_loai
                    axios
                        .post('{{ Route('datXe') }}', this.tt_to_dat)
                        .then((res) => {
                            if (res.data.status) {
                                toastr.success(res.data.message, 'Success');
                            } else if (res.data.status == false && res.data.typeErr == 1) {
                                toastr.error(res.data.message, 'Error');
                                this.list_xe_same = res.data.data;
                                console.log(this.list_xe_same);
                                var cardChoose = $('.select_card.bg-danger')[0];
                                if (cardChoose) {
                                    cardChoose.classList.remove('bg-danger');
                                }
                                $('#ModalSP').modal('show');
                            } else {
                                toastr.error(res.data.message, 'Error');
                            }
                        })
                        .then(() => {
                            this.selectcardModal();
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
