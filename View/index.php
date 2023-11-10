<?php
session_start();

require_once "./header.php";

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case '':
            break;
        default:
            require_once './home.php';
            break;
    }
} else {
    require_once './home.php';
}

require_once "./footer.php";
