<?php
function khunggiochieu_select_all()
{
    $sql = "SELECT khung_gio_chieu.id, khung_gio_chieu.gio_chieu, xuat_chieu.ngay_chieu, phong_chieu.ten_phongchieu, phim.ten_phim FROM khung_gio_chieu INNER JOIN xuat_chieu ON xuat_chieu.id = khung_gio_chieu.id_xuat_chieu INNER JOIN phong_chieu ON xuat_chieu.id_phongchieu = phong_chieu.id INNER JOIN phim ON phim.id = xuat_chieu.id_phim";
    return pdo_query($sql);
}


function khunggio_insert($khung_gio, $xuat_chieu){
    $sql = "INSERT INTO `khung_gio_chieu` (`id`, `id_xuat_chieu`, `gio_chieu`) VALUES (NULL, '$xuat_chieu', '$khung_gio')";
    return pdo_query($sql);
}

