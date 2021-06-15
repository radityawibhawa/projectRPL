-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2021 at 11:07 AM
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
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id_mobil` int(11) NOT NULL,
  `platMobil` varchar(20) NOT NULL,
  `jenisMobil` varchar(255) NOT NULL,
  `hargaSewa` int(11) NOT NULL,
  `totalPinjam` int(11) NOT NULL,
  `spesifikasi` text DEFAULT NULL,
  `status` enum('AVAILABLE','UNAVAILABLE') NOT NULL,
  `fotoMobil` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id_mobil`, `platMobil`, `jenisMobil`, `hargaSewa`, `totalPinjam`, `spesifikasi`, `status`, `fotoMobil`) VALUES
(1, 'N1234AB', 'Innova Reborn 2016', 500000, 3, 'merupakan mobil pilihan crossover, dimensi sebuah mpv dan efisiensi bahan bakar seperti layaknya sebuah city car. Perpaduan sempurna sebuah mobil untuk kebutuhan anda sehari - hari. Mempunyai mesin 1.500 cc mobil ini dijamin hemat bahan bakar. Selain itu, mobil ini juga di lengkapi banyak fitur menarik seperti : steering switch control, dual Airbags, ABS, EBD, kamera mundur, head unit dengan DVD player dan juga beberapa fitur lain yang cukup menunjang perjalananan anda', 'AVAILABLE', '1.jpg'),
(2, 'N12344AB', 'Innova Reborn 2017', 400000, 7, 'merupakan mobil pilihan crossover, dimensi sebuah mpv dan efisiensi bahan bakar seperti layaknya sebuah city car. Perpaduan sempurna sebuah mobil untuk kebutuhan anda sehari - hari. Mempunyai mesin 1.500 cc mobil ini dijamin hemat bahan bakar. Selain itu, mobil ini juga di lengkapi banyak fitur menarik seperti : steering switch control, dual Airbags, ABS, EBD, kamera mundur, head unit dengan DVD player dan juga beberapa fitur lain yang cukup menunjang perjalananan anda', 'AVAILABLE', '2.jpg'),
(3, 'N12345AB', 'Innova Reborn 2015', 350000, 4, 'merupakan mobil pilihan crossover, dimensi sebuah mpv dan efisiensi bahan bakar seperti layaknya sebuah city car. Perpaduan sempurna sebuah mobil untuk kebutuhan anda sehari - hari. Mempunyai mesin 1.500 cc mobil ini dijamin hemat bahan bakar. Selain itu, mobil ini juga di lengkapi banyak fitur menarik seperti : steering switch control, dual Airbags, ABS, EBD, kamera mundur, head unit dengan DVD player dan juga beberapa fitur lain yang cukup menunjang perjalananan anda', 'AVAILABLE', '3.jpg'),
(5, 'N1234ABC', 'Grand Livina', 500000, 2, 'merupakan mobil pilihan crossover, dimensi sebuah mpv dan efisiensi bahan bakar seperti layaknya sebuah city car. Perpaduan sempurna sebuah mobil untuk kebutuhan anda sehari - hari. Mempunyai mesin 1.500 cc mobil ini dijamin hemat bahan bakar. Selain itu, mobil ini juga di lengkapi banyak fitur menarik seperti : steering switch control, dual Airbags, ABS, EBD, kamera mundur, head unit dengan DVD player dan juga beberapa fitur lain yang cukup menunjang perjalananan anda', 'AVAILABLE', '3.jpg'),
(6, 'ABC1231DE', 'Grand Livina 2018', 450000, 0, 'bagus bagus bagus bagus', 'AVAILABLE', 'g2.png');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id_message` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

CREATE TABLE `rent` (
  `id_rent` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `tgl_sewa` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `totalHariPinjam` int(11) NOT NULL,
  `waktu_ambil` time NOT NULL,
  `alamat` text DEFAULT NULL,
  `alamat_kembali` text DEFAULT NULL,
  `keterlambatan` int(11) DEFAULT NULL,
  `denda` int(11) DEFAULT NULL,
  `total_bayar` int(11) NOT NULL,
  `nama_rekening` varchar(255) NOT NULL,
  `nomor_kartu` varchar(255) NOT NULL,
  `masa_akhir_kartu` varchar(255) NOT NULL,
  `cvv` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` enum('FINISH','WAITING') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rent`
--

INSERT INTO `rent` (`id_rent`, `id_user`, `id_mobil`, `tgl_sewa`, `tgl_kembali`, `totalHariPinjam`, `waktu_ambil`, `alamat`, `alamat_kembali`, `keterlambatan`, `denda`, `total_bayar`, `nama_rekening`, `nomor_kartu`, `masa_akhir_kartu`, `cvv`, `created_at`, `status`) VALUES
(1, 1, 1, '2021-06-17', '2021-07-01', 14, '05:17:00', 'sadfsda', NULL, NULL, NULL, 7000000, 'Jayanaaaa', '3', '12-23', '003', '2021-06-13 22:49:11', 'FINISH'),
(2, 1, 2, '2021-06-23', '2021-06-24', 5, '06:18:00', 'asdfasdfasdf', 'Di Lokasi Biasa', NULL, 100000, 2000000, 'asdfasdf', '12312312', '12-23', '007', '2021-06-14 07:48:18', 'FINISH'),
(3, 1, 2, '2021-06-16', '2021-06-12', 6, '06:32:00', 'tsset', 'Di Lokasi Biasa', NULL, 100000, 2400000, 'Jayanaaaa', '5', '4-7', '4', '2021-06-14 00:57:22', 'FINISH');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id_review` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `pelayanan` text NOT NULL,
  `mobil` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id_review`, `id_user`, `id_mobil`, `pelayanan`, `mobil`) VALUES
(1, 1, 1, 'Puas dengan pelayanan, kenyamanan, dan performa dari mobil yang disewakan.', 'Innova reborn 2016'),
(2, 2, 2, 'Pokoknya bagus, rental terecommended.', 'Xenia'),
(3, 3, 3, 'Mobil aman, pelayanan bagus, mantap dah.', 'Honda Brio'),
(4, 1, 2, 'Pelayanannya sangat bagus, dan karyawan nya ramah, serta cepat tanggap', 'Mobil yang nyaman digunakan serta terawat dengan baik');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `alamat` text DEFAULT NULL,
  `role` enum('ADMIN','CUST','MANAGER') NOT NULL,
  `noktp` varchar(255) DEFAULT NULL,
  `nosim` varchar(255) DEFAULT NULL,
  `ktp` text DEFAULT NULL,
  `sim` text DEFAULT NULL,
  `ktpselfie` text DEFAULT NULL,
  `simselfie` text DEFAULT NULL,
  `status` enum('PENDING','APPROVED','WAITING') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `username`, `password`, `phone`, `alamat`, `role`, `noktp`, `nosim`, `ktp`, `sim`, `ktpselfie`, `simselfie`, `status`, `created_at`) VALUES
(1, 'jayanacitra', 'jayanacitra99@gmail.com', 'jayanacitra', '123456', '081234567890', 'Bandung', 'ADMIN', '32165441650321651', '32165162306549684', '1-K-Twibbon_2.png', '1-S-Twibbon_2.png', '1-KS-Twibbon_2.png', '1-SS-Twibbon_2.png', 'APPROVED', '2021-06-08 15:27:49'),
(2, 'jajang', 'willy61@example.org', '', '123456', '081234567890', NULL, 'CUST', NULL, NULL, NULL, NULL, NULL, NULL, 'PENDING', '2021-06-08 15:37:21'),
(3, 'Jayana Citra', 'jeramie17@example.com', '', '123456', '081234567890', NULL, 'CUST', NULL, NULL, NULL, NULL, NULL, NULL, 'PENDING', '2021-06-08 15:42:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id_mobil`),
  ADD UNIQUE KEY `platMobil` (`platMobil`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_message`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `rent`
--
ALTER TABLE `rent`
  ADD PRIMARY KEY (`id_rent`),
  ADD KEY `id_mobil` (`id_mobil`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id_review`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_mobil` (`id_mobil`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rent`
--
ALTER TABLE `rent`
  MODIFY `id_rent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id_review` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rent`
--
ALTER TABLE `rent`
  ADD CONSTRAINT `rent_ibfk_1` FOREIGN KEY (`id_mobil`) REFERENCES `cars` (`id_mobil`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rent_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`id_mobil`) REFERENCES `cars` (`id_mobil`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
