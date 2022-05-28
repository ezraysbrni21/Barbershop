-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Bulan Mei 2022 pada 10.01
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

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
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(20) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `appointment`
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
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(225) CHARACTER SET latin1 DEFAULT NULL,
  `deskripsi` varchar(500) CHARACTER SET latin1 DEFAULT NULL,
  `harga_beli` int(11) DEFAULT NULL,
  `gambar_produk` varchar(500) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `nama_produk`, `deskripsi`, `harga_beli`, `gambar_produk`) VALUES
(1, 'Masker', 'Masker Wajah', 29, '625-masker.PNG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `coupon`
--

CREATE TABLE `coupon` (
  `id_coupon` int(20) NOT NULL,
  `nama_coupon` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(20) NOT NULL,
  `nama_customer` varchar(45) NOT NULL,
  `no_telp` int(20) NOT NULL,
  `alamat_customer` varchar(45) NOT NULL,
  `id_admin` int(20) NOT NULL,
  `id_appointment` int(20) NOT NULL,
  `id_coupon` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer_has_layanan`
--

CREATE TABLE `customer_has_layanan` (
  `id_customer` int(20) NOT NULL,
  `id_appointment` int(20) NOT NULL,
  `id_layanan` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer_has_produk`
--

CREATE TABLE `customer_has_produk` (
  `id_customer` int(20) NOT NULL,
  `id_produk` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfirmasi`
--

CREATE TABLE `konfirmasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal_waktu` datetime NOT NULL,
  `layanan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `konfirmasi`
--

INSERT INTO `konfirmasi` (`id`, `nama`, `tanggal_waktu`, `layanan`) VALUES
(1, 'Riel', '2022-05-26 14:00:00', 'Potong Rambut');

-- --------------------------------------------------------

--
-- Struktur dari tabel `layanan`
--

CREATE TABLE `layanan` (
  `id_layanan` int(20) NOT NULL,
  `jenis_layanan` varchar(45) NOT NULL,
  `deskripsi_layanan` varchar(200) NOT NULL,
  `harga_layanan` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
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
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(20) NOT NULL,
  `nama_produk` varchar(45) NOT NULL,
  `deskripsi_produk` varchar(200) NOT NULL,
  `harga_produk` varchar(45) NOT NULL,
  `kategori` varchar(45) NOT NULL,
  `stok` varchar(45) NOT NULL,
  `gambar` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `deskripsi_produk`, `harga_produk`, `kategori`, `stok`, `gambar`) VALUES
(1001, 'Tata Pomade', 'Tata pomade merupakan produk styling rambut Water Base.\r\nPomade ini merupakan varian yang diperuntukkan pada rambut\r\nberketombe. Selain itu pomade ini mudah untuk dibersihkan,\r\ntahan lama, tidak lengk', '22000', 'Pomade', '20', 'pomade.png'),
(1002, 'Philips Electric Shaver PQ206', 'Pencukur listrik Philips PQ206 akan memberikan hasil cukur\r\nyang bersih dengan kualitas yang dapat memaksimalkan\r\npenampilan Anda. Alat cukur ini juga akan\r\nmenjangkau rambut ke segala arah sehingga h', '210000', 'Pencukur', '20', 'shaver.png'),
(1003, 'Garnier Men Acno Fight', 'Facial foam mengandung herbal rpair dan purifyng salucylic acid.\r\nFacial ini dapat mengurangi mengurangi mintak berlebih,\r\ntimbulnya jerawat, komedo, pori-pori besar,\r\nkemerahan dan noda bekas jerawat', '25000', 'Sabun cuci muka', '25', 'garnier.png'),
(1004, 'Nivea Sun Protect Moisture', 'Nivea Sun Protect & Moisture memberikan perlindungan\r\nkulit dari sinar matahari. Nivea Sun Protect & Moisture\r\njuga memberikan nutrisi kepada kulit,\r\nmelembabkan kulit, dan mencegah penuaan.', '73000', 'Sunblock', '10', 'sunblock.png'),
(1005, 'Garnier Black Serum', 'Untuk menghilangkan pori-pori yang lebar pada wajah\r\nGarnier Black Serum Mask adalah solusi yang tepat. Dengan\r\nmenggunakan masker ini kulit wajah akan menjadi halus dan juga mulus.\r\nMasker ini juga m', '21000', 'Masker wajah', '18', 'masker.png'),
(1006, 'Shaving Cream', 'Shaving cream ini berfungsi untuk pembersih wajah\r\ndan tidak mengandung alkohol. Shaving ini juga memiliki\r\nkandungan busa yang banyak serta tidak menyebabkan iritasi.', '149000', 'Shaving cream', '15', 'cream.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id_appointment`);

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`id_coupon`);

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`),
  ADD KEY `id_admin` (`id_admin`),
  ADD KEY `id_appointment` (`id_appointment`),
  ADD KEY `id_coupon` (`id_coupon`);

--
-- Indeks untuk tabel `customer_has_layanan`
--
ALTER TABLE `customer_has_layanan`
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `id_appointment` (`id_appointment`),
  ADD KEY `id_layanan` (`id_layanan`);

--
-- Indeks untuk tabel `customer_has_produk`
--
ALTER TABLE `customer_has_produk`
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indeks untuk tabel `konfirmasi`
--
ALTER TABLE `konfirmasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_customer` (`id_customer`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `konfirmasi`
--
ALTER TABLE `konfirmasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`),
  ADD CONSTRAINT `customer_ibfk_2` FOREIGN KEY (`id_appointment`) REFERENCES `appointment` (`id_appointment`),
  ADD CONSTRAINT `customer_ibfk_3` FOREIGN KEY (`id_coupon`) REFERENCES `coupon` (`id_coupon`);

--
-- Ketidakleluasaan untuk tabel `customer_has_layanan`
--
ALTER TABLE `customer_has_layanan`
  ADD CONSTRAINT `customer_has_layanan_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`),
  ADD CONSTRAINT `customer_has_layanan_ibfk_2` FOREIGN KEY (`id_appointment`) REFERENCES `customer` (`id_appointment`),
  ADD CONSTRAINT `customer_has_layanan_ibfk_3` FOREIGN KEY (`id_layanan`) REFERENCES `layanan` (`id_layanan`);

--
-- Ketidakleluasaan untuk tabel `customer_has_produk`
--
ALTER TABLE `customer_has_produk`
  ADD CONSTRAINT `customer_has_produk_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`),
  ADD CONSTRAINT `customer_has_produk_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);

--
-- Ketidakleluasaan untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
