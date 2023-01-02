-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 08, 2022 at 07:20 AM
-- Server version: 5.7.39-0ubuntu0.18.04.2
-- PHP Version: 7.4.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental_mobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `metode_pembayaran`
--

CREATE TABLE `metode_pembayaran` (
  `id` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `nomor_rekening` varchar(30) NOT NULL,
  `pemilik` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `metode_pembayaran`
--

INSERT INTO `metode_pembayaran` (`id`, `nama`, `nomor_rekening`, `pemilik`) VALUES
(1, 'BANK BRI', '123123121', 'admin'),
(4, 'Bank BJB', '199912312', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `merek` varchar(40) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` bigint(20) NOT NULL,
  `status` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id`, `nama`, `jenis`, `merek`, `deskripsi`, `harga`, `status`, `gambar`) VALUES
(3, ' Jeep Wrangler', 'Jeep', 'Honda', 'Jeep Wrangler adalah salah satu mobil impian banyak orang. Gak cuma tampilannya yang gagah, mobil ini memiliki ketanggungan yang bisa diacungi jempol untuk segala medan.', 20000, 2, 'jeep-wrangler.jpg'),
(4, 'Mercedes-Benz C-Class', 'Class', 'Honda', 'Kategori sedan Mercy C-Class memang favorit banyak orang. Beberapa deretan produk seperti C200 EQ Boost Avantgarde Line serta C300 AMG Line kembali mengaspal dengan lebih percaya diri.', 150000, 2, 'honda-brio.jpg'),
(7, 'Honda Jazz', 'Jazz', 'Yamaha', 'Pencinta Honda pasti kenal dengan city car satu ini. Honda Jazz menjadi idola banyak anak muda sejak diluncurkan pada 2001.', 45000, 1, 'honda-jazz.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `durasi` int(11) NOT NULL,
  `total` bigint(20) NOT NULL,
  `id_pembayaran` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `id_user`, `id_mobil`, `durasi`, `total`, `id_pembayaran`, `status`, `tanggal`) VALUES
(7, 3, 4, 20, 3000000, 1, 1, '2022-12-08 03:20:09'),
(8, 4, 3, 4, 80000, 1, 1, '2022-12-08 03:24:06'),
(9, 5, 4, 10, 1500000, 1, 1, '2022-12-08 06:45:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`, `level`) VALUES
(2, 'Admin', 'admin@gmail.com', '$2y$10$HfKO7Doyh6k4lSJuOuTAZuhFR/qmTKrQdwf9KM6I98jIX3uP0xTnm', 'admin'),
(3, 'User ', 'user@gmail.com', '$2y$10$1kPDvAJkoUPsSxOn8alWtuiwUw7rbLjJ4uEKVqUFDd14DtbmAgiFq', 'user'),
(4, 'User 2', 'user2@gmail.com', '$2y$10$cLTRuRs6vEhu6ulzlERXh.mUIMfi4fR35q.XVfZyimxvDs9YSrH2q', 'user'),
(5, 'Andi', 'andi@gmail.com', '$2y$10$KBH/yz0jTTsozgmJiw32X.92IqyPeWkFTY4Nuh7Rfpw27zZPoZUxC', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `metode_pembayaran`
--
ALTER TABLE `metode_pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `metode_pembayaran`
--
ALTER TABLE `metode_pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
