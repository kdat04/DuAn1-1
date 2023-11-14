<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <link rel="stylesheet" href="./View//CSS/chondoan.css">
</head>

<body>
    <div class="chondoan-text">
        <span>Chọn Combo</span>
    </div>
    <div class="combo-doan">
        <div class="combo-doan-left">
            <div class="combo-doan-img">
                <img src="./View/IMG-do-an/ily-wish-tumbler.jpg" alt="">
            </div>
            <div class="combo-doan-text">
                <h3>iLy Wish Tumbler</h3>
                <span>01 Ly Wish Tumbler + 01 Ly nước ngọt size L</span>
                <p>Giá: 219.000đ</p>
            </div>
        </div>
        <div class="combo-doan-right">
            <button class="minus-btn" onclick="minus()">
                <i class="fa-solid fa-minus"></i>
            </button>
            <input type="text" name="amount" id="amount" value="1">
            <button class="plus-btn" onclick="plus()">
                <i class="fa-solid fa-plus"></i>
            </button>
        </div>
    </div>
    <script src="./view/js/nut-sl.js"></script>
</body>

</html>