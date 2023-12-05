<div>
    <div class="page-wrapper">
        <div class="card">
            <form class="form-horizontal" action="index.php?action=&act=up_khunggio&id=<?= $list['id'] ?>" method="post">
                <div class="card-body" style="width: 1000px;">
                    <h4 class="card-title">Sửa Xuất chiếu</h4>
                    <div style="font-weight: 500; font-size: 20px; ; color: red;">
                        <?php
                        if (isset($message) && ($message != ""))
                            echo $message;
                        ?>
                    </div><br>
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
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label"> Phòng chiếu</label>
                        <div class="col-sm-9">
                            <select name="phong_chieu" class="form-control">
                                <option value="" hidden>Phòng chiếu</option>
                                <option value="Phòng1" <?php if($list['phong_phim'] == 'Phòng1') echo 'selected'; ?>>Phòng 1</option>
                                <option value="Phòng2" <?php if($list['phong_phim'] == 'Phòng2') echo 'selected'; ?>>Phòng 2</option>
                                <option value="Phòng3" <?php if($list['phong_phim'] == 'Phòng3') echo 'selected'; ?>>Phòng 3</option>
                                <option value="Phòng4" <?php if($list['phong_phim'] == 'Phòng4') echo 'selected'; ?>>Phòng 4</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="border-top">
                    <div class="card-body" style="margin-bottom: 50px;">
                        <input type="hidden" name="id" value="<?= $list['id'] ?>">
                        <input type="submit" name="capnhat" class="btn btn-primary" value="Gửi dữ liệu">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>