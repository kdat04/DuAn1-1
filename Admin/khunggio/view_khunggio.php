<div>
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Bảng quản Khung giờ chiếu phim</h5>
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 150px;">Id Khung giờ chiếu</th>
                                            <th style="width: 200px;">Khung giờ chiếu</th>
                                            <th style="width: 200px;">Xuất chiếu</th>
                                            <th style="width: 300px;">Tên phim</th>
                                            <!-- <th style="width: 300px;">Phòng chiếu</th> -->
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($list_khunggio as $khunggio) : ?>
                                            <tr>
                                                <td><?= $khunggio['id'] ?></td>
                                                <td><?= $khunggio['gio_chieu'] ?></td>
                                                <td><?= $khunggio['ngay_chieu'] ?></td>
                                                <td><?= $khunggio['ten_phim'] ?></td>
                                               
                                                <td><button class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa khung giờ chiếu không ?')">
                                                        <a style="color: white;" href="index.php?action=&act=xoa_khunggio&id=<?= $khunggio['id']  ?>">Xoá</a>
                                                    </button>
                                                </td>
                                                <td><button class="btn btn-info" onclick="return confirm('Bạn có muốn sửa khung giờ chiếu không ?')">
                                                        <a style="color: white;" href="index.php?action=&act=sua_khunggio&id=<?= $khunggio['id'] ?>">Sửa</a>
                                                    </button>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th style="width: 150px;">Id Khung giờ chiếu</th>
                                            <th style="width: 100px;">Khung giờ chiếu</th>
                                            <th style="width: 100px;">Xuất chiếu</th>
                                            <th style="width: 300px;">Tên phim</th>
                                           
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
                <a href="./index.php?action=&act=add_khunggio" style="color: white;">Thêm Khung giờ chiếu</a>
            </div>
            <?php
            if (isset($message) && ($message != ""))
                echo $message;
            ?>
        </div>
    </div>
</div>