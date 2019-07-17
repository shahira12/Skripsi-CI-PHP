-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2018 at 03:08 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `prediksi_darah`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE IF NOT EXISTS `akun` (
`id_user` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` char(100) NOT NULL,
  `phone` char(100) NOT NULL,
  `password` char(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_user`, `name`, `username`, `email`, `phone`, `password`) VALUES
(1, 'shahira', 'shahira', 'shahirahusein70@gmail.com', '082311515868', 'iraira'),
(3, 'ulfa mardatillah', 'paul', 'ulfamardatillah@gmail.com', '087892884096', '123456'),
(4, 'ulfah putri', 'putri', 'ulfahputri@gmail.com', '09897777766', 'putri124'),
(5, 'susilawati', 'susi', 'susikartini56@ymail.com', '0988665', 'susi123'),
(6, 'Muhammad Kahfi', 'kahfi', 'kahfi399@gmail,com', '086757678688', 'kahfi123');

-- --------------------------------------------------------

--
-- Table structure for table `donor_darah`
--

CREATE TABLE IF NOT EXISTS `donor_darah` (
`id_donor` int(10) NOT NULL,
  `bulan` varchar(50) NOT NULL,
  `tahun` int(10) NOT NULL,
  `jumlah_donor` int(10) NOT NULL,
  `gagal_donor` int(10) NOT NULL,
  `berhasil_donor` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor_darah`
--

INSERT INTO `donor_darah` (`id_donor`, `bulan`, `tahun`, `jumlah_donor`, `gagal_donor`, `berhasil_donor`) VALUES
(14, 'April', 2017, 2800, 875, 1925),
(15, 'Mei', 2017, 3455, 888, 2567),
(16, 'Juni', 2017, 625, 163, 462),
(17, 'Juli', 2017, 2271, 604, 1667),
(18, 'Agustus', 2017, 2861, 753, 2108),
(19, 'September', 2017, 2434, 841, 1593),
(20, 'Oktober', 2017, 3745, 883, 2862),
(21, 'November', 2017, 2765, 903, 1862),
(22, 'Desember', 2017, 1845, 676, 1169),
(23, 'Januari', 2018, 2242, 613, 1629),
(24, 'Februari', 2018, 2273, 635, 1638),
(25, 'Maret', 2018, 2555, 930, 1625);

-- --------------------------------------------------------

--
-- Table structure for table `mamdani`
--

CREATE TABLE IF NOT EXISTS `mamdani` (
`id_prediksi` int(10) NOT NULL,
  `bulan` varchar(255) NOT NULL,
  `tahun` varchar(50) NOT NULL,
  `gol_darah` varchar(50) NOT NULL,
  `kegiatan` varchar(50) NOT NULL,
  `pendonor` varchar(50) NOT NULL,
  `kebutuhan` varchar(50) NOT NULL,
  `keterangan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mamdani`
--

INSERT INTO `mamdani` (`id_prediksi`, `bulan`, `tahun`, `gol_darah`, `kegiatan`, `pendonor`, `kebutuhan`, `keterangan`) VALUES
(5, 'April', '2017', 'A', 'BANYAK', 'BANYAK', 'BANYAK', 'STOK DARAH DITAMBAH'),
(6, 'Mei', '2017', 'B', 'BANYAK', 'BANYAK', 'SEDANG', 'STOK DARAH TETAP'),
(7, 'Juni', '2017', 'O', 'BANYAK', 'BANYAK', 'SEDIKIT', 'STOK DARAH TETAP'),
(8, 'Juli', '2017', 'AB', 'BANYAK', 'SEDANG', 'BANYAK', 'STOK DARAH DITAMBAH'),
(12, 'Agustus', '2017', 'A', 'BANYAK', 'SEDANG', 'SEDANG', 'STOK DARAH TETAP'),
(13, 'September', '2017', 'B', 'BANYAK', 'SEDANG', 'SEDIKIT', 'STOK DARAH TETAP'),
(14, 'Oktober', '2017', 'O', 'BANYAK', 'SEDIKIT', 'BANYAK', 'STOK DARAH DITAMBAH'),
(15, 'November', '2017', 'AB', 'BANYAK', 'SEDIKIT', 'SEDANG', 'STOK DARAH TETAP'),
(16, 'Desember', '2017', 'A', 'BANYAK', 'SEDIKIT', 'SEDIKIT', 'STOK DARAH TETAP'),
(17, 'Januari', '2018', 'B', 'SEDANG', 'BANYAK', 'BANYAK', 'STOK DARAH TETAP'),
(18, 'Februari', '2018', 'O', 'SEDANG', 'BANYAK', 'SEDANG', 'STOK DARAH DITAMBAH'),
(21, 'Maret', '2018', 'AB', 'SEDANG', 'BANYAK', 'SEDIKIT', 'STOK DARAH TETAP'),
(22, 'April', '2018', 'A', 'SEDANG', 'SEDANG', 'BANYAK', 'STOK DARAH DITAMBAH'),
(23, 'Mei', '2018', 'B', 'SEDANG', 'SEDANG', 'SEDANG', 'STOK DARAH TETAP'),
(26, 'Juni', '2018', 'O', 'SEDANG', 'SEDANG', 'SEDIKIT', 'STOK DARAH TETAP'),
(27, 'Juli', '2018', 'AB', 'SEDANG', 'SEDIKIT', 'BANYAK', 'STOK DARAH DITAMBAH'),
(28, 'Agustus', '2018', 'A', 'SEDANG', 'SEDIKIT', 'SEDANG', 'STOK DARAH DITAMBAH'),
(29, 'September', '2018', 'B', 'SEDANG', 'SEDIKIT', 'BANYAK', 'STOK DARAH DITAMBAH'),
(30, 'Oktober', '2018', 'O', 'SEDIKIT', 'BANYAK', 'BANYAK', 'STOK DARAH DITAMBAH'),
(31, 'November', '2018', 'AB', 'SEDIKIT', 'BANYAK', 'SEDANG', 'STOK DARAH TETAP'),
(32, 'Desember', '2018', 'A', 'SEDIKIT', 'BANYAK', 'SEDIKIT', 'STOK DARAH TETAP'),
(36, 'Januari', '2019', 'B', 'SEDIKIT', 'SEDANG', 'BANYAK', 'STOK DARAH DITAMBAH'),
(37, 'Februari', '2019', 'O', 'SEDIKIT', 'SEDANG', 'SEDANG', 'STOK DARAH TETAP'),
(38, 'Maret', '2019', 'AB', 'SEDIKIT', 'SEDANG', 'SEDIKIT', 'STOK DARAH TETAP'),
(39, 'April', '2019', 'A', 'SEDIKIT', 'SEDIKIT', 'BANYAK', 'STOK DARAH DITAMBAH'),
(40, 'Mei', '2019', 'B', 'SEDIKIT', 'SEDIKIT', 'SEDANG', 'STOK DARAH DITAMBAH'),
(41, 'Juni', '2019', 'O', 'SEDIKIT', 'SEDIKIT', 'SEDIKIT', 'STOK DARAH TETAP'),
(42, 'Juli', '2019', 'AB', 'SEDIKIT', 'SEDIKIT', 'BANYAK', 'STOK DARAH DITAMBAH'),
(43, 'Agustus', '2019', 'A', 'BANYAK', 'SEDANG', 'SEDANG', NULL),
(44, 'September', '2019', 'B', 'SEDANG', 'BANYAK', 'SEDANG', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permintaan_darah`
--

CREATE TABLE IF NOT EXISTS `permintaan_darah` (
`id_permintaan` int(10) NOT NULL,
  `bulan` varchar(10) NOT NULL,
  `tahun` int(10) NOT NULL,
  `gol_a` int(10) NOT NULL,
  `gol_b` int(10) NOT NULL,
  `gol_o` int(10) NOT NULL,
  `gol_ab` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permintaan_darah`
--

INSERT INTO `permintaan_darah` (`id_permintaan`, `bulan`, `tahun`, `gol_a`, `gol_b`, `gol_o`, `gol_ab`) VALUES
(1, 'April', 2017, 409, 422, 548, 151),
(2, 'Mei', 2017, 744, 65, 730, 173),
(3, 'Juni', 2017, 411, 440, 472, 122),
(4, 'Juli', 2017, 408, 410, 498, 116),
(5, 'Agustus', 2017, 599, 537, 657, 181),
(6, 'September', 2017, 628, 678, 810, 246),
(7, 'Oktober', 2017, 512, 446, 498, 158),
(8, 'November', 2017, 441, 330, 416, 123),
(9, 'Desember', 2017, 441, 490, 532, 178),
(10, 'Januari', 2018, 611, 550, 472, 142),
(11, 'Februari', 2018, 431, 393, 468, 132),
(12, 'Maret', 2018, 352, 395, 451, 118);

-- --------------------------------------------------------

--
-- Table structure for table `produksi_darah`
--

CREATE TABLE IF NOT EXISTS `produksi_darah` (
`id_produksi` int(10) NOT NULL,
  `bulan` varchar(15) NOT NULL,
  `tahun` int(10) NOT NULL,
  `gol_a` int(10) NOT NULL,
  `gol_b` int(10) NOT NULL,
  `gol_o` int(10) NOT NULL,
  `gol_ab` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produksi_darah`
--

INSERT INTO `produksi_darah` (`id_produksi`, `bulan`, `tahun`, `gol_a`, `gol_b`, `gol_o`, `gol_ab`) VALUES
(1, 'April', 2017, 529, 547, 709, 140),
(2, 'Mei', 2017, 704, 738, 902, 217),
(3, 'Juni', 2017, 128, 124, 167, 40),
(4, 'Juli', 2017, 475, 483, 570, 185),
(5, 'Agustus', 2017, 568, 592, 779, 159),
(6, 'September', 2017, 428, 455, 565, 136),
(7, 'Oktober', 2017, 800, 816, 1020, 226),
(8, 'November', 2017, 551, 516, 600, 153),
(9, 'Desember', 2017, 339, 337, 441, 86),
(10, 'Januari', 2018, 438, 474, 537, 144),
(11, 'Februari', 2018, 452, 445, 608, 133),
(12, 'Maret', 2018, 455, 448, 602, 120);

-- --------------------------------------------------------

--
-- Table structure for table `stok_darah`
--

CREATE TABLE IF NOT EXISTS `stok_darah` (
`id_stok` int(10) NOT NULL,
  `bulan` varchar(10) NOT NULL,
  `tahun` int(10) NOT NULL,
  `gol_a` int(10) NOT NULL,
  `gol_b` int(10) NOT NULL,
  `gol_o` int(10) NOT NULL,
  `gol_ab` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stok_darah`
--

INSERT INTO `stok_darah` (`id_stok`, `bulan`, `tahun`, `gol_a`, `gol_b`, `gol_o`, `gol_ab`) VALUES
(5, 'April', 2017, 120, 125, 161, -11),
(6, 'Mei', 2017, -40, 82, 172, 44),
(7, 'Juni', 2017, -283, -316, -305, -82),
(8, 'Juli', 2017, 67, 73, 72, 69),
(9, 'Agustus', 2017, -31, 55, 122, -22),
(10, 'September', 2017, -200, 223, -245, -110),
(11, 'Oktober', 2017, 288, 370, 522, 68),
(12, 'November', 2017, 110, 186, 184, 30),
(13, 'Desember', 2017, 102, -153, -121, -92),
(14, 'Januari', 2018, -173, -76, 101, 2),
(15, 'Februari', 2018, -21, 52, 140, 1),
(16, 'Maret', 2018, 103, 53, 151, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
 ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `donor_darah`
--
ALTER TABLE `donor_darah`
 ADD PRIMARY KEY (`id_donor`);

--
-- Indexes for table `mamdani`
--
ALTER TABLE `mamdani`
 ADD PRIMARY KEY (`id_prediksi`);

--
-- Indexes for table `permintaan_darah`
--
ALTER TABLE `permintaan_darah`
 ADD PRIMARY KEY (`id_permintaan`);

--
-- Indexes for table `produksi_darah`
--
ALTER TABLE `produksi_darah`
 ADD PRIMARY KEY (`id_produksi`);

--
-- Indexes for table `stok_darah`
--
ALTER TABLE `stok_darah`
 ADD PRIMARY KEY (`id_stok`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `donor_darah`
--
ALTER TABLE `donor_darah`
MODIFY `id_donor` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `mamdani`
--
ALTER TABLE `mamdani`
MODIFY `id_prediksi` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `permintaan_darah`
--
ALTER TABLE `permintaan_darah`
MODIFY `id_permintaan` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `produksi_darah`
--
ALTER TABLE `produksi_darah`
MODIFY `id_produksi` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `stok_darah`
--
ALTER TABLE `stok_darah`
MODIFY `id_stok` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
