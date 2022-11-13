-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2022 at 10:59 AM
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
(27, 'user', 'user@gmail.com', 'jam power ranger', 'Men', '63707ca80a950.png', '2022-11-13 07:44:42', 'Rejected');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
