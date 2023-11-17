<section class="uu_dai">
    <div class="uudai-left">
        <?php
        if ((isset($_GET['link'])) && ($_GET['link'] != "")) {
            $act = $_GET['link'];
            switch ($act) {
                case 'uu_dai':
                    require_once "trang_con/uu_dai.php";
                    break;
                case 'phim_hay_thang':
                    require_once "trang_con/phim_hay_thang.php";
                    break;
                case 'the_loai_phim':
                    require_once "trang_con/the_loai_phim.php";
                    break;
                case 'dien_vien':
                    require_once "trang_con/dien_vien.php";
                    break;
                case 'dao_dien':
                    require_once "trang_con/dao_dien.php";
                    break;
                default:
                    require_once "trang_con/uu_dai.php";
                    break;
            }
        } else {
            require_once "uu_dai/uu_dai.php";
        }
        ?>
    </div>
    <div class="uudai-right">
        <div class="muavenhanh">
            <h3>Mua Vé Nhanh</h3>
            <form action="">
                <nav>
                    <ul>
                        <li>
                            <select class="menu-cuon">
                                <option>Lựa Chọn</option>
                                <option value="">Biệt Đội Mảvels</option>
                                <option value="">Người Vợ Cuối Cùng</option>
                                <option value="">Yêu Lại Vợ Ngầu</option>
                                <option value="">Đất Rừng Phương Nam</option>
                                <option value="">Oán Hồn Tử Địa</option>
                                <option value="">Danh Họa Van Gogh</option>
                                <option value="">Đường Cùng</option>
                                <option value="">Đêm Hẹn Hò Đẫm Máu</option>
                                <option value="">Đấu Trường Sinh Tử: Khúc Hát Của Chim Ca Và Rắn Độc</option>
                                <option value="">Quỷ Lùn Tinh Nghịch: Đồng Tâm Hiệp Nhạc</option>
                                <option value="">Chiếm Đoạt</option>
                                <option value="">Cậu Bé Dũng Sĩ Yakari</option>
                                <option value="">Dear David</option>
                                <option value="">Những Kỷ Nguyên Của Taylor Swift</option>
                                <option value="">Quỷ Môn Quan: Gọi Hồn</option>
                                <option value="">Năm Đêm Kinh Hoàng</option>
                                <option value="">Wolfoo Và Hòn Đảo Kỳ Bí</option>
                                <option value="">PAW Patrol: Phim Siêu Đẳng</option>
                            </select>
                        </li>
                        <li>
                            <select class="menu-cuon">
                                <option>Lựa Chọn</option>
                                <option value="">3D CINEMA Hà Đông</option>
                            </select>
                        </li>
                        <li>
                            <select class="menu-cuon">
                                <option>Lựa Chọn</option>
                                <option value="">Thứ tư, 15/11/2023</option>
                            </select>
                        </li>
                    </ul>
                </nav>
            </form>
        </div>
        <div class="ct_phim_box_right-1">
            <h3>PHIM ĐANG CHIẾU</h3>
            <div class="phim_lq-1">
                <div class="phim_lq_img-1">
                    <img src="IMG/phim_lq1.webp" alt="">
                    <div class="sub_img-1">
                        <span><i class="fa-solid fa-tv"></i>Mua Vé</span>
                    </div>
                </div>
                <h5>Biệt Đội Marvels</h5>
            </div>
            <div class="phim_lq-1">
                <div class="phim_lq_img-1">
                    <img src="IMG/750x500-nvcc_1698985267220.webp" alt="">
                    <div class="sub_img-1">
                        <span><i class="fa-solid fa-tv"></i>Mua Vé</span>
                    </div>
                </div>
                <h5>Người Vợ Cuối Cùng</h5>
            </div>
            <div class="phim_lq-1">
                <div class="phim_lq_img-1">
                    <img src="IMG/lr-750_1699256436423.webp" alt="">
                    <div class="sub_img-1">
                        <span><i class="fa-solid fa-tv"></i>Mua Vé</span>
                    </div>
                </div>
                <h5>Yêu Lại Vợ Ngầu</h5>
            </div>
        </div>
        <div class="btn-uudai">
            <button>Xem Thêm <i class="fa-solid fa-angle-right"></i></i></button>
        </div>
    </div>
</section>