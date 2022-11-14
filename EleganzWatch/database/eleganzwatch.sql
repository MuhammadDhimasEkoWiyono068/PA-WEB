-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2022 at 12:44 PM
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
(43, 'GT CHRONO-BLACK', 'Men', 1000, 'GT CHRONO-BLACK.png', '2022-11-12 13:43:19'),
(44, 'AC 6622 MCBIPBA', 'Men', 1000, 'AC 6622 MCBIPBA.png', '2022-11-12 13:45:25'),
(46, 'Seiko Women SRZ543', 'Women', 1000, 'Seiko Women SRZ543.png', '2022-11-12 06:50:52'),
(48, 'Casio MTP-VD02B-3EUDF', 'Men', 1000, 'Casio MTP-VD02B-3EUDF.png', '2022-11-12 14:00:51'),
(49, 'AC 6607 MCBTBBA', 'Men', 1000, 'AC 6607 MCBTBBA.png', '2022-11-12 14:03:44'),
(50, 'URCA-SILVERY RED WATCH', 'Men', 1000, 'URCA-SILVERY RED WATCH.png', '2022-11-12 14:06:46'),
(51, 'PSYCHIC COMPASS-BLUE', 'Men', 1000, 'PSYCHIC COMPASS-BLUE.png', '2022-11-12 14:11:34'),
(52, 'ASTRON SSH006', 'Men', 1000, 'ASTRON SSH006.png', '2022-11-12 14:15:03'),
(53, 'AC 6506 MCLBRBA', 'Men', 1000, 'AC 6506 MCLBRBA.png', '2022-11-12 14:16:31'),
(54, 'DATEJUST', 'Men', 1000, 'DATEJUST.png', '2022-11-12 14:19:12'),
(56, 'AC 2941 LDRRGPN', 'Women', 1000, 'AC 2941 LDRRGPN.png', '2022-11-13 08:44:42'),
(70, 'Tag Heuer Aquaracer', 'Women', 1000, 'Tag Heuer Aquaracer.png', '2022-11-14 11:25:59'),
(72, 'Longines DolceVita', 'Women', 1000, 'Longines DolceVita.png', '2022-11-14 11:29:25'),
(73, 'Longines Spirit Zulu', 'Women', 1000, 'Longines Spirit Zulu.png', '2022-11-14 11:31:24'),
(74, 'Breitling Navitimer', 'Women', 1000, 'Breitling Navitimer.png', '2022-11-14 11:33:01');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `nama_customer` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `nama_file` varchar(255) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `kondisi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `nama_customer`, `email`, `nama_barang`, `jenis`, `nama_file`, `waktu`, `kondisi`) VALUES
(22, 'eko', 'eko@gmail.com', 'T5 H3705', 'Men', '636e432a53b6e.png', '2022-11-13 05:34:44', 'Accepted'),
(23, 'eko', 'eko@gmail.com', 'jam tes123', 'Women', '637054803c63a.png', '2022-11-13 05:34:50', 'Accepted'),
(24, 'eko', 'eko@gmail.com', 'jam tes1234', 'Men', '637054d251f89.png', '2022-11-13 05:34:53', 'Accepted'),
(25, 'user', 'user@gmail.com', 'jam jaman', 'Women', '63705f4d2f197.png', '2022-11-13 05:34:56', 'Accepted'),
(32, 'user', 'user@gmail.com', 'jam power ranger', 'Men', '63718eb87dc51.png', '2022-11-14 00:49:55', 'Accepted'),
(34, 'user', 'user@gmail.com', 'dddd', 'Women', '63719491d85dc.png', '2022-11-14 01:06:41', 'Accepted'),
(36, 'user', 'user@gmail.com', 'sdasdw', 'Women', '6371c692eb99a.png', '2022-11-14 04:40:14', 'Rejected'),
(37, 'user', 'user@gmail.com', 'jam baru', 'Men', '63721a5f2b76e.png', '2022-11-14 10:43:16', 'Accepted');

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
-- Indexes for table `request`
--
ALTER TABLE `request`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
