-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2023 at 04:16 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nike_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(5) NOT NULL,
  `category_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(1, 'QUẦN THỂ THAO'),
(2, 'ÁO THỂ THAO'),
(3, 'GIÀY THỂ THAO');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `body` varchar(200) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name_receiver` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `phone_receiver` varchar(15) NOT NULL,
  `address_receiver` text NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `orders`
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
(11, 19, 'duong', '0295827475', 'quang ninh', 123000, '2022-06-12 09:03:06', 0),
(12, 1, 'Tạ Mạnh Hùng', '0984427570', '', 300000, '2023-02-16 02:44:35', 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `order_detail`
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
(11, 12, 1),
(12, 13, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `product_image` text NOT NULL,
  `product_sale` int(11) NOT NULL,
  `product_price` double NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_description` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `size_name` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `category_id`, `product_name`, `product_image`, `product_sale`, `product_price`, `product_quantity`, `product_description`, `size_name`) VALUES
(1, 2, 'Áo Nike Classic - 3', '8.png', 0, 799999, 6, '', 'L'),
(2, 2, 'Áo Nike Color Blocktee', 'nikeshirt1.jpg', 10, 800000, 9, '', 'XL'),
(3, 2, 'Áo Nike Full White Tee', 'nikeshirt2.jpg', 15, 850000, 12, '', 'L'),
(4, 2, 'Áo Nike Shirt Lineear', 'nikeshirt3.jpg', 0, 700000, 9, '', 'XL'),
(5, 2, 'Áo Nike Icon Camoinfill Tee', 'nikeshirt4.jpg', 5, 599000, 15, '', 'L'),
(12, 1, 'Quần Nike Dri-fit', 'nikedrifit.jpg', 0, 599000, 5, '', 'S'),
(13, 2, 'Áo Nike Swear ', 'nikeshirt5.jpg', 0, 300000, 5, 'Chất liệu 66% Cotton và 34%^ Polyester mềm mịn 2 mặt, dầy dặn nhưng trọng lượng rất nhẹ nên mặc vo cùng thoải mái.\r\nMũ rộng và phần khóa kéo ở cổ áo khá cao giúp bạn ấm áp và an toàn khi tập luyện trong điều kiện thời tiết không tốt.\r\nKhóa kéo 2 chiều, túi hodie, phần vạt áo sau kiểu đuôi tôm thời trang, phong cách.', 'M'),
(14, 3, 'Giày Nike Air-Force Black Icon', 'nikeshoes.jpg', 0, 1500000, 3, 'Mẫu Giày Nike Air-Force Black Icon luôn là sự lựa chọn hàng đầu của các bạn trẻ. Bởi tone màu trắng quốc dân rất dễ phối đồ trong trang phục đi học, đi chơi, dạo phố, cà phê hay tiệc tùng đều đẹp, sang xịn mịn. \r\n\r\nRa đời để đáp ứng nhu cầu của giới trẻ, nhà sản xuất giày Nike đã tân tiến, tô thêm điểm nhấn ở vệt Nike trên đôi giày này. Sự kết hợp tuyệt đỉnh nhưng đầy tinh tế của màu trắng chủ đạo và đen ở vệt Nike. Đã tạo cảm giác tuy đơn giản nhưng vô cùng mạnh mẽ, lại được sự yêu mến của người chọn mua nó.', 'M'),
(15, 1, 'Quần Nike NSW Club', 'nikenswclub.jpg', 11, 1000000, 0, '', '42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(35) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `avatar` varchar(50) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `phone`, `username`, `password`, `email`, `avatar`, `role`) VALUES
(1, 'Tạ Mạnh Hùng', '0984427570', 'hung', '123', 'hung@gm.co', 'logoshop.png', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`order_id`,`product_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
