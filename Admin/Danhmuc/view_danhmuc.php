<div>
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Bảng quản lý danh mục phim</h5>
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 800px;">Id Danh mục</th>
                                            <th>Tên Danh mục</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($variable as $key => $value) :?>
                                        <tr>
                                            <td>1</td>
                                            <td>Customer Support</td>
                                        </tr>
                                        <?php
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Id Danh mục</th>
                                            <th>Tên Danh mục</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn_dieuhuong btn btn-success">
                <a href="./index.php?action=&act=add_dm" style="color: white;">Thêm danh mục</a>
            </div>
        </div>
    </div>
</div>