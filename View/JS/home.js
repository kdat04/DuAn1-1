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
//nút tìm kiếm
var trangthai = false;
function display_search() {
  var input_search = document.querySelector(".input_search");
  if (trangthai == false) {
    input_search.style.display = "block";
    trangthai = true;
  } else {
    input_search.style.display = "none";
    trangthai = false;
  }
}

// hienthingay
const day = document.querySelector(".day");
const listDay = [
  "Monday",
  "Tuesday",
  "Wednesday",
  "Thursday",
  "Friday",
  "Saturday",
  "Sunday",
];

setInterval(() => {
  const Day = new Date();
  const getDay = listDay[Day.getDay()]; //lấy thứ
  day.innerText = getDay;//lấy thứ
}, 500);
