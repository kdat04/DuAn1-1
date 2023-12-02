<section>
    <div class="general_register">
        <div class="general_registers">
            <div class="general_register_text">
                <h4>Chào mừng bạn đến với 3D Cinema!</h4>
                <p>ĐĂNG <span>KÝ</span> </p>
                <div class="error" style="text-align: center; height: 10px;transform: translateY(-50%)">
                    <font color="red"><?= $thongbao['dangky'] ?? "" ?></font>
                </div>
            </div>
            <form action="index.php?action=dk" method="post">
                <div class="general_register_input">
                    <fieldset>
                        <input type="text" name="tendn" placeholder="Họ và tên">
                    </fieldset>
                    <fieldset>
                        <input type="email" name="email" placeholder="Địa chỉ email">
                    </fieldset>
                    <fieldset>
                        <input type="password" name="mk" placeholder="Mật khẩu">
                    </fieldset>
                    <fieldset>
                        <input type="password" name="lmk" placeholder="Nhập lại mật khẩu">
                    </fieldset>
                </div>
                <div class="general_register_btn">
                    <input type="submit" name="dangky" value="Đăng ký">
                </div>
            </form>
            <!-- <div class="or_register_with">
                <div class="or_register_with_text">
                    Hoặc đăng ký bằng
                </div>
            </div> -->
            <!-- <div class="or_register_with_app">
                <div class="or_register_with_gg">
                    <a href=""><img src="./Img/gg.jpg" alt="">Google</a>
                </div>
                <div class="or_register_with_fb">
                    <a href=""><img src="./Img/facebook.jpg" alt="">Facebook</a>
                </div>
            </div> -->
            <div class="Log_in">
                Bạn đã có tài khoản? <a href="./index.php?action=dn">Đăng nhập ngay!</a>
            </div>
        </div>
    </div>
</section>