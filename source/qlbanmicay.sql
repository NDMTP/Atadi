-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 20, 2023 at 01:18 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlbanmicay`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `MAHOADON` int NOT NULL,
  `MASP` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `MASIZE` varchar(5) COLLATE utf8mb4_general_ci NOT NULL,
  `SOLUONGSP` int DEFAULT NULL,
  `DOCAY` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `DONGIABAN` int DEFAULT NULL,
  `TONGTIEN` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`MAHOADON`, `MASP`, `MASIZE`, `SOLUONGSP`, `DOCAY`, `DONGIABAN`, `TONGTIEN`) VALUES
(1, 'CT1', 'L', 2, NULL, 420000, 840000),
(1, 'L1', 'M', 1, NULL, 1420000, 1420000),
(2, 'L2', 'L', 2, NULL, 420000, 840000),
(3, 'L2', 'M', 2, NULL, 420000, 840000);

-- --------------------------------------------------------

--
-- Table structure for table `danhgiasp`
--

CREATE TABLE `danhgiasp` (
  `EMAIL` varchar(70) COLLATE utf8mb4_general_ci NOT NULL,
  `MAHOADON` int NOT NULL,
  `NOIDUNGDG` varchar(300) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `LINKANHDG` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `CHATLUONGSP` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `TGDANHGIA` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `danhgiasp`
--

INSERT INTO `danhgiasp` (`EMAIL`, `MAHOADON`, `NOIDUNGDG`, `LINKANHDG`, `CHATLUONGSP`, `TGDANHGIA`) VALUES
('aib2011957@student.ctu.edu.vn', 2, 'khá ngon', NULL, '4', '2023-09-20 07:38:54');

-- --------------------------------------------------------

--
-- Table structure for table `giaohang`
--

CREATE TABLE `giaohang` (
  `MAKHUVUC` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `MAHOADON` int NOT NULL,
  `PHIGIAO` int DEFAULT NULL,
  `GHICHU` varchar(70) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `MAHOADON` int NOT NULL,
  `EMAIL` varchar(70) COLLATE utf8mb4_general_ci NOT NULL,
  `MAKM` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `MAPT` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `NGAYLAP` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `TRANGTHAIHOADON` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT '0',
  `TONGTIEN` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`MAHOADON`, `EMAIL`, `MAKM`, `MAPT`, `NGAYLAP`, `TRANGTHAIHOADON`, `TONGTIEN`) VALUES
(1, 'aib2011957@student.ctu.edu.vn', NULL, NULL, '2023-09-18 13:51:44', '-1', 2260000),
(2, 'aib2011957@student.ctu.edu.vn', NULL, NULL, NULL, '1', 1420000),
(3, 'aib2011957@student.ctu.edu.vn', NULL, NULL, NULL, '1', 840000);

-- --------------------------------------------------------

--
-- Table structure for table `khuvuc`
--

CREATE TABLE `khuvuc` (
  `MAKHUVUC` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `TENKHUVUC` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `PHIGIAO` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `khuvuc`
--

INSERT INTO `khuvuc` (`MAKHUVUC`, `TENKHUVUC`, `PHIGIAO`) VALUES
('BT1', 'Phường Bình Thuỷ', 25000),
('BT2', 'Phường Trà An', 15000),
('BT3', 'Phường Thới An Đông', 15000),
('BT4', 'Phường Trà Nóc', 5000),
('BT5', 'Phường Bùi Hữu Nghĩa', 5000),
('BT6', 'Phường Long Hoà', 25000),
('BT7', 'Phường An Thới', 25000),
('BT8', 'Phường Long Tuyền', 5000),
('CR1', 'Phường Lê Bình', 25000),
('CR2', 'Phường Ba Láng', 5000),
('CR3', 'Phường Phú Thứ', 15000),
('CR4', 'Phường Hưng Phú', 0),
('CR5', 'Phường Thường Thạnh', 25000),
('CR6', 'Phường Hưng Thạnh', 15000),
('CR7', 'Phường Tân Phú', 15000),
('NK1', 'Phường An Bình', 0),
('NK10', 'Phường Thới Bình', 5000),
('NK11', 'Phường Xuân Khánh', 0),
('NK2', 'Phường An Cư', 0),
('NK3', 'Phường An Hòa', 0),
('NK4', 'Phường An Khánh', 0),
('NK5', 'Phường An Nghiệp', 0),
('NK6', 'Phường An Phú', 0),
('NK7', 'Phường Cái Khế', 0),
('NK8', 'Phường Hưng Lợi', 0),
('NK9', 'Phường Tân An', 0);

-- --------------------------------------------------------

--
-- Table structure for table `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `MAKM` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `PHANTRAMKM` int DEFAULT NULL,
  `DIEUKIENKM` int DEFAULT NULL,
  `NGAYBD` date DEFAULT NULL,
  `NGAYKT` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `khuyenmai` VALUES
