<?php
require_once 'pdo.php';

function bill_insert($ngay_tt, $gia_ghe)
{
    $sql = "INSERT INTO bill (id, ngay_tt, thanh_tien) VALUES (NULL,'$ngay_tt', '$gia_ghe')";
    return pdo_execute_return_interlastid($sql);
}

function ve_insert($gia_ghe, $ngay_tt, $ghe, $id_user, $id_kgc, $id_bill)
{
    $sql = 'INSERT INTO `ve` (`id`, `gia_ve`, `ngay_dat`, `ghe_ngoi`, `id_user`, `id_kgc`,`id_bill`) VALUES (NULL,?,?,?,?,?,?)';
    return pdo_execute_return_interlastid($sql, $gia_ghe, $ngay_tt, $ghe, $id_user, $id_kgc, $id_bill);
}

function  dich_vu_insert($id_ve, $combo)
{
    $sql = 'INSERT INTO `dich_vu` (`id`, `combo`, `id_ve`) VALUES (NULL,?,?)';
    pdo_execute($sql, $combo, $id_ve);
}

function bill_update($id)
{
    $sql = 'UPDATE bill SET tt_bill = 1 WHERE id = ?';
    pdo_execute($sql, $id);
}

function bill_updat_gia($id, $gia_ghe)
{
    $sql = 'UPDATE bill SET thanh_tien = ?  WHERE id = ?';
    pdo_execute($sql, $gia_ghe, $id);
}


function ve_update($id)
{
    $sql = 'UPDATE ve SET tt_ve = 1 WHERE id_bill = ?';
    pdo_execute($sql, $id);
}

function dv_update($id)
{
    $sql = 'UPDATE dich_vu SET tt_dv = 1 WHERE id_ve = ?';
    pdo_execute($sql, $id);
}
function list_xc($id)
{
    $sql = "SELECT bill.thanh_tien,bill.ngay_tt, ve.id, ve.ghe_ngoi, users.ten_user, khung_gio_chieu.gio_chieu ,xuat_chieu.ngay_chieu, phim.ten_phim FROM bill JOIN ve ON ve.id_bill = bill.id JOIN users ON ve.id_user = users.id JOIN khung_gio_chieu ON khung_gio_chieu.id = ve.id_kgc JOIN xuat_chieu ON xuat_chieu.id = khung_gio_chieu.id_xuat_chieu JOIN phim ON phim.id = xuat_chieu.id_phim WHERE bill.id = ?";
    return pdo_query_one($sql, $id);
}
function bill_xem($key)
{
    $sql = "SELECT * FROM bill JOIN ve ON ve.id_bill = bill.id INNER JOIN users ON users.id = ve.id_user WHERE 1";
    if ($key != "") {
        $sql .= " and users.ten_user like '%" . $key . "%'";
    }
    return pdo_query($sql);
}
function bill_delete($ma_bill){
    $sql = "DELETE FROM `bill` WHERE id=?";
    if(is_array($ma_bill)){
        foreach ($ma_bill as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $ma_bill);
    }
}