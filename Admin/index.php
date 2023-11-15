<?php
session_start();

require_once "./header.php";

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'dn':
            require_once './login.php';
            break;
        case 'dk':
            require_once './signup.php';
            break;
        default:
            require_once './home.php';
            break;
    }
} else {
    if (!isset($_SESSION['username'])) {
        require_once './login.php';
        exit;
    }
}

require_once './footer.php';