('5T100',5,100000,'2023-09-01','2023-09-14'),
('10T200',10,200000,'2023-09-01','2023-09-14')

-- --------------------------------------------------------

--
-- Table structure for table `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `MALOAI` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `TENLOAI` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loaisanpham`
--

INSERT INTO `loaisanpham` (`MALOAI`, `TENLOAI`) VALUES
('01', 'Mì cay'),
('02', 'Lẩu'),
('03', 'Miến Trộn'),
('04', 'Món Hàn '),
('05', 'Cơm trộn'),
('07', 'Nước giải khác'),
('08', 'Nướng'),
('09', 'Sushi');

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `EMAIL` varchar(70) COLLATE utf8mb4_general_ci NOT NULL,
  `MATKHAU` varchar(70) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `DIACHI` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `TEN` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `SDT` varchar(12) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `PHANQUYEN` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`EMAIL`, `MATKHAU`, `DIACHI`, `TEN`, `SDT`, `PHANQUYEN`) VALUES
('aib2011957@student.ctu.edu.vn', '202cb962ac59075b964b07152d234b70', '', '', '', NULL),
('duybii922002@gmail.com', '202cb962ac59075b964b07152d234b70 ', 'Vĩnh Long', 'Yii', '09398260244', NULL),
('qnhu@gmail.com', '202cb962ac59075b964b07152d234b70', 'Vĩnh Long', 'Nguyễn Quỳnh Như', '0123456789', NULL),
('vinh@gmail.com', '202cb962ac59075b964b07152d234b70', 'Cần Thơ', 'Nguyễn Đỗ Phúc Vinh', '0123456789', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `phuongthuctt`
--

CREATE TABLE `phuongthuctt` (
  `MAPT` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `TENPT` varchar(40) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `MASP` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `MALOAI` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `TENSP` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `MOTA` varchar(300) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `LINKANH` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`MASP`, `MALOAI`, `TENSP`, `MOTA`, `LINKANH`) VALUES
('CT1', '05', ' Cơm trộn đùi gà', ' Đây là cơm trộn', 'comtron1.jpg'),
('CT2', '05', ' Cơm trộn Việt Quốc', ' Đây là cơm trộn', 'comtron2.jpg'),
('CT3', '05', ' Cơm trộn truyền thống', ' Đây là cơm trộn', 'comtron3.jpg'),
('CT4', '05', ' Cơm trộn thập cẩm', ' Đây là cơm trộn', 'comtron4.jpg'),
('L1', '02', ' Lẩu Hải sản', ' đây là lẩu', 'lau1.jpg'),
('L2', '02', ' Lẩu Bò 5 món', ' đây là lẩu', 'lau2.jpg'),
('L3', '02', ' Lẩu 18 Tầng Địa Ngục', ' đây là lẩu', 'lau3.jpg'),
('L4', '02', ' Lẩu 2 ngăn', ' đây là lẩu', 'lau4.jpg'),
('L5', '02', ' Lâu Viên', ' đây là lẩu', 'lau5.jpg'),
('L6', '02', ' Lẩu 9 Tầng Mây', ' đây là lẩu', 'lau6.jpg'),
('MC1', '01', ' Mì cay thập cẩm', ' Đây là mì cay', 'micay1.jpg'),
('MC10', '01', ' Mì Chả Cá', ' Đây là mì cay', 'micay10.jpg'),
('MC2', '01', ' Mì hải sản', ' Đây là mì cay', 'micay2.jpg'),
('MC3', '01', ' Mì Kimchi Bò Mỹ', ' Đây là mì cay', 'micay3.jpg'),
('MC4', '01', ' Mì Kimchi Bò Úc', ' Đây là mì cay', 'micay4.jpg'),
('MC5', '01', ' Mì Kimchi Hải Sản', ' Đây là mì cay', 'micay5.jpg'),
('MC6', '01', ' Mì Kimchi Bạch tuột', ' Đây là mì cay', 'micay6.jpg'),
('MC7', '01', ' Mì Kimchi Mực', ' Đây là mì cay', 'micay7.jpg'),
('MC8', '01', ' Mì Kimchi Hàu', ' Đây là mì cay', 'micay8.jpg'),
('MC9', '01', ' Mì Gà', ' Đây là mì cay', 'micay9.jpg'),
('MH1', '04', ' Bánh Bạch Tuột', ' đây là đồ Hàn', 'banhbachtuot.jpg'),
('MH2', '04', ' Gà gán', ' đây là đồ Hàn', 'gagan.jpg'),
('MH3', '04', ' Sushi', ' đây là đồ Hàn', 'sushi.jpg'),
('MH4', '04', ' Mỳ nước', ' đây là đồ Hàn', 'minuoc.jpg'),
('MT1', '03', ' Miến trộn Hàn Quốc', ' Đây là miến', 'mientron1.jpg'),
('MT2', '03', ' Miến Trộn Korea ', ' Đây là miến', 'mientron2.jpg'),
('MT3', '03', ' Miến Trộn Bò', ' Đây là miến', 'mientron3.jpg'),
('MT4', '03', ' Miến trộn Hải Sản', ' Đây là miến', 'mientron4.jpg'),
('MT5', '03', ' Miến trộn Seafood', ' Đây là miến', 'mientron5.jpg'),
('N1', '07', ' Trà Dâu', ' đây là nước uống', 'nuoc1.jpg'),
('N2', '07', ' Trà Chanh', ' đây là nước uống', 'nuoc2.jpg'),
('N3', '07', ' Hoa đậu biếc', ' đây là nước uống', 'nuoc3.jpg'),
('N4', '07', ' Chanh Dây', ' đây là nước uống', 'nuoc4.jpg'),
('N5', '07', ' Hồng Trà', ' đây là nước uống', 'nuoc5.jpg'),
('N6', '07', ' Trà Trái cây', ' đây là nước uống', 'nuoc6.jpg'),
('N7', '07', ' Trà Đào', ' đây là nước uống', 'nuoc7.jpg'),
('N8', '07', ' Trà Matcha', ' đây là nước uống', 'nuoc8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `MASIZE` varchar(5) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`MASIZE`) VALUES
('Combo'),
('L'),
('Lớn'),
('M'),
('Vừa'),
('XL');

-- --------------------------------------------------------

--
-- Table structure for table `sizecuasanpham`
--

CREATE TABLE `sizecuasanpham` (
  `MASP` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `MASIZE` varchar(5) COLLATE utf8mb4_general_ci NOT NULL,
  `DONGIASP` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sizecuasanpham`
--

INSERT INTO `sizecuasanpham` (`MASP`, `MASIZE`, `DONGIASP`) VALUES
('CT1', 'Lớn', 37000),
('CT1', 'Vừa', 30000),
('CT2', 'Lớn', 42000),
('CT2', 'Vừa', 35000),
('CT3', 'Lớn', 32000),
('CT3', 'Vừa', 25000),
('CT4', 'Lớn', 37000),
('CT4', 'Vừa', 30000),
('L1', 'Lớn', 149000),
('L1', 'Vừa', 99000),
('L2', 'Combo', 219000),
('L3', 'Combo', 349000),
('L4', 'Lớn', 149000),
('L4', 'Vừa', 79000),
('L5', 'Lớn', 179000),
('L5', 'Vừa', 89000),
('L6', 'Combo', 289000),
('MC1', 'Lớn', 56000),
('MC1', 'Vừa', 50000),
('MC10', 'Lớn', 51000),
('MC10', 'Vừa', 45000),
('MC2', 'Lớn', 56000),
('MC2', 'Vừa', 50000),
('MC3', 'Lớn', 64000),
('MC3', 'Vừa', 59000),
('MC4', 'Lớn', 71000),
('MC4', 'Vừa', 65000),
('MC5', 'Lớn', 64000),
('MC5', 'Vừa', 59000),
('MC6', 'Lớn', 56000),
('MC6', 'Vừa', 50000),
('MC7', 'Lớn', 56000),
('MC7', 'Vừa', 50000),
('MC8', 'Lớn', 56000),
('MC8', 'Vừa', 50000),
('MC9', 'Lớn', 51000),
('MC9', 'Vừa', 45000),
('MH1', 'Combo', 30000),
('MH2', 'Combo', 29000),
('MH3', 'Combo', 30000),
('MH4', 'Combo', 25000),
('MT1', 'Lớn', 36000),
('MT1', 'Vừa', 30000),
('MT2', 'Lớn', 41000),
('MT2', 'Vừa', 35000),
('MT3', 'Lớn', 36000),
('MT3', 'Vừa', 30000),
('MT4', 'Lớn', 36000),
('MT4', 'Vừa', 30000),
('MT5', 'Lớn', 41000),
('MT5', 'Vừa', 35000),
('N1', 'L', 26000),
('N1', 'M', 23000),
('N1', 'XL', 31000),
('N2', 'L', 26000),
('N2', 'M', 23000),
('N2', 'XL', 31000),
('N3', 'L', 29000),
('N3', 'M', 26000),
('N3', 'XL', 33000),
('N4', 'L', 26000),
('N4', 'M', 23000),
('N4', 'XL', 31000),
('N5', 'L', 26000),
('N5', 'M', 23000),
('N5', 'XL', 31000),
('N6', 'L', 29000),
('N6', 'M', 26000),
('N6', 'XL', 33000),
('N7', 'L', 26000),
('N7', 'M', 23000),
('N7', 'XL', 33000),
('N8', 'L', 26000),
('N8', 'M', 23000),
('N8', 'XL', 33000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`MAHOADON`,`MASP`,`MASIZE`);

--
-- Indexes for table `danhgiasp`
--
ALTER TABLE `danhgiasp`
  ADD PRIMARY KEY (`EMAIL`,`MAHOADON`),
  ADD KEY `MAHOADON` (`MAHOADON`);

--
-- Indexes for table `giaohang`
--
ALTER TABLE `giaohang`
  ADD PRIMARY KEY (`MAKHUVUC`,`MAHOADON`),
  ADD KEY `FK_HOADON_GIAOHANG` (`MAHOADON`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MAHOADON`),
  ADD KEY `FK_GIOHANGCUAKHACH` (`EMAIL`),
  ADD KEY `FK_REFERENCE_12` (`MAKM`),
  ADD KEY `FK_REFERENCE_13` (`MAPT`);

--
-- Indexes for table `khuvuc`
--
ALTER TABLE `khuvuc`
  ADD PRIMARY KEY (`MAKHUVUC`);

--
-- Indexes for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`MAKM`);

--
-- Indexes for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`MALOAI`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`EMAIL`);

