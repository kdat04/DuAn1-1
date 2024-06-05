<?php
require_once 'pdo.php';

function      phim_insert($ten_phim, $img_phim, $img_banner_phim, $mota,  $nsx, $nph, $thoi_luong_phim, $cs_danh_gia, $qg, $dv1, $dv2, $dv3, $tt, $id_loaiphim)
{
    $sql = "INSERT INTO `phim` (`id`, `ten_phim`, `img_phim`, `img_banner`, `mota`, `nsx`, `nph`,`thoi_luong_phim`  , `cs_danh_gia`,`quocgia`,`dienvien1`,`dienvien2`,`dienvien3`,`tt`, `id_loaiphim`) VALUES (NULL, ?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    pdo_execute($sql, $ten_phim, $img_phim, $img_banner_phim, $mota, $nsx, $nph, $thoi_luong_phim, $cs_danh_gia, $qg, $dv1, $dv2, $dv3, $tt, $id_loaiphim);
}

function       phim_update($ten_phim, $img_phim, $img_banner_phim, $mota,  $nsx, $nph, $thoi_luong_phim, $cs_danh_gia, $qg, $dv1, $dv2, $dv3, $tt, $id_loaiphim, $id)
{
    $sql = "UPDATE phim SET ten_phim=?,img_phim=?,img_banner=?,mota=?,nsx=?,nph=?,thoi_luong_phim=? ,cs_danh_gia=?, quocgia=?,dienvien1=?,dienvien2=?,dienvien3=?,tt=?,id_loaiphim=? WHERE id=?";
    pdo_execute($sql, $ten_phim, $img_phim, $img_banner_phim, $mota,  $nsx, $nph, $thoi_luong_phim, $cs_danh_gia, $qg, $dv1, $dv2, $dv3, $tt, $id_loaiphim, $id);
}
function validateTenPhim($ten_phim) {
    $validLength = strlen($ten_phim) >= 3 && strlen($ten_phim) <= 50;
 
  
    return $validLength ;
  }
  function validatemota($mota) {
    $validLength = strlen($mota) >= 10 && strlen($mota) <= 250;
 
  
    return $validLength ;
  }
  function validateThoiLuongPhim($thoi_luong_phim) {
    $validRange = filter_var($thoi_luong_phim, FILTER_VALIDATE_INT) !== false && $thoi_luong_phim >= 90 && $thoi_luong_phim <= 330;
  
    return $validRange;
  }
function phim_delete($ma_hh)
{
    $sql = "DELETE FROM phim WHERE id=?";

    if (is_array($ma_hh)) {
        foreach ($ma_hh as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $ma_hh);
    }
}

function check_phim($ten_phim)
{
    $sql = "SELECT ten_phim FROM phim WHERE ten_phim = '$ten_phim'";
    return pdo_query_one($sql);
}
function phim_select_by_id($ma_hh)
{
    $sql = "SELECT phim.id, phim.ten_phim,phim.img_banner, phim.img_phim, phim.mota, phim.nsx, phim.nph,phim.thoi_luong_phim ,phim.cs_danh_gia,phim.view,phim.quocgia,phim.dienvien1,phim.dienvien2,phim.dienvien3,phim.tt,phim.id_loaiphim,loai_phim.ten_loaiphim FROM phim JOIN loai_phim ON phim.id_loaiphim = loai_phim.id  WHERE phim.id = ?";
    return pdo_query_one($sql, $ma_hh);
}


function phim_select_all()
{
    $sql = "SELECT phim.id, phim.ten_phim, phim.img_phim, phim.mota, phim.nsx, phim.nph, phim.view ,phim.quocgia,phim.dienvien1,phim.dienvien2,phim.dienvien3, loai_phim.ten_loaiphim FROM phim JOIN loai_phim ON phim.id_loaiphim = loai_phim.id";
    return pdo_query($sql);
}
function phim_select_all_tt()
{
    $sql = "SELECT phim.id, phim.ten_phim, phim.img_phim, phim.mota, phim.nsx, phim.nph, phim.view ,phim.quocgia,phim.dienvien1,phim.dienvien2,phim.dienvien3, loai_phim.ten_loaiphim FROM phim JOIN loai_phim ON phim.id_loaiphim = loai_phim.id LIMIT 0, 8";
    return pdo_query($sql);
}

function phim_select_all_dangchieu()
{
    $sql = "SELECT phim.id, phim.ten_phim, phim.img_phim, phim.mota, phim.nsx, phim.nph, phim.view ,phim.quocgia,phim.dienvien1,phim.dienvien2,phim.dienvien3, loai_phim.ten_loaiphim FROM phim JOIN loai_phim ON phim.id_loaiphim = loai_phim.id WHERE phim.tt = 0 LIMIT 0, 8 ";
    return pdo_query($sql);
}

