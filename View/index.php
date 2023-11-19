<?php
session_start();
require_once '../Model/phim.php';
require_once '../Model/khach-hang.php';
require_once '../Model/loai.php';
require_once '../Model/pdo.php';
require_once "./header.php";

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'ct_phim':
            if ((isset($_GET['id'])) && ($_GET['id'])) {
                $id = $_GET['id'];

                $list = phim_select_by_id($id);
                phim_tang_so_luot_xem($id);

                require_once './ct_phim.php';
            } else {
                require_once './home.php';
            }

            break;
        case 'ds_phim':
            $list_phim = phim_select_all();
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
                            echo '<meta http-equiv="refresh" content="0; url = ./index.php?action=">';
                            require_once './home.php';
                            require_once './footer.php';
                            exit;
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
            require_once "./dat_ve.php";
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
