<!doctype html>
<html lang="en">

<head>
	@include('admin.shares.css')
</head>

<body class="bg-login">
	<!--wrapper-->
	<div id="app_login">
        <div class="wrapper">
            <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
                <div class="container-fluid">
                    <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                        <div class="col mx-auto">
                            <div class="mb-4 text-center">
                                <img src="/client_assets/assets/images/logo-img.png" width="180" alt="" />
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="border p-4 rounded">
                                        <div class="text-center">
                                            <h3 class="">Sign in</h3>
                                        </div>
                                        <div class="login-separater text-center mb-4"> <span>Đăng Nhập Tài Khoản</span>
                                            <hr/>
                                        </div>
                                        <div class="form-body">
                                            <form class="row g-3">
                                                <div class="col-12">
                                                    <label for="inputEmailAddress" class="form-label">Email Address</label>
                                                    <input v-model="singin.email" type="email" class="form-control" id="inputEmailAddress" placeholder="Email Address">
                                                </div>
                                                <div class="col-12 mb-4">
                                                    <label for="inputChoosePassword" class="form-label">Enter Password</label>
                                                    <div class="input-group" id="show_hide_password">
                                                        <input v-model="singin.password" type="password" class="form-control border-end-0" id="inputChoosePassword" placeholder="Enter Password"> <a href="/admin_assets/javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="d-grid">
                                                        <button v-on:click="signIn()" type="submit" class="btn btn-primary"><i class="bx bxs-lock-open"></i>Sign in</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	@include('admin.shares.js')
	<script>
		$(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
	</script>
    <script>
        new Vue({
            el      :   '#app_login',
            data    :   {
                singin : {}
            },
            created()   {

            },
            methods :   {
                signIn() {
                    axios
                        .post('{{Route('loginAdmin')}}', this.singin)
                        .then((res) => {
                            if(res.data.status) {
                                window.location.href = '/admin/nhan-vien'
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
                }
            },
        });
    </script>
</body>

</html>
