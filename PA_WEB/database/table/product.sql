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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
