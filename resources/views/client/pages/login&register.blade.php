@extends('client.shares.master')
@section('noi_dung')
<section class="page-title">
    <div class="auto-container">
        <h2>Login Page</h2>
        <ul class="bread-crumb clearfix">
            <li><a href="index.html">Home</a></li>
            <li>Pages</li>
            <li>Register</li>
        </ul>
    </div>
</section>
<!-- End Page Title -->

<!-- Register Section -->
<div id="app">
    <div class="register-section">
        <div class="auto-container">
            <div class="inner-container">
                <div class="row clearfix">
                    <!-- Column -->
                    <div class="column col-lg-6 col-md-12 col-sm-12">
                        <!-- Login Form -->
                        <div class="styled-form">
                            <h4>Sign Up</h4>
                                <div class="form-group">
                                    <label>Họ Và Tên</label>
                                    <input v-model="dangki.ten_khach_hang" type="text" placeholder="Enter your name*" required>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input v-model="dangki.email" type="email" placeholder="Enter your name*" required>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input v-model="dangki.password" type="password" placeholder="Enter your name*" required>
                                </div>
                                <div class="form-group">
                                    <label>Địa Chỉ</label>
                                    <input v-model="dangki.dia_chi" type="text" placeholder="Enter your name*" required>
                                </div>
                                <div class="form-group">
                                    <label>Số Điện Thoại</label>
                                    <input v-model="dangki.so_dien_thoai" type="tel" placeholder="Enter your name*" required>
                                </div>
                                <div class="form-group">
                                    <label>Ngày Sinh</label>
                                    <input v-model="dangki.ngay_sinh" class="form-control rounded-pill" style="height: 55px; text-indent: 10px;" type="date" placeholder="Enter your name*" required>
                                </div>
                                <div class="form-group">
                                    <label>Căn Cước Công Dân</label>
                                    <input v-model="dangki.can_cuoc_cong_dan" type="text" placeholder="Enter Email Adress" required>
                                </div>
                                <div class="form-group">
                                    <button v-on:click="dnhap()" type="button" class="theme-btn btn-style-one">
                                        Sign Up
                                    </button>
                                </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="column col-lg-6 col-md-12 col-sm-12">
                        <!-- Login Form -->
                        <div class="styled-form">
                            <h4>Login here</h4>
                            <form method="post" action="index.html">
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input v-model="dangnhap.email" type="email" name="emaill" value="" placeholder="Enter Email Adress" required>
                                </div>

                                <div class="form-group">
                                    <label>Password</label>
                                    <input v-model="dangnhap.password" type="password" name="password" value="" placeholder="Create password" required>
                                </div>
                                <div class="form-group">
                                    <button v-on:click="danki()" type="button" class="theme-btn btn-style-one">
                                        Login here
                                    </button>
                                </div>
                            </form>
                        </div>
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
                dangki: {},
                dangnhap: {}
            },
            created()   {

            },
            methods :   {
                dnhap() {
                    axios
                        .post('{{Route('createTaiKhoan')}}', this.dangki)
                        .then((res) => {
                            if(res.data.status) {
                                toastr.success(res.data.message, 'Success');
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
                danki() {
                    axios
                        .post('{{Route('login')}}', this.dangnhap)
                        .then((res) => {
                            if(res.data.status) {
                                toastr.success(res.data.message, 'Success');
                                window.location.href = "/"
                            } else {
                                toastr.error(res.data.message, 'Error');
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
