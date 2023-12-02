<?php
require_once 'pdo.php';
function binh_luan_insert($noidung, $id_user, $id_phim, $timebl)
{
    $sql = "INSERT INTO `binhluan` (`id`, `noidung`, `id_user`, `id_phim`, `timebl`) VALUES (NULL, '$noidung', '$id_user', '$id_phim', '$timebl')";
    pdo_execute($sql);
}

function binh_luan_select_all($id_phim)
{
    $sql = "SELECT binhluan.noidung, binhluan.timebl ,phim.id,  users.ten_user FROM binhluan INNER JOIN phim ON phim.id = binhluan.id_phim INNER JOIN users ON users.id = binhluan.id_user WHERE binhluan.id_phim = '$id_phim'";
    return pdo_query($sql);
}
function binhluan_select_all($key)
{
    $sql = "SELECT binhluan.id, binhluan.noidung, binhluan.id_user, binhluan.id_phim, binhluan.timebl, users.ten_user, phim.ten_phim FROM binhluan INNER JOIN phim ON phim.id = binhluan.id_phim INNER JOIN users ON users.id = binhluan.id_user WHERE 1";
    if ($key != "") {
        $sql .= " and users.ten_user like '%" . $key . "%'";
    }
    $listbl = pdo_query($sql);
    return $listbl;
}
function delete_bl($id)
{
    $sql = "DELETE FROM binhluan WHERE id='$id'";
    pdo_execute($sql);
}