function phim_select_all_sapchieu()
{
    $sql = "SELECT phim.id, phim.ten_phim, phim.img_phim, phim.mota, phim.nsx, phim.nph, phim.view ,phim.quocgia,phim.dienvien1,phim.dienvien2,phim.dienvien3, loai_phim.ten_loaiphim FROM phim JOIN loai_phim ON phim.id_loaiphim = loai_phim.id WHERE phim.tt = 1 LIMIT 0, 8 ";
    return pdo_query($sql);
}

function phim_select_all_dangchieu1()
{
    $sql = "SELECT phim.id, phim.ten_phim, phim.img_phim, phim.mota, phim.nsx, phim.nph, phim.view ,phim.quocgia,phim.dienvien1,phim.dienvien2,phim.dienvien3, loai_phim.ten_loaiphim FROM phim JOIN loai_phim ON phim.id_loaiphim = loai_phim.id WHERE phim.tt = 0";
    return pdo_query($sql);
}

function phim_select_all_sapchieu1()
{
    $sql = "SELECT phim.id, phim.ten_phim, phim.img_phim, phim.mota, phim.nsx, phim.nph, phim.view ,phim.quocgia,phim.dienvien1,phim.dienvien2,phim.dienvien3, loai_phim.ten_loaiphim FROM phim JOIN loai_phim ON phim.id_loaiphim = loai_phim.id WHERE phim.tt = 1 ";
    return pdo_query($sql);
}

function phim_select_search()
{
    $sql = "SELECT phim.id, phim.ten_phim, phim.img_phim, phim.mota, phim.nsx, phim.nph, phim.view ,phim.quocgia,phim.dienvien1,phim.dienvien2,phim.dienvien3, loai_phim.ten_loaiphim FROM phim JOIN loai_phim ON phim.id_loaiphim = loai_phim.id LIMIT 0, 4";
    return pdo_query($sql);
}

function phim_select_search_sapchieu()
{
    $sql = "SELECT phim.id, phim.ten_phim, phim.img_phim, phim.mota, phim.nsx, phim.nph, phim.view ,phim.quocgia,phim.dienvien1,phim.dienvien2,phim.dienvien3, loai_phim.ten_loaiphim FROM phim JOIN loai_phim ON phim.id_loaiphim = loai_phim.id WHERE phim.tt = 1 LIMIT 0, 4";
    return pdo_query($sql);
}
function phim_select_dgchieu($id)
{
    $sql = "SELECT phim.id, phim.ten_phim, phim.img_phim,phim.img_banner ,phim.mota, phim.nsx, phim.nph, phim.view ,phim.quocgia,phim.dienvien1,phim.dienvien2,phim.dienvien3, loai_phim.ten_loaiphim FROM phim JOIN loai_phim ON phim.id_loaiphim = loai_phim.id WHERE phim.tt = 0 and phim.id <> '" . $id . "' LIMIT 0, 3";
    return pdo_query($sql);
}

function phim_search_keyword_view($key, $id_loaiphim)
{
    $sql = "SELECT phim.id, phim.ten_phim, phim.img_phim, phim.mota, phim.nsx, phim.nph, phim.view ,phim.view,phim.quocgia,phim.dienvien1,phim.dienvien2,phim.dienvien3, loai_phim.ten_loaiphim FROM phim LEFT JOIN loai_phim ON phim.id_loaiphim = loai_phim.id Where 1";
    if ($key != "") {
        $sql .= " and ten_phim like '%" . $key . "%' or ten_loaiphim like '%" . $key . "%'";
    }
    if ($id_loaiphim > 0) {
        $sql .= " and id_loaiphim  = '" . $id_loaiphim . "'";
    }
    $sql .= " order by id desc";
    $listkey = pdo_query($sql);
    return $listkey;
}

function phim_tang_so_luot_xem($id)
{
    $sql = "UPDATE phim SET view = view + 1 WHERE id=?";
    pdo_execute($sql, $id);
}

function load_ve_phim($id, $id_xuatchieu, $id_khunggio)
{
    $sql = "SELECT phim.id AS id_phim, phim.img_phim, phim.ten_phim, xuat_chieu.id AS id_xc, xuat_chieu.ngay_chieu, khung_gio_chieu.id AS id_kgc,khung_gio_chieu.gio_chieu  FROM phim INNER JOIN xuat_chieu ON phim.id = xuat_chieu.id_phim INNER JOIN khung_gio_chieu ON xuat_chieu.id = khung_gio_chieu.id_xuat_chieu WHERE phim.id = '$id' AND xuat_chieu.id='$id_xuatchieu' AND khung_gio_chieu.id = '$id_khunggio'";
    return pdo_query_one($sql);
}
