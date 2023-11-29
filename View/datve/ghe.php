<?php

$ghes = [
    'A' => [[1, 10], [2, 10], [3, 20], [4, 20], [5, 20], [6, 10], [7, 10]],
    'B' => [[1, 10], [2, 10], [3, 30], [4, 30], [5, 30], [6, 10], [7, 10]],
    'C' => [[1, 10], [2, 10], [3, 30], [4, 30], [5, 30], [6, 10], [7, 10]],
    'D' => [[1, 10], [2, 10], [3, 20], [4, 20], [5, 20], [6, 10], [7, 10]],
];

?>
<!-- Main content -->
<div class="place-form-area">
    <div class="choose-sits">
        <div class="col-sm-12 col-lg-10 col-lg-offset-1">
            <div class="sits-area hidden-xs">
                <div class="sits-anchor">screen</div>

                <div class="sits">
                    <aside class="sits__line">
                        <span class="sits__indecator">A</span>
                        <span class="sits__indecator">B</span>
                        <span class="sits__indecator">C</span>
                        <span class="sits__indecator">D</span>

                    </aside>

                    <?php foreach ($ghes as $key => $value) : ?>
                        <div class="sits__row">
                            <?php foreach ($value as $item) : ?>
                                <span class="sits__place sits-price--cheap <?php if( in_array( $key . $item[0] ,$lock_ghe_tong)){echo 'sits-state--not';}else{}?>" data-place='<?= $key . $item[0] ?>' data-price='<?= $item[1] ?>'><?= $key . $item[0] ?></span>

                            <?php endforeach ?>
                        </div>
                    <?php endforeach ?>

                    <aside class="sits__right">
                        <span class="sits__indecator">A</span>
                        <span class="sits__indecator">B</span>
                        <span class="sits__indecator">C</span>
                        <span class="sits__indecator">D</span>

                    </aside>
                    <div class="sits__number">
                        <span class="sits__indecator">1</span>
                        <span class="sits__indecator">2</span>
                        <span class="sits__indecator">3</span>
                        <span class="sits__indecator">4</span>
                        <span class="sits__indecator">5</span>
                        <span class="sits__indecator">6</span>
                        <span class="sits__indecator">7</span>

                    </div>
                </div>
            </div>
        </div>
    </div>