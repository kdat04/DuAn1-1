<div>
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Bảng quản tài khoản User</h5>
                            <?php
            if (isset($message) && ($message != ""))
                echo $message;
            ?>
                            <div class="table-responsive">
                            <form class="search_phim" action="index.php?action=&act=taikhoan" method="post">
                                    <input type="text" name="kyw" placeholder="Tra cứu theo Email">
                                    <input class="btn btn-primary" type="submit" name="listseacher" value="Gửi">
                                </form>
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 50px;">Id User</th>
                                            <th style="width: 200px;">Họ tên user</th>
                                            <th style="width: 100px;">Số điện thoại</th>
                                            <th style="width: 300px;">Email</th>
                                            <th style="width: 300px;">Địa chỉ</th>
                                            <th style="width: 150px;">Năm Sinh</th>
                                            <th style="width: 150px;">Vai trò</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($list_users as $user) : ?>
                                            <tr>
                                                <td><?= $user['id'] ?></td>
                                                <td><?= $user['ten_user'] ?></td>
                                                <td>0<?= $user['sdt'] ?></td>
                                                <td><?= $user['email'] ?></td>
                                                <td><?= $user['diachi'] ?></td>
                                                <td><?= $user['nam_sinh'] ?></td>
                                                <td><?php if($user['role'] == 0) echo 'Khách hàng'; elseif($user['role'] == 1) echo 'Admin'; else echo'Nhân viên'; ?></td>
                                                <td><button class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa User không ?')">
                                                        <a style="color: white;" href="index.php?action=&act=xoa_user&id=<?= $user['id'] ?>">Xoá</a>
                                                    </button>
                                                </td>
                                                <td><button class="btn btn-info" onclick="return confirm('Bạn có muốn sửa User không ?')">
                                                        <a style="color: white;" href="index.php?action=&act=sua_user&id=<?= $user['id'] ?>">Sửa</a>
                                                    </button>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th style="width: 0px;">Id User</th>
                                            <th style="width: 0px;">Họ tên user</th>
                                            <th style="width: 0px;">Số điện thoại</th>
                                            <th style="width: 0px;">Email</th>
                                            <th style="width: 0px;">Địa chỉ</th>
                                            <th style="width: 0px;">Năm Sinh</th>
                                            <th style="width: 0px;">Vai trò</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn_dieuhuong btn btn-success">
                <a href="./index.php?action=&act=add_user" style="color: white;">Thêm User</a>
            </div>
        </div>
    </div>
</div>