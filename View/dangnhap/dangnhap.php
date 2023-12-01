<section>
    <div class="general_register">
        <div class="general_registers">
            <div class="general_register_text">
                <h4>Chào mừng bạn đến với 3D Cinema!</h4>
                <p>ĐĂNG <span>NHẬP</span> </p>
                <div class="error" style="text-align: center; height: 10px; transform: translateY(-50%);">
                <font  color="red"><?= $thongbao['dangnhap'] ?? "" ?></font>
                </div>
            </div>
            <form action="../View/index.php?action=dn" method="post">
                <div class="general_register_input">
                    <fieldset>
                        <input type="email" name="email" placeholder="Email">
                    </fieldset>
                    <fieldset>
                        <input type="password" name="mk" placeholder="Mật khẩu">
                    </fieldset>
                </div>
                <div class="general_register_btn">
                    <input type="submit" name="dangnhap" value="Đăng nhập">
                </div>
            </form>
            <div class="remember_account">
                <a href="./index.php?action=quenmk">Quên mật khẩu?</a>
            </div>
            <!-- <div class="or_register_with">
                <div class="or_register_with_text">
                    Hoặc đăng nhập bằng
                </div>
            </div> -->
            <!-- <div class="or_register_with_app">
                <div class="or_register_with_gg">
                    <a href=""><img src="./IMG/gg.jpg" alt="">Google</a>
                </div>
                <div class="or_register_with_fb">
                    <a href=""><img src="./Img/facebook.jpg" alt="">Facebook</a>
                </div>
            </div> -->
            <div class="Log_in">
                Bạn chưa có tài khoản? <a href="./index.php?action=dk">Đăng ký ngay!</a>
            </div>
        </div>
    </div>
</section>