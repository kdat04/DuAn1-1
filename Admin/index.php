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
require_once '../Model/bill.php';
require_once '../Model/PHPMailer/src/PHPMailer.php';
require_once '../Model/PHPMailer/src/SMTP.php';
require_once '../Model/PHPMailer/src/Exception.php';

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
                        if (isset($_POST['listseacher']) && ($_POST['listseacher'])) {
                            $key = $_POST['kyw'];
                        } else {
                            $key = '';
                        }
                        $list_danhmuc = loai_search_keyword($key);
                        require_once './Danhmuc/view_danhmuc.php';
                        require_once './footer-home.php';
                        break;

                    case 'add_dm':
                        require_once './home.php';
                        if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                            $ten_loaiphim = $_POST['ten_loaiphim'];
                            if (check_theloai($ten_loaiphim) != '') {
                                $check_tl = check_theloai($ten_loaiphim);
                            } else {
                                $check_tl['ten_loaiphim'] = '';
                            }
                            if ($ten_loaiphim == '') {
                                $message = "Không được để trắng";
                            } else if ($ten_loaiphim ==  $check_tl['ten_loaiphim']) {
                                $message = "Thể loai đã tồn tại !";
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
                                if ($ten_loaiphim == '') {
                                    $dm = loai_select_by_id($_GET['id']);
                                    $message = "Không được để trắng";
                                    require_once './Danhmuc/sua_danhmuc.php';
                                    break;
                                } else {
                                    loai_update($ma_loai, $ten_loaiphim);
                                }
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

                            if (check_phim($ten_phim) != '') {
                                $check_phim = check_phim($ten_phim);
                            } else {
                                $check_phim['ten_phim'] = '';
                            }
                            if ($ten_phim == '' || $nsx == '' || $nph == '' || $mota == '' || $thoi_luong_phim ==  '' || $cs_danh_gia == '' || $dv1 == '' || $dv2 == '' || $dv3 == '' || $qg == '' || $tt == '') {
                                $message = "Thêm không  thành công vì có ô để trống   ";
                            } else if ($ten_phim == $check_phim['ten_phim']) {
                                $message = " thêm tên phim  không hợp lệ  !";
                            } else if (!is_numeric($cs_danh_gia)) {
                                $message = " Chỉ số đánh giá phải là số !";
                            } else if (!is_numeric($thoi_luong_phim)) {
                                $message = " Chỉ số thời lượng phim  phải là số !";
                            } else if (!validateThoiLuongPhim($thoi_luong_phim)) {
                                $message = " Thời lượng phim không hợp lệ: Vui lòng nhập thời lượng phim từ 90 đến 330 phút.";
                            } else if (!validateTenPhim($ten_phim)) {
                                $message = "Tên phim không hợp lệ. Vui lòng nhập tên phim có độ dài từ 3 đến 50 ký tự và chỉ chứa các ký tự chữ cái, số, dấu gạch ngang, dấu gạch dưới và khoảng trắng.";
                            } else if (!validatemota($mota)) {
                                $message = "Mô tả không hợp lệ. Vui lòng nhập tên phim có độ dài từ 10 đến 250 ký tự và chỉ chứa các ký tự chữ cái, số, dấu gạch ngang, dấu gạch dưới và khoảng trắng.";
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
                            if ($ten_phim == '' || $nsx == '' || $nph == '' || $mota == '' || $thoi_luong_phim ==  '' || $cs_danh_gia == '' || $dv1 == '' || $dv2 == '' || $dv3 == '' || $qg == '' || $tt == '') {
                                $phim = phim_select_by_id($_GET['id']);
                                $message = "sửa không  thành công vì có ô để trống  ";
                                require_once './Phim/sua_phim.php';
                                break;
                            } else if (!is_numeric($cs_danh_gia)) {
                                $phim = phim_select_by_id($_GET['id']);
                                $message = " Chỉ số đánh giá phải là số !";
                                require_once './Phim/sua_phim.php';
                                break;
                            } else if (!is_numeric($thoi_luong_phim)) {
                                $phim = phim_select_by_id($_GET['id']);
                                $message = " Chỉ số thời lượng phim  phải là số !";
                                require_once './Phim/sua_phim.php';
                                break;
                            } else if (!validateThoiLuongPhim($thoi_luong_phim)) {
                                $phim = phim_select_by_id($_GET['id']);
                                $message = " Thời lượng phim không hợp lệ: Vui lòng nhập thời lượng phim từ 90 đến 330 phút.";
                                require_once './Phim/sua_phim.php';
                                break;
                            } else if (!validateTenPhim($ten_phim)) {
                                $phim = phim_select_by_id($_GET['id']);
                                $message = "Tên phim không hợp lệ. Vui lòng nhập tên phim có độ dài từ 3 đến 50 ký tự và chỉ chứa các ký tự chữ cái, số, dấu gạch ngang, dấu gạch dưới và khoảng trắng.";
                                require_once './Phim/sua_phim.php';
                                break;
                            } else if (!validatemota($mota)) {
                                $phim = phim_select_by_id($_GET['id']);
                                $message = "Mô tả không hợp lệ. Vui lòng nhập tên phim có độ dài từ 10 đến 250 ký tự và chỉ chứa các ký tự chữ cái, số, dấu gạch ngang, dấu gạch dưới và khoảng trắng.";
                                require_once './Phim/sua_phim.php';
                                break;
                            } else if (!validateTenPhim($ten_phim)) {
                                $phim = phim_select_by_id($_GET['id']);
                                $message = "Tên phim không hợp lệ. Vui lòng nhập tên phim có độ dài từ 3 đến 50 ký tự và chỉ chứa các ký tự chữ cái, số, dấu gạch ngang, dấu gạch dưới và khoảng trắng.";
                                require_once './Phim/sua_phim.php';
                                break;
                            } else {
                                phim_update($ten_phim, $img_phim, $img_banner_phim, $mota,  $nsx, $nph, $thoi_luong_phim, $cs_danh_gia, $qg, $dv1, $dv2, $dv3, $tt, $id_loaiphim, $id);
                            }
                        }
                        $ds_phim = phim_select_all();
                        $list_danhmuc = loai_select_all();
                        require_once './Phim/view_phim.php';
                        require_once './footer-home.php';
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
                                    if ($checkuser['role'] != 0) {
                                        $_SESSION['user'] = $checkuser;
                                        header('location: index.php?action=&act=');
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
                    case 'doi_mk':
                        require_once './home.php';
                        if (isset($_POST['doimk']) && ($_POST['doimk'])) {
                            $idkh = $_SESSION['user']['id'];
                            $pass_now = md5($_POST['pass_now']);
                            $pass_new = md5($_POST['pass_new']);
                            $pass_current = md5($_POST['pass_current']);
                            if ($_POST['pass_now'] == '') {
                                $thongbao = "Vui lòng không bỏ trống.";
                            } else {
                                $matkhau = $_SESSION['user']['matkhau'];
                                if ($pass_now == $matkhau) {
                                    if ($pass_new == $pass_current) {
                                        upd_pass($idkh, $pass_new);
                                        require_once './trangchu.php';
                                        $thongbao['dangnhap'] = "Đổi mật khẩu thành công.";
                                        break;
                                    } else {
                                        $thongbao = "Mật khẩu không khớp.";
                                    }
                                } else {
                                    $thongbao = "Sai mật khẩu hiện tại.";
                                }
                            }
                        }
                        require_once './Dangnhap/doi_mk.php';

                        require_once './footer-home.php';

                        break;
                    case 'quen_mk_admin':
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
                                Kinh gui, Admin cua 3D Cinema <br> 
                                Chung toi nhan duoc yeu cau dat lai mat khau tu dia chi email cua ban. <br>
                                De dat lai mat khau cua ban, hay truy cap vao lien ket dau: <br>
                                <a href="http://localhost/WD18318_PHP1/DA1/Admin/index.php?action=&act=doimatkhau&id=' . $email . '">"http://localhost/WD18318_PHP1/DA1/Admin/index.php?action=&act=doimatkhau</a> <br>
                                Neu ban khong yeu cau dat lau mat khau, vui long bo qua email nay. <br>
                                Tran trong!';

                                $mail->send();

                                $thongbao['dangnhap'] = 'Gửi email thành công.';
                            } else if ($check_email == false && $email != "") {
                                $thongbao['dangnhap'] = 'Email này không tồn tại, vui lòng nhập lại';
                            } else if ($check_email == "") {
                                $thongbao['dangnhap'] = 'Vui lòng không bỏ trống !';
                            }
                        }
                        require_once './Dangnhap/quen_mk.php';
                        break;
                    case 'doimatkhau':
                        $email = '';
                        if (isset($_GET['id'])) {
                            $email = $_GET['id'];
                        }
                        if (isset($_POST['doimatkhau']) && ($_POST['doimatkhau'])) {
                            $pass_new = md5($_POST['pass']);
                            $pass_now = $_POST['pass_now'];
                            if ($_POST['pass'] == '' || $_POST['pass_now'] == '') {
                                $thongbao['pass'] = " Vui lòng không bỏ trống !";
                            } else {
                                if ($_POST['pass'] == $pass_now) {
                                    upd_pass_qmk($email, $pass_new);
                                    session_unset();
                                    $thongbao['dangnhap'] = 'Đổi mật khẩu thành công, vui lòng đăng nhập.';
                                    require_once './Dangnhap/login.php';
                                    break;
                                } else {
                                    $thongbao['pass'] = " Nhập lại mật khẩu không khớp !";
                                }
                            }
                        }
                        require_once './Dangnhap/doimatkhau.php';
                        break;
                    case 'taikhoan':
                        require_once './home.php';
                        if (isset($_POST['listseacher']) && ($_POST['listseacher'])) {
                            $key = $_POST['kyw'];
                        } else {
                            $key = '';
                        }
                        $list_users  = tk_search_keyword($key);
                        require_once './Taikhoan/view_tk.php';
                        require_once './footer-home.php';
                        break;
                    case 'add_user':
                        require_once './home.php';
                        if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                            $ten_user = $_POST['ten_user'];
                            $matkhau = md5($_POST['matkhau']);
                            $email = $_POST['email'];
                            $diachi = $_POST['diachi'];
                            $nam_sinh = $_POST['nam_sinh'];
                            $role = $_POST['role'];
                            $sdt = $_POST['sdt'];

                            if (check_email($email) != '') {
                                $check_user = check_email($email);
                            } else {
                                $check_user['email'] = '';
                            }
                            if ($ten_user == "" || $matkhau == "" || $email == "" || $diachi == "" || $nam_sinh == "" || $role == "" || $sdt == "") {
                                $message = "Thêm không  thành công vì có ô để trống  ";
                            } else if ($email ==  $check_user['email']) {
                                $message = "Emai đã tồn tại !";
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
                        if (isset($_POST['listseacher']) && ($_POST['listseacher'])) {
                            $key = $_POST['kyw'];
                        } else {
                            $key = '';
                        }
                        $listbl = binhluan_select_all($key);
                        require_once './Binhluan/view_bl.php';
                        require_once './footer-home.php';
                        break;
                    case 'xoa_binhluan':
                        require_once './home.php';
                        $key = '';
                        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                            delete_bl($_GET['id']);
                        }
                        $listbl = binhluan_select_all($key);
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

                            if ($ngay_xc == '') {
                                $phim_id = phim_select_by_id($_GET['id']);
                                $message = "Không được để trắng";
                                require_once './xuatchieu/add_xuatchieu.php';
                                break;
                            } else {
                                $ten_phim = $_POST['id'];
                                xuatchieu_insert($ngay_xc, $ten_phim);
                                $message = "Thêm thành công ";
                            }


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

                            if ($ngay_chieu == '') {
                                $message = "Không được để trắng";
                                $list = xuatchieu_select_by_id($_GET['id']);
                                require_once './xuatchieu/sua_xuatchieu.php';
                                break;
                            } else {
                                xuat_chieu_update($ngay_chieu, $id);
                            }
                        }
                        $list_xuatchieu = xuatchieu_select_all();
                        require_once './xuatchieu/view_xuatchieu.php';
                        require_once './footer-home.php';
                        break;
                    case 'xoa_xuatchieu':
                        require_once './home.php';
                        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                            xoa_tonggio_delete($_GET['id']);
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
                            $phong_chieu = $_POST['phong_chieu'];
                            if ($khung_gio == '' && $phong_chieu == '') {
                                $xc_id = khunggio_select_by_idxc($_GET['id_xc']);
                                $message = "Không được để trắng";
                                require_once './khunggio/add_khunggio.php';
                                break;
                            } else {
                                khunggio_insert($khung_gio, $xuat_chieu, $phong_chieu);
                            }
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
                            $phong_chieu = $_POST['phong_chieu'];
                            if ($khung_gio == '' || $phong_chieu == '') {
                                $list = khunggiochieu_select_by_id($_GET['id']);
                                $message = "Không được để trắng";
                                require_once './khunggio/sua_khunggio.php';
                                break;
                            } else {
                                khunggio_update($id, $khung_gio, $phong_chieu);
                            }
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
                        if (isset($_POST['listseacher']) && ($_POST['listseacher'])) {
                            $key = $_POST['kyw'];
                        } else {
                            $key = '';
                        }
                        $listve = ve_select_all($key);
                        require_once './Datve/view_ve.php';
                        require_once './footer-home.php';
                        break;
                    case 'bill':
                        require_once './home.php';
                        if (isset($_POST['listseacher']) && ($_POST['listseacher'])) {
                            $key = $_POST['kyw'];
                        } else {
                            $key = '';
                        }
                        $list_bill = bill_xem($key);

                        require_once './bill/viewbill.php';
                        require_once './footer-home.php';
                        break;
                    case 'xoa_bill':
                        require_once './home.php';
                        if (isset($_GET['id']) && $_GET['id'] > 0) {
                            bill_delete($_GET['id']);
                        }
                        $list_bill =  bill_xem($key);
                        require_once './bill/viewbill.php';
                        require_once './footer-home.php';
                        break;
                    case 'thongke':
                        require_once './home.php';
                        $listtk_phim = loadall_thongke();
                        require_once './Thongke/view_thong_ke.php';
                        require_once './footer-home.php';
                        break;
                    case 'thongke_doanh_thu':
                        require_once './home.php';
                        if (isset($_POST['listseacher']) && ($_POST['listseacher'])) {
                            $kyw = $_POST['thang'];
                        } else {
                            $kyw = '';
                        }
                        $list_tong_dt = load_thongke_doanhthu_thang($kyw);
                        $list_bieudo = load_bieudo_doanhthu_thang();
                        $listtk_doanh_thu = load_thongke_doanhthu();
                        require_once './Thongke/thong_ke_doanh_thu.php';
                        require_once './footer-home.php';
                        break;
                    case 'thongke_bl':
                        require_once './home.php';
                        $listtk_phim = binh_luan_thongke();
                        require_once './Thongke/tk_bl.php';
                        require_once './footer-home.php';
                        break;
                    case 'thongke_user':
                        require_once './home.php';
                        $listtk_phim = user_thongke();
                        $list_tong_user = load_thongke_count_user();
                        $list_tong_ad = load_thongke_count_admin();
                        $list_tong_nv = load_thongke_count_nv();

                        require_once './Thongke/thongke_user.php';
                        require_once './footer-home.php';
                        break;
                    default:
                        require_once './home.php';
                        require_once './trangchu.php';
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
