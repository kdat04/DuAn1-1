<?php
var_dump($list_danhmuc);
?>
<div>
    <div class="page-wrapper">
        <div class="card">
            <form class="form-horizontal" action="index.php?action=&act=add_phim" method="post" enctype="multipart/form-data">
                <div class="card-body" style="width: 1000px;">
                    <h4 class="card-title">Thêm Phim</h4>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Id phim</label>
                        <div class="col-sm-9">
                            <input type="text" name="id" class="form-control" id="fname" placeholder="Id phim" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label"> Tên phim</label>
                        <div class="col-sm-9">
                            <input type="text" name="ten_phim" class="form-control" id="lname" placeholder="Tên phim">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Ảnh phim</label>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="file" name="img_phim" class="custom-file-input" id="validatedCustomFile" required>
                                <label class="custom-file-label" for="validatedCustomFile">Ảnh phim...</label>
                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Giá phim</label>
                        <div class="col-sm-9">
                            <input type="text" name="gia" class="form-control" id="email1" placeholder="Giá phim">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Nhà sản xuất </label>
                        <div class="col-sm-9">
                            <input type="text" name="nsx" class="form-control" id="cono1" placeholder="Nhà sản xuất">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Ngày phát hành </label>
                        <div class="col-sm-9">
                            <input type="text" name="nph" class="form-control" id="cono1" placeholder="Ngày phát hành">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Mô tả phim</label>
                        <div class="col-sm-9">
                            <textarea name="mota" class="form-control" cols="100" rows="6"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Thể loại phim</label>
                        <div class="col-sm-9">

                            <select name="id_loaiphim" id="">
                                <?php
                                foreach ($list_danhmuc as $list) {
                                    extract($list);
                                    echo ' <option value="' . $id . '">' . $ten_loaiphim . '</option>';
                                }
                                ?>
                        </div>
                    </div>

                </div><br>


                <div class="border-top">
                    <div class="card-body">
                        <br><input type="submit" name="themmoi" class="btn btn-primary" value="Gửi dữ liệu">
                    </div>
                    <div style="font-weight: 500; font-size: 20px; ; color: black; font-weight: 700;">
                        <?php
                        if (isset($message) && ($message != ""))
                            echo $message;
                        ?>
                    </div><br>
                </div>
            </form>
        </div>
    </div>
</div>
