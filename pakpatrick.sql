-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2023 at 05:34 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pakpatrick`
--

-- --------------------------------------------------------

--
-- Table structure for table `villa`
--

CREATE TABLE `villa` (
  `id` int(2) NOT NULL,
  `nama_villa` varchar(50) NOT NULL,
  `harga` int(9) NOT NULL,
  `ketersediaan` int(1) NOT NULL,
  `deskripsi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `villa`
--

INSERT INTO `villa` (`id`, `nama_villa`, `harga`, `ketersediaan`, `deskripsi`) VALUES
(1, 'Villa Lembah Gambung', 2000000, 1, ''),
(2, 'Jungle Resort Agrapuri', 2500000, 1, ''),
(3, 'Villa Teras Ki Damar', 3500000, 1, ''),
(4, 'Villa Kampung Karuhun Sutan Raja', 1800000, 1, ''),
(5, 'Villa Aubrey Ciwidey', 1800000, 0, ''),
(6, 'Villa Lembah Gambung', 1200000, 0, ''),
(7, 'Villa Palalangan', 1750000, 0, ''),
(8, 'Villa Atas Nurma', 2000000, 0, ''),
(9, 'Argapuri Jungle Resort', 1300000, 0, ''),
(11, 'Dummy2', 12345, 1, 'dummy2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `villa`
--
ALTER TABLE `villa`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
