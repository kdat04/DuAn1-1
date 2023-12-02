<?php
if (is_array($user)) {
    extract($user);
}
?>
<div>
    <div class="page-wrapper">
        <div class="card">
            <form class="form-horizontal" action="index.php?action=&act=up_user" method="post">
                <div class="card-body" style="width: 1000px;">
                    <h4 class="card-title">Sửa tài khoản</h4>
                    <div style="font-weight: 400; font-size: 20px; ; color: black;">
                        <?php
                        if (isset($message) && ($message != ""))
                            echo $message;
                        ?>
                    </div><br>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label"> Tên User</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="ten_user" id="lname" placeholder="Tên User" value="<?php if (isset($ten_user) && ($ten_user != "")) echo $ten_user ?>" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label"> Só điện thoại</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="sdt" id="lname" placeholder="Số điện thoai" value="<?php if (isset($sdt) && ($sdt != "")) echo $sdt ?>" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label"> Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" name="email" id="lname" placeholder="Email" value="<?php if (isset($email) && ($email != "")) echo $email ?>" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label"> Địa chỉ</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="diachi" id="lname" placeholder="Địa chỉ" value="<?php if (isset($diachi) && ($diachi != "")) echo $diachi ?>" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label"> Nam sinh</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="nam_sinh" id="lname" placeholder="Năm sinh" value="<?php if (isset($nam_sinh) && ($nam_sinh != "")) echo $nam_sinh ?>" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label"> Vai trò</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="role" id="lname" placeholder="Vai trò" value="<?php if (isset($role) && ($role != "")) echo $role ?>">
                        </div>
                    </div>
                </div>
                <div class="border-top">
                    <div class="card-body" style="margin-bottom: 50px;">
                        <input type="hidden" name="id" id="" value="<?= $user['id'] ?>">
                        <input type="submit" name="capnhat" class="btn btn-primary" value="Gửi dữ liệu">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>