-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 11, 2020 lúc 01:49 AM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `workshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(45) NOT NULL,
  `nameAdmin` varchar(45) NOT NULL,
  `mailAdmin` varchar(100) NOT NULL,
  `phoneAdmin` varchar(20) NOT NULL,
  `ageAdmin` int(10) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `sexAdmin` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id_admin`, `nameAdmin`, `mailAdmin`, `phoneAdmin`, `ageAdmin`, `username`, `password`, `sexAdmin`) VALUES
('A123', 'nhu', 'nhu@gmail.com', '012345', 21, 'admin123', 'admin123', 'nam'),
('A606', 'Midas', 'Midas@gmail.com', '2345678', 25, 'midas99', 'midas99', 'nam');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `guest`
--

CREATE TABLE `guest` (
  `id_guest` int(45) NOT NULL,
  `nameGuest` varchar(45) NOT NULL,
  `ageGuest` int(11) NOT NULL,
  `phoneGuest` varchar(20) NOT NULL,
  `mailGuest` varchar(45) NOT NULL,
  `addressGuest` varchar(45) NOT NULL,
  `sexGuest` varchar(45) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `guest`
--

INSERT INTO `guest` (`id_guest`, `nameGuest`, `ageGuest`, `phoneGuest`, `mailGuest`, `addressGuest`, `sexGuest`, `username`, `password`) VALUES
(1, 'Lam Xung', 21, '0123546879', 'sang@gmail.com', 'Bac Ninh', 'nam', 'user123', 'user123'),
(3, 'Vo Tong', 25, '456798', 'van@gmail.com', 'Ha Noi', 'nu', 'vanhan', 'vanhan'),
(4, 'Tong Giang', 35, '456213', 'hoang@gmail.com', 'Ha Noi', 'nam', 'bean', 'hoang'),
(5, 'Yen Thanh', 20, '46556132', 'yenthanh@gmail.com', 'Hai Phong', 'nu', 'yenthanh', 'yenthanh'),
(6, 'Tao Manh Duc', 50, '45613200', 'taothao@gmail.com', 'Vinh Phuc', 'nam', 'taothao', 'taothao');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`id_guest`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `guest`
--
ALTER TABLE `guest`
  MODIFY `id_guest` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
