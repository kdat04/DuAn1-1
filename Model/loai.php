<?php
require_once 'pdo.php';

function loai_insert($ten_loaiphim){
    $sql = "INSERT INTO `loai_phim` (`id`, `ten_loaiphim`) VALUES (NULL, '$ten_loaiphim')";
    pdo_execute($sql);
}

function loai_update($ma_loai, $ten_loaiphim){
    $sql = "UPDATE loai_phim SET ten_loaiphim=? WHERE id=?";
    pdo_execute($sql, $ten_loaiphim, $ma_loai);
}

function check_theloai($ten_loaiphim)
{
    $sql = "SELECT ten_loaiphim FROM loai_phim WHERE ten_loaiphim = '$ten_loaiphim'";
    return pdo_query_one($sql);
}

function loai_delete($ma_loai){
    $sql = "DELETE FROM `loai_phim` WHERE id=?";
    if(is_array($ma_loai)){
        foreach ($ma_loai as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $ma_loai);
    }
}

function loai_select_all(){
    $sql = "SELECT * FROM loai_phim";
    return pdo_query($sql);
}

function loai_select_by_id($ma_loai){
    $sql = "SELECT * FROM loai_phim WHERE id=?";
    return pdo_query_one($sql, $ma_loai);
}

function loai_search_keyword($key){
    $sql = 'SELECT * FROM loai_phim WHERE 1';
    if ($key != "") {
        $sql .= " and ten_loaiphim like '%" . $key . "%'";
    }
    return pdo_query($sql);
}
// function loai_exist($ma_loai){
//     $sql = "SELECT count(*) FROM loai WHERE ma_loai=?";
//     return pdo_query_value($sql, $ma_loai) > 0;
// }