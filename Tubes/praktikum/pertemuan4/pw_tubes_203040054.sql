-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Mar 2021 pada 17.14
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040054`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `fashion`
--

CREATE TABLE `fashion` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `stok` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `fashion`
--

INSERT INTO `fashion` (`id`, `name`, `image`, `price`, `description`, `stok`) VALUES
(1, 'Baju Kaos Distro Putih', 'baju2.png', '50.000', 'bahan kaos nya adem', '50'),
(2, 'Baju Kaos Distro Navy', 'baju3.png', '50.000', 'Bahan nya adem', '10'),
(3, 'Baju Kaos Distro Hijau Gambar Orang Tua', 'baju1.png', '45.000', 'bahan kaos nya adem', '20'),
(4, 'Baju Kaos Distro Strip Merah', 'baju4.jpg', '50.000', 'bahan baju nya bagus dan enak di pakai', '15'),
(5, 'Baju Kaos Distro Hitam', 'baju5.jpg', '35.000', 'Baju hitam polos gambar samping enak dipakai', '20'),
(6, 'Baju Kaos Distro Strip Hitam Putih', 'baju6.jpg', '45.000', 'Baju nya ramah di pakai dan nyaman', '50'),
(7, 'Baju Kaos Distro Pink Gambar Tengah', 'baju7.jpg', '50.000', 'Bajuu nya nyaman Dipakai', '35'),
(8, 'Baju Kaos Distro Merah', 'baju8.jpg', '45.000', 'Baju nya nyaman Dipakai dan murah meriah', '30'),
(9, 'Baju Kaos Distro Hitam Bergambar Astronot', 'baju9.webp', '55.000', 'Baju nya bagus dan murah meriah', '35'),
(10, 'Baju Kaos Distro Biru Muda', 'baju10.jpg', '45.000', 'Bahan baju nya nyaman di pakai', '20');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `fashion`
--
ALTER TABLE `fashion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `fashion`
--
ALTER TABLE `fashion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
