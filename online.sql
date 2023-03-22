-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17 ديسمبر 2022 الساعة 15:28
-- إصدار الخادم: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online`
--

-- --------------------------------------------------------

--
-- بنية الجدول `addcard`
--

CREATE TABLE `addcard` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `addcard`
--

INSERT INTO `addcard` (`id`, `name`, `price`) VALUES
(6, 'irbods', '30$'),
(7, 'labtop', '1000$');

-- --------------------------------------------------------

--
-- بنية الجدول `prod`
--

CREATE TABLE `prod` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `imge` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `prod`
--

INSERT INTO `prod` (`id`, `name`, `price`, `imge`) VALUES
(25, 'labtop', '1000$', 'imges/لابتوب.jfif'),
(26, 'labtop', '1500$', 'imges/لابتوب1.jfif'),
(27, 'labtop', '1600$', 'imges/لابتوب3.jfif'),
(28, 'labtop', '1200$', 'imges/لابتوب4.jfif'),
(29, 'labtop', '1700$', 'imges/لابتوب5.jfif'),
(30, 'labtop', '1500$', 'imges/لابتوب6.jfif'),
(31, 'iphone', '900$', 'imges/ايفون.jfif'),
(32, 'iphone', '950$', 'imges/ايفون1.jfif'),
(33, 'iphone', '600$', 'imges/ايفون2.jfif'),
(34, 'iphone', '1000$', 'imges/ايفون3.jfif'),
(35, 'iphone', '1100$', 'imges/ايفون4.jfif'),
(36, 'iphone', '900$', 'imges/ايفون5.jfif'),
(37, 'keyboard', '50$', 'imges/كيبورد.jfif'),
(38, 'keyboard', '30$', 'imges/كيبورد1.jfif'),
(39, 'keyboard', '20$', 'imges/كيبورد2.jfif'),
(40, 'keyboard', '25$', 'imges/كيبورد3.jfif'),
(41, 'keyboard', '40$', 'imges/كيبورد4.jfif'),
(42, 'keyboard', '20$', 'imges/كيبورد5.jfif'),
(43, 'irbods', '30$', 'imges/سماعة.jfif'),
(44, 'irbods', '30$', 'imges/سماعة1.jfif'),
(45, 'irbods', '25$', 'imges/سماعة2.jfif'),
(46, 'irbods', '35$', 'imges/سماعة3.jfif'),
(47, 'irbods', '45$', 'imges/سماعة5.jfif'),
(48, 'irbods', '20$', 'imges/سماعة4.jfif');

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `user_name`
--

CREATE TABLE `user_name` (
  `name` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `repassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcard`
--
ALTER TABLE `addcard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prod`
--
ALTER TABLE `prod`
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
-- AUTO_INCREMENT for table `addcard`
--
ALTER TABLE `addcard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `prod`
--
ALTER TABLE `prod`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
