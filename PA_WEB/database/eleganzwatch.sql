-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2022 at 12:58 PM
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
-- Table structure for table `buy`
--

CREATE TABLE `buy` (
  `id` int(11) NOT NULL,
  `barang` varchar(255) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `metode` varchar(255) NOT NULL,
  `nama_file` varchar(255) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buy`
--

INSERT INTO `buy` (`id`, `barang`, `nama_barang`, `nama`, `email`, `alamat`, `harga`, `jumlah`, `metode`, `nama_file`, `waktu`) VALUES
(30, 'AIR-KING.png', 'AIR-KING', 'aku', 'aku@das', 'dfafawf', 100, 5, 'Credit', '6368e37313647.jpg', '2022-11-07 10:52:35'),
(31, 'SKY-DWELLER.png', 'SKY-DWELLER', 'aaaa', 'aa@aaaa', 'dfsfdsgaef', 100, 2, 'Cash', '6368e397833e7.jpg', '2022-11-07 10:53:11'),
(33, 'SKY-DWELLER.png', 'SKY-DWELLER', 'eko', 'dhimaseko00@gmail.com', 'samarinda, jl.m.said, gg.6', 100, 2, 'Credit', '636b3f92ea8ea.png', '2022-11-09 05:50:10'),
(34, 'LUMINOX BLACK OUT BHINNEKA.png', 'LUMINOX BLACK OUT BHINNEKA', 'Eizen', 'dhimasfachri@gmail.com', 'jl.kebenaran', 150, 2, 'Credit', '636b7a5638cdb.jpg', '2022-11-09 10:00:54'),
(35, 'AC 6562 6270 Silver.png', 'AC 6562 6270 Silver', 'dhimas', 'dhimaseko00@gmail.com', 'jlaisjdiajwd', 100, 2, 'Credit', '636b90a2f3ec3.png', '2022-11-09 11:36:02');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `nama_file` varchar(255) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `nama`, `jenis`, `harga`, `nama_file`, `waktu`) VALUES
(12, 'T5 H3585', 'Men', 100, 'T5 H3585.png', '2022-11-08 04:41:46'),
(13, 'AC 6562 6270 Silver', 'Men', 100, 'AC 6562 6270 Silver.png', '2022-11-08 04:48:17'),
(14, 'LUMINOX BLACK OUT BHINNEKA', 'Men', 150, 'LUMINOX BLACK OUT BHINNEKA.png', '2022-11-08 03:27:03'),
(15, 'AC 6410 MCL', 'Women', 120, 'AC 6410 MCL.png', '2022-11-08 23:19:31'),
(16, 'SKY-DWELLER', 'Men', 100, 'SKY-DWELLER.png', '2022-11-08 22:40:14'),
(25, 'jam tes', 'Women', 150, 'jam tes.png', '2022-11-09 11:38:52');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` enum('user','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(12, 'eko', '$2y$10$QbcmgzibDFoQBSFWVMWBXuIoNvrGZboBTS.YnxqvxsKTl3/PP1Jzu', 'user'),
(20, 'admin', '$2y$10$2Igsq4EE3g8SIB.xN39zruRoceqUooISSEvQdBsvqKpNryttOd04W', 'admin'),
(21, 'yuu', '$2y$10$5QuWbMlb9IACwYSRnYZiPOiQNYzCmYG2SeB14MuMWsXxL77OQgCwa', 'user'),
(22, 'admin123', '$2y$10$XPlgImrZB5x2bHistmiXeOk.KkKEF9pvhMkHpubpTvuiK8PHCU8bK', 'admin'),
(23, 'yuiko', '$2y$10$FQdjWlk0G41sK7VaGYPvX.5YxHMIo0WICnujjuYDsMCG0k5ZhJSPq', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buy`
--
ALTER TABLE `buy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buy`
--
ALTER TABLE `buy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
