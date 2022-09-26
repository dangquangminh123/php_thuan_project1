-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 29, 2021 lúc 03:27 AM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `website_cuoiki`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `admin_status`) VALUES
(1, 'dangquangminh123', '25f9e794323b453885f5181f1b624d0b', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dangky`
--

CREATE TABLE `dangky` (
  `id_dangky` int(11) NOT NULL,
  `tenkhachhang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `dienthoai` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dangky`
--

INSERT INTO `dangky` (`id_dangky`, `tenkhachhang`, `email`, `diachi`, `matkhau`, `dienthoai`) VALUES
(11, 'dangquangminh123', 'dangquangminhdn86@gmail.com', '0898479840', '398e1ebfa4a283856fc7bd106a778dec', '12 trịnh đình thảo'),
(12, 'dangquangminh', 'dangquangminhdn86@gmail.com', '0898479840', '25f9e794323b453885f5181f1b624d0b', '12 trịnh đình thảo');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id_danhmuc`, `tendanhmuc`, `thutu`) VALUES
(30, 'Ốp Lưng Điện Thoại', 1),
(31, 'Kính Cường Lực', 2),
(32, 'Tai Nghe', 3),
(33, 'Cục Sạc', 4),
(35, 'Phụ Kiện Điện Thoại', 6),
(36, 'Dây Cáp sạc', 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `tensanpham` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ma` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gia` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `soluong` int(100) NOT NULL,
  `hinhanh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tomtat` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `tinhtrang` int(100) NOT NULL,
  `id_danhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_sanpham`, `tensanpham`, `ma`, `gia`, `soluong`, `hinhanh`, `tomtat`, `noidung`, `tinhtrang`, `id_danhmuc`) VALUES
