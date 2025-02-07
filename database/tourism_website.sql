-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2025 at 05:22 PM
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('user','admin') NOT NULL DEFAULT 'user',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `created_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$qfSOnVYCSKO3krUjUT1aAuQVGyUiUy6EDTZ1dUi/Q1i35TQhmE9nW', 'admin', '2025-01-19 07:25:26'),
(2, 'John Doe', 'johndoe@gmail.com', '$2y$10$u2z7ULOoaJhd5qR35tCPgujUD.Y/yiX4wts4Fgo10hFk/AGkb1zuS', 'user', '2025-01-19 07:25:45'),
(3, 'Patrick', 'patrick@gmail.com', '$2y$10$DLMWxvO7UYX7S9vvnJiW5OCuSaea/64SLHsECk5LQnpEtIUJsf9di', 'user', '2025-01-19 08:00:31'),
(4, 'Michael', 'michael01@gmail.com', '$2y$10$UMYSZsqEhyBJ.30joYQaN.UmRdDek1CKWb0dSrOcubqnCsMzo6FT.', 'user', '2025-01-23 10:30:09'),
(7, 'Ruzzel', 'ruzzel01@gmail.com', '$2y$10$AFQmesz3WvqO2WPtR/CVVe96j2H9l4rdp1kdjuFSi/b7/bGJOXnS6', 'user', '2025-01-23 10:44:17'),
(8, 'Lander', 'lander01@gmail.com', '$2y$10$Yvs9OXIY3hVEgv0KhvoVI.RrrPjZEeGnh/9zaLSr5E7.szvBdytHO', 'admin', '2025-01-23 10:44:57'),
(9, 'Kyle', 'kyle01@gmail.com', '$2y$10$SIO/v/gWow3zVuKeygBIsenC0wEyrO4zCTriNE2yUpa2m5/DD6Quq', 'user', '2025-01-25 14:43:07'),
(10, 'Kyrie', 'kyrie01@gmail.com', '$2y$10$OkGDzHypEYgUcevVLYx4m.uLB/4G9/FAGikXzW0FJOOLXbd3TprKu', 'user', '2025-01-25 14:52:16'),
(11, 'Alexandra', 'alexandra01@gmail.com', '$2y$10$j8cn1.9ydVp8HXMZjbfa6uFf6mBszQfoME/5mxLCEVUole8Ea4Gx6', 'user', '2025-01-25 15:03:06'),
(14, 'John Kenneth', 'johnkenneth@gmail.com', '$2y$10$.JTTKDNKcG/vsZqXDUyfB.CskfUUo/Aj4tqCofTvNQSkuKrZH8d7m', 'user', '2025-01-26 05:33:13'),
(15, 'Steve Jobs', 'stevejobs@gmail.com', '$2y$10$p/5mqTQALNnVibMeUKDlJeDTjwrQGSk3naQ78mGlDcc8cnY4MuqWK', 'user', '2025-01-26 05:36:41'),
(16, 'Manni Pacyow', 'mannipacyow@gmail.com', '$2y$10$OLRoNVFqZZwNwEqUmflTXeql7xVBTlJzjReHB2S5FQ6m1vs6bvWg2', 'user', '2025-01-26 05:40:50'),
(17, 'Alex', 'alex@gmail.com', '$2y$10$ZDyL0xGyAuZG7YApCUGZfeGx6w6HFowfKIqB2yymlhBWGDES2QsgK', 'user', '2025-01-26 13:40:35'),
(18, 'Max Payne', 'maxpayne@gmail.com', '$2y$10$11HcoA2b6oMaLpR4DoWCBOWe8m8ChONar0i8wRtGp57Wp6Gy8tXQm', 'user', '2025-01-26 13:58:40'),
(19, 'Barbie Forteza', 'barbieforteza@gmail.com', '$2y$10$UVUIdMXE87GhAGuw4rDU2OGFezUuQ0si09cvEBoi6TiKq7z7ZRtom', 'user', '2025-01-26 16:14:58'),
(20, 'Luka Doncic', 'lukadoncic@gmail.com', '$2y$10$h8zu.s3qKYdggb3I8drkeOZERkfQZzEs.5KvhHUvDOhPhuM5dqCBa', 'user', '2025-02-03 08:16:12');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
