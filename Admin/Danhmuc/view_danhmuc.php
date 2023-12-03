<div>
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Bảng quản lý danh mục phim</h5>
                            <div class="table-responsive">
                                <form class="search_phim" action="index.php?action=&act=danhmuc" method="post">
                                    <input type="text" name="kyw" placeholder="Tra cứu Thể loại">
                                    <input class="btn btn-primary" type="submit" name="listseacher" value="Gửi">
                                </form>
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 400px;">Id Danh mục</th>
                                            <th>Tên Danh mục</th>
                                            <th style="width: 100px;"></th>
                                            <th style="width: 100px;"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($list_danhmuc as $danhmuc) : ?>
                                            <tr>
                                                <td><?= $danhmuc['id'] ?></td>
                                                <td><?= $danhmuc['ten_loaiphim'] ?></td>
                                                <td><button class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa sản phẩm không ?')">
                                                        <a style="color: white;" href="index.php?action=&act=xoa_dm&id=<?= $danhmuc['id'] ?>">Xoá</a>
                                                    </button>
                                                </td>
                                                <td><button class="btn btn-info" onclick="return confirm('Bạn có muốn sửa sản phẩm không ?')">
                                                        <a style="color: white;" href="index.php?action=&act=sua_dm&id=<?= $danhmuc['id'] ?>">Sửa</a>
                                                    </button>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Id Danh mục</th>
                                            <th>Tên Danh mục</th>
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
                <a href="./index.php?action=&act=add_dm" style="color: white;">Thêm danh mục</a>
            </div>
        </div>
    </div>
</div>