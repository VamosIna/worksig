-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2019 at 10:19 PM
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
-- Database: `aesir`
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
(1, 'admin', 'admin');

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
-- Table structure for table `kabupaten`
--

CREATE TABLE `kabupaten` (
  `id_kab` int(11) NOT NULL,
  `nama_kab` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kabupaten`
--

INSERT INTO `kabupaten` (`id_kab`, `nama_kab`) VALUES
(1, 'Surabaya'),
(2, 'Ponorogo'),
(3, 'Trenggalek'),
(4, 'Tulungagung'),
(5, 'Blitar'),
(6, 'Kediri'),
(7, 'Malang'),
(8, 'Lumajang'),
(9, 'Jember'),
(10, 'Banyuwangi'),
(11, 'Bondowoso'),
(12, 'Situbondo'),
(13, 'Probolinggo'),
(14, 'Pasuruan'),
(15, 'Sidoarjo'),
(16, 'Mojokerto'),
(17, 'Jombang'),
(18, 'Nganjuk'),
(19, 'Madiun'),
(20, 'Magetan'),
(21, 'Ngawi'),
(22, 'Bojonegoro'),
(23, 'Tuban'),
(24, 'Lamongan'),
(25, 'Gresik');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'wahana'),
(2, 'taman'),
(3, 'alam'),
(4, 'sejarah'),
(5, 'kolam renang');

-- --------------------------------------------------------

--
-- Table structure for table `utama`
--

CREATE TABLE `utama` (
  `id_utama` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_kab` int(11) NOT NULL,
  `nama_utama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telepon` varchar(100) NOT NULL,
  `lat` varchar(100) NOT NULL,
  `long` varchar(100) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `gambar_utama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utama`
--

INSERT INTO `utama` (`id_utama`, `id_kategori`, `id_kab`, `nama_utama`, `alamat`, `telepon`, `lat`, `long`, `deskripsi`, `gambar_utama`) VALUES
(1, 1, 7, 'Jatim Park 1', 'Jl. Kartika No.2, Sisir, Kec. Batu, Kota Batu, Jawa Timur 65315', '0341597777', '-7.883858', '112.524778', 'Taman hiburan dengan wahana, tempat makan, &amp; pameran/pertunjukan budaya tradisional Indonesia.', 'gbr_utama1559011121.jpg'),
(2, 2, 1, 'Taman Bungkul', 'Jl. Taman Bungkul, Darmo, Kec. Wonokromo, Kota SBY, Jawa Timur 60241', '0341367749', '-7.291081', '112.740036', 'Sejak diresmikan pada 21 Maret 2007, Perkembangan Taman Bungkul semakin pesat. Salah satunya disebabkan sarana-sarana penunjang, seperti skateboard track dan BMX track, jogging track, plaza (panggung untuk live performance berbagai jenis entertainment), zona akses Wi-Fi gratis, telepon umum, area green park dengan kolam air mancur, taman bermain anak-anak hingga pujasera.', 'gbr_utama1559015810.png'),
(3, 3, 8, 'Gunung Semeru', 'Ngampo, Pasrujambe, Kabupaten Lumajang, Jawa Timur', '034127362728', '-8.107515', '112.922139', 'Gunung Semeru atau Gunung Meru adalah sebuah gunung berapi kerucut di Jawa Timur, Indonesia. Gunung Semeru merupakan gunung tertinggi di Pulau Jawa, dengan puncaknya Mahameru, 3.676 meter dari permukaan laut (mdpl)', 'gbr_utama1559016283.jpg'),
(4, 1, 7, 'Jatim Park 2', 'Jl. Oro-Oro Ombo No.9, Temas, Kec. Batu, Kota Batu, Jawa Timur 65315', '03415025777', '-7.889399', '112.528193', 'Jawa Timur Park 2 adalah pengembangan dari wahana Jawa Timur Park 1 yang berjarak satu kilometer dari Jawa Timur Park 2. Jawa Timur Park 2 berlokasi di Jalan Oro-Oro Ombo 9, Kota Batu. Keduanya berada di lereng Gunung Panderman yang merupakan gunung pemberi lanskap keindahan bagi Kota Batu. Luas taman wisata ini mencapai 15 hektar dengan 3 bangunan utama yaitu Museum Satwa, Batu Secret Zoo dan Pohon Inn. Jika Anda berkunjung, dari depan Anda akan disambut dengan Ferris Wheels atau kincir angin. Ferris Wheels ini memiliki diameter cukup panjang, yakni 30 meter, terbesar kedua di Indonesia setelah Jakarta. Jika Anda menaiki Kincir Raksasa ini Anda bisa menyaksikan keindahan Kota Wisata Batu dari ketinggian. Loket pembelian tiket masuk menyerupai akar pohon dan menjadi satu bersambung dengan gedung tinggi menyerupai pohon berwarna kecoklatan yang dijadikan Hotel Pohon Inn. Di sebelahnya lagi bangunan Batu Secret Zoo berwarna merah.', 'gbr_utama1559023824.jpg'),
(5, 1, 1, 'Jatim Park 3', 'Jl. Ir. Soekarno No.144, Beji, Kec. Junrejo, Kota Batu, Jawa Timur 65236', '03415103030', '-7.896789', '112.553809', 'Dinosaurus yang hidup di zaman pra sejarah dan hingga kini masih menjadi binatang raksasa bersejarah yang masih dipelajari kehidupannya. Dino park adalah tempat rekreasi untuk kembali mengulas zaman prasejarah dan berpetualang bersama binatang purba.\r\n\r\nDino park memiliki 17 zona yang berdiri diatas tanah seluas 17 hektar.\r\nBerbagai macam satwa prasejarah akan diulas dan dapat kalian pelajari dari tempat wisata ini. Bagian Dikategorikan untuk dapat mempermudah pengunjung dalam mempelajari bagian-bagiannya. Selain ulasan binatang purba juga terdapat wahana bermain anak yang sangat menarik dan dapat membuat pengunjung puas dalam menjelajahinya. Dino park beroperasional pada jam 11.00- 18.00 wib setiap harinya.\r\n\r\nApa saja zona-zona Dino Park Jatim Park 3 ini?\r\nMuseum dino. Di zona ini kita akan dikenalkan dengan 5 zaman pra sejarah. 5 zaman tersebut akan disajikan dalam bentuk film mengenai kehidupan diosaurus, cara mereka berinteraksi dengan dino lainnya selama mereka masih hidup. Pada zona ini terdapat fasilitas kereta raksasa yang yang dapat mengantar pengunjung berkeliling pada jelajah 5 zaman peremian sampai zaman ice age.', 'gambar_utama1559024330.jpg'),
(6, 2, 7, 'Kebun Teh Wonosari', 'Toyomarto Lawang, Bodean Putuk, Toyomarto, Kec. Singosari, Malang, Jawa Timur 65153', '08113637198', '-7.819883', '112.643470', 'Agrowisata Kebun Teh Wonosari Lawang Malang adalah sebuah kawasan perkebunan teh yang terletak 6 km dari Lawang atau 30 km utara Malang. Kebun Teh Wonosari ini berada pada ketinggian antara 950-1.250 MDPL sehingga tidak hanya menyajikan panorama yang indah namun juga hawa yang sejuk selayaknya angin di pegunungan. Wajar jika para wisatawan yang berkunjung betah berlama-lama di sini dan bahkan biasanya menginap di hotel yang telah disediakan oleh pengelola kebun teh.\r\n\r\nKebun Teh Wonosari Lawang malang yang memiliki luas area sekitar 1.144 hektar ini merupakan kebun teh pertama di Jawa Timur yang kemudian dijadikan tempat wisata. Di lokasi wisata ini, kita tidak hanya bisa menikmati hijaunya kebun teh yang terhampar indah, namun juga dapat mencoba beberapa fasilitas wisata seperti flying fox, berkuda, wall climb, paint ball dan fasilitas seru lainnya.', 'gbr_utama1559024844.jpg'),
(7, 1, 24, 'Bahari Lamongan', 'Jl. Raya Paciran, Paciran, Kabupaten Lamongan, Jawa Timur 62264', '0322666111', '-6.865466', '112.359927', 'Wisata Bahari Lamongan atau disingkat WBL adalah tempat wisata bahari yang terletak di Kecamatan Paciran, Kabupaten Lamongan, Jawa Timur. Tempat wisata ini dibuka sejak 14 November 2004. Wisata Bahari Lamongan dikelola oleh PT Bumi Lamongan Sejati, sebuah perusahaan patungan Pemkab Lamongan dengan PT Bunga Wangsa Sejati.', 'gbr_utama1559025252.jpg'),
(8, 1, 13, 'Arung Jeram Songa Probolinggo', 'Dusun Krajan 1, Condong, Gading, Probolinggo, Jawa Timur 67292', '0315910755', '-7.872440', '113.375803', 'deskripsi Songa Rafting diawali dengan letak basecamp utama di desa condong kec probolinggo, sedangkan sungai yang kita gunakan adalah Pekalen. Kota probolinggo memiliki daya tarik alam luar biasa dengan adanya gunung bromo dan beberapa sungai legendaris. penduduk kota probolinggo mayoritas menggunakan bahasa madura dalam bahasa sehari-hari mereka mengatakan “SONGAI” yang bermakna sungai atau Kali dalam istilah jawa inilah dasar dari pengertian songa . warga lokal menjadi prioritas tenaga kerja di kami, karena sebab itu di pilihlah kata Songa dengan nama terdaftar PT. Songa Alam Lestari\r\n\r\nSejauh ini Songa sebagai Provider Wisata Alam yang bergerak di bidang Rafting dan Outbound telah banyak mendatangkan pelanggan baik lokal maupun mancanegara. Tak di ragukan lagi standar pelayanan kami, karena setiap pemandu Rafting semua telah mengantongi izin dan bersertifikasi  FAJI (Federasi Arung Jeram Indonesia). Jadi tunggu apa lagi.. ayo ajak teman-teman, keluarga, rekan kantor untuk rafting di Songa.\r\nGoa kelalawar, Air terjun bidadari sebagai menu unggulan kami yang mungkin tak akan bisa di dapatkan di tempat lain kecuali hanya di Songa Rafting', 'gbr_utama1559025762.jpg'),
(9, 1, 6, 'Wisata Keluarga Gumul Paradise Island', 'Kompleks Simpang Lima Gumul, Sumberejo, Dadapan, Sumberejo, Kec. Ngasem, Kediri, Jawa Timur 64182', '0354671155', '-7.811607', '112.061169', 'Dewasa ini wisata air (water park) adalah wahana yang paling diminati oleh warga masyarakat sehingga hampir di setiap daerah, pemerintah setempat berusaha untuk mengembangkan salah satu jenis wisata tersebut, yang mana diharapkan bisa menjadi salah satu icon wisata daerah setempat dan sebagai kota tujuan wisata.\r\n\r\nBegitu juga dengan yang sedang di rintis Pemerintah Kabupaten Kediri saat ini yaitu, tempat wisata air dengan nama “ GUMUL PARADISE ISLAND” (GPI).. GPI design dan rancang sedemikian rupa sehingga diharapkan bisa menjadi salah satu wisata air terbaik di Jawa Timur dengan menawarkan berbagai macam wahana permainan seperti: Speed slide, body slide, kolam jamur, fun boomerang, kolam bak tumpah,flying fox dll. Selain itu juga disediakan fasilitas penunjang untuk keamanan dan kenyamanan pengunjung seperti: Toilet, Food Court, Musholla, Loker, giftmart dll.\r\n\r\nSelain tempat yang strategis dan terjangkau, GPI juga tidak mematok harga tiket yang mahal. Hal ini ditujukan supaya semua kalangan bisa menikmati wisata air ini, khususnya masyarakat Kediri dan wisatawan luar kota maupun wisatawan asing khususnya.', 'gbr_utama1559026128.jpg'),
(10, 1, 6, 'Kediri Waterpark', 'Jalan Raya Pagung, Desa Pagung, Semen, Kediri, Pagung, Semen, Kediri, Jawa Timur 64161', '085106251177', '-7.822523', '111.935538', 'Pada akhir-akhir ini, objek wisata air buatan sedang banyak dinikmati oleh para wisatawan. Pengunjung lebih memilih tempat wisata seperti ini, lantaran lokasi yang nyaman, aman, fasilitas pendukung standar internasional, lokasi wisata yang dekat tempat tinggal mereka dan strategis. Jawa Timur saat ini sedang gencar-gencarnya melakukan berbagai pembangunan wisata baru, terbukti semakin banyak bermunculan wisata air baru. Fasilitas wahana pun tidak tanggung-tanggung guna memberikan yang terbaik bagi pengunjungnya, yakni mampu bersaing di dalam negeri bahkan kancah internasional. Kabupaten Kediri memiliki tempat wisata air favorit yakni Kediri Waterpark Jawa Timur.', 'gbr_utama1559026404.png'),
(11, 1, 7, 'Batu Night Spectacular', 'Jalan Hayam Wuruk No.1, Oro-Oro Ombo, Kec. Batu, Kota Batu, Jawa Timur 65316', '03415025111', '-7.896484', '112.534500', 'Batu Night Spectacular atau BNS merupakan salah satu tujuan wisata favorit bagi para wisatawan yang ingin menikmati keindahan gemerlapnya lampu kota Malang di malam hari dari ketinggian. Terletak di dataran tinggi dengan hawa yang sejuk tentu akan semakin menambah kesempurnaan liburan Anda dengan keluarga atau orang terdekat.\r\n\r\nBNS merupakan objek pariwisata malam dengan konsep suasana hiburan keluarga yang terintegrasi memadukan konsep mall, market, permainan, sport dan hiburan dalam satu tempat dan ruang baru yang ada di daerah Oro-Oro Ombo. Batu Night Spectacular ingin menghidupkan suasana malam kota Batu dengan menghadirkan wahana-wahana yang spektakuler mulai dari wahana yang mengasyikan, menyeramkan, sampai wahana yang menantang yang siap menguji adrenalin Anda.', 'gbr_utama1559027358.jpg'),
(12, 1, 5, 'Wahana Koi Blitar', 'Jl. S. Supriadi No.76, Bendogerit, Sananwetan, Kota Blitar, Jawa Timur 66133', '085233369553', '-8.091424', '112.182958', 'Merupakan pusat pembelanjaan ikan koi di Blitar. Tersedia juga pakan ikan koi dan aksesoris akuarium ikan koi. Jam kerja / operasional: Senin: 8:00 AM - 5:00 PM, Selasa: 8:00 AM - 5:00 PM, Rabu: 8:00 AM - 5:00 PM, Kamis: 8:00 AM - 5:00 PM, Jumat: 8:00 AM - 5:00 PM, Sabtu: 8:00 AM - 5:00 PM, Minggu: Closed', 'gbr_utama1559028579.jpg'),
(13, 1, 2, 'Kintamani Waterpark', 'Krajan, Siman, Kabupaten Ponorogo, Jawa Timur', '081234191088', '-7.874662', '111.492127', 'Wisata Kintamani Waterpark di Ponorogo adalah salah satu tempat wisata yang berada  di Jl. Ki Ageng Kutu No.9, Desa Siman, Kecamatan Ponorogo, Kabupaten Ponorogo, Jawa Timur, Indonesia. Wisata Kintamani Waterpark di Ponorogo adalah tempat wisata yang ramai dengan wisatawan pada hari biasa maupun hari liburan. Tempat ini sangat indah dan bisa memberikan sensasi yangberbeda dengan aktivitas kita sehari hari. Wisata Kintamani Waterpark di Ponorogo memiliki pesona keindahan yang sangat menarik untuk dikunjungi. Sangat di sayangkan jika anda berada di kota Ponorogo tidak mengunjungi wisata Kintamani Waterpark di Ponorogo yang mempunyai keindahan yang tiada duanya tersebut. Wisata Kintamani Waterpark di Ponorogo sangat cocok untuk mengisi kegiatan liburan anda, apalagi saat liburan panjang seperti libur nasional, ataupun hari ibur lainnya.  Keindahan wisata Kintamani Waterpark di Ponorogo ini sangatlah baik bagi anda semua yang berada di dekat atau di kejauhan untuk merapat mengunjungi tempat wisata Kintamani Waterpark di kota Ponorogo. ', 'gbr_utama1559028968.jpg');

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
-- Indexes for table `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`id_kab`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

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
-- AUTO_INCREMENT for table `kabupaten`
--
ALTER TABLE `kabupaten`
  MODIFY `id_kab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `utama`
--
ALTER TABLE `utama`
  MODIFY `id_utama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
