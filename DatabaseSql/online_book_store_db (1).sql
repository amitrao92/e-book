-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2022 at 06:42 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_book_store_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `full_name`, `email`, `password`) VALUES
(1, 'Elias', 'admin@gmail.com', '$2y$10$Nqq/y251QX2Ccvb1Ax7hUuMqQSkG3yRLCxN2KPdetnSP3oaXVH70a'),
(2, 'amit', 'raoamit558@gmail.com', '$2y$10$SYj2RPL0Td8lTQbT1qR1K.Lc/IB2LHz.XdPSEtIfahsC.x8CzzoV.'),
(3, 'aaaaa', 'ab@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`) VALUES
(2, 'J K Rollings'),
(3, 'Tom Moody'),
(5, 'Alex'),
(6, 'Michel Obama'),
(7, 'Khalio Hussaini'),
(8, 'J R R Tokklen'),
(9, 'The Martian'),
(10, 'Robert'),
(11, 'Rick Roland'),
(12, 'Felecia'),
(13, 'Social News');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author_id`, `description`, `category_id`, `cover`, `file`) VALUES
(4, 'Harry Potter', 3, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using', 5, '62331e7c88d158.12585117.jpg', '622f6a82247c33.69629416.pdf'),
(5, 'Wolvorene', 4, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using', 5, '62303ec96eba46.33847576.jpg', '62303ec97d8e22.11330060.pdf'),
(6, 'Super man', 2, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using', 5, '62303f896eb3d0.57087779.jpg', '62303f89715206.38714455.pdf'),
(7, 'Avengers', 3, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using', 5, '62303ff850e8e5.31276723.jpg', '62303ff8532329.18929076.pdf'),
(8, 'Silent Paitent', 5, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ', 4, '62306717b51230.74284089.jpg', '62306717b69223.84322488.pdf'),
(9, 'Becoming', 6, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ', 4, '62306798b394d9.68144881.jpg', '62306798b52196.18462012.pdf'),
(10, 'The Kite Runner', 7, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ', 4, '62306938a5c758.38843494.jpg', '62306938a5e630.44079802.pdf'),
(11, 'The Lord Of Ring', 8, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ', 4, '623069e7c329f0.76164850.jpg', '623069e7c4bdd3.80291998.pdf'),
(12, 'Hail Marry', 9, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ', 3, '62306b8a62a285.87873399.jpg', '62306b8a62bd56.66409196.pdf'),
(13, 'Treasure Island', 10, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ', 3, '62306bdda1fef9.80509733.jpg', '62306bdda3c2a1.89120443.pdf'),
(14, 'Percy Jaction', 11, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ', 3, '62306eb1306a34.95268256.jpg', '62306eb1309737.05949830.pdf'),
(15, 'The Mirror of Z', 12, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ', 3, '62306ef0465eb1.08914469.jpg', '62306ef0468ec4.80833426.pdf'),
(17, 'Noise ', 13, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ', 9, '6233342c74d923.59907538.jpg', '6233342c76b584.75119973.pdf'),
(18, 'Enterpreneur', 13, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using', 9, '62333459634c92.55521966.jpg', '62333459650d94.83365662.pdf'),
(19, 'More Things To Do', 6, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using', 9, '6233349a10a575.54083692.jpg', '6233349a1446e4.97284683.pdf'),
(20, 'Mens Wealth', 13, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ', 9, '623334c24f56a9.29238555.jpg', '623334c25122b7.74861107.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(3, 'Best seller'),
(4, 'Just Arrived'),
(5, 'free books'),
(9, 'Trending Magazine ');

-- --------------------------------------------------------

--
-- Table structure for table `contact_detail`
--

CREATE TABLE `contact_detail` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(15) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_detail`
--

INSERT INTO `contact_detail` (`id`, `name`, `email`, `phone`, `message`) VALUES
(1, 'Grish', 'grish@gmail.com', 2147483647, 'gooooooooooooodd'),
(3, 'titu', 'grish@gmail.com', 2147483647, 'ghjj');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `month` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `name`, `month`, `price`, `status`) VALUES
(1, 'Membership plans', 1, 30, 1),
(2, 'Membership 2 plans', 6, 50, 1),
(3, 'Membership 3 plans', 12, 90, 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(15) NOT NULL,
  `country` varchar(50) NOT NULL,
  `province` varchar(66) NOT NULL,
  `card_holder` varchar(50) NOT NULL,
  `card_num` int(22) NOT NULL,
  `cvv_num` int(9) NOT NULL,
  `expire_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `address` varchar(200) NOT NULL,
  `pack_id` int(5) NOT NULL,
  `status` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `timestamp` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `full_name`, `email`, `phone`, `country`, `province`, `card_holder`, `card_num`, `cvv_num`, `expire_date`, `address`, `pack_id`, `status`, `user_id`, `timestamp`) VALUES
(2, 'shalniss', 'raoamit558@gmail.com', 2147483647, '2', '2', 'ssss', 223, 333, '2022-03-19 15:53:43', 'fgf2222', 1, 0, 0, 0),
(3, 'shalnihh', 'admin@gmail.comhhh', 2147483647, '1', '2', 'eeee', 3333, 5555, '2022-03-20 06:49:40', 'fgf2222eeee', 2, 0, 0, 0),
(5, 'shalnissss', 'raoamit558@gmail.comss', 2147483647, 'Canada', 'Two', 'sssssss', 22333, 344, '2022-03-20 08:56:00', 'fgf2222sss', 3, 1, 0, 0),
(8, 'raman', 'raoamit558@gmail.com', 12334, 'Uk', 'Two', '3445', 3344, 334, '2022-03-20 08:50:14', 'fgf2222sss', 2, 0, 2, 1666338686),
(9, 'roshan', 'eliasfsdev@gmail.com', 2147483647, 'Uk', 'One', '3445', 5657557, 566, '2022-03-20 08:57:47', 'fgf2222', 3, 1, 2, 1647766291);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` int(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `password`) VALUES
(2, 'amydd', 2147483647, 'user@gmail.com', '123456'),
(4, 'ram', 2147483647, 'ram@gmail.com', '123456'),
(6, 'Mukesh', 2147483647, 'user1@gmail.com', '123456'),
(8, 'anya', 2147483647, 'anya@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_detail`
--
ALTER TABLE `contact_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contact_detail`
--
ALTER TABLE `contact_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
