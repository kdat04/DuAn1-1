<?php foreach ($list_lich_su as $list) : ?>
    <?php if ($list['tt_ve']  > 0) : ?>
        <section class="tong_ls" style="margin-bottom: 20px;">
            <div class="tong_ls_left">
                <div class="text_3d">
                    <i class="fa-solid fa-comment"></i><span>3D</span>
                </div>
                <div class="ma_ve">
                    <h4>Mã Đặt Vé - </h4> <span><?= $list['id'] ?></span>
                </div>
                <div class="name_web">
                    3D CINEMA
                </div>
                <div class="date_chieu">
                    <h4>Ngày đặt: <span><?= $list['ngay_dat'] ?></span>
                        <hr>Phim:<span><?= $list['ten_phim'] ?></span>
                        <hr>Xuất chiếu:<span><?= $list['ngay_chieu'] ?>,<?= $list['gio_chieu'] ?></span>
                        <hr>Ghế ngồi:<span> <?= $list['ghe'] ?></span>
                    </h4>

                </div>

            </div>

            <div class="tong_ls_right">
                <div class="thanh_tien">
                    <h4>THÀNH TIỀN </h4>
                    <span> <?= number_format($list['thanh_tien'], 0, ",", ".") ?> VND</span>
                </div>
            </div>
        </section>
    <?php endif ?>
<?php endforeach ?>