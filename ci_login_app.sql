-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jul 2021 pada 09.32
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_login_app`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `file`
--

CREATE TABLE `file` (
  `id` int(11) NOT NULL,
  `source` text DEFAULT NULL,
  `pertama` text DEFAULT NULL,
  `kedua` text DEFAULT NULL,
  `key` varchar(250) DEFAULT NULL,
  `k-gram` int(11) DEFAULT NULL,
  `basis` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `file`
--

INSERT INTO `file` (`id`, `source`, `pertama`, `kedua`, `key`, `k-gram`, `basis`) VALUES
(1, '', '', '', 'e48e8c8cc19ec289b438b90ec504a033', 5, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kedua`
--

CREATE TABLE `kedua` (
  `id` int(11) NOT NULL,
  `source` varchar(50) DEFAULT NULL,
  `key` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pertama`
--

CREATE TABLE `pertama` (
  `id` int(11) NOT NULL,
  `source` varchar(50) DEFAULT NULL,
  `key` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `source`
--

CREATE TABLE `source` (
  `id` int(11) NOT NULL,
  `source` varchar(50) DEFAULT NULL,
  `key` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama`, `foto`) VALUES
(7, 'alviandaniel01@gmail.com', '', 'Sajak Pendek ', 'https://lh3.googleusercontent.com/a-/AOh14Ggky3Bz7kJy1W0fJkRHBiULaR6I1il4H-06Q0r5=s96-c'),
(8, 'alviandaniel2109@gmail.com', '', 'Alvian Sinaga ', 'https://lh3.googleusercontent.com/a-/AOh14Gh7rY6RZSI1s1P7iglIF2kmO1f_7Ku8J3B8yYVfsg=s96-c');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_kedua`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_kedua` (
`id` int(11)
,`source` varchar(50)
,`key` varchar(250)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_pertama`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_pertama` (
`id` int(11)
,`source` varchar(50)
,`key` varchar(250)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_source`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_source` (
`id` int(11)
,`source` varchar(50)
,`key` varchar(250)
);

-- --------------------------------------------------------

--
-- Struktur untuk view `v_kedua`
--
DROP TABLE IF EXISTS `v_kedua`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_kedua`  AS SELECT `kedua`.`id` AS `id`, `kedua`.`source` AS `source`, `kedua`.`key` AS `key` FROM `kedua` GROUP BY `kedua`.`source` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_pertama`
--
DROP TABLE IF EXISTS `v_pertama`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_pertama`  AS SELECT `pertama`.`id` AS `id`, `pertama`.`source` AS `source`, `pertama`.`key` AS `key` FROM `pertama` GROUP BY `pertama`.`source` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_source`
--
DROP TABLE IF EXISTS `v_source`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_source`  AS SELECT `source`.`id` AS `id`, `source`.`source` AS `source`, `source`.`key` AS `key` FROM `source` GROUP BY `source`.`source` ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kedua`
--
ALTER TABLE `kedua`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pertama`
--
ALTER TABLE `pertama`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `source`
--
ALTER TABLE `source`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `file`
--
ALTER TABLE `file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kedua`
--
ALTER TABLE `kedua`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pertama`
--
ALTER TABLE `pertama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `source`
--
ALTER TABLE `source`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
