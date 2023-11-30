<section>
    <div class="film">
        <?php if (count($list_phim) === 0) { ?>
            <div class="product_flim_search">
                <form action="index.php?action=ds_search" method="post">
                    <input class="input_search" value="<?= $key ?>" type="search" name="kyw" placeholder="Tìm kiếm...." required>
                </form>
                <hr>
                0 Kết quả tìm kiếm cho từ khoá: <?= $key ?>
            </div>
        <?php } else { ?>
            <div class="film_text">
                <ul>
                    <li>Phim</li>
                    <li><a href="./index.php?action=ds_phim&tt=dang_chieu">Đang chiếu</a></li>
                    <li><a href="./index.php?action=ds_phim&tt=sap_chieu">Sắp chiếu</a></li>
                </ul>
            </div>
            <div class="products_flim">
                <?php foreach ($list_phim as $list) : ?>
                    <a href="./index.php?action=ct_phim&id=<?= $list['id'] ?>">
                        <div class="product_flim">
                            <img src="../Admin/Img_ad/<?= $list['img_phim'] ?>" alt="Ảnh phim">
                            <p>
                                <?= $list['ten_phim'] ?>
                            </p><button><i class="fa-solid fa-ticket"></i>Mua Vé</button>
                            <button><i class="fa-regular fa-circle-play"></i>Trailer</button>
                        </div>
                    </a>
                <?php endforeach ?>

            <?php } ?>
            </div>
            <div class="film">
                <div class="film_text">
                    <ul>
                        <li>3D CINEMA</li>
                    </ul>
                </div>
                <div class="GALAXY_CINEMA">
                    ​​​​​​Không khi lạnh bắt đầu ùa về cũng là lúc nỗi cô đơn của rất nhiều người ngày càng lớn lên, thay vì hít cái lạnh một mình ngoài đường, sao không thử vào rạp chiếu phim để hít cái lạnh nhưng vẫn có thể thưởng thức được những tác phẩm hấp dẫn tại 3D Cinema trong mùa đông lạnh lẽo. <br><br>
                    Các stars sẽ được chiêu đãi những bộ phim mới đầy thú vị như sự trở lại của đạo diễn Victor Vũ với Người Vợ Cuối Cùng, cặp đôi mẹ bắt chia tay Karik và Miu Lê cùng Chiếm Đoạt. Chưa kể đến là chị đại Captain Marvels cũng sẽ tái xuất. Cùng tìm hiểu nhe.
                    <br><br>
                    1. Người Vợ Cuối Cùng – Tâm lí – 03.11.2023<br><br>
                    Hơn 10 năm kể từ sau thành công của bom tấn Thiên Mệnh Anh Hùng, Victor Vũ chính thức quay trở lại màn ảnh rộng 2023 bằng một tác phẩm điện ảnh cổ trang. Với nội dung hấp dẫn cùng những màn tỉ thí võ thuật đẹp mắt, Thiên Mệnh Anh Hùng đã sở hữu tận 5 giải thưởng Cánh Diều Vàng năm 2012, và lần này, Victor Vũ hứa hẹn sẽ tái hiện lại sự thành công ấy bằng bộ phim cổ trang thứ hai trong sự nghiệp - Người Vợ Cuối Cùng.
                    <br><br>
                    Lấy cảm hứng từ tiểu thuyết Hồ Oán Hận, của nhà văn Hồng Thái, Người Vợ Cuối Cùng là một bộ phim tâm lý cổ trang, lấy bối cảnh Việt Nam vào triều Nguyễn. Linh - Người vợ bất đắc dĩ của một viên quan tri huyện, xuất thân là con của một gia đình nông dân nghèo khó, vì không thể hoàn thành nghĩa vụ sinh con nối dõi nên đã chịu sự chèn ép của những người vợ lớn trong gia đình. Sự gặp gỡ tình cờ của cô và người yêu thời thanh mai trúc mã của mình – Nhân, đã dẫn đến nhiều câu chuyện bất ngờ xảy ra khiến cuộc sống cô hoàn toàn thay đổi.<br><br>
                    2. The Marvels / Biệt Đội Marvel – Hành động – 10.11.2023<br><br>
                    The Marvels (tựa Việt: Biệt đội Marvel) là dự án cuối cùng của Vũ trụ Điện ảnh Marvel (MCU) trong năm 2023, đóng vai trò quan trọng khi kết nối 3 mini-series ăn khách đã ra mắt là WandaVision, Ms. Marvel và Secret Invasion. Không những đánh dấu màn tái xuất của nhân vật được khán giả yêu thích Captain Marvel Carol Denvers (Brie Larson) trên màn ảnh rộng, bộ phim còn giới thiệu đến khán giả liên minh 3 "chị đại" có vai trò quan trọng đối với tương lai của MCU.<br><br>
                    Câu chuyện lần này xảy ra sau các sự kiện trong Captain Marvel (2019), Dar-Benn (The Accuser) đã mất đi quê nhà và giờ đây, ả đang tìm cách trả thù mọi hành tinh từng được Carol cứu giúp. Bằng cách nào đó, Dar-Benn sở hữu được chiếc vòng có sự liên kết với Ms. Marvel/Kamala Khan (Iman Vellani) và "Spectrum" Monica Rambeau (Teyonah Parris). Từ đây, nữ ác nhân có thể thao túng liên kết ánh sáng giữa các siêu anh hùng khiến họ hoán đổi vị trí cho nhau mỗi khi dùng sức mạnh, gây ra những xáo động khôn lường. <br><br>
                    3. Trolls: Band Together / Quỷ Lùn Tinh Nghịch: Đồng Tâm Hiệp Nhạc – Hoạt hình – 17.11 <br><br>
                    Ra mắt lần đầu tiên vào năm 2016, những chú quỷ lùn tinh nghịch với mái tóc sặc sỡ đam mê hát nhảy đã đem về cho DreamWorks nhiều thành công ấn tượng. Chỉ riêng phần phim đầu tiên Trolls đã mang về doanh thu 346 triệu đô, giành được đề cử Oscar cho Bài hát gốc hay nhất, trở thành một trong những thương hiệu giải trí lớn và được yêu thích nhất trên thế giới. Phần hai Trolls World Tour dù phát hành vào năm đại dịch nhưng việc lựa chọn phát hành qua các nền tảng streaming của hãng phim cũng đã thu về nhiều thành công nhất định. năm nay, hội nhóc Troll sẽ mang thế giới âm nhạc đầy màu sắc của mình trở lại màn ảnh rộng, với phần phim thứ 3 mang tên Quỷ Lùn Tinh Nghịch: Đồng Tâm Hiệp Nhạc (tựa gốc: Trolls Band Together). Tiếp tục có sự góp mặt của hai ngôi sao âm nhạc Anna Kendrick và Justin Timberlake, bộ phim hứa hẹn sẽ là bom tấn hoạt hình cực đáng mong chờ dành cho khán giả gia đình.<br><br>
                    Câu chuyện diễn ra khi buổi tiệc cưới hoàng gia đang được chuẩn bị, một nhân vật không mời mà đến – John Dory, anh trai thất lạc đã lâu của Branch. Đột ngột xuất hiện giữa buổi lễ, anh đã mở ra quá khứ bí mật che giấu bấy lâu nay của Branch. Đó là quá khứ về một ban nhạc có tên BroZone từng rất nổi tiếng nhưng đã tan rã. Hành trình đi tìm lại các thành viên để làm một ban nhạc như xưa trở thành chuyến phiêu lưu âm nhạc đầy cảm xúc, tràn trề hi vọng về một cuộc sum họp gia đình tuyệt với nhất.<br><br>
                    4. Chiếm Đoạt – Tâm lí - 24.11<br><br>
                    Phim điện ảnh Chiếm Đoạt thuộc thể loại tâm lý giật gân, quy tụ dàn diễn viên: Miu Lê, Phương Anh Đào, Lãnh Thanh, Karik, Phương Thanh... Không chỉ đánh dấu sự trở lại của Miu Lê trên màn ảnh rộng, phim còn nhận sự đầu tư từ KBS (Korean Broadcasting System) - một trong ba đài truyền hình lớn nhất Hàn Quốc. Chiếm Đoạt đã nhận phản hồi tích cực khi được trình chiếu lần đầu tiên tại Liên hoan phim JeonJu Hàn Quốc.<br><br>
                    Chuyện phim mới kể về người vợ của một gia đình thượng lưu thuê cô bảo mẫu “trong mơ” để chăm sóc con trai mình. Nhưng cô không ngờ rằng, phía sau sự trong sáng, tinh khiết kia, cô bảo mẫu luôn che giấu âm mưu nhằm phá hoại hạnh phúc gia đình và khiến cuộc sống của cô thay đổi mãi mãi.
                </div>
            </div>
</section>