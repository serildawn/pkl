-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2020 at 02:15 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `morfeen`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcart`
--

CREATE TABLE `addcart` (
  `nocart` int(100) NOT NULL,
  `idadd` int(100) NOT NULL,
  `idcus` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `warna` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `hargasatuan` int(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `jumlah` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addcart`
--

INSERT INTO `addcart` (`nocart`, `idadd`, `idcus`, `jenis`, `warna`, `size`, `hargasatuan`, `harga`, `gambar`, `jumlah`) VALUES
(5, 78, '27', 'Female', 'Putih', 'XL', 120000, 120000, 'F1.jpg', 1),
(6, 60, '27', 'Hoodie', 'Hitam', 'M', 295000, 295000, 'g6.jpeg', 1),
(7, 80, '27', 'Male', 'Putih', 'XL', 125000, 125000, 'M9.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idadmin`, `username`, `password`) VALUES
(2, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `aktifitas`
--

CREATE TABLE `aktifitas` (
  `id_aktifitas` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tgl` date NOT NULL,
  `aktifitas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aktifitas`
--

INSERT INTO `aktifitas` (`id_aktifitas`, `nama`, `tgl`, `aktifitas`) VALUES
(60, 'ciril', '2020-01-13', 'coba'),
(61, 'ahmadada', '2020-01-14', 'ya');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `idbarang` int(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `warna` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `stok` varchar(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`idbarang`, `jenis`, `warna`, `size`, `stok`, `harga`, `gambar`) VALUES
(59, 'Hoodie', 'Hitam', 'XL', '13', 295000, 'g1.jpeg'),
(60, 'Hoodie', 'Hitam', 'M', '11', 295000, 'g6.jpeg'),
(62, 'Hoodie', 'Putih', 'XL', '13', 295000, 'g3.jpeg'),
(65, 'BaseBall Cap', 'Hitam', 'All Size', '10', 90000, 'g7.jpeg'),
(66, 'TotteBag', 'Hitam', '-', '10', 90000, 'g21.jpeg'),
(67, 'T-Shirt', 'Biru', 'M', '10', 130000, 'g16.jpeg'),
(68, 'Polo', 'Hitam Biru', 'XL', '14', 135000, 'g2.jpeg'),
(78, 'Female', 'Putih', 'XL', '20', 120000, 'F1.jpg'),
(79, 'Male', 'Hitam', 'L', '12', 200000, 'M7.jpg'),
(80, 'Male', 'Putih', 'XL', '32', 125000, 'M9.jpg'),
(81, 'Topi', 'Hitam', '-', '9', 40000, 'TP5.png'),
(82, 'Female', 'Pink', 'L', '20', 125000, 'F8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cekout`
--

CREATE TABLE `cekout` (
  `idcek` int(100) NOT NULL,
  `idcus` int(100) NOT NULL,
  `idbarang` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kodepos` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `warna` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `hargasatuan` int(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `jumlah` int(100) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cekout`
--

INSERT INTO `cekout` (`idcek`, `idcus`, `idbarang`, `nama`, `alamat`, `kodepos`, `jenis`, `warna`, `size`, `hargasatuan`, `harga`, `gambar`, `tanggal`, `jumlah`, `status`) VALUES
(2, 27, 62, 'Yessy', 'Semanggi Barat', '651453', 'Hoodie', 'Putih', 'XL', 295000, 295000, 'g3.jpeg', '2019-12-16 13:02:34', 1, 'Pembayaran Anda Telah Kami Terima. Mohon Tunggu 2-3 Hari Pengiriman Barang. \r\n        Terimakasih Telah Berbelanja di Morfeen Thirteen.'),
(3, 27, 60, 'Yessy', 'Semanggi Barat', '651453', 'Hoodie', 'Hitam', 'M', 295000, 295000, 'M6.jpg', '2019-12-04 03:13:45', 1, 'Pesanan Selesai'),
(4, 27, 59, 'Yessy', 'Semanggi Barat', '651453', 'Hoodie', 'Hitam', 'XL', 295000, 295000, 'g1.jpeg', '2019-12-02 13:05:23', 1, 'Menunggu Konfirmasi Pembayaran'),
(5, 27, 78, 'Yessy', 'Semanggi Barat', '651453', 'Female', 'Putih', 'XL', 120000, 120000, 'F1.jpg', '2019-12-04 02:59:11', 1, 'Pesanan Selesai'),
(6, 27, 60, '', '', '', 'Hoodie', 'Hitam', 'M', 295000, 295000, 'g6.jpeg', '2019-12-04 03:13:45', 1, 'Pesanan Selesai'),
(7, 27, 60, '', '', '', 'Hoodie', 'Hitam', 'M', 295000, 295000, 'g6.jpeg', '2019-12-04 03:13:45', 1, 'Pesanan Selesai'),
(8, 27, 62, '', '', '', 'Hoodie', 'Putih', 'XL', 295000, 295000, 'g3.jpeg', '2019-12-16 13:02:34', 1, 'Pembayaran Anda Telah Kami Terima. Mohon Tunggu 2-3 Hari Pengiriman Barang. \r\n        Terimakasih Telah Berbelanja di Morfeen Thirteen.'),
(9, 27, 59, '', '', '', 'Hoodie', 'Hitam', 'XL', 295000, 295000, 'g1.jpeg', '2019-12-04 15:01:09', 1, 'Menunggu Konfirmasi Pembayaran'),
(10, 27, 81, '', '', '', 'Topi', 'Hitam', '-', 40000, 40000, 'TP5.png', '2019-12-05 02:48:42', 1, 'Menunggu Konfirmasi Pembayaran'),
(11, 32, 78, '', '', '', 'Female', 'Putih', 'XL', 120000, 120000, 'F1.jpg', '2019-12-16 13:08:44', 1, 'Menunggu Konfirmasi Pembayaran');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `idcus` int(100) NOT NULL,
  `Nama` varchar(22) NOT NULL,
  `Alamat` varchar(30) NOT NULL,
  `NoTlp` int(12) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(33) NOT NULL,
  `Email` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`idcus`, `Nama`, `Alamat`, `NoTlp`, `Username`, `Password`, `Email`) VALUES
(34, 'Seril', 'Gresik', 863346566, 'serilda', '', 'yessynindi@gmail.com'),
(35, 'adit', 'jl kesumba', 987654322, 'adit', '123456', 'adit@gmail.com'),
(36, 'Lesta', 'Kedanyang', 987654322, 'lesta', '123', 'embrianidl@gmail.com'),
(37, 'Yessy', 'Tanah ', 2147483647, 'yessy', '12345', 'yessynindi@gmail.com'),
(38, 'ciril', 'jl kesumba', 987654321, 'ciril', '123', 'serildawn@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `freelance`
--

CREATE TABLE `freelance` (
  `id_freelance` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `notlp` varchar(20) NOT NULL,
  `project` varchar(200) NOT NULL,
  `salary` varchar(200) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `spk` varchar(11) NOT NULL,
  `tipe_freelance` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `freelance`
--

INSERT INTO `freelance` (`id_freelance`, `nama`, `alamat`, `notlp`, `project`, `salary`, `start_date`, `end_date`, `spk`, `tipe_freelance`) VALUES
(10, 'bala', 'jalan surabya21q', '0987654321', 'book', '2000000', '2020-01-05', '2020-02-29', 'Ada', 'Programmer'),
(11, 'bedes', 'jl sda', '08575555555', 'monyet', '2500000', '2020-02-01', '2020-03-31', 'Ada', 'Admin'),
(12, 'fungisida', 'jalan madiun', '082125414141', 'bluder', '1500000', '2020-01-01', '2020-03-31', 'Tidak', 'TW');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `idhis` int(11) NOT NULL,
  `idcus` int(11) NOT NULL,
  `idbarang` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kodepos` int(11) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `size` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(20) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `jumlah` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tipe_freelance`
--

CREATE TABLE `tipe_freelance` (
  `id_tipe` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deleted` tinyint(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipe_freelance`
--

INSERT INTO `tipe_freelance` (`id_tipe`, `nama`, `deleted`) VALUES
(1, 'TW', 0),
(2, 'Programmer', 0),
(3, 'Admin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `uname` varchar(25) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `uname`, `pass`, `level`) VALUES
(13, 'bedes', 'bedes@gmail.com', 'bedes', 'f5bb0c8de146c67b44babbf4e6584cc0', 2),
(14, 'adek', 'adek@gmail.com', 'adek', '4297f44b13955235245b2497399d7a93', 2),
(15, 'admin', 'admin@gmail.com', 'admin', 'e00cf25ad42683b3df678c61f42c6bda', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_level`
--

CREATE TABLE `user_level` (
  `id` int(11) NOT NULL,
  `levelName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_level`
--

INSERT INTO `user_level` (`id`, `levelName`) VALUES
(1, 'admin'),
(2, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcart`
--
ALTER TABLE `addcart`
  ADD PRIMARY KEY (`nocart`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `aktifitas`
--
ALTER TABLE `aktifitas`
  ADD PRIMARY KEY (`id_aktifitas`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`idbarang`);

--
-- Indexes for table `cekout`
--
ALTER TABLE `cekout`
  ADD PRIMARY KEY (`idcek`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`idcus`);

--
-- Indexes for table `freelance`
--
ALTER TABLE `freelance`
  ADD PRIMARY KEY (`id_freelance`),
  ADD UNIQUE KEY `id_freelance` (`id_freelance`),
  ADD KEY `FK_id_tipe` (`tipe_freelance`);

--
-- Indexes for table `tipe_freelance`
--
ALTER TABLE `tipe_freelance`
  ADD PRIMARY KEY (`id_tipe`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `level` (`level`);

--
-- Indexes for table `user_level`
--
ALTER TABLE `user_level`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcart`
--
ALTER TABLE `addcart`
  MODIFY `nocart` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `aktifitas`
--
ALTER TABLE `aktifitas`
  MODIFY `id_aktifitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `idbarang` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `cekout`
--
ALTER TABLE `cekout`
  MODIFY `idcek` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `idcus` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `freelance`
--
ALTER TABLE `freelance`
  MODIFY `id_freelance` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tipe_freelance`
--
ALTER TABLE `tipe_freelance`
  MODIFY `id_tipe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
