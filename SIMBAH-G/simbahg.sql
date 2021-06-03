-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2021 at 06:53 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simbahg`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `nik` varchar(50) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_user`, `nama`, `tgl_lahir`, `nik`, `jenis_kelamin`, `email`, `password`, `level`) VALUES
(42, 'admin', '2001-08-12', '1173021208010001', 'Laki-Laki', 'admin@admin.com', '$2y$10$Kp5YXaTH8n5tPajfB1SR5eVoBlMtW44Xu052J5JOZqjnTa3KR8QE6', 1),
(44, 'rahmad', '2021-06-18', '11730212080106603', 'Laki-Laki', 'ridha.arlian19@gmail.com', '$2y$10$4Pr2uGnwzO4oTOKZ5n3pKOl0PaQjnp93f12qxb7iV88sCVcIc5bWK', 0),
(46, 'irham ', '2021-06-03', '1173021208010021', 'Laki-Laki', 'irhamsyahputra@gmail.com', '$2y$10$eue9gvYQzWfvK2ltBNqf5enkJVTulWRj1fb830lja8CqZ.dO5T2yW', 0);

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `kategori` enum('Sarpras','Meunasah') NOT NULL,
  `nama` varchar(50) NOT NULL,
  `target` int(10) NOT NULL,
  `tercapai` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `kategori`, `nama`, `target`, `tercapai`) VALUES
(8, 'Sarpras', 'Piring', 200, 10);

-- --------------------------------------------------------

--
-- Table structure for table `berikan_hibah`
--

CREATE TABLE `berikan_hibah` (
  `id_hibah` int(11) NOT NULL,
  `nama_penghibah` varchar(100) NOT NULL,
  `kategori` enum('Sarpras','Meunasah') NOT NULL,
  `jenis_barang` varchar(100) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `tgl_hibah` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berikan_hibah`
--

INSERT INTO `berikan_hibah` (`id_hibah`, `nama_penghibah`, `kategori`, `jenis_barang`, `jumlah`, `tgl_hibah`) VALUES
(35, 'Ridha Arlian', 'Sarpras', 'Piring', 10, '2021-06-03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berikan_hibah`
--
ALTER TABLE `berikan_hibah`
  ADD PRIMARY KEY (`id_hibah`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `berikan_hibah`
--
ALTER TABLE `berikan_hibah`
  MODIFY `id_hibah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
