-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 12, 2020 at 01:30 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `waspas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_admin`) VALUES
(1, 'ironman', 'ironman', 'Herbalist');

-- --------------------------------------------------------

--
-- Table structure for table `tumbuhan_obat`
--

CREATE TABLE `tumbuhan_obat` (
  `id_tumbuhan` int(11) NOT NULL,
  `nama_tumbuhan` varchar(255) NOT NULL,
  `khasiat` varchar(255) NOT NULL,
  `cara_pengolahan` varchar(255) NOT NULL,
  `cara_penggunaan` varchar(255) NOT NULL,
  `bagian_tumbuhan` varchar(255) NOT NULL,
  `jenis_tumbuhan` varchar(255) NOT NULL,
  `latin` varchar(255) DEFAULT NULL,
  `famili` varchar(255) DEFAULT NULL,
  `resep` text,
  `gambar` varchar(255) DEFAULT NULL,
  `qi` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tumbuhan_obat`
--

INSERT INTO `tumbuhan_obat` (`id_tumbuhan`, `nama_tumbuhan`, `khasiat`, `cara_pengolahan`, `cara_penggunaan`, `bagian_tumbuhan`, `jenis_tumbuhan`, `latin`, `famili`, `resep`, `gambar`, `qi`) VALUES
(444, 'Sungkai', 'Gatal', 'Direbus', 'Diminum', 'Daun', 'Pohon', 'Peronema Canescens Jeck', 'Verbenaceae', NULL, NULL, 2.16429),
(445, 'Pisang', 'Luka Luar', 'Langsung', 'Dioleskan', 'Getah', 'Pohon', 'Musa Paradisiaca L.', 'Musaceae ', NULL, NULL, 1.81189),
(446, 'Nangka', 'Bisul', 'Dibakar', 'Dioleskan', 'Daun', 'Pohon', 'Artocarpus Heterophyllus Hiern', 'Moraceae ', NULL, NULL, 2.12131),
(447, 'Kelor', 'Luka Luar', 'Ditumbuk', 'Ditempel', 'Daun', 'Pohon', 'Moringa Oleifera', 'Moringaceae', NULL, NULL, 2.32422),
(448, 'Murbei ', 'Bisul', 'Direbus', 'Diminum', 'Daun', 'Pohon', 'Morus Alba L.', 'Moraceae', NULL, NULL, 2.14965),
(449, 'Akar letop', 'Kurap', 'Direbus', 'Dimakan', 'Daun', 'Pohon', 'Physalis Angulata L.', 'Solanaceae', NULL, NULL, 2.21162),
(450, 'Sahang Burung', 'Kurap', 'Ditumbuk', 'Ditempel', 'Daun', 'Pohon', 'Brucea Javanica L. Merr', 'Simaraoubaceae', NULL, NULL, 2.5),
(451, 'Asam kandis', 'Bisul', 'Langsung', 'Dimakan', 'Buah', 'Pohon', 'Garcinia Atrovorodos', 'Clusiaceae', NULL, NULL, 1.61695),
(452, 'Jarikng/ jengkol', 'Gatal', 'Direbus', 'Mandi', 'Daun', 'Pohon', 'Archidendron Jiringa', 'Fabaceae', NULL, NULL, 2.09773),
(453, 'Kelapa ', 'Biduran ', 'Langsung', 'Diminum', 'Buah', 'Pohon', 'Cocos Nucifera', 'Arecaceae', NULL, NULL, 1.89518),
(454, 'Hambin buah/meniran', 'Panu', 'Direbus', 'Diminum', 'Daun', 'Pohon', 'Phyllanthus Urinaria Linn', 'Euphorbiaceae', NULL, NULL, 2.14965),
(455, 'Pucuk putat/ butun', 'Gatal', 'Ditumbuk', 'Dioleskan', 'Daun', 'Pohon', 'Barringtonia Acuatangula L.', 'Lecythidaceae', NULL, NULL, 2.32422),
(456, 'Madang ', 'Luka Luar', 'Ditumbuk', 'Ditempel', 'Daun', 'Pohon', 'Listea sp', 'Lauraceae ', NULL, NULL, 2.32422),
(457, 'Sirsak', 'Bisul', 'Ditumbuk', 'Ditempel', 'Daun', 'Pohon', 'Annona Muricata, Linn.', 'Annonaceae', NULL, NULL, 2.32422),
(458, 'Mengkudu', 'Eksim', 'Langsung', 'Dioleskan', 'Kulit Batang', 'Pohon', 'Morinda Citrifolia', 'Rubiaceae', NULL, NULL, 1.76915),
(459, 'Salam ', 'Kudis', 'Ditumbuk', 'Ditempel', 'Daun', 'Pohon', 'Syzygium Polyanthum', 'Myrtaceae ', NULL, NULL, 2.32422),
(460, 'Jeruk Nipis', 'Jerawat', 'Langsung', 'Dioleskan', 'Buah', 'Pohon', 'Cirus Aurantifolia', 'Rutaceae', NULL, NULL, 1.81189),
(461, 'Asam', 'Biduran', 'Direbus', 'Diminum', 'Buah', 'Pohon', 'Tamarindus Indica L.', 'Caesalpiniaceae', NULL, NULL, 1.92417),
(462, 'Gulinggang/Ketepeng', 'Panu', 'Ditumbuk', 'Dioleskan', 'Daun', 'Perdu', 'Senna Alata L. Roxb', 'Leguminosae-Caes', NULL, NULL, 2.47844),
(463, 'Lirik', 'Luka Luar', 'Ditumbuk', 'Ditempel', 'Daun', 'Perdu', 'Stachiphrynium Borneensis Ridl.', 'Marantbaceae', NULL, NULL, 2.5),
(464, 'Bungur Kecil', 'Bisul', 'Direbus', 'Diminum', 'Akar', 'Perdu', 'Lagerstroemia Indica L.', 'Lythraceae', NULL, NULL, 1.94306),
(465, 'Kunyit', 'Gatal', 'Diparut', 'Dioleskan', 'Rimpang', 'Perdu', 'Curcuma Domestica', 'Zingiberaceae', NULL, NULL, 1.95573),
(466, 'Daun cengkodok', 'Luka Luar', 'Ditumbuk', 'Ditempel', 'Daun', 'Perdu', 'Melastome Candidum', 'Melastomataceae', NULL, NULL, 2.5),
(467, 'Sambung nyawo', 'Bisul', 'Ditumbuk', 'Ditempel', 'Daun', 'Perdu', 'Gynura Procumbens', 'Asteraceae', NULL, NULL, 2.5),
(468, 'Patah tulang', 'Bisul', 'Langsung', 'Ditempel', 'Getah', 'Perdu', 'Euphorbia Tirucalli', 'Euphorbiaceae', NULL, NULL, 2.00923),
(469, 'Patah tulang', 'Kutil', 'Langsung', 'Ditempel', 'Getah', 'Perdu', 'Euphorbia Tirucalli', 'Euphorbiaceae', NULL, NULL, 2.40927),
(470, 'Sabambelum/cocor bebek', 'Borok', 'Ditumbuk', 'Dioleskan', 'Daun', 'Perdu', 'Kalanchoe Pinnata Lamk', 'Crassulaceae', NULL, NULL, 2.47844),
(471, 'Gude', 'Kudis ', 'Ditumbuk', 'Dioleskan', 'Daun', 'Perdu', 'Cajanus Cajan L. Millsp.', 'Fabaceae ', NULL, NULL, 2.47844),
(472, 'Lidah buaya', 'Luka Bakar', 'Ditumbuk', 'Ditempel', 'Daun', 'Perdu', 'Aloe Vera', 'Xanthorrhoeaceae ', NULL, NULL, 2.5),
(473, 'Daun dewa', 'Luka Luar', 'Ditumbuk', 'Dioleskan', 'Daun', 'Perdu', 'Gynura Segetum L.', 'Asteraceae ', NULL, NULL, 2.47844),
(474, 'Mulwo', 'Bisul', 'Ditumbuk', 'Ditempel', 'Daun', 'Perdu', 'Annona Reticulata L.', 'Annonaceae', NULL, NULL, 2.5),
(475, 'Pandan', 'Ketombe', 'Ditumbuk', 'Dioleskan', 'Daun', 'Perdu', 'Pandanus', 'Pandanaceae', NULL, NULL, 2.5),
(476, 'Tuntung uhat', 'Luka Luar', 'Ditumbuk', 'Dioleskan', 'Daun', 'Perdu', 'Gynura procumbens', 'Asteraceae', NULL, NULL, 2.47844),
(477, 'Uduk-uduk /Karamunting', 'Luka Bakar', 'Ditumbuk', 'Dioleskan', 'Daun', 'Perdu', 'Melastoma Malabathricum L.', 'Melastomataceae', NULL, NULL, 2.47844),
(478, 'Kapas Rampit', 'Gatal', 'Ditumbuk', 'Dioleskan', 'Daun', 'Perdu', 'Gossypium Acuminatum Roxb', 'Malvaceae', NULL, NULL, 2.5),
(479, 'Tampar antu /lidah mertua', 'Gatal', 'Ditumbuk', 'Dioleskan', 'Daun', 'Perdu', 'Sansevieria Trifasciata', 'Asparagaceae ', NULL, NULL, 2.5),
(480, 'Kembang melati', 'Jerawat', 'Ditumbuk', 'Dioleskan', 'Bunga', 'Perdu', 'Jasminum Sambac', 'Oleaceae', NULL, NULL, 2.00755),
(481, 'Kelor', 'Biduran', 'Direbus', 'Diminum', 'Daun', 'Perdu', 'Moringa Oleifera, Lamk.', 'Moringaceae', NULL, NULL, 2.5),
(482, 'Kecubung', 'Eksim', 'Ditumbuk', 'Dioleskan', 'Daun', 'Perdu', 'Datura Metel, Linn.', 'Solanaceae', NULL, NULL, 2.47844),
(483, 'Kayu Putih', 'Luka Luar', 'Ditumbuk', 'Ditempel', 'Kulit Batang', 'Perdu', 'Melaleuca Leucadendrom, Linn.', 'Myrtaceae', NULL, NULL, 2.05722),
(484, 'Kayu Gambir', 'Luka Bakar', 'Ditumbuk', 'Ditempel', 'Daun', 'Perdu', 'Clerodendrum Calamitosum, Linn.', 'Verbenaceae', NULL, NULL, 2.5),
(485, 'Kamboja', 'Bisul', 'Langsung', 'Dioleskan', 'Getah', 'Perdu', 'Plumeria Acuminata, W.T.Ait.', 'Apocynaceae', NULL, NULL, 1.98767),
(486, 'Mimba', 'Eksim', 'Direbus', 'Mandi', 'Kulit Batang', 'Perdu', 'Azadirachta Indica', 'Meliaceae', NULL, NULL, 1.81988),
(487, 'Kembang Sepatu Sungsang', 'Bisul', 'Ditumbuk', 'Ditempel', 'Daun', 'Perdu', 'Hibiscus schizopetalus', 'Malvaceae', NULL, NULL, 2.5),
(488, 'Waru Landak', 'Bisul', 'Ditumbuk', 'Dioleskan', 'Daun', 'Perdu', 'Hibiscus Mutabilis L.', 'Malvaceae ', NULL, NULL, 2.47844),
(489, 'Salvia', 'Bisul', 'Ditumbuk', 'Ditempel', 'Daun', 'Perdu', 'Salviasplendens Ker-Gawl.', 'Lamiaceae', NULL, NULL, 2.5),
(490, 'Ulur-ulur', 'Luka Bakar', 'Langsung', 'Dioleskan', 'Batang', 'Liana', 'Tetrastigma sp.', 'Vitaceae', NULL, NULL, 1.50677),
(491, 'Akar Sampai', 'Luka Luar', 'Direbus', 'Diminum', 'Akar', 'Liana', 'Tinospora Crispa Miers', 'Menispermaceae', NULL, NULL, 1.5049),
(492, 'Binahong ', 'Jerawat', 'Ditumbuk', 'Ditempel', 'Daun', 'Liana', 'Anredera Cordifilia', 'Basellaceae', NULL, NULL, 2.06184),
(493, 'Sirih ', 'Jerawat', 'Direbus', 'Ditempel', 'Daun', 'Liana', 'P. Betle', 'Piperaceae', NULL, NULL, 1.98995),
(494, 'Kelubut/Kemot', 'Luka Luar', 'Ditumbuk', 'Ditempel', 'Daun', 'Liana', 'Passiflora Foetida L.', 'Passifloraceae', NULL, NULL, 2.06184),
(495, 'Tanduk Rusa', 'Bisul', 'Ditumbuk', 'Ditempel', 'Daun', 'Liana', 'Paltycerium Coronarium', 'Polypodiaceae', NULL, NULL, 2.06184),
(496, 'Paku uban', 'Luka Luar', 'Ditumbuk', 'Ditempel', 'Getah', 'Semak', 'Nephrolepis Biserrata', 'Davalliaceae', NULL, NULL, 1.82554),
(497, 'Rasam', 'Luka Luar', 'Ditumbuk', 'Ditempel', 'Daun', 'Semak', 'Gleichenia Linearis', 'Gleicheniaceae', NULL, NULL, 2.22558),
(498, 'Pakis kubuk', 'Luka Luar', 'Ditumbuk', 'Dioleskan', 'Daun', 'Semak', 'Polypodium Verrucosum', 'Polypodiaceae ', NULL, NULL, 2.20402),
(499, 'Beriwit/Rumput Banjan', 'Luka Luar', 'Ditumbuk', 'Dioleskan', 'Batang', 'Semak', 'Paspalum Conjugatum Berggr', 'Gramineae', NULL, NULL, 1.76124),
(500, 'Pegagan ', 'Luka Luar', 'Ditumbuk', 'Ditempel', 'Daun', 'Semak', 'Centella Asiatica', 'Apiaceae ', NULL, NULL, 2.22558),
(501, 'Keladi ', 'Luka Luar', 'Langsung', 'Dioleskan', 'Batang', 'Semak', 'Colocasia sp.', 'Araceae ', NULL, NULL, 1.67052),
(502, 'Katuk ', 'Borok', 'Ditumbuk', 'Ditempel', 'Daun', 'Semak', 'Sauropus Androgynous L.', 'Euphorbiaceae', NULL, NULL, 2.22558),
(503, 'Katuk ', 'Bisul', 'Ditumbuk', 'Ditempel', 'Daun', 'Semak', 'Sauropus Androgynous L.', 'Euphorbiaceae', NULL, NULL, 2.22558),
(504, 'Bunga Landak', 'Luka Luar', 'Ditumbuk', 'Ditempel', 'Akar', 'Semak', 'Barleria Prionitis L.', 'Acanthaceae', NULL, NULL, 1.84321),
(505, 'Pulutan', 'Bisul', 'Langsung', 'Ditempel', 'Bunga', 'Semak', 'Urena Lobata Linn', 'Malvaceae', NULL, NULL, 1.66395),
(506, 'Tambura ', 'Luka Luar', 'Direbus', 'Diminum', 'Akar', 'Semak', 'Ageratum Conyzoides L.', 'Asteraceae', NULL, NULL, 1.66864),
(507, 'Ciplukan', 'Borok', 'Ditumbuk', 'Ditempel', 'Daun', 'Semak', 'Physalis Minina, Linn.', 'Solanaceae', NULL, NULL, 2.22558),
(508, 'Akar Tuba', 'Kudis', 'Direbus', 'Mandi', 'Daun', 'Semak', 'Derris Elliptica (Wall.) Benth', 'Fabaceae', NULL, NULL, 1.98824),
(509, 'Ahiok/ jahe', 'Eksim', 'Diparut', 'Dioleskan', 'Rimpang', 'Herba', 'Zingiber Officinale', 'Zingiberaceae', NULL, NULL, 1.65975),
(510, 'Angkok/ lengkuas', 'Panu', 'Ditumbuk', 'Ditempel', 'Rimpang', 'Herba', 'A. Galanga', 'Zingiberaceae', NULL, NULL, 1.82554),
(511, 'Bawang merah', 'Kutil', 'Ditumbuk', 'Dioleskan', 'Rimpang', 'Herba', 'Allium Cepa L', 'Amarylilidaceae ', NULL, NULL, 2.20402),
(512, 'Malakos ', 'Luka Luar', 'Ditumbuk', 'Diminum', 'Daun', 'Herba', 'Ageratum Conyzoides L.', 'Asteraceae ', NULL, NULL, 2.12289),
(513, 'Tabat Barito', 'Luka Bakar', 'Direbus', 'Diminum', 'Daun', 'Herba', 'Ficus Deltoidea Jack', 'Moraceae', NULL, NULL, 2.05101),
(514, 'Rumput Taiwan', 'Bisul', 'Ditumbuk', 'Ditempel', 'Daun', 'Herba', 'Murdannia Bracteata', 'Commelinaceae', NULL, NULL, 2.22558),
(515, 'Kembang Pukul Empat', 'Jerawat', 'Ditumbuk', 'Dioleskan', 'Buah', 'Herba', 'Mirabilis Jalapa L.', 'Nyctaginaceae', NULL, NULL, 1.80398),
(516, 'Kangkung', 'Eksim', 'Ditumbuk', 'Ditempel', 'Daun', 'Herba', 'Ipomoea Aquatica', 'Convolvulaceae', NULL, NULL, 2.22558),
(517, 'Jukut Pendul', 'Gatal', 'Direbus', 'Mandi', 'Daun', 'Herba', 'Kyllinga Brevifolia Rottb.', 'Cyperaceae', NULL, NULL, 1.99909),
(518, 'Wortel', 'Eksim', 'Diparut', 'Diminum', 'Rimpang', 'Herba', 'Daucus Carota, Linn.', 'Apiaceae', NULL, NULL, 1.57862),
(519, 'Blustru', 'Bisul', 'Direbus', 'Mandi', 'Akar', 'Herba', 'Luffa Cylindria L. Roem.', 'Cucurbitaceae', NULL, NULL, 1.60587),
(520, 'Iler', 'Borok', 'Ditumbuk', 'Ditempel', 'Daun', 'Herba', 'Coleus Scutellarioides L. Benth', 'Lamiaceae', NULL, NULL, 2.22558),
(521, 'Jombang', 'Luka Bakar', 'Ditumbuk', 'Dioleskan', 'Akar', 'Herba', 'Taraxacum Officinsle Weber et Wiggers', 'Asteraceae', NULL, NULL, 1.82165);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tumbuhan_obat`
--
ALTER TABLE `tumbuhan_obat`
  ADD PRIMARY KEY (`id_tumbuhan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tumbuhan_obat`
--
ALTER TABLE `tumbuhan_obat`
  MODIFY `id_tumbuhan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=522;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
