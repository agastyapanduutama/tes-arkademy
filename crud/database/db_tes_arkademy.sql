-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 06, 2020 at 04:21 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tes_arkademy`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_kasir`
--

CREATE TABLE `t_kasir` (
  `id_kasir` int(11) NOT NULL,
  `nama_kasir` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_kasir`
--

INSERT INTO `t_kasir` (`id_kasir`, `nama_kasir`) VALUES
(1, 'Pevita Pearce'),
(2, 'Raisa Andriana'),
(3, 'Agastya Pandu Satriya Utama'),
(4, 'Pandu');

-- --------------------------------------------------------

--
-- Table structure for table `t_kategori`
--

CREATE TABLE `t_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_kategori`
--

INSERT INTO `t_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Food'),
(2, 'Drink');

-- --------------------------------------------------------

--
-- Table structure for table `t_produk`
--

CREATE TABLE `t_produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(30) NOT NULL,
  `harga_produk` varchar(10) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_kasir` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_produk`
--

INSERT INTO `t_produk` (`id_produk`, `nama_produk`, `harga_produk`, `id_kategori`, `id_kasir`) VALUES
(1, 'Latte', '10000', 2, 1),
(2, 'Cake', '20000', 1, 3),
(3, 'Nasi Goreng', '13000', 1, 3),
(4, 'Teh Manis', '3000', 2, 3),
(8, 'Teh Botol', '5000', 2, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_kasir`
--
ALTER TABLE `t_kasir`
  ADD PRIMARY KEY (`id_kasir`);

--
-- Indexes for table `t_kategori`
--
ALTER TABLE `t_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `t_produk`
--
ALTER TABLE `t_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_kasir`
--
ALTER TABLE `t_kasir`
  MODIFY `id_kasir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `t_kategori`
--
ALTER TABLE `t_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_produk`
--
ALTER TABLE `t_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
