<br>
<br>
<section class="tong_tt_user">
    <section class="tong_tt_user_left">
        <div class="user_new">
            <div class="avartar">
                <i class="fa-regular fa-user"></i>
            </div>
            <div class="name_user">
                <div class="name_user_like"><i class="fa-solid fa-medal" style="color: #e16c2d;"></i>
                    <h5><?= $khachhang['ten_user'] ?></h5>
                </div>
            </div>
        </div>
        <div class="box_dm_user">
            <a href="index.php?action=tt_user&link=Lich_su"> Lịch Sử Đặt Vé</a>
            <a href="index.php?action=tt_user&link=my_user">Thông Tin Cá Nhân</a>
            <a href="index.php?action=tt_user&link=dmk">Đổi Mật Khẩu</a>
            <a href="index.php?action=tt_user&link=chinh_sach">Chính Sách</a>
            <a href="index.php?action=dx">Đăng Xuất</a>
            <a href="#">HOTLINE hỗ trợ: <span>19002224 (9:00 - 22:00)</span></a>
            <a href="#">Email: <span>hotro@3dstudio.vn</span></a>

        </div><br>
    </section>
    <section class="tong_tt_user_right">
        <?php
        // if (isset($_SESSION['users']) && ($_SESSION['users'] != "")) {
        //     extract($_SESSION['users']);
        // }
        if ((isset($_GET['link'])) && ($_GET['link'] != "")) {
            $link = $_GET['link'];
            switch ($link) {
                case 'Lich_su':
                    $list_lich_su = lichsu_select_all($_SESSION['nguoi_dung']['id']);
                    require_once "user_ca_nhan/lich_su_dv.php";
                    break;
                case 'cap_nhat':
                    if (isset($_POST['capnhat']) && $_POST['capnhat']) {
                        $id = $_POST['id'];
                        $email = $_POST['email'];
                        $diachi = $_POST['diachi'];
                        $ngaysinh = $_POST['namsinh'];
                        $sdt = (int)($_POST['sdt']);

                        if ( $diachi == "" || $sdt == "" || $email == "" || $ngaysinh == "") {
                            $thongbao = " Phải  điền đủ thông tin để cập nhật ";
                        } else {

                            khach_hang_update_thongtin($id, $diachi, $sdt, $email, $ngaysinh);
                            $_SESSION['nguoi_dung'] = khach_hang_select_by_id($id);
                            // header('location: ttcn.php?link=update-tk');
                            $thongbao = "Thành công cập nhật";
                        }
                    }
                    $khachhang = khach_hang_select_by_id($_SESSION['nguoi_dung']['id']);
                    require_once "./user_ca_nhan/capnhattt.php";
                    break;
                case 'dmk':
                    if (isset($_POST['doimk']) && ($_POST['doimk'])) {
                        $idkh = $_SESSION['nguoi_dung']['id'];
                        $pass_now = md5($_POST['pass_now']);
                        $pass_new = md5($_POST['pass_new']);
                        $pass_current = md5($_POST['pass_current']);
                        if ($_POST['pass_now'] == '') {
                            $thongbao = "Vui lòng không bỏ trống.";
                        } else {
                            $matkhau = $_SESSION['nguoi_dung']['matkhau'];
                            if ($pass_now == $matkhau) {
                                if ($pass_new == $pass_current) {
                                    upd_pass($idkh, $pass_new);
                                    session_unset();
                                    require_once "../View/user_ca_nhan/inner.php";
                                    // $thongbao = "Đổi mật khẩu thành công.";
                                } else {
                                    $thongbao = "Mật khẩu không khớp.";
                                }
                            } else {
                                $thongbao = "Sai mật khẩu hiện tại.";
                            }
                        }
                    }
                    require_once "./user_ca_nhan/dmk.php";
                    break;
                case 'my_user':
                    $khachhang = khach_hang_select_by_id($_SESSION['nguoi_dung']['id']);
                    require_once "user_ca_nhan/my_user.php";
                    break;
                case 'chinh_sach':
                    require_once "user_ca_nhan/chinh_sach.php";
                    break;
            }
        } else {
            $khachhang = khach_hang_select_by_id($_SESSION['nguoi_dung']['id']);
            include "user_ca_nhan/my_user.php";
        }
        ?>
    </section>
</section>