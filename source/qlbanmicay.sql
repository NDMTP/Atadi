-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 07, 2023 lúc 05:52 AM
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
-- Cơ sở dữ liệu: `qlbanmicay`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `MAHOADON` int(11) NOT NULL,
  `MASP` varchar(10) NOT NULL,
  `MASIZE` varchar(5) NOT NULL,
  `SOLUONGSP` int(11) DEFAULT NULL,
  `DOCAY` varchar(20) DEFAULT NULL,
  `DONGIABAN` int(11) DEFAULT NULL,
  `TONGTIEN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`MAHOADON`, `MASP`, `MASIZE`, `SOLUONGSP`, `DOCAY`, `DONGIABAN`, `TONGTIEN`) VALUES
(1, 'CT1', 'L', 2, NULL, 420000, 840000),
(1, 'L1', 'M', 1, NULL, 1420000, 1420000),
(2, 'L2', 'L', 2, NULL, 420000, 840000),
(3, 'L2', 'M', 2, NULL, 420000, 840000),
(4, 'CT1', 'Vừa', 1, '', 30000, 30000),
(4, 'L1', 'Vừa', 1, '', 99000, 99000),
(5, 'MC2', 'Lớn', 1, '4', 56000, 56000),
(6, 'MC4', 'Lớn', 1, '0', 71000, 71000),
(7, 'CT2', 'Vừa', 3, '', 35000, 105000),
(8, 'CT1', 'Vừa', 1, '', 30000, 30000),
(8, 'CT3', 'Vừa', 2, '', 25000, 50000),
(8, 'CT4', 'Vừa', 2, '', 30000, 60000),
(9, 'CT1', 'Vừa', 1, '', 30000, 30000),
(9, 'CT2', 'Vừa', 1, '', 35000, 35000),
(9, 'CT3', 'Vừa', 1, '', 25000, 25000),
(9, 'CT4', 'Vừa', 1, '', 30000, 30000),
(10, 'CT1', 'Vừa', 1, '', 30000, 30000),
(10, 'CT2', 'Vừa', 1, '', 35000, 35000),
(11, 'CT3', 'Vừa', 1, '', 25000, 25000),
(12, 'L1', 'Vừa', 1, '', 99000, 99000),
(12, 'L3', 'Combo', 1, '', 349000, 349000),
(13, 'CT1', 'Vừa', 1, '', 30000, 30000),
(13, 'CT2', 'Vừa', 1, '', 35000, 35000),
(13, 'CT3', 'Vừa', 1, '', 25000, 25000),
(14, 'CT1', 'Vừa', 1, '', 30000, 30000),
(15, 'CT1', 'Vừa', 1, '', 30000, 30000),
(15, 'CT2', 'Vừa', 1, '', 35000, 35000),
(16, 'CT1', 'Lớn', 1, '', 37000, 37000),
(17, 'CT1', 'Vừa', 1, '', 30000, 30000),
(18, 'CT3', 'Vừa', 1, '', 25000, 25000),
(19, 'CT4', 'Vừa', 4, '', 30000, 120000),
(20, 'CT1', 'Vừa', 1, '', 30000, 30000),
(21, 'CT1', 'Vừa', 4, '', 30000, 120000),
(22, 'CT2', 'Vừa', 1, '', 35000, 35000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhgiasp`
--

