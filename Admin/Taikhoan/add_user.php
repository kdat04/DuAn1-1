<div>
    <div class="page-wrapper">
        <div class="card">
            <form class="form-horizontal" action="index.php?action=&act=add_user" method="post">
                <div class="card-body" style="width: 1000px;">
                    <h4 class="card-title">Thêm mới tài khoản</h4>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Id User</label>
                        <div class="col-sm-9">
                            <input type="text" disabled class="form-control" id="fname" placeholder="Id User" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label"> Tên User</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="ten_user" id="lname" placeholder="Tên User">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label"> Só điện thoại</label>
                        <div class="col-sm-9">
                            <input type="text\" class="form-control" name="sdt" id="lname" placeholder="Số điện thoai">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label"> Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" name="email" id="lname" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label"> Mật khẩu</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" name="matkhau" id="lname" placeholder="Mật Khẩu">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label"> Địa chỉ</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="diachi" id="lname" placeholder="Địa chỉ">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label"> Nam sinh</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="nam_sinh" id="lname" placeholder="Năm sinh">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label"> Vai trò</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="role" id="lname" placeholder="Vai trò">
                        </div>
                    </div>
                </div>
                <div class="border-top">
                    <div class="card-body" style="margin-bottom: 50px;">
                        <input type="submit" name="themmoi" class="btn btn-primary" value="Gửi dữ liệu">
                    </div>
                </div>
                <div style="font-weight: 500; font-size: 20px; ; color: black;">
                    <?php
                    if (isset($message) && ($message != ""))
                        echo $message;
                    ?>
                </div><br>
            </form>
        </div>
    </div>
</div>