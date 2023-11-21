<?php
require_once 'pdo.php';

function thong_ke_hang_hoa(){
    $sql = "SELECT lo.ma_loai, lo.ten_loai,"
            . " COUNT(*) so_luong,"
            . " MIN(hh.don_gia) gia_min,"
            . " MAX(hh.don_gia) gia_max,"
            . " AVG(hh.don_gia) gia_avg"
            . " FROM hang_hoa hh "
            . " JOIN loai lo ON lo.ma_loai=hh.ma_loai "
            . " GROUP BY lo.ma_loai, lo.ten_loai";
    return pdo_query($sql);
}

function thong_ke_binh_luan(){
    $sql = "SELECT hh.ma_hh, hh.ten_hh,"
            . " COUNT(*) so_luong,"
            . " MIN(bl.ngay_bl) cu_nhat,"
            . " MAX(bl.ngay_bl) moi_nhat"
            . " FROM binh_luan bl "
            . " JOIN hang_hoa hh ON hh.ma_hh=bl.ma_hh "
            . " GROUP BY hh.ma_hh, hh.ten_hh"
            . " HAVING so_luong > 0";
    return pdo_query($sql);
}
function loadall_thongke()
{
    $sql = "SELECT loai_phim.id as id, loai_phim.ten_loaiphim as 	ten_loaiphim, count(phim.id) as countphim, min(phim.gia) as mingia, max(phim.gia) as maxgia, avg(phim.gia) as avggia ";
    $sql .= " from phim left join loai_phim ON loai_phim.id = phim.id_loaiphim";
    $sql .= "  group by loai_phim.id order by loai_phim.id desc";
    $listtk = pdo_query($sql);
    return $listtk;
}