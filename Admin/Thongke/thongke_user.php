<style>
    .tong_dt {
        position: absolute;
        top: 100px;
        left: 300px;
        display: flex;
        align-items: center;


    }

    .tong_dt1 {
        display: flex;
        gap: 30px;
    }

    .tong_dt1 span {
        background-color: rgb(255, 177, 32);
        padding: 10px;
        border-radius: 10px;
        color: white;
        font-weight: 700;
        border: 1px solid rgb(238, 174, 54);
    }
</style>
<div>
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Bảng thống kê User</h5>
                            <div class="tong_dt">
                                <div class="tong_dt1">
                                    <span>
                                        Tổng Admin : <?php foreach ($list_tong_ad as $list) : ?>
                                            <?= $list['tong_ad'] ?>
                                        <?php endforeach ?>
                                    </span><br><br>

                                    <span>
                                        Tổng khách hàng : <?php foreach ($list_tong_user as $list) : ?>
                                            <?= $list['tong_user'] ?>
                                        <?php endforeach ?>
                                    </span><br><br>
                                    <span>
                                        Tổng nhân viên : <?php foreach ($list_tong_nv as $list) : ?>
                                            <?= $list['tong_nv'] ?>
                                        <?php endforeach ?>
                                    </span>
                                </div>

                            </div>
                            <div class="btn_dieuhuong btn btn-success">
                                <a href="./index.php?action=&act=thongke_doanh_thu" style="color: white;">Doanh Thu</a>
                            </div>
                            <div class="btn_dieuhuong btn btn-success">
                                <a href="./index.php?action=&act=thongke" style="color: white;">Phim </a>
                            </div>
                            <div class="btn_dieuhuong btn btn-success">
                                <a href="./index.php?action=&act=thongke_bl" style="color: white;">Bình luận </a>
                            </div>
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">

                                    <thead>
                                        <tr>
                                            <th style="width: 50px;">Id user </th>
                                            <th>Tên User</th>
                                            <th>Vai Trò </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($listtk_phim as $list) : ?>
                                            <tr>
                                                <td><?= $list['id'] ?></td>
                                                <td><?= $list['user'] ?></td>
                                                <td><?php if ($list['role'] == 1) {
                                                        echo "Admin";
                                                    } else if ($list['role'] == 0) {
                                                        echo "Khách hàng";
                                                    } else {
                                                        echo "Nhân viên ";
                                                    } ?></td>

                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th style="width: 50px;">Id user </th>
                                            <th>Tên User</th>

                                            <th>Vai Trò </th>
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
                                                echo "['" . $list['user'] . "'," . $list['countuser'] . "]" . $dau . "";
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