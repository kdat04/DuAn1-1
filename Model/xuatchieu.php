<?php

function xuatchieu_select_all()
{
    $sql = "SELECT xuat_chieu.id, xuat_chieu.ngay_chieu, phim.ten_phim, phim.img_phim  FROM xuat_chieu INNER JOIN phim ON phim.id = xuat_chieu.id_phim order by xuat_chieu.id DESC ";
    return pdo_query($sql);
}

function xuatchieu_select_by_id_phim($id)
{
    $sql = "SELECT xuat_chieu.id, xuat_chieu.ngay_chieu, phim.ten_phim, phim.img_phim  FROM xuat_chieu INNER JOIN phim ON phim.id = xuat_chieu.id_phim WHERE phim.id= '$id'";
    return pdo_query($sql);
}

function xuatchieu_insert($ngay_xc, $ten_phim)
{
    $sql = "INSERT INTO `xuat_chieu` (`id`, `id_phim`, `ngay_chieu`) VALUES (NULL, '$ten_phim', '$ngay_xc')";
    pdo_execute($sql);
}
function xuatchieu_select_by_id($id)
{
    $sql = "SELECT * FROM xuat_chieu WHERE id=?";
    return pdo_query_one($sql, $id);
}
function xuat_chieu_update($ngay_chieu, $id)
{
    $sql = "UPDATE xuat_chieu SET ngay_chieu=? WHERE id=?";
    pdo_execute($sql, $ngay_chieu, $id);
}
function xuat_chieu_delete($id)
{
    $sql = "DELETE FROM xuat_chieu WHERE id = ?";
    pdo_execute($sql, $id);
}

function xoa_tonggio_delete($id)
{
    $sql = "DELETE FROM khung_gio_chieu WHERE id_xuat_chieu = ?";
    pdo_execute($sql, $id);
}