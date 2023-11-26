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

function phim_select_search()
{
    $sql = "SELECT phim.id, phim.ten_phim, phim.img_phim, phim.mota, phim.nsx, phim.nph, phim.view ,phim.quocgia,phim.dienvien1,phim.dienvien2,phim.dienvien3, loai_phim.ten_loaiphim FROM phim JOIN loai_phim ON phim.id_loaiphim = loai_phim.id LIMIT 0, 4";
    return pdo_query($sql);
}
function phim_select_dgchieu()
{
    $sql = "SELECT phim.id, phim.ten_phim, phim.img_phim, phim.mota, phim.nsx, phim.nph, phim.view ,phim.quocgia,phim.dienvien1,phim.dienvien2,phim.dienvien3, loai_phim.ten_loaiphim FROM phim JOIN loai_phim ON phim.id_loaiphim = loai_phim.id LIMIT 0, 3";
    return pdo_query($sql);
}

function phim_select_keyword($key, $category_id)
{
    $sql = "SELECT phim.id, phim.ten_phim, phim.img_phim, phim.mota, phim.nsx, phim.nph, phim.view ,phim.view,phim.quocgia,phim.dienvien1,phim.dienvien2,phim.dienvien3, loai_phim.ten_loaiphim FROM phim LEFT JOIN loai_phim ON phim.id_loaiphim = loai_phim.id Where 1";
    // return pdo_query($sql);
    if ($key != "") {
        $sql .= " and ten_phim like '%" . $key . "%'";
    }
    if ($category_id > 0) {
        $sql .= " and id_loaiphim  like '" . $category_id . "'";
    }
    $sql .= " order by id desc";
    $listkey = pdo_query($sql);
    return $listkey;
}

function phim_search_keyword($key)
{
    $sql = "SELECT phim.id, phim.ten_phim, phim.img_phim, phim.mota, phim.nsx, phim.nph, phim.view ,phim.view,phim.quocgia,phim.dienvien1,phim.dienvien2,phim.dienvien3, loai_phim.ten_loaiphim FROM phim LEFT JOIN loai_phim ON phim.id_loaiphim = loai_phim.id Where 1";
    // return pdo_query($sql);
    if ($key != "") {
        $sql .= " and ten_phim like '%" . $key . "%' or ten_loaiphim like '%" . $key . "%'";
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

function load_ve_phim($id, $id_xuatchieu, $id_khunggio){
    $sql = "SELECT phim.img_phim, phim.ten_phim, xuat_chieu.ngay_chieu,khung_gio_chieu.gio_chieu  FROM phim INNER JOIN xuat_chieu ON phim.id = xuat_chieu.id_phim INNER JOIN khung_gio_chieu ON xuat_chieu.id = khung_gio_chieu.id_xuat_chieu WHERE phim.id = '$id' AND xuat_chieu.id='$id_xuatchieu' AND khung_gio_chieu.id = '$id_khunggio'";
    return pdo_query_one($sql);
}
// function phim_exist($ma_hh){
//     $sql = "SELECT count(*) FROM hang_hoa WHERE ma_hh=?";
//     return pdo_query_value($sql, $ma_hh) > 0;
// }

// function phim_tang_so_luot_xem($ma_hh){
//     $sql = "UPDATE hang_hoa SET so_luot_xem = so_luot_xem + 1 WHERE ma_hh=?";
//     pdo_execute($sql, $ma_hh);
// }

// function phim_select_top10(){
//     $sql = "SELECT * FROM hang_hoa WHERE so_luot_xem > 0 ORDER BY so_luot_xem DESC LIMIT 0, 10";
//     return pdo_query($sql);
// }

// function hang_hoa_select_dac_biet(){
//     $sql = "SELECT * FROM hang_hoa WHERE dac_biet=1";
//     return pdo_query($sql);
// }

// function phim_select_by_loai($ma_loai){
//     $sql = "SELECT * FROM hang_hoa WHERE ma_loai=?";
//     return pdo_query($sql, $ma_loai);
// }

// function hang_hoa_select_keyword($keyword){
//     $sql = "SELECT * FROM hang_hoa hh "
//             . " JOIN loai lo ON lo.ma_loai=hh.ma_loai "
//             . " WHERE ten_hh LIKE ? OR ten_loai LIKE ?";
//     return pdo_query($sql, '%'.$keyword.'%', '%'.$keyword.'%');
// }

// function hang_hoa_select_page(){
//     if(!isset($_SESSION['page_no'])){
//         $_SESSION['page_no'] = 0;
//     }
//     if(!isset($_SESSION['page_count'])){
//         $row_count = pdo_query_value("SELECT count(*) FROM hang_hoa");
//         $_SESSION['page_count'] = ceil($row_count/10.0);
//     }
//     if(exist_param("page_no")){
//         $_SESSION['page_no'] = $_REQUEST['page_no'];
//     }
//     if($_SESSION['page_no'] < 0){
//         $_SESSION['page_no'] = $_SESSION['page_count'] - 1;
//     }
//     if($_SESSION['page_no'] >= $_SESSION['page_count']){
//         $_SESSION['page_no'] = 0;
//     }
//     $sql = "SELECT * FROM hang_hoa ORDER BY ma_hh LIMIT ".$_SESSION['page_no'].", 10";
//     return pdo_query($sql);
// }