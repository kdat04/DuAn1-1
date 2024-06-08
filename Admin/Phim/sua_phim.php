<?php
// var_dump($list_danhmuc);
?>
<div>
    <div class="page-wrapper">
        <div class="card">
            <form class="form-horizontal" action="index.php?action=&act=up_phim&id=<?= $phim['id'] ?>" method="post" enctype="multipart/form-data">
                <div class="card-body" style="width: 1000px;">
                    <h4 class="card-title">Sửa Phim</h4>
                    <div style="font-weight: 400; font-size: 20px; ; color: black; font-weight: 700;">
                        <?php
                        if (isset($message) && ($message != ""))
                            echo $message;
                        ?>
                    </div><br>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Id phim</label>
                        <div class="col-sm-9">
                            <input type="text" name="id" class="form-control" id="fname" placeholder="Id phim" disabled value="<?= $phim['id'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label"> Tên phim</label>
                        <div class="col-sm-9">
                            <input type="text" name="ten_phim" class="form-control" id="lname" placeholder="Tên phim" value="<?= $phim['ten_phim'] ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label"> Thường lượng Phim</label>
                        <div class="col-sm-9">
                            <input type="text" name="thoi_luong_phim" class="form-control" id="lname" placeholder="Thời lượng phim " value="<?= $phim['thoi_luong_phim'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label"> Chỉ số đánh giá </label>
                        <div class="col-sm-9">
                            <input type="text" name="cs_danh_gia" class="form-control" id="lname" placeholder="Chỉ số đánh giá" value="<?= $phim['cs_danh_gia'] ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label"> Trạng thái phim </label>
                        <div class="col-sm-9">
                            <input type="text" name="tt" class="form-control" id="lname" placeholder="Trạng thái phim" value="<?= $phim['tt'] ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Ảnh phim</label>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="hidden" name="img_phim" value="<?= $phim['img_phim'] ?>">

                                <input type="file" name="img_phim" class="custom-file-input" id="validatedCustomFile" value="<?= $phim['img_phim'] ?>">
                                <label class="custom-file-label" for="validatedCustomFile"> <?= $phim['img_phim'] ?></label>

                                <img style="margin: 10px 0;" src="./Img_ad/<?= $phim['img_phim'] ?>" alt="" width="100px">
                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                            </div>
                        </div>
                    </div>

                    <div style="margin-top: 90px;" class="form-group row">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Ảnh banner phim</label>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="hidden" name="img_banner_phim" value="<?= $phim['img_banner'] ?>">

                                <input type="file" name="img_banner_phim" class="custom-file-input" id="validatedCustomFile" value="<?= $phim['img_banner'] ?>">
                                <label class="custom-file-label" for="validatedCustomFile"> <?= $phim['img_banner'] ?></label>

                                <img style="margin: 10px 0;" src="./Img_ad/<?= $phim['img_banner'] ?>" alt="" width="100px">
                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Nhà sản xuất </label>
                        <div class="col-sm-9">
                            <input type="text" name="nsx" class="form-control" id="cono1" placeholder="Nhà sản xuất" value='<?= $phim['nsx'] ?>'>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Ngày phát hành </label>
                        <div class="col-sm-9">
                            <input type="date" name="nph" class="form-control" id="cono1" placeholder="Ngày phát hành" value='<?= $phim['nph'] ?>'>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Diễn viên 1</label>
                        <div class="col-sm-9">
                            <input type="text" name="dv1" class="form-control" id="cono1" placeholder="Diễn viên 1" value='<?= $phim['dienvien1'] ?>'>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Diễn viên 2</label>
                        <div class="col-sm-9">
                            <input type="text" name="dv2" class="form-control" id="cono1" placeholder="Diễn viên 2" value='<?= $phim['dienvien2'] ?>'>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Diễn viên 3</label>
                        <div class="col-sm-9">
                            <input type="text" name="dv3" class="form-control" id="cono1" placeholder="Diễn viên 3" value='<?= $phim['dienvien3'] ?>'>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label"> Quốc Gia</label>
                        <div class="col-sm-9">
                            <input type="text" name="qg" class="form-control" id="cono1" placeholder="Quốc gia" value='<?= $phim['quocgia'] ?>'>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Mô tả phim</label>
                        <div class="col-sm-9">
                            <textarea name="mota" class="form-control" cols="100" rows="6"><?= $phim['mota'] ?></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Thể loại phim</label>
                        <div class="col-sm-9">

                            <select class="select2 form-control custom-select" name="id_loaiphim" id="">
                                <option value="0" selected>Tất cả </option>
                                <?php
                                foreach ($list_danhmuc as $list) : ?>
                                    <option value="<?= $list['id'] ?>" <?= ($list['id'] == $phim['id_loaiphim']) ? 'selected' : '' ?>>
                                    <?= $list['ten_loaiphim'] ?>
                                </option>
                                <?php endforeach ?>
                        </div>
                    </div>
                </div><br>
                <div class="border-top">
                    <div class="card-body">
                        <input type="hidden" name="id" value="<?= $phim['id'] ?>">
                        <br><input style="margin-top: 20px;" type="submit" name="capnhat" class="btn btn-primary" value="Gửi dữ liệu">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>