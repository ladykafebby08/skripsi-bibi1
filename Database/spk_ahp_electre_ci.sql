-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2023 at 03:48 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_ahp_electre_ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE `alternatif` (
  `id_alternatif` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `nama`, `nik`, `alamat`, `tanggal`) VALUES
(4, 'Rahmi Basir', '1572070703180001', 'Desa Koto Limau Manis', '2022-06-17'),
(5, 'Ernawati ', '1501120801090015', 'Desa Permai Indah Dusun Jalpa', '2022-06-19'),
(6, 'Leni Dinofita ', '1501122402084076', 'Desa Permai Indah Dusun Jalpa', '2022-07-19'),
(7, 'Rosni ', '1501122402084076', 'Desa Permai Indah Dusun Cempaka', '2022-07-19'),
(8, 'Peni Siskawati ', '1501120201090143', 'RT.05 Larik Melintang', '2022-07-16'),
(21, 'Sahudi', '12321432', 'Desa Baru Sri Menanti', '2023-01-17'),
(22, 'Nora Ardianti', '423423', 'desa titian batu', '2023-01-19'),
(23, 'dfsdfsd', '54534', 'dgsdgs', '2023-01-23'),
(24, 'rtryry', '3543643', 'fgdfdgfd', '2023-01-27'),
(34, 'alif', '141414124124124', 'asdfasdfasdfasdf', '2022-12-27');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` char(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `bobot` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `keterangan`, `bobot`) VALUES
('C1', 'Status Rumah', 0.31244),
('C2', 'Pekerjaan', 0.20807),
('C3', 'Penghasilan', 0.16492),
('C4', 'Tanggung Jawab', 0.10703),
('C5', 'Jenis Atap', 0.07333),
('C6', 'Jenis Dinding', 0.07038),
('C7', 'Jenis Lantai', 0.03444),
('C8', 'MCK', 0.0294);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_ahp`
--

