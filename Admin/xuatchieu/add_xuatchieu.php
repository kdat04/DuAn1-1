<div>
    <div class="page-wrapper">
        <div class="card">
            <form class="form-horizontal" action="index.php?action=&act=add_xuatchieu" method="post">
                <div class="card-body" style="width: 1000px;">
                    <h4 class="card-title">Thêm mới Xuất chiếu</h4>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Id Xuất chiếu</label>
                        <div class="col-sm-9">
                            <input type="text" disabled class="form-control" id="fname" placeholder="Id Xuất chiếu" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label"> Ngày Xuất chiếu</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" name="ngay_xc" id="lname" placeholder="Xuất chiếu">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Tên Phim</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="phim" id="lname">
                                <?php foreach ($phims as $phim) : ?>
                                    <option value="" hidden>Phim</option>
                                    <option value="<?= $phim['id'] ?>"><?= $phim['ten_phim'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Phòng chiếu</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="phong_chieu" id="lname">
                                <?php foreach ($phong_chieu as $phong) : ?>
                                    <option value="" hidden>Phòng chiếu</option>
                                    <option value="<?= $phong['id'] ?>"><?= $phong['ten_phongchieu'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="border-top">
                    <div class="card-body" style="margin-bottom: 50px;">
                        <input type="submit" name="themmoi" class="btn btn-primary" value="Gửi dữ liệu">
                    </div>
                </div>
                <div style="font-weight: 500; font-size: 20px; ; color: black;">
                    <?php
                    if (isset($message) && ($message != ""))
                        echo $message;
                    ?>
                </div><br>
            </form>
        </div>
    </div>
</div>