<div>
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Bảng thống kê</h5>
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 50px;">Id Danh Mục </th>
                                            <th>Tên Danh Mục Phim</th>
                                            <th>Số Lượng </th>
                                            <th>Giá Cao Nhất </th>
                                            <th>Giá Thấp nhất </th>
                                            <th>Giá Trung Bình </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($listtk_phim as $list) : ?>
                                            <tr>
                                                <td><?= $list['id'] ?></td>
                                                <td><?= $list['ten_loaiphim'] ?></td>
                                                <td><?= $list['countphim'] ?></td>
                                                <td><?= $list['mingia'] ?></td>
                                                <td><?= $list['maxgia'] ?></td>
                                                <td><?= $list['avggia'] ?></td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th style="width: 50px;">Id Danh Mục </th>
                                            <th>Tên Danh Mục Phim</th>
                                            <th>Số Lượng </th>
                                            <th>Giá Cao Nhất </th>
                                            <th>Giá Thấp nhất </th>
                                            <th>Giá Trung Bình </th>
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

                                            $tongdm = count($listtk_phim);
                                            $dem = 0;
                                            foreach ($listtk_phim as $list) {
                                                if ($dem == $tongdm) {
                                                    $dau = '';
                                                } else {
                                                    $dau = ',';
                                                }
                                                echo "['" . $list['ten_loaiphim'] . "'," . $list['countphim'] . "]" . $dau . "";
                                            }
                                            ?>
                                        ]);

                                        // Set Options
                                        const options = {
                                            title: 'Biểu đồ thống kê sản phẩm'
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