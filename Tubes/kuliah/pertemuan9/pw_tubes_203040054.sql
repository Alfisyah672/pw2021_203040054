-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Apr 2021 pada 19.14
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
(2, 'Baju Kaos Distro Navy', 'baju3.png', '50.000', 'Bahan nya adem', '10'),
(3, 'Baju Kaos Distro Hijau Gambar Orang Tua', 'baju1.png', '45.000', 'bahan kaos nya adem', '20'),
(4, 'Baju Kaos Distro Strip Merah', 'baju4.jpg', '50.000', 'bahan baju nya bagus dan enak di pakai', '15'),
(5, 'Baju Kaos Distro Hitam', 'baju5.jpg', '35.000', 'Baju hitam polos gambar samping enak dipakai', '20'),
(6, 'Baju Kaos Distro Strip Hitam Putih', 'baju6.jpg', '45.000', 'Baju nya ramah di pakai dan nyaman', '50'),
(7, 'Baju Kaos Distro Pink Gambar Tengah', 'baju7.jpg', '50.000', 'Bajuu nya nyaman Dipakai', '35'),
(8, 'Baju Kaos Distro Merah', 'baju8.jpg', '45.000', 'Baju nya nyaman Dipakai dan murah meriah', '30'),
(9, 'Baju Kaos Distro Hitam Bergambar Astronot', 'baju9.webp', '55.000', 'Baju nya bagus dan murah meriah', '35'),
(10, 'Baju Kaos Distro Biru Muda', 'baju10.jpg', '45.000', 'Bahan baju nya nyaman di pakai', '20'),
(29, 'Baju Kaos Distro Biru Bergambar', 'baju11.jpg', '50.000', 'baju nya nyaman dipakai dan bahan enak', '25'),
(32, 'Baju Kaos Distro Kuning Bergambar', 'baju12.jpg', '50.000', 'baju nya nyaman dipakai', '20'),
(33, 'Baju Lengan Panjang Abu - abu', 'baju13.jpg', '75.000', 'bahan baju nya lembut', '30'),
(34, 'Baju Kaos Distro Kuning', 'baju14.webp', '50.000', 'baju nya nyaman dipakai', '20'),
(35, 'Baju Lengan Panjang Putih Biru ', 'baju15.jpg', '75.000', 'bahan baju nya nyaman dipakai', '25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123'),
(8, 'bambang', '123456'),
(9, 'alfisyah', '$2y$10$QECy17dIQtlpDeMeyuPQP.lna8etRv704Tzh1hSD2bOkgjuUfPQpy'),
(10, 'subeno', '$2y$10$roj7AhrCC9/Pzup/bQhdv.x82V0CAn9aZsDrhE15eqIw.oAN1TnCS'),
(11, 'talita', '$2y$10$7/M4F1j2XDEMKF38zLm/9uaNxGTVnf8TZze75.R3403AkumIyHFTW');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `fashion`
--
ALTER TABLE `fashion`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `fashion`
--
ALTER TABLE `fashion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
