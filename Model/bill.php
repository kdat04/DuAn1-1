<?php
require_once 'pdo.php';

function bill_insert($ngay_tt, $gia_ghe)
{
    $sql = "INSERT INTO bill (id, ngay_tt, thanh_tien) VALUES (NULL,'$ngay_tt', '$gia_ghe')";
    return pdo_execute_return_interlastid($sql);
}

function ve_insert($gia_ghe,$ngay_tt,$ghe,$id_user,$id_kgc, $id_bill){
    $sql = 'INSERT INTO `ve` (`id`, `gia_ve`, `ngay_dat`, `ghe`, `id_user`, `id_kgc`,`id_bill`) VALUES (NULL,?,?,?,?,?,?)';
    return pdo_execute_return_interlastid($sql,$gia_ghe,$ngay_tt,$ghe,$id_user,$id_kgc, $id_bill);
}

function  dich_vu_insert($id_ve,$combo){
    $sql = 'INSERT INTO `dich_vu` (`id`, `combo`, `id_ve`) VALUES (NULL,?,?)';
    pdo_execute($sql,$combo,$id_ve);
}

function bill_update($id){
    $sql = 'UPDATE bill SET tt_bill = 1 WHERE id = ?';
    pdo_execute($sql, $id);
}

function ve_update($id){
    $sql = 'UPDATE ve SET tt_ve = 1 WHERE id_bill = ?';
    pdo_execute($sql, $id);
}

function dv_update($id){
    $sql = 'UPDATE dich_vu SET tt_dv = 1 WHERE id_ve = ?';
    pdo_execute($sql, $id);
}
