<form action="index.php?action=&act=doi_mk" method="post">
    <section class="tongad_dmk">
        <div class="dmk_ad">
            <img src="../Admin/Img_ad/3d Cinema.png" alt="Ảnh phim">
            <div class="textad_dmk">
                <h5>Đổi mật khẩu ?</h5>
                <h6>Điền thông tin của bạn vào đây</h6>
            </div>
            <div class="tbad" style="color: red;">
                <span style="color: red;"><?= $thongbao ?? '' ?></span>
            </div>
            <div class="formad_dmk">
                <span>Mật khẩu cũ </span><br>
                <input type="password" name="pass_now" placeholder="Mật khẩu cũ ">
            </div><br>
            <div class="formad_dmk">
                <span>Mật khẩu mới </span><br>
                <input type="password" name="pass_new" placeholder="Mật khẩu mới ">
            </div><br>
            <div class="formad_dmk">
                <span> Nhập lại mật khẩu </span><br>
                <input type="password" name="pass_current" placeholder="Mật khẩu mới ">
            </div><br>

            <div class="addmk_click">
                <input name="doimk" type="submit" value="Xác nhận">
            </div>
        </div>
    </section>
</form>