<?php
session_start();
// unset($_SESSION['phim']);
require_once '../Model/phim.php';
require_once '../Model/khach-hang.php';
require_once '../Model/loai.php';
require_once '../Model/khung-gio-chieu.php';
require_once '../Model/xuatchieu.php';
require_once '../Model/bill.php';
require_once '../Model/ve.php';
require_once '../Model/PHPMailer/src/PHPMailer.php';
require_once '../Model/PHPMailer/src/SMTP.php';
require_once '../Model/PHPMailer/src/Exception.php';

date_default_timezone_set("Asia/Ho_Chi_Minh");
require_once '../Model/pdo.php';

$list_phim_search = phim_select_search();
$list_phim_search_sapchieu = phim_select_search_sapchieu();
$list_danhmuc = loai_select_all();
require_once "./header.php";

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'ct_phim':
            $khunggio = array();
            if ((isset($_GET['id'])) && ($_GET['id'])) {
                $id = $_GET['id'];
                $now = date('Y-m-d H:i:s');
                if ((isset($_GET['id_xc'])) && ($_GET['id_xc'])) {
                    $id_xc = $_GET['id_xc'];
                    $khunggio = khunggiochieu_select_by_idxc($id_xc);
                }
                $list_phim_dgchieu = phim_select_dgchieu($id);
                $list = phim_select_by_id($id);
                $xuat_chieu = xuatchieu_select_by_id_phim($id);
                phim_tang_so_luot_xem($id);
            }
            unset($_SESSION['phim']);
            require_once './ct_phim.php';
            break;
        case 'ds_phim':
            if (isset($_GET['tt'])) {
                switch ($_GET['tt']) {
                    case 'dang_chieu':
                        $list_phim = phim_select_all_dangchieu1();
                        require_once './ds_phim.php';
                        break;
                    case 'sap_chieu':
                        $list_phim = phim_select_all_sapchieu1();
                        require_once './ds_phim.php';
                        break;
                }
            } else {
                $list_phim = phim_select_all();
                require_once './ds_phim.php';
            }

            break;
        case 'ds_search':
            if (isset($_POST['kyw']) && ($_POST['kyw'])) {
                $key = $_POST['kyw'];
            } else {
                $key = "";
            }
            if (isset($_GET['id_loaiphim']) && ($_GET['id_loaiphim'] > 0)) {
                $id_loaiphim = $_GET['id_loaiphim'];
            } else {
                $id_loaiphim = 0;
            }
            $list_phim = phim_search_keyword_view($key, $id_loaiphim);
            require_once './ds_phim.php';
            break;
        case 'dn':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $email = $_POST['email'];
                $matkhau = md5($_POST['mk']);
                if ($email == '' || $_POST['mk'] == '') {
                    $thongbao['dangnhap'] = " Vui lòng không bỏ trống !";
                } else {
                    $checkuser = check_users($email, $matkhau);
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
                if (check_email($email) != '') {
                    $email_check = check_email($email);
                } else {
                    $email_check['email'] = '';
                }
                if ($ten_dangnhap == '' || $_POST['mk'] == '' || $email == '' || $nhaplaimatkhau == '') {
                    $thongbao['dangky'] = " Vui lòng không bỏ trống !";
                } else if ($email == $email_check['email']) {
                    $thongbao['dangky'] = " Email đã tồn tại !";
                } else {
                    if ($_POST['mk'] == $nhaplaimatkhau) {
                        khach_hang_insert_nd($ten_dangnhap, $matkhau, $email);
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
        case 'doimk':
            $email = '';
            if (isset($_GET['id'])) {
                $email = $_GET['id'];
            }
            // var_dump($_SESSION['luu_email']);
            if (isset($_POST['doimk']) && ($_POST['doimk'])) {
                $pass_new = md5($_POST['pass']);
                $pass_now = $_POST['pass_now'];
                if ($_POST['pass'] == '' || $_POST['pass_now'] == '') {
                    $thongbao['pass'] = " Vui lòng không bỏ trống !";
                } else {
                    if ($_POST['pass'] == $pass_now) {
                        upd_pass_qmk($email, $pass_new);
                        session_unset();
                        $thongbao['dangnhap'] = 'Đổi mật khẩu thành công, vui lòng đăng nhập.';
                        require_once '../View/dangnhap/dangnhap.php';
                        require_once '../View/footer.php';
                        break;
                    } else {
                        $thongbao['pass'] = " Nhập lại mật khẩu không khớp !";
                    }
                }
            }
            require_once "../View/dangnhap/doimk.php";
            break;
        case 'quenmk':
            if (isset($_POST['quenmk']) && ($_POST['quenmk'])) {
                $email = $_POST['email'];
                $check_email = check_email($email);
                // if ($check_email) {
                //     $md5_hash = $check_email['pass'];
                //     $decrypted_password = decrypt_md5_dictionary($md5_hash);
                // }
                if ($check_email != false) {
                    $mail = new   PHPMailer\PHPMailer\PHPMailer(true);

                    //Cấu hình
                    $mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_OFF;
                    $mail->isSMTP();
                    $mail->Host       = 'sandbox.smtp.mailtrap.io';
                    $mail->SMTPAuth   = true;
                    $mail->Username   = 'a2866bb9db072c';
                    $mail->Password   = 'b74895e7ffadb8';
                    $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
                    $mail->Port       = 587;

                    //Email người gửi
                    $mail->setFrom('chiduc1611@gmail.com', '3d Cinema');
                    $mail->addAddress($email);

                    //Nội dung
                    $mail->isHTML(true);
                    $mail->Subject = 'Yeu cau dat lai mat khau.';
                    $mail->Body    = '           
                    Kinh gui, khach hang cua 3D Cinema <br> 
                    Chung toi nhan duoc yeu cau dat lai mat khau tu dia chi email cua ban. <br>
                    De dat lai mat khau cua ban, hay truy cap vao lien ket dau: <br>
                    <a href="http://localhost/WD18318_PHP1/DA1/View/index.php?action=doimk&id=' . $email . '">http://localhost/WD18318_PHP1/DA1/View/index.php?action=doimk</a> <br>
                    Neu ban khong yeu cau dat lau mat khau, vui long bo qua email nay. <br>
                    Tran trong!';

                    $mail->send();

                    $thongbao['pass'] = 'Gửi email thành công.';
                } else if ($check_email == false && $email != "") {
                    $thongbao['pass'] = 'Email này không tồn tại, vui lòng nhập lại';
                } else if ($check_email == "") {
                    $thongbao['pass'] = 'Vui lòng không bỏ trống !';
                }
            }
            require_once '../View/dangnhap/qmk.php';
            break;
        case 'tt_user':
            $khachhang = khach_hang_select_by_id($_SESSION['nguoi_dung']['id']);
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
                $thongbao['dangnhap'] = 'Vui lòng đăng nhập để tiếp tục đặt vé!';
                require_once './dangnhap/dangnhap.php';
                require_once './footer.php';
            }
            break;
        case 'uu_dai':
            require_once "./uu_dai.php";
            break;
        case 'xac_nhan':
            if (isset($_GET['message']) && ($_GET['message'] == 'Successful.')) {
                bill_update($_SESSION['id_bill']);
                ve_update($_SESSION['id_bill']);
                dv_update($_SESSION['id_ve']);

                $list_xc = list_xc($_SESSION['id_bill']);

                $mail = new   PHPMailer\PHPMailer\PHPMailer(true);

                    //Cấu hình
                    $mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_OFF;
                    $mail->isSMTP();
                    $mail->Host       = 'sandbox.smtp.mailtrap.io';
                    $mail->SMTPAuth   = true;
                    $mail->Username   = 'a2866bb9db072c';
                    $mail->Password   = 'b74895e7ffadb8';
                    $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
                    $mail->Port       = 587;

                    //Email người gửi
                    $mail->setFrom('chiduc1611@gmail.com', '3d Cinema');
                    $mail->addAddress($_SESSION['nguoi_dung']['email']);

                    //Nội dung
                    $mail->isHTML(true);
                    $mail->Subject = 'Dat ve thanh cong.';
                    $mail->Body    = '           
                    Kinh gui, khach hang cua 3D Cinema <br> 
                    Chung toi gui mail nay de thong bao ban da dat ve thanh cong. <br>
                    Ma dat ve: '.$list_xc['id'].' <br>
                    Ten phim: '.$list_xc['ten_phim'].'<br>
                    Xuat chieu: '. $list_xc['ngay_chieu'] .','. $list_xc['gio_chieu'].' <br>
                    Ghe ngoi: '.$list_xc['ghe_ngoi'].' <br>
                    Thanh tien: '.number_format($list_xc['thanh_tien'], 0, ",", ".").'VND <br>
                    Ngay dat: '.$list_xc['ngay_tt'].'<br>
                    Tran trong!';

                    $mail->send();
                require_once "./xacnhan-tt.php";
                break;
            } else {
                $list_phim_tt = phim_select_all_tt();
                require_once './home.php';
                break;
            }

        default:
            if (isset($_GET['tt'])) {
                switch ($_GET['tt']) {
                    case 'dang_chieu':
                        $list_phim_tt = phim_select_all_dangchieu();
                        require_once './home.php';
                        break;
                    case 'sap_chieu':
                        $list_phim_tt = phim_select_all_sapchieu();
                        require_once './home.php';
                        break;
                }
            } else {
                $list_phim_tt = phim_select_all_tt();
                require_once './home.php';
            }
            // var_dump($_SESSION['phim']);
            unset($_SESSION['id_bill']);
            unset($_SESSION['id_ve']);
            unset($_SESSION['phim']);
            unset($_SESSION['ve']);

            break;
    }
} else {
    if (isset($_GET['tt'])) {
        switch ($_GET['tt']) {
            case 'dang_chieu':
                $list_phim_tt = phim_select_all_dangchieu();
                require_once './home.php';
                break;
            case 'sap_chieu':
                $list_phim_tt = phim_select_all_sapchieu();
                require_once './home.php';
                break;
        }
    } else {
        $list_phim_tt = phim_select_all_tt();
        require_once './home.php';
    }
    unset($_SESSION['id_bill']);
    unset($_SESSION['id_ve']);
    unset($_SESSION['phim']);
    unset($_SESSION['ve']);
}

require_once "./footer.php";
