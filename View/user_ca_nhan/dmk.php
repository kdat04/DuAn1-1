<div class="edit_information">
    <p>Đổi mật khẩu <span>(Để bảo mật tài khoản, vui lòng không chia sẻ mật khẩu cho người khác)</span></p>
</div>
<div class="edit_information_content_pass">
    <font color="red"><?= $thongbao ?? "" ?></font>
    <form style="transform: translateY(-5%);" action="./index.php?action=tt_user&link=dmk" method="post">
        <div class="current_password">
            <p>Mật khẩu hiện tại *</p>
            <input type="password" name="pass_now">
        </div>
        <div class="current_password">
            <p>Mật khẩu mới *</p>
            <input type="password" name="pass_new">
        </div>
        <div class="current_password">
            <p>Xác nhận mật khẩu mới *</p>
            <input type="password" name="pass_current">
        </div>
        <br>
        <div class="btn_current_password">
            <a href="./index.php?action=tt_user&link="><input type="button" value="Huỷ"></a>
            <input type="submit" name="doimk" value="Xác nhận">
    </form>
</div>
</div>