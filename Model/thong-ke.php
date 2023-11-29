<?php
require_once 'pdo.php';

function thong_ke_hang_hoa()
{
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

function thong_ke_binh_luan()
{
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
    $sql = "SELECT phim.id as id, phim.ten_phim as ten_phim, phim.view as view,loai_phim.ten_loaiphim as ten_loaiphim ";
    $sql .= " from phim left join loai_phim ON loai_phim.id = phim.id_loaiphim";
    $sql .= "  group by phim.id order by phim.id desc";
    $listtk = pdo_query($sql);
    return $listtk;
}
function load_thongke_doanhthu()
{
  $sql = "SELECT phim.id as id, phim.ten_phim as ten_phim, loai_phim.ten_loaiphim as ten_loaiphim,ve.tt_ve = 1 as so_luong_ve_dat, sum(bill.thanh_tien) as sum_thanhtien
  from phim
  left join loai_phim ON loai_phim.id = phim.id_loaiphim
  left join xuat_chieu ON phim.id = xuat_chieu.id_phim
  left join khung_gio_chieu ON xuat_chieu.id = khung_gio_chieu.id_xuat_chieu
  left join ve ON ve.id_kgc = khung_gio_chieu.id
  left join bill ON bill.id = ve.id_bill
  group by phim.id
  order by phim.id desc";

  $listtk = pdo_query($sql);

  return $listtk;
}


function binh_luan_thongke()
{
    $sql = "SELECT users.id as id, users.ten_user as user, count(binhluan.id_user) as countuser, binhluan.timebl as timebl ";
    $sql .= " from users left join binhluan ON users.id = binhluan.id_user";
    $sql .= "  group by users.id order by users.id desc";
    $listtk = pdo_query($sql);
    return $listtk;
}
