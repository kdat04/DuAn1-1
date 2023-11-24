<section class="datve">
    <div class="box-text">
        <nav>
            <ul>
                <li><a href="#">
                        <span>Chọn phim / Rạp / Suất</span>
                        <span>Chọn ghế</span>
                    </a>
                </li>
                <li><a href="#">Chọn thức ăn</a></li>
                <li><a href="#">Thanh toán</a></li>
                <li><a href="#">Xác nhận</a></li>
            </ul>
        </nav>
    </div>
    <div class="main">
        <div class="main-left">
            <?php
            if ((isset($_GET['link'])) && ($_GET['link'] != "")) {
                $act = $_GET['link'];
                switch ($act) {
                    case 'chonghe':
                        require_once "datve/chonghe.php";
                        break;
                    case 'chondoan':
                        require_once "datve/chondoan.php";
                        break;
                    case 'thanh_toan':
                        require_once "datve/thanh_toan.php";
                        break;
                    default:
                        require_once "datve/ghe.php";
                        break;
                }
            } else {
                require_once "datve/ghe.php";
            }
            ?>
        </div>
        <div class="main-right">
            <div class="phantren">
                <div class="img-ctbill">
                    <img src="../Admin/Img_ad/<?= $list_ve['img_phim'] ?>" alt="" width="150px">
                    <div class="img-ctbill-text">
                        <h2><?= $list_ve['ten_phim'] ?></h2>
                        <p>2D Phụ Đề</p> <br>
                        <div class="checked-place">

                        </div>
                        <!-- <span>T13</span> -->
                    </div>
                </div>
                <div class="tgchieu">
                    <span>Galaxy Hà Nội</span> <br>
                    <span>Suất: <?= $list_ve['gio_chieu'] ?> -<?= $list_ve['ngay_chieu'] ?></span> <br>
                    <span class="ke">------------------------------------------------------------------</span>
                </div>
                <div class="tongtien">
                    <span>Tổng cộng</span>
                    <div class="checked-result">
                        $0
                    </div>
                </div>
            </div>
            <div class="nut-btn">
                <button><a href="">Quay lại</a></button>
                <button><a href="index.php?action=dat_ve&link=chondoan">Tiếp tục</a></button>
            </div>
        </div>
    </div>
</section>