-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Feb 2024 pada 02.41
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_poltekkes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

CREATE TABLE `tb_login` (
  `id_reg` int(11) NOT NULL,
  `username` varchar(28) NOT NULL,
  `password` varchar(27) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_reg`
--

CREATE TABLE `tb_reg` (
  `id_reg` int(11) NOT NULL,
  `username` varchar(28) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `no_hp` int(22) NOT NULL,
  `alamat` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(27) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_reg`
--

INSERT INTO `tb_reg` (`id_reg`, `username`, `no_hp`, `alamat`, `password`, `level`) VALUES
(1, 'Rika', 0, 'jl.seruni 6', '$2y$10$/.uEFpJf1j9OBL/e.sF6', 0),
(2, '', 0, '', '$2y$10$sWRNE7JuT6mw7/12e5i.', 0),
(3, 'Romi', 0, 'jl.macan lindungan', '$2y$10$vMcKrmpnTAEWzf7J07uQ', 0),
(4, 'Romi', 0, 'jl.macan lindungan', '$2y$10$tv1.rVIFeo43Vj2DTawA', 0),
(5, 'user', 0, 'jl.macan lindungan', '$2y$10$hLTwrZ5bsp5LP3zfwn8b', 0),
(6, 'user', 0, 'jl.macan lindungan', '$2y$10$WtaMqQmNCl7lrwNTqXUH', 0),
(7, 'user', 0, 'jl.macan lindungan', '$2y$10$RSK2FZBucgvysqrmrPrN', 0),
(8, '', 0, '', '$2y$10$4uTc9R.HTWmu9wT8EFie', 0),
(9, 'user', 0, 'jl.lunjuk', '$2y$10$ajFxFifUVXBtzj14BQ7F', 0),
(10, 'Maimunah', 0, '', '$2y$10$7Uh9AYIUU2XSysGpOu3n', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  ADD UNIQUE KEY `reg` (`id_reg`);

--
-- Indeks untuk tabel `tb_reg`
--
ALTER TABLE `tb_reg`
  ADD PRIMARY KEY (`id_reg`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_reg`
--
ALTER TABLE `tb_reg`
  MODIFY `id_reg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
