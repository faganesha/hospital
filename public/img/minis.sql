-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2021 at 03:09 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rumahsakit`
--

-- --------------------------------------------------------

--
-- Table structure for table `minis`
--

CREATE TABLE `minis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `minis`
--

INSERT INTO `minis` (`id`, `question`, `created_at`, `updated_at`) VALUES
(2, 'Apakah selama 30 hari terakhir ini Anda merasa tidak bahagia?', '2021-03-29 00:42:35', '2021-03-29 00:42:35'),
(3, 'Apakah selama 30 hari terakhir ini pencernaan Anda terganggu?', '2021-03-29 00:42:38', '2021-03-29 00:42:38'),
(4, 'Apakah selama 30 hari terakhir ini Anda merasa tidak bahagia?', '2021-03-29 00:42:35', '2021-03-29 00:42:35'),
(5, 'Apakah selama 30 hari terakhir ini pencernaan Anda terganggu?', '2021-03-29 00:42:38', '2021-03-29 00:42:38'),
(6, 'Apakah selama 30 hari terakhir ini Anda merasa tidak bahagia?', '2021-03-29 00:42:35', '2021-03-29 00:42:35'),
(7, 'Apakah selama 30 hari terakhir ini pencernaan Anda terganggu?', '2021-03-29 00:42:38', '2021-03-29 00:42:38'),
(8, 'Apakah selama 30 hari terakhir ini Anda merasa tidak bahagia?', '2021-03-29 00:42:35', '2021-03-29 00:42:35'),
(9, 'Apakah selama 30 hari terakhir ini pencernaan Anda terganggu?', '2021-03-29 00:42:38', '2021-03-29 00:42:38'),
(10, 'Apakah selama 30 hari terakhir ini Anda merasa tidak bahagia?', '2021-03-29 00:42:35', '2021-03-29 00:42:35'),
(11, 'Apakah selama 30 hari terakhir ini pencernaan Anda terganggu?', '2021-03-29 00:42:38', '2021-03-29 00:42:38'),
(12, 'Apakah selama 30 hari terakhir ini Anda merasa tidak bahagia?', '2021-03-29 00:42:35', '2021-03-29 00:42:35'),
(13, 'Apakah selama 30 hari terakhir ini pencernaan Anda terganggu?', '2021-03-29 00:42:38', '2021-03-29 00:42:38'),
(14, 'Apakah selama 30 hari terakhir ini Anda merasa tidak bahagia?', '2021-03-29 00:42:35', '2021-03-29 00:42:35'),
(15, 'Apakah selama 30 hari terakhir ini pencernaan Anda terganggu?', '2021-03-29 00:42:38', '2021-03-29 00:42:38'),
(16, 'Apakah selama 30 hari terakhir ini Anda merasa tidak bahagia?', '2021-03-29 00:42:35', '2021-03-29 00:42:35'),
(17, 'Apakah selama 30 hari terakhir ini pencernaan Anda terganggu?', '2021-03-29 00:42:38', '2021-03-29 00:42:38'),
(18, 'asdfadfasd', '2021-03-30 05:34:29', '2021-03-30 05:34:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `minis`
--
ALTER TABLE `minis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `minis`
--
ALTER TABLE `minis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
