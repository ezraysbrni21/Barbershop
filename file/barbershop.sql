-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2022 at 08:36 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barbershop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(20) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id_appointment` int(20) NOT NULL,
  `tanggal_appointment` date NOT NULL,
  `waktu` time NOT NULL,
  `status` varchar(45) NOT NULL,
  `biaya_appoinment` varchar(45) NOT NULL,
  `notifikasi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(225) CHARACTER SET latin1 DEFAULT NULL,
  `deskripsi` varchar(500) CHARACTER SET latin1 DEFAULT NULL,
  `harga_beli` int(11) DEFAULT NULL,
  `gambar_produk` varchar(500) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama_produk`, `deskripsi`, `harga_beli`, `gambar_produk`) VALUES
(1, 'Masker', 'Masker Wajah', 29, '625-masker.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE `coupon` (
  `id_coupon` int(20) NOT NULL,
  `nama_coupon` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(20) NOT NULL,
  `user_id` bigint(45) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `user_id`, `user_name`, `password`) VALUES
(0, 9223372036854775807, '0', 'yuniar'),
(0, 764085785917331, 'gabi', 'abcdef');

-- --------------------------------------------------------

--
-- Table structure for table `customer_has_layanan`
--

CREATE TABLE `customer_has_layanan` (
  `id_customer` int(20) NOT NULL,
  `id_appointment` int(20) NOT NULL,
  `id_layanan` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer_has_produk`
--

CREATE TABLE `customer_has_produk` (
  `id_customer` int(20) NOT NULL,
  `id_produk` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `pekerjaan` varchar(100) NOT NULL,
  `deskripsi_pekerjaan` varchar(200) NOT NULL,
  `gaji` int(11) NOT NULL,
  `gambar` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`pekerjaan`, `deskripsi_pekerjaan`, `gaji`, `gambar`) VALUES
('Potong Rambut', 'Memotong rambut', 1000000, 'pr.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi`
--

CREATE TABLE `konfirmasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal_waktu` datetime NOT NULL,
  `layanan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id_layanan` int(20) NOT NULL,
  `jenis_layanan` varchar(45) NOT NULL,
  `deskripsi_layanan` varchar(200) NOT NULL,
  `harga_layanan` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id_order` int(20) NOT NULL,
  `tanggal_order` datetime NOT NULL,
  `jumlah_produk` int(20) NOT NULL,
  `total_harga` varchar(45) NOT NULL,
  `notifikasi` varchar(200) NOT NULL,
  `id_customer` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(20) NOT NULL,
  `nama_produk` varchar(45) NOT NULL,
  `deskripsi_produk` varchar(200) NOT NULL,
  `harga_produk` varchar(45) NOT NULL,
  `stok` varchar(45) NOT NULL,
  `gambar` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `deskripsi_produk`, `harga_produk`, `stok`, `gambar`) VALUES
(1001, 'Tata Pomade', 'Tata pomade merupakan produk styling rambut Water Base.\r\nPomade ini merupakan varian yang diperuntukkan pada rambut\r\nberketombe. Selain itu pomade ini mudah untuk dibersihkan,\r\ntahan lama, tidak lengk', '22000', '20', 'pomade.png'),
(1002, 'Philips Electric Shaver PQ206', 'Pencukur listrik Philips PQ206 akan memberikan hasil cukur\r\nyang bersih dengan kualitas yang dapat memaksimalkan\r\npenampilan Anda. Alat cukur ini juga akan\r\nmenjangkau rambut ke segala arah sehingga h', '210000', '20', 'shaver.png'),
(1003, 'Garnier Men Acno Fight', 'Facial foam mengandung herbal rpair dan purifyng salucylic acid.\r\nFacial ini dapat mengurangi mengurangi mintak berlebih,\r\ntimbulnya jerawat, komedo, pori-pori besar,\r\nkemerahan dan noda bekas jerawat', '25000', '25', 'garnier.png'),
(1004, 'Nivea Sun Protect Moisture', 'Nivea Sun Protect & Moisture memberikan perlindungan\r\nkulit dari sinar matahari. Nivea Sun Protect & Moisture\r\njuga memberikan nutrisi kepada kulit,\r\nmelembabkan kulit, dan mencegah penuaan.', '73000', '10', 'sunblock.png'),
(1005, 'Garnier Black Serum', 'Untuk menghilangkan pori-pori yang lebar pada wajah\r\nGarnier Black Serum Mask adalah solusi yang tepat. Dengan\r\nmenggunakan masker ini kulit wajah akan menjadi halus dan juga mulus.\r\nMasker ini juga m', '21000', '18', 'masker.png'),
(1006, 'Shaving Cream', 'Shaving cream ini berfungsi untuk pembersih wajah\r\ndan tidak mengandung alkohol. Shaving ini juga memiliki\r\nkandungan busa yang banyak serta tidak menyebabkan iritasi.', '149000', '15', 'cream.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id_appointment`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`id_coupon`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`pekerjaan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
