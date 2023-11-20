<section class="tong_ct_phim">
  <?php if ($list['id'] == $id) : ?>
  
    <div class="video">
      <img src="../Admin/Img_ad/<?= $list['img_banner'] ?>" alt="">
      <i class="fa-solid fa-play" style="color: #e52424;"></i>
    </div>
    <div class="box">
      <div class="ct_phim_box_left">
        <div class="tt_ct_phim">
          <div class="tt_ct_phim_nd">
            <div class="tt_ct_phim_nd1">
              <img src="../Admin/Img_ad/<?= $list['img_phim'] ?>" alt="">
            </div>
<<<<<<< HEAD
            <div class="tt_ct_phim_nd2">
              <h2> <?= $list['ten_phim'] ?></h2>
              <div class="time_phim_ct">
                <span><i class="fa-regular fa-clock" style="color: #e28708;"></i> 104 Phút</span> <span><i class="fa-regular fa-calendar" style="color: #da6b10;"></i> 09/11/2023</span>
              </div>
              <div class="dg_ct_phim">
                <i class="fa-solid fa-star" style="color: #e18823;"></i>
                <h5>7.9</h5> <span>(<?= $list['view'] ?> view)</span>
              </div>
              <div class="like_phim">
                <h6>Quốc gia:</h6>
                <p> <?= $list['quocgia'] ?></p>
              </div>
              <div class="like_phim">
                <h6>Nhà sản xuất:</h6>
                <p> <?= $list['nsx'] ?></p>
              </div>
              <div class="like_phim">
                <h6>Thể loại:</h6> <span> <?= $list['ten_loaiphim'] ?></span>
              </div>
              <div class="like_phim">
                <h6>Diễn viên:</h6> <span><?= $list['dienvien1'] ?></span> <span><?= $list['dienvien2'] ?></span> <span><?= $list['dienvien3'] ?></span>
              </div>
=======
            <div class="dg_ct_phim">
              <i class="fa-solid fa-star" style="color: #e18823;"></i>
              <h5>7.9</h5>( <span><?= $list['view'] ?> view )</span>
            </div>
            <div class="like_phim">
              <h6>Quốc gia:</h6>
              <span> <?= $list['quocgia'] ?></span>
            </div>
            <div class="like_phim">
              <h6>Nhà sản xuất:</h6>
              <span> <?= $list['nsx'] ?></span>
            </div>
            <div class="like_phim">
              <h6>Thể loại:</h6> <span> <?= $list['ten_loaiphim'] ?></span> 
            </div>
       
            <div class="like_phim">
              <h6>Diễn viên:</h6> <span><?= $list['dienvien1'] ?></span> <span><?= $list['dienvien2'] ?></span> <span><?= $list['dienvien3'] ?></span>
>>>>>>> c94decee08dc59f30e2e9b5947bcd902fa0c9f80
            </div>
          </div>
          <div class="mo_ta_phim">
            <h3>Nội Dung Phim </h3>
            <p>
              <?= $list['mota'] ?> <br>
            </p>
          </div>
        <?php endif ?>
        <div class="lich_chieu">
          <h3>Lịch chiếu </h3>
          <div class="khung_chieu">
            <div class="khung_chieu_time">
              <i class="fa-solid fa-chevron-up fa-rotate-270"></i>
              <div class="ngay_thu">
                Hôm Nay 14/11
              </div>
              <div class="ngay_thu">
                Thứ Tư 15/11
              </div>
              <div class="ngay_thu">
                Thứ Năm 16/11
              </div>
              <div class="ngay_thu">
                Thứ Sáu 17/11
              </div>
              <div class="ngay_thu">
                Thứ Bảy 18/11
              </div>
              <i class="fa-solid fa-chevron-up fa-rotate-90"></i>
            </div>
            <!-- <div class="khung_chieu_dress">
              <div class="khung_chieu_dress1">
                <div class="khung_chieu_dress2">
                  <input type="text" placeholder="Toàn Quốc" name="" id="">
                  <i class="fa-solid fa-chevron-up fa-rotate-180"></i>
                </div>
              </div>
              <div class="khung_chieu_dress1">
                <div class="khung_chieu_dress2">
                  <input type="text" placeholder="Tất cả rạp" name="" id="">
                  <i class="fa-solid fa-chevron-up fa-rotate-180"></i>
                </div>
              </div>
            </div> -->
          </div>
        </div>
        <div class="dress_time_chieu">
          <h3>Galaxy Hà Nội</h3>
          <div class="dress_time_chieu_tong">
            <div class="phu_de">
              <span>2D Phụ Đề</span>
            </div>
            <div class="time_chieu">
              <?php
              for ($i = 10; $i <= 22; $i += 2) : ?>
                <a href="index.php?action=dat_ve">
                  <p><?= $i ?>:00</p>
                </a>
              <?php endfor; ?>
            </div>
          </div>
        </div>
        <div class="dress_time_chieu">
          <h3>Galaxy Sài Gòn </h3>
          <div class="dress_time_chieu_tong">
            <div class="phu_de">
              <span>2D Phụ Đề</span>
            </div>
            <div class="time_chieu">
              <?php
              for ($i = 10; $i <= 22; $i += 2) : ?>
                <p><?= $i ?>:00</p>
              <?php endfor; ?>
            </div>
          </div>
        </div>
        </div>
      </div>
      <div class="ct_phim_box_right">
        <h3>PHIM ĐANG CHIẾU</h3>
        <div class="phim_lq">
          <div class="phim_lq_img">
            <img src="IMG/phim_lq1.webp" alt="">
            <div class="sub_img">
              <span><i class="fa-solid fa-tv"></i>Mua Vé</span>
            </div>
          </div>
          <h5>Biệt Đội Marvels</h5>
        </div>
        <div class="phim_lq">
          <div class="phim_lq_img">
            <img src="IMG/750x500-nvcc_1698985267220.webp" alt="">
            <div class="sub_img">
              <span><i class="fa-solid fa-tv"></i>Mua Vé</span>
            </div>
          </div>
          <h5>Người Vợ Cuối Cùng</h5>
        </div>
        <div class="phim_lq">
          <div class="phim_lq_img">
            <img src="IMG/lr-750_1699256436423.webp" alt="">
            <div class="sub_img">
              <span><i class="fa-solid fa-tv"></i>Mua Vé</span>
            </div>
          </div>
          <h5>Yêu Lại Vợ Ngầu</h5>
        </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
      $(document).ready(function() {
        $("#binhluannew").load("binhluan.php", {
          id_phim: <?= $list['id'] ?>
          
        });
      });
    </script>
    <div class="binhluannew" id="binhluannew"> </div>

</section>