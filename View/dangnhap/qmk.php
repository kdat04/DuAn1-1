<section>
    <div class="general_register">
        <div class="general_registers">
            <div class="general_register_text">
                <p>QUÊN MẬT KHẨU</p>
            </div>
            <div class="text" style="margin-bottom: 15px;">
                Nếu bạn quên mật khẩu, vui lòng nhập địa chỉ email đã đăng ký của bạn. Chúng tôi sẽ gửi cho bạn một liên kết để đặt lại mật khẩu.
            </div>
            <form action="./index.php?action=quenmk" method="post">
                <div class="general_register_input">
                    <fieldset>
                        <input type="email" name="email" placeholder=" Nhập email">
                        <div class="error">
                            <font color="red"><?= $thongbao['pass'] ?? "" ?></font>
                        </div>
                    </fieldset>
                </div>
                <div class="btn_current_password">
                    <a  href="index.php?action=dn"><input style="cursor: pointer;" type="button" value="Hủy"></a>
                    <input style="cursor: pointer;" type="submit" name="quenmk" value="Tiếp tục">
                </div>
            </form>
        </div>
    </div>
</section>