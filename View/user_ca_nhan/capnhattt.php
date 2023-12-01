<div style="transform: translate(4%, 20%);"><font color='red'><?= $thongbao ?? "" ?></font></div>
<section class="tong_tt_cn"> 
    <form action="./index.php?action=tt_user&link=cap_nhat" method="post">
        
        <section class="tt_cn_user1">
            <!-- 1 -->
            <div class="khung_my_user">
                <h6>Họ và tên</h6>
                <div class="background_my_user">
                    <i class="fa-solid fa-user" style="color: #595f69;"></i><input type="text" name="" disabled value="<?= $khachhang['ten_user'] ?>">
                </div>
            </div>
            <!-- 2 -->
            <div class="khung_my_user">
                <h6>Email</h6>
                <div class="background_my_user">
                    <i class="fa-solid fa-envelope" style="color: #595f69;"></i> <input type="text"  disabled name="email" value="<?= $khachhang['email'] ?>">
                </div>
            </div>
            <!-- 3 -->
            <div class="khung_my_user">
                <h6>Địa chỉ</h6>
                <div class="background_my_user">
                    <i class="fa-solid fa-envelope" style="color: #595f69;"></i><input type="text" name="diachi" value="<?php if ($khachhang['diachi'] != '') {
                                                                                                                            echo $khachhang['diachi'];
                                                                                                                        } ?>" placeholder="<?php if ($khachhang['diachi'] == '') {
                                                                                                                                                echo 'Chưa có thông tin';
                                                                                                                                            } ?>">
                </div>
            </div>
        </section>
        <section class="tt_cn_user1">
            <!-- 1 -->
            <div class="khung_my_user">
                <h6>Ngày Sinh </h6>
                <div class="background_my_user">
                    <i class="fa-solid fa-cake-candles" style="color: #595f69;"></i> <input type="date" name="namsinh" value="<?php if ($khachhang['nam_sinh'] != '') {
                                                                                                                                    echo $khachhang['nam_sinh'];
                                                                                                                                }?>">
                </div>
            </div>
            <!-- 1 -->
            <div class="khung_my_user">
                <h6>Số điện thoại</h6>
                <div class="background_my_user">
                    <i class="fa-solid fa-phone" style="color: #595f69;"></i> <input type="text" name="sdt" value="<?php if ($khachhang['sdt'] != 0) {
                                                                                                                        echo '0' . $khachhang['sdt'];
                                                                                                                    }?>"  placeholder="<?php if ($khachhang['sdt'] == 0) {
                                                                                                                        echo 'Chưa có thông tin';
                                                                                                                    } ?>">
                </div>
            </div>
            <div class="btn_current_password btn_current_capnhat">
                <input type="hidden" name="id" value="<?= $khachhang['id']?>">
                <a href="./index.php?action=tt_user&link="><input type="button" value="Huỷ"></a>
                <input type="submit" name="capnhat" value="Xác nhận">
            </div>
        </section>
    </form>
</section>