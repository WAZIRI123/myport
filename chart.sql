-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2021 at 03:39 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chart`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(15) NOT NULL,
  `in_id` int(255) NOT NULL,
  `o_id` int(255) NOT NULL,
  `msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `in_id`, `o_id`, `msg`) VALUES
(78, 1536901243, 135848949, 'hellow naima'),
(79, 1536901243, 135848949, 'uko poa'),
(80, 1536901243, 135848949, 'sdf'),
(81, 1536901243, 135848949, 'WAZIRI ALLY AMIRI HEY MAN'),
(82, 1536901243, 135848949, 'boy from tandale'),
(83, 135848949, 1536901243, 'am'),
(84, 135848949, 1536901243, 'where'),
(85, 135848949, 1536901243, 'you are'),
(86, 135848949, 1536901243, 'people'),
(87, 135848949, 1536901243, 'people'),
(88, 135848949, 1536901243, 'people'),
(89, 1536901243, 135848949, 'people'),
(90, 1536901243, 135848949, 'pleople3'),
(91, 1536901243, 135848949, 'new'),
(92, 135848949, 1536901243, 'bin ally'),
(93, 881515927, 881515927, 'sd'),
(94, 42259230, 881515927, 'vip'),
(95, 881515927, 42259230, 'frsh vp'),
(96, 42259230, 881515927, 'poa man'),
(97, 42259230, 881515927, 'best waziri'),
(98, 42259230, 881515927, 'best waziri'),
(99, 42259230, 881515927, 'waziri'),
(100, 881515927, 42259230, 'waziri'),
(101, 42259230, 881515927, 'halima'),
(102, 42259230, 881515927, 'btouch'),
(103, 881515927, 42259230, 'btouch'),
(104, 42259230, 881515927, 'waziri'),
(105, 42259230, 881515927, 'frsh'),
(106, 881515927, 42259230, 'uko frsh'),
(107, 881515927, 42259230, 'hellow naima'),
(108, 42259230, 881515927, 'niambie naima'),
(109, 42259230, 881515927, 'uko bomba'),
(110, 881515927, 42259230, 'nko bomba'),
(111, 135848949, 881515927, 'sedrftg'),
(112, 1536901243, 881515927, 'wass'),
(113, 42259230, 881515927, 'wass'),
(114, 42259230, 881515927, 'wass'),
(115, 42259230, 881515927, 'wass'),
(116, 42259230, 881515927, 'wass'),
(117, 42259230, 881515927, 'wass'),
(118, 42259230, 881515927, 'wazir'),
(119, 42259230, 881515927, 'big'),
(120, 42259230, 881515927, 'bt'),
(121, 42259230, 881515927, 'bousch');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(15) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `unique_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `password`, `image`, `status`, `email`, `unique_id`) VALUES
(32, 'halima', 'ally', '123', '16174632441e674852-e568-4248-8859-498521ac9df9.jpg', 'offline now', 'anuj@gmail.com', 135848949),
(33, 'halima', 'ally', '123', '16174633161e674852-e568-4248-8859-498521ac9df9.jpg', 'active now', 'anujw@gmail.com', 1580553160),
(34, 'halima', 'ally', '123', '16174633201e674852-e568-4248-8859-498521ac9df9.jpg', 'active now', 'anujws@gmail.com', 277060877),
(35, 'halima', 'ally', '123', '16174633251e674852-e568-4248-8859-498521ac9df9.jpg', 'active now', 'anujwss@gmail.com', 760936609),
(36, 'halima', 'ally', '123', '16174633291e674852-e568-4248-8859-498521ac9df9.jpg', 'active now', 'anujwsss@gmail.com', 931339826),
(37, 'wef', 'ally', '123', '16174633411e674852-e568-4248-8859-498521ac9df9.jpg', 'active now', 'anujwssss@gmail.com', 602396649),
(38, 'wefe', 'ally', '123', '16174633471e674852-e568-4248-8859-498521ac9df9.jpg', 'offline now', 'anujwsssss@gmail.com', 1285144453),
(39, 'waziri', 'ally', '123', '1617641840Capture.PNG', 'active now', 'amiri@gmail.com', 733395637),
(40, 'naima', 'Heme', '123', '1617641880carsmasgha.jpg', 'offline now', 'amiris@gmail.com', 1536901243),
(41, 'best waziri', 'waziri', '123', '16177111461e674852-e568-4248-8859-498521ac9df9.jpg', 'offline now', 'waziri@gmail.com', 881515927),
(42, 'big waziri', 'waziri', '123', '16177112181e674852-e568-4248-8859-498521ac9df9.jpg', 'offline now', 'waziri1@gmail.com', 42259230);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
