-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 24, 2022 lúc 04:06 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `adidas_shop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `category_id` int(5) NOT NULL,
  `category_name` varchar(30) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(1, 'QUẦN THỂ THAO'),
(2, 'ÁO THỂ THAO'),
(3, 'GIÀY THỂ THAO');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name_receiver` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `phone_receiver` varchar(15) COLLATE utf8mb4_bin NOT NULL,
  `address_receiver` text COLLATE utf8mb4_bin NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `name_receiver`, `phone_receiver`, `address_receiver`, `total`, `created_at`, `status`) VALUES
(1, 10, 'duong', '093747134', 'bac giang', 3123000, '2022-05-30 18:01:58', 0),
(2, 10, 'duong', '093747134', 'ha noi', 423000, '2022-05-30 18:03:17', 0),
(3, 12, 'duong2', '09476235', 'son dong', 1269000, '2022-05-31 02:43:47', 0),
(4, 12, 'duong2', '09476235', 'son dong', 3000000, '2022-05-31 02:45:25', 0),
(5, 12, 'duong2', '09476235', 'ha noi', 300000, '2022-05-31 02:45:53', 0),
(6, 14, 'hung', '09344877253', 'thanh hoa', 3600000, '2022-05-31 09:46:28', 0),
(7, 18, 'nam', '0592845723', 'phhu yen', 1146000, '2022-06-11 16:10:16', 0),
(8, 18, 'nam', '0592845723', 'Nam định', 1500000, '2022-06-11 16:52:11', 0),
(9, 19, 'duong', '0295827475', 'ha noi', 423000, '2022-06-12 04:16:52', 0),
(10, 19, 'duong', '0295827475', 'ha noi', 1500000, '2022-06-12 09:02:43', 0),
(11, 19, 'duong', '0295827475', 'quang ninh', 123000, '2022-06-12 09:03:06', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`order_id`, `product_id`, `quantity`) VALUES
(1, 12, 1),
(1, 14, 2),
(2, 12, 1),
(2, 13, 1),
(3, 12, 3),
(3, 13, 3),
(4, 14, 2),
(5, 13, 1),
(6, 13, 2),
(6, 14, 2),
(7, 12, 2),
(7, 13, 3),
(8, 14, 1),
(9, 12, 1),
(9, 13, 1),
(10, 14, 1),
(11, 12, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `product_image` text COLLATE utf8mb4_bin NOT NULL,
  `product_sale` int(11) NOT NULL,
  `product_price` double NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_description` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `size_name` char(5) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`product_id`, `category_id`, `product_name`, `product_image`, `product_sale`, `product_price`, `product_quantity`, `product_description`, `size_name`) VALUES
(12, 1, 'Quan', 'ADICOLORCLASSICSTRACETEE.jpg', 0, 123000, 5, '', 'S'),
(13, 2, 'Ao thun adidas', 'FUTUREICONCAMOINFILLTEE.jpg', 0, 300000, 5, 'frgewgsg', 'M'),
(14, 3, 'Giày adidas', '', 0, 1500000, 3, 'sàdfgdfhgjfg', 'M');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(35) COLLATE utf8mb4_bin NOT NULL,
  `phone` varchar(10) COLLATE utf8mb4_bin NOT NULL,
  `username` varchar(30) COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(26) COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(35) COLLATE utf8mb4_bin NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`user_id`, `name`, `phone`, `username`, `password`, `email`, `role`) VALUES
(10, 'dương', '093747134', 'duong', '$2y$10$Fe3jd1WXr8ANpBWJ3ov', 'duong123@gmail.com', 0),
(12, 'duong', '09476235', 'duong2', '$2y$10$tj6rWQN4ENOSLTAVKUK', 'duong1234@gmail.com', 0),
(14, 'hung', '094726454', 'hung', '$2y$10$QKE6lq2bb1YeUCNTw7f', 'hung@gmail.com', 0),
(18, 'nam', '0592845723', 'nam1', '$2y$10$swiiH4ZCrnFZYKjoOcS', 'nam1@gmail.com', 0),
(19, 'duong', '0295827475', 'nam2', '$2y$10$27RCx0whqBKoc0ZLo2m', 'nam@gmail.com', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`order_id`,`product_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Các ràng buộc cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
