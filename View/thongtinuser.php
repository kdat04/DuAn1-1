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
        <hr>

        <div class="box_dm_user">
            <a href="index.php?action=tt_user&link=my_user"> Lịch Sử Giao Dịch</a>
            <a href="">Thông Tin Cá Nhân</a>
            <a href=""> Thông Báo </a>
            <a href="">Quà Tặng</a>
            <a href="">Chính Sách</a>
        </div><br>
        <hr>
        <div class="lienhe">
            <div class="lienhe1">
                <p>HOTLINE hỗ trợ: <span>19002224 (9:00 - 22:00)</span></p> <i class="fa-solid fa-angle-up fa-rotate-90"></i>
            </div>
            <hr>
            <div class="lienhe1">
                <p>Email: <span>hotro@galaxystudio.vn</span></p> <i class="fa-solid fa-angle-up fa-rotate-90"></i>
            </div>
            <hr>
            <div class="lienhe1">
                <p>Câu hỏi thường gặp: </p> <i class="fa-solid fa-angle-up fa-rotate-90"></i>
            </div>
        </div>

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
                    require_once "";
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
                    include "";
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