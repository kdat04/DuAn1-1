<div>
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Bảng quản lý phim</h5>
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 150px;">Id Phim</th>
                                            <th>Tên Phim</th>
                                            <th style="width: 200px;">Ảnh</th>
                                            <th>Giá</th>
                                            <th>Ngày Phát Hành</th>
                                            <th style="width: 100px;"></th>
                                            <th style="width: 100px;"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($ds_phim as $phim) : ?>
                                            <tr>
                                                <td><?= $phim['id'] ?></td>
                                                <td><?= $phim['ten_phim'] ?></td>
                                                <td><img src=".././View/IMG_FILM/<?= $phim['img_phim'] ?>" alt="" width="50px"></td>
                                                <td><?= $phim['gia'] ?></td>
                                                <td><?= $phim['nph'] ?></td>
                                                <td>
                                                    <button class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa sản phẩm không ?')">
                                                        <a style="color: white;" href="index.php?action=&act=xoa_phim&id=<?= $phim['id'] ?>">Xoá</a>
                                                    </button>
                                                </td>
                                                <td><button class="btn btn-info" onclick="return confirm('Bạn có muốn sửa sản phẩm không ?')">
                                                        <a style="color: white;" href="index.php?action=&act=sua_phim&id=<?= $phim['id'] ?>">Sửa</a>
                                                    </button>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Id Phim</th>
                                            <th>Tên Phim</th>
                                            <th>Ảnh</th>
                                            <th>Giá</th>
                                            <th>Ngày Phát Hành</th>
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
                <a href="./index.php?action=&act=add_phim" style="color: white;">Thêm phim</a>
            </div>
        </div>
    </div>
</div>