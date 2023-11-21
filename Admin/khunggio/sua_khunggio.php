<div>
    <div class="page-wrapper">
        <div class="card">
            <form class="form-horizontal" action="index.php?action=&act=up_khunggio" method="post">
                <div class="card-body" style="width: 1000px;">
                    <h4 class="card-title">Sửa Xuất chiếu</h4>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Id Khung giờ</label>
                        <div class="col-sm-9">
                            <input type="text" disabled class="form-control" id="fname" placeholder="Id Xuất chiếu" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label"> Khung giờ</label>
                        <div class="col-sm-9">
                            <input type="time" class="form-control" name="khung_gio" id="lname" placeholder="Xuất chiếu" value="<?= $list['gio_chieu'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Xuất chiếu</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="xuat_chieu" id="lname">
                                <?php foreach ($xuat_chieu as $xc) : ?>
                                    <option value="" hidden>Xuất chiếu</option>
                                    <option value="<?= $xc['id'] ?>" <?= ($xc['id'] == $list['id_xuat_chieu']) ? 'selected' : '' ?>><?= $xc['ngay_chieu'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="border-top">
                    <div class="card-body" style="margin-bottom: 50px;">
                        <input type="hidden" name="id" value="<?= $list['id']?>">
                        <input type="submit" name="capnhat" class="btn btn-primary" value="Gửi dữ liệu">
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