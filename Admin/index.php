<?php
session_start();

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
                        require_once './Danhmuc/view_danhmuc.php';
                        require_once './footer-home.php';
                        break;
                    case 'add_dm':
                        require_once './home.php';
                        if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                            $ten_loaiphim = $_POST['ten_loaiphim'];
                            if ($ten_loaiphim == '') {
                              $message = "Không được để trắng";
                            }else{
                            loai_insert($ten_loaiphim);
                            $message = "Thêm thành công";
                            }
                          }
                        require_once './Danhmuc/add_danhmuc.php';
                        require_once './footer-home.php';
                        break;
                    case 'phim':
                        require_once './home.php';
                        
                        require_once './Phim/view_phim.php';
                        require_once './footer-home.php';
                        break;
                    case 'add_phim':
                        require_once './home.php';
                        require_once './Phim/add_phim.php';
                        require_once './footer-home.php';
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
