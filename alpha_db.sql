-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2020 at 12:33 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alpha_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`id`, `username`, `password`) VALUES
(1, 'baibhav', 'baibhav'),
(2, 'abhinav', 'baibhav');

-- --------------------------------------------------------

--
-- Table structure for table `alpha_tbl`
--

CREATE TABLE `alpha_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `phone` varchar(256) NOT NULL,
  `picture` varchar(350) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alpha_tbl`
--

INSERT INTO `alpha_tbl` (`id`, `name`, `email`, `phone`, `picture`, `date`) VALUES
(137, 'baibhav', 'baibhav', '7418529638', 'Images/.', '2020-11-08 05:16:51'),
(138, 'dsfds', 'dfds', '3e45676543', 'Images/.Screenshot (39).png', '2020-11-08 05:16:51'),
(139, 'rcb', 'rcb@co.in', '1234567890', 'Images/.', '2020-11-08 05:16:51'),
(140, '', '', '', 'Images/.Screenshot (52).png', '2020-11-08 05:16:51'),
(141, '', '', '', 'Images/.Screenshot (52).png', '2020-11-08 05:16:51'),
(142, 'baibhav', 'rcb@123.co.in', '7412589635', 'Images/.Screenshot (39).png', '2020-11-08 05:17:28'),
(143, 'baibhav', 'rcb@123.co.in', '7412589635', 'Images/.Screenshot (39).png', '2020-11-08 05:19:15'),
(144, 'baibhav', 'rcb@123.co.in', '7412589635', 'Images/.Screenshot (39).png', '2020-11-08 05:19:40'),
(146, '', '', '', 'Images/.Screenshot (41).png', '2020-11-08 05:22:59'),
(147, 'aibhav', 'sdfghjk', '324567890-', 'Images/.', '2020-11-08 05:23:29'),
(148, 'fgh', 'hgf', '3456789098', 'Images/.Screenshot (15).png', '2020-11-08 07:07:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alpha_tbl`
--
ALTER TABLE `alpha_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `alpha_tbl`
--
ALTER TABLE `alpha_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
