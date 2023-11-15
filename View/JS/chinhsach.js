//
function query(gia_tri) {
  return document.querySelector(gia_tri);
}
//
var text = query(".chinh_main");
var text1 = query(".nut_thele");
var text2 = query(".nut_quyenloi");
var text3 = query(".nut_huongdan");
function the_le() {
  text.innerHTML = `
    <div class="the_le">
    <h5>Thể Lệ</h5>
    <div class="text1_tl">
        Chương trình khách hàng thân thiết Galaxy là chương trình ưu đãi dựa trên điểm tích lũy của các thành viên gồm Star, G-star, X-star. Với mỗi giao dịch tại hệ thống rạp Galaxy, bạn sẽ nhận được điểm thưởng tương ứng. Hình thức tích lũy như sau:
    </div><br>
    <img src="./IMG/the_le1.png" alt="">
    <div class="text2_tl">
        <div class="nho1_text2_tl">
            <p><span>Star :</span> Tích lũy ở mức 3% trên tổng giá trị/số tiền giao dịch </p>
            <p><span>G-Star :</span> Tích lũy ở mức 5% trên tổng giá trị/số tiền giao dịch </p>
            <p><span>X-Star :</span> Tích lũy ở mức 10% trên tổng giá trị/số tiền giao dịch</p>


        </div>
        <div class="nho2_text2_tl">
            <p>Điểm tích lũy được gọi là Stars</p>
            <p> Ví dụ: Khách hàng là thành viên hạng Star, khi phát sinh giao dịch 200.000 đồng, được tích điểm ở mức 3% tương đương 6 Stars (6 Điểm)</p>
            <p>Cách làm tròn điểm thưởng như sau:</p>

        </div>
        <div class="nho3_text2_tl">


            <p>- Từ 0.1 đến 0.4: làm tròn xuống (Ví dụ: 3.2 điểm sẽ được tích vào tài khoản 3 điểm) </p>
            <p> - Từ 0.5 đến 0.9: làm tròn lên (Ví dụ: 3.5 điểm sẽ được tích vào tài khoản 4 điểm) </p>
            <p>1 điểm tích lũy sẽ được quy đổi thành 1.000 đồng và được sử dụng cho việc thanh toán vé/bắp nước tại hệ thống Galaxy Cinema. Điểm tích lũy không có giá trị quy đổi thành tiền mặt hoặc hoàn lại khi giao dịch đã được ghi nhận thành công.</p>

        </div>
    </div>
    <div class="text3_tl">
        <h5>Cấp độ thành viên: </h5>
        <img src="./IMG/the_le2.jpg" alt="">
        <div class="nho1_text3_tl">

            <p><span>Star</span> là thành viên thân thiết có tổng chi tiêu trong năm dưới 2,000,000 đồng tính từ ngày 1/1-31/12.
            </p>
            <p><span>G-star</span> là thành viên thân thiết có tổng chi tiêu trong năm từ 2,000,000 đồng đến 3,999,999 đồng tính từ ngày 1/1-31/12.
            </p>
            <p><span>X-star</span> là thành viên thân thiết có tổng chi tiêu từ 4,000,000 đồng trở lên tính từ ngày 1/1-31/12.</p>
        </div>
    </div>
    <div class="text4_tl">
        <h6>Lưu ý </h6>
        <div class="text4_tl_nho">
            <li>pThông tin định danh thành viên gồm có email và số điện thoại bắt buộc phải hợp lệ.</li>
            <li><span>Email không hợp lệ </span>là email không có thực tại thời điểm <span>Galaxy Cinema</span>  rà soát dữ liệu thành viên.</li>
            <li><span>Số điện thoại không hợp lệ</span> là số điện thoại không liên lạc được hoặc số điện thoại không thuộc sở hữu của chủ tài khoản thành viên ở thời điểm Galaxy Cinema rà soát dữ liệu thành viên.</></li>
            <li>Với các trường hợp không hợp lệ, Galaxy Cinema có quyền xóa tài khoản thành viên mà không cần thông báo trước.</li>
            <li>Tài khoản thành viên không có đủ thông tin định danh gồm <span>email </span> và <span> số điện thoại hợp lệ, Galaxy Cinema</span> có quyền xóa tài khoản thành viên mà không cần thông báo trước.</li>
            <li>Điểm tích lũy có giá trị áp dụng tại tất cả các rạp Galaxy Cinema trên toàn quốc.</li>
            <li>Điểm tích lũy có thời hạn sử dụng là 01 năm</li>
            <li>Điểm tích lũy có thời hạn sử dụng là 01 năm</li>
            <li>Bạn có thể dễ dàng kiểm tra điểm tích lũy của mình trên Website Galaxy Cinema hoặc Ứng dụng GLX trên điện thoại (Mobile App).</li>

        </div>
    </div>
</div>
   `;
  text1.style.color = "white";

  text1.style.borderRadius = "10px";
  text1.style.backgroundColor = "#034EA2";
  text2.style.backgroundColor = "rgb(235, 240, 241)";
  text3.style.backgroundColor = "rgb(235, 240, 241)";
  text2.style.color = "black";
  text3.style.color = "black";
}
function quyen_loi() {
  text.innerHTML = `
  <section class="quyen_loi">
    <h5>Quyền lợi chính :</h5>
    <img src="./IMG/quuyen_loi.jpg" alt="">
    <div class="text_quyenloi">
        <li>Combo U22 sẽ được tích lũy điểm ở mức 3% cho mọi hạng thành viên.</li>
        <li><span>Quà tặng sinh nhật (combo 2, vé xem phim 2D dành cho thành viên hạng G-Star, X-Star) được thả vào tài khoản thành viên & có giá trị sử dụng hiệu lực trong tháng sinh nhật thành viên. Thành viên phải có ít nhất 1 giao dịch (vé/ bắp nước) với chi tiêu > 0 trong vòng 12 tháng trở lại.</span></li>
        <li><span>Vé 2D tặng tháng sinh nhật cho thành viên VIP (G-Star, X-Star) có hiệu lực sử dụng trong tháng sinh nhật thành viên hợp lệ.
            </span></li>
        <li><span>Vé 2D tặng nâng hạng thành viên có hiệu lực 04 tháng kể từ khi thành viên được nâng hạng.
            </span></li>
        <li><span>Trường hợp thành viên thăng hạng từ G-Star lên X-Star trong cùng năm 2023, số vé 2D được tặng tối đa là 04 vé.
            </span></li>
    </div>
</section>
   `;
  text2.style.color = "white";

  text2.style.backgroundColor = "#034EA2";
  text2.style.borderRadius = "10px";
  text1.style.color = "black";
  text3.style.color = "black";
  text1.style.backgroundColor = "rgb(235, 240, 241)";
  text3.style.backgroundColor = "rgb(235, 240, 241)";
}
function huong_dan() {
  text.innerHTML = `
    
<section class="tong_huong_dan">
<h4>HƯỚNG DẪN </h4>
<div class="text1_huong_dan">
    <h5>Tải moblie app</h5>
    <p>+ App Android: <a href="#">https://bit.ly/2N6LjLx</a></p>
    <p>+ App iOS: <a href="#">https://apple.co/2JA4sDl</a> </p>
    <p>+ Scan QR để tải app</p>
</div>
<img src="./IMG/qr.jpg" alt="">

<div class="text2_huong_dan">
    <h5>Hướng dẫn tích lũy điểm:</h5>
    <p>Thành viên mua bất kỳ sản phẩm đang được bán tại các rạp <span>Galaxy Cinema </span>trên toàn quốc hoặc thanh toán trực tuyến sẽ được tích lũy điểm thưởng tương ứng vào tài khoản.

        Áp dụng với tất cả sản phẩm: vé xem phim, nước uống, thức ăn, comb
        <span>Lưu ý:</span> Đối với những giao dịch trực tuyến, thành viên phải đăng nhập vào tài khoản mới được quyền tích điểm hợp lệ.
    </p>
</div>
<div class="text2_huong_dan">
    <h5>Hướng dẫn đổi điểm thanh toán trực tiếp tại rạp:</h5>
    <p>Thành viên đổi điểm trực tiếp tại các cụm rạp Galaxy Cinema theo các bước sau: <br>
        Bước 1: Thành viên trình barcode (mã thành viên) trên ứng dụng Galaxy Cinema tại quầy vé hoặc quầy bắp nước <br>
        Bước 2: Thông báo với nhân viên số điểm muốn đổi (tối thiểu 20 điểm, tối đa 100 điểm mỗi giao dịch vé/ bắp nước) <br>
        Bước 3: Nhân viên kiểm tra số điểm tích lũy của thành viên. Nếu hợp lệ sẽ tiến hành đổi điểm thanh toán cho khách hàng thành viên <br>
    </p>
</div>
<div class="text2_huong_dan">
    <h5> Hướng dẫn đổi điểm thanh toán trực tiếp trên ứng dụng Galaxy Cinema</h5>

    <p>
        Thành viên đổi điểm trực tiếp trên ứng dụng Galaxy Cinema theo các bước sau: <br>
        Bước 1: Khách hàng đăng nhập vào ứng dụng Galaxy Cinema, đặt vé bình thường <br>
        Bước 2: Ở mục Thanh toán, chọn Áp dụng điểm Star muốn đổi

    </p>

</div>
<img src="./IMG/matbiec.png" alt="">
<div class="text2_huong_dan">

    <p>Bước 3: Nhập số điểm Stars muốn đổi (tối thiểu 20 điểm, tối đa 100 điểm):</p>
</div>
<img src="./IMG/galaxy.png" alt="">
<div class="text2_huong_dan">

<p>Bước 4: Thực hiện thanh toán bình thường cho giá trị còn lại của giao dịch
</p>
</div>
<img src="./IMG/matbiec2.png" alt="">

</section>
     `;
  text3.style.color = "white";

  text3.style.backgroundColor = "#034EA2";
  text3.style.borderRadius = "10px";
  text2.style.color = "black";
  text1.style.color = "black";
  text2.style.backgroundColor = "rgb(235, 240, 241)";
  text1.style.backgroundColor = "rgb(235, 240, 241)";
}
