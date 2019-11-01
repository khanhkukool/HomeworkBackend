-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2019 at 05:27 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanly`
--

-- --------------------------------------------------------

--
-- Table structure for table `dean`
--

CREATE TABLE `dean` (
  `dean_ID` int(10) NOT NULL,
  `tenDA` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `maDA` int(10) DEFAULT NULL,
  `ddiem_DA` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PHG` tinyint(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dean`
--

INSERT INTO `dean` (`dean_ID`, `tenDA`, `maDA`, `ddiem_DA`, `PHG`) VALUES
(1, 'Sản phẩm X', 1, 'Quy Nhơn', 5),
(2, 'Sản phẩm Y', 2, 'Nha Trang', 5),
(3, 'Sản phẩm Z', 3, 'TP HCM', 5),
(4, 'Tin học hóa', 10, 'Bình Dương', 4);

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `nhanvien_ID` int(10) NOT NULL,
  `hoNV` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenLot` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenNV` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phai` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `luong` int(10) DEFAULT NULL,
  `maNV` int(10) DEFAULT NULL,
  `ngaysinh` date DEFAULT NULL,
  `diachi` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `PHG` tinyint(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`nhanvien_ID`, `hoNV`, `tenLot`, `tenNV`, `phai`, `luong`, `maNV`, `ngaysinh`, `diachi`, `PHG`) VALUES
(6, 'Đinh', 'Lê', 'Tiên', 'Nam', 4000, 123456789, '1965-09-01', 'Nguyễn Trãi, Q5', 1),
(10, 'Nguyễn', 'Thị', 'Loan', 'Nữ', 2500, 333445555, '1955-08-12', 'Nguyễn Huệ, Q1', 5),
(11, 'Nguyễn', 'Lan', 'Anh', 'Nữ', 4300, 66688444, '1962-09-15', 'Lê Lợi, Q1', 5),
(12, 'Trần', 'Thanh', 'Tâm', 'Nam', 3800, 453453453, '1972-07-31', 'Nguyễn Trãi, Q5', 2);

-- --------------------------------------------------------

--
-- Table structure for table `phancong`
--

CREATE TABLE `phancong` (
  `phancong_ID` int(10) NOT NULL,
  `maNV` int(10) DEFAULT NULL,
  `maDA` int(10) DEFAULT NULL,
  `sogio` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phancong`
--

INSERT INTO `phancong` (`phancong_ID`, `maNV`, `maDA`, `sogio`) VALUES
(1, 123456789, 1, 32),
(2, 123456789, 2, 8),
(3, 666884444, 3, 40),
(4, 453453453, 1, 20);

-- --------------------------------------------------------

--
-- Table structure for table `phongban`
--

CREATE TABLE `phongban` (
  `PHG` tinyint(3) DEFAULT NULL,
  `tenPHG` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phongban`
--

INSERT INTO `phongban` (`PHG`, `tenPHG`) VALUES
(1, 'Nhân sự'),
(2, 'Kế hoạch'),
(3, 'Kinh doanh'),
(4, 'Marketing'),
(5, 'Kế toán');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dean`
--
ALTER TABLE `dean`
  ADD PRIMARY KEY (`dean_ID`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`nhanvien_ID`);

--
-- Indexes for table `phancong`
--
ALTER TABLE `phancong`
  ADD PRIMARY KEY (`phancong_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dean`
--
ALTER TABLE `dean`
  MODIFY `dean_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `nhanvien_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `phancong`
--
ALTER TABLE `phancong`
  MODIFY `phancong_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
