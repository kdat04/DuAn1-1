<section>
    <div class="general_register">
        <div class="general_registers">
            <div class="general_register_text">
                <p>ĐỔI MẬT KHẨU</p>
            </div>
            <div class="text" style="margin-bottom: 15px;">
                Vui lòng nhớ mật khẩu đặt mới để đăng nhập.
            </div>
            <form action="./index.php?action=doimk&id=<?= $email?>" method="post">
                <div class="general_register_input">
                    <fieldset>
                        <input type="password" name="pass" placeholder=" Nhập mật khẩu mới">
                        <input type="password" name="pass_now" placeholder=" Nhập lại mật khẩu mới">
                        <div class="error">
                            <font color="red"><?= $thongbao['pass'] ?? "" ?></font>
                        </div>
                    </fieldset>
                </div>
                <div class="btn_current_password">
                    <input style="cursor: pointer;" type="submit" name="doimk" value="Xác nhận">
                </div>
            </form>
        </div>
    </div>
</section>