CREATE TABLE `kriteria_ahp` (
  `id_kriteria_ahp` int(11) NOT NULL,
  `id_kriteria_1` char(11) NOT NULL,
  `id_kriteria_2` char(11) NOT NULL,
  `nilai_1` float NOT NULL,
  `nilai_2` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria_ahp`
--

INSERT INTO `kriteria_ahp` (`id_kriteria_ahp`, `id_kriteria_1`, `id_kriteria_2`, `nilai_1`, `nilai_2`) VALUES
(861, 'C1', 'C2', 2, 0.5),
(862, 'C1', 'C3', 3, 0.33333),
(863, 'C1', 'C4', 4, 0.25),
(864, 'C1', 'C5', 5, 0.2),
(865, 'C1', 'C6', 5, 0.2),
(866, 'C1', 'C7', 6, 0.16667),
(867, 'C1', 'C8', 7, 0.14286),
(868, 'C2', 'C3', 2, 0.5),
(869, 'C2', 'C4', 3, 0.33333),
(870, 'C2', 'C5', 4, 0.25),
(871, 'C2', 'C6', 3, 0.33333),
(872, 'C2', 'C7', 5, 0.2),
(873, 'C2', 'C8', 6, 0.16667),
(874, 'C3', 'C4', 3, 0.33333),
(875, 'C3', 'C5', 3, 0.33333),
(876, 'C3', 'C6', 4, 0.25),
(877, 'C3', 'C7', 5, 0.2),
(878, 'C3', 'C8', 5, 0.2),
(879, 'C4', 'C5', 2, 0.5),
(880, 'C4', 'C6', 3, 0.33333),
(881, 'C4', 'C7', 4, 0.25),
(882, 'C4', 'C8', 5, 0.2),
(883, 'C5', 'C6', 3, 0.33333),
(884, 'C5', 'C7', 3, 0.33333),
(885, 'C5', 'C8', 2, 0.5),
(886, 'C6', 'C7', 7, 0.14286),
(887, 'C6', 'C8', 2, 0.5),
(888, 'C7', 'C8', 2, 0.5);

-- --------------------------------------------------------

--
-- Table structure for table `penilaian`
--

CREATE TABLE `penilaian` (
  `id_penilaian` int(11) NOT NULL,
  `id_alternatif` int(11) NOT NULL,
  `id_kriteria` char(11) NOT NULL,
  `nilai` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penilaian`
--

INSERT INTO `penilaian` (`id_penilaian`, `id_alternatif`, `id_kriteria`, `nilai`) VALUES
(56, 4, 'C1', 58),
(57, 4, 'C2', 61),
(58, 4, 'C3', 66),
(59, 4, 'C4', 70),
(60, 4, 'C5', 74),
(61, 4, 'C6', 78),
(62, 4, 'C7', 82),
(63, 4, 'C8', 85),
(64, 5, 'C1', 57),
(65, 5, 'C2', 61),
(66, 5, 'C3', 66),
(67, 5, 'C4', 70),
(68, 5, 'C5', 72),
(69, 5, 'C6', 78),
(70, 5, 'C7', 80),
(71, 5, 'C8', 84),
(72, 6, 'C1', 57),
(73, 6, 'C2', 60),
(74, 6, 'C3', 64),
(75, 6, 'C4', 69),
(76, 6, 'C5', 72),
(77, 6, 'C6', 76),
(78, 6, 'C7', 81),
(79, 6, 'C8', 85),
(80, 7, 'C1', 57),
(81, 7, 'C2', 61),
(82, 7, 'C3', 65),
(83, 7, 'C4', 71),
(84, 7, 'C5', 73),
(85, 7, 'C6', 78),
(86, 7, 'C7', 80),
(87, 7, 'C8', 84),
(88, 8, 'C1', 57),
(89, 8, 'C2', 60),
(90, 8, 'C3', 64),
(91, 8, 'C4', 69),
(92, 8, 'C5', 73),
(93, 8, 'C6', 77),
(94, 8, 'C7', 82),
(95, 8, 'C8', 86),
(144, 21, 'C1', 57),
(145, 21, 'C2', 62),
(146, 21, 'C3', 67),
(147, 21, 'C4', 71),
(148, 21, 'C5', 74),
(149, 21, 'C6', 78),
(150, 21, 'C7', 83),
(151, 21, 'C8', 84),
(152, 22, 'C1', 58),
(153, 22, 'C2', 63),
(154, 22, 'C3', 67),
(155, 22, 'C4', 69),
(156, 22, 'C5', 75),
(157, 22, 'C6', 78),
(158, 22, 'C7', 81),
(159, 22, 'C8', 85),
(160, 23, 'C1', 59),
(161, 23, 'C2', 62),
(162, 23, 'C3', 67),
(163, 23, 'C4', 69),
(164, 23, 'C5', 72),
(165, 23, 'C6', 76),
(166, 23, 'C7', 80),
(167, 23, 'C8', 86),
(168, 24, 'C1', 59),
(169, 24, 'C2', 62),
(170, 24, 'C3', 66),
(171, 24, 'C4', 70),
(172, 24, 'C5', 73),
(173, 24, 'C6', 78),
(174, 24, 'C7', 81),
(175, 24, 'C8', 84),
(240, 34, 'C1', 57),
(241, 34, 'C2', 60),
(242, 34, 'C3', 67),
(243, 34, 'C4', 71),
(244, 34, 'C5', 74),
(245, 34, 'C6', 77),
(246, 34, 'C7', 81),
(247, 34, 'C8', 84);

-- --------------------------------------------------------

--
-- Table structure for table `sub_kriteria`
--

CREATE TABLE `sub_kriteria` (
  `id_sub_kriteria` int(11) NOT NULL,
  `id_kriteria` char(11) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_kriteria`
--

INSERT INTO `sub_kriteria` (`id_sub_kriteria`, `id_kriteria`, `deskripsi`, `nilai`) VALUES
(57, 'C1', 'Milik Sendiri ', 5),
(58, 'C1', 'Bersama', 3),
(59, 'C1', 'Tidak ada', 2),
(60, 'C2', 'Tidak Bekerja', 1),
(61, 'C2', 'Buruh/Petani', 3),
(62, 'C2', 'Honorer', 4),
(63, 'C2', 'Wiraswasta/pedagang', 5),
(64, 'C3', 'Rp.0 - Rp.1.200.000', 1),
(65, 'C3', 'Rp.1.300.000-Rp.1.800.000', 2),
(66, 'C3', 'Rp.1.900.000- Rp.2.500.000', 3),
(67, 'C3', 'Lebih dari Rp.3.000.000', 4),
(68, 'C4', '1-3 Orang', 1),
(69, 'C4', '4-7 Orang', 2),
(70, 'C4', '8-11 Orang', 3),
(71, 'C4', '12-15 Orang', 4),
(72, 'C5', 'Ijuk', 1),
(73, 'C5', 'Genteng', 2),
(74, 'C5', 'Seng', 3),
(75, 'C5', 'Asbes', 4),
(76, 'C6', 'Plesteran Anyaman Bambu', 1),
(77, 'C6', 'Rumbia', 2),
(78, 'C6', 'Kayu', 3),
(79, 'C6', 'Tembok', 4),
(80, 'C7', 'Tanah', 1),
(81, 'C7', 'Kayu', 2),
(82, 'C7', 'Plesteran', 3),
(83, 'C7', 'Keramik', 4),
(84, 'C8', 'Sendiri', 5),
(85, 'C8', 'Bersama', 3),
(86, 'C8', 'Tidak ada', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `id_user_level` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `id_user_level`, `nama`, `email`, `username`, `password`) VALUES
(1, 1, 'admin', 'admin@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(7, 2, 'Pimpinan', 'user@gmail.com', 'Pimpinan', '9038aa20099437c02da9c917183727fc');

-- --------------------------------------------------------

--
-- Table structure for table `user_level`
--

CREATE TABLE `user_level` (
  `id_user_level` int(11) NOT NULL,
  `user_level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_level`
--

INSERT INTO `user_level` (`id_user_level`, `user_level`) VALUES
(1, 'Administrator'),
(2, 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id_alternatif`),
  ADD KEY `id_alternatif` (`id_alternatif`) USING BTREE;

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `kriteria_ahp`
--
ALTER TABLE `kriteria_ahp`
  ADD PRIMARY KEY (`id_kriteria_ahp`);

--
-- Indexes for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`id_penilaian`),
  ADD KEY `id_alternatif` (`id_alternatif`),
  ADD KEY `id_kriteria` (`id_kriteria`),
  ADD KEY `nilai` (`nilai`);

