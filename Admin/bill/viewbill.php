<div>
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Bảng quản lý phim</h5>
                            <div class="table-responsive">
                            
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 150px;">Id Phim</th>
                                            <th>Tên Phim</th>
                                            <th style="width: 200px;">Ảnh</th>
                                            
                                            <th>Thể loại</th>
                                            <th>Ngày Phát Hành</th>
                                         
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($list_bill as $bill) : ?>
                                            <tr>
                                                <td><?= $bill['id'] ?></td>
                                                <td><?= $bill['ngay_tt'] ?></td>
                                   
                                                    
                                                <td><?= $bill['tt_bill'] ?></td>
                                                <td><?= $bill['thanh_tien'] ?></td>
                                              
                                                <td>
                                                    <button class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa sản phẩm không ?')">
                                                        <a style="color: white;" href="index.php?action=&act=xoa_bill&id=<?= $bill['id'] ?>">Xoá</a>
                                                    </button>
                                                </td>
  
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Id Phim</th>
                                            <th>Tên Phim</th>
                                            <th>Ảnh</th>
                                            
                                            <th>Thể loại</th>
                                            <th>Ngày Phát Hành</th>
                                           
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