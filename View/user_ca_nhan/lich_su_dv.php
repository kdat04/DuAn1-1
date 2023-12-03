<?php foreach ($list_lich_su as $list) : ?>
    <?php if ($list['tt_ve']  > 0) : ?>
        <section class="tong_ls" style="margin-bottom: 20px;">
            <div class="tong_ls_left">
                <div class="text_3d">
                    <i class="fa-solid fa-comment"></i><span>3D </span><div style="padding: 5px; font-size: 20px; font-weight: 500;">CINEMA</div>
                </div>
                <div class="ma_ve">
                    <h4>Mã Đặt Vé - </h4> <span><?= $list['id'] ?></span>
                </div>
                <div class="name_web">
                    Phim: <span><?= $list['ten_phim'] ?></span>
                </div>
                <div class="date_chieu">
                    <h4>
                        Xuất chiếu:<span><?= $list['ngay_chieu'] ?>,<?= $list['gio_chieu'] ?>,<?= $list['phong_phim'] ?></span>
                        <hr>Ghế ngồi:<span> <?= $list['ghe_ngoi'] ?></span>
                    </h4>

                </div>

            </div>

            <div class="tong_ls_right">
                <div class="thanh_tien">
                    <h4>Thành tiền: 
                    <span> <?= number_format($list['thanh_tien'], 0, ",", ".") ?> VND</span></h4>
                </div>
                <div class="thanh_tien">
                    <h4>Ngày đặt: 
                    <span> <?= $list['ngay_dat'] ?></span></h4>
                </div>
            </div>
        </section>
    <?php endif ?>
<?php endforeach ?>