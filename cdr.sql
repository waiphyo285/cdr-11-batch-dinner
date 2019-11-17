-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 05, 2019 at 03:22 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cdr`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(100) NOT NULL,
  `code` varchar(100) NOT NULL,
  `rollno` varchar(100) NOT NULL,
  `sname` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `confirm` int(100) NOT NULL DEFAULT '0',
  `confirm_by` varchar(100) DEFAULT NULL,
  `paid` int(100) NOT NULL DEFAULT '0',
  `register` int(100) NOT NULL DEFAULT '0',
  `half_register_by` varchar(100) DEFAULT NULL,
  `register_by` varchar(100) DEFAULT NULL,
  `updated_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `code`, `rollno`, `sname`, `email`, `mobile`, `status`, `confirm`, `confirm_by`, `paid`, `register`, `half_register_by`, `register_by`, `updated_time`) VALUES
(1, 'CDR-HALRK', '5CS-1', 'Ei Ei Phyu', 'eieiphyu@gmail.com', '09775915615', 'Full Registered', 1, NULL, 1, 1, NULL, NULL, '2019-09-29 08:03:32'),
(2, 'CDR-CKKKF', '5CS-2', 'Htet Htet Myo', 'info@yourcompany.com', '09123456789', 'Full Registered', 1, NULL, 1, 1, NULL, NULL, '2019-09-29 08:05:05'),
(3, 'CDR-FGNQD', '5CS-3', 'Khaing Zin Thant', 'kzt@example.com', '09975904217', 'Full Registered', 1, 'Wai Phyo', 1, 1, NULL, '', '2019-09-29 08:37:00'),
(4, 'CDR-ZSWXK', '5CS-4', 'Thidar Tun', 'tdt@gmail.com', '09975904299', 'Full Registered', 1, 'Wai Phyo', 1, 1, NULL, '', '2019-09-29 08:58:17'),
(5, 'CDR-VQVLR', '5CS-5', 'Thawdar Lamin', 'chillyxxx@gmail.com', '09775915619', 'Full Registered', 1, 'Yan Yan', 1, 1, NULL, 'Phyo Tayza', '2019-09-29 09:00:47'),
(6, 'CDR-MVJNG', '5CS-6', 'Chaw Tharaphi Htay', 'cth@gmail.com', '09975904210', 'Full Registered', 1, 'Phyo Tayza', 1, 1, NULL, 'Wai Phyo', '2019-09-29 09:20:57'),
(7, 'CDR-QRUKZ', '5CS-8', 'Su Su Sandi', 'sssd@gmail.com', '09975904219', 'Full Registered', 1, 'Phyo Tayza', 1, 1, NULL, 'Yan Yan', '2019-09-29 09:21:50'),
(8, 'CDR-ZJVSB', '5CS-9', 'May Myat Noe', 'mmn@gmail.com', '09123456780', 'Full Registered', 1, 'Yan Yan', 1, 1, 'Yan Yan', 'Wai Phyo', '2019-09-29 09:24:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `logged_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `logged_time`) VALUES
(1, 'Wai Phyo', 'wp.admin', 'wp.admin', '2019-08-20 16:33:27'),
(2, 'Phyo Tayza', 'ec.admin', 'ec.admin', '2019-08-20 16:33:52'),
(3, 'Yan Yan', 'yy.admin', 'yy.admin', '2019-09-29 08:44:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
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
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
