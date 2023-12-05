<div>
    <div class="page-wrapper">
        <div class="card">
            <form class="form-horizontal" action="index.php?action=&act=add_dm" method="post">
                <div class="card-body" style="width: 1000px;">
                    <h4 class="card-title">Thêm mới danh mục</h4>
                    <div style="font-weight: 400; font-size: 20px; ; color: red;">
                        <?php
                        if (isset($message) && ($message != ""))
                            echo $message;
                        ?>
                    </div><br>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Id danh mục</label>
                        <div class="col-sm-9">
                            <input type="text" disabled class="form-control" id="fname" placeholder="Id danh mục" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label"> Tên danh mục</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="ten_loaiphim" id="lname" placeholder="Tên danh mục">
                        </div>
                    </div>
                </div>
                <div class="border-top">
                    <div class="card-body" style="margin-bottom: 50px;">
                        <input type="submit" name="themmoi" class="btn btn-primary" value="Gửi dữ liệu">
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>