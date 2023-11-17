<?php
require_once 'pdo.php';

function  phim_insert($ten_phim, $gia, $img_phim, $mota,  $nsx, $nph, $id_loaiphim)
{
    $sql = "INSERT INTO `phim` (`id`, `ten_phim`, `gia`, `img_phim`, `mota`, `nsx`, `nph`, `id_loaiphim`) VALUES (NULL, ?,?,?,?,?,?,?);";
    pdo_execute($sql, $ten_phim, $gia, $img_phim, $mota, $nsx, $nph,  $id_loaiphim);
}

function phim_update($id, $ten_phim, $gia, $img_phim, $mota, $nsx, $nph, $id_loaiphim)
{
    $sql = "UPDATE phim SET ten_phim=?,gia=?,img_phim=?,mota=?,nsx=?,nph=?,id_loaiphim=? WHERE id=?";
    pdo_execute($sql, $ten_phim, $gia, $img_phim, $mota, $nsx, $nph, $id_loaiphim, $id);
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
    $sql = "SELECT phim.id, phim.ten_phim, phim.gia, phim.img_phim, phim.mota, phim.nsx, phim.nph, phim.view,phim.id_loaiphim loai_phim.ten_loaiphim FROM phim LEFT JOIN loai_phim ON phim.id_loaiphim = loai_phim.id WHERE phim.id = ?";
    return pdo_query_one($sql, $ma_hh);
}


function phim_select_all()
{
    $sql = "SELECT phim.id, phim.ten_phim, phim.gia, phim.img_phim, phim.mota, phim.nsx, phim.nph, phim.view , loai_phim.ten_loaiphim FROM phim LEFT JOIN loai_phim ON phim.id_loaiphim = loai_phim.id";
    return pdo_query($sql);
}

function phim_select_keyword($key, $category_id)
{
    $sql = "SELECT phim.id, phim.ten_phim, phim.gia, phim.img_phim, phim.mota, phim.nsx, phim.nph, phim.view , loai_phim.ten_loaiphim FROM phim LEFT JOIN loai_phim ON phim.id_loaiphim = loai_phim.id Where 1";
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

function vovan(){
    $sql = "DELETE FROM phim WHERE id=?";
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