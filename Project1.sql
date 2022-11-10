-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th10 10, 2022 lúc 07:06 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `Project1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Bill`
--

CREATE TABLE `Bill` (
  `id_bill` int(255) NOT NULL,
  `id_cart` int(255) NOT NULL,
  `total` int(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Cart`
--

CREATE TABLE `Cart` (
  `id_cart` int(255) NOT NULL,
  `id_user` int(255) NOT NULL,
  `id_product` int(255) NOT NULL,
  `amount` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Category`
--

CREATE TABLE `Category` (
  `id_category` int(255) NOT NULL,
  `id_user` int(255) NOT NULL,
  `name_category` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_category` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Event`
--

CREATE TABLE `Event` (
  `id_event` int(255) NOT NULL,
  `id_user` int(255) NOT NULL,
  `name_event` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_event` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_event` date NOT NULL,
  `end_event` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `OrderBill`
--

CREATE TABLE `OrderBill` (
  `id_order` int(255) NOT NULL,
  `id_bill` int(255) NOT NULL,
  `status` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Product`
--

CREATE TABLE `Product` (
  `id_product` int(255) NOT NULL,
  `id_shop` int(255) NOT NULL,
  `id_category` int(255) NOT NULL,
  `name_product` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_product` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_product` int(255) NOT NULL,
  `amount_product` int(20) NOT NULL,
  `description_product` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sale` int(200) NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT 0,
  `quantity_purchased` int(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Shop`
--

CREATE TABLE `Shop` (
  `id_shop` int(255) NOT NULL,
  `id_user` int(255) NOT NULL,
  `name_shop` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_shop` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_shop` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `User`
--

CREATE TABLE `User` (
  `id_user` int(255) NOT NULL,
  `gmail` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_user` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(3) NOT NULL DEFAULT 2,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `User`
--

INSERT INTO `User` (`id_user`, `gmail`, `password`, `img_user`, `phone`, `address`, `role`, `create_at`, `update_at`) VALUES
(8, 'tuananh1', '123123123', 'tuan anh img', '0984158677', '241 quang trung', 2, '2022-11-10 06:00:26', '2022-11-10 06:00:43');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `Bill`
--
ALTER TABLE `Bill`
  ADD PRIMARY KEY (`id_bill`),
  ADD KEY `buy` (`id_cart`);

--
-- Chỉ mục cho bảng `Cart`
--
ALTER TABLE `Cart`
  ADD PRIMARY KEY (`id_cart`),
  ADD KEY `have_cart` (`id_product`),
  ADD KEY `user_by` (`id_user`);

--
-- Chỉ mục cho bảng `Category`
--
ALTER TABLE `Category`
  ADD PRIMARY KEY (`id_category`),
  ADD KEY `admin_create` (`id_user`);

--
-- Chỉ mục cho bảng `Event`
--
ALTER TABLE `Event`
  ADD PRIMARY KEY (`id_event`),
  ADD KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `OrderBill`
--
ALTER TABLE `OrderBill`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `check-status` (`id_bill`);

--
-- Chỉ mục cho bảng `Product`
--
ALTER TABLE `Product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `have_shop` (`id_shop`),
  ADD KEY `have_category` (`id_category`);

--
-- Chỉ mục cho bảng `Shop`
--
ALTER TABLE `Shop`
  ADD PRIMARY KEY (`id_shop`),
  ADD KEY `create` (`id_user`);

--
-- Chỉ mục cho bảng `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `Bill`
--
ALTER TABLE `Bill`
  MODIFY `id_bill` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `Cart`
--
ALTER TABLE `Cart`
  MODIFY `id_cart` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `Category`
--
ALTER TABLE `Category`
  MODIFY `id_category` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `Event`
--
ALTER TABLE `Event`
  MODIFY `id_event` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `OrderBill`
--
ALTER TABLE `OrderBill`
  MODIFY `id_order` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `Product`
--
ALTER TABLE `Product`
  MODIFY `id_product` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `Shop`
--
ALTER TABLE `Shop`
  MODIFY `id_shop` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `User`
--
ALTER TABLE `User`
  MODIFY `id_user` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `Bill`
--
ALTER TABLE `Bill`
  ADD CONSTRAINT `buy` FOREIGN KEY (`id_cart`) REFERENCES `Cart` (`id_cart`);

--
-- Các ràng buộc cho bảng `Cart`
--
ALTER TABLE `Cart`
  ADD CONSTRAINT `have_cart` FOREIGN KEY (`id_product`) REFERENCES `Product` (`id_product`),
  ADD CONSTRAINT `user_by` FOREIGN KEY (`id_user`) REFERENCES `User` (`id_user`);

--
-- Các ràng buộc cho bảng `Category`
--
ALTER TABLE `Category`
  ADD CONSTRAINT `admin_create` FOREIGN KEY (`id_user`) REFERENCES `User` (`id_user`);

--
-- Các ràng buộc cho bảng `Event`
--
ALTER TABLE `Event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `User` (`id_user`);

--
-- Các ràng buộc cho bảng `OrderBill`
--
ALTER TABLE `OrderBill`
  ADD CONSTRAINT `check-status` FOREIGN KEY (`id_bill`) REFERENCES `Bill` (`id_bill`);

--
-- Các ràng buộc cho bảng `Product`
--
ALTER TABLE `Product`
  ADD CONSTRAINT `have_category` FOREIGN KEY (`id_category`) REFERENCES `Category` (`id_category`),
  ADD CONSTRAINT `have_shop` FOREIGN KEY (`id_shop`) REFERENCES `Shop` (`id_shop`);

--
-- Các ràng buộc cho bảng `Shop`
--
ALTER TABLE `Shop`
  ADD CONSTRAINT `create` FOREIGN KEY (`id_user`) REFERENCES `User` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
