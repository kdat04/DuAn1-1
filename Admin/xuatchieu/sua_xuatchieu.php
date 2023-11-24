<div>
    <div class="page-wrapper">
        <div class="card">
            <form class="form-horizontal" action="index.php?action=&act=up_xuat_chieu" method="post">
                <div class="card-body" style="width: 1000px;">
                    <h4 class="card-title">Sửa Xuất chiếu</h4>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Id Xuất chiếu</label>
                        <div class="col-sm-9">
                            <input type="text" name="id" disabled class="form-control" id="fname" placeholder="Id Xuất chiếu" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label"> Ngày Xuất chiếu</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" name="ngay_chieu" id="lname" placeholder="Xuất chiếu" value="<?= $list['ngay_chieu'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Tên Phim</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="id_phim" id="lname">
                                <?php foreach ($phims as $phim) : ?>

                                    <option value="" hidden>Phim</option>

                                    <option value="<?= $phim['id'] ?>" <?= ($phim['id'] == $list['id_phim']) ? 'selected' : '' ?>><?= $phim['ten_phim'] ?></option>


                                <?php endforeach ?>

                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Phòng chiếu</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="id_phongchieu" id="lname">
                                <?php foreach ($phong_chieu as $phong) : ?>
                                    <option value="" hidden>Phòng chiếu</option>
                                    <option value="<?= $phong['id'] ?>" <?= ($phong['id'] == $list['id_phongchieu']) ? 'selected' : '' ?>><?= $phong['ten_phongchieu'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="border-top">
                    <div class="card-body" style="margin-bottom: 50px;">
                        <input type="hidden" name="id" value="<?= $list['id'] ?>">
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