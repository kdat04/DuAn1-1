<div>
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Bảng quản lý phim</h5>
                            <div class="table-responsive">
                                <form class="search_phim" action="index.php?action=&act=bill" method="post">
                                    <input type="text" name="kyw" placeholder="Tra cứu theo Tên Khách Hàng ">
                                    <input class="btn btn-primary" type="submit" name="listseacher" value="Gửi">
                                </form>
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 150px;">Id Bill</th>
                                            <th>Tên Khách Hàng</th>
                                            <th>Ngày Thanh Toán</th>
                                            <th style="width: 200px;">Trạng Thái Bill</th>
                                            <th>Giá Tiền </th>
                                            <th></th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($list_bill as $bill) : ?>
                                            <?php if ($bill['thanh_tien'] != 0) : ?>
                                                <tr>
                                                    <td><?= $bill['id'] ?></td>
                                                    <td><?= $bill['ten_user'] ?></td>
                                                    <td><?= $bill['ngay_tt'] ?></td>
                                                    <td><?php if ($bill['tt_bill'] == 1) echo 'Đã thanh toán';
                                                        else echo 'Chưa thanh toán' ?></td>
                                                    <td><?= number_format($bill['thanh_tien'], 0, ",", ".") ?>VND</td>
                                                    <td>
                                                        <button class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa sản phẩm không ?')">
                                                            <a style="color: white;" href="index.php?action=&act=xoa_bill&id=<?= $bill['id'] ?>">Xoá</a>
                                                        </button>
                                                    </td>

                                                </tr>
                                            <?php endif ?>
                                        <?php endforeach ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th style="width: 150px;">Id Bill</th>
                                            <th>Tên Khách Hàng</th>
                                            <th>Ngày Thanh Toán</th>
                                            <th style="width: 200px;">Trạng Thái Bill</th>
                                            <th>Giá Tiền </th>
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