<div>
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Bảng thống kê</h5>
                            <div class="btn_dieuhuong btn btn-success">
                                <a href="./index.php?action=&act=thongke_doanh_thu" style="color: white;">Doanh Thu</a>
                            </div>
                            <div class="btn_dieuhuong btn btn-success">
                                <a href="./index.php?action=&act=thongke_bl" style="color: white;">Bình luận </a>
                            </div>
                            <div class="btn_dieuhuong btn btn-success">
                                <a href="./index.php?action=&act=thongke_user" style="color: white;">User </a>
                            </div>
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 50px;">Id Phim </th>
                                            <th>Tên Phim</th>
                                            <th>Quan Tâm </th>
                                            <th>Thể Loại </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($listtk_phim as $list) : ?>
                                            <tr>
                                                <td><?= $list['id'] ?></td>
                                                <td><?= $list['ten_phim'] ?></td>
                                                <td><?= $list['view'] ?></td>
                                                <td><?= $list['ten_loaiphim'] ?></td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th style="width: 50px;">Id Phim </th>
                                            <th>Tên Phim</th>
                                            <th>Quan Tâm </th>
                                            <th>Thể Loại </th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="table-responsive">
                                <div id="myChart" style="width:100%; max-width:600px; height:500px;">
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

                                            $tongphim = count($listtk_phim);
                                            $dem = 0;
                                            foreach ($listtk_phim as $list) {
                                                if ($dem == $tongphim) {
                                                    $dau = '';
                                                } else {
                                                    $dau = ',';
                                                }
                                                echo "['" . $list['ten_phim'] . "'," . $list['view'] . "]" . $dau . "";
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>