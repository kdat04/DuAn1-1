<div>
    <div class="page-wrapper">
        <div class="card">
            <form class="form-horizontal" action="index.php?action=&act=add_khunggio&id_xc=<?= $_GET['id_xc'] ?>" method="post">
                <div class="card-body" style="width: 1000px;">
                    <h4 class="card-title">Thêm mới khung giờ chiếu <?= $xc_id['ngay_chieu'] ?> của <?= $xc_id['ten_phim'] ?>
                    </h4>
                    <div style="font-weight: 400; font-size: 20px; ; color: red;">
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
                            <input type="time" class="form-control" name="khung_gio" id="lname" placeholder="Xuất chiếu">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label"> Phòng chiếu</label>
                        <div class="col-sm-9">
                            <select name="phong_chieu" class="form-control">
                                <option value="" hidden>Phòng chiếu</option>
                                <option value="Phòng1">Phòng 1</option>
                                <option value="Phòng2">Phòng 2</option>
                                <option value="Phòng3">Phòng 3</option>
                                <option value="Phòng4">Phòng 4</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="border-top">
                    <div class="card-body" style="margin-bottom: 50px;">
                        <input type="hidden" name="id_xc" value="<?= $_GET['id_xc'] ?>">
                        <input type="submit" name="themmoi" class="btn btn-primary" value="Gửi dữ liệu">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>