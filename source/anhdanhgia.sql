-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 06, 2023 at 12:04 PM
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
-- Table structure for table `anhdanhgia`
--

CREATE TABLE `anhdanhgia` (
  `LINKANH` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `MASP` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `EMAIL` varchar(70) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `anhdanhgia`
--

INSERT INTO `anhdanhgia` (`LINKANH`, `MASP`, `EMAIL`) VALUES
('1.jpg', 'CT3', 'aib2011957@student.ctu.edu.vn'),
('AN13.jpg', 'L2', 'aib2011957@student.ctu.edu.vn'),
('ANH11.jpg', 'CT2', 'aib2011957@student.ctu.edu.vn'),
('ANH12.jpg', 'CT2', 'aib2011957@student.ctu.edu.vn'),
('ANH14.jpg', 'L2', 'aib2011957@student.ctu.edu.vn'),
('anh4.jpg', 'CT3', 'aib2011957@student.ctu.edu.vn'),
('cdm.jpg', 'CT1', 'aib2011957@student.ctu.edu.vn'),
('M2.jpg', 'CT1', 'vinh@gmail.com'),
('m3.jpg', 'CT4', 'vinh@gmail.com'),
('m4.jpg', 'MC4', 'vinh@gmail.com'),
('m5.jpg', 'CT1', 'duybii922002@gmail.com'),
('m7.jpg', 'CT3', 'duybii922002@gmail.com'),
('m8.jpg', 'L1', 'duybii922002@gmail.com'),
('m9.jpg', 'L3', 'duybii922002@gmail.com'),
('MY1.jpg', 'CT3', 'vinh@gmail.com'),
('quan.jpg', 'CT1', 'aib2011957@student.ctu.edu.vn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anhdanhgia`
--
ALTER TABLE `anhdanhgia`
  ADD PRIMARY KEY (`LINKANH`),
  ADD KEY `anhanh_pk1` (`EMAIL`),
  ADD KEY `anhanh_pk2` (`MASP`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anhdanhgia`
--
ALTER TABLE `anhdanhgia`
  ADD CONSTRAINT `anhanh_pk1` FOREIGN KEY (`EMAIL`) REFERENCES `danhgiasp` (`EMAIL`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `anhanh_pk2` FOREIGN KEY (`MASP`) REFERENCES `danhgiasp` (`MASP`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
