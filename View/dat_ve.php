<section class="datve">
    <div class="box-text">
        <nav>
            <ul>
                <li>
                    Chọn ghế
                </li>
                <li>Chọn dịch vụ</li>
                <li>Thanh toán</li>
            </ul>
        </nav>
    </div>
    <div class="main">
        <div class="main-left">
            <?php
            if ((isset($_GET['link'])) && ($_GET['link'] != "")) {
                $act = $_GET['link'];
                switch ($act) {
                    case 'chondoan':
                        if (isset($_POST['tiep_tuc']) && ($_POST['tiep_tuc'])) {
                            $ten_ghe = array();
                            foreach ($_POST as $key => $value) {
                                if ($key == "ten_ghe") {
                                    $ten_ghe['ghe'] = $value;
                                }
                            }
                            $gia_ghe = $_POST['giaghe'];
                            // var_dump($ten_ghe);
                            array_push($_SESSION['ve'], $gia_ghe, $ten_ghe);

                            if (isset($ten_ghe['ghe']) && ($ten_ghe['ghe'])) {
                                $ghe = implode(',', $ten_ghe['ghe']);
                                $ngay_tt = date('Y-m-d H:i:s');
                                $id_user = $_SESSION['nguoi_dung']['id'];
                                $id_kgc = $_SESSION['ve']['id_kgc'];
                                $id_bill = bill_insert($ngay_tt, $gia_ghe);
                                $_SESSION['id_bill'] = $id_bill;
                                $id_ve = ve_insert($gia_ghe, $ngay_tt, $ghe, $id_user, $id_kgc, $id_bill);
                                $_SESSION['id_ve'] = $id_ve;
                            } else {
                                $step = 0;
                                $id_kgc = $_SESSION['ve']['id_kgc'];
                                $lock_ghe = lock_ghe($id_kgc);
                                if (isset($lock_ghe) && $lock_ghe != array()) {
                                    $lock_ghe_ = [];
                                    foreach ($lock_ghe as $value) {
                                        $lock_ghe_ = array_merge($lock_ghe_, $value);
                                    }
                                    $lock_ghe1 = implode(',', $lock_ghe_);
                                    $lock_ghe_tong = explode(',', $lock_ghe1);
                                } else {
                                    $lock_ghe_tong = array();
                                }
                                require_once "datve/ghe.php";
                                break;
                            }
                        }
                        $step = 1;
                        require_once "datve/chondoan.php";
                        break;
                    case 'thanh_toan':
                        if (isset($_POST['tiep_tuc']) && ($_POST['tiep_tuc'])) {
                            $ten_ghe = array();
                            foreach ($_POST as $key => $value) {
                                if ($key == "ten_ghe") {
                                    $ten_ghe['ghe'] = $value;
                                }
                            }
                            $ten_doan = array();
                            foreach ($_POST as $key => $value) {
                                if ($key == "ten_do_an") {
                                    $ten_doan['doan'] = $value;
                                }
                            }
                            $gia_ghe = $_POST['giaghe'];
                            array_push($_SESSION['ve'], $gia_ghe, $ten_ghe, $ten_doan);
                            if (isset($ten_doan['doan']) && ($ten_doan['doan'])) {
                                $combo = implode(', ', $ten_doan['doan']);
                                dich_vu_insert($_SESSION['id_ve'], $combo);
                                bill_updat_gia($_SESSION['id_bill'], $gia_ghe);
                            }


                            // var_dump($_SESSION['ve']);
                        }
                        $step = 2;

                        require_once "datve/thanh_toan.php";
                        break;
                    default:
                        $step = 0;
                        require_once "datve/ghe.php";
                        break;
                }
            } else {
                $step = 0;
                $lock_ghe = lock_ghe($_SESSION['ve']['id_kgc']);
                if (isset($lock_ghe) && $lock_ghe != array()) {
                    $lock_ghe_ = [];
                    foreach ($lock_ghe as $value) {
                        $lock_ghe_ = array_merge($lock_ghe_, $value);
                    }
                    $lock_ghe1 = implode(',', $lock_ghe_);
                    $lock_ghe_tong = explode(',', $lock_ghe1);
                } else {
                    $lock_ghe_tong = array();
                }
                require_once "datve/ghe.php";
            }
            ?>
        </div>

        <form action="./index.php?action=dat_ve&link=<?php if ($step == 0) { ?>chondoan<?php } else { ?>thanh_toan<?php } ?>" method="post">
            <div class="main-right">
                <div class="phantren">
                    <div class="img-ctbill">
                        <img src="../Admin/Img_ad/<?= $_SESSION['ve']['img_phim'] ?>" alt="" width="150px">
                        <div class="img-ctbill-text">
                            <h2><?= $_SESSION['ve']['ten_phim'] ?></h2>
                            <p>2D Phụ Đề</p> <br>
                            <div class="checked-place">

                                <?php if (isset($ten_ghe['ghe'])) {
                                    foreach ($ten_ghe['ghe'] as $ghe) {
                                        echo  '<span class="choosen-place">' . $ghe . '</span>';
                                        echo  '<input type="hidden" name="ten_ghe[]" value="' . $ghe . '">';
                                    }
                                } else {
                                } ?>

                            </div>
                            <div style="margin-top: 20px; display: flex;" class="check-doan">

                                <?php if (isset($ten_doan['doan'])) {
                                    foreach ($ten_doan['doan'] as $doan) {
                                        echo  '<span class="choosen-place">' . $doan . '</span>';
                                        echo  '<input type="hidden" name="ten_ghe[]" value="' . $doan . '">';
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
                    <a href="./index.php?action=<?php if ($step == 0) { ?>ct_phim&id=<?= $_SESSION['ve']['id_phim'] ?><?php } else { ?>dat_ve&link=<?php } ?>">Quay lại</a>
                    <input type="submit" name="tiep_tuc" value="<?php if ($step == 2) { ?> Xác nhận <?php } else { ?>Tiếp Tục<?php } ?>">
                </div>
            </div>
        </form>

    </div>
    <style>
        <?php
        if ($step == 0) {
            echo '.box-text nav ul li:nth-child(1){
            border-bottom: 1px solid #333333;
        }';
        } elseif ($step == 1) {
            echo '.box-text nav ul li:nth-child(2){
            border-bottom: 1px solid #333333;
        }';
        } elseif ($step == 2) {
            echo '.box-text nav ul li:nth-child(3){
            border-bottom: 1px solid #333333;
        }';
        } else {
            echo '.box-text nav ul li:nth-child(0){
            border-bottom: 1px solid #333333;
        }';
        }
        ?>
    </style>
</section>