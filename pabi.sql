-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2019 at 03:46 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pabi`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_user`
--

CREATE TABLE `data_user` (
  `id` int(10) NOT NULL,
  `id_nama` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `marga` int(100) NOT NULL,
  `mamak` int(100) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `angkatan` int(100) NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `Jenis_kelamin` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_user`
--

INSERT INTO `data_user` (`id`, `id_nama`, `nama`, `marga`, `mamak`, `kelas`, `angkatan`, `prodi`, `Jenis_kelamin`) VALUES
(1, 2, 'Michael Ollifarel', 1, 2, '32Tk2', 2018, 'D3 TK', 1);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kelamin`
--

CREATE TABLE `jenis_kelamin` (
  `id` int(100) NOT NULL,
  `jk` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_kelamin`
--

INSERT INTO `jenis_kelamin` (`id`, `jk`) VALUES
(1, 'L'),
(2, 'P');

-- --------------------------------------------------------

--
-- Table structure for table `marga`
--

CREATE TABLE `marga` (
  `id_marga` int(100) NOT NULL,
  `toga` int(100) NOT NULL,
  `marga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marga`
--

INSERT INTO `marga` (`id_marga`, `toga`, `marga`) VALUES
(1, 1, 'sagala'),
(2, 2, 'simbolon'),
(3, 2, 'tamba');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int(10) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `role`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `toga`
--

CREATE TABLE `toga` (
  `id_toga` int(100) NOT NULL,
  `nama_toga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `toga`
--

INSERT INTO `toga` (`id_toga`, `nama_toga`) VALUES
(1, 'naimarata'),
(2, 'parna'),
(3, 'silahisabungan'),
(4, 'asas');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', 'admin', 1),
(2, 'user', 'user', 2),
(22, 'admin', 'aaaa', 2),
(23, '1111', 'qqq', 2),
(24, 'mmmmm', 'q', 2),
(33, 'a', 'as', 2),
(34, '23', '123', 2),
(35, 'ok', 'ok', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_nama` (`id_nama`),
  ADD KEY `Jenis_kelamin` (`Jenis_kelamin`),
  ADD KEY `mamak` (`mamak`),
  ADD KEY `marga` (`marga`);

--
-- Indexes for table `jenis_kelamin`
--
ALTER TABLE `jenis_kelamin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marga`
--
ALTER TABLE `marga`
  ADD PRIMARY KEY (`id_marga`),
  ADD KEY `toga` (`toga`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `toga`
--
ALTER TABLE `toga`
  ADD PRIMARY KEY (`id_toga`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role` (`role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_user`
--
ALTER TABLE `data_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jenis_kelamin`
--
ALTER TABLE `jenis_kelamin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `marga`
--
ALTER TABLE `marga`
  MODIFY `id_marga` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `toga`
--
ALTER TABLE `toga`
  MODIFY `id_toga` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_user`
--
ALTER TABLE `data_user`
  ADD CONSTRAINT `data_user_ibfk_1` FOREIGN KEY (`id_nama`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `data_user_ibfk_4` FOREIGN KEY (`Jenis_kelamin`) REFERENCES `jenis_kelamin` (`id`),
  ADD CONSTRAINT `data_user_ibfk_5` FOREIGN KEY (`mamak`) REFERENCES `marga` (`id_marga`),
  ADD CONSTRAINT `data_user_ibfk_6` FOREIGN KEY (`marga`) REFERENCES `marga` (`id_marga`);

--
-- Constraints for table `marga`
--
ALTER TABLE `marga`
  ADD CONSTRAINT `marga_ibfk_1` FOREIGN KEY (`toga`) REFERENCES `toga` (`id_toga`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role`) REFERENCES `role` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
