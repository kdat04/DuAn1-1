<section class="tong_tt_cn">
    <section class="tt_cn_user1">
      <!-- 1 -->
      <div class="khung_my_user">
        <h6>Họ và tên</h6>
        <div class="background_my_user">
          <i class="fa-solid fa-user" style="color: #595f69;"></i> <span><?= $khachhang['ten_user'] ?></span>
        </div>
      </div>
      <!-- 2 -->
      <div class="khung_my_user">
        <h6>Email</h6>
        <div class="background_my_user">
          <i class="fa-solid fa-envelope" style="color: #595f69;"></i> <span><?= $khachhang['email'] ?></span>
        </div>
      </div>
      <!-- 3 -->
      <div class="khung_my_user">
        <h6>Địa chỉ</h6>
        <div class="background_my_user">
          <i class="fa-solid fa-envelope" style="color: #595f69;"></i> <span><?php if ($khachhang['diachi'] == '') {
                                                                                echo 'Chưa có thông tin';
                                                                              } else {
                                                                                echo $khachhang['diachi'];
                                                                              } ?></span>
        </div>
      </div>
    </section>
    <section class="tt_cn_user1">
      <!-- 1 -->
      <div class="khung_my_user">
        <h6>Ngày Sinh </h6>
        <div class="background_my_user">
          <i class="fa-solid fa-cake-candles" style="color: #595f69;"></i><span><?php if ($khachhang['nam_sinh'] != '') {
                                                                                  echo $khachhang['nam_sinh'];
                                                                                } else {
                                                                                  echo 'Chưa có thông tin';
                                                                                } ?> </span>
        </div>
      </div>
      <!-- 1 -->
      <div class="khung_my_user">
        <h6>Số điện thoại</h6>
        <div class="background_my_user">
          <i class="fa-solid fa-phone" style="color: #595f69;"></i> <span><?php if ($khachhang['sdt'] != 0) {
                                                                            echo '0' . $khachhang['sdt'];
                                                                          } else {
                                                                            echo 'Chưa có thông tin';
                                                                          } ?> </span>
        </div>
      </div>
      <div class="btn_capnhat">
        <a href="./index.php?action=tt_user&link=cap_nhat">Cập nhật thông tin</a>
      </div>
      
    </section>
</section>