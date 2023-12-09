<div>
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Bảng quản lý phim</h5>
                            <div class="table-responsive">
                                <form class="search_phim" action="index.php?action=&act=phim" method="post">
                                    <input type="text" name="kyw" placeholder="Tra cứu theo Thể loại">
                                    <select name="category_id">
                                        <option value="0" selected>Tất cả</option>
                                        <?php foreach ($list_danhmuc as $danhmuc) : ?>
                                            <option value="<?= $danhmuc['id'] ?>"><?= $danhmuc['ten_loaiphim'] ?></option>
                                        <?php endforeach ?>
                                    </select>
                                    <input class="btn btn-primary" type="submit" name="listseacher" value="Gửi">
                                </form>
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 150px;">Id Phim</th>
                                            <th>Tên Phim</th>
                                            <th style="width: 200px;">Ảnh</th>
                                            
                                            <th>Thể loại</th>
                                            <th>Ngày Phát Hành</th>
                                            <th style="width: 100px;"></th>
                                            <th style="width: 100px;"></th>
                                            <th style="width: 100px;"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($ds_phim as $phim) : ?>
                                            <tr>
                                                <td><?= $phim['id'] ?></td>
                                                <td><?= $phim['ten_phim'] ?></td>
                                                <td><img src="./Img_ad/<?= $phim['img_phim'] ?>" alt="" width="50px"></td>
                                                
                                                <td><?= $phim['ten_loaiphim'] ?></td>
                                                <td><?= $phim['nph'] ?></td>
                                                <td>
                                                    <button class="btn btn-success" >
                                                        <a style="color: white;" href="index.php?action=&act=add_xuatchieu&id=<?= $phim['id'] ?>">Thêm xuất chiếu</a>
                                                    </button>
                                                </td>
                                                <td>
                                                    <button class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa phim không ?')">
                                                        <a style="color: white;" href="index.php?action=&act=xoa_phim&id=<?= $phim['id'] ?>">Xoá</a>
                                                    </button>
                                                </td>
                                                <td><button class="btn btn-info" onclick="return confirm('Bạn có muốn sửa phim không ?')">
                                                        <a style="color: white;" href="index.php?action=&act=sua_phim&id=<?= $phim['id'] ?>">Sửa</a>
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
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn_dieuhuong btn btn-success">
                <a href="./index.php?action=&act=add_phim" style="color: white;">Thêm phim</a>
            </div>
        </div>
    </div>
</div>