CREATE TABLE `danhgiasp` (
  `EMAIL` varchar(70) NOT NULL,
  `MASP` varchar(10) NOT NULL,
  `MAHOADON` int(11) NOT NULL,
  `NOIDUNGDG` varchar(300) DEFAULT NULL,
  `CHATLUONGSP` varchar(30) NOT NULL,
  `TGDANHGIA` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhgiasp`
--

INSERT INTO `danhgiasp` (`EMAIL`, `MASP`, `MAHOADON`, `NOIDUNGDG`, `CHATLUONGSP`, `TGDANHGIA`) VALUES
('aib2011957@student.ctu.edu.vn', 'CT1', 8, '10 ĐIÊM KHÔNG CÓ NHƯNG MỆT DỮ LẮM RỒI.))))', 'Khá Tốt', '2023-10-06 09:51:51'),
('aib2011957@student.ctu.edu.vn', 'CT1', 13, 'KHOONG NGON LAM', 'Kém', '2023-10-06 19:15:58'),
('aib2011957@student.ctu.edu.vn', 'CT1', 14, 'KHONG NGONNNNN', 'Kém', '2023-10-06 19:18:09'),
('aib2011957@student.ctu.edu.vn', 'CT2', 7, '10 ĐIỂMMMMMMMMM 10 ĐIỂMMMMMMMMM 10 ĐIỂMMMMMMMMM', 'Tuyệt Vời', '2023-10-06 09:56:17'),
('aib2011957@student.ctu.edu.vn', 'CT3', 8, '10 ĐIÊM 10 ĐIÊM 10 ĐIÊM 10 ĐIÊM10 ĐIÊM KHÔNG NHƯNG))))', 'Khá Tốt', '2023-10-06 09:54:09'),
('aib2011957@student.ctu.edu.vn', 'CT3', 18, 'Ngon', 'Trung Bình', '2023-10-13 07:41:19'),
('aib2011957@student.ctu.edu.vn', 'L2', 2, 'Ngon', 'Trung Bình', '2023-10-13 07:38:56'),
('aib2011957@student.ctu.edu.vn', 'L2', 3, 'NGON LẮMMMMMMMMMMMMM', 'Tuyệt Vời', '2023-10-06 09:59:03'),
('duybii922002@gmail.com', 'CT1', 10, 'Tuyệt vời, ngon lắm', 'Tuyệt Vời', '2023-10-06 10:22:41'),
('duybii922002@gmail.com', 'CT1', 15, 'phucj vuj khoong tot', 'Kém', '2023-10-06 19:22:09'),
('duybii922002@gmail.com', 'CT1', 16, 'CUNGX NGON', 'Khá Tốt', '2023-10-06 19:28:06'),
('duybii922002@gmail.com', 'CT1', 17, 'NGONNNN LAMWS', 'Tuyệt Vời', '2023-10-06 19:36:57'),
('duybii922002@gmail.com', 'CT3', 11, 'Xuất sắc.............', 'Tuyệt Vời', '2023-10-06 10:35:06'),
('duybii922002@gmail.com', 'L1', 12, 'NGON LẮM NGON LẮM', 'Tuyệt Vời', '2023-10-06 10:37:01'),
('duybii922002@gmail.com', 'L3', 12, 'NGON NGON NGON', 'Tuyệt Vời', '2023-10-06 10:37:16'),
('vinh@gmail.com', 'CT1', 4, 'NGONNNNNNN', 'Tuyệt Vời', '2023-10-06 10:16:38'),
('vinh@gmail.com', 'CT3', 9, 'NGON NGON NGON  X10', 'Tuyệt Vời', '2023-10-06 10:17:59'),
('vinh@gmail.com', 'CT4', 9, 'khá ngon', 'Tuyệt Vời', '2023-10-06 10:19:04'),
('vinh@gmail.com', 'MC2', 5, 'SẢN PHẨM TƯƠI SỐNG ĂN NGON LẮM', 'Tuyệt Vời', '2023-10-06 10:12:09'),
('vinh@gmail.com', 'MC4', 6, 'ABC HDSHSHS', 'Tuyệt Vời', '2023-10-06 10:20:08');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giaohang`
--

CREATE TABLE `giaohang` (
  `MAKHUVUC` varchar(20) NOT NULL,
  `MAHOADON` int(11) NOT NULL,
  `PHIGIAO` int(11) DEFAULT NULL,
  `GHICHU` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `giaohang`
--

INSERT INTO `giaohang` (`MAKHUVUC`, `MAHOADON`, `PHIGIAO`, `GHICHU`) VALUES
('BT1', 6, 25000, '33'),
('BT6', 4, 25000, 'aaa'),
('BT8', 5, 5000, 'aaaaa'),
('NK10', 12, 5000, '12a'),
('NK10', 16, 5000, '12a'),
('NK10', 22, 5000, '12a'),
('NK11', 21, 0, '12a'),
('NK3', 15, 0, '12a'),
('NK6', 17, 0, '12a'),
('NK7', 7, 0, '12a'),
('NK7', 8, 0, '12a'),
('NK7', 9, 0, '12a'),
('NK7', 10, 0, '12a'),
('NK7', 11, 0, '12a'),
('NK7', 14, 0, '12a'),
('NK7', 18, 0, '12a'),
('NK7', 19, 0, '12a'),
('NK7', 20, 0, '12a'),
('NK8', 13, 0, '12a');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `MAHOADON` int(11) NOT NULL,
  `EMAIL` varchar(70) NOT NULL,
  `MAKM` varchar(10) DEFAULT NULL,
  `MAPT` varchar(20) DEFAULT NULL,
  `NGAYLAP` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `TRANGTHAIHOADON` varchar(5) DEFAULT '0',
  `TONGTIEN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`MAHOADON`, `EMAIL`, `MAKM`, `MAPT`, `NGAYLAP`, `TRANGTHAIHOADON`, `TONGTIEN`) VALUES
(1, 'aib2011957@student.ctu.edu.vn', NULL, NULL, '2023-09-18 13:51:44', '-1', 2260000),
(2, 'aib2011957@student.ctu.edu.vn', NULL, NULL, '2023-10-27 22:18:22', '2', 1420000),
(3, 'aib2011957@student.ctu.edu.vn', NULL, NULL, '2023-10-27 22:18:10', '2', 840000),
(4, 'vinh@gmail.com', '100KM5', '1', '2023-10-27 22:18:16', '2', 129000),
(5, 'vinh@gmail.com', '100KM5', '2', '2023-10-27 22:18:05', '2', 56000),
(6, 'vinh@gmail.com', NULL, '2', '2023-10-27 22:17:59', '2', 71000),
(7, 'aib2011957@student.ctu.edu.vn', '100KM5', '1', '2023-10-27 22:17:53', '2', 99750),
(8, 'aib2011957@student.ctu.edu.vn', '100KM5', '1', '2023-10-27 22:17:47', '2', 133000),
(9, 'vinh@gmail.com', '100KM5', '2', '2023-10-27 22:17:39', '2', 114000),
(10, 'duybii922002@gmail.com', NULL, '2', '2023-10-27 22:17:33', '2', 65000),
(11, 'duybii922002@gmail.com', NULL, '1', '2023-09-27 22:17:28', '2', 25000),
(12, 'duybii922002@gmail.com', '200KM10', '1', '2023-09-27 22:17:22', '2', 403200),
(13, 'aib2011957@student.ctu.edu.vn', NULL, '1', '2023-10-27 22:17:16', '2', 90000),
(14, 'aib2011957@student.ctu.edu.vn', NULL, '1', '2023-10-27 22:17:10', '2', 30000),
(15, 'duybii922002@gmail.com', NULL, '1', '2023-10-27 22:17:04', '2', 65000),
(16, 'duybii922002@gmail.com', NULL, '1', '2023-10-27 22:16:57', '2', 37000),
(17, 'duybii922002@gmail.com', NULL, '1', '2023-10-27 22:16:48', '2', 30000),
(18, 'aib2011957@student.ctu.edu.vn', NULL, '1', '2023-09-27 22:16:37', '2', 25000),
(19, 'aib2011957@student.ctu.edu.vn', '100KM5', '1', '2023-10-27 22:16:43', '2', 114000),
(20, 'aib2011957@student.ctu.edu.vn', NULL, '1', '2023-10-27 22:29:33', '-1', 30000),
(21, 'aib2011957@student.ctu.edu.vn', NULL, '2', '2023-10-28 00:07:19', '2', 120000),
(22, 'aib2011957@student.ctu.edu.vn', NULL, '2', '2023-10-27 22:13:18', '0', 35000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuvuc`
--

CREATE TABLE `khuvuc` (
  `MAKHUVUC` varchar(20) NOT NULL,
  `TENKHUVUC` varchar(100) DEFAULT NULL,
  `PHIGIAO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khuvuc`
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
-- Cấu trúc bảng cho bảng `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `MAKM` varchar(10) NOT NULL,
  `PHANTRAMKM` int(11) DEFAULT NULL,
  `DIEUKIENKM` int(11) DEFAULT NULL,
  `NGAYBD` date DEFAULT NULL,
  `NGAYKT` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khuyenmai`
--

INSERT INTO `khuyenmai` (`MAKM`, `PHANTRAMKM`, `DIEUKIENKM`, `NGAYBD`, `NGAYKT`) VALUES
('100KM5', 5, 100000, '2023-09-01', '2023-12-31'),
('200KM10', 10, 200000, '2023-09-01', '2023-10-31'),
('300KM15', 15, 300000, '2023-11-06', '2023-12-22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `MALOAI` varchar(10) NOT NULL,
  `TENLOAI` varchar(50) DEFAULT NULL,
  `LOAITT` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisanpham`
--

INSERT INTO `loaisanpham` (`MALOAI`, `TENLOAI`, `LOAITT`) VALUES
('01', 'Mì cay', 1),
('02', 'Lẩu', 1),
('03', 'Miến Trộn', 1),
('04', 'Món Hàn ', 1),
('05', 'Cơm trộn', 1),
('07', 'Nước giải khác', 1),
('08', 'Nướng', 1),
('09', 'Sushi', 1),
('LOAI9', 'Trà Hoa Cúc', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `EMAIL` varchar(70) NOT NULL,
  `MATKHAU` varchar(70) DEFAULT NULL,
  `DIACHI` varchar(100) DEFAULT NULL,
  `TEN` varchar(50) DEFAULT NULL,
  `SDT` varchar(12) DEFAULT NULL,
  `PHANQUYEN` varchar(20) DEFAULT 'khachhang'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`EMAIL`, `MATKHAU`, `DIACHI`, `TEN`, `SDT`, `PHANQUYEN`) VALUES
('aib2011957@student.ctu.edu.vn', '202cb962ac59075b964b07152d234b70', '120/20A Trần Quang Khải, Cái khế, ninh kiều, Cần Thơ', 'Huỳnh Thị Mỹ Ái', '0932019822', 'Admin'),
('dinh@gmail.com', '202cb962ac59075b964b07152d234b70', 'A213', 'Dinh', '0298837625', 'nhanvien'),
('duybii922002@gmail.com', '202cb962ac59075b964b07152d234b70 ', 'Vĩnh Long', 'Yii', '09398260244', 'khachhang'),
('qnhu@gmail.com', '202cb962ac59075b964b07152d234b70', 'Vĩnh Long', 'Nguyễn Quỳnh Như', '0123456789', 'khachhang'),
('vinh@gmail.com', '202cb962ac59075b964b07152d234b70', 'Cần Thơ', 'Nguyễn Đỗ Phúc Vinh', '0123456789', 'khachhang');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phuongthuctt`
--

CREATE TABLE `phuongthuctt` (
  `MAPT` varchar(20) NOT NULL,
  `TENPT` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `phuongthuctt`
--

INSERT INTO `phuongthuctt` (`MAPT`, `TENPT`) VALUES
('1', 'Thanh toán khi nhận hàng'),
('2', 'Chuyển khoản ngân hàng'),
('3', 'Ví điện tử'),
('4', 'Visa/Mastercard');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `MASP` varchar(10) NOT NULL,
  `MALOAI` varchar(10) NOT NULL,
  `TENSP` varchar(100) DEFAULT NULL,
  `MOTA` varchar(300) DEFAULT NULL,
  `LINKANH` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
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
('L7', '02', 'Lẩu cá he', 'hehehehe', NULL),
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
('N8', '07', ' Trà Matcha', ' đây là nước uống', 'nuoc8.jpg'),
('N9', '07', 'nuocws', 'nuocccccccc', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `size`
--

CREATE TABLE `size` (
  `MASIZE` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `size`
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
-- Cấu trúc bảng cho bảng `sizecuasanpham`
--

CREATE TABLE `sizecuasanpham` (
  `MASP` varchar(10) NOT NULL,
  `MASIZE` varchar(5) NOT NULL,
  `DONGIASP` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sizecuasanpham`
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
('L7', 'Combo', 149000),
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
('N8', 'XL', 33000),
('N9', 'L', 15000),
('N9', 'M', 12000);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`MAHOADON`,`MASP`,`MASIZE`),
  ADD KEY `MAHOADON` (`MAHOADON`,`MASP`,`MASIZE`),
  ADD KEY `FK_sp1` (`MASP`);

--
-- Chỉ mục cho bảng `danhgiasp`
--
ALTER TABLE `danhgiasp`
  ADD PRIMARY KEY (`EMAIL`,`MASP`,`MAHOADON`),
  ADD KEY `danhgia3` (`MAHOADON`),
  ADD KEY `MASP` (`MASP`);

--
-- Chỉ mục cho bảng `giaohang`
--
ALTER TABLE `giaohang`
  ADD PRIMARY KEY (`MAKHUVUC`,`MAHOADON`),
  ADD KEY `FK_HOADON_GIAOHANG` (`MAHOADON`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MAHOADON`),
  ADD KEY `FK_GIOHANGCUAKHACH` (`EMAIL`),
  ADD KEY `FK_REFERENCE_12` (`MAKM`),
  ADD KEY `FK_REFERENCE_13` (`MAPT`);

--
-- Chỉ mục cho bảng `khuvuc`
--
ALTER TABLE `khuvuc`
  ADD PRIMARY KEY (`MAKHUVUC`);

--
-- Chỉ mục cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`MAKM`);

--
-- Chỉ mục cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`MALOAI`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`EMAIL`);

--
-- Chỉ mục cho bảng `phuongthuctt`
--
ALTER TABLE `phuongthuctt`
  ADD PRIMARY KEY (`MAPT`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MASP`),
  ADD KEY `FK_LOAICUASP` (`MALOAI`);

--
-- Chỉ mục cho bảng `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`MASIZE`);

--
-- Chỉ mục cho bảng `sizecuasanpham`
--
ALTER TABLE `sizecuasanpham`
  ADD PRIMARY KEY (`MASP`,`MASIZE`),
  ADD KEY `FK_SIZE_SIZECUASP` (`MASIZE`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `FK_GIOHANG_CTGIOHANG` FOREIGN KEY (`MAHOADON`) REFERENCES `hoadon` (`MAHOADON`),
  ADD CONSTRAINT `FK_sp1` FOREIGN KEY (`MASP`) REFERENCES `sizecuasanpham` (`MASP`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `danhgiasp`
--
ALTER TABLE `danhgiasp`
  ADD CONSTRAINT `danhgia1` FOREIGN KEY (`MASP`) REFERENCES `chitiethoadon` (`MASP`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `danhgia2` FOREIGN KEY (`EMAIL`) REFERENCES `nguoidung` (`EMAIL`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `danhgia3` FOREIGN KEY (`MAHOADON`) REFERENCES `chitiethoadon` (`MAHOADON`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `giaohang`
--
ALTER TABLE `giaohang`
  ADD CONSTRAINT `FK_HOADON_GIAOHANG` FOREIGN KEY (`MAHOADON`) REFERENCES `hoadon` (`MAHOADON`),
  ADD CONSTRAINT `FK_KHUVUC_GIAOHANG` FOREIGN KEY (`MAKHUVUC`) REFERENCES `khuvuc` (`MAKHUVUC`);

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `FK_GIOHANGCUAKHACH` FOREIGN KEY (`EMAIL`) REFERENCES `nguoidung` (`EMAIL`),
  ADD CONSTRAINT `FK_REFERENCE_12` FOREIGN KEY (`MAKM`) REFERENCES `khuyenmai` (`MAKM`),
  ADD CONSTRAINT `FK_REFERENCE_13` FOREIGN KEY (`MAPT`) REFERENCES `phuongthuctt` (`MAPT`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `FK_LOAICUASP` FOREIGN KEY (`MALOAI`) REFERENCES `loaisanpham` (`MALOAI`);

--
-- Các ràng buộc cho bảng `sizecuasanpham`
--
ALTER TABLE `sizecuasanpham`
  ADD CONSTRAINT `FK_SIZE_SANPHAM` FOREIGN KEY (`MASP`) REFERENCES `sanpham` (`MASP`),
  ADD CONSTRAINT `FK_SIZE_SIZECUASP` FOREIGN KEY (`MASIZE`) REFERENCES `size` (`MASIZE`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
