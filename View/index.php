<?php
session_start();
require_once '../Model/phim.php';
require_once '../Model/khach-hang.php';
require_once '../Model/loai.php';
require_once '../Model/khung-gio-chieu.php';
require_once '../Model/xuatchieu.php';
require_once '../Model/pdo.php';

$list_phim_search = phim_select_search();
require_once "./header.php";

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'ct_phim':
            $khunggio = array();
            if ((isset($_GET['id'])) && ($_GET['id'])) {
                $id = $_GET['id'];
                if ((isset($_GET['id_xc'])) && ($_GET['id_xc'])) {
                    $id_xc = $_GET['id_xc'];
                    $khunggio = khunggiochieu_select_by_idxc($id_xc);
                }
                $list = phim_select_by_id($id);
                $xuat_chieu = xuatchieu_select_by_id_phim($id);
                phim_tang_so_luot_xem($id);
            }
            require_once './ct_phim.php';
            break;
        case 'ds_phim':
            $list_phim = phim_select_all();
            require_once './ds_phim.php';
            break;
        case 'ds_search':
            if (isset($_POST['kyw']) && ($_POST['kyw'])) {
                $key = $_POST['kyw'];
                $list_phim = phim_search_keyword($key);
            }
            require_once './ds_phim.php';
            break;
        case 'dn':

            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $ten_dangnhap = $_POST['tendn'];
                $matkhau = md5($_POST['mk']);
                if ($ten_dangnhap == '' || $_POST['mk'] == '') {
                    $thongbao['dangnhap'] = " Vui lòng không bỏ trống !";
                } else {
                    $checkuser = check_users($ten_dangnhap, $matkhau);
                    if ($checkuser) {
                        if ($checkuser['role'] == 0) {
                            $_SESSION['nguoi_dung'] = $checkuser;
                            $list_phim_tt = phim_select_all_tt();
                            if ($tt_dv == 0) {
                                echo '<meta http-equiv="refresh" content="0; url = ./index.php?action=dat_ve">';
                                require_once './dat_ve.php';
                                require_once './footer.php';
                                exit;
                            } else {
                            echo '<meta http-equiv="refresh" content="0; url = ./index.php?action=">';
                            require_once './home.php';
                            require_once './footer.php';
                            exit;
                        }
                        } else {
                            $thongbao['dangnhap'] = "Tài khoản hoặc mật khẩu không đúng";
                        }
                    } else {
                        $thongbao['dangnhap'] = "Tài khoản hoặc mật khẩu không đúng";
                    }
                }
            }
            require_once "../View/dangnhap/dangnhap.php";
            break;
        case 'dk':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $ten_dangnhap = $_POST['tendn'];
                $email = $_POST['email'];
                $matkhau = md5($_POST['mk']);
                $nhaplaimatkhau = $_POST['lmk'];
                if ($ten_dangnhap == '' || $_POST['mk'] == '' || $email == '' || $nhaplaimatkhau == '') {
                    $thongbao['dangky'] = " Vui lòng không bỏ trống !";
                } else {
                    if ($_POST['mk'] == $nhaplaimatkhau) {
                        khach_hang_insert($ten_dangnhap, $matkhau, $email);
                        $thongbao['dangky'] = " Đăng ký thành công, vui lòng đăng nhập.";
                    } else {
                        $thongbao['dangky'] = " Mật khẩu không khớp!";
                    }
                }
            }
            require_once "../View/dangnhap/dangky.php";
            break;
        case 'dx':
            require_once "../View/dangnhap/dangxuat.php";
            break;
        case 'tt_user':
            require_once "./thongtinuser.php";
            break;
        case 'dat_ve':
            if (!isset($_SESSION['phim'])) {
                $id_phim = $_GET['id'];
                $id_xuatchieu = $_GET['id_xc'];
                $id_khunggio = $_GET['id_kgc'];
                $_SESSION['phim'] = [$id_phim, $id_xuatchieu, $id_khunggio];
                $list_ve = load_ve_phim($id_phim, $id_xuatchieu, $id_khunggio);
            } else {
                $list_ve = load_ve_phim($_SESSION['phim'][0], $_SESSION['phim'][1], $_SESSION['phim'][2]);
            }
            $_SESSION['ve'] = $list_ve;
            // var_dump($_SESSION['ve']);
            if (isset($_SESSION['nguoi_dung']) && ($_SESSION['nguoi_dung'])) {
                require_once "./dat_ve.php";
            } else {
                $tt_dv = 0;
                $thongbao['dangnhap'] = 'Vui lòng đăng nhập để tiếp tục đặt vé!';
                require_once './dangnhap/dangnhap.php';
                require_once './footer.php';
            }
            break;
        case 'uu_dai':
            require_once "./uu_dai.php";
            break;

        default:
            $list_phim_tt = phim_select_all_tt();
            require_once './home.php';
            break;
    }
} else {
    $list_phim_tt = phim_select_all_tt();
    require_once './home.php';
}

require_once "./footer.php";
