-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 09, 2021 at 03:29 PM
-- Server version: 8.0.23-0ubuntu0.20.04.1
-- PHP Version: 7.2.34-10+ubuntu20.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_books`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_a_books`
--

CREATE TABLE `tbl_a_books` (
  `id` int(32) NOT NULL,
  `isbn` int(13) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `year` date NOT NULL,
  `synopsys` text NOT NULL,
  `weight` varchar(255) NOT NULL,
  `dimension` varchar(255) NOT NULL,
  `total_pages` int(12) NOT NULL,
  `description` text NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` int(32) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_a_books`
--

INSERT INTO `tbl_a_books` (`id`, `isbn`, `title`, `price`, `year`, `synopsys`, `weight`, `dimension`, `total_pages`, `description`, `is_active`, `created_by`, `created_date`, `updated_date`) VALUES
(1, 432423423, 'Pemrograman php', '65000', '2020-02-01', 'Belajar pemrograman php dari dasar', '200 gram', '12 X 12 cm', 125, '-', 1, 1, '2021-02-09 11:09:03', '2021-02-09 14:04:20'),
(2, 432343321, 'Pemrograman php', '125000', '2020-02-01', 'Belajar pemrograman java dari dasar', '500 gram', '12 X 12 cm', 250, '-', 1, 1, '2021-02-09 11:09:03', '2021-02-09 11:09:03'),
(3, 432423423, 'Pemrograman ruby', '95000', '2020-02-01', 'Belajar pemrograman ruby dari dasar', '400 gram', '12 X 12 cm', 225, '-', 1, 1, '2021-02-09 11:09:03', '2021-02-09 11:09:03'),
(4, 432343321, 'Pemrograman go lang', '225000', '2020-02-01', 'Belajar pemrograman go lang dari dasar', '700 gram', '12 X 12 cm', 350, '-', 1, 1, '2021-02-09 11:09:03', '2021-02-09 11:09:03'),
(5, 123456789, 'test', '4700000', '2021-02-02', 'tess syn', '123gr', '12 X 12 cm', 55, 'tes desc', 1, 1, '2021-02-09 13:40:50', '2021-02-09 13:40:50'),
(6, 178456789, 'test2', '4700000', '2021-02-02', 'tess syn', '123gr', '12 X 12 cm', 55, 'tes desc', 1, 1, '2021-02-09 13:45:04', '2021-02-09 13:45:04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_a_book_creators`
--

CREATE TABLE `tbl_a_book_creators` (
  `id` int(32) NOT NULL,
  `book_id` int(32) NOT NULL,
  `creator_id` int(32) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` int(32) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_a_book_creators`
--

INSERT INTO `tbl_a_book_creators` (`id`, `book_id`, `creator_id`, `is_active`, `created_by`, `created_date`, `updated_date`) VALUES
(1, 1, 1, 1, 1, '2021-02-09 11:10:59', '2021-02-09 11:10:59'),
(2, 2, 2, 1, 1, '2021-02-09 11:10:59', '2021-02-09 11:10:59'),
(3, 3, 1, 1, 1, '2021-02-09 11:10:59', '2021-02-09 11:10:59'),
(4, 4, 2, 1, 1, '2021-02-09 11:10:59', '2021-02-09 11:10:59');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_a_creators`
--

CREATE TABLE `tbl_a_creators` (
  `id` int(32) NOT NULL,
  `first_name` varchar(155) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `mobile_phone` varchar(16) NOT NULL,
  `birth_date` date NOT NULL,
  `birth_place` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` int(32) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_a_creators`
--

INSERT INTO `tbl_a_creators` (`id`, `first_name`, `last_name`, `email`, `address`, `mobile_phone`, `birth_date`, `birth_place`, `company`, `description`, `is_active`, `created_by`, `created_date`, `updated_date`) VALUES
(1, 'surya', 'ismaya', 'surya.ismaya@gmail.com', 'kranggan bekasi', '081927328764', '1988-02-09', 'Bekasi', '-', '-', 1, 1, '2021-02-09 11:05:45', '2021-02-09 11:05:45'),
(2, 'dadang', 'sumirat', 'dadang.sumirat@gmail.com', 'Bojong gede Bogor', '081923412398', '1988-06-09', 'Jakarta', 'PT Pustaka Prima', '-', 1, 1, '2021-02-09 11:05:45', '2021-02-09 11:05:45');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_groups`
--

CREATE TABLE `tbl_groups` (
  `id` int(32) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` int(32) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_groups`
--

INSERT INTO `tbl_groups` (`id`, `name`, `description`, `is_active`, `created_by`, `created_date`, `updated_date`) VALUES
(1, 'superuser', '-', 1, 1, '2021-02-09 11:12:41', '2021-02-09 11:12:41'),
(2, 'guest', '-', 1, 1, '2021-02-09 11:12:41', '2021-02-09 11:12:41');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(32) NOT NULL,
  `first_name` varchar(155) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(128) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` int(32) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `first_name`, `last_name`, `email`, `password`, `is_active`, `created_by`, `created_date`, `updated_date`) VALUES
(1, 'admin', 'istrator', 'administrator@gmail.com', '$2y$10$CHu2tBWDZV024ffyueogluc5pbvby0LAxSV4W3PYIBv/P/Dd4astC', 1, 1, '2021-02-09 11:11:31', '2021-02-09 11:11:31'),
(2, 'tanu', 'website', 'tamu@gmail.com', '$2y$10$CHu2tBWDZV024ffyueogluc5pbvby0LAxSV4W3PYIBv/P/Dd4astC', 1, 1, '2021-02-09 11:11:31', '2021-02-09 11:11:31'),
(3, 'testa', 'ajah', 'testa.aja@gmail.com', '$2y$12$Nz5INDAWppME.cN3IqKUQOW1Wu6g9UxS1bDOsB1ovWQJRYXaoKL4m', 1, 1, '2021-02-09 15:04:21', '2021-02-09 15:16:25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_groups`
--

CREATE TABLE `tbl_user_groups` (
  `id` int(32) NOT NULL,
  `user_id` int(32) NOT NULL,
  `group_id` int(32) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` int(32) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_user_groups`
--

INSERT INTO `tbl_user_groups` (`id`, `user_id`, `group_id`, `is_active`, `created_by`, `created_date`, `updated_date`) VALUES
(1, 1, 1, 1, 1, '2021-02-09 12:09:26', '2021-02-09 12:09:26'),
(2, 2, 2, 1, 1, '2021-02-09 12:09:26', '2021-02-09 12:09:26'),
(3, 3, 2, 1, 1, '2021-02-09 12:09:26', '2021-02-09 12:09:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_a_books`
--
ALTER TABLE `tbl_a_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_a_book_creators`
--
ALTER TABLE `tbl_a_book_creators`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_a_creators`
--
ALTER TABLE `tbl_a_creators`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_groups`
--
ALTER TABLE `tbl_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user_groups`
--
ALTER TABLE `tbl_user_groups`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_a_books`
--
ALTER TABLE `tbl_a_books`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_a_book_creators`
--
ALTER TABLE `tbl_a_book_creators`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_a_creators`
--
ALTER TABLE `tbl_a_creators`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_groups`
--
ALTER TABLE `tbl_groups`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_user_groups`
--
ALTER TABLE `tbl_user_groups`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
