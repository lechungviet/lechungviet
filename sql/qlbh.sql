-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 09, 2021 lúc 04:33 AM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlbh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dangnhap`
--

CREATE TABLE `dangnhap` (
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `quyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `dangnhap`
--

INSERT INTO `dangnhap` (`email`, `password`, `quyen`) VALUES
('admin@gmail.com', '12345', 1),
('mylinh@gmail.com', '12345', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `iddonhang` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `mamh` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `ngaydh` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`iddonhang`, `iduser`, `mamh`, `soluong`, `ngaydh`) VALUES
(24, 1, 5, 1, '2021-07-08'),
(25, 1, 5, 5, '2021-07-09'),
(26, 1, 5, 1, '2021-07-08'),
(27, 1, 5, 5, '2021-07-09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaihang`
--

CREATE TABLE `loaihang` (
  `malh` int(11) NOT NULL,
  `tenlh` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loaihang`
--

INSERT INTO `loaihang` (`malh`, `tenlh`) VALUES
(1, 'Dầu nhớt xe máy'),
(2, 'Dầu nhớt xe hơi'),
(5, 'Dầu nhớt xe tải');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mathang`
--

CREATE TABLE `mathang` (
  `mamh` int(11) NOT NULL,
  `tenmh` varchar(1000) NOT NULL,
  `mansx` int(11) NOT NULL,
  `malh` int(11) NOT NULL,
  `dungtich` varchar(11) NOT NULL,
  `hinh` varchar(2000) NOT NULL,
  `mota` varchar(2000) NOT NULL,
  `gia` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `mathang`
--

INSERT INTO `mathang` (`mamh`, `tenmh`, `mansx`, `malh`, `dungtich`, `hinh`, `mota`, `gia`) VALUES
(4, '300V FACTORY LINE ROAD RACING 15W50', 1, 1, '1000', '3100 Gold.jpg', 'Sử dụng cho các loại động cơ xe mô tô 4 thì: xe đua, xe thể thao, xe phân khối lớn của các hãng như Ducati, Honda, Yamaha, BMW, Aprilia, Kawasaki, Suzuki, Benelli, KTM… yêu cầu độ nhớt phù hợp', '1.500.000'),
(5, '300V FACTORY LINE ROAD RACING 5W40', 1, 1, '1000', '300V 15W50.jpg', 'Sử dụng cho các loại động cơ xe mô tô 4 thì: xe đua, xe thể thao, xe phân khối lớn của các hãng như Ducati, Honda, Yamaha, BMW, Aprilia, Kawasaki, Suzuki, Benelli, KTM… yêu cầu độ nhớt phù hợp.', '1.000.000'),
(6, 'GCTROL API SL 10W40', 2, 2, '1000', 'z2289868992224_e9247ec7fecb5c82f97081af10740a2b.jpg', 'Dùng để bôi trơn và bảo vệ các loại động cơ xe máy 4 thì, giúp động cơ hoạt động hiệu quả và tăng tính năng cũng như công suất động cơ đạt tối ưu nhất', '1.500.000'),
(7, 'GCTROL API SN 10W40', 2, 5, '1000', 'LON-GCTROL-SỐ.jpg', 'Công nghệ LUBRIZOL ( USA) sẽ tạo hàng triệu liên kết hóa học giúp bảo vệ liên tục cho xe của bạn là động cơ, hộp số, bộ ly hợp, cacte giúp động cơ giảm tối đa ma sát, tăng tính tẩy rửa, phân tán cao, chống ăn mòn...', '2.000.000'),
(11, 'FRIGOLIS P 68', 1, 5, '1000', 'thung-200l.png', 'Các loại máy nén lạnh trục vít, pít-tông hoặc cánh gạt sử dụng trong các hệ thống làm lạnh công nghiệp sử dụng môi chất ammoniac. Công nghệ LUBRIZOL ( USA) sẽ tạo hàng triệu liên kết hóa học giúp bảo vệ động cơ', '5.000.000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `iduser` int(11) NOT NULL,
  `email` varchar(500) NOT NULL,
  `hoten` varchar(2000) NOT NULL,
  `diachi` varchar(2000) NOT NULL,
  `sdt` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`iduser`, `email`, `hoten`, `diachi`, `sdt`) VALUES
(1, 'admin@gmail.com', 'admin', 'vĩnh long', '0907959348'),
(2, 'mylinh@gmail.com', 'Nguyễn Mỹ Linh', 'VĨNH LONG', '0999999999');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhasx`
--

CREATE TABLE `nhasx` (
  `mansx` int(11) NOT NULL,
  `tennsx` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nhasx`
--

INSERT INTO `nhasx` (`mansx`, `tennsx`) VALUES
(1, 'MOTUL'),
(2, 'castrol');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `dangnhap`
--
ALTER TABLE `dangnhap`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`iddonhang`),
  ADD KEY `iduser` (`iduser`),
  ADD KEY `mamh` (`mamh`);

--
-- Chỉ mục cho bảng `loaihang`
--
ALTER TABLE `loaihang`
  ADD PRIMARY KEY (`malh`);

--
-- Chỉ mục cho bảng `mathang`
--
ALTER TABLE `mathang`
  ADD PRIMARY KEY (`mamh`),
  ADD KEY `malh` (`malh`),
  ADD KEY `mansx` (`mansx`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`iduser`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Chỉ mục cho bảng `nhasx`
--
ALTER TABLE `nhasx`
  ADD PRIMARY KEY (`mansx`),
  ADD UNIQUE KEY `tennsx` (`tennsx`) USING HASH;

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `iddonhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `loaihang`
--
ALTER TABLE `loaihang`
  MODIFY `malh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `mathang`
--
ALTER TABLE `mathang`
  MODIFY `mamh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `nhasx`
--
ALTER TABLE `nhasx`
  MODIFY `mansx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `dangnhap`
--
ALTER TABLE `dangnhap`
  ADD CONSTRAINT `dangnhap_ibfk_1` FOREIGN KEY (`email`) REFERENCES `nguoidung` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `nguoidung` (`iduser`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `donhang_ibfk_2` FOREIGN KEY (`mamh`) REFERENCES `mathang` (`mamh`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `mathang`
--
ALTER TABLE `mathang`
  ADD CONSTRAINT `mathang_ibfk_1` FOREIGN KEY (`malh`) REFERENCES `loaihang` (`malh`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mathang_ibfk_2` FOREIGN KEY (`mansx`) REFERENCES `nhasx` (`mansx`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
