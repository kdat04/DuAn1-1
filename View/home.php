<section>
    <div class="advertising_banners">
        <div class="btn_chuyenanh">
            <i class="fa-solid fa-arrow-right fa-rotate-180" onclick="BackAnh()"></i>
            <i class="fa-solid fa-arrow-right" onclick="NextAnh()"></i>
        </div>
        <div class="anh_banner">
            <img src="./IMG/2048x682-nvcc_1698985314518.webp" alt="banner1">
            <img src="./IMG/datrungpn-2-1697433653458_1697510491383.webp" alt="banner2">
            <img src="./IMG/nta-t11-digital-2048x682_1698224279414.webp" alt="banner3">
            <img src="./IMG/qmq-2048_1698382401475.webp" alt="banner4">
            <img src="./IMG/taylor-2048_1698380586771.webp" alt="banner5">
            <img src="./IMG/the-marv-2048_1698982958182.webp" alt="banner6">
            <img src="./IMG/vnpay-102023-4_1697533170464.webp" alt="banner7">
        </div>
    </div>
    <!-- <a href=""></a> -->
    <!-- <div class="seach_film">
        <span>1</span>
        <select name="" id="">
            <option value="" hidden>Chọn phim</option>
            <option value="">Biệt Đội Marvels</option>
            <option value="">Người Vợ Cuối Cùng</option>
            <option value="">Đất Rừng Phương Nam</option>
            <option value="">Quỷ Môn Quan: Gọi Hồn</option>
            <option value="">Những Kỷ Nguyên Của Taylor Swift</option>
        </select>
        <span>3</span>
        <select name="" id="">
            <option value="" hidden>Chọn ngày</option>
            <option value="">Thứ 5,09/11/2023</option>
            <option value="">Thứ 6,10/11/2023</option>
            <option value="">Thứ 7,11/11/2023</option>
            <option value="">Chủ Nhật,12/11/2023</option>
        </select>
        <span>4</span>
        <select name="" id="">
            <option value="" hidden>Chọn Suất</option>
            <option value="">19:00</option>
            <option value="">20:00</option>
            <option value="">21:00</option>
            <option value="">22:00</option>
        </select>
        <input type="button" value="Mua vé nhanh">
    </div> -->
    <div class="film">
        <div class="film_text">
            <ul>
                <li>Phim</li>
                <li><a href="./index.php?action=&tt=dang_chieu">Đang chiếu</a></li>
                <li><a href="./index.php?action=&tt=sap_chieu">Sắp chiếu</a></li>
            </ul>
        </div>
        <div class="products_flim">
        <?php foreach ($list_phim_tt as $list) : ?>
            <a href="index.php?action=ct_phim&id=<?= $list['id'] ?>">
                <div class="product_flim">
                <img src="../Admin/Img_ad/<?= $list['img_phim'] ?>" alt="Ảnh phim">
                    <p><?= $list['ten_phim'] ?></p>             
                    </p><button><i class="fa-solid fa-ticket"></i>Mua Vé</button>
                    <button><i class="fa-regular fa-circle-play"></i>Trailer</button>
                </div>
            </a>
            <?php endforeach ?>
        </div>
        <div class="btn_xemthem">
            <a href="index.php?action=ds_phim">Xem thêm <i class="fa-solid fa-angle-up fa-rotate-90"></i></a>
        </div>
    </div>
    <div class="film">
        <div class="film_text">
            <ul>
                <li>GÓC ĐIỆN ẢNH</li>
                <li><a>Bình luận phim</a></li>
                <li><a>Blog điện ảnh</a></li>
            </ul>
        </div>
        <div class="cinema_corner">
            <article>
                <a href="">
                    <img src="./blog/review-the-marvels-cao-hon--xa-hon-va-hay-hon-captian-marvel-3_1699722887968.webp" alt="">
                    <p>[Review] The Marvels: Cao Hơn, Xa Hơn Và Hay Hơn Captian Marvel!</p>
                    <div class="btn_like">
                        <button><i class="fa-solid fa-thumbs-up"></i>Thích</button>
                        <button><i class="fa-solid fa-eye"></i>View</button>
                    </div>
                </a>
            </article>
            <aside>
                <ul>
                    <li><a href=""><img src="./blog/review-the-marvels-cao-hon--xa-hon-va-hay-hon-captian-marvel-3_1699722887968.webp" alt="">
                            <div>
                                <p>[Review] The Marvels: Cao Hơn, Xa Hơn Và Hay Hơn Captian Marvel!</p>
                                <div class="btn_like">
                                    <button><i class="fa-solid fa-thumbs-up"></i>Thích</button>
                                    <button><i class="fa-solid fa-eye"></i>View</button>
                                </div>
                            </div>
                        </a></li>
                    <li><a href=""><img src="./blog/review-the-marvels-cao-hon--xa-hon-va-hay-hon-captian-marvel-3_1699722887968.webp" alt="">
                            <div>
                                <p>[Review] The Marvels: Cao Hơn, Xa Hơn Và Hay Hơn Captian Marvel!</p>
                                <div class="btn_like">
                                    <button><i class="fa-solid fa-thumbs-up"></i>Thích</button>
                                    <button><i class="fa-solid fa-eye"></i>View</button>
                                </div>
                            </div>
                        </a></li>
                    <li><a href=""><img src="./blog/review-the-marvels-cao-hon--xa-hon-va-hay-hon-captian-marvel-3_1699722887968.webp" alt="">
                            <div>
                                <p>[Review] The Marvels: Cao Hơn, Xa Hơn Và Hay Hơn Captian Marvel!</p>
                                <div class="btn_like">
                                    <button><i class="fa-solid fa-thumbs-up"></i>Thích</button>
                                    <button><i class="fa-solid fa-eye"></i>View</button>
                                </div>
                            </div>
                        </a></li>
                </ul>
            </aside>
        </div>
        <div class="btn_xemthem">
            <a href="">Xem thêm <i class="fa-solid fa-angle-up fa-rotate-90"></i></a>
        </div>
    </div>
    <div class="film">
        <div class="film_text">
            <ul>
                <li>TIN KHUYẾN MÃI</li>
            </ul>
        </div>
        <div class="tin_khuyen_mai">
            <ul>
                <li>
                    <img src="./blog/450_1642060258003.webp" alt="">
                    <span>VNPAY Giảm 20%</span>
                </li>
                <li>
                    <img src="./blog/drpn-1800-x-1200-px_1696826981101.webp" alt="">
                    <span>Đất Rừng Phương Nam: Ân Bản Sách
                        Đồng Hành Cùng Phim Điện Ảnh</span>
                </li>
                <li>
                    <img src="./blog/bangqltv-2023-digital-1350x900_1673940812370.webp" alt="">
                    <span>
                        Chào 2023. Đón Mưa Quà Tặng Thành
                        Viên Từ Galaxy Cinemal
                    </span>
                </li>
                <li>
                    <img src="./blog/quy-dinh-do-tuoi-digital-1350x900_1684835377244.webp" alt="">
                    <span>
                        Tiêu Chí Phân Loại Phim Theo Lứa Tuổi
                    </span>
                </li>
            </ul>
        </div>
        <div class="film">
            <div class="film_text">
                <ul>
                    <li>GALAXY CINEMA</li>
                </ul>
            </div>
            <div class="GALAXY_CINEMA">
                Galaxy Cinema là một trong những công ty tư nhân đầu tiên về điện ảnh được thành lập từ năm 2003, đã khẳng định thương hiệu là 1 trong 10 địa điểm vui chơi giải trí được yêu thích nhất. Ngoài hệ thống rạp chiếu phim hiện đại, thu hút hàng triệu lượt người đến xem, Galaxy Cinema còn hấp dẫn khán giả bởi không khí thân thiện cũng như chất lượng dịch vụ hàng đầu.<br><br> Đến website galaxycine.vn, khách hàng sẽ dễ dàng tham khảo các phim hay nhất, phim mới nhất đang chiếu hoặc sắp chiếu luôn được cập nhật thường xuyên. Lịch chiếu tại tất cả hệ thống rạp chiếu phim của Galaxy Cinema cũng được cập nhật đầy đủ hàng ngày hàng giờ trên trang chủ.<br><br> Giờ đây đặt vé tại Galaxy Cinema càng thêm dễ dàng chỉ với vài thao tác vô cùng đơn giản. Để mua vé, hãy vào tab Mua vé. Quý khách có thể chọn Mua vé theo phim, theo rạp, hoặc theo ngày. Sau đó, tiến hành mua vé theo các bước hướng dẫn. Chỉ trong vài phút, quý khách sẽ nhận được tin nhắn và email phản hồi Đặt vé thành công của Galaxy Cinema. Quý khách có thể dùng tin nhắn lấy vé tại quầy vé của Galaxy Cinema hoặc quét mã QR để một bước vào rạp mà không cần tốn thêm bất kỳ công đoạn nào nữa.<br><br> Nếu bạn đã chọn được phim hay để xem, hãy đặt vé cực nhanh bằng box Mua Vé Nhanh ngay từ Trang Chủ. Chỉ cần một phút, tin nhắn và email phản hồi của Galaxy Cinema sẽ gửi ngay vào điện thoại và hộp mail của bạn.<br><br> Nếu chưa quyết định sẽ xem phim mới nào, hãy tham khảo các bộ phim hay trong mục Phim Đang Chiếu cũng như Phim Sắp Chiếu tại rạp chiếu phim bằng cách vào mục Bình Luận Phim ở Góc Điện Ảnh để đọc những bài bình luận chân thật nhất, tham khảo và cân nhắc. Sau đó, chỉ việc đặt vé bằng box Mua Vé Nhanh ngay ở đầu trang để chọn được suất chiếu và chỗ ngồi vừa ý nhất. <br><br>Galaxy Cinema luôn có những chương trình khuyến mãi, ưu đãi, quà tặng vô cùng hấp dẫn như giảm giá vé, tặng vé xem phim miễn phí, tặng Combo, tặng quà phim… dành cho các khách hàng.<br><br> Trang web galaxycine.vn còn có mục Góc Điện Ảnh - nơi lưu trữ dữ liệu về phim, diễn viên và đạo diễn, những bài viết chuyên sâu về điện ảnh, hỗ trợ người yêu phim dễ dàng hơn trong việc lựa chọn phim và bổ sung thêm kiến thức về điện ảnh cho bản thân. Ngoài ra, vào mỗi tháng, Galaxy Cinema cũng giới thiệu các phim sắp chiếu hot nhất trong mục Phim Hay Tháng.<br><br> Hiện nay, Galaxy Cinema đang ngày càng phát triển hơn nữa với các chương trình đặc sắc, các khuyến mãi hấp dẫn, đem đến cho khán giả những bộ phim bom tấn của thế giới và Việt Nam nhanh chóng và sớm nhất.
            </div>
        </div>
</section>