-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 30, 2020 lúc 12:31 PM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `store`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dichvu`
--

CREATE TABLE `dichvu` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `images` text NOT NULL,
  `giaCa` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `dichvu`
--

INSERT INTO `dichvu` (`id`, `name`, `content`, `images`, `giaCa`, `created_at`) VALUES
(4, 'Khoai Lang', 'Rau củ hữu cơ', ' ../images/sv-f2.jpg', 40000, '2020-11-26 18:26:27'),
(5, 'Bí Đao', 'Rau củ hữu cơ', ' ../images/sv-f3.jpg', 20000, '2020-11-28 18:26:55'),
(6, 'Cà rốt', 'Rau củ hữu cơ', ' ../images/sv-f4.jpg', 15000, '2020-11-28 18:27:22'),
(7, 'Viêt quất', 'Rau củ hữu cơ', ' ../images/sv-f5.jpg', 50000, '2020-11-28 18:28:01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `images` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `images`, `created_at`) VALUES
(57, 'Ga', ' ../images/ga1.jpg', '0000-00-00 00:00:00'),
(58, 'Rổ hoa quả', ' ../images/ga2.jpg', '0000-00-00 00:00:00'),
(59, 'Kệ Đỗ', ' ../images/ga3.jpg', '0000-00-00 00:00:00'),
(60, 'Cà rốt', ' ../images/ga4.jpg', '0000-00-00 00:00:00'),
(61, 'Cà Chua', ' ../images/ga5.jpg', '0000-00-00 00:00:00'),
(64, 'Rổ Bí Đao', ' ../images/ga6.jpg', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first` varchar(50) NOT NULL,
  `last` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(250) NOT NULL,
  `meassage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `first`, `last`, `phone`, `email`, `meassage`) VALUES
(37, 'Nguyễn', 'Hiếu',0967488027, 'hieunguyenminh@gmail.com', 'Nhóm Trưởng'),
(42, 'Phạm', 'Hiền', 0362828909, 'hienpham@gmail.com', 'Thành Viên'),
(43, 'Nguyễn', 'Hưng', 0455397543, 'hungnguyen@gmail.com', 'Thành Viên'),
(44, 'Lê', 'Hoàng', 0943937483, 'lehoang@gmail.com', 'Thành Viên'),
(45, 'Lê', 'Sơn', 0654233483, 'sonle@gmail.com', 'Thành Viên');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `dichvu`
--
ALTER TABLE `dichvu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `dichvu`
--
ALTER TABLE `dichvu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
