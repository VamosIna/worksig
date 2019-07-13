-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2019 at 08:58 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wsig`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'ad', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id_gambar` int(11) NOT NULL,
  `nama_gambar` varchar(100) NOT NULL,
  `id_utama` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Working Space'),
(2, 'Coffee Shop'),
(3, 'Public Place'),
(4, 'Wifi Area'),
(5, 'Library');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kec` int(11) NOT NULL,
  `nama_kec` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id_kec`, `nama_kec`) VALUES
(1, 'Blimbing'),
(2, 'Klojen'),
(3, 'Kedungkandang'),
(4, 'Sukun'),
(5, 'Lowokwaru'),
(6, 'Batu'),
(7, 'Bumiaji'),
(8, 'Junrejo'),
(9, 'Ampelgading'),
(10, 'Bantur'),
(11, 'Bululawang'),
(12, 'Dampit'),
(13, 'Dau'),
(14, 'Donomulyo'),
(15, 'Gedangan'),
(16, 'Gondanglegi'),
(17, 'Jabung'),
(18, 'Kalipare'),
(19, 'Karangploso'),
(20, 'Kasembon'),
(21, 'Kepanjen'),
(22, 'Kromengan'),
(23, 'Lawang'),
(24, 'Ngajum'),
(25, 'Ngantang'),
(26, 'Pagak'),
(27, 'Pagelan'),
(28, 'Pakis'),
(29, 'Pakisaji'),
(30, 'Poncokusumo'),
(31, 'Sumbermanjing Wetan'),
(32, 'Singosari'),
(33, 'Sumberpucung'),
(34, 'Tajinan'),
(35, 'Tirtoyudo'),
(36, 'Tumpang'),
(37, 'Turen'),
(38, 'Wagir'),
(39, 'wajak'),
(40, 'Wonosari'),
(41, 'Pujon');

-- --------------------------------------------------------

--
-- Table structure for table `utama`
--

CREATE TABLE `utama` (
  `id_utama` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_kec` int(11) NOT NULL,
  `nama_utama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telepon` varchar(50) NOT NULL,
  `lat` varchar(100) NOT NULL,
  `long` varchar(100) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `gambar_utama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utama`
--

INSERT INTO `utama` (`id_utama`, `id_kategori`, `id_kec`, `nama_utama`, `alamat`, `telepon`, `lat`, `long`, `deskripsi`, `gambar_utama`) VALUES
(1, 1, 2, ' DiLo (Digital Lounge)', 'Jl. Jenderal Basuki Rahmat No.7-9, Kauman, Klojen', '08576168789', '112.629918', '-7.980256', 'sebuah Creative Camp yang dikembangkan oleh MIKTI bekerja sama dengan Telkom, sebagai pusat interaksi peminat dan pelaku industri kreatif digital di kota malang yang bertujuan menciptakan bibit-bibit Digital Preneur yang selanjutnya siap masuk ke industri (Creative Center). Didalam Creative Camp, komunitas kreatif digital akan diberikan pemahaman mengenai arah yang sebaiknya dilalui untuk masuk ke industri kreatif digital, termasuk arah sektor industri yang potensial untuk dijalani.', 'gambar_utama1562773915.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kec`);

--
-- Indexes for table `utama`
--
ALTER TABLE `utama`
  ADD PRIMARY KEY (`id_utama`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kec` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `utama`
--
ALTER TABLE `utama`
  MODIFY `id_utama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
