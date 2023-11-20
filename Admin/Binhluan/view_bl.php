<div>
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Bảng quản lý bình luận</h5>
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 150px;">Id bình luận</th>
                                            <th>Nội dung bình luận</th>
                                            <th style="width: 200px;">Ảnh bình luận</th>
                                            <th style="width: 200px;">Id user</th>
                                            <th style="width: 200px;">Id phim</th>
                                            <th style="width: 200px;">Ngày bình luận</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($listbl as $bl) : ?>
                                            <tr>
                                                <th><input type="checkbox" name="" id="" /></th>
                                                <th><?= $bl['id'] ?></th>
                                                <th><?= $bl['noidung'] ?></th>
                                                <th><?= $bl['ten_user'] ?></th>
                                                <th><?= $bl['id_phim'] ?></th>
                                                <th><?= $bl['timebl'] ?></th>

                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Id bình luận</th>
                                            <th>Nội dung bình luận</th>
                                            <th>Ảnh bình luận</th>
                                            <th>Id user</th>
                                            <th>Id phim</th>
                                            <th>Ngày bình luận</th>
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