<?php
session_start();
require_once '../Model/phim.php';
require_once '../Model/thong-ke.php';
require_once '../Model/khach-hang.php';
require_once '../Model/loai.php';
require_once '../Model/pdo.php';
require_once '../Model/binh-luan.php';
require_once '../Model/xuatchieu.php';
require_once '../Model/khung-gio-chieu.php';
require_once '../Model/ve.php';
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
                        if (isset($_POST['listseacher']) && ($_POST['listseacher'])) {
                            $key = $_POST['kyw'];
                            $category_id = $_POST['category_id'];
                        } else {
                            $key = '';
                            $category_id = 0;
                        }
                        $list_danhmuc = loai_select_all();
                        $ds_phim = phim_search_keyword_view($key, $category_id);
                        require_once './Phim/view_phim.php';
                        require_once './footer-home.php';
                        break;
                    case 'add_phim':
                        require_once './home.php';
                        if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                            $ten_phim = $_POST['ten_phim'];
                            $nsx = $_POST['nsx'];
                            $nph = $_POST['nph'];
                            $mota = $_POST['mota'];
                            $thoi_luong_phim = $_POST['thoi_luong_phim'];
                            $cs_danh_gia = $_POST['cs_danh_gia'];
                            $dv1 = $_POST['dv1'];
                            $dv2 = $_POST['dv2'];
                            $dv3 = $_POST['dv3'];
                            $qg = $_POST['qg'];
                            $tt = $_POST['tt'];
                            $id_loaiphim = $_POST['id_loaiphim'];

                            $file = $_FILES['img_phim'];
                            $file2 = $_FILES['img_banner_phim'];

                            $img_phim = $file['name'];
                            $img_banner_phim = $file2['name'];
                            move_uploaded_file($file['tmp_name'], "./Img_ad/" . $img_phim);
                            move_uploaded_file($file2['tmp_name'], "./Img_ad/" . $img_banner_phim);

                            if ($ten_phim == "" || $nsx == "" || $nph == "" || $mota == "") {
                                $message = "Thêm không  thành công vì có ô để trống  ";
                            } else {

                                phim_insert($ten_phim, $img_phim, $img_banner_phim, $mota,  $nsx, $nph, $thoi_luong_phim, $cs_danh_gia, $qg, $dv1, $dv2, $dv3, $tt, $id_loaiphim);

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
                        // $ds_phim = phim_select_keyword($key, $category_id);
                        require_once './Phim/sua_phim.php';
                        require_once './footer-home.php';
                        break;
                    case 'up_phim':
                        require_once './home.php';
                        if (isset($_POST['capnhat']) && $_POST['capnhat'] > 0) {
                            $id = $_POST['id'];
                            $ten_phim = $_POST['ten_phim'];
                            $nsx = $_POST['nsx'];
                            $nph = $_POST['nph'];
                            $mota = $_POST['mota'];
                            $thoi_luong_phim = $_POST['thoi_luong_phim'];
                            $cs_danh_gia = $_POST['cs_danh_gia'];
                            $dv1 = $_POST['dv1'];
                            $dv2 = $_POST['dv2'];
                            $dv3 = $_POST['dv3'];
                            $qg = $_POST['qg'];
                            $tt = $_POST['tt'];
                            $id_loaiphim = $_POST['id_loaiphim'];
                            $img_phim = $_POST['img_phim'];
                            $file = $_FILES['img_phim'];
                            $img_banner_phim = $_POST['img_banner_phim'];
                            $file2 = $_FILES['img_banner_phim'];
                            if ($file['size'] > 0) {
                                $img_phim = $file['name'];
                                move_uploaded_file($file['tmp_name'], "./Img_ad/" . $img_phim);
                            }
                            if ($file2['size'] > 0) {
                                $img_banner_phim = $file2['name'];
                                move_uploaded_file($file2['tmp_name'], "./Img_ad/" . $img_banner_phim);
                            }
                            phim_update($ten_phim, $img_phim, $img_banner_phim, $mota,  $nsx, $nph, $thoi_luong_phim, $cs_danh_gia, $qg, $dv1, $dv2, $dv3, $tt, $id_loaiphim, $id);
                        }
                        $ds_phim = phim_select_all();
                        $list_danhmuc = loai_select_all();
                        require_once './Phim/view_phim.php';
                        require_once './footer-home.php';
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
                                    if ($checkuser['role'] != 0) {
                                        $_SESSION['user'] = $checkuser;
                                        header('location: index.php?action=&act=danhmuc');
                                        exit;
                                    } else {
                                        $thongbao['dangnhap'] = "Tài khoản hoặc mật khẩu không đúng";
                                    }
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
                        require_once './Dangnhap/signup.php';
                        break;
                    case 'dx':
                        require_once './Dangnhap/log_out.php';
                        break;
                    case 'taikhoan':
                        require_once './home.php';
                        $list_users  = users_select_all();
                        require_once './Taikhoan/view_tk.php';
                        require_once './footer-home.php';
                        break;
                    case 'add_user':
                        require_once './home.php';
                        if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                            $ten_user = $_POST['ten_user'];
                            $matkhau = $_POST['matkhau'];
                            $email = $_POST['email'];
                            $diachi = $_POST['diachi'];
                            $nam_sinh = $_POST['nam_sinh'];
                            $role = $_POST['role'];
                            $sdt = $_POST['sdt'];
                            if ($ten_user == "" || $matkhau == "" || $email == "" || $diachi == "" || $nam_sinh == "" || $role == "" || $sdt == "") {
                                $message = "Thêm không  thành công vì có ô để trống  ";
                            } else {
                                khach_hang_insert2($ten_user, $matkhau, $email, $diachi, $nam_sinh, $role, $sdt);
                                $message = "Thêm thành công ";
                            }
                        }
                        require_once './Taikhoan/add_user.php';
                        require_once './footer-home.php';
                        break;
                    case 'sua_user':
                        require_once './home.php';
                        if (isset($_GET['id']) && $_GET['id'] > 0) {
                            $user = khach_hang_select_by_id($_GET['id']);
                        }
                        require_once './Taikhoan/sua_user.php';
                        require_once './footer-home.php';
                        break;
                    case 'up_user':
                        require_once './home.php';
                        if (isset($_POST['capnhat']) && $_POST['capnhat'] > 0) {
                            $id = $_POST['id'];
                            $role = $_POST['role'];

                            khach_hang_update2($id, $role);
                        }
                        $list_users  = users_select_all();
                        require_once './Taikhoan/view_tk.php';
                        require_once './footer-home.php';
                        break;
                    case 'xoa_user':
                        require_once './home.php';
                        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                            user_delete($_GET['id']);
                        }
                        $list_users  = users_select_all();
                        require_once './Taikhoan/view_tk.php';
                        require_once './footer-home.php';
                        break;
                    case 'binhluan':
                        require_once './home.php';
                        $listbl = binhluan_select_all();
                        require_once './Binhluan/view_bl.php';
                        require_once './footer-home.php';
                        break;
                    case 'xoa_binhluan':
                        require_once './home.php';
                        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                            delete_bl($_GET['id']);
                        }
                        $listbl = binhluan_select_all();
                        require_once './Binhluan/view_bl.php';
                        require_once './footer-home.php';
                        break;
                    case 'xuatchieu':
                        require_once './home.php';
                        $list_xuatchieu = xuatchieu_select_all();
                        require_once './xuatchieu/view_xuatchieu.php';
                        require_once './footer-home.php';
                        break;
                    case 'add_xuatchieu':
                        require_once './home.php';
                        if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                            $ngay_xc = $_POST['ngay_xc'];

                            $ten_phim = $_POST['id'];
                            xuatchieu_insert($ngay_xc, $ten_phim);
                            $message = "Thêm thành công ";

                            $phim_id = phim_select_by_id($ten_phim);
                            $list_xuatchieu = xuatchieu_select_all();
                            $phims = phim_select_all();
                            require_once './xuatchieu/view_xuatchieu.php';
                        } else {
                            $phim_id = phim_select_by_id($_GET['id']);
                            $list_xuatchieu = xuatchieu_select_all();
                            // $phims = phim_select_all(); 
                            require_once './xuatchieu/add_xuatchieu.php';
                        }
                        require_once './footer-home.php';
                        break;
                    case 'sua_xuatchieu':
                        require_once './home.php';
                        if (isset($_GET['id']) && $_GET['id'] > 0) {
                            $list = xuatchieu_select_by_id($_GET['id']);
                        }

                        $phims = phim_select_all();
                        require_once './xuatchieu/sua_xuatchieu.php';
                        require_once './footer-home.php';
                        break;
                    case 'up_xuat_chieu':
                        require_once './home.php';
                        if (isset($_POST['themmoi']) && $_POST['themmoi'] > 0) {
                            $id = $_POST['id'];
                            $ngay_chieu = $_POST['ngay_chieu'];
                            $id_phim = $_POST['id_phim'];
                            $id_phongchieu = $_POST['id_phongchieu'];

                            xuat_chieu_update($ngay_chieu, $id_phim, $id);
                        }
                        $list_xuatchieu = xuatchieu_select_all();
                        require_once './xuatchieu/view_xuatchieu.php';
                        require_once './footer-home.php';
                        break;
                    case 'xoa_xuatchieu':
                        require_once './home.php';
                        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                            xuat_chieu_delete($_GET['id']);
                        }

                        $list_xuatchieu = xuatchieu_select_all();
                        require_once './xuatchieu/view_xuatchieu.php';
                        require_once './footer-home.php';
                        break;
                    case 'khunggio':
                        require_once './home.php';
                        $list_khunggio = khunggiochieu_select_all();
                        require_once './khunggio/view_khunggio.php';
                        require_once './footer-home.php';
                        break;
                    case 'add_khunggio':
                        require_once './home.php';
                        if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                            $khung_gio = $_POST['khung_gio'];
                            $xuat_chieu = $_POST['id_xc'];
                            // $phim_id = phim_select_by_id($_GET['id']);
                            $list_khunggio = khunggiochieu_select_all();
                            require_once './khunggio/view_khunggio.php';
                        } else {
                            $xc_id = khunggio_select_by_idxc($_GET['id_xc']);
                            require_once './khunggio/add_khunggio.php';
                            require_once './footer-home.php';
                        }
                        break;
                    case 'sua_khunggio':
                        require_once './home.php';
                        if (isset($_GET['id']) && $_GET['id'] > 0) {
                            $list = khunggiochieu_select_by_id($_GET['id']);
                        }
                        $xuat_chieu = xuatchieu_select_all();
                        require_once './khunggio/sua_khunggio.php';
                        require_once './footer-home.php';
                        break;
                    case 'up_khunggio':
                        require_once './home.php';
                        if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                            $id = $_POST['id'];
                            $khung_gio = $_POST['khung_gio'];
                            $xuat_chieu = $_POST['xuat_chieu'];
                            khunggio_update($id, $khung_gio, $xuat_chieu);
                        }
                        $list_khunggio = khunggiochieu_select_all();
                        $xuat_chieu = xuatchieu_select_all();
                        require_once './khunggio/view_khunggio.php';
                        require_once './footer-home.php';
                        break;
                    case 'xoa_khunggio':
                        require_once './home.php';
                        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                            khunggio_delete($_GET['id']);
                        }
                        $list_khunggio = khunggiochieu_select_all();
                        require_once './khunggio/view_khunggio.php';;
                        require_once './footer-home.php';
                        break;
                    case 've':
                        require_once './home.php';
                        $listve = ve_select_all();
                        require_once './Datve/view_ve.php';
                        require_once './footer-home.php';
                        break;
                    case 'thongke':
                        require_once './home.php';
                        $listtk_phim = loadall_thongke();
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
