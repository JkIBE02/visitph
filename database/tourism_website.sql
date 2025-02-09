-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2025 at 10:58 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourism_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` int(11) NOT NULL,
  `author` varchar(100) DEFAULT NULL,
  `date_posted` timestamp NOT NULL DEFAULT current_timestamp(),
  `content` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `likes` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `author`, `date_posted`, `content`, `image`, `likes`) VALUES
(63, 'Guest', '2025-02-06 01:34:30', 'Boracay.', 'http://localhost/GROUP9/assets/images/boracay_top10.jpg', 0),
(64, 'Guest', '2025-02-06 01:36:26', 'Siargao', 'http://localhost/GROUP9/assets/images/siargao_top10.jpg', 0),
(65, 'Guest', '2025-02-06 01:37:30', 'La Union.', 'http://localhost/GROUP9/assets/images/la_union_top10.jpg', 0),
(66, 'Guest', '2025-02-06 01:46:00', 'Ifugao.', 'http://localhost/GROUP9/assets/images/ifugao_top10.jpg', 0),
(68, 'Guest', '2025-02-06 01:53:16', 'Bicol Express.', 'http://localhost/GROUP9/assets/images/bicol_express.jpg', 0),
(69, 'Guest', '2025-02-06 01:53:39', 'Bicol Express.', 'http://localhost/GROUP9/assets/images/bicol_express.jpg', 0),
(75, 'Guest', '2025-02-06 01:57:19', 'Seafood Soup.', 'http://localhost/GROUP9/assets/images/seafood_soup', 0),
(76, 'Guest', '2025-02-06 01:57:25', 'Crocodile Sisig.', 'http://localhost/GROUP9/assets/images/crocodile_sisig', 1),
(77, 'Guest', '2025-02-06 02:04:50', 'Parasailing.', 'http://localhost/GROUP9/assets/images/parasailing.jpg', 0),
(78, 'Guest', '2025-02-06 08:38:08', 'Bagnet.', 'http://localhost/GROUP9/assets/images/bagnet.jpg', 2),
(79, 'Guest', '2025-02-06 16:49:13', 'Pande Coco.', 'http://localhost/GROUP9/assets/images/pandecoco.jpg', 0),
(80, 'Guest', '2025-02-06 16:49:52', 'Seafood Soup.', 'http://localhost/GROUP9/assets/images/seafood_soup', 0),
(83, 'Guest', '2025-02-06 16:51:04', 'Pande Coco.', 'http://localhost/GROUP9/assets/images/pandecoco', 0),
(84, 'Guest', '2025-02-07 05:28:57', 'Palawan is known for its beautiful beaches and stunning landscapes.', 'http://localhost/GROUP9/assets/images/palawan_top10.jpg', 0),
(85, 'Guest', '2025-02-07 05:31:47', 'Siargao', 'http://localhost/GROUP9/assets/images/siargao_top10.jpg', 0),
(86, 'Guest', '2025-02-07 05:35:46', 'Kayangan.', 'http://localhost/GROUP9/assets/images/kayangan_top10.jpg', 0),
(87, 'Guest', '2025-02-07 07:49:37', 'Palawan is known for its beautiful beaches and stunning landscapes.', 'http://localhost/GROUP9/assets/images/palawan_top10.jpg', 0),
(88, 'Guest', '2025-02-07 09:44:34', 'Palawan is known for its beautiful beaches and stunning landscapes.', 'http://localhost/GROUP9/assets/images/palawan_top10.jpg', 1),
(89, 'Guest', '2025-02-07 09:55:24', 'Ifugao.', 'http://localhost/GROUP9/assets/images/ifugao_top10.jpg', 0),
(90, 'Guest', '2025-02-07 09:55:38', 'Jet Ski.', 'http://localhost/GROUP9/assets/images/jet_ski.jpg', 0),
(91, 'Guest', '2025-02-08 05:30:17', 'Parasailing.', 'http://localhost/GROUP9/assets/images/parasailing.jpg', 0),
(92, 'Guest', '2025-02-09 07:22:25', 'Canyoneering.', 'http://localhost/GROUP9/assets/images/canyoneering.jpg', 1),
(93, 'Guest', '2025-02-09 07:28:22', 'Palawan is known for its beautiful beaches and stunning landscapes.', 'http://localhost/GROUP9/assets/images/palawan_top10.jpg', 0),
(94, 'Guest', '2025-02-09 07:28:29', 'Boracay.', 'http://localhost/GROUP9/assets/images/boracay_top10.jpg', 0),
(95, 'Guest', '2025-02-09 07:28:34', 'Bicol Express.', 'http://localhost/GROUP9/assets/images/bicol_express.jpg', 0),
(96, 'Guest', '2025-02-09 07:28:40', 'Jet Ski.', 'http://localhost/GROUP9/assets/images/jet_ski.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `commenter` varchar(100) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `date_commented` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `commenter`, `comment`, `date_commented`) VALUES
(32, 76, 'User', 'sarapp', '2025-02-06 01:57:31'),
(33, 77, 'User', 'nc', '2025-02-06 08:38:41'),
(34, 75, 'User', '', '2025-02-06 09:01:57'),
(35, 75, 'User', 'asd', '2025-02-06 09:02:04'),
(36, 78, 'User', 'Nice ', '2025-02-06 09:03:16'),
(37, 78, 'User', 'Wow ', '2025-02-06 09:03:35'),
(38, 86, 'User', 'nc', '2025-02-07 05:35:51'),
(39, 88, 'User', 'Nice', '2025-02-07 09:45:00'),
(40, 90, 'User', 'Like it!', '2025-02-07 09:55:46'),
(41, 92, 'User', 'Nice', '2025-02-09 07:22:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('user','admin') NOT NULL DEFAULT 'user',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_login` datetime DEFAULT NULL,
  `session_id` varchar(255) DEFAULT NULL,
  `active` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `created_at`, `last_login`, `session_id`, `active`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$XiKo9wT4zyqa.8P2jimRHObUopfzmP7rDjRntYxf41F7CsUWd1RA6', 'admin', '2025-02-07 09:42:20', NULL, NULL, 1),
(2, 'Kenneth', 'kenneth@gmail.com', '$2y$10$mPnTxO9Rb21f0HTJjZC2cOLNjVNE5ckmHY/K1Ge/pX2CT4fX34/Te', 'user', '2025-02-07 09:42:51', NULL, NULL, 1),
(3, 'Michael', 'michael.01@gmail.com', '$2y$10$kokDKhvSNVquxJecbo0kKecQBsBc1VEWSE8ZYNVUh7D2R7ZmkHCwe', 'user', '2025-02-07 09:54:59', NULL, NULL, 1),
(4, 'Ruzzel', 'ruzzel@gmail.com', '$2y$10$7Ec5HvjEQWAOPZGazYjCJOPIQQJC5BtKjKc6tzy1Ukgw2.24W0mpG', 'user', '2025-02-09 07:17:31', NULL, NULL, 1),
(5, 'Lander', 'lander@gmail.com', '$2y$10$Vcdnxy2273fV8otspaydmurypxmtknKYF4jGtNS1CLT6lA08USTeW', 'user', '2025-02-09 07:27:03', NULL, NULL, 1),
(6, 'Ross', 'ross@gmail.com', '$2y$10$kuJhBzK1cPZAGTPLvWfrLuCru/SMMzU9GdtRnSDOC1xROgUTHRggS', 'user', '2025-02-09 07:27:20', NULL, NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `blog_posts` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
