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
function load_thongke_doanhthu_thang($kyw)
{
    $sql = "SELECT sum(bill.thanh_tien) as tong_dt, ngay_tt 
  from bill Where 1 ";

    if ($kyw == 1) {
        $sql .= "AND MONTH(ngay_tt) = 1 AND tt_bill = 1";
    } elseif ($kyw == 2) {
        $sql .= "AND MONTH(ngay_tt) = 2 AND tt_bill = 1";
    } elseif ($kyw == 3) {
        $sql .= "AND MONTH(ngay_tt) = 3 AND tt_bill = 1";
    } elseif ($kyw == 4) {
        $sql .= "AND MONTH(ngay_tt) = 4 AND tt_bill = 1";
    } elseif ($kyw == 5) {
        $sql .= "AND MONTH(ngay_tt) = 5 AND tt_bill = 1";
    } elseif ($kyw == 6) {
        $sql .= "AND MONTH(ngay_tt) = 6 AND tt_bill = 1";
    } elseif ($kyw == 7) {
        $sql .= "AND MONTH(ngay_tt) = 7 AND tt_bill = 1";
    } elseif ($kyw == 8) {
        $sql .= "AND MONTH(ngay_tt) = 8 AND tt_bill = 1";
    } elseif ($kyw == 9) {
        $sql .= "AND MONTH(ngay_tt) = 9 AND tt_bill = 1";
    } elseif ($kyw == 10) {
        $sql .= "AND MONTH(ngay_tt) = 10 AND tt_bill = 1";
    } elseif ($kyw == 11) {
        $sql .= "AND MONTH(ngay_tt) = 11 AND tt_bill = 1";
    } elseif ($kyw == 12) {
        $sql .= "AND MONTH(ngay_tt) = 12 AND tt_bill = 1";
    } else {
        $sql .= 'AND tt_bill = 1';
    }

    $listtk = pdo_query($sql);

    return $listtk;
}

function load_bieudo_doanhthu_thang()
{
    $sql = "SELECT sum(bill.thanh_tien) as tong_dt, ngay_tt 
  from bill group by MONTH(ngay_tt)";

    $listtk = pdo_query($sql);

    return $listtk;
}

function load_thongke_doanhthu()
{
    $sql = "SELECT phim.id as id, phim.ten_phim as ten_phim, loai_phim.ten_loaiphim as ten_loaiphim,count(bill.tt_bill = 1) as so_luong_ve_dat, sum(bill.thanh_tien) as sum_thanhtien, bill.ngay_tt as ngay_tt
  from phim
  left join loai_phim ON loai_phim.id = phim.id_loaiphim
  left join xuat_chieu ON phim.id = xuat_chieu.id_phim
  left join khung_gio_chieu ON xuat_chieu.id = khung_gio_chieu.id_xuat_chieu
  left join ve ON ve.id_kgc = khung_gio_chieu.id
  left join bill ON bill.id = ve.id_bill AND bill.tt_bill = 1 group by phim.id  order by phim.id ASC ";

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
function user_thongke()
{
    $sql = "SELECT users.id as id,users.ten_user as user,users.role as role   from users ";

    $sql .= "  group by users.id order by users.id desc";
    $listtk = pdo_query($sql);
    return $listtk;
}
function load_thongke_count_admin()
{
    $sql = "SELECT COUNT(users.role ) as tong_ad from users where users.role = 1 ";
    $list = pdo_query($sql);

    return $list;
}

function load_thongke_count_user()
{
    $sql = "SELECT COUNT(users.role ) as tong_user from users where users.role = 0 ";
    $list = pdo_query($sql);

    return $list;
}
function load_thongke_count_nv()
{
    $sql = "SELECT COUNT(users.role ) as tong_nv from users where users.role <> 0 and users.role <> 1 ";
    $list = pdo_query($sql);

    return $list;
}