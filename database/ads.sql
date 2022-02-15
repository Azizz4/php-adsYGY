-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Agu 2021 pada 11.59
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ads`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking`
--

CREATE TABLE `booking` (
  `id` int(20) NOT NULL,
  `check_in` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  `penanggung` varchar(20) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `kategories_room` varchar(20) NOT NULL,
  `total` varchar(20) NOT NULL,
  `pembayaran` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `booking`
--

INSERT INTO `booking` (`id`, `check_in`, `time`, `penanggung`, `no_telepon`, `kategori`, `kategories_room`, `total`, `pembayaran`) VALUES
(18, '2021-05-12', '1', 'alvan', '07564524523', 'Adult', 'Reguler', '400000', 'Done'),
(19, '2021-05-31', '1', 'kunuy', '08642945234', 'Couple', 'Reguler', '400000', ''),
(20, '2021-05-27', '4', 'aasdfdaf', '089875767465', 'Family', 'Reguler', '1600000', ''),
(21, '2021-06-17', '3', 'ftyu', '343213234', 'Family', 'Reguler', '1200000', ''),
(22, '2021-06-17', '3', 'Alganteng', '0831312365', 'Couple', 'VIP', '2400000', ''),
(23, '2021-06-23', '4', 'alganteng', '0879324523', 'Couple', 'VIP', '3200000', ''),
(24, '2021-06-18', '2', 'algan', '0356895643', 'Couple', 'Reguler', '800000', ''),
(25, '2021-06-18', '2', 'Futar', '3489325443', 'Couple', 'Reguler', '800000', ''),
(26, '2021-06-17', '2', 'alvan', '08534239', 'Couple', 'Reguler', '800000', ''),
(29, '2021-08-04', '2', 'dasdasds', '9786757867', 'Family', 'Reguler', '800000', ''),
(30, '2021-08-10', '2', 'alvan', '234215113423', 'Family', 'Reguler', '800000', ''),
(31, '2021-08-10', '2', 'alvan', '234215113423', 'Family', 'Reguler', '800000', 'Note yet'),
(32, '2021-08-05', '3', 'sdsad', '435245', 'Couple', 'Reguler', '1200000', 'Done'),
(33, '2021-08-10', '2', 'alvan', '04585353453', 'Couple', 'Reguler', '800000', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `no_telepon`, `feedback`) VALUES
(3, 'Alvan Fathurahman', 'fathuralvan28@gmail.com', '08594760520', 'sadkjlasdkjsadhafhk'),
(4, 'Muhamad Syahril Aziz', 'syahrilazis2005@gmail.com', '08568882962', 'test'),
(5, 'Kunuy', 'Kunuy kang daging', '02378787197189', 'LOL'),
(6, 'Alvan', 'alvanfathur@gmail.com', '0813243242423', 'dasfdfasfas'),
(7, 'alvan', 'palabapak@gmail.com', '0343284934', 'afdsfgdgasgdsfdsafs'),
(8, 'asldsda', 'alvan@gmail.com', '0639542', 'aldafsdfafsdfas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(7, 'aziz', '$2y$10$rTbohkRS0VXTuCyyB0M7Duiy9YblEVv0Wv/ZVvJ0kTzeSDDEDUQli'),
(11, 'alvan', '$2y$10$VBimtpzWCqALYLtxRNaSduCyF2CyH9xUtD1aAe8BI4LfHYF3DFV8.'),
(12, 'dimas', '$2y$10$xwaVdpiD5KDD6xaDmC.wFOq55VmJHp5V7TwHuA49RMDwZE5/yQ7.S');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
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
-- AUTO_INCREMENT untuk tabel `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
