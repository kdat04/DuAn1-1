<?php
require_once 'pdo.php';

function khach_hang_insert($ten_user, $mat_khau, $email)
{
    $sql = "INSERT INTO `users` (`id`, `ten_user`, `matkhau`, `email`, `role`) VALUES (NULL, ?,?,?,1)";
    pdo_execute($sql, $ten_user, $mat_khau, $email);
}

function khach_hang_insert_nd($ten_user, $mat_khau, $email)
{
    $sql = "INSERT INTO `users` (`id`, `ten_user`, `matkhau`, `email`, `role`) VALUES (NULL, ?,?,?,0)";
    pdo_execute($sql, $ten_user, $mat_khau, $email);
}
function khach_hang_insert2($ten_user, $matkhau, $email, $diachi, $nam_sinh, $role, $sdt)
{
    $sql = "INSERT INTO `users` (`id`, `ten_user`, `matkhau`, `email`, `diachi`, `nam_sinh`, `role`, `sdt`) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?)";
    pdo_execute($sql, $ten_user, $matkhau, $email, $diachi, $nam_sinh, $role, $sdt);
}
function check_users($email, $matkhau)
{
    $sql = "SELECT * FROM users WHERE email ='" . $email . "'AND matkhau ='" . $matkhau . "'";
    $user = pdo_query_one($sql);
    return $user;
}

function check_email($email)
{
    $sql = "SELECT email FROM users WHERE email ='" . $email . "'";
    $user = pdo_query_one($sql);
    return $user;
}
function khach_hang_update($id, $ten_user, $matkhau, $email, $diachi, $nam_sinh, $role, $sdt)
{
    $sql = "UPDATE users SET ten_user='$ten_user', matkhau='$matkhau', email='$email', diachi='$diachi', nam_sinh='$nam_sinh', role ='$role', sdt='$sdt' WHERE id='$id'";
    pdo_execute($sql);
}

function upd_pass($idkh, $pass_new)
{
    $sql = "UPDATE users SET matkhau = '$pass_new' WHERE id='$idkh' ";
    pdo_execute($sql);
}

function upd_pass_qmk($email, $pass_new)
{
    $sql = "UPDATE users SET matkhau = '$pass_new' WHERE email ='" . $email . "'";
    pdo_execute($sql);
}
function khach_hang_update2($id, $role)
{
    $sql = "UPDATE users SET  role ='$role' WHERE id='$id'";
    pdo_execute($sql);
}

function user_delete($id)
{
    $sql = "DELETE FROM users WHERE id='$id'";
    pdo_execute($sql);
}

function users_select_all()
{
    $sql = "SELECT * FROM users";
    return pdo_query($sql);
}

function khach_hang_select_by_id($id)
{
    $sql = "SELECT * FROM users WHERE id=?";
    return pdo_query_one($sql, $id);
}

function khach_hang_update_thongtin($id, $diachi, $sdt, $email, $ngaysinh)
{
    $sql = "UPDATE users SET email='$email', diachi='$diachi', nam_sinh='$ngaysinh', sdt='$sdt' WHERE id='$id'";
    pdo_execute($sql);
}

function tk_search_keyword($key){
    $sql = 'SELECT * FROM users WHERE 1 AND role = 0 ';
    if ($key != "") {
        $sql .= " and email like '%" . $key . "%'";
    }
    return pdo_query($sql);
}
// function khach_hang_exist($ma_kh){
//     $sql = "SELECT count(*) FROM khach_hang WHERE $ma_kh=?";
//     return pdo_query_value($sql, $ma_kh) > 0;
// }

// function khach_hang_select_by_role($vai_tro){
//     $sql = "SELECT * FROM khach_hang WHERE vai_tro=?";
//     return pdo_query($sql, $vai_tro);
// }

// function khach_hang_change_password($ma_kh, $mat_khau_moi){
//     $sql = "UPDATE khach_hang SET mat_khau=? WHERE ma_kh=?";
//     pdo_execute($sql, $mat_khau_moi, $ma_kh);
// }