<div>
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Bảng thống kê</h5>



                            <div class="btn_dieuhuong btn btn-success">
                                <a href="./index.php?action=&act=thongke" style="color: white;">Thống kê </a>
                            </div>
                            <div class="btn_dieuhuong btn btn-success">
                                <a href="./index.php?action=&act=thongke_bl" style="color: white;">Bình luận </a>
                            </div>
                            <div class="btn_dieuhuong btn btn-success">
                                <a href="./index.php?action=&act=thongke_user" style="color: white;">User </a>
                            </div>

                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <div class="thong_ke">
                                        <form class="search_phim" action="index.php?action=&act=thongke_doanh_thu" method="post">
                                            <label for="thang">Thống Kê Theo Tháng</label>
                                            <select class="thongke_thang" name="thang" id="thang">
                                                <option value="0" hidden>Tất cả</option>
                                                <option value="1">Tháng 1</option>
                                                <option value="2">Tháng 2</option>
                                                <option value="3">Tháng 3</option>
                                                <option value="4">Tháng 4</option>
                                                <option value="5">Tháng 5</option>
                                                <option value="6">Tháng 6</option>
                                                <option value="7">Tháng 7</option>
                                                <option value="8">Tháng 8</option>
                                                <option value="9">Tháng 9</option>
                                                <option value="10">Tháng 10</option>
                                                <option value="11">Tháng 11</option>
                                                <option value="12">Tháng 12</option>
                                            </select>
                                            <input class="btn btn-primary" type="submit" name="listseacher" value="Gửi">
                                        </form>

                                    </div>
                                    <div class="tong_dt2">
                                        <label>Tổng Doanh Thu</label>
                                        <span>
                                            <?php foreach ($list_tong_dt as $list) : ?>
                                                <?= number_format($list['tong_dt'], 0, ",", ".") ?> VND
                                            <?php endforeach ?>
                                        </span>
                                    </div>
                                    <thead>
                                        <tr>
                                            <th style="width: 50px;">Id Phim </th>
                                            <th>Tên Phim</th>
                                            <th>Thể Loại </th>
                                            <th>Số Lượng Vé Đặt</th>
                                            <th>Doanh Thu</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($listtk_doanh_thu as $list) : ?>
                                            <?php if($list['sum_thanhtien'] != 0):?>
                                            <tr>
                                                <td><?= $list['id'] ?></td>
                                                <td><?= $list['ten_phim'] ?></td>
                                                <td><?= $list['ten_loaiphim'] ?></td>
                                                <td><?= $list['so_luong_ve_dat'] ?></td>
                                                <td><?= number_format($list['sum_thanhtien'], 0, ",", ".") ?> VND</td>
                                            </tr>
                                            <?php endif ?>
                                        <?php endforeach ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th style="width: 50px;">Id Phim </th>
                                            <th>Tên Phim</th>
                                            <th>Thể Loại </th>
                                            <th>Số Lượng Vé Đặt</th>
                                            <th>Doanh Thu</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div style="display: flex;">
                                <div class="table-responsive">
                                    <div id="myChart" style="width:500px; max-width:600px; height:500px; overflow: hidden;">
                                    </div>

                                    <script src="https://www.gstatic.com/charts/loader.js"></script>
                                    <script>
                                        google.charts.load('current', {
                                            'packages': ['corechart']
                                        });
                                        google.charts.setOnLoadCallback(drawChart);

                                        function drawChart() {

                                            // Set Data
                                            const data = google.visualization.arrayToDataTable([
                                                ['Danh mục', 'Số lượng sản phẩm'],
                                                <?php

                                                $tongdoanhthu = count($listtk_doanh_thu);
                                                $dem = 0;
                                                foreach ($listtk_doanh_thu as $list) {
                                                    if ($dem == $tongdoanhthu) {
                                                        $dau = '';
                                                    } else {
                                                        $dau = ',';
                                                    }
                                                    echo "['" . $list['ten_phim'] . "'," . $list['so_luong_ve_dat'] . "]" . $dau . "";
                                                }
                                                ?>
                                            ]);

                                            // Set Options
                                            const options = {
                                                title: 'Biểu đồ thống kê'
                                            };

                                            // Draw
                                            const chart = new google.visualization.PieChart(document.getElementById('myChart'));
                                            chart.draw(data, options);

                                        }
                                    </script>
                                </div>
                                <div class="table-responsive">
                                    <div id="myPlot" style="width:100%;max-width:700px"></div>
                                    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
                                    <script>
                                        const xArray = ["Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6", "Tháng 7", "Tháng 8", "Tháng 9", "Tháng 10", "Tháng 11", "Tháng 12"];
                                        <?php $dem = 0 ?>
                                        const yArray = [<?php foreach ($list_bieudo as $list) : ?>
                                                <?php if ($dem == 12) {
                                                                $dau = '';
                                                            } else {
                                                                $dau = ',';
                                                            } ?>
                                                <?= $list['tong_dt'] . $dau ?>
                                            <?php endforeach ?>
                                        ];

                                        const data = [{
                                            x: xArray,
                                            y: yArray,
                                            type: "bar"
                                        }];

                                        const layout = {
                                            title: "Biểu đồ thống kê doanh thu theo tháng"
                                        };

                                        Plotly.newPlot("myPlot", data, layout);
                                    </script>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>