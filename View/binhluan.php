<?php
session_start();
require "../Model/pdo.php";
require "../model/binh-luan.php";
$id_phim = $_REQUEST['id_phim'];
date_default_timezone_set("Asia/Ho_Chi_Minh");

if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
    $noidung = $_POST['noidung'];
    $id_user = $_SESSION['nguoi_dung']['id'];
    $id_phim = $_POST['id_phim'];
    $timebl = date('h:i:a d-m-Y');
    binh_luan_insert($noidung, $id_user, $id_phim, $timebl);

    header("location:" . $_SERVER['HTTP_REFERER']);
}
$listbl = binh_luan_select_all($id_phim);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .comment form .form-ctphim-1 span a {
            text-decoration: none;
            background-color: #ff953f;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>

<body>

    <section class="binhluan">
        <center>
            <hr>
            <div class="comment">
                <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                    <?php
                    if (isset($_SESSION['nguoi_dung']) && ($_SESSION['nguoi_dung']  != "")) { ?>
                        <h3>Đánh giá phim</h3>
                        <div class="form-ctphim">
                            <div class="bl-text">
                                <input type="hidden" name="id_phim" id="" value="<?= $id_phim ?>">
                                <input type="text" name="noidung" id="" placeholder="Viết nhận xét về sản phẩm...">
                            </div>
                            <div class="nut-binhluan">
                                <input type="submit" name="guibinhluan" id="" value="Gửi đánh giá">
                            </div>
                        </div>
                    <?php } else { ?>
                        <h3>Đánh giá</h3>
                        <div class="form-ctphim-1">
                            <center><input type="text" name="" id="" placeholder="Viết nhận xét về sản phẩm..."></center>
                        </div>
                        <span>Đăng nhập để bình luận <a href="index.php?action=dn">Đăng nhập</a></span>
                    <?php } ?>
                </form>
            </div>
        </center>
        <!---->
        <?php foreach ($listbl as $bl) : ?>
            <div class="t-bl">
                <div class="img-ten">
                    <center>
                        <img src="../View/IMG/user.jpg" alt="">
                        <h4><?= $bl['ten_user'] ?></h4>
                        <p><?= $bl['timebl'] ?></p>
                    </center>
                </div>
                <div class="binhluan-star">
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <span><?= $bl['noidung'] ?></span>
                </div>
            </div>
        <?php endforeach ?>
    </section>

</html>