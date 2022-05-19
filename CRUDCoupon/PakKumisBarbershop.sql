CREATE DATABASE barbershop;

CREATE TABLE ADMIN (
  `id_admin` INT(20) NOT NULL,
  `username` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL);
  
ALTER TABLE ADMIN ADD PRIMARY KEY (id_admin);
  
CREATE TABLE `customer` (
  `id_customer` INT(20) NOT NULL,
  `nama_customer` VARCHAR(45) NOT NULL,
  `no_telp` INT(20) NOT NULL,
  `alamat_customer` VARCHAR(45) NOT NULL,
  `id_admin` INT(20) NOT NULL,
  `id_appointment` INT(20) NOT NULL,
  `id_coupon` INT(20) NOT NULL
);
  
ALTER TABLE customer ADD PRIMARY KEY (id_customer);
ALTER TABLE customer ADD FOREIGN KEY (id_admin) REFERENCES ADMIN (id_admin);
ALTER TABLE customer ADD FOREIGN KEY (id_appointment) REFERENCES appointment (id_appointment);
ALTER TABLE customer ADD FOREIGN KEY (id_coupon) REFERENCES coupon (id_coupon);
  
 CREATE TABLE `appointment` (
  `id_appointment` INT(20) NOT NULL,
  `tanggal_appointment` DATE NOT NULL,
  `waktu` TIME NOT NULL,
  `status` VARCHAR(45) NOT NULL,
  `biaya_appoinment` VARCHAR(45) NOT NULL,
  `notifikasi` VARCHAR(200) NOT NULL
)

ALTER TABLE appointment ADD PRIMARY KEY (id_appointment);  

CREATE TABLE `coupon` (
  `id_coupon` INT(20) NOT NULL,
  `nama_coupon` VARCHAR(45) NOT NULL
)

ALTER TABLE coupon ADD PRIMARY KEY (id_coupon);  

CREATE TABLE `layanan` (
  `id_layanan` INT(20) NOT NULL,
  `jenis_layanan` VARCHAR(45) NOT NULL,
  `deskripsi_layanan` VARCHAR(200) NOT NULL,
  `harga_layanan` VARCHAR(45) NOT NULL
)

ALTER TABLE layanan ADD PRIMARY KEY (id_layanan);  

CREATE TABLE `orders` (
  `id_order` INT(20) NOT NULL,
  `tanggal_order` DATETIME NOT NULL,
  `jumlah_produk` INT(20) NOT NULL,
  `total_harga` VARCHAR(45) NOT NULL,
  `notifikasi` VARCHAR(200) NOT NULL,
  `id_customer` INT(20) NOT NULL
);

ALTER TABLE orders ADD PRIMARY KEY (id_order);  
ALTER TABLE orders ADD FOREIGN KEY (id_customer) REFERENCES customer (id_customer);

CREATE TABLE `produk` (
  `id_produk` INT(20) NOT NULL,
  `nama_produk` VARCHAR(45) NOT NULL,
  `deskripsi_produk` VARCHAR(200) NOT NULL,
  `harga_produk` VARCHAR(45) NOT NULL,
  `kategori` VARCHAR(45) NOT NULL,
  `stok` VARCHAR(45) NOT NULL
)

ALTER TABLE produk ADD PRIMARY KEY (id_produk);  

CREATE TABLE customer_has_layanan(
`id_customer` INT(20) NOT NULL,
`id_appointment` INT(20) NOT NULL,
`id_layanan` INT(20) NOT NULL);

ALTER TABLE customer_has_layanan ADD FOREIGN KEY (id_customer) REFERENCES customer (id_customer);
ALTER TABLE customer_has_layanan ADD FOREIGN KEY (id_appointment) REFERENCES customer (id_appointment);
ALTER TABLE customer_has_layanan ADD FOREIGN KEY (id_layanan) REFERENCES layanan (id_layanan);

CREATE TABLE customer_has_produk (
`id_customer` INT(20) NOT NULL,
`id_produk` INT(20) NOT NULL);

ALTER TABLE customer_has_produk ADD FOREIGN KEY (id_customer) REFERENCES customer (id_customer);
ALTER TABLE customer_has_produk ADD FOREIGN KEY (id_produk) REFERENCES produk (id_produk);