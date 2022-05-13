-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 25, 2021 at 07:32 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id17125100_myfuturecat`
--

-- --------------------------------------------------------

--
-- Table structure for table `kucing`
--

CREATE TABLE `kucing` (
  `id` int(10) NOT NULL,
  `namajenis` varchar(20) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `makanan` varchar(20) NOT NULL,
  `deskripsilanjut` text NOT NULL,
  `gambar` varchar(35) NOT NULL,
  `status` enum('sudah','belum') DEFAULT 'belum'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kucing`
--

INSERT INTO `kucing` (`id`, `namajenis`, `warna`, `makanan`, `deskripsilanjut`, `gambar`, `status`) VALUES
(9, 'fareza cantik', 'pink', 'pelet', 'fareza cantik banget', '1710322593_siputih.jpeg', 'belum'),
(16, 'persia', 'abu abu', 'whiskas', 'imut bangeet', '_siloreng.jpeg', 'belum'),
(19, 'kampong', 'putih', 'ikan asin', 'anaknya rada nakal', '_puteh.jpg', 'belum'),
(20, 'anggora', 'putih', 'whiskas', 'imut bangeet', '_cute.jpeg', 'belum'),
(21, 'anggora', 'oren dan abu abu', 'whiskas', 'anaknya rada kembar kembar nakal', '_kembar.jpeg', 'belum'),
(23, 'persia', 'oren dan abu abu', 'whiskas', 'anaknya rada kembar kembar nakal', '_kembar.jpeg', 'belum');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `password` varchar(35) NOT NULL,
  `level` enum('user','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `password`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'fareza', '05b9dd84dd90b717853c1b4ecc818a42', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kucing`
--
ALTER TABLE `kucing`
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
-- AUTO_INCREMENT for table `kucing`
--
ALTER TABLE `kucing`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
