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
                    <h5>vũ việt</h5>
                </div>
                <div class="name_user_like"><i class="fa-solid fa-gift"></i><span>0 Stars</span></div>
            </div>
        </div>
        <div class="box_dm_user">
            <a href="index.php?action=tt_user&link=Lich_su"> Lịch Sử Đặt Vé</a>
            <a href="index.php?action=tt_user&link=my_user">Thông Tin Cá Nhân</a>
            <a href="index.php?action=tt_user&link=chinh_sach">Chính Sách</a>
            <a href="index.php?action=dx">Đăng Xuất</a>
            <a href="#">HOTLINE hỗ trợ: <span>19002224 (9:00 - 22:00)</span></a>
            <a  href="#">Email: <span>hotro@3dstudio.vn</span></a>
            
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
                case 'my_user':
                    require_once "user_ca_nhan/my_user.php";
                    break;
                case 'bao_cao':
                    include "";
                    break;
                case 'qua':
                    include "";
                    break;
                case 'chinh_sach':
                    require_once "user_ca_nhan/chinh_sach.php";
                    break;
                default:
                    include "";
                    break;
            }
        } else {
            include "user_ca_nhan/my_user.php";
        }
        ?>
    </section>
</section>