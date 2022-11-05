-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Nov 2022 pada 05.43
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `posttest 6`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `characters`
--

CREATE TABLE `characters` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `damage` varchar(255) NOT NULL,
  `health` varchar(255) NOT NULL,
  `rank` varchar(255) NOT NULL,
  `promotion` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `waktu_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `characters`
--

INSERT INTO `characters` (`id`, `nama`, `damage`, `health`, `rank`, `promotion`, `price`, `description`, `gambar`, `waktu_upload`) VALUES
(1, 'asdbajdas', '12313', '123131', 'silver', 'IV', '12331123', '123213', 'asdbajdas.png', '2022-11-02'),
(2, 'sadadadasdad', '2131313', '12313323', 'gold', 'II', '123123123', 'asdqw1w1', 'sadadadasdad.png', '2022-11-02');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `characters`
--
ALTER TABLE `characters`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `characters`
--
ALTER TABLE `characters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
