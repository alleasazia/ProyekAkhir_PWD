-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 20, 2026 at 01:17 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sharegoods`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `kategori`, `nama_barang`, `jumlah`, `deskripsi`, `gambar`, `user_id`, `created_at`) VALUES
(34, 'Pakaian', 'sepatu', 1, 'Good condition', '1777266453_sepatu.jpg', 8, '2026-04-27 05:07:33'),
(35, 'Elektronik', 'TV', 1, 'Layar banyak lecet', '1777267596_TV.jpg', 8, '2026-04-27 05:26:36'),
(37, 'Peralatan Rumah', 'pan', 1, 'Masih enak dipake masak', '1777267682_pan.jpg', 8, '2026-04-27 05:28:02'),
(38, 'Buku & Alat Tulis', 'novel', 1, 'Masih segel', '1777267720_buku.jpg', 8, '2026-04-27 05:28:40'),
(39, 'Elektronik', 'kulkas', 1, 'Freezer rusak, tapi yang lainnya masih bagus', '1777267968_refri.jpg', 8, '2026-04-27 05:32:48'),
(40, 'Peralatan Rumah', 'teko', 1, 'Masih baru belum dipake sama sekali', '1777268020_teko.jpg', 8, '2026-04-27 05:33:40'),
(41, 'Buku & Alat Tulis', 'papan tulis', 1, 'Masih mulus ', '1777268053_board.jpg', 8, '2026-04-27 05:34:13'),
(44, 'Pakaian', 'baju', 5, 'All in good conditions', '1777281662_fit.jpg', 8, '2026-04-27 09:21:02');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(8, 'sean', '$2y$10$/C0lUD8Rf4cE6sGUx6HNnehxvT1.IABkiCznFJX7bMqWvJYk5lduW'),
(15, 'mama', '$2y$10$9zNvKhnZ0ZgGYutOGtQyR.KfzUsT.JA60A3Wfs2dlpxSv6fP9cPqK'),
(16, 'jeje', '$2y$10$WxgRSnrglFHnPVkPPO/cMOUqf/X1ugjcq2vJuGFV/GslxC2d4x7Na'),
(19, 'jean', '$2y$10$rJZKheAFSPZJFiNY2m8N4.qzdvGaH4Rc/dccPzoMURJt/gJsrk6f.'),
(20, 'keonho', '$2y$10$3C5F2Fpz1LnLdUt6xb927OcJ3by0/uVCGt1HWfGSqItXZBiG7RFHW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
