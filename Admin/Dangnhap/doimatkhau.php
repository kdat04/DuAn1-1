<div class="main-wrapper">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Login box.scss -->
    <!-- ============================================================== -->
    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark">
        <div class="auth-box bg-dark border-top border-secondary">
            <div id="loginform">
                <div class="text-center p-t-20 p-b-20">
                    <span class="db"><img src="assets/images/logo.png" alt="logo" /></span>
                </div>
                <!-- Form -->
                <div class="text-center">
                    <span class="text-white">Vui lòng nhớ mật khẩu đặt mới để đăng nhập.</span>
                </div>
                <div class="error">
                    <font color="red"><?= $thongbao['pass'] ?? "" ?></font>
                </div>
                <form class="form-horizontal m-t-20" class="col-12" action="index.php?action=&act=doimatkhau&id=<?= $email?>" method="post">
                    <!-- email -->
                    <div class="input-group mb-3">
                        <div style="margin-bottom: 20px;">
                            <input style="width: 350px;" class="form-control form-control-lg" type="password" name="pass" placeholder=" Nhập mật khẩu mới">
                        </div>
                        <div><input style="width: 350px;" class="form-control form-control-lg" type="password" name="pass_now" placeholder=" Nhập lại mật khẩu mới">
                    </div>

                    </div>
                    <!-- pwd -->
                    <div class="row m-t-20 p-t-20 border-top border-secondary">
                        <div class="col-12">
                            <input style="transform: translateX(-75%); width:150px;" name="doimatkhau" class="btn btn-info float-right" type="submit" value="Xác nhận">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Login box.scss -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper scss in scafholding.scss -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper scss in scafholding.scss -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right Sidebar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right Sidebar -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- All Required js -->
<!-- ============================================================== -->
<script src="assets/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- ============================================================== -->
<!-- This page plugin js -->
<!-- ============================================================== -->
<script>
    $('[data-toggle="tooltip"]').tooltip();
    $(".preloader").fadeOut();
    // ============================================================== 
    // Login and Recover Password 
    // ============================================================== 
    $('#to-recover').on("click", function() {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });
    $('#to-login').click(function() {

        $("#recoverform").hide();
        $("#loginform").fadeIn();
    });
</script>