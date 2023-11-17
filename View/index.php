<?php
session_start();
require_once '../Model/phim.php';
require_once '../Model/khach-hang.php';
require_once '../Model/loai.php';
require_once '../Model/pdo.php';
require_once "./header.php";

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'ct_phim':
            if ((isset($_GET['id'])) && ($_GET['id'])) {
                $id = $_GET['id'];

                $list = phim_select_by_id($id);
                phim_tang_so_luot_xem($id);

                require_once './ct_phim.php';
            } else {
                require_once './home.php';
            }

            break;
        case 'ds_phim':
            $list_phim = phim_select_all();
            require_once './ds_phim.php';
            break;
        case 'tt_user':
            require_once "./thongtinuser.php";
            break;
        case 'dat_ve':
            require_once "./dat_ve.php";
            break;
        case 'uu_dai':
            require_once "./uu_dai.php";
            break;

        default:
            $list_phim_tt = phim_select_all_tt();
            require_once './home.php';
            break;
    }
} else {
    $list_phim_tt = phim_select_all_tt();
    require_once './home.php';
}

require_once "./footer.php";
