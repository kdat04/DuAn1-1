<section class="tong_xac_nhan">
    
    <section class="xacnhan">

        <div class="xacnhan-tt">
            <div class="xacnhan-tt-text">
                <h3>Thanh toán thành công!</h3>
            </div>
            <div class="xacnhan-tt-icon">
                <i class="fa-solid fa-check"></i>
            </div>
        </div>
        <div class="ke-xacnhan">--------------------------------------------------------------------------------------------------------------------------</div>
        <div class="xacnhan-tt-bill">
            <nav>
                <ul>
                   
                    <li>
                        <h4>Mã đặt vé:</h4>
                        <span><?= $list_xc['id'] ?></span>
                    </li>
                    <li>
                        <h4>Tên khách hàng:</h4>
                        <span><?= $list_xc['ten_user'] ?></span>
                    </li>
                    <li>
                        <h4>Tên phim:</h4>
                        <span><?= $list_xc['ten_phim'] ?></span>
                    </li>
                    <li>
                        <h4>Xuất chiếu:</h4>
                        <span><?= $list_xc['ngay_chieu'] ?>,<?= $list_xc['gio_chieu']?></span>
                    </li>
                    <li>
                        <h4>Ghế ngồi:</h4>
                        <span><?= $list_xc['ghe_ngoi'] ?></span>
                    </li>
                    <li>
                        <h4>Thành tiền:</h4>
                        <span><?= number_format($list_xc['thanh_tien'], 0, ",", ".") ?> VNĐ</span>
                    </li>
                   
                </ul>
            </nav>
        </div>
        <div class="ke-xacnhan">--------------------------------------------------------------------------------------------------------------------------</div>
        <div class="nut-xn">
            <a href="./index.php?action=">Tiếp tục đặt vé</a>
        </div>
    </section>
</section>