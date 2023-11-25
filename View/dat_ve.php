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
                        require_once "datve/ghe.php";
                        break;
                    case 'chondoan':

                        if (isset($_POST['tiep_tuc']) && ($_POST['tiep_tuc'])) {
                            $ten_ghe = array();
                            foreach ($_POST as $key => $value) {
                                if ($key == "ten_ghe") {
                                    $ten_ghe['ghe'] = $value;
                                }
                            }
                            $gia_ghe = $_POST['giaghe'];

                            array_push($_SESSION['ve'], $gia_ghe, $ten_ghe);
                        }
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
        <form action="./index.php?action=dat_ve&link=chondoan" method="post">
            <div class="main-right">
                <div class="phantren">
                    <div class="img-ctbill">
                        <img src="../Admin/Img_ad/<?= $_SESSION['ve']['img_phim'] ?>" alt="" width="150px">
                        <div class="img-ctbill-text">
                            <h2><?= $_SESSION['ve']['ten_phim'] ?></h2>
                            <p>2D Phụ Đề</p> <br>
                            <div class="checked-place">
                                <?php if (isset($ten_ghe['ghe'])) {
                                    foreach ($ten_ghe['ghe']as $key => $ghe) {
                                        echo  '<span class="choosen-place">'.$ghe.'</span>';
                                    }
                                } else {
                                } ?>
                            </div>
                            <!-- <span>T13</span> -->
                        </div>
                    </div>
                    <div class="tgchieu">
                        <span>Galaxy Hà Nội</span> <br>
                        <span>Suất: <?= $_SESSION['ve']['gio_chieu'] ?> - <?= $_SESSION['ve']['ngay_chieu'] ?></span> <br>
                        <span class="ke">------------------------------------------------------------------</span>
                    </div>
                    <div class="tongtien">
                        <span>Tổng cộng</span>
                        <div class="checked-result">
                            <input name="giaghe" style=" width: 80px; font-size: 20px; border: none;" type="text" id="gia_ghe" value="<?php if (!isset($_SESSION['ve'][0])) {
                                                                                                                                            0;
                                                                                                                                        } else {
                                                                                                                                            echo $_SESSION['ve'][0];
                                                                                                                                        } ?>"> VND
                        </div>
                    </div>
                </div>
                <div class="nut-btn">
                    <button><a href="">Quay lại</a></button>
                    <input type="submit" name="tiep_tuc" value="Tiếp Tục">
                </div>
            </div>
        </form>
    </div>
</section>