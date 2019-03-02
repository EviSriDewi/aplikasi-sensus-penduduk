-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 02. Maret 2019 jam 15:08
-- Versi Server: 5.5.16
-- Versi PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_sensuspenduduk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `person`
--

CREATE TABLE IF NOT EXISTS `person` (
  `id` char(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `region_id` varchar(25) NOT NULL,
  `address` varchar(100) NOT NULL,
  `income` varchar(50) NOT NULL,
  `created_ad` datetime NOT NULL,
  `created_by` varchar(30) NOT NULL,
  PRIMARY KEY (`region_id`,`created_by`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `person`
--

INSERT INTO `person` (`id`, `name`, `region_id`, `address`, `income`, `created_ad`, `created_by`) VALUES
('1', 'dwi', 'jakarta', 'jl. tb simatupang', '5000000', '2019-03-02 00:00:00', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `regions`
--

CREATE TABLE IF NOT EXISTS `regions` (
  `id` char(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` varchar(50) NOT NULL,
  PRIMARY KEY (`created_by`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `regions`
--

INSERT INTO `regions` (`id`, `name`, `created_at`, `created_by`) VALUES
('1', 'jakarta', '2019-03-02 00:00:00', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` char(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `created_at`) VALUES
('12345', 'qwerty@gmail.com', '12345', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
