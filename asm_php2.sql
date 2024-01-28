-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 28, 2024 lúc 06:20 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `asm_php2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `IDCTHD` int(11) NOT NULL,
  `IDTK` int(11) NOT NULL,
  `IDHD` int(11) NOT NULL,
  `SoLuongSP` int(11) NOT NULL,
  `DiaChi` text NOT NULL,
  `GiaTungSP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `IDDM` int(11) NOT NULL,
  `TenDM` varchar(100) NOT NULL,
  `MotaDM` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`IDDM`, `TenDM`, `MotaDM`) VALUES
(1, 'SmartPhone', 'Điện thoại'),
(2, 'Laptop', 'May tính'),
(6, 'Ipad', 'Máy tính  bảng'),
(7, 'Apple Watch', 'Đông hồ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `IDHD` int(11) NOT NULL,
  `IDTK` int(11) NOT NULL,
  `IDCTHD` int(11) NOT NULL,
  `IDSP` int(11) NOT NULL,
  `NgayDat` date NOT NULL,
  `HinhAnh` varchar(225) NOT NULL,
  `TenSP` varchar(225) NOT NULL,
  `GiaSP` int(11) NOT NULL,
  `TongTien` int(11) NOT NULL,
  `TrangThaiDH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `IDSP` int(11) NOT NULL,
  `TenSP` varchar(225) NOT NULL,
  `AnhSP` varchar(100) NOT NULL,
  `GiaSP` int(11) NOT NULL,
  `MotaSP` text NOT NULL,
  `ViewSP` int(11) NOT NULL,
  `stock_quantity` int(11) NOT NULL,
  `MaDM` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`IDSP`, `TenSP`, `AnhSP`, `GiaSP`, `MotaSP`, `ViewSP`, `stock_quantity`, `MaDM`) VALUES
(1, 'MacBook Air 13”', 'mba_13.png', 999, '', 12693, 0, 2),
(2, 'iPhone 15', 'iphone_15.png', 799, '', 19648, 0, 1),
(3, 'iPhone 14', 'iphone_14.png', 699, '', 14458, 0, 1),
(4, 'Apple Watch Ultra 2', 'ultra2.png', 799, '', 7074, 0, 7),
(5, 'iPad Pro', 'ipad_pro.png', 799, '', 14076, 0, 6),
(6, 'MacBook Air 13” and 15”', 'mba_13_15.png', 1099, '', 16837, 0, 2),
(7, 'iPhone 15 Pro', 'iphone_15_pro.png', 999, 'Điện thoại iPhone 15 Pro được trang bị màn hình mới Dynamic Island với kích thước 6.1 inch cùng công nghệ ProMotion và tính năng Always On Display', 23576, 0, 1),
(8, 'MacBook Pro 14” and 16”', 'mbp_14_16.png', 1599, '', 22606, 0, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `IDTK` int(11) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Email` text NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Role` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1KH 0ADmin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhtoan`
--

CREATE TABLE `thanhtoan` (
  `IDTT` int(11) NOT NULL,
  `IDHD` int(11) NOT NULL,
  `NgayTT` date NOT NULL,
  `PhuongThucTT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`) VALUES
(1, 'Công Nghĩa', 'nghiatg526@gmail.com', '123', 1),
(2, 'n', 'n@d', '123', 0),
(3, 'v', 'b@f', '22', 0),
(4, 'h', 'g@r', '33', 0),
(5, 'b', 'h@g', '22', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vanchuyen`
--

CREATE TABLE `vanchuyen` (
  `IDVC` int(11) NOT NULL,
  `IDHD` int(11) NOT NULL,
  `NgayVC` date NOT NULL,
  `DiaChi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`IDCTHD`),
  ADD KEY `IDTK` (`IDTK`),
  ADD KEY `fk_chitiethoadon_hoadon` (`IDHD`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`IDDM`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`IDHD`),
  ADD KEY `IDCTHD` (`IDCTHD`),
  ADD KEY `IDSP` (`IDSP`),
  ADD KEY `fk_hoadon_taikhoan` (`IDTK`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`IDSP`),
  ADD KEY `MaDM` (`MaDM`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`IDTK`);

--
-- Chỉ mục cho bảng `thanhtoan`
--
ALTER TABLE `thanhtoan`
  ADD PRIMARY KEY (`IDTT`),
  ADD KEY `fk_thanhtoan_hoadon` (`IDHD`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `vanchuyen`
--
ALTER TABLE `vanchuyen`
  ADD KEY `fk_vanchuyen_hoadon` (`IDHD`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `IDCTHD` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `IDDM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `IDHD` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `IDSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `IDTK` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `thanhtoan`
--
ALTER TABLE `thanhtoan`
  MODIFY `IDTT` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_ibfk_1` FOREIGN KEY (`IDTK`) REFERENCES `taikhoan` (`IDTK`),
  ADD CONSTRAINT `fk_chitiethoadon_hoadon` FOREIGN KEY (`IDHD`) REFERENCES `hoadon` (`IDHD`);

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `fk_hoadon_taikhoan` FOREIGN KEY (`IDTK`) REFERENCES `taikhoan` (`IDTK`),
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`IDCTHD`) REFERENCES `chitiethoadon` (`IDCTHD`),
  ADD CONSTRAINT `hoadon_ibfk_2` FOREIGN KEY (`IDSP`) REFERENCES `sanpham` (`IDSP`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`MaDM`) REFERENCES `danhmuc` (`IDDM`);

--
-- Các ràng buộc cho bảng `thanhtoan`
--
ALTER TABLE `thanhtoan`
  ADD CONSTRAINT `fk_thanhtoan_hoadon` FOREIGN KEY (`IDHD`) REFERENCES `hoadon` (`IDHD`);

--
-- Các ràng buộc cho bảng `vanchuyen`
--
ALTER TABLE `vanchuyen`
  ADD CONSTRAINT `fk_vanchuyen_hoadon` FOREIGN KEY (`IDHD`) REFERENCES `hoadon` (`IDHD`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
