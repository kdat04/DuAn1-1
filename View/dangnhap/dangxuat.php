<?php
session_start();
unset($_SESSION['nguoi_dung']);
header("location: ./index.php?action=dn");
exit;