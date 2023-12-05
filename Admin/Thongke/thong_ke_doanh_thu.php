<style>
    .tong_dt {
        position: absolute;
        top: 100px;
        left: 300px;
        display: flex;
        align-items: center;
        

    }

    .tong_dt1 span {
       background-color:rgb(255, 177, 32);
       padding: 10px;
       border-radius: 10px 0 0 10px;
       color: white;
       font-weight: 700;
       border: 1px solid rgb(238, 174, 54);
    }
    .tong_dt2 span {
     border: 1px solid rgb(238, 174, 54);
       padding: 10px;
       padding-left: 30px;
       padding-right: 30px;
       width: 1000px;
       border-radius: 0 10px 10px 0;
       color: black;
       font-weight: 700;
    }
</style>

<div>
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Bảng thống kê</h5>
                            <div class="tong_dt">
                                <div class="tong_dt1">
                                    <span>
                                        Tổng doanh thu
                                    </span>
                                </div>
                                <div class="tong_dt2">
                                    <span>
                                        <?php foreach ($list_tong_dt as $list) : ?>
                                            <?= $list['tong_dt'] ?> VND
                                        <?php endforeach ?>
                                    </span>
                                </div>
                            </div>


                            <div class="btn_dieuhuong btn btn-success">
                                <a href="./index.php?action=&act=thong_ke" style="color: white;">Thống kê </a>
                            </div>

                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">

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
                                            <tr>
                                                <td><?= $list['id'] ?></td>
                                                <td><?= $list['ten_phim'] ?></td>
                                                <td><?= $list['ten_loaiphim'] ?></td>
                                                <td><?= $list['so_luong_ve_dat'] ?></td>
                                                <td><?= number_format($list['sum_thanhtien'], 0, ",", ".") ?> VND</td>
                                            </tr>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>