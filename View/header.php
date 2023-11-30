<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>3D Cinema</title>
    <link rel="shortcut icon" href="./IMG/3d Cinema.png">

    <link rel="stylesheet" href="./CSS/header.css">
    <link rel="stylesheet" href="./CSS/footer.css">
    <link rel="stylesheet" href="./CSS/home.css">
    <link rel="stylesheet" href="./CSS/ct_phim.css">
    <link rel="stylesheet" href="./CSS/dat_ve.css">
    <link rel="stylesheet" href="./CSS/chondoan.css">
    <link rel="stylesheet" href="./CSS/thongtinuser.css">
    <link rel="stylesheet" href="./CSS/my_user.css">
    <link rel="stylesheet" href="./CSS/chinhsach_thele.css">
    <link rel="stylesheet" href="./CSS/uu_dai.css">
    <link rel="stylesheet" href="./CSS/phim_hay_thang.css">
    <link rel="stylesheet" href="./CSS/the_loai_phim.css">
    <link rel="stylesheet" href="./CSS/dn.css">
    <link rel="stylesheet" href="./CSS/binhluan.css">
    <link rel="stylesheet" href="./CSS/style3860.css">
    <link rel="stylesheet" href="./CSS/xacnhan.css">
    <link rel="stylesheet" href="./CSS/thanh_toan.css">
    <link rel="stylesheet" href="./CSS/inner.css">
    <link rel="stylesheet" href="./CSS/lichsuve.css">
    <!-- <script src="./JS/modernizr.custom.js"></script> -->
</head>

<body>
    <header>
        <div class="header_content">
            <div class="header_img">
                <a href="index.php?action="><img src="./IMG/3d Cinema.png" alt="Logo"></a>
            </div>
            <div class="header_text">
                <ul>
                    <li><a href="index.php?action=ds_phim"><img src="./IMG/btn-ticket.webp" alt=""></a></li>
                    <li>Phim <i class="fa-solid fa-angle-right fa-rotate-90"></i>
                        <ul class="sub_menu sub_film">
                            <div class="Movie_showing">
                                <h3>PHIM ĐANG CHIẾU</h3>
                                <div class="Movie_tong">
                                    <?php foreach ($list_phim_search as $list) : ?>
                                        <a href="./index.php?action=ct_phim&id=<?= $list['id'] ?>">
                                            <div class="Movie">
                                                <img src="../Admin/Img_ad/<?= $list['img_phim'] ?>" alt="Ảnh phim">
                                                <span><?= $list['ten_phim'] ?></span>
                                                <button><i class="fa-solid fa-ticket"></i>Mua Vé</button>
                                            </div>
                                        </a>
                                    <?php endforeach ?>
                                </div>
                                <div class="Movie_coming_soon">
                                    <h3>PHIM SẮP CHIẾU</h3>
                                    <div class="Movie_tong">
                                        <?php foreach ($list_phim_search_sapchieu as $list) : ?>
                                            <a href="./index.php?action=ct_phim&id=<?= $list['id'] ?>">
                                                <div class="Movie">
                                                    <img src="../Admin/Img_ad/<?= $list['img_phim'] ?>" alt="Ảnh phim">
                                                    <span><?= $list['ten_phim'] ?></span>
                                                    <button><i class="fa-solid fa-ticket"></i>Mua Vé</button>
                                                </div>
                                            </a>
                                        <?php endforeach ?>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li>Thể loại phim <i class="fa-solid fa-angle-right fa-rotate-90"></i>
                        <ul class="sub_menu">
                            <?php foreach ($list_danhmuc as $danhmuc) : ?>
                                <li><a href="index.php?action=ds_search&id_loaiphim=<?= $danhmuc['id'] ?>"><?= $danhmuc['ten_loaiphim'] ?></a></li>
                            <?php endforeach ?>                    
                        </ul>
                    </li>
                    <li>Sự kiện <i class="fa-solid fa-angle-right fa-rotate-90"></i>
                        <ul class="sub_menu">
                            <li><a href="index.php?action=uu_dai&link=uu_dai">Ưu đãi</a></li>
                            <li><a href="index.php?action=uu_dai&link=phim_hay_thang">Phim Hay Tháng</a></li>
                        </ul>
                    </li>
                    <li>Rạp/Giá Vé <i class="fa-solid fa-angle-right fa-rotate-90"></i>
                        <ul class="sub_menu">
                            <li><a href="">Thể loại phim</a></li>
                            <li><a href="">Diễn Viên</a></li>
                            <li><a href="">Đạo diễn</a></li>
                            <li><a href="">Bình Luận Phim</a></li>
                            <li><a href="">Blog Điện Ảnh</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="header_seach">
                <form action="index.php?action=ds_search" method="post">
                    <div class="seach">
                        <i onclick="display_search()" class="fa-solid fa-magnifying-glass"></i>
                        <input class="input_search" type="search" name="kyw" placeholder="Tìm kiếm...." required>
                    </div>
                </form>

                <div class="header_dn">
                    <?php if (isset($_SESSION['nguoi_dung'])) {
                        extract([$_SESSION['nguoi_dung']]) ?>
                        <a href="index.php?action=tt_user"><?= $_SESSION['nguoi_dung']['ten_user'] ?></a>
                    <?php } else { ?>
                        <a href="index.php?action=dn">Đăng Nhập</a>
                    <?php } ?>
                </div>
                <div class="header_dktv">
                    <img src="./IMG/g star.png" alt="">
                    <div class="dktv">
                        <ul>
                            <li>
                                <img src="./IMG/icon-rules.webp" alt="">
                                <span>Thể Lệ</span>
                                <a href="">Chi Tiết</a>
                            </li>
                            <li>
                                <img src="./IMG/icon-login.fbbf1b2d.svg" alt="">
                                <span>Quyền Lợi</span>
                                <a href="">Chi Tiết</a>
                            </li>
                            <li>
                                <img src="./IMG/faq.webp" alt="">
                                <span>Hướng Dẫn</span>
                                <a href="">Chi Tiết</a>
                            </li>
                            <li class="dk">
                                <img src="./IMG/bear_glx.webp" alt="">
                                <span>Đăng Ký Thành Viên G-Star Nhận Ngay Ưu Đãi!</span>
                                <a href="../View/index.php?action=dk">Đăng Ký</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>