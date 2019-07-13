-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13 Jul 2019 pada 14.22
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'ad', 'a'),
(2, 'admin', '12345');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar`
--

CREATE TABLE `gambar` (
  `id_gambar` int(11) NOT NULL,
  `nama_gambar` varchar(100) NOT NULL,
  `id_utama` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Working Space'),
(2, 'Coffee Shop'),
(3, 'Public Place'),
(4, 'Wifi Area'),
(5, 'Library');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kec` int(11) NOT NULL,
  `nama_kec` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kecamatan`
--

INSERT INTO `kecamatan` (`id_kec`, `nama_kec`) VALUES
(1, 'Kota Malang'),
(2, 'Kota Batu'),
(3, 'Kabupaten Malang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `utama`
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
-- Dumping data untuk tabel `utama`
--

INSERT INTO `utama` (`id_utama`, `id_kategori`, `id_kec`, `nama_utama`, `alamat`, `telepon`, `lat`, `long`, `deskripsi`, `gambar_utama`) VALUES
(3, 1, 1, 'Dilo (digital Lounge)', 'Jl. Jenderal Basuki Rahmat No.7-9, Kauman, Klojen', '(0341) 365700', '-7.980256', '112.629918', 'Digital Innovation Lounge, bertempat di Jl. Basuki Rahmad 7-9, Malang, Dilo (Digital Inovation Lounge) sebuah Creative Camp yang dikembangkan oleh MIKTI bekerja sama dengan Telkom, sebagai pusat interaksi peminat dan pelaku industri kreatif digital di kota malang yang bertujuan menciptakan bibit-bibit Digital Preneur yang selanjutnya siap masuk ke industri (Creative Center). Didalam Creative Camp, komunitas kreatif digital akan diberikan pemahaman mengenai arah yang sebaiknya dilalui untuk masuk ke industri kreatif digital, termasuk arah sektor industri yang potensial untuk dijalani.', 'gambar_utama1562988529.jpg'),
(4, 1, 1, 'Ngalup.co	', 'Jl. Sudimoro, Mojolangu, Kec. Lowokwaru, Kota Malang	 ', '(0341) 365700', '-7.930921', '112.627469', 'NGALUP.co', 'gambar_utama1562989187.jpg'),
(5, 1, 1, 'Ruang-Perintis.co', 'Jl. Candi Sawentar, Mojolangu, Kec. Lowokwaru, Kota Malang', '(0341) 365700', '-7.940963', '112.625186', 'Ruang-Perintis.co,&quot;Jl. Candi Sawentar, Mojolangu, Kec. Lowokwaru, Kota Malang&quot;,&quot;-7.940963, 112.625186&quot;,', 'gambar_utama1562989693.jpg'),
(6, 1, 1, 'Malang Digital Core', 'RnD 5th Floor, Ma Chung University, N-1,, Villa Puncak Tidar', '(0341) 365700', '-7.957425', '112.589666', '4,Malang Digital Core,&quot;RnD 5th Floor, Ma Chung University, N-1,, Villa Puncak Tidar&quot;,&quot;-7.957425, 112.589666&quot;,', 'gambar_utama1562991984.jpg'),
(7, 1, 1, 'Atlesta Corporate Office', 'Jl. Manggis No.02, Bareng, Klojen, Kota Malang', '(0341) 365700', '-7.974764', '112.616816', 'Atlesta Corporate Office,&quot;Jl. Manggis No.02, Bareng, Klojen, Kota Malang&quot;,&quot;-7.974764, 112.616816&quot;,', 'gambar_utama1562992413.jpg'),
(8, 1, 1, 'Retas.co ', 'Ruko De Castello, Jl. Simpang Sulfat Selatan No.3, Pandanwangi, Kec. Blimbing ', '(0341) 365700', '-7.963917', ' 112.654376', 'Retas.co Ruko De Castello, Jl. Simpang Sulfat Selatan No.3, Pandanwangi, Kec. Blimbing -7.963917, 112.654376', 'gambar_utama1563013739.png'),
(9, 2, 1, 'GartenHouse co 	', 'Jl. Kenanga Indah No.1, Jatimulyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141', '(0341) 365700', '-7.935234', '112.611936', 'GartenHouse co Jl. Kenanga Indah No.1, Jatimulyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141	-7.935234, 112.611936', 'gambar_utama1563013875.jpg'),
(10, 2, 1, 'Kozi 7.0	', 'Jl. Opak No.2, Bunulrejo, Kec. Blimbing, Kota Malang, Jawa Timur 65126	', '(0341) 365700', '-7.960721', '112.639675', 'Kozi 7.0	Jl. Opak No.2, Bunulrejo, Kec. Blimbing, Kota Malang, Jawa Timur 65126	-7.960721, 112.639675', 'gambar_utama1563014613.jpg'),
(11, 2, 1, '7Chicken	', 'Komplek Ruko Grand Sukarno Hatta, Jl. Soekarno Hatta Kota Malang, Jawa Timur 65142	', '(0341) 365700', '-7.939340', '112.631673', '7Chicken	Komplek Ruko Grand Sukarno Hatta, Jl. Soekarno Hatta Kota Malang, Jawa Timur 65142	-7.939340, 112.631673', 'gambar_utama1563019740.jpg'),
(12, 2, 1, 'Urban Cafe &amp; Co-working	', 'Jl. Mayjend. Panjaitan No.176, Penanggungan, Klojen, Kota Malang, Jawa Timur 65113	', '(0341) 365700', '-7.952310', '112.618407', 'Urban Cafe &amp; Co-working	Jl. Mayjend. Panjaitan No.176, Penanggungan, Klojen, Kota Malang, Jawa Timur 65113	-7.952310, 112.618407', 'gambar_utama1563019916.jpg'),
(13, 2, 1, 'Paradox coffe	', 'Jl. Sudimoro, Mojolangu, Kec. Lowokwaru, Kota Malang, Jawa Timur 65142	', '(0341) 365700', '-7.933294', '112.629795', 'Paradox coffe	Jl. Sudimoro, Mojolangu, Kec. Lowokwaru, Kota Malang, Jawa Timur 65142	-7.933294, 112.629795', 'gambar_utama1563020047.jpg'),
(14, 2, 1, 'Beryl.coffee	', 'Jl. Tawangmangu No.21, Lowokwaru, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141	', '(0341) 365700', '-7.961210', '112.631294', 'Beryl.coffee	Jl. Tawangmangu No.21, Lowokwaru, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141	-7.961210, 112.631294', 'gambar_utama1563020130.jpg'),
(15, 2, 1, '8oz coffee studio	', 'Jl. Citandui No.74, Purwantoro, Kec. Blimbing, Kota Malang, Jawa Timur 65122	', '(0341) 365700', '-7.957067', '112.643356', '8oz coffee studio	Jl. Citandui No.74, Purwantoro, Kec. Blimbing, Kota Malang, Jawa Timur 65122	-7.957067, 112.643356', 'gambar_utama1563020226.jpg'),
(16, 2, 1, 'kara.cr	', 'Jl. Candi Mendut VI No.36, Mojolangu, Kec. Lowokwaru, Kota Malang, Jawa Timur 65142	', '(0341) 365700', '-7.940242	', '112.631755', 'kara.cr	Jl. Candi Mendut VI No.36, Mojolangu, Kec. Lowokwaru, Kota Malang, Jawa Timur 65142	-7.940242, 112.631755	', 'gambar_utama1563020280.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
  MODIFY `id_kec` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `utama`
--
ALTER TABLE `utama`
  MODIFY `id_utama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
