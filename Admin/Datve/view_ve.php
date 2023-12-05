<div>
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Bảng quản lý Vé</h5>
                            <div class="table-responsive">
                                <form class="search_phim" action="index.php?action=&act=ve" method="post">
                                    <input type="text" name="kyw" placeholder="Tra cứu theo Tên Khách Hàng ">
                                    <input class="btn btn-primary" type="submit" name="listseacher" value="Gửi">
                                </form>
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 150px;">Id Vé</th>
                                            <th style="width: 200px;">Tến Khách Hàng</th>
                                            <th style="width: 200px;">Phim</th>
                                            <th style="width: 200px;">Giá Vé</th>
                                            <th style="width: 200px;">Ghế</th>
                                            <th style="width: 200px;">Xuất Chiếu</th>
                                            <th style="width: 200px;">Khung Giờ Chiếu</th>
                                            <th style="width: 200px;">Phòng Chiếu</th>
                                            <th style="width: 200px;">Ngày Đặt</th>
                                            <th style="width: 200px;">Trạng Thái Vé</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($listve as $ve) : ?>
                                            <tr>
                                                <td><?= $ve['id'] ?></td>
                                                <td><?= $ve['ten_user'] ?></td>
                                                <td><?= $ve['ten_phim'] ?></td>
                                                <td> <?= number_format($ve['gia_ve'], 0, ",", ".") ?> VND</td>
                                                <td><?= $ve['ghe_ngoi'] ?></td>
                                                <td><?= $ve['ngay_chieu'] ?></td>
                                                <td><?= $ve['gio_chieu'] ?></td>
                                                <td><?= $ve['phong_phim'] ?></td>
                                                <td><?= $ve['ngay_dat'] ?></td>
                                                <td><?php if ($ve['tt_ve'] == 0) echo 'Chưa thanh toán';
                                                    else  echo 'Đã thanh toán'; ?></td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th style="width: 150px;">Id Vé</th>
                                            <th style="width: 200px;">Tến Khách Hàng</th>
                                            <th style="width: 200px;">Phim</th>
                                            <th style="width: 200px;">Giá Vé</th>
                                            <th style="width: 200px;">Ghế</th>
                                            <th style="width: 200px;">Xuất Chiếu</th>
                                            <th style="width: 200px;">Khung Giờ Chiếu</th>
                                            <th style="width: 200px;">Phòng Chiếu</th>
                                            <th style="width: 200px;">Ngày Đặt</th>
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