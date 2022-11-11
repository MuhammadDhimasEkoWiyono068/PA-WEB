-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2022 at 11:56 PM
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
(35, 'AC 6562 6270 Silver.png', 'AC 6562 6270 Silver', 'dhimas', 'dhimaseko00@gmail.com', 'jlaisjdiajwd', 100, 2, 'Credit', '636b90a2f3ec3.png', '2022-11-09 11:36:02'),
(38, 'LUMINOX BLACK OUT BHINNEKA.png', 'LUMINOX BLACK OUT BHINNEKA', 'user', 'user@gmail.com', 'zczscsda', 150, 2, 'Cash', '636e3b624788a.png', '2022-11-11 12:09:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buy`
--
ALTER TABLE `buy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buy`
--
ALTER TABLE `buy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
