<div>
    <div class="page-wrapper">
        <div class="card">
            <form class="form-horizontal" action="index.php?action=&act=add_user" method="post">
                <div class="card-body" style="width: 1000px;">
                    <h4 class="card-title">Sửa Xuất chiếu</h4>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Id Xuất chiếu</label>
                        <div class="col-sm-9">
                            <input type="text" disabled class="form-control" id="fname" placeholder="Id Xuất chiếu" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label"> Tên Xuất chiếu</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="ten_xc" id="lname" placeholder="Xuất chiếu">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label"> Tên phim </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="sdt" id="lname" placeholder="Tên phim">
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
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Phòng Chiếu</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" name="matkhau" id="lname" placeholder="Phòng Chiếu">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">7:00 PM</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="role" id="lname">
                                <option value="0">Không có khung giờ chiếu</option>
                                <option value="1">Có khung giờ chiếu</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">8:00 PM</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="role" id="lname">
                                <option value="0">Không có khung giờ chiếu</option>
                                <option value="1">Có khung giờ chiếu</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">9:00 PM</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="role" id="lname">
                                <option value="0">Không có khung giờ chiếu</option>
                                <option value="1">Có khung giờ chiếu</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">10:00 PM</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="role" id="lname">
                                <option value="0">Không có khung giờ chiếu</option>
                                <option value="1">Có khung giờ chiếu</option>
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