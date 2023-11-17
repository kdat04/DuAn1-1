<?php
session_start();
require_once '../Model/phim.php';
require_once '../Model/khach-hang.php';
require_once '../Model/loai.php';
require_once '../Model/pdo.php';
require_once "./header.php";

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'dn':
            require_once './Dangnhap/login.php';
            break;
        case 'dk':
            require_once './Dangnhap/signup.php';
            break;
        default:

            if (isset($_GET['act'])) {
                switch ($_GET['act']) {
                    case 'danhmuc':
                        require_once './home.php';
                        $list_danhmuc = loai_select_all();
                        require_once './Danhmuc/view_danhmuc.php';
                        require_once './footer-home.php';
                        break;
                    case 'add_dm':
                        require_once './home.php';
                        if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                            $ten_loaiphim = $_POST['ten_loaiphim'];
                            if ($ten_loaiphim == '') {
                                $message = "Không được để trắng";
                            } else {
                                loai_insert($ten_loaiphim);
                                $message = "Thêm thành công";
                            }
                        }
                        require_once './Danhmuc/add_danhmuc.php';
                        require_once './footer-home.php';
                        break;
                    case 'xoa_dm':
                        require_once './home.php';
                        if (isset($_GET['id']) && $_GET['id'] > 0) {
                            loai_delete($_GET['id']);
                        }
                        $list_danhmuc = loai_select_all();
                        require_once './Danhmuc/view_danhmuc.php';
                        require_once './footer-home.php';
                        break;
                    case 'sua_dm':
                        require_once './home.php';
                        if (isset($_GET['id']) && $_GET['id'] > 0) {
                            $dm = loai_select_by_id($_GET['id']);
                        }
                        require_once './Danhmuc/sua_danhmuc.php';
                        require_once './footer-home.php';
                        break;
                    case 'up_dm':
                        require_once './home.php';
                        if (isset($_POST['capnhat']) && ($_POST['capnhat'])) { {
                                $ma_loai = $_POST['id'];
                                $ten_loaiphim = $_POST['ten_loaiphim'];

                                loai_update($ma_loai, $ten_loaiphim);
                            }
                        }
                        $list_danhmuc = loai_select_all();
                        require_once './Danhmuc/view_danhmuc.php';
                        require_once './footer-home.php';
                        break;
                    case 'phim':
                        require_once './home.php';
                        $list_danhmuc = loai_select_all();
                        $ds_phim = phim_select_all();
                        require_once './Phim/view_phim.php';
                        require_once './footer-home.php';
                        break;
                    case 'add_phim':
                        require_once './home.php';
                        if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                            $ten_phim = $_POST['ten_phim'];
                            $gia = $_POST['gia'];
                            $nsx = $_POST['nsx'];
                            $nph = $_POST['nph'];
                            $mota = $_POST['mota'];
                            $id_loaiphim = $_POST['id_loaiphim'];

                            $file = $_FILES['img_phim'];

                            $img_phim = $file['name'];
                            move_uploaded_file($file['tmp_name'], "./Img_ad/" . $img_phim);

                            if ($ten_phim == "" || $gia == "" || $nsx == "" || $nph == "" || $mota == "") {
                                $message = "Thêm không  thành công vì có ô để trống  ";
                            } else {

                                phim_insert($ten_phim, $gia, $img_phim, $mota,  $nsx, $nph, $id_loaiphim);

                                $message = "Thêm thành công ";
                            }
                        }
                        $list_danhmuc = loai_select_all();
                        require_once './Phim/add_phim.php';
                        require_once './footer-home.php';
                        break;
                    case 'xoa_phim':
                        require_once './home.php';
                        if (isset($_GET['id']) && $_GET['id'] > 0) {
                            phim_delete($_GET['id']);
                        }
                        $ds_phim = phim_select_all();
                        require_once './Phim/view_phim.php';
                        require_once './footer-home.php';
                        break;
                    case 'sua_phim':
                        require_once './home.php';
                        if (isset($_GET['id']) && $_GET['id'] > 0) {
                            $phim = phim_select_by_id($_GET['id']);
                        }
                        $list_danhmuc = loai_select_all();
                        require_once './Phim/sua_phim.php';
                        require_once './footer-home.php';
                        break;
                    case 'up_phim':
                        require_once './home.php';
                        if (isset($_POST['capnhat']) && $_POST['capnhat'] > 0) {
                            $id = $_POST['id'];
                            $ten_phim = $_POST['ten_phim'];
                            $gia = $_POST['gia'];
                            $nsx = $_POST['nsx'];
                            $nph = $_POST['nph'];
                            $mota = $_POST['mota'];
                            $id_loaiphim = $_POST['id_loaiphim'];
                            $img_phim = $_POST['img_phim'];
                            $file = $_FILES['img_phim'];
                            if ($file['size'] > 0) {
                                $img_phim = $file['name'];
                                move_uploaded_file($file['tmp_name'], "./Img_ad/" . $img_phim);
                            }

                            phim_update($id, $ten_phim, $gia, $img_phim, $mota, $nsx, $nph, $id_loaiphim);
                        }
                        $ds_phim = phim_select_all();
                        require_once './Phim/view_phim.php';
                        require_once './footer-home.php';
                        break;
                    case 'dn':
                        if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                            $ten_dangnhap = $_POST['tendn'];
                            $matkhau = md5($_POST['mk']);
                            if ($ten_dangnhap == '' && $_POST['mk'] == '') {
                                $thongbao['dangnhap'] = " Vui lòng không bỏ trống !";
                            } else {
                                $checkuser = check_users($ten_dangnhap, $matkhau);
                                if ($checkuser) {
                                    $_SESSION['user'] = $checkuser;
                                    header('location: index.php?action=&act=danhmuc');
                                    exit;
                                } else {
                                    $thongbao['dangnhap'] = "Tài khoản hoặc mật khẩu không đúng";
                                }
                            }
                        }
                        require_once './Dangnhap/login.php';
                        break;
                    case 'dk':
                        if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                            $ten_dangnhap = $_POST['tendn'];
                            $email = $_POST['email'];
                            $matkhau = md5($_POST['mk']);
                            $nhaplaimatkhau = $_POST['lmk'];
                            if ($ten_dangnhap == '' && $_POST['mk'] == '' && $email == '' && $nhaplaimatkhau == '') {
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
                        require_once './Dangnhap/signup.php';
                        break;
                    case 'dx':
                        require_once './Dangnhap/log_out.php';
                        break;
                    case 'taikhoan':
                        require_once './home.php';
                        require_once './Taikhoan/view_tk.php';
                        require_once './footer-home.php';
                        break;
                    case 'binhluan':
                        require_once './home.php';
                        require_once './Binhluan/view_bl.php';
                        require_once './footer-home.php';
                        break;
                    case 'datve':
                        require_once './home.php';
                        require_once './Datve/view_datve.php';
                        require_once './footer-home.php';
                        break;
                    case 'thongke':
                        require_once './home.php';
                        require_once './Thongke/view_thong_ke.php';
                        require_once './footer-home.php';
                        break;
                }
            }
            break;
    }
} else {
    if (!isset($_SESSION['username'])) {
        require_once './Dangnhap/login.php';
        exit;
    }
}

require_once './footer.php';
