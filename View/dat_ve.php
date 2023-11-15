<section class="datve">
    <div class="box-text">
        <nav>
            <ul>
                <li><a href="#">
                        <span>Chọn phim / Rạp / Suất</span>
                        <span>Chọn ghế</span>
                    </a>
                </li>
                <li><a href="#">Chọn thức ăn</a></li>
                <li><a href="#">Thanh toán</a></li>
                <li><a href="#">Xác nhận</a></li>
            </ul>
        </nav>
    </div>
    <div class="main">
        <div class="main-left">
            <?php
            if ((isset($_GET['link'])) && ($_GET['link'] != "")) {
                $act = $_GET['link'];
                switch ($act) {
                    case 'chonghe':
                        require_once "chonghe.php";
                        break;
                    case 'chondoan':
                        require_once "chondoan.php";
                        break;
                    case 'thanh_toan':
                        require_once "thanh_toan.php";
                        break;
                    default:
                        require_once "chonghe.php";
                        break;
                }
            } else {
                require_once "chonghe.php";
            }
            ?>
        </div>
        <div class="main-right">
            <div class="main-right-mau">
                ...
            </div>
            <div class="phantren">
                <div class="img-ctbill">
                    <img src="IMG_FILM/the-marvels-3_1699586058577.webp" alt="" width="150px">
                    <div class="img-ctbill-text">
                        <h2>Biệt Đội Marvels</h2>
                        <p>2D Phụ Đề</p> <br>
                        <span>T13</span>
                    </div>
                </div>
                <div class="tgchieu">
                    <span>Galaxy Trung Chánh - RAP 1</span> <br>
                    <span>Suất: 09:45 - Thứ Ba, 14/11/2023</span> <br>
                    <span class="ke">------------------------------------------------------------------</span>
                </div>
                <div class="tongtien">
                    <span>Tổng cộng</span>
                    <span class="mau">0 đ</span>
                </div>
            </div>
            <div class="nut-btn">
                <button>Quay lại </button>
                <button><a href="index.php?action=dat_ve&link=chondoan">Tiếp tục</a></button>
            </div>
        </div>
    </div>
</section>