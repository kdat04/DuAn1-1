<div>
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Bảng quản Xuất chiếu phim</h5>
                            <?php
                            if (isset($message) && ($message != ""))
                                echo $message;
                            ?>
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 150px;">Id Xuất chiếu</th>
                                            <th style="width: 100px;">Xuất chiếu</th>
                                            <th style="width: 300px;">Tên phim</th>
                                            <th style="width: 300px;">Ảnh phim</th>
                                            <th></th>
                                            <!-- <th style="width: 300px;">Phòng chiếu</th> -->
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($list_xuatchieu as $xuatchieu) : ?>
                                            <tr>
                                                <td><?= $xuatchieu['id'] ?></td>
                                                <td><?= $xuatchieu['ngay_chieu'] ?></td>
                                                <td><?= $xuatchieu['ten_phim'] ?></td>
                                                <td><img src="./Img_ad/<?= $xuatchieu['img_phim'] ?>" alt="" width="100px"></td>

                                                <td>
                                                    <button class="btn btn-success">
                                                        <a style="width:; color: white;" href="index.php?action=&act=add_khunggio&id_xc=<?= $xuatchieu['id'] ?>">Thêm xuất khung giờ chiếu </a>
                                                    </button>
                                                </td>
                                                <td><button class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa xuất chiếu không ?')">
                                                        <a style="color: white;" href="index.php?action=&act=xoa_xuatchieu&id=<?= $xuatchieu['id'] ?>">Xoá</a>
                                                    </button>
                                                </td>
                                                <td><button class="btn btn-info" onclick="return confirm('Bạn có muốn sửa xuất chiếu không ?')">
                                                        <a style="color: white;" href="index.php?action=&act=sua_xuatchieu&id=<?= $xuatchieu['id'] ?>">Sửa</a>
                                                    </button>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th style="width: 150px;">Id Xuất chiếu</th>
                                            <th style="width: 200px;">Xuất chiếu</th>
                                            <th style="width: 300px;">Tên phim</th>
                                            <th style="width: 300px;">Ảnh phim</th>
                                            <!-- <th style="width: 100px;">Phòng Chiếu</th> -->
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
            <!-- <div class="btn_dieuhuong btn btn-success">
                <a href="./index.php?action=&act=add_xuatchieu" style="color: white;">Thêm Xuất chiếu</a>
            </div> -->
        </div>
    </div>
</div>