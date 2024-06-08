-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 11, 2024 lúc 04:30 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `3d_cnm`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `ngay_tt` datetime NOT NULL,
  `tt_bill` int(1) DEFAULT 0,
  `thanh_tien` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `ngay_tt`, `tt_bill`, `thanh_tien`) VALUES
(88, '2023-12-04 22:22:50', 1, 869000),
(89, '2023-02-01 13:30:21', 1, 0),
(90, '2023-01-01 13:31:55', 1, 0),
(91, '2023-03-01 13:32:30', 1, 0),
(92, '2023-04-01 13:32:46', 1, 0),
(93, '2023-05-01 13:33:01', 1, 0),
(94, '2023-06-01 13:33:11', 1, 0),
(95, '2023-07-05 07:33:20', 1, 0),
(96, '2023-08-05 07:33:30', 1, 0),
(97, '2023-09-05 07:33:35', 1, 0),
(98, '2023-11-05 07:33:47', 1, 0),
(99, '2023-10-05 07:33:58', 1, 0),
(100, '2023-11-05 16:23:30', 1, 400000),
(101, '2023-12-05 17:34:11', 1, 819000),
(102, '2023-12-06 21:29:42', 1, 400000),
(103, '2023-12-11 13:14:06', 0, 819000);

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
(7, 'phim hay', 9, 6, '10:30:pm 04-12-2023'),
(8, '1', 17, 6, '10:34:pm 04-12-2023');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dich_vu`
--

CREATE TABLE `dich_vu` (
  `id` int(11) NOT NULL,
  `combo` varchar(100) NOT NULL,
  `id_ve` int(11) NOT NULL,
  `tt_dv` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `dich_vu`
--

INSERT INTO `dich_vu` (`id`, `combo`, `id_ve`, `tt_dv`) VALUES
(33, 'Combo-2', 92, 1),
(34, 'Combo-1', 94, 1),
(35, 'Combo-1', 96, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khung_gio_chieu`
--

CREATE TABLE `khung_gio_chieu` (
  `id` int(11) NOT NULL,
  `id_xuat_chieu` int(11) NOT NULL,
  `gio_chieu` time NOT NULL,
  `phong_phim` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khung_gio_chieu`
--

INSERT INTO `khung_gio_chieu` (`id`, `id_xuat_chieu`, `gio_chieu`, `phong_phim`) VALUES
(20, 31, '19:35:00', 'Phòng2'),
(21, 32, '19:36:00', 'Phòng1\r\n'),
(24, 33, '19:00:00', 'Phòng1'),
(26, 33, '22:18:00', 'Phòng1'),
(31, 34, '19:00:00', 'Phòng1'),
(32, 35, '22:30:00', 'Phòng2'),
(33, 36, '19:30:00', 'Phòng1'),
(34, 37, '19:00:00', 'Phòng2'),
(35, 37, '21:00:00', 'Phòng2'),
(36, 38, '19:00:00', 'Phòng1'),
(37, 39, '19:00:00', 'Phòng1'),
(38, 41, '21:29:00', 'Phòng2'),
(39, 30, '20:40:00', 'Phòng1'),
(40, 42, '20:30:00', 'Phòng1');

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
-- Cấu trúc bảng cho bảng `phim`
--

CREATE TABLE `phim` (
  `id` int(12) NOT NULL,
  `ten_phim` varchar(256) NOT NULL,
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

INSERT INTO `phim` (`id`, `ten_phim`, `img_phim`, `img_banner`, `mota`, `nsx`, `nph`, `view`, `thoi_luong_phim`, `cs_danh_gia`, `quocgia`, `dienvien1`, `dienvien2`, `dienvien3`, `tt`, `id_loaiphim`) VALUES
(6, 'Người vợ cuối cùng', '500x750-nvcc_1698985267862.webp', 'banner_ngvkcuoicung.webp', 'Lấy cảm hứng từ tiểu thuyết Hồ Oán Hận, của nhà văn Hồng Thái, Người Vợ Cuối Cùng là một bộ phim tâm lý cổ trang, lấy bối cảnh Việt Nam vào triều Nguyễn. Linh - Người vợ bất đắc dĩ của một viên quan tri huyện, xuất thân là con của một gia đình nông dân nghèo khó, vì không thể hoàn thành nghĩa vụ sinh con nối dõi nên đã chịu sự chèn ép của những người vợ lớn trong gia đình. Sự gặp gỡ tình cờ của cô và người yêu thời thanh mai trúc mã của mình - Nhân đã dẫn đến nhiều câu chuyện bất ngờ xảy ra khiến cuộc sống cô hoàn toàn thay đổi. Phim mới Người Vợ Cuối Cùng ra mắt tại các rạp chiếu phim từ 03.11.2023.', 'Victor Vũ', '2023-11-01', 807, 120, 7.9, 'Việt Nam', 'Kaity Nguyễn ', 'Quang Thắng', 'Thuận Nguyễn', 0, 3),
(8, 'Tết ở làng địa ngục', 'tet_lang_dia_nguc.jpg', 'banner_tetolangdianguc.jpg', 'Phim xoay quanh những cái chết bi thảm ở làng Địa ngục. Đây vốn là nơi sinh sống của hậu duệ một toán cướp tàn ác khi xưa, họ dạt về nơi thâm sơn cùng cốc, vừa để chạy trốn, vừa để bắt đầu cuộc sống mới. Nhưng tàn dư của tội ác vẫn khiến con cháu nhiều đời sau của họ phải trả giá', 'Trần Hữu Tấn', '2023-11-01', 316, 120, 7, 'Việt Nam', 'NSƯT Văn Báu', 'NSƯT Phú Đôn', 'NSƯT Hạnh Thúy', 0, 2),
(9, 'Pokemon', 'pokemon_one.jpg', 'banner_pokemon.jpg', 'Ra đời từ năm 1996, trải qua gần 3 thập kỷ thì cái tên Pokemon vẫn chiếm được cảm tình của đông đảo khán giả trên toàn cầu nói chung và Việt Nam nói riêng. Nội dung chính của Pokemon kể về hành trình tìm kiếm và huấn luyện Pokemon của anh chàng Satoshi với nhiều hiểm nguy và cả những bất ngờ thú vị.\r\n\r\nNgay từ thời điểm vừa được ra mắt thì bộ anime Pokemon đã nhận được sự yêu thích của đông đảo khán giả tại Nhật Bản và trên toàn thế giới. Nếu các bạn còn nhớ thì đã từng có thời gian trò chơi Pokemon Go ăn theo bộ anime này đã gây sốt trên toàn cầu và thu hút rất nhiều người chơi.', 'Kunihiko Yuyama', '2023-11-01', 19, 0, 0, 'nhật bản', 'Bill Rogers', 'Ueda Yuji', 'Matsumoto Rica', 0, 10),
(10, 'Doraemon đảo giấu vàng ', 'doraemon.jpg', 'banner_doreamon.webp', '\"Nobita và đảo giấu vàng\" là movie thứ 38 cộp mác chú mèo máy siêu đáng yêu Doraemon. Là người bạn quen thuộc làm nên tuổi thơ của nhiều thế hệ, có sức ảnh hưởng lớn thậm chí trở thành một biểu tượng văn hóa của nước Nhật, seri phim điện ảnh về chú mèo máy không tai đã trải qua gần 40 năm vẫn chưa bao giờ giảm sức hút. Và năm nay, không uổng phí sự mong đợi của người hâm mộ, nhà sản xuất phim đã mang đến cho chúng ta một tác phẩm không thể tuyệt vời hơn: NOBITA VÀ ĐẢO GIẤU VÀNG.', 'Imai Kazuaki', '2023-11-01', 1, 0, 0, 'Nhật Bản', 'Ōyama Nobuyo', 'Masako Nozawa', 'Mizuta Wasabi', 0, 10),
(11, 'One Piece Film Red  ', 'onepi_red.jpg', 'banner_onepi.webp', 'Bối cảnh của One Piece Film Red là một hòn đảo âm nhạc Elegia - nơi diva nổi tiếng bậc nhất thế giới tên Uta thực hiện buổi biểu diễn trực tiếp đầu tiên trước công chúng. Băng hải tặc Mũ Rơm và các fan khác của Uta từ nhiều thế lực khác nhau như hải tặc hay hải quân đều đã cùng tề tựu về buổi biểu diễn này. Biến cố bắt đầu ngay khi sự thật kinh hoàng được tiết lộ: Uta chính là con gái của Shanks tóc đỏ – một g mặt của Tứ hoàng huyền thoại.', 'Taniguchi Goro', '2022-11-18', 1, 0, 0, 'nhật bản', 'Tanaka Mayumi', 'Hiroaki Hirata', 'Kazuya Nakai', 0, 10),
(12, 'Biệt Đội Marvels  ', 'bietdoi.webp', '', 'Carol Danvers bị vướng vào sức mạnh của Kamala Khan và Monica Rambeau, buộc họ phải hợp tác với nhau để cứu vũ trụ.  The Marvels (tựa Việt: Biệt đội Marvel) là dự án cuối cùng của Vũ trụ Điện ảnh Marvel (MCU) trong năm 2023, đóng vai trò quan trọng khi kết nối 3 mini-series ăn khách đã ra mắt là WandaVision, Ms. Marvel và Secret Invasion. Không những đánh dấu màn tái xuất của nhân vật được khán giả yêu thích Captain Marvel Carol Denvers (Brie Larson) trên màn ảnh rộng, bộ phim còn giới thiệu đến khán giả liên minh 3 \"chị đại\" có vai trò quan trọng đối với tương lai của MCU. Câu chuyện lần này xảy ra sau các sự kiện trong Captain Marvel (2019), Dar-Benn (The Accuser) đã mất đi quê nhà và giờ đây, ả đang tìm cách trả thù mọi hành tinh từng được Carol cứu giúp. Bằng cách nào đó, Dar-Benn sở hữu được chiếc vòng có sự liên kết với Ms. Marvel/Kamala Khan (Iman Vellani) và \"Spectrum\" Monica Rambeau (Teyonah Parris). Từ đây, nữ ác nhân có thể thao túng liên kết ánh sáng giữa các siêu anh hùng ', 'Nia DaCosta  ', '2023-11-09', 5, 0, 0, '', '', '', '', 0, 7),
(13, 'Yêu Lại Vợ Ngầu ', 'vkngau.webp', 'banner_vkngau.webp', 'Cặp vợ chồng trẻ No Jung Yeol (Kang Ha-neul) và Hong Na Ra (Jung So-min) từ cuộc sống hôn nhân màu hồng dần “hiện nguyên hình” trở thành cái gai trong mắt đối phương với vô vàn thói hư, tật xấu. Không thể đi đến tiếng nói chung, Jung Yeol và Na Ra quyết định ra toà ly dị. Tuy nhiên, họ phải chờ 30 ngày cho đến khi mọi thủ tục chính thức được hoàn tất. \r\n\r\nTrong khoảng thời gian này, một vụ tai nạn xảy ra khiến cả hai mất đi ký ức và không nhớ người kia là ai. 30 ngày chờ đợi để được “đường ai nấy đi” nhưng nhiều tình huống trớ trêu khiến cả hai bắt đầu nảy sinh tình cảm trở lại. Liệu khi nhớ ra mọi thứ, họ vẫn sẽ ký tên vào tờ giấy ly hôn?\r\n\r\nPhim mới Yêu Lại Vợ Ngầu dự kiến ra mắt tại các rạp chiếu phim toàn quốc từ 10.11.2023\r\n', 'Nam Dae-Joong ', '2023-11-08', 7, 100, 8, '', '', '', '', 1, 3),
(14, 'Oán Linh  ', 'oanlinh.webp', 'banner_oanlinh.jpg', 'Để dành nhiều thời gian hơn cho hội họa và chăm sóc đứa con mới sinh, Si Ling đã dọn về quê nhà và thuê một người bảo mẫu trong thời gian ở cử. Nguồn cảm hứng sáng tạo trở lại cũng là lúc những tác phẩm kỳ dị xuất hiện. Những hiện tượng siêu nhiên quái gở khiến người mẹ và đứa trẻ mới sinh chìm trong hoảng sợ tột độ. Phim mới Oán Linh dự kiến ra mắt tại các rạp chiếu phim toàn quốc từ 24.11.2023.\r\n', 'Kelvin Tong  ', '2023-11-24', 27, 120, 6, '', 'Rebecca Lim', 'Cynthia Koh ', '', 1, 2),
(15, 'Quỷ Lùn Tinh Nghịch:', 'quyluntinhnghich.webp', 'banner_quylun.jpg', 'Sự xuất hiện đột ngột của John Dory, anh trai thất lạc đã lâu của Branch mở ra quá khứ bí mật được che giấu bấy lâu nay của Branch. Đó là quá khứ về một ban nhạc có tên BroZone từng rất nổi tiếng nhưng đã tan rã. Hành trình đi tìm lại các thành viên để làm một ban nhạc như xưa trở thành chuyến phiêu lưu âm nhạc đầy cảm xúc, tràn trề hi vọng về một cuộc sum họp gia đình tuyệt với nhất.\r\n', 'DreamWorks  ', '2023-11-17', 0, 100, 8, 'Mỹ ', 'Anna Kendrick  ', 'Zooey Deschanel  ', 'Daveed Diggs  ', 1, 8),
(16, 'Chiếm Đoạt ', 'chiemdoat.webp', 'banner_chiemdoat.jpg', 'Kể về người vợ của một gia đình thượng lưu thuê cô bảo mẫu “trong mơ” để chăm sóc con trai mình. Nhưng cô không ngờ rằng, phía sau sự trong sáng, tinh khiết kia, cô bảo mẫu luôn che giấu âm mưu nhằm phá hoại hạnh phúc gia đình và khiến cuộc sống của cô thay đổi mãi mãi. Phim mới Chiếm Đoạt dự kiến ra mắt tại các rạp chiếu phim toàn quốc từ 24.11.2023.\r\n\r\n', 'Thắng Vũ', '2023-11-16', 10, 120, 7, 'Việt Nam', 'Miu Lê  ', 'Karik ', 'Lãnh Thanh ', 1, 3),
(20, 'Điều Ước', 'wish-500_1698658410148.webp', 'wish-750_1698658410719.webp', 'Lấy bối cảnh ở vương quốc ma thuật Rosas, câu chuyện giới thiệu Asha (Ariana DeBose lồng tiếng), một người lạc quan với trí thông minh sắc sảo, người quan tâm sâu sắc đến cộng đồng của mình. Khi Asha hướng lên bầu trời trong một khoảnh khắc cần thiết và thực hiện một điều ước, lời cầu xin của cô đã được đáp lại bởi một lực lượng vũ trụ - một quả cầu nhỏ chứa năng lượng vô biên có tên là Ngôi sao . Cùng nhau, họ đối mặt với những kẻ thù ghê gớm nhất để cứu cộng đồng của mình và chứng minh rằng khi ý chí của một con người dũng cảm kết nối với phép thuật của các vì sao, những điều kỳ diệu có thể xảy ra.', 'Walt Disney Pictures, Disney ', '2023-11-23', 0, 94, 9, 'Mỹ', 'Chris Pine', 'Alan Tudyk', 'Ariana DeBose', 0, 7),
(24, 'Người Vợ Cuối Cùng', '500x750-nvcc_1698985267862.webp', '750x500-nvcc_1698985267220.webp', '12345', 'Walt Disney Pictures, Disney ', '2023-12-02', 0, 120, 9, 'Việt Nam', 'Chris Pine', 'Alan Tudyk', 'Ariana DeBose', 1, 3);

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
  `nam_sinh` date NOT NULL,
  `role` int(11) NOT NULL DEFAULT 0,
  `sdt` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `ten_user`, `matkhau`, `email`, `diachi`, `nam_sinh`, `role`, `sdt`) VALUES
(9, 'Nguyễn Chí Đức', '32cbc077a558c3a1cc6f7dd303616a34', 'chiduc1611@gmail.com', 'Phụng Châu, Chương Mỹ, Hà nội ', '2004-11-16', 0, 342287284),
(17, 'Nguyễn Thị Minh Châu', '6512bd43d9caa6e02c990b0a82652dca', 'minhchau1111@gmail.com', '', '0000-00-00', 0, 0),
(29, 'Nguyễn Chí Đức', 'c4ca4238a0b923820dcc509a6f75849b', 'ducncph32766@fpt.edu.vn', '', '0000-00-00', 1, 0),
(30, 'Nguyễn Chí Đạt', 'c4ca4238a0b923820dcc509a6f75849b', 'chidat2509@gmail.com', '', '0000-00-00', 0, 0),
(32, 'Vũ việt', 'c4ca4238a0b923820dcc509a6f75849b', 'Vuviet@gmail.com', 'Phụng Châu, Chương Mỹ, Hà nội ', '2004-11-07', 2, 342287882),
(34, 'kimdat', '9d624d0484b3c3bf2f37f87d9c349902', 'dat21@gmail.com', '', '0000-00-00', 1, 0),
(35, 'Nguyễn kim đạt', 'f41336be4972406d168e8eb396bfb95b', 'dat08@gmail.com', '', '0000-00-00', 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ve`
--

CREATE TABLE `ve` (
  `id` int(11) NOT NULL,
  `gia_ve` int(11) NOT NULL,
  `ngay_dat` datetime NOT NULL,
  `ghe_ngoi` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kgc` int(11) NOT NULL,
  `id_bill` int(11) NOT NULL,
  `tt_ve` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `ve`
--

INSERT INTO `ve` (`id`, `gia_ve`, `ngay_dat`, `ghe_ngoi`, `id_user`, `id_kgc`, `id_bill`, `tt_ve`) VALUES
(92, 600000, '2023-12-04 22:22:50', 'B5,C5', 9, 34, 88, 1),
(93, 400000, '2023-12-05 16:23:30', 'B6,B5', 17, 37, 100, 1),
(94, 600000, '2023-12-05 17:34:11', 'C4,B4', 17, 37, 101, 1),
(95, 400000, '2023-12-06 21:29:42', 'A5,A4', 9, 38, 102, 1),
(96, 600000, '2023-12-11 13:14:06', 'B5,B4', 9, 40, 103, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `xuat_chieu`
--

CREATE TABLE `xuat_chieu` (
  `id` int(11) NOT NULL,
  `id_phim` int(11) NOT NULL,
  `ngay_chieu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `xuat_chieu`
--

INSERT INTO `xuat_chieu` (`id`, `id_phim`, `ngay_chieu`) VALUES
(30, 8, '2023-11-30'),
(31, 8, '2023-12-01'),
(32, 6, '2023-11-30'),
(33, 6, '2023-12-01'),
(34, 6, '2023-12-02'),
(35, 9, '2023-12-01'),
(36, 6, '2023-12-04'),
(37, 6, '2023-12-05'),
(38, 8, '2023-12-05'),
(39, 8, '2023-12-06'),
(41, 6, '2023-12-07'),
(42, 6, '2023-12-12');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_phim_bl` (`id_phim`),
  ADD KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `dich_vu`
--
ALTER TABLE `dich_vu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_ve_dichvu` (`id_ve`);

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
-- Chỉ mục cho bảng `phim`
--
ALTER TABLE `phim`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_loaiphim` (`id_loaiphim`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ve`
--
ALTER TABLE `ve`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_users` (`id_user`),
  ADD KEY `id_kgc` (`id_kgc`),
  ADD KEY `id_bill_ve` (`id_bill`);

--
-- Chỉ mục cho bảng `xuat_chieu`
--
ALTER TABLE `xuat_chieu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_phim_xchieu` (`id_phim`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `dich_vu`
--
ALTER TABLE `dich_vu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `khung_gio_chieu`
--
ALTER TABLE `khung_gio_chieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `loai_phim`
--
ALTER TABLE `loai_phim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `phim`
--
ALTER TABLE `phim`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `ve`
--
ALTER TABLE `ve`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT cho bảng `xuat_chieu`
--
ALTER TABLE `xuat_chieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `id_phim_bl` FOREIGN KEY (`id_phim`) REFERENCES `phim` (`id`),
  ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `dich_vu`
--
ALTER TABLE `dich_vu`
  ADD CONSTRAINT `id_ve_dichvu` FOREIGN KEY (`id_ve`) REFERENCES `ve` (`id`);

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
  ADD CONSTRAINT `id_bill_ve` FOREIGN KEY (`id_bill`) REFERENCES `bill` (`id`),
  ADD CONSTRAINT `id_kgc` FOREIGN KEY (`id_kgc`) REFERENCES `khung_gio_chieu` (`id`),
  ADD CONSTRAINT `id_users` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `xuat_chieu`
--
ALTER TABLE `xuat_chieu`
  ADD CONSTRAINT `id_phim_xchieu` FOREIGN KEY (`id_phim`) REFERENCES `phim` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