--
-- Indexes for table `sub_kriteria`
--
ALTER TABLE `sub_kriteria`
  ADD PRIMARY KEY (`id_sub_kriteria`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_user_level` (`id_user_level`);

--
-- Indexes for table `user_level`
--
ALTER TABLE `user_level`
  ADD PRIMARY KEY (`id_user_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `kriteria_ahp`
--
ALTER TABLE `kriteria_ahp`
  MODIFY `id_kriteria_ahp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=889;

--
-- AUTO_INCREMENT for table `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `id_penilaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=280;

--
-- AUTO_INCREMENT for table `sub_kriteria`
--
ALTER TABLE `sub_kriteria`
  MODIFY `id_sub_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_level`
--
ALTER TABLE `user_level`
  MODIFY `id_user_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD CONSTRAINT `penilaian_ibfk_1` FOREIGN KEY (`id_alternatif`) REFERENCES `alternatif` (`id_alternatif`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penilaian_ibfk_2` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penilaian_ibfk_3` FOREIGN KEY (`nilai`) REFERENCES `sub_kriteria` (`id_sub_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sub_kriteria`
--
ALTER TABLE `sub_kriteria`
  ADD CONSTRAINT `sub_kriteria_ibfk_1` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_user_level`) REFERENCES `user_level` (`id_user_level`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
