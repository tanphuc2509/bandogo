-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th12 20, 2017 lúc 05:01 PM
-- Phiên bản máy phục vụ: 10.1.28-MariaDB
-- Phiên bản PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bandogo`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ChiTietDonHang`
--

CREATE TABLE `ChiTietDonHang` (
  `MaChiTietDonHang` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `GiaBan` int(11) NOT NULL,
  `MaDonDatHang` varchar(9) NOT NULL,
  `MaSanPham` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `DonDatHang`
--

CREATE TABLE `DonDatHang` (
  `MaDonDatHang` varchar(9) NOT NULL,
  `NgayLap` datetime DEFAULT NULL,
  `TongThanhTien` int(11) DEFAULT NULL,
  `MaTaiKhoan` int(11) NOT NULL,
  `MaTinhTrang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `HangSanXuat`
--

CREATE TABLE `HangSanXuat` (
  `MaHangSanXuat` int(11) NOT NULL,
  `TenHangSanXuat` varchar(45) NOT NULL,
  `LogoURL` varchar(45) NOT NULL,
  `BiXoa` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `HangSanXuat`
--

INSERT INTO `HangSanXuat` (`MaHangSanXuat`, `TenHangSanXuat`, `LogoURL`, `BiXoa`) VALUES
(1, 'Xưởng mộc Vân Khoa', 'vankhoa.jpg', 0),
(2, 'Xưởng mộc Phong Chi', 'phongchi.jpg', 0),
(3, 'Xưởng mộc Phú Trinh', 'phutrinh.jpg', 0),
(4, 'Xưởng mộc Phúc Quý', 'phucquy.jpg', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `LoaiSanPham`
--

CREATE TABLE `LoaiSanPham` (
  `MaLoaiSanPham` int(11) NOT NULL,
  `TenLoaiSanPham` varchar(45) NOT NULL,
  `BiXoa` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `LoaiSanPham`
--

INSERT INTO `LoaiSanPham` (`MaLoaiSanPham`, `TenLoaiSanPham`, `BiXoa`) VALUES
(1, 'Salon', 0),
(2, 'Giường', 0),
(3, 'Tủ áo', 0),
(4, 'Kệ tivi', 0),
(5, 'Bàn học', 0),
(6, 'Bàn ăn', 0),
(7, 'Công trình', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `LoaiTaiKhoan`
--

CREATE TABLE `LoaiTaiKhoan` (
  `MaLoaiTaiKhoan` int(11) NOT NULL,
  `TenLoaiTaiKhoan` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `LoaiTaiKhoan`
--

INSERT INTO `LoaiTaiKhoan` (`MaLoaiTaiKhoan`, `TenLoaiTaiKhoan`) VALUES
(1, 'NguoiDung'),
(2, 'NhanVien');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `SanPham`
--

CREATE TABLE `SanPham` (
  `MaSanPham` int(11) NOT NULL,
  `TenSanPham` varchar(45) NOT NULL,
  `HinhURL` varchar(45) NOT NULL,
  `GiaSanPham` int(11) NOT NULL,
  `NgayNhap` datetime NOT NULL,
  `SoLuongTon` int(11) NOT NULL,
  `SoLuongBan` int(11) NOT NULL,
  `SoLuocXem` int(11) NOT NULL,
  `MoTa` text NOT NULL,
  `BiXoa` tinyint(1) NOT NULL,
  `MaLoaiSanPham` int(11) NOT NULL,
  `MaHangSanXuat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `SanPham`
--

INSERT INTO `SanPham` (`MaSanPham`, `TenSanPham`, `HinhURL`, `GiaSanPham`, `NgayNhap`, `SoLuongTon`, `SoLuongBan`, `SoLuocXem`, `MoTa`, `BiXoa`, `MaLoaiSanPham`, `MaHangSanXuat`) VALUES
(1, 'Salon Gỗ cao cấp 1', 'salon1.jpg', 15000000, '2017-12-01 00:00:00', 100, 2, 100, 'Salon gỗ quá đẹp, đỉnh của đỉnh', 0, 1, 1),
(2, 'Salon gỗ cao cấp 2', 'salon2.jpg', 16000000, '2017-12-00 00:00:00', 100, 3, 999, 'Salon gỗ quá đẹp', 0, 1, 1),
(3, 'Salon gỗ cao cấp 3', 'salon3.jpg', 14500000, '2017-12-01 00:00:00', 100, 3, 912, 'Salon đẹp', 0, 1, 1),
(4, 'Slon gỗ cao cấp 4', 'salon4.jpg', 12000000, '2017-12-02 00:00:00', 999, 4, 878, 'Salon hay ta', 0, 1, 2),
(5, 'Salon gỗ cao cấp 5', 'salon5.jpg', 55000000, '2017-12-09 00:00:00', 988, 5, 111, 'Salon hay ta', 0, 1, 2),
(6, 'Salon gỗ cap cấp 6', 'salon6.jpg', 6000000, '2017-09-01 00:00:00', 880, 7, 998, 'Salon gỗ đẹp', 0, 1, 2),
(7, 'Salon gỗ cao cấp 7', 'salon7.jpg', 6000000, '0000-00-00 00:00:00', 879, 8, 234, 'Salon gỗ đẹp dữ trời', 0, 1, 3),
(8, 'salon gỗ cap cấp 8', 'salon8.jpg', 569000000, '2017-12-13 00:00:00', 123, 8, 444, 'salon gỗ đẹp', 0, 1, 3),
(9, 'Salon gỗ cao cấp 9', 'salon9.jpg', 12000000, '2017-11-10 00:00:00', 122, 9, 546, 'salon gỗ đẹp quá ta', 0, 1, 3),
(10, 'salon gỗ cao cấp 10', 'salon10.jpg', 13000000, '2017-12-19 00:00:00', 333, 34, 555, 'salon gỗ đẹp', 0, 1, 4),
(11, 'salon gỗ cap cấp 11', 'salon10.jpg', 13000000, '2017-01-02 00:00:00', 345, 312, 23, 'salon đẹp', 0, 1, 4),
(12, 'Giường gỗ cao cấp 1', 'giuong1.jpg', 10000000, '2017-03-01 00:00:00', 233, 11, 23, 'giường đẹp', 0, 2, 1),
(13, 'Giường gỗ cao cấp 2', 'giuong2.jpg', 12000000, '2017-01-12 00:00:00', 444, 11, 33, 'Giường xinh', 0, 2, 1),
(14, 'Giường gỗ cao cấp 3', 'giuong3.jpg', 11000000, '2017-09-11 00:00:00', 444, 12, 33, 'Giường đẹp', 0, 2, 2),
(15, 'Giường gỗ cao cấp 4', 'giuong4.jpg', 9000000, '2017-12-01 00:00:00', 444, 44, 1, 'Giường ngon', 0, 2, 3),
(16, 'Giường gỗ cao cấp 5', 'giuong5.jpg', 2221100, '2017-10-01 00:00:00', 555, 11, 15, 'Giường tốt', 0, 2, 4),
(17, 'Giường gỗ cao cấp 6', 'giuong6.jpg', 19000000, '2017-10-11 00:00:00', 666, 14, 44, 'Giường ngon', 0, 2, 4),
(18, 'Tủ áo cao cấp 1', 'tuao1.jpg', 11000000, '2017-10-12 00:00:00', 987, 11, 9, 'Tủ áo đẹp', 0, 3, 1),
(19, 'Tủ áo cao cấp 2', 'tuao2.jpg', 9000000, '2017-01-01 00:00:00', 777, 11, 23, 'Tủ áo ngon', 0, 3, 2),
(20, 'Tủ áo cao cấp 3', 'tuao3.jpg', 7700000, '2017-02-13 00:00:00', 888, 13, 12, 'Tủ áo đẹp', 0, 3, 3),
(21, 'Tủ áo cao cấp 4', 'tuao4.jpg', 4300000, '2017-05-12 00:00:00', 777, 14, 22, 'Tủ áo tốt', 0, 3, 4),
(22, 'Kệ tivi cao cấp 1', 'ketivi1.jpg', 5000000, '2017-12-01 00:00:00', 666, 124, 343, 'Kệ ti vi đep', 0, 4, 1),
(23, 'Kệ tivi cao cấp 2', 'ketivi2.jpg', 4000000, '2017-01-23 00:00:00', 999, 232, 111, 'Kệ tivi đẹp', 0, 4, 2),
(24, 'Kệ tivi cao cấp 3', 'ketivi3.jpg', 5000000, '2017-01-23 00:00:00', 555, 232, 12, 'Kê ti vi đẹp quá trời', 0, 4, 3),
(25, 'Kệ tivi cao cấp 4', 'ketivi4.jpg', 6000000, '2017-02-11 00:00:00', 953, 231, 22, 'Kệ ti vi quá đỉnh', 0, 4, 4),
(26, 'Bàn học 1', 'banhoc1.jpg', 600000, '2017-01-01 00:00:00', 999, 22, 23, 'Bàn học sinh đẹp', 0, 5, 1),
(27, 'Bàn học 2', 'banhoc2.jpg', 700000, '2017-12-12 00:00:00', 999, 88, 123, 'Bàn học sinh đẹp nè', 0, 5, 2),
(28, 'Bàn học sinh 3', 'banhoc3.jpg', 900000, '2017-11-30 00:00:00', 213, 12, 4342, 'Bàn học sinh đẳng cấp', 0, 5, 3),
(29, 'Bàn học sinh 4', 'banhoc4.jpg', 500000, '2017-11-12 00:00:00', 2000, 21, 232, 'Bàn học đẹp', 0, 5, 4),
(30, 'Bàn ăn 1', 'banan1.jpg', 12000000, '2017-08-01 00:00:00', 333, 21, 32, 'Bàn ăn đẹp', 0, 6, 1),
(31, 'Bàn ăn 2', 'banan2.jpg', 13000000, '2017-02-12 00:00:00', 444, 12, 44, 'Bàn ăn đẹp ', 0, 6, 2),
(32, 'Bàn ăn 3', 'banan3.jpg', 9000000, '2017-11-22 00:00:00', 989, 83, 33, 'Bàn ăn đẹp', 0, 6, 3),
(33, 'Bàn ăn 4', 'banan4.jpg', 7000000, '2017-03-12 00:00:00', 213, 12, 32, 'Bàn ăn đẹp', 0, 6, 4),
(34, 'Công trình Nhà anh Phát', 'kebep1.jpg', 13000000, '2017-12-01 00:00:00', 2312, 12, 32, 'Công trình đẹp', 0, 7, 1),
(35, 'Công trình nhà anh phúc', 'kebep2.jpg', 14000000, '2017-12-02 00:00:00', 3232, 12, 23, 'Công trình đẹp', 0, 7, 2),
(36, 'Công trình nhà anh Phở', 'nhago1.jpg', 15000000, '2017-05-04 00:00:00', 1232, 12, 23, 'Công trình đẹp', 0, 7, 3),
(37, 'Công trình nhà anh Nghĩa', 'nhago2.jpg', 14000000, '2017-01-12 00:00:00', 3121, 13, 32, 'Công trình đẹp', 0, 7, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `TaiKhoan`
--

CREATE TABLE `TaiKhoan` (
  `MaTaiKhoan` int(11) NOT NULL,
  `TenDangNhap` varchar(20) NOT NULL,
  `MatKhau` varchar(20) NOT NULL,
  `TenHienThi` varchar(64) NOT NULL,
  `DiaChi` varchar(256) DEFAULT NULL,
  `DienThoai` varchar(11) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `BiXoa` tinyint(1) DEFAULT NULL,
  `MaLoaiTaiKhoan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `TaiKhoan`
--

INSERT INTO `TaiKhoan` (`MaTaiKhoan`, `TenDangNhap`, `MatKhau`, `TenHienThi`, `DiaChi`, `DienThoai`, `Email`, `BiXoa`, `MaLoaiTaiKhoan`) VALUES
(1, 'phuc', '1', 'Phuc handsome', 'Long Thanh', '01223344648', 'tanphuc2509@gmail.com', 0, 2),
(2, 'Phat', '1', 'Phat Xau Trai', 'Long An', '0938766090', 'tanphatkuto@gmail.com', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `TinhTrang`
--

CREATE TABLE `TinhTrang` (
  `MaTinhTrang` int(11) NOT NULL,
  `TenTinhTrang` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `TinhTrang`
--

INSERT INTO `TinhTrang` (`MaTinhTrang`, `TenTinhTrang`) VALUES
(1, 'Đã đặt hàng'),
(2, 'Đang giao hàng'),
(3, 'Giao hàng thành công');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `ChiTietDonHang`
--
ALTER TABLE `ChiTietDonHang`
  ADD PRIMARY KEY (`MaChiTietDonHang`),
  ADD UNIQUE KEY `pk_ChiTietDonDatHang` (`MaChiTietDonHang`),
  ADD KEY `MaSanPham` (`MaSanPham`),
  ADD KEY `MaDonDatHang` (`MaDonDatHang`);

--
-- Chỉ mục cho bảng `DonDatHang`
--
ALTER TABLE `DonDatHang`
  ADD PRIMARY KEY (`MaDonDatHang`),
  ADD UNIQUE KEY `pk_DonDatHang` (`MaDonDatHang`),
  ADD KEY `MaTaiKhoan` (`MaTaiKhoan`),
  ADD KEY `MaTinhTrang` (`MaTinhTrang`);

--
-- Chỉ mục cho bảng `HangSanXuat`
--
ALTER TABLE `HangSanXuat`
  ADD PRIMARY KEY (`MaHangSanXuat`),
  ADD UNIQUE KEY `pk_HangSanXuat` (`MaHangSanXuat`);

--
-- Chỉ mục cho bảng `LoaiSanPham`
--
ALTER TABLE `LoaiSanPham`
  ADD PRIMARY KEY (`MaLoaiSanPham`),
  ADD UNIQUE KEY `pk_LoaiSanPham` (`MaLoaiSanPham`);

--
-- Chỉ mục cho bảng `LoaiTaiKhoan`
--
ALTER TABLE `LoaiTaiKhoan`
  ADD PRIMARY KEY (`MaLoaiTaiKhoan`),
  ADD UNIQUE KEY `pk_LoaiTaiKhoan` (`MaLoaiTaiKhoan`);

--
-- Chỉ mục cho bảng `SanPham`
--
ALTER TABLE `SanPham`
  ADD PRIMARY KEY (`MaSanPham`),
  ADD UNIQUE KEY `pk_SanPham` (`MaSanPham`),
  ADD KEY `MaLoaiSanPham` (`MaLoaiSanPham`),
  ADD KEY `MaHangSanXuat` (`MaHangSanXuat`);

--
-- Chỉ mục cho bảng `TaiKhoan`
--
ALTER TABLE `TaiKhoan`
  ADD PRIMARY KEY (`MaTaiKhoan`),
  ADD UNIQUE KEY `pk_TaiKhoan` (`MaTaiKhoan`),
  ADD KEY `MaLoaiTaiKhoan` (`MaLoaiTaiKhoan`);

--
-- Chỉ mục cho bảng `TinhTrang`
--
ALTER TABLE `TinhTrang`
  ADD PRIMARY KEY (`MaTinhTrang`),
  ADD UNIQUE KEY `pk_TinhTrang` (`MaTinhTrang`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `ChiTietDonHang`
--
ALTER TABLE `ChiTietDonHang`
  MODIFY `MaChiTietDonHang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `HangSanXuat`
--
ALTER TABLE `HangSanXuat`
  MODIFY `MaHangSanXuat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `LoaiSanPham`
--
ALTER TABLE `LoaiSanPham`
  MODIFY `MaLoaiSanPham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `LoaiTaiKhoan`
--
ALTER TABLE `LoaiTaiKhoan`
  MODIFY `MaLoaiTaiKhoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `SanPham`
--
ALTER TABLE `SanPham`
  MODIFY `MaSanPham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `TaiKhoan`
--
ALTER TABLE `TaiKhoan`
  MODIFY `MaTaiKhoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `TinhTrang`
--
ALTER TABLE `TinhTrang`
  MODIFY `MaTinhTrang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `ChiTietDonHang`
--
ALTER TABLE `ChiTietDonHang`
  ADD CONSTRAINT `fk_ChiTietDonDatHang_DonDatHang` FOREIGN KEY (`MaDonDatHang`) REFERENCES `DonDatHang` (`MaDonDatHang`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ChiTietDonDatHang_SanPham` FOREIGN KEY (`MaSanPham`) REFERENCES `SanPham` (`MaSanPham`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `DonDatHang`
--
ALTER TABLE `DonDatHang`
  ADD CONSTRAINT `fk_DonDatHang_TaiKhoan` FOREIGN KEY (`MaTaiKhoan`) REFERENCES `TaiKhoan` (`MaTaiKhoan`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_DonDatHang_TinhTrang` FOREIGN KEY (`MaTinhTrang`) REFERENCES `TinhTrang` (`MaTinhTrang`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `SanPham`
--
ALTER TABLE `SanPham`
  ADD CONSTRAINT `fk_SanPham_HangSanXuat` FOREIGN KEY (`MaHangSanXuat`) REFERENCES `HangSanXuat` (`MaHangSanXuat`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_SanPham_LoaiSanPham` FOREIGN KEY (`MaLoaiSanPham`) REFERENCES `LoaiSanPham` (`MaLoaiSanPham`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `TaiKhoan`
--
ALTER TABLE `TaiKhoan`
  ADD CONSTRAINT `fk_TaiKhoan_LoaiTaiKhoan` FOREIGN KEY (`MaLoaiTaiKhoan`) REFERENCES `LoaiTaiKhoan` (`MaLoaiTaiKhoan`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
