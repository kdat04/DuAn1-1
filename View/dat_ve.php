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
                            $ghe = implode(',', $ten_ghe['ghe']);
                            $ngay_tt = date('Y-m-d H:i:s');
                            $id_user = $_SESSION['nguoi_dung']['id'];
                            $id_kgc = $_SESSION['ve']['id'];
                            $id_bill = bill_insert($ngay_tt, $gia_ghe);
                            $_SESSION['id_bill'] = $id_bill;
                            $id_ve = ve_insert($gia_ghe, $ngay_tt, $ghe, $id_user, $id_kgc, $id_bill);
                            $_SESSION['id_ve'] = $id_ve;
                        }
                        $step = 1;
                        // var_dump($_SESSION['ve']);
                        // var_dump($_SESSION['nguoi_dung']);
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
                        require_once "datve/ghe.php";
                        break;
                }
            } else {
                $step = 0;
                $id_user = $_SESSION['nguoi_dung']['id'];
                $id_kgc = $_SESSION['ve']['id_kgc'];
                $id_xc = $_SESSION['ve']['id_xc'];
                $id_phim = $_SESSION['ve']['id_phim'];
                $lock_ghe= lock_ghe($id_user, $id_kgc, $id_xc, $id_phim);
                
                var_dump($lock_ghe);
                $lock_ghe = array_merge($lock_ghe[0], $lock_ghe[1]);
            
                // $mang_ghe = explode(',', $lock_ghe['ghe'][0][0]);
                // var_dump($_SESSION['ve']);

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
                    <a <?php if ($step == 0) { ?> style=" display: none;" <?php
                                                                        } else { ?> style=" display: block;" <?php } ?> href="./index.php?action=<?php if ($step == 1) { ?>dat_ve&do_an2<?php } else if ($step == 2) { ?>dat_ve&link=chondoan<?php } ?>">Quay lại</a>
                    <input type="submit" name="tiep_tuc" value="<?php if ($step == 2) { ?> Xác nhận <?php } else { ?>Tiếp Tục<?php } ?>">
                </div>
            </div>
        </form>

    </div>
</section>