<?php
session_start();

require_once "./header.php";

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'ct_phim':
            require_once './ct_phim.php';
            break;
        case 'ds_phim':
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
            require_once './home.php';
            break;
    }
} else {
    require_once './home.php';
}

require_once "./footer.php";
