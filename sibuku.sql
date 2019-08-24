-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2019 at 04:42 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sibuku`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `isbn` varchar(10) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `id_penulis` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`isbn`, `judul_buku`, `id_penulis`, `id_kategori`, `deskripsi`, `harga`) VALUES
('123456', 'hahahah', 2, 1, 'text', 90000),
('987654', 'babababababa', 3, 1, 'text', 100000),
('9876577', 'Proto Type C#', 2, 2, 'ini text', 25000),
('9876578', 'Java Script', 2, 2, 'text ', 150000);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Fiksi'),
(2, 'teknologi'),
(3, 'budaya'),
(4, 'ilmu pengetahuan sosial');

-- --------------------------------------------------------

--
-- Table structure for table `penulis`
--

CREATE TABLE `penulis` (
  `id_penulis` int(11) NOT NULL,
  `nama_penulis` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_hp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penulis`
--

INSERT INTO `penulis` (`id_penulis`, `nama_penulis`, `email`, `no_hp`) VALUES
(1, 'nuris akbar', 'nuris.akbar@gmail.com', '089699935552'),
(2, 'hafidz muzaki', 'hafidz@gmail.com', '08563232323'),
(3, 'desi handyaani', 'desihandayani037@gmail.com', '085642216978'),
(4, 'durratul hafizah', 'hafizah@gmail.com', '089699935552');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `email`, `password`) VALUES
(2, 'Durratul Hafizah', 'hafizah@gmail.com', '$2y$04$F7OsPGXr7g.D1mEQDbLLcuOhWiCTX69PFV3MrPdiOp7WIVsLPmDKC'),
(12, 'MUHAMMAD HAFIDZ MUZAKI', 'hafid@gmail.com', '$2y$04$x64sTW/XZqehXyunluJaieUvObOqslyI9ycu1ZgIpvg1eK9LWaNBO'),
(16, 'NURIS AKBAR', 'nuris.akbar@gmail.com', '$2y$04$vtozW24qFFANDkWMySqrS.m4o5V1hVuygEhWWkOdnOfDfg/PjUw.a'),
(17, 'Wahyu Safrizal', 'wahyusafrizal@gmail.com', '$2y$04$Sz1mrbfF3gzkVK9fqiVqv.p6Db4ku3G7le1vAjomh4UMNMnxdF2nu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`isbn`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `penulis`
--
ALTER TABLE `penulis`
  ADD PRIMARY KEY (`id_penulis`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `penulis`
--
ALTER TABLE `penulis`
  MODIFY `id_penulis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
