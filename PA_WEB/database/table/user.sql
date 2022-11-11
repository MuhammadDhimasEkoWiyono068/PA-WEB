-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2022 at 11:57 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eleganzwatch`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` enum('user','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `role`) VALUES
(12, 'eko', '$2y$10$QbcmgzibDFoQBSFWVMWBXuIoNvrGZboBTS.YnxqvxsKTl3/PP1Jzu', 'eko@gmail.com', 'user'),
(20, 'admin', '$2y$10$2Igsq4EE3g8SIB.xN39zruRoceqUooISSEvQdBsvqKpNryttOd04W', 'admin@gmail.com', 'admin'),
(21, 'yuu', '$2y$10$5QuWbMlb9IACwYSRnYZiPOiQNYzCmYG2SeB14MuMWsXxL77OQgCwa', 'yuu@gmail.com', 'user'),
(22, 'admin123', '$2y$10$XPlgImrZB5x2bHistmiXeOk.KkKEF9pvhMkHpubpTvuiK8PHCU8bK', 'admin123@gmail.com', 'admin'),
(23, 'yuiko', '$2y$10$FQdjWlk0G41sK7VaGYPvX.5YxHMIo0WICnujjuYDsMCG0k5ZhJSPq', 'yuiko@gmail.com', 'user'),
(24, 'user', '$2y$10$3Loprr2vMU2aDrTEOZAp.Of7jmLUTEZDZOVb4Wgb4RfFxiLHYteqq', 'user@gmail.com', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
