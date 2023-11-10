//Banner
var KichThuoc = document.querySelector(".advertising_banners").clientWidth;
var ChuyenAnh = document.querySelector(".anh_banner");
var Img = ChuyenAnh.getElementsByTagName("img");
var Max = KichThuoc * Img.length;
Max -= KichThuoc;
var Chuyen = 0;
function NextAnh() {
  if (Chuyen < Max) {
    Chuyen += KichThuoc;
  } else {
    Chuyen = 0;
  }
  ChuyenAnh.style.marginLeft = "-" + Chuyen + "px";
}
function BackAnh() {
  Chuyen -= KichThuoc;

  ChuyenAnh.style.marginLeft = "-" + Chuyen + "px";
}
setInterval(() => {
  NextAnh();
}, 5000);
