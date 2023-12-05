<?php
require_once 'pdo.php';

// function ve_insert($ten_phim, $img_phim, $img_banner_phim, $mota,  $nsx, $nph, $thoi_luong_phim, $cs_danh_gia, $qg, $dv1, $dv2, $dv3, $tt, $id_loaiphim)
// {
//     $sql = "INSERT INTO `phim` (`id`, `ten_phim`, `img_phim`, `img_banner`, `mota`, `nsx`, `nph`,`thoi_luong_phim`  , `cs_danh_gia`,`quocgia`,`dienvien1`,`dienvien2`,`dienvien3`,`tt`, `id_loaiphim`) VALUES (NULL, ?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
//     pdo_execute($sql, $ten_phim, $img_phim, $img_banner_phim, $mota, $nsx, $nph, $thoi_luong_phim, $cs_danh_gia, $qg, $dv1, $dv2, $dv3, $tt, $id_loaiphim);
// }

function lock_ghe($id_kgc)
{
    $sql = "SELECT ghe_ngoi FROM ve WHERE tt_ve = 1  AND id_kgc = '$id_kgc' AND ghe_ngoi IS NOT NULL ";
    return pdo_query($sql);
}

function ve_select_all($key)
{
    $sql = "SELECT ve.id, ve.gia_ve, ve.ngay_dat, ve.ghe_ngoi, ve.id_user, ve.id_kgc, ve.id_bill, ve.tt_ve, users.ten_user, khung_gio_chieu.gio_chieu,khung_gio_chieu.phong_phim, xuat_chieu.ngay_chieu, phim.ten_phim FROM ve INNER JOIN users ON users.id = ve.id_user INNER JOIN khung_gio_chieu ON khung_gio_chieu.id = ve.id_kgc INNER JOIN xuat_chieu ON khung_gio_chieu.id_xuat_chieu = xuat_chieu.id INNER JOIN phim ON phim.id = xuat_chieu.id_phim WHERE 1";
    if ($key != "") {
        $sql .= " and users.ten_user like '%" . $key . "%'";
    }
    $listve = pdo_query($sql);
    return $listve;
}
function lichsu_select_all($id)
{
    $sql = "SELECT ve.id,bill.thanh_tien, ve.ngay_dat, ve.ghe_ngoi, ve.id_user, ve.id_kgc, ve.id_bill, ve.tt_ve, users.ten_user,xuat_chieu.ngay_chieu, khung_gio_chieu.gio_chieu,khung_gio_chieu.phong_phim, phim.ten_phim FROM ve INNER JOIN users ON users.id = ve.id_user INNER JOIN khung_gio_chieu ON khung_gio_chieu.id = ve.id_kgc INNER JOIN xuat_chieu ON xuat_chieu.id = khung_gio_chieu.id_xuat_chieu INNER JOIN phim ON xuat_chieu.id_phim = phim.id INNER JOIN bill ON ve.id_bill = bill.id WHERE users.id =" . $id;
    $listve = pdo_query($sql);
    return $listve;
}
