-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2021 at 08:53 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(34) NOT NULL,
  `keterangan` varchar(90) NOT NULL,
  `kategori` varchar(34) NOT NULL,
  `harga` varchar(34) NOT NULL,
  `stok` varchar(45) NOT NULL,
  `gambar` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_brg`, `nama_brg`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(9, 'Kaos', 'New', 'pakaian pria', '50000', '1', 'adf914cd55a2edc4b282abdbad34be6c.jpg'),
(10, 'Kaos', 'New', 'pakaian pria', '70000', '3', '297784732_be6c59db-6598-4db1-b12e-ecd7d5e6db74_1000_1000.jpg'),
(11, 'Kaos', 'New', 'pakaian pria', '71000', '2', 'c1931504fd2ca00751e137f035a69d54.jpg'),
(12, 'Jumsuit', 'New', 'pakaian wanita', '95000', '2', '72eaec1b308a207434e861f16e940ce7.jpg'),
(13, 'Dress pesta', 'New', 'pakaian wanita', '191000', '3', 'de29bae1480e779b2adf6fbf185dbac1.jpg'),
(14, 'Dress pesta', 'New', 'pakaian wanita', '181200', '3', 'RD2N7EV9Sn.jpg'),
(15, 'new 2021', 'New baju pria', 'pakaian pria', '70000', '2', '262b0ea7b91993c899873899748b14c1_(1).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(33) NOT NULL,
  `alamat` varchar(33) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`) VALUES
(18, 'marya', 'sunten', '2021-01-08 16:53:39', '2021-01-10 16:53:39'),
(19, 'gunawan', 'condongcatur', '2021-01-09 00:04:10', '2021-01-11 00:04:10'),
(20, 'ilham', 'bantul', '2021-01-09 00:05:01', '2021-01-11 00:05:01'),
(21, 'dian', 'wonosari', '2021-01-12 12:24:42', '2021-01-14 12:24:42');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `nama_brg` text NOT NULL,
  `jumlah` int(22) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_brg`, `nama_brg`, `jumlah`, `harga`, `pilihan`) VALUES
(1, 4, 2, 'kaos', 1, 50000, ''),
(2, 5, 3, 'kaos', 1, 50000, ''),
(3, 6, 1, 'sepatu', 1, 30000, ''),
(4, 7, 4, 'kaos', 1, 50000, ''),
(5, 8, 2, 'kaos', 1, 50000, ''),
(6, 8, 1, 'sepatu', 1, 30000, ''),
(7, 9, 2, 'kaos', 2, 50000, ''),
(8, 11, 8, 'hai', 1, 200000, ''),
(10, 13, 8, 'hai', 1, 200000, ''),
(12, 15, 8, 'hai', 1, 200000, ''),
(14, 17, 12, 'Jumsuit', 1, 95000, ''),
(15, 18, 9, 'Kaos', 1, 50000, ''),
(16, 19, 11, 'Kaos', 1, 71000, ''),
(17, 20, 9, 'Kaos', 1, 50000, ''),
(18, 21, 15, 'new 2021', 1, 70000, '');

--
-- Triggers `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN
UPDATE tb_barang SET stok = stok-new.jumlah
WHERE id_brg =new.id_brg;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(233) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `email`, `username`, `password`, `role_id`) VALUES
(1, 'admin@gmail.com', 'admin', 'admin', 1),
(2, 'user@gmail.com', 'user', 'user', 2),
(5, 'kurniawantriwidianto@gmail.com', 'wawan', '1234', 2),
(6, 'kurniawantriwidianto93@gmail.com', 'dian', '1234', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indexes for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
