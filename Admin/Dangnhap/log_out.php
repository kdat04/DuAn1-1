<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("location: ./index.php?action=&act=dn");
    exit;
}
unset($_SESSION['user']);
unset($_SESSION['pass']);
header("location: ./index.php?action=&act=dn");
exit;