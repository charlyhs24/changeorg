-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2019 at 10:36 AM
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
(14, 'Tolak Kembalinya Dwi-Fungsi ABRI melalui Penempatan TNI di Lembaga Sipil', 'Joko Widodo', 'TNI berwacana untuk restrukturisasi dan reorganisasi. Termasuk menempatkan militer ke jabatan-jabatan sipil, menambah unit dan struktur baru di TNI, meningkatkan status jabatan dan pangkat di beberapa unit, dan memperpanjang usia pensiun anggota TNI. Ini salah satunya karena banyak perwira TNI yang tidak memiliki jabatan atau non-job.\r\n\r\nRencana ini banyak diprotes karena seperti kembali ke zaman Orba dulu saat ada Dwifungsi ABRI. Saat itu Dwifungsi digunakan untuk memastikan Soeharto bisa berkuasa hingga 32 Tahun.  Ini jelas enggak sejalan dengan semangat reformasi dan dapat mengganggu sistem demokrasi kita.\r\n\r\nSejak era reformasi, militer enggak bisa lagi menduduki jabatan sipil dan politik seperti anggota DPR, Kepala Daerah, atau jabatan di Kementerian. TNI hanya bisa menduduki jabatan yang ada kaitannya dengan pertahanan. Itu semua udah diatur dalam UU TNI.\r\n\r\nKarena itu, kami menilai rencana penempatan militer aktif pada jabatan sipil tidak tepat. Seharusnya restrukturisasi TNI itu harus melihat pada efektivitasnya menjalankan fungsi pertahanan dan tentunya nggak boleh bertentangan dengan agenda reformasi TNI.\r\n\r\nKami mendesak kepada DPR dan Presiden Joko Widodo agar tidak mendukung agenda restrukturisasi dan reorganisasi TNI yang bertentangan dengan reformasi TNI melalui revisi UU TNI ataupun melalui peraturan perundang-undangan lainnya.\r\n\r\nDukung petisi ini agar kita tidak kembali ke zaman Orde Baru yang militeristik dan tak demokratis.', '25416743c83458cf6dd2456f83c7b6f5.jpg', 2, 5, '2019-04-18 09:55:07', '0000-00-00 00:00:00'),
(16, 'Pemilu ulang pilpres di Sydney Australia', 'Presiden Republik Indonesia Joko Widodo', 'Komunitas masyarat Indonesia di Sydney Australia menginginkan Pemilu Pilpres ulang. Di karenakan pada pemilu 13 april 2019 yg digelar diSydney ratusan warga Indonesia yg mempunyai hak pilih TIDAK diijinkan melakukan haknya padahal sudah ada antrian panjang di depan TPS Townhall dari siang. Proses yg panjang dan ketidakmampuan PPLN Sydney sebagai penyelenggara menyebabkan antrian tidak bisa berakhir sampai jam 6 sore waktu setempat. Sehingga ratusan orang yg sudah mengantri sekitar 2 jam tidak dapat melakukan hak dan kewajibannya untuk memilih karena PPLN dengan sengaja menutup TPS tepat jam 6 sore tanpa menghiraukan ratusan pemilih yg mengantri di luar. Untuk itulah komunitas masyarakat Indonesia menuntut pemilu ulang 2019 di Sydney Australia. Besar harapan kami KPU, Bawaslu dan Presiden Joko Widodo bisa mendengar, menyelidiki dan menyetujui tuntutan kami. Sekian dan Terimakasih. ', '2ed8f3915df1ddef9356c1a5de8d5d0e.jpg', 1, 1, '2019-04-18 10:08:23', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ttd_petisi`
--

CREATE TABLE `ttd_petisi` (
  `id_ttd_petisi` int(11) NOT NULL,
  `komentar` text NOT NULL,
  `id_petitisi` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `status_ttd` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ttd_petisi`
--

INSERT INTO `ttd_petisi` (`id_ttd_petisi`, `komentar`, `id_petitisi`, `id_users`, `status_ttd`, `created_at`, `updated_at`) VALUES
(18, 'saya setuju ', 14, 1, 1, '2019-04-18 09:55:07', '0000-00-00 00:00:00'),
(19, 'setiap warga negara memiliki hak untuk memilih !!!!', 16, 4, 1, '2019-04-18 10:08:23', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
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
  `nomor_telepon` varchar(255) NOT NULL,
  `picture_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `email`, `password`, `nama_depan`, `nama_belakang`, `tentang_saya`, `kota`, `negara`, `twitter`, `tautan_singkat`, `alamat`, `kode_pos`, `bahasa`, `nomor_telepon`, `picture_url`) VALUES
(1, 'charly@app.com', '7abe286d9a05a45357a17818577732db', 'charly ', 'haholongan situmorang', 'nothing', 'jakarta', 'indonesia', '@charly', 'nothing', 'bandung', 14045, 'indonesia', '081311051507', 'aeddcd6f0f52dadfb32d26b2376a1d25.JPG'),
(2, 'faris@app.com', '7abe286d9a05a45357a17818577732db', 'Faris', 'Muhammad', 'nothing', 'bandung', 'indonesia', 'faris@twitter', 'nothing', 'bandung', 14045, 'indonesia', '081212121212', ''),
(3, 'rocky@app.com', 'e03f4e7d6462e4ed73970b479f3c3280', 'rocky', 'gerung', '', '', '', '', '', '', 0, '', '', 'user.jpg'),
(4, 'telkomuniversity@app.com', '55205d2520d2ec0d95d5b89096484157', 'telkom ', 'university', '', 'bandung', 'indonesia', '@telu', '', 'bandung', 40258, 'indonesia', '081311123', '96edba332f87f06a24e75a486ed9a2b5.png'),
(5, 'daniel@app.com', '3215405a06fc83d002fa010bfbc99f7c', 'daniel', 'christoper', '', '', '', '', '', '', 0, '', '', 'user.jpg');

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
  MODIFY `id_petisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `ttd_petisi`
--
ALTER TABLE `ttd_petisi`
  MODIFY `id_ttd_petisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
