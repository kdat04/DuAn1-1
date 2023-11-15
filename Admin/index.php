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
            break;
    }
} else {
    if (!isset($_SESSION['username'])) {
        require_once './index.php?action=dn';
        exit;
    }
}

require_once './footer.php';