--
-- Indexes for table `phuongthuctt`
--
ALTER TABLE `phuongthuctt`
  ADD PRIMARY KEY (`MAPT`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MASP`),
  ADD KEY `FK_LOAICUASP` (`MALOAI`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`MASIZE`);

--
-- Indexes for table `sizecuasanpham`
--
ALTER TABLE `sizecuasanpham`
  ADD PRIMARY KEY (`MASP`,`MASIZE`),
  ADD KEY `FK_SIZE_SIZECUASP` (`MASIZE`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `FK_GIOHANG_CTGIOHANG` FOREIGN KEY (`MAHOADON`) REFERENCES `hoadon` (`MAHOADON`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `danhgiasp`
--
ALTER TABLE `danhgiasp`
  ADD CONSTRAINT `danhgiasp_ibfk_1` FOREIGN KEY (`MAHOADON`) REFERENCES `hoadon` (`MAHOADON`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `danhgiasp_ibfk_2` FOREIGN KEY (`EMAIL`) REFERENCES `nguoidung` (`EMAIL`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `giaohang`
--
ALTER TABLE `giaohang`
  ADD CONSTRAINT `FK_HOADON_GIAOHANG` FOREIGN KEY (`MAHOADON`) REFERENCES `hoadon` (`MAHOADON`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_KHUVUC_GIAOHANG` FOREIGN KEY (`MAKHUVUC`) REFERENCES `khuvuc` (`MAKHUVUC`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `FK_GIOHANGCUAKHACH` FOREIGN KEY (`EMAIL`) REFERENCES `nguoidung` (`EMAIL`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_REFERENCE_12` FOREIGN KEY (`MAKM`) REFERENCES `khuyenmai` (`MAKM`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_REFERENCE_13` FOREIGN KEY (`MAPT`) REFERENCES `phuongthuctt` (`MAPT`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `FK_LOAICUASP` FOREIGN KEY (`MALOAI`) REFERENCES `loaisanpham` (`MALOAI`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `sizecuasanpham`
--
ALTER TABLE `sizecuasanpham`
  ADD CONSTRAINT `FK_SIZE_SANPHAM` FOREIGN KEY (`MASP`) REFERENCES `sanpham` (`MASP`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_SIZE_SIZECUASP` FOREIGN KEY (`MASIZE`) REFERENCES `size` (`MASIZE`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
