-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 20, 2016 at 02:01 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amera`
--

-- --------------------------------------------------------

--
-- Table structure for table `pemesan`
--

CREATE TABLE IF NOT EXISTS `pemesan` (
  `no_ktp` char(16) NOT NULL DEFAULT '',
  `nama` varchar(20) DEFAULT NULL,
  `jenis_kel` char(1) DEFAULT NULL,
  `telepon` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesan`
--

INSERT INTO `pemesan` (`no_ktp`, `nama`, `jenis_kel`, `telepon`) VALUES
('7263859201928374', 'Udin Petot', 'L', '08112424897'),
('739283759123462', 'Emilia Suhendar', 'P', '08768212323'),
('7532419283741623', 'Helmina Wilanova', 'P', '08975623416'),
('7563829102938475', 'Zulkifli Hakim', 'L', '08972341657');

-- --------------------------------------------------------

--
-- Table structure for table `pesan_tiket`
--

CREATE TABLE IF NOT EXISTS `pesan_tiket` (
  `id` int(11) NOT NULL,
  `no_ktp` char(16) NOT NULL DEFAULT '',
  `st_awal` varchar(50) DEFAULT NULL,
  `st_tujuan` varchar(50) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `tiket_d` int(11) DEFAULT NULL,
  `tiket_b` int(11) DEFAULT NULL,
  `tipe` char(6) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan_tiket`
--

INSERT INTO `pesan_tiket` (`id`, `no_ktp`, `st_awal`, `st_tujuan`, `tgl`, `tiket_d`, `tiket_b`, `tipe`) VALUES
(4, '7532419283741623', 'BD', 'DM', '2016-12-12', 1, 0, 'sekali'),
(5, '7263859201928374', 'JAKK', 'GS', '2016-10-21', 2, 1, 'sekali'),
(6, '739283759123462', 'DP', 'DM', '2016-10-22', 2, 0, 'pp'),
(7, '7563829102938475', 'JG', 'JR', '2016-11-29', 1, 0, 'sekali');

-- --------------------------------------------------------

--
-- Table structure for table `stasiun`
--

CREATE TABLE IF NOT EXISTS `stasiun` (
  `kode` char(4) NOT NULL,
  `nama_st` varchar(50) NOT NULL,
  `provinsi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stasiun`
--

INSERT INTO `stasiun` (`kode`, `nama_st`, `provinsi`) VALUES
('BD', 'Bandung', 'Bandung'),
('DM', 'Demak', 'Jawa Tengah'),
('DP', 'Depok', 'Jawa Barat'),
('GMR', 'Gambir', 'DKI Jakarta'),
('GRT', 'Garut', 'Jawa Barat'),
('GS', 'Gresik', 'Jawa Timur'),
('JAKK', 'Jakarta Kota', 'DKI Jakarta'),
('JG', 'Jombang', 'Jawa Timur'),
('JR', 'Jember', 'Jawa Timur'),
('KD', 'Kediri', 'Jawa Timur'),
('KT', 'Klaten', 'Jawa Tengah'),
('KUD', 'Kudus', 'Jawa Tengah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pemesan`
--
ALTER TABLE `pemesan`
  ADD PRIMARY KEY (`no_ktp`);

--
-- Indexes for table `pesan_tiket`
--
ALTER TABLE `pesan_tiket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stasiun`
--
ALTER TABLE `stasiun`
  ADD PRIMARY KEY (`kode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pesan_tiket`
--
ALTER TABLE `pesan_tiket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
