-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2021 at 06:54 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amigotics`
--

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id_mobil` varchar(13) NOT NULL,
  `jenis_mobil` varchar(100) NOT NULL,
  `spesifikasi_mobil` varchar(1000) NOT NULL,
  `gambar_mobil` blob NOT NULL,
  `start_harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `jenis_mobil`, `spesifikasi_mobil`, `gambar_mobil`, `start_harga`) VALUES
('60b5530181cba', 'Alphard', 'Alphard yang merupakan mobil pilihan crossover, dimensi sebuah mpv dan efisiensi bahan bakar seperti layaknya sebuah city car. Perpaduan sempurna sebuah mobil untuk kebutuhan anda sehari - hari.', 0x64656661756c742e6a7067, 'Mulai dari Rp. 1.000.000'),
('60b55393e3440', 'Accord', 'Toyota Avanza yang merupakan mobil pilihan crossover, dimensi sebuah mpv dan efisiensi bahan bakar seperti layaknya sebuah city car. Perpaduan sempurna sebuah mobil untuk kebutuhan anda sehari - hari.', 0x64656661756c742e6a7067, 'Mulai dari Rp. 1.000.000');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `no_hp` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `id_role` int(11) NOT NULL,
  `akun_dibuat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama`, `email`, `no_hp`, `password`, `id_role`, `akun_dibuat`) VALUES
(2, 'adinda', 'adinda.khumairah18@gmail.com', '081224423677', '123456', 2, 1619302343),
(3, 'adin', 'adinda@gmail.com', '081224423677', '123456', 2, 1619651642),
(4, 'adinda rahma', 'adin@hotmail.com', '45678909876', '123456', 2, 1620093399);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
