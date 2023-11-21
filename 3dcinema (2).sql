-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 21, 2023 lúc 03:31 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `3dcinema`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `ten_bill` varchar(256) NOT NULL,
  `id_user` int(11) NOT NULL,
  `diachi_bill` varchar(256) NOT NULL,
  `sdt_bill` int(13) NOT NULL,
  `email_bill` varchar(40) NOT NULL,
  `ngay_tt` varchar(30) NOT NULL,
  `tt_bill` int(1) NOT NULL,
  `pttt` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `noidung` varchar(256) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_phim` int(11) NOT NULL,
  `timebl` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `id_user`, `id_phim`, `timebl`) VALUES
(1, '1', 4, 6, '08:22:pm 20-11-2023'),
(2, 'phim hay', 4, 8, '08:23:pm 20-11-2023');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cthd`
--

CREATE TABLE `cthd` (
  `id` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `thanh_tien` int(11) NOT NULL,
  `id_vé` int(11) NOT NULL,
  `id_dich_vu` int(10) NOT NULL,
  `id_bill` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dich_vu`
--

CREATE TABLE `dich_vu` (
  `id` int(11) NOT NULL,
  `nuoc` varchar(50) NOT NULL,
  `do_an` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khung_gio_chieu`
--

CREATE TABLE `khung_gio_chieu` (
  `id` int(11) NOT NULL,
  `id_xuat_chieu` int(11) NOT NULL,
  `gio_chieu` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khung_gio_chieu`
--

INSERT INTO `khung_gio_chieu` (`id`, `id_xuat_chieu`, `gio_chieu`) VALUES
(1, 1, '19:00:00'),
(2, 1, '20:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_phim`
--

CREATE TABLE `loai_phim` (
  `id` int(11) NOT NULL,
  `ten_loaiphim` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loai_phim`
--

INSERT INTO `loai_phim` (`id`, `ten_loaiphim`) VALUES
(2, 'Kinh dị'),
(3, 'Tình cảm'),
(6, 'Gia đình '),
(7, 'Giả tưởng'),
(8, 'Hài'),
(9, 'Hành động'),
(10, 'Anime');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_ve`
--

CREATE TABLE `loai_ve` (
  `id` int(11) NOT NULL,
  `ten_loaive` int(11) NOT NULL,
  `gia_loaive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phim`
--

CREATE TABLE `phim` (
  `id` int(12) NOT NULL,
  `ten_phim` varchar(256) NOT NULL,
  `gia` int(11) NOT NULL,
  `img_phim` varchar(256) NOT NULL,
  `img_banner` varchar(256) NOT NULL,
  `mota` varchar(1000) NOT NULL,
  `nsx` varchar(30) NOT NULL,
  `nph` varchar(30) NOT NULL,
  `view` int(11) NOT NULL,
  `thoi_luong_phim` int(11) NOT NULL,
  `cs_danh_gia` float NOT NULL,
  `quocgia` varchar(30) NOT NULL,
  `dienvien1` varchar(30) NOT NULL,
  `dienvien2` varchar(30) NOT NULL,
  `dienvien3` varchar(30) NOT NULL,
  `tt` tinyint(1) DEFAULT 0 COMMENT '0.đang chiếu 1.sắp chiếu',
  `id_loaiphim` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `phim`
--

INSERT INTO `phim` (`id`, `ten_phim`, `gia`, `img_phim`, `img_banner`, `mota`, `nsx`, `nph`, `view`, `thoi_luong_phim`, `cs_danh_gia`, `quocgia`, `dienvien1`, `dienvien2`, `dienvien3`, `tt`, `id_loaiphim`) VALUES
(6, 'Người vợ cuối cùng', 1000000, '500x750-nvcc_1698985267862.webp', 'banner_ngvkcuoicung.webp', 'Lấy cảm hứng từ tiểu thuyết Hồ Oán Hận, của nhà văn Hồng Thái, Người Vợ Cuối Cùng là một bộ phim tâm lý cổ trang, lấy bối cảnh Việt Nam vào triều Nguyễn. Linh - Người vợ bất đắc dĩ của một viên quan tri huyện, xuất thân là con của một gia đình nông dân nghèo khó, vì không thể hoàn thành nghĩa vụ sinh con nối dõi nên đã chịu sự chèn ép của những người vợ lớn trong gia đình. Sự gặp gỡ tình cờ của cô và người yêu thời thanh mai trúc mã của mình - Nhân đã dẫn đến nhiều câu chuyện bất ngờ xảy ra khiến cuộc sống cô hoàn toàn thay đổi. Phim mới Người Vợ Cuối Cùng ra mắt tại các rạp chiếu phim từ 03.11.2023.', 'Victor Vũ', '2023-11-01', 16, 0, 0, 'Việt Nam', 'Kaity Nguyễn ', 'Quang Thắng', 'Thuận Nguyễn', 0, 6),
(8, 'tết ở làng địa ngục', 100000, 'tet_lang_dia_nguc.jpg', 'banner_tetolangdianguc.jpg', 'Phim xoay quanh những cái chết bi thảm ở làng Địa ngục. Đây vốn là nơi sinh sống của hậu duệ một toán cướp tàn ác khi xưa, họ dạt về nơi thâm sơn cùng cốc, vừa để chạy trốn, vừa để bắt đầu cuộc sống mới. Nhưng tàn dư của tội ác vẫn khiến con cháu nhiều đời sau của họ phải trả giá', 'Trần Hữu Tấn', '2023-11-01', 10, 0, 0, 'Việt Nam', 'NSƯT Văn Báu', 'NSƯT Phú Đôn', 'NSƯT Hạnh Thúy', 0, 2),
(9, 'Pokemon', 3000000, 'pokemon_one.jpg', 'banner_pokemon.jpg', 'Ra đời từ năm 1996, trải qua gần 3 thập kỷ thì cái tên Pokemon vẫn chiếm được cảm tình của đông đảo khán giả trên toàn cầu nói chung và Việt Nam nói riêng. Nội dung chính của Pokemon kể về hành trình tìm kiếm và huấn luyện Pokemon của anh chàng Satoshi với nhiều hiểm nguy và cả những bất ngờ thú vị.\r\n\r\nNgay từ thời điểm vừa được ra mắt thì bộ anime Pokemon đã nhận được sự yêu thích của đông đảo khán giả tại Nhật Bản và trên toàn thế giới. Nếu các bạn còn nhớ thì đã từng có thời gian trò chơi Pokemon Go ăn theo bộ anime này đã gây sốt trên toàn cầu và thu hút rất nhiều người chơi.', 'Kunihiko Yuyama', '2023-11-01', 10, 0, 0, 'nhật bản', 'Bill Rogers', 'Ueda Yuji', 'Matsumoto Rica', 0, 10),
(10, 'Doraemon đảo giấu vàng ', 250000, 'doraemon.jpg', 'banner_doreamon.webp', '\"Nobita và đảo giấu vàng\" là movie thứ 38 cộp mác chú mèo máy siêu đáng yêu Doraemon. Là người bạn quen thuộc làm nên tuổi thơ của nhiều thế hệ, có sức ảnh hưởng lớn thậm chí trở thành một biểu tượng văn hóa của nước Nhật, seri phim điện ảnh về chú mèo máy không tai đã trải qua gần 40 năm vẫn chưa bao giờ giảm sức hút. Và năm nay, không uổng phí sự mong đợi của người hâm mộ, nhà sản xuất phim đã mang đến cho chúng ta một tác phẩm không thể tuyệt vời hơn: NOBITA VÀ ĐẢO GIẤU VÀNG.', 'Imai Kazuaki', '2023-11-01', 0, 0, 0, 'Nhật Bản', 'Ōyama Nobuyo', 'Masako Nozawa', 'Mizuta Wasabi', 0, 10),
(11, 'One Piece Film Red  ', 350000, 'onepi_red.jpg', 'banner_onepi.webp', 'Bối cảnh của One Piece Film Red là một hòn đảo âm nhạc Elegia - nơi diva nổi tiếng bậc nhất thế giới tên Uta thực hiện buổi biểu diễn trực tiếp đầu tiên trước công chúng. Băng hải tặc Mũ Rơm và các fan khác của Uta từ nhiều thế lực khác nhau như hải tặc hay hải quân đều đã cùng tề tựu về buổi biểu diễn này. Biến cố bắt đầu ngay khi sự thật kinh hoàng được tiết lộ: Uta chính là con gái của Shanks tóc đỏ – một g mặt của Tứ hoàng huyền thoại.', 'Taniguchi Goro', '2022-11-18', 1, 0, 0, 'nhật bản', 'Tanaka Mayumi', 'Hiroaki Hirata', 'Kazuya Nakai', 0, 10),
(12, 'Biệt Đội Marvels  ', 250000, 'bietdoi.webp', '', 'Carol Danvers bị vướng vào sức mạnh của Kamala Khan và Monica Rambeau, buộc họ phải hợp tác với nhau để cứu vũ trụ.  The Marvels (tựa Việt: Biệt đội Marvel) là dự án cuối cùng của Vũ trụ Điện ảnh Marvel (MCU) trong năm 2023, đóng vai trò quan trọng khi kết nối 3 mini-series ăn khách đã ra mắt là WandaVision, Ms. Marvel và Secret Invasion. Không những đánh dấu màn tái xuất của nhân vật được khán giả yêu thích Captain Marvel Carol Denvers (Brie Larson) trên màn ảnh rộng, bộ phim còn giới thiệu đến khán giả liên minh 3 \"chị đại\" có vai trò quan trọng đối với tương lai của MCU. Câu chuyện lần này xảy ra sau các sự kiện trong Captain Marvel (2019), Dar-Benn (The Accuser) đã mất đi quê nhà và giờ đây, ả đang tìm cách trả thù mọi hành tinh từng được Carol cứu giúp. Bằng cách nào đó, Dar-Benn sở hữu được chiếc vòng có sự liên kết với Ms. Marvel/Kamala Khan (Iman Vellani) và \"Spectrum\" Monica Rambeau (Teyonah Parris). Từ đây, nữ ác nhân có thể thao túng liên kết ánh sáng giữa các siêu anh hùng ', 'Nia DaCosta  ', '2023-11-09', 1, 0, 0, '', '', '', '', 0, 7),
(13, 'Yêu Lại Vợ Ngầu ', 350000, 'vkngau.webp', 'banner_vkngau.webp', 'Cặp vợ chồng trẻ No Jung Yeol (Kang Ha-neul) và Hong Na Ra (Jung So-min) từ cuộc sống hôn nhân màu hồng dần “hiện nguyên hình” trở thành cái gai trong mắt đối phương với vô vàn thói hư, tật xấu. Không thể đi đến tiếng nói chung, Jung Yeol và Na Ra quyết định ra toà ly dị. Tuy nhiên, họ phải chờ 30 ngày cho đến khi mọi thủ tục chính thức được hoàn tất. \r\n\r\nTrong khoảng thời gian này, một vụ tai nạn xảy ra khiến cả hai mất đi ký ức và không nhớ người kia là ai. 30 ngày chờ đợi để được “đường ai nấy đi” nhưng nhiều tình huống trớ trêu khiến cả hai bắt đầu nảy sinh tình cảm trở lại. Liệu khi nhớ ra mọi thứ, họ vẫn sẽ ký tên vào tờ giấy ly hôn?\r\n\r\nPhim mới Yêu Lại Vợ Ngầu dự kiến ra mắt tại các rạp chiếu phim toàn quốc từ 10.11.2023\r\n', 'Nam Dae-Joong ', '2023-11-08', 1, 0, 0, '', '', '', '', 0, 3),
(14, 'Oán Linh  ', 250000, 'oanlinh.webp', 'banner_oanlinh.jpg', 'Để dành nhiều thời gian hơn cho hội họa và chăm sóc đứa con mới sinh, Si Ling đã dọn về quê nhà và thuê một người bảo mẫu trong thời gian ở cử. Nguồn cảm hứng sáng tạo trở lại cũng là lúc những tác phẩm kỳ dị xuất hiện. Những hiện tượng siêu nhiên quái gở khiến người mẹ và đứa trẻ mới sinh chìm trong hoảng sợ tột độ. Phim mới Oán Linh dự kiến ra mắt tại các rạp chiếu phim toàn quốc từ 24.11.2023.\r\n', 'Kelvin Tong  ', '2023-11-24', 0, 0, 0, '', 'Rebecca Lim', 'Cynthia Koh ', '', 0, 2),
(15, 'Quỷ Lùn Tinh Nghịch:', 350000, 'quyluntinhnghich.webp', 'banner_quylun.jpg', 'Sự xuất hiện đột ngột của John Dory, anh trai thất lạc đã lâu của Branch mở ra quá khứ bí mật được che giấu bấy lâu nay của Branch. Đó là quá khứ về một ban nhạc có tên BroZone từng rất nổi tiếng nhưng đã tan rã. Hành trình đi tìm lại các thành viên để làm một ban nhạc như xưa trở thành chuyến phiêu lưu âm nhạc đầy cảm xúc, tràn trề hi vọng về một cuộc sum họp gia đình tuyệt với nhất.\r\n', 'DreamWorks  ', '2023-11-17', 0, 0, 0, 'Mỹ ', 'Anna Kendrick  ', 'Zooey Deschanel  ', 'Daveed Diggs  ', 0, 8),
(16, 'Chiếm Đoạt ', 250000, 'chiemdoat.webp', 'banner_chiemdoat.jpg', 'Kể về người vợ của một gia đình thượng lưu thuê cô bảo mẫu “trong mơ” để chăm sóc con trai mình. Nhưng cô không ngờ rằng, phía sau sự trong sáng, tinh khiết kia, cô bảo mẫu luôn che giấu âm mưu nhằm phá hoại hạnh phúc gia đình và khiến cuộc sống của cô thay đổi mãi mãi. Phim mới Chiếm Đoạt dự kiến ra mắt tại các rạp chiếu phim toàn quốc từ 24.11.2023.\r\n\r\n', 'Thắng Vũ', '2023-11-16', 7, 0, 0, 'Việt Nam', 'Miu Lê  ', 'Karik ', 'Lãnh Thanh ', 0, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phong_chieu`
--

CREATE TABLE `phong_chieu` (
  `id` int(11) NOT NULL,
  `ten_phongchieu` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `phong_chieu`
--

INSERT INTO `phong_chieu` (`id`, `ten_phongchieu`) VALUES
(1, 'Phòng A1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `ten_user` varchar(100) NOT NULL,
  `matkhau` varchar(256) NOT NULL,
  `email` varchar(32) NOT NULL,
  `diachi` varchar(256) NOT NULL,
  `nam_sinh` varchar(20) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 0,
  `sdt` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `ten_user`, `matkhau`, `email`, `diachi`, `nam_sinh`, `role`, `sdt`) VALUES
(1, 'vuviet', '202cb962ac59075b964b07152d234b70', 'vuviet071104@gmail.com', '', '', 1, 1),
(2, 'duoc', '202cb962ac59075b964b07152d234b70', 'duoc071104@gmail.com', '', '', 1, 1),
(3, 'dat', '202cb962ac59075b964b07152d234b70', 'dat2108@gmail.com', '', '', 1, 1),
(4, 'Nguyễn Thị Minh Châu', 'c4ca4238a0b923820dcc509a6f75849b', 'minhchau1111@gmail.com', '', '', 0, 0),
(5, 'Nguyễn Chí Đức', 'c4ca4238a0b923820dcc509a6f75849b', 'chiduc1611@gmail.com', '', '', 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ve`
--

CREATE TABLE `ve` (
  `id` int(11) NOT NULL,
  `id_phim` int(11) NOT NULL,
  `gia_ve` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `ngay_dat` varchar(30) NOT NULL,
  `ghe` varchar(50) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_loaive` int(11) NOT NULL,
  `id_kgc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `xuat_chieu`
--

CREATE TABLE `xuat_chieu` (
  `id` int(11) NOT NULL,
  `id_phongchieu` int(11) NOT NULL,
  `id_phim` int(11) NOT NULL,
  `ngay_chieu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `xuat_chieu`
--

INSERT INTO `xuat_chieu` (`id`, `id_phongchieu`, `id_phim`, `ngay_chieu`) VALUES
(1, 1, 6, '2023-11-01'),
(3, 1, 12, '2023-11-09'),
(4, 1, 12, '0000-00-00'),
(5, 1, 13, '2023-11-11'),
(6, 1, 13, '2023-11-11');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user_users` (`id_user`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_phim_bl` (`id_phim`),
  ADD KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `cthd`
--
ALTER TABLE `cthd`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_dichvu` (`id_dich_vu`);

--
-- Chỉ mục cho bảng `dich_vu`
--
ALTER TABLE `dich_vu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khung_gio_chieu`
--
ALTER TABLE `khung_gio_chieu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_xuatchieu` (`id_xuat_chieu`);

--
-- Chỉ mục cho bảng `loai_phim`
--
ALTER TABLE `loai_phim`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loai_ve`
--
ALTER TABLE `loai_ve`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `phim`
--
ALTER TABLE `phim`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_loaiphim` (`id_loaiphim`);

--
-- Chỉ mục cho bảng `phong_chieu`
--
ALTER TABLE `phong_chieu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ve`
--
ALTER TABLE `ve`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `xuat_chieu`
--
ALTER TABLE `xuat_chieu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_phongchieu` (`id_phongchieu`),
  ADD KEY `id_phim_xchieu` (`id_phim`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `cthd`
--
ALTER TABLE `cthd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `dich_vu`
--
ALTER TABLE `dich_vu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khung_gio_chieu`
--
ALTER TABLE `khung_gio_chieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `loai_phim`
--
ALTER TABLE `loai_phim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `loai_ve`
--
ALTER TABLE `loai_ve`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `phim`
--
ALTER TABLE `phim`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `phong_chieu`
--
ALTER TABLE `phong_chieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `ve`
--
ALTER TABLE `ve`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `xuat_chieu`
--
ALTER TABLE `xuat_chieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `id_user_users` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `id_phim_bl` FOREIGN KEY (`id_phim`) REFERENCES `phim` (`id`),
  ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `cthd`
--
ALTER TABLE `cthd`
  ADD CONSTRAINT `id_bill` FOREIGN KEY (`id`) REFERENCES `bill` (`id`),
  ADD CONSTRAINT `id_dichvu` FOREIGN KEY (`id_dich_vu`) REFERENCES `dich_vu` (`id`),
  ADD CONSTRAINT `id_phim` FOREIGN KEY (`id`) REFERENCES `phim` (`id`);

--
-- Các ràng buộc cho bảng `khung_gio_chieu`
--
ALTER TABLE `khung_gio_chieu`
  ADD CONSTRAINT `id_xuatchieu` FOREIGN KEY (`id_xuat_chieu`) REFERENCES `xuat_chieu` (`id`);

--
-- Các ràng buộc cho bảng `phim`
--
ALTER TABLE `phim`
  ADD CONSTRAINT `id_loaiphim` FOREIGN KEY (`id_loaiphim`) REFERENCES `loai_phim` (`id`);

--
-- Các ràng buộc cho bảng `ve`
--
ALTER TABLE `ve`
  ADD CONSTRAINT `id_loaive` FOREIGN KEY (`id`) REFERENCES `loai_ve` (`id`),
  ADD CONSTRAINT `id_users` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `xuat_chieu`
--
ALTER TABLE `xuat_chieu`
  ADD CONSTRAINT `id_phim_xchieu` FOREIGN KEY (`id_phim`) REFERENCES `phim` (`id`),
  ADD CONSTRAINT `id_phongchieu` FOREIGN KEY (`id_phongchieu`) REFERENCES `phong_chieu` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
