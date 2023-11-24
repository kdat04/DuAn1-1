<?php

$ghes = [
    'A' => [[1, 100], [2, 100], [3, 100], [4, 100], [5, 100], [6, 100], [7, 100], [8, 100], [9, 100], [10, 100]],
    'B' => [[1, 100], [2, 100], [3, 150], [4, 150], [5, 150], [6, 150], [7, 150], [8, 150], [9, 100], [10, 100]],
    'C' => [[1, 100], [2, 100], [3, 150], [4, 200], [5, 200], [6, 200], [7, 200], [8, 150], [9, 100], [10, 100]],
    'D' => [[1, 100], [2, 100], [3, 150], [4, 200], [5, 200], [6, 200], [7, 200], [8, 150], [9, 100], [10, 100]],
    'E' => [[1, 100], [2, 100], [3, 150],  [4, 200], [5, 200], [6, 200], [7, 200], [8, 150], [9, 100], [10, 100]],
];

?>
<form action="" method="post">
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
                                    <div class="check_ghe">
                                        <input type="hidden" name="gia_ghe" value="<?= $item[1] ?>">
                                        <input type="hidden" name="ghe" value="<?= $key . $item[0] ?>">
                                        <span><?= $key . $item[0] ?></span>
                                    </div>


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


    </div>
</form>