-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2023 at 11:24 AM
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
  `category_name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(1, 'Quần Thể Thao'),
(2, 'Áo Thể Thao'),
(3, 'Giày Thể Thao'),
(17, 'Sản Phẩm cho Nữ'),
(18, 'Sản Phẩm cho Nam'),
(19, 'Sản Phẩm cho Trẻ Em'),
(20, 'Phụ Kiện');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `product_id`, `user_id`, `content`, `body`, `created_at`) VALUES
(1, 14, 2, 'Giày đẹp lắm mn', 'sản phẩm tốt', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name_receiver` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_receiver` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_receiver` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `name_receiver`, `phone_receiver`, `address_receiver`, `total`, `created_at`, `status`) VALUES
(13, 2, 'Ngô Quang Huy', '123', '', 799999, '2023-02-21 02:24:29', 1),
(14, 2, 'Ngô Quang Huy', '12334556', '', 12300000, '2023-03-01 03:56:26', 0),
(15, 9, 'Tạ Mạnh Hùng', '0984427570', '', 0, '2023-03-06 02:59:03', 0),
(16, 9, 'Tạ Mạnh Hùng', '0984427570', '', 0, '2023-03-06 03:00:47', 0);

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
(12, 13, 1),
(13, 1, 1),
(14, 21, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_sale` int(11) NOT NULL,
  `product_price` double NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `size_name` char(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `category_id`, `product_name`, `product_image`, `product_sale`, `product_price`, `product_quantity`, `product_description`, `size_name`) VALUES
(1, 2, 'Áo Nike Classic - 3', '8.png', 0, 799999, 6, '', 'L'),
(2, 2, 'Áo Nike Color Blocktee', 'nikeshirt1.jpg', 10, 800000, 9, '', 'XL'),
(3, 2, 'Áo Nike Full White Tee', 'nikeshirt2.jpg', 15, 850000, 12, '', 'L'),
(4, 2, 'Áo Nike Shirt Lineear', 'nikeshirt3.jpg', 0, 700000, 9, '', 'XL'),
(5, 2, 'Áo Nike Camoinfill', 'nikeshirt4.jpg', 5, 599000, 15, '', 'L'),
(12, 1, 'Quần Nike Dri-fit', 'nikedrifit.jpg', 0, 599000, 5, '', 'S'),
(13, 2, 'Áo Nike Swear ', 'nikeshirt5.jpg', 0, 300000, 5, 'Chất liệu 66% Cotton và 34%^ Polyester mềm mịn 2 mặt, dầy dặn nhưng trọng lượng rất nhẹ nên mặc vo cùng thoải mái.\r\nMũ rộng và phần khóa kéo ở cổ áo khá cao giúp bạn ấm áp và an toàn khi tập luyện trong điều kiện thời tiết không tốt.\r\nKhóa kéo 2 chiều, túi hodie, phần vạt áo sau kiểu đuôi tôm thời trang, phong cách.', 'M'),
(14, 3, 'Giày Nike AF Black', 'nikeshoes.jpg', 0, 1500000, 3, 'Mẫu Giày Nike Air-Force Black Icon luôn là sự lựa chọn hàng đầu của các bạn trẻ. Bởi tone màu trắng quốc dân rất dễ phối đồ trong trang phục đi học, đi chơi, dạo phố, cà phê hay tiệc tùng đều đẹp, sang xịn mịn. \r\n\r\nRa đời để đáp ứng nhu cầu của giới trẻ, nhà sản xuất giày Nike đã tân tiến, tô thêm điểm nhấn ở vệt Nike trên đôi giày này. Sự kết hợp tuyệt đỉnh nhưng đầy tinh tế của màu trắng chủ đạo và đen ở vệt Nike. Đã tạo cảm giác tuy đơn giản nhưng vô cùng mạnh mẽ, lại được sự yêu mến của người chọn mua nó.', 'M'),
(15, 1, 'Quần Nike NSW Club', 'nikenswclub.jpg', 11, 1000000, 0, '', '42'),
(21, 17, 'Áo Nike ', 'aodas1.webp', 0, 12300000, 10, 'Thoáng mát ', 'XL'),
(22, 20, 'Vòng Cổ Nike', 'vongco2.jpg', 1, 12300000, 1, 'Làm bằng thép', 'L'),
(23, 1, 'Dây GIÀY Nike Hoa Cúc', '9c4396b638dc3b1ea2d151e1e275e07e.jpg', 0, 80000, 2, '', ''),
(24, 1, 'Băng Tay Nike', 'images1313.jpg', 0, 40000, 12, '', ''),
(25, 20, 'Mũ Nike ', 'mu3.jpg', 2, 100000, 10, 'Mũ lưỡi chai cho nam và nữ ', 'XL'),
(26, 19, 'Nike Hồng', 'cho nữ.jpg', 14, 100000, 12, 'Dành cho các bé từ  8 - 15 tuổi', '28'),
(27, 19, 'Áo Nike cho trẻ', 'chotreeee.jpg', 20, 300000, 5, 'Sản phẩm làm từ vải cotton, thoáng mát', 'M'),
(28, 20, 'Mũ Nike đen', 'mu.jpg', 30, 800000, 12, 'Đẹp, chất lượng', 'XL'),
(29, 19, 'Nike Air Porce 1', 'giaychotreme.jpg', 60, 600000, 50, 'Đẹp', '34'),
(30, 20, 'Nhẫn Nike Bạc', 'nhan-bac-nike-1.jpg', 10, 409000000, 1, 'Nhẫn nike làm bằng bạc 100%', '17');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `reply_id` int(11) NOT NULL,
  `reply_text` text NOT NULL,
  `reply_posted` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(2, 'Ngô Quang Huy', '12334556', 'Aloo', '123', 'huyngo9981@gmail.com', '', 1),
(3, 'Huy', '123', 'finn', '123', 'finnofme7972@gmail.com', '', 0),
(4, 'Quang Huy', '123', 'user1', '123', 'userne123@gmail.com', '', 0),
(9, 'Tạ Mạnh Hùng', '0984427570', 'hung', '123', 'hung@gm.co', 'z4157451711932_157d6601180bdd84c91667a049c785d5.jp', 1),
(10, 'Tạ Mạnh Hùng', '0984427570', 'hungz', '9b50cc0f', 'hung@gm.connn', '', 0),
(11, 'Tạ Mạnh Hùng', '0984427570', 'hungzz', '123', 'hung@gm.connnn', '', 0),
(12, 'Tạ Mạnh Hùng', '0984427570', 'hungzzz', '123', 'hung@gm.connnnm', '', 0),
(13, 'Tạ Mạnh Hùng', '0984427570', 'hungtm', 'a5e05c38', 'hungtm@student.apsce.net', '', 0);

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
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`reply_id`);

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
  MODIFY `category_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `reply_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
