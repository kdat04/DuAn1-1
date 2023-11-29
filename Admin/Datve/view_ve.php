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
                                            <th style="width: 150px;">Id Vé</th>
                                            <th style="width: 200px;">Giá Vé</th>
                                            <th style="width: 200px;">Ngày Đặt</th>
                                            <th style="width: 200px;">Ghế</th>
                                            <th style="width: 200px;">Tến Khách Hàng</th>
                                            <th style="width: 200px;">Khung Giờ Chiếu</th>
                                            <th style="width: 200px;">ID Bill</th>
                                            <th style="width: 200px;">Trạng Thái Vé</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <?php foreach ($listve as $ve) : ?>
                                                <tr>
                                                    <td><?= $ve['id'] ?></td>
                                                    <td><?= $ve['gia_ve'] ?></td>
                                                    <td><?= $ve['ngay_dat'] ?></td>
                                                    <td><?= $ve['ghe'] ?></td>
                                                    <td><?= $ve['ten_user'] ?></td>
                                                    <td><?= $ve['gio_chieu'] ?></td>
                                                    <td><?= $ve['id_bill'] ?></td>
                                                    <td><?= $ve['tt_ve'] ?></td>
                                                </tr>
                                            <?php endforeach ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th style="width: 150px;">Id Vé</th>
                                            <th style="width: 200px;">Giá Vé</th>
                                            <th style="width: 200px;">Ngày Đặt</th>
                                            <th style="width: 200px;">Ghế</th>
                                            <th style="width: 200px;">Tến Khách Hàng</th>
                                            <th style="width: 200px;">Khung Giờ Chiếu</th>
                                            <th style="width: 200px;">ID Bill</th>
                                            <th style="width: 200px;">Trạng Thái Vé</th>
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