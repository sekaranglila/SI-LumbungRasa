-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3307
-- Generation Time: Apr 11, 2017 at 12:56 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lumbungrasa`
--

-- --------------------------------------------------------

--
-- Table structure for table `bon`
--

CREATE TABLE `bon` (
  `id_bon` int(12) NOT NULL,
  `id_co` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `captain_order`
--

CREATE TABLE `captain_order` (
  `id` int(12) NOT NULL,
  `tanggal` datetime NOT NULL,
  `nomormeja` int(3) NOT NULL,
  `comakanan_id` int(12) NOT NULL,
  `cominuman_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `co_makanan`
--

CREATE TABLE `co_makanan` (
  `id` int(12) NOT NULL,
  `id_CO` int(12) NOT NULL,
  `id_makanan` int(12) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `co_minuman`
--

CREATE TABLE `co_minuman` (
  `id` int(12) NOT NULL,
  `id_CO` int(12) NOT NULL,
  `id_minuman` int(12) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detil_bon`
--

CREATE TABLE `detil_bon` (
  `id_bon` int(12) NOT NULL,
  `id_total` int(12) NOT NULL,
  `id_kasir` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `makanan`
--

CREATE TABLE `makanan` (
  `id` int(12) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `harga` int(7) NOT NULL,
  `deskripsi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `makanan`
--

INSERT INTO `makanan` (`id`, `nama`, `harga`, `deskripsi`) VALUES
(35, 'nasigurih', 6500, 'nasi gurih'),
(37, 'paketgurihayam', 25500, 'paket gurih ayam'),
(38, 'paketgurihayamkomplit', 30000, 'paket gurih ayam komplit'),
(39, 'paketgurihgepuk', 29000, 'paket gurih gepuk'),
(40, 'paketgurihgepukkomplit', 32500, 'paket gurih gepuk kompit'),
(41, 'paketgurihduaorang', 65000, 'paket gurih dua orang'),
(42, 'paketgurihempatorang', 145000, 'paket gurih empat orang'),
(43, 'pakettimbelayam', 24500, 'paket timbel ayam'),
(44, 'pakettimbelayamkomplit', 27500, 'paket timbel ayam komplit'),
(45, 'pakettimbelgepuk', 27500, 'paket timbel gepuk'),
(46, 'pakettimbelgepukkomplit', 31500, 'paket timbel gepuk komplit'),
(47, 'nasisopiga', 39500, 'nasi sop iga'),
(48, 'nasisopbuntut', 41500, 'nasi sop buntut'),
(49, 'nasiigabakarcoet', 42500, 'nasi iga bakar coet'),
(50, 'nasiayambakarcoet', 32500, 'nasi ayam bakar coet'),
(51, 'paketayamgledek', 25500, 'paket ayam gledek'),
(52, 'paheayamgledek', 15000, 'pahe ayam gledek'),
(53, 'pahelelegledek', 11000, 'pahe lele gledek'),
(54, 'TApaketayamgledek', 27500, 'TA paket ayam gledek'),
(55, 'TApaheayamgledek', 17000, 'TA pahe ayam gledek'),
(56, 'TApahelelegledek', 13000, 'TA pahe lele gledek');

-- --------------------------------------------------------

--
-- Table structure for table `minuman`
--

CREATE TABLE `minuman` (
  `id` int(12) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `harga` int(7) NOT NULL,
  `deskripsi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `minuman`
--

INSERT INTO `minuman` (`id`, `nama`, `harga`, `deskripsi`) VALUES
(1, 'esgoyobod', 9500, 'es goyobod / cincau'),
(2, 'esteler', 12500, 'es teler'),
(3, 'esbuah', 14500, 'es buah');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(12) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `jabatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `password`, `jabatan`) VALUES
(1, 'peanut', 'mama', 'WAITER');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bon`
--
ALTER TABLE `bon`
  ADD PRIMARY KEY (`id_bon`),
  ADD KEY `id_co` (`id_co`);

--
-- Indexes for table `captain_order`
--
ALTER TABLE `captain_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comakanan_id` (`comakanan_id`),
  ADD KEY `cominuman_id` (`cominuman_id`);

--
-- Indexes for table `co_makanan`
--
ALTER TABLE `co_makanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_CO` (`id_CO`),
  ADD KEY `id_makanan` (`id_makanan`);

--
-- Indexes for table `co_minuman`
--
ALTER TABLE `co_minuman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_CO` (`id_CO`),
  ADD KEY `id_minuman` (`id_minuman`);

--
-- Indexes for table `detil_bon`
--
ALTER TABLE `detil_bon`
  ADD PRIMARY KEY (`id_bon`),
  ADD KEY `id_kasir` (`id_kasir`);

--
-- Indexes for table `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `minuman`
--
ALTER TABLE `minuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `makanan`
--
ALTER TABLE `makanan`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bon`
--
ALTER TABLE `bon`
  ADD CONSTRAINT `bon_ibfk_1` FOREIGN KEY (`id_co`) REFERENCES `captain_order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bon_ibfk_2` FOREIGN KEY (`id_co`) REFERENCES `captain_order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `captain_order`
--
ALTER TABLE `captain_order`
  ADD CONSTRAINT `captain_order_ibfk_1` FOREIGN KEY (`comakanan_id`) REFERENCES `co_makanan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `captain_order_ibfk_2` FOREIGN KEY (`cominuman_id`) REFERENCES `co_minuman` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `captain_order_ibfk_3` FOREIGN KEY (`comakanan_id`) REFERENCES `co_makanan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `captain_order_ibfk_4` FOREIGN KEY (`cominuman_id`) REFERENCES `co_minuman` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `co_makanan`
--
ALTER TABLE `co_makanan`
  ADD CONSTRAINT `co_makanan_ibfk_1` FOREIGN KEY (`id_CO`) REFERENCES `captain_order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `co_makanan_ibfk_2` FOREIGN KEY (`id_makanan`) REFERENCES `makanan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `co_makanan_ibfk_3` FOREIGN KEY (`id_CO`) REFERENCES `captain_order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `co_makanan_ibfk_4` FOREIGN KEY (`id_makanan`) REFERENCES `makanan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `co_minuman`
--
ALTER TABLE `co_minuman`
  ADD CONSTRAINT `co_minuman_ibfk_1` FOREIGN KEY (`id_CO`) REFERENCES `captain_order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `co_minuman_ibfk_2` FOREIGN KEY (`id_minuman`) REFERENCES `minuman` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `co_minuman_ibfk_3` FOREIGN KEY (`id_CO`) REFERENCES `captain_order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `co_minuman_ibfk_4` FOREIGN KEY (`id_minuman`) REFERENCES `minuman` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detil_bon`
--
ALTER TABLE `detil_bon`
  ADD CONSTRAINT `detil_bon_ibfk_1` FOREIGN KEY (`id_bon`) REFERENCES `bon` (`id_bon`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detil_bon_ibfk_2` FOREIGN KEY (`id_bon`) REFERENCES `bon` (`id_bon`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detil_bon_ibfk_3` FOREIGN KEY (`id_kasir`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
