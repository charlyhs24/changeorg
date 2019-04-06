-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2019 at 02:48 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `changeorg`
--

-- --------------------------------------------------------

--
-- Table structure for table `petisi`
--

CREATE TABLE `petisi` (
  `id_petisi` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `kepada` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `url_media` varchar(255) NOT NULL,
  `id_users` int(11) NOT NULL,
  `jumlah_ttd` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petisi`
--

INSERT INTO `petisi` (`id_petisi`, `judul`, `kepada`, `isi`, `url_media`, `id_users`, `jumlah_ttd`, `created_at`, `updated_at`) VALUES
(1, 'Koruptor Jangan Digaji, Pecat PNS Koruptor !', 'prabowo', 'Bahagia rasanya, walau sudah mencuri uang negara tapi masih dibiayai negara. Senang rasanya meski sudah dijatuhi hukuman bersalah karena korupsi, akan tetapi masih bisa santai menikmati gaji. Tenang rasanya walau sudah dihukum bersalah karena korupsi, tetapi masih belum dipecat padahal sudah ada aturan yang mengikat.\"\r\n\r\nPernyataan itu bukanlah pujian terima kasih, melainkan kritikan karena kami risih mengetahui berita Pegawai Negeri Sipil (PNS) yang sudah divonis bersalah melakukan tindak pidana korupsi, namun masih bisa menikmati gaji lantaran belum dipecat.\r\n\r\nSaya masih ingat betul pada awal Februari lalu data Indonesia Corruption Watch (ICW) menyebutkan ada 1.400-an lebih PNS koruptor yang belum dipecat. Hingga saat ini proses pemecatan PNS pun tidak jelas.\r\n\r\nBelakangan saya mengetahui kembali dari media online CNN, bahwa ada 1.879 PNS yang sampai berita itu dilansir belum juga dipecat. Permasalahan tersebut terang saja berpotensi menimbulkan kerugian negara yang cukup besar. Jika persoalan PNS koruptor dibiarkan berlarut, maka negara sama saja akan terus mengahamburkan uangnya dengan percuma untuk para pencuri uang negara atau koruptor!', 'https://assets.change.org/photos/1/jm/xs/tAjmXshApnSykOY-800x450-noPad.jpg?1550421921', 1, 150, '2019-04-05 00:37:16', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ttd_petisi`
--

CREATE TABLE `ttd_petisi` (
  `id_ttd_petisi` int(11) NOT NULL,
  `komentar` text NOT NULL,
  `status_ttd` varchar(20) NOT NULL,
  `id_petitisi` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `nama_depan` varchar(255) NOT NULL,
  `nama_belakang` varchar(255) NOT NULL,
  `tentang_saya` text NOT NULL,
  `kota` varchar(155) NOT NULL,
  `negara` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `tautan_singkat` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kode_pos` int(11) NOT NULL,
  `bahasa` varchar(255) NOT NULL,
  `nomor_telepon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `nama_depan`, `nama_belakang`, `tentang_saya`, `kota`, `negara`, `twitter`, `tautan_singkat`, `alamat`, `kode_pos`, `bahasa`, `nomor_telepon`) VALUES
(1, 'charly ', 'haholongan situmorang', 'nothing', 'bandung', 'indonesia', '@charly', 'nothing', 'bandung', 14045, 'indonesia', '081311051507');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `petisi`
--
ALTER TABLE `petisi`
  ADD PRIMARY KEY (`id_petisi`),
  ADD KEY `id_users` (`id_users`);

--
-- Indexes for table `ttd_petisi`
--
ALTER TABLE `ttd_petisi`
  ADD PRIMARY KEY (`id_ttd_petisi`),
  ADD KEY `id_petitisi` (`id_petitisi`),
  ADD KEY `id_users` (`id_users`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `petisi`
--
ALTER TABLE `petisi`
  MODIFY `id_petisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ttd_petisi`
--
ALTER TABLE `ttd_petisi`
  MODIFY `id_ttd_petisi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `petisi`
--
ALTER TABLE `petisi`
  ADD CONSTRAINT `petisi_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ttd_petisi`
--
ALTER TABLE `ttd_petisi`
  ADD CONSTRAINT `ttd_petisi_ibfk_1` FOREIGN KEY (`id_petitisi`) REFERENCES `petisi` (`id_petisi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ttd_petisi_ibfk_2` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
