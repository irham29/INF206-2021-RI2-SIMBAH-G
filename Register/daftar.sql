-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Bulan Mei 2021 pada 06.42
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daftar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_user`
--

CREATE TABLE `db_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal_lahir` varchar(255) NOT NULL,
  `nik` int(16) NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `db_user`
--

INSERT INTO `db_user` (`id`, `nama`, `tanggal_lahir`, `nik`, `jenis_kelamin`, `email`, `username`, `password`) VALUES
(1, 'irham', 'medan 29 03 2001', 2147483647, 'laki laki', 'syahputrairham5@gmail.com', 'irham', '$2y$10$QITiypnsM1kIbkQL1uk1xO0791TLy3Cw9qYyr3LAKIU'),
(2, 'agus', 'aceh 29 03 01', 111111, 'laki laki', 'mafsyukma@gmail.com', 'agus', '$2y$10$fU86TmYW7bkDIV/PhSpcCuEQcp5EZUfNoKTIcOrMEPl'),
(3, 'agus', 'aceh 29 03 01', 111111, 'laki laki', 'mafsyukma@gmail.com', 'agus', '$2y$10$CRklZNaC/SXjb1sSQgHLaeDM.PUtTQXAIHWLTSv0vGc');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `db_user`
--
ALTER TABLE `db_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `db_user`
--
ALTER TABLE `db_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
