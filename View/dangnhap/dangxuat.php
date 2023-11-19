<?php
unset($_SESSION['nguoi_dung']);
echo '<meta http-equiv="refresh" content="0; url = ./index.php?action=">';
require_once './home.php';
require_once './footer.php';
exit;
