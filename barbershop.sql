-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Bulan Mei 2022 pada 06.48
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
  `id_admin` INT(20) NOT NULL,
  `username` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `appointment`
--

CREATE TABLE `appointment` (
  `id_appointment` INT(20) NOT NULL,
  `tanggal_appointment` DATE NOT NULL,
  `waktu` TIME NOT NULL,
  `status` VARCHAR(45) NOT NULL,
  `biaya_appoinment` VARCHAR(45) NOT NULL,
  `notifikasi` VARCHAR(200) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` INT(11) NOT NULL,
  `nama_produk` VARCHAR(225) CHARACTER SET latin1 DEFAULT NULL,
  `deskripsi` VARCHAR(500) CHARACTER SET latin1 DEFAULT NULL,
  `harga_beli` INT(11) DEFAULT NULL,
  `gambar_produk` VARCHAR(500) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4;

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
  `id_coupon` INT(20) NOT NULL,
  `nama_coupon` VARCHAR(45) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id` INT(20) NOT NULL,
  `user_id` BIGINT(45) NOT NULL,
  `user_name` INT(20) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `id_admin` INT(20) NOT NULL,
  `id_appointment` INT(20) NOT NULL,
  `id_coupon` INT(20) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer_has_layanan`
--
-- --------------------------------------------------------

--
-- Struktur dari tabel `customer_has_produk`
--
-- --------------------------------------------------------

--
-- Struktur dari tabel `konfirmasi`
--

CREATE TABLE `konfirmasi` (
  `id` INT(11) NOT NULL,
  `nama` VARCHAR(100) NOT NULL,
  `tanggal_waktu` DATETIME NOT NULL,
  `layanan` TEXT NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4;

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
  `id_layanan` INT(20) NOT NULL,
  `jenis_layanan` VARCHAR(45) NOT NULL,
  `deskripsi_layanan` VARCHAR(200) NOT NULL,
  `harga_layanan` VARCHAR(45) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id_order` INT(20) NOT NULL,
  `tanggal_order` DATETIME NOT NULL,
  `jumlah_produk` INT(20) NOT NULL,
  `total_harga` VARCHAR(45) NOT NULL,
  `notifikasi` VARCHAR(200) NOT NULL,
  `id` INT(20) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` INT(20) NOT NULL,
  `nama_produk` VARCHAR(45) NOT NULL,
  `deskripsi_produk` VARCHAR(200) NOT NULL,
  `harga_produk` VARCHAR(45) NOT NULL,
  `kategori` VARCHAR(45) NOT NULL,
  `stok` VARCHAR(45) NOT NULL,
  `gambar` VARCHAR(500) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4;

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
  ADD PRIMARY KEY (`id`);
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
  ADD KEY `id` (`id`);

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
  MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `konfirmasi`
--
ALTER TABLE `konfirmasi`
  MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id`) REFERENCES `customer` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
