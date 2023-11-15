<div>
    <div class="page-wrapper">
<<<<<<< HEAD
        <div class="card">
            <form class="form-horizontal" action="index.php?action=&act=add_dm" method="post">
                <div class="card-body">
=======
        <div class="card" >          
            <form class="form-horizontal" action="" method="post" >
                <div class="card-body" style="width: 1000px;">
>>>>>>> 1e1d2564c24bedf621e7885deeb647961691204f
                    <h4 class="card-title">Thêm mới danh mục</h4>
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
                    <div class="card-body">
<<<<<<< HEAD
                        <button type="submit" name="themmoi" class="btn btn-primary">Submit</button>
=======
                        <button type="submit" class="btn btn-primary">Gửi dữ liệu</button>
>>>>>>> 1e1d2564c24bedf621e7885deeb647961691204f
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