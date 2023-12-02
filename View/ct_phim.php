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
            <div class="tt_ct_phim_nd2">
              <h2> <?= $list['ten_phim'] ?></h2>
              <div class="time_phim_ct">
                <span><i class="fa-regular fa-clock" style="color: #e28708;"></i><?= $list['thoi_luong_phim'] ?> phút </span> <span><i class="fa-regular fa-calendar" style="color: #da6b10;"></i> <?= $list['nph'] ?></span>
              </div>
              <div class="dg_ct_phim">
                <i class="fa-solid fa-star" style="color: #e18823;"></i>
                <h5><?= $list['cs_danh_gia'] ?></h5> <span>(<?= $list['view'] ?> view)</span>
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
              <!-- <i class="fa-solid fa-chevron-up fa-rotate-270"></i> -->
              <?php foreach ($xuat_chieu as $xc) : ?>
                <?php if($xc['ngay_chieu'] > $now) :?>
                <a href="./index.php?action=ct_phim&id=<?= $list['id'] ?>&id_xc=<?= $xc['id'] ?>">
                  <div class="ngay_thu">
                    <?= $xc['ngay_chieu'] ?>
                  </div>
                </a>
                <?php endif ?>
              <?php endforeach ?>
              <!-- <i class="fa-solid fa-chevron-up fa-rotate-90"></i> -->
            </div>
            <div class="khung_chieu_dress">
              <!-- <div class="khung_chieu_dress1">
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
              </div> -->
            </div>
          </div>
        </div>
        <div class="dress_time_chieu">
          <h3>Galaxy Hà Nội</h3>
          <div class="dress_time_chieu_tong">
            <div class="phu_de">
              <span>2D Phụ Đề</span>
            </div>
            <div class="time_chieu">
              <?php foreach ($khunggio as $kg) : ?>
                  <a href="index.php?action=dat_ve&id=<?= $list['id'] ?>&id_xc=<?= $kg['id_xuat_chieu'] ?>&id_kgc=<?= $kg['id'] ?>">
                    <p><?= $kg['gio_chieu'] ?></p>
                  </a>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
        <!-- <div class="dress_time_chieu">
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
        </div> -->
        </div>
      </div>
      <div class="ct_phim_box_right">
        <h3>PHIM ĐANG CHIẾU</h3>
        <?php foreach ($list_phim_dgchieu as $phim) :?>
        <div class="phim_lq">
          <div class="phim_lq_img">
            <img src="../Admin/Img_ad/<?= $phim['img_banner']?>" alt="">
            <div class="sub_img">
              <a href="index.php?action=ct_phim&id=<?= $phim['id']?>"><i class="fa-solid fa-tv"></i>Mua Vé</a>
            </div>
          </div>
          <h5 style="font-weight: 600;"><?= $phim['ten_phim']?></h5>
        </div>
        <?php endforeach ?>

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