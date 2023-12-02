<?php
require_once 'pdo.php';

// function binh_luan_insert($ma_kh, $ma_hh, $noi_dung, $ngay_bl){
//     $sql = "INSERT INTO binh_luan(ma_kh, ma_hh, noi_dung, ngay_bl) VALUES (?,?,?,?)";
//     pdo_execute($sql, $ma_kh, $ma_hh, $noi_dung, $ngay_bl);
// }

// function binh_luan_update($ma_bl, $ma_kh, $ma_hh, $noi_dung, $ngay_bl){
//     $sql = "UPDATE binh_luan SET ma_kh=?,ma_hh=?,noi_dung=?,ngay_bl=? WHERE ma_bl=?";
//     pdo_execute($sql, $ma_kh, $ma_hh, $noi_dung, $ngay_bl, $ma_bl);
// }

// function binh_luan_delete($ma_bl){
//     $sql = "DELETE FROM binh_luan WHERE ma_bl=?";
//     if(is_array($ma_bl)){
//         foreach ($ma_bl as $ma) {
//             pdo_execute($sql, $ma);
//         }
//     }
//     else{
//         pdo_execute($sql, $ma_bl);
//     }
// }

// function binh_luan_select_all(){
//     $sql = "SELECT * FROM binh_luan bl ORDER BY ngay_bl DESC";
//     return pdo_query($sql);
// }

// function binh_luan_select_by_id($ma_bl){
//     $sql = "SELECT * FROM binh_luan WHERE ma_bl=?";
//     return pdo_query_one($sql, $ma_bl);
// }

// function binh_luan_exist($ma_bl){
//     $sql = "SELECT count(*) FROM binh_luan WHERE ma_bl=?";
//     return pdo_query_value($sql, $ma_bl) > 0;
// }
// //-------------------------------//
// function binh_luan_select_by_hang_hoa($ma_hh){
//     $sql = "SELECT b.*, h.ten_hh FROM binh_luan b JOIN hang_hoa h ON h.ma_hh=b.ma_hh WHERE b.ma_hh=? ORDER BY ngay_bl DESC";
//     return pdo_query($sql, $ma_hh);
// }
function binh_luan_insert($noidung, $id_user, $id_phim, $timebl)
{
    $sql = "INSERT INTO `binhluan` (`id`, `noidung`, `id_user`, `id_phim`, `timebl`) VALUES (NULL, '$noidung', '$id_user', '$id_phim', '$timebl')";
    pdo_execute($sql);
}

function binh_luan_select_all($id_phim)
{
    // $sql = "SELECT binhluan.noidung, binhluan.timebl ,phim.id  FROM binhluan INNER JOIN phim ON phim.id = binhluan.id_phim where phim.id = '$id_phim'";
    $sql = "SELECT binhluan.noidung, binhluan.timebl ,phim.id,  users.ten_user FROM binhluan INNER JOIN phim ON phim.id = binhluan.id_phim INNER JOIN users ON users.id = binhluan.id_user WHERE binhluan.id_phim = '$id_phim'";
    return pdo_query($sql);
}
function binhluan_select_all()
{
    $sql = "SELECT binhluan.id, binhluan.noidung, binhluan.id_user, binhluan.id_phim, binhluan.timebl, users.ten_user, phim.ten_phim FROM binhluan INNER JOIN phim ON phim.id = binhluan.id_phim INNER JOIN users ON users.id = binhluan.id_user";
    $listbl = pdo_query($sql);
    return $listbl;
}
function delete_bl($id)
{
    $sql = "DELETE FROM binhluan WHERE id='$id'";
    pdo_execute($sql);
}
