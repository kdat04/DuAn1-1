<div>
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Bảng quản lý bình luận</h5>
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th style="width: 150px;">Id bình luận</th>
                                            <th style="width: 200px;">Nội dung bình luận</th>
                                            <th style="width: 200px;">Tên User</th>
                                            <th style="width: 200px;">Id Phim</th>
                                            <th style="width: 200px;">Ngày bình luận</th>
                                            <th style="width: 100px;"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($listbl as $bl) : ?>
                                            <tr>
                                                <td><input type="checkbox" name="" id="" /></td>
                                                <td ><?= $bl['id'] ?></td>
                                                <td><?= $bl['noidung'] ?></td>
                                                <td><?= $bl['ten_user'] ?></td>
                                                <td><?= $bl['id_phim'] ?></td>
                                                <td><?= $bl['timebl'] ?></td>
                                                <td>
                                                    <center style="margin-top: 7px;">
                                                        <button class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa sản Bình luận không ?')">
                                                            <a style="color: white;" href="index.php?action=&act=xoa_binhluan&id=<?= $bl['id'] ?>">Xoá</a>
                                                        </button>
                                                    </center>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th></th>
                                            <th style="width: 150px;">Id bình luận</th>
                                            <th style="width: 200px;">Nội dung bình luận</th>
                                            <th style="width: 200px;">Tên User</th>
                                            <th style="width: 200px;">Id Phim</th>
                                            <th style="width: 200px;">Ngày bình luận</th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>