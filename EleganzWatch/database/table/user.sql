-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2022 at 12:46 PM
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
(20, 'admin', '$2y$10$2Igsq4EE3g8SIB.xN39zruRoceqUooISSEvQdBsvqKpNryttOd04W', '', 'admin'),
(22, 'admin123', '$2y$10$XPlgImrZB5x2bHistmiXeOk.KkKEF9pvhMkHpubpTvuiK8PHCU8bK', '', 'admin'),
(24, 'user', '$2y$10$1KdCB7FpZPA0j3e4GiIMquqGIqh.homB05VUfxKHMwmkn03m1c.sy', 'user@gmail.com', 'user'),
(25, 'user1', '$2y$10$9u73c/ahdjQw9uIqU7O5MenRH/kpHyHKpdBfSfU9L0anPvNujf2B6', 'user123@gmail.com', 'user'),
(29, 'admin1', '$2y$10$I/1LN/fz3IkAxlA1/ar0IurbewWAOnwDK0LoEvBA7HhpGKMW2Qada', '', 'admin'),
(30, 'dimas', '$2y$10$KtRW0UlvvgAA3uBcVU6Re..h.kRQXoHpSkqQg4aFXKG56yKURLVgm', 'dimas@gmail.com', 'user'),
(31, 'admin2', '$2y$10$1bxmUowAnZ4xq8cJf7KGQOmX.Le8d524o0pgrnIyc6eGLtu/bcFam', '', 'admin'),
(32, 'tes', '$2y$10$7VlMtfgygPGNwgTiz/hrO.xlgs9fBGiB6RUVVDhysDSy3yBQwXzea', '', 'admin'),
(33, 'admin111', '$2y$10$4QIQkk6xCX.xwuQ90gURuOB0uqodNwutVoDhFHFLm07QCjhRX18Am', '', 'admin');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
