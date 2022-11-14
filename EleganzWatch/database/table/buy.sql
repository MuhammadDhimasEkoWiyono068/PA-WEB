-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2022 at 12:45 PM
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
(36, 'T5 H3585.png', 'T5 H3585', 'aaaa', 'kjasbdkj@dgwjh', 'laisdliknwn', 100, 8, 'Credit', '636c6cfef2abf.jpg', '2022-11-10 03:16:14'),
(37, 'AC 6410 MCL.png', 'AC 6410 MCL', 'eko', 'eko@gmail.com', 'jl.kebenaran 2', 120, 2, 'Credit', '636eec5fc5999.jpg', '2022-11-12 00:44:15'),
(38, 'AC 6622 MCBIPBA.png', 'AC 6622 MCBIPBA', 'eko', 'eko@gmail.com', 'jl.mmm', 1000, 2, 'Credit', '636fcdba3541c.png', '2022-11-12 16:45:46'),
(39, 'AC 6622 MCBIPBA.png', 'AC 6622 MCBIPBA', 'user1', 'user123@gmail.com', 'jl.gk tau', 1000, 2, 'Credit', '6370387328a2b.png', '2022-11-13 00:21:07'),
(40, 'DATEJUST.png', 'DATEJUST', 'user1', 'user123@gmail.com', 'jl.mm an', 1000, 2, 'Credit', '63704868228da.png', '2022-11-13 01:29:12'),
(41, 'Seiko Women SRZ543.png', 'Seiko Women SRZ543', 'dimas', 'dimas@gmail.com', 'jl gk tau', 1000, 2, 'Credit', '63704ee89dae0.png', '2022-11-13 01:56:56'),
(42, 'AC 6622 MCBIPBA.png', 'AC 6622 MCBIPBA', 'user', 'user@gmail.com', 'asdawd', 1000, 1, 'Credit', '63707342b20dd.png', '2022-11-13 04:32:02'),
(43, 'Seiko Women SRZ543.png', 'Seiko Women SRZ543', 'user1', 'user123@gmail.com', 'jl.cendana', 1000, 2, 'Credit', '6371a06188198.png', '2022-11-14 01:56:49'),
(45, 'Longines Spirit Zulu.png', 'Longines Spirit Zulu', 'eko', 'eko@gmail.com', 'jl.m.said', 1000, 2, 'Credit', '637227b3ce90b.png', '2022-11-14 11:34:11');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
