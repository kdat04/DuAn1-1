<?php

$ghes = [
    'A' => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
    'B' => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
    'C' => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
    'D' => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
    'E' => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
];

?>
<div class="suatchieu">
    <h3>Đổi suất chiếu</h3>
    <nav>
        <ul>
            <li><a href="#">12:30</a></li>
            <li><a href="#">14:30</a></li>
            <li><a href="#">16:30</a></li>
            <li><a href="#">18:30</a></li>
            <li><a href="#">20:30</a></li>
            <li><a href="#">22:30</a></li>
        </ul>
    </nav>
</div>
<div class="listghe">
    <nav>
        <ul>
            <?php foreach ($ghes as $key => $value) : ?>
                <li>
                    <div class="hang-ghe">
                        <div class="hang-text">
                            <span><?= $key ?></span>
                        </div>
                        <div class="hang-input">
                            <?php foreach ($value as $item) : ?>
                                <input type="checkbox" name="a" id="" placeholder="<?= $item ?> " value="<?= $key.$item ?>'.">
                            <?php endforeach  ?>

                        </div>
                        <div class="hang-text">
                            <span><?= $key ?></span>
                        </div>
                    </div>
                </li>
            <?php endforeach  ?>
        </ul>
    </nav>
</div>
<div>
    <div class="manhinh">
        <span>Màn hình</span>
    </div>

    <div class="nut-checkbox">
        <div class="check-left">
            <div class="nut-ck">
                <input type="checkbox" name="" id="">
                <span>Ghế đã bán</span>
            </div>
            <div class="nut-ck">
                <input type="checkbox" name="" id="">
                <span>Ghế đang chọn</span>
            </div>
        </div>
        <div class="check-right">
            <div class="nut-ck">
                <input type="checkbox" name="" id="">
                <span>Ghế đã VIP</span>
            </div>
            <div class="nut-ck">
                <input type="checkbox" name="" id="">
                <span>Ghế đơn</span>
            </div>
            <div class="nut-ck">
                <input type="checkbox" name="" id="">
                <span>Ghế đôi</span>
            </div>
        </div>
    </div>
</div>