(18, 'Ốp lưng 1', '001', '10000', 2, '1635204900_tainghe1.jpg', 'ốp lưng đa năng 1', 'ốp lưng đa năng 1', 1, 24),
(25, 'Cục Sạc Phòng TOPK', '002', '200000', 3, '1635421269_sacphong2.jpg', 'Cục sạc dự phòng TOPKtiện khi ở ngoài đường lúc điện thoại hết pin', 'Cục sạc dự phòng MARVEL tiện khi ở ngoài đường lúc điện thoại hết pin', 0, 35),
(26, 'Cục Sạc Phòng AVA', '003', '1800000', 4, '1635421381_sacphong3.jpg', 'Cục sạc dự phòng AVA tiện khi ở ngoài đường lúc điện thoại hết phin', 'Cục sạc dự phòng AVA tiện khi ở ngoài đường lúc điện thoại hết phin', 1, 35),
(27, 'Cục Sạc Phòng MARVEL', '001', '100000', 2, '1635421488_sacphong1.jpg', 'Cục sạc dự phòng MARVEL tiện khi ở ngoài đường lúc điện thoại hết phin', 'Cục sạc dự phòng MARVEL tiện khi ở ngoài đường lúc điện thoại hết phin', 1, 35),
(28, 'Cục Sạc Phòng WW', '004', '150000', 2, '1635421688_sacphong4.jpg', 'Cục sạc dự phòng WONDER WOMAN tiện khi ở ngoài đường lúc điện thoại hết phin', 'Cục sạc dự phòng WONDER WOMAN tiện khi ở ngoài đường lúc điện thoại hết phin', 0, 35),
(29, 'Củ sạc 1', '001', '200000', 4, '1635421738_cusac1.jpg', 'Củ sạc siêu tốc 50W-330KV', 'Củ sạc siêu tốc 50W-330KV', 1, 33),
(30, 'Củ sạc 2', '002', '220000', 4, '1635421772_cusac2.jpg', 'Củ sạc siêu tốc 50W-330KV', 'Củ sạc siêu tốc 50W-330KV', 1, 33),
(31, 'Củ sạc 3', '003', '280000', 5, '1635421802_cusac3.jpg', 'Củ sạc siêu tốc 100W-330KV', 'Củ sạc siêu tốc 100W-330KV', 0, 33),
(32, 'Tai nghe 1', '001', '400000', 6, '1635421855_tainghe1.jpg', 'Tai nghe rất đẹp cực kì êm mượt', 'Tai nghe rất đẹp cực kì êm mượt', 1, 32),
(33, 'Tai nghe IRONMAN', '002', '350000', 8, '1635421914_tainghe2.jpg', 'Tai nghe IRONMAN rất đẹp cực kì hứng khởi khi IRON MAN chiến đấu', 'Tai nghe IRONMAN rất đẹp cực kì hứng khởi khi IRON MAN chiến đấu', 1, 32),
(34, 'Tai nghe 3', '003', '400000', 5, '1635421964_tainghe3.jpg', 'Tai nghe rất đẹp cực kì thú vị', 'Tai nghe rất đẹp cực kì thú vị', 1, 32),
(35, 'Tai nghe captain american', '004', '380000', 7, '1635422023_tainghe4.jpg', 'Tai nghe CAPTAIN AMERICAN rất đẹp cực kì hùng dũng khi nghe tai nghe CAPTAIN AMERICAN', 'Tai nghe CAPTAIN AMERICAN rất đẹp cực kì hùng dũng khi nghe tai nghe CAPTAIN AMERICAN', 1, 32),
(36, 'Tai nghe 5', '005', '350000', 3, '1635422141_tainghe5.jpg', 'Tai nghe rất tốt và cực kì êm mượt âm thanh rất bền', 'Tai nghe rất tốt và cực kì êm mượt âm thanh rất bền', 1, 32),
(37, 'Dây Cáp IRONMAN', '001', '18000', 5, '1635422270_daycap1.jpg', 'Dây cáp IRONMAN dùng cho những cục sạc iron man', 'Dây cáp IRONMAN dùng cho những cục sạc iron man', 1, 36),
(38, 'Dây Cáp 2', '002', '22000', 3, '1635422343_daycap2.png', 'Dây cáp  dùng cho những cục sạc Siêu tốc độ cao', 'Dây cáp  dùng cho những cục sạc Siêu tốc độ cao', 1, 36),
(39, 'Dây Cáp 3', '003', '12000', 9, '1635422431_daycap3.jpg', 'Dây cáp  dùng cho những cục sạc Siêu tốc độ cao', 'Dây cáp  dùng cho những cục sạc Siêu tốc độ cao', 1, 36),
(40, 'kính cường lực 1', '001', '30000', 5, '1635422534_kinh1.png', 'Kính cường lực chống nước và che đỡ giúp điện thoại khỏi bị hỏng', 'Kính cường lực chống nước và che đỡ giúp điện thoại khỏi bị hỏng', 1, 31),
(41, 'kính cường lực 2', '002', '19000', 5, '1635422579_kinh2.jpg', 'Kính cường lực chống nước và che đỡ giúp điện thoại khỏi bị hỏng', 'Kính cường lực chống nước và che đỡ giúp điện thoại khỏi bị hỏng', 1, 31),
(42, 'kính cường lực 3', '003', '14000', 9, '1635422604_kinh3.jpg', 'Kính cường lực chống nước và che đỡ giúp điện thoại khỏi bị hỏng', 'Kính cường lực chống nước và che đỡ giúp điện thoại khỏi bị hỏng', 1, 31),
(43, 'Ốp lưng 1', '001', '36000', 7, '1635422684_oplung1.jpg', 'Ốp lưng chống thấm và bụi bẩn cho phần sau lưng điện thoại', 'Ốp lưng chống thấm và bụi bẩn cho phần sau lưng điện thoại', 1, 30),
(44, 'Ốp lưng THOR', '002', '19000', 6, '1635422770_oplung2.png', 'Ốp lưng Thần Sấm chống thấm và che bụi bẩn cho phần sau lưng điện thoại bởi sức mạnh của THẦN SẤM', 'Ốp lưng Thần Sấm chống thấm và che bụi bẩn cho phần sau lưng điện thoại bởi sức mạnh của THẦN SẤM', 1, 30),
(45, 'Ốp Lưng CAPTAIN', '003', '21000', 7, '1635422823_oplung3.jpg', 'Ốp lưng Đội Trưởng Mỹ  chống thấm và che bụi bẩn cho phần sau lưng điện thoại bởi sức mạnh của Tấm khiên thép của Đội Trưởng Mỹ', 'Ốp lưng Đội Trưởng Mỹ  chống thấm và che bụi bẩn cho phần sau lưng điện thoại bởi sức mạnh của Tấm khiên thép của Đội Trưởng Mỹ', 1, 30),
(46, 'Ốp Lưng IRONMAN', '004', '17000', 6, '1635422871_oplung4.jpg', 'Ốp lưng Người Sắt  chống thấm và che bụi bẩn cho phần sau lưng điện thoại bởi sức mạnh của Bộ Giáp Sắc của người Sắt', 'Ốp lưng Người Sắt  chống thấm và che bụi bẩn cho phần sau lưng điện thoại bởi sức mạnh của Bộ Giáp Sắc của người Sắt', 1, 30),
(47, 'Phụ kiện 1', '001', '21000', 4, '1635422927_trangtri1.jpg', 'kệ giá đỡ cho điện thoại khỏi phải mỏi tay', 'kệ giá đỡ cho điện thoại khỏi phải mỏi tay', 1, 35),
(48, 'Phụ Kiện 2', '002', '18000', 6, '1635422992_trangtri2.jpg', 'Gậy cầm chụp hình tự Sướng! Vui Thiệt đừng vui quá!', 'Gậy cầm chụp hình tự Sướng! Vui Thiệt đừng vui quá!', 1, 35),
(49, 'Phụ Kiện 3', '003', '24000', 5, '1635423024_trangtri3.jpg', 'Gậy cầm chụp hình tự Sướng! Vui Thiệt đừng vui quá! Loại Nhỏ', 'Gậy cầm chụp hình tự Sướng! Vui Thiệt đừng vui quá! Loại Nhỏ', 1, 35);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `dangky`
--
ALTER TABLE `dangky`
  ADD PRIMARY KEY (`id_dangky`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sanpham`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `dangky`
--
ALTER TABLE `dangky`
  MODIFY `id_dangky` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
