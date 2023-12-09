<form action="" method="post">
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
                <input type="text" name="pass_now" placeholder="Mật khẩu cũ ">
            </div><br>
            <div class="formad_dmk">
                <span>Mật khẩu mới </span><br>
                <input type="text" name="pass_new" placeholder="Mật khẩu mới ">
            </div>
            <div class="formad_dmk">
                <span> Nhập lại mật khẩu </span><br>
                <input type="text" name="pass_current" placeholder="Mật khẩu mới ">
            </div>

            <div class="addmk_click">

                <input type="submit" value="Xác nhận">
            </div>
        </div>
    </section>
</form>