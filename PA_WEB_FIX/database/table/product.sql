-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2022 at 11:15 PM
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
(56, 'AC 2941 LDRRGPN', 'Women', 1000, 'AC 2941 LDRRGPN.png', '2022-11-13 08:44:42');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
