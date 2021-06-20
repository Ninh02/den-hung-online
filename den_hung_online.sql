-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 20, 2021 at 11:47 AM
-- Server version: 10.4.19-MariaDB-1:10.4.19+maria~focal
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `den_hung_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `money`
--

CREATE TABLE `money` (
  `id` int(11) NOT NULL,
  `denominations` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `money`
--

INSERT INTO `money` (`id`, `denominations`) VALUES
(1, 10000),
(2, 20000),
(3, 50000),
(4, 100000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `money_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `address`, `money_id`) VALUES
(40, 'BÃ¹i CÃ´ng Tuáº¥n', 'PhÃº Thá»', 4),
(41, 'HÃ  Huy CÆ°á»ng', 'PhÃº Thá»', 3),
(42, 'Nguyá»…n VÄƒn An', 'HÃ  Ná»™i', 3),
(43, 'Äá»— Trung KiÃªn', 'BÃ£i giá»¯a sÃ´ng Há»“ng', 3),
(44, 'ÄoÃ n Há»“ng QuÃ¢n', 'Khu 3 HoÃ ng CÆ°Æ¡ng Thanh Ba PhÃº Thá»', 2),
(45, 'BÃ¹i CÃ´ng Tuáº¥n', 'SÆ¡n Vi - LÃ¢m Thao', 4),
(46, 'Phan VÄƒn LuÃ¢n', 'Háº£i DÆ°Æ¡ng', 3),
(47, 'DÆ° Thanh HoÃ ng', 'YÃªn BÃ¡i', 4),
(48, 'HoÃ i Linh', 'KhÃ¡nh HÃ²a', 1),
(49, 'PhÆ°Æ¡ng Háº±ng', 'HCM', 2),
(51, 'SÆ¡n TÃ¹ng Mtp', 'ThÃ¡i BÃ¬nh', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `money`
--
ALTER TABLE `money`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `money_id` (`money_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `money`
--
ALTER TABLE `money`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`money_id`) REFERENCES `money` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
