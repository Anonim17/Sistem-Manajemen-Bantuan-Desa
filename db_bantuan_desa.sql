-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2023 at 12:57 AM
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
-- Database: `db_bantuan_desa`
--

-- --------------------------------------------------------

--
-- Table structure for table `bantuan`
--

CREATE TABLE `bantuan` (
  `id` int(11) NOT NULL,
  `nama_bantuan` varchar(100) DEFAULT NULL,
  `jumlah_bantuan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `bantuan`
--

INSERT INTO `bantuan` (`id`, `nama_bantuan`, `jumlah_bantuan`) VALUES
(4, 'BPNT (Bantuan Pangan non Tunai) di ganti sembako', 200000),
(5, 'BLT (Bantuan Langsung Tunai)', 300000),
(7, 'PKH SD (program keluarga harapan)', 225000),
(11, 'PKH SMP (program keluarga harapan)', 375000),
(12, 'PKH SMA (program keluarga harapan)', 500000),
(13, 'blt', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bantuan_warga`
--

CREATE TABLE `bantuan_warga` (
  `id` int(11) NOT NULL,
  `no_kk` varchar(16) DEFAULT NULL,
  `id_bantuan` int(11) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `tanggal_bantuan` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `bantuan_warga`
--
-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `nik` varchar(16) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `level` enum('petugas','admin') DEFAULT NULL,
  `status` enum('0','1') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nik`, `username`, `password`, `level`, `status`) VALUES
(4, '3206061510980003', 'petugas', 'afb91ef692fd08c445e8cb1bab2ccf9c', 'petugas', '1'),
(5, '3206066402970001', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '1');

-- --------------------------------------------------------

--
-- Table structure for table `warga`
--

CREATE TABLE `warga` (
  `nik` varchar(16) NOT NULL,
  `no_kk` varchar(16) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `jenis_kelamin` varchar(100) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `pendidikan` varchar(100) DEFAULT NULL,
  `status_kawin` varchar(50) DEFAULT NULL,
  `status_kependudukan` varchar(100) DEFAULT NULL,
  `hubungan_keluarga` varchar(100) DEFAULT NULL,
  `kondisi_fisik` varchar(100) DEFAULT NULL,
  `pekerjaan` varchar(100) DEFAULT NULL,
  `status_pensiun` varchar(100) DEFAULT NULL,
  `pendapatan` varchar(100) DEFAULT NULL,
  `usaha` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `no_rumah` varchar(100) DEFAULT NULL,
  `rt` varchar(100) DEFAULT NULL,
  `rw` varchar(100) DEFAULT NULL,
  `no_telp` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `warga`
--
--
-- Indexes for dumped tables
--

--
-- Indexes for table `bantuan`
--
ALTER TABLE `bantuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bantuan_warga`
--
ALTER TABLE `bantuan_warga`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_bantuan` (`id_bantuan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bantuan`
--
ALTER TABLE `bantuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `bantuan_warga`
--
ALTER TABLE `bantuan_warga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bantuan_warga`
--
ALTER TABLE `bantuan_warga`
  ADD CONSTRAINT `FK_bantuan_warga_bantuan` FOREIGN KEY (`id_bantuan`) REFERENCES `bantuan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
