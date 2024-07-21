-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 03, 2024 at 09:43 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1717249012),
('m130524_201442_init', 1717249016),
('m190124_110200_add_verification_token_column_to_user_table', 1717249016);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kamar`
--

CREATE TABLE `tb_kamar` (
  `no_kamar` char(3) NOT NULL,
  `tipe_kamar` enum('Single','Double','Family','Luxury') NOT NULL,
  `harga_per_malam` int(10) UNSIGNED NOT NULL,
  `status` enum('Tersedia','Tidak Tersedia') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_kamar`
--

INSERT INTO `tb_kamar` (`no_kamar`, `tipe_kamar`, `harga_per_malam`, `status`) VALUES
('1A', 'Single', 200000, 'Tersedia'),
('1B', 'Single', 200000, 'Tersedia'),
('1C', 'Double', 400000, 'Tidak Tersedia'),
('1D', 'Family', 500000, 'Tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengunjung`
--

CREATE TABLE `tb_pengunjung` (
  `nik` varchar(20) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telpon` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pengunjung`
--

INSERT INTO `tb_pengunjung` (`nik`, `nama`, `alamat`, `no_telpon`) VALUES
('3375022105040001', 'Muhammad Wildan Ferdiansyah', 'Dekoro', '085225959650'),
('3375022105040005', 'Yanuar', 'sapuro', '089765432094'),
('3375022105040009', 'Zaki', 'medono', '089765432098'),
('3375030101010007', 'Muhammad Ali Sodiq', 'JL. WR SUPRATMAN 313', '081225009099');

-- --------------------------------------------------------

--
-- Table structure for table `tb_reservasi`
--

CREATE TABLE `tb_reservasi` (
  `id_reservasi` varchar(10) NOT NULL,
  `id_transaksi` varchar(15) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `no_kamar` char(3) NOT NULL,
  `tgl_check_in` date NOT NULL,
  `tgl_check_out` date NOT NULL,
  `status` enum('Dipesan','Selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_reservasi`
--

INSERT INTO `tb_reservasi` (`id_reservasi`, `id_transaksi`, `nik`, `no_kamar`, `tgl_check_in`, `tgl_check_out`, `status`) VALUES
('09887', '', '3375022105040001', '1B', '2024-10-11', '2024-10-13', 'Selesai'),
('12345', '', '3375022105040001', '1A', '0000-00-00', '0000-00-00', 'Selesai'),
('387487', '', '3375022105040001', '1D', '2024-06-12', '2024-06-12', 'Selesai'),
('5676', '', '3375022105040009', '1C', '2024-10-15', '2024-10-17', 'Dipesan'),
('758484', '', '3375022105040009', '1D', '2024-06-05', '2024-06-06', 'Dipesan'),
('R-002', '', '3375022105040001', '1B', '2024-07-01', '2024-07-03', 'Selesai');

--
-- Triggers `tb_reservasi`
--
DELIMITER $$
CREATE TRIGGER `update_status_kamar` AFTER INSERT ON `tb_reservasi` FOR EACH ROW BEGIN
    IF NEW.status = 'Dipesan' THEN
        UPDATE tb_kamar
        SET status = 'Tidak Tersedia'
        WHERE no_kamar = NEW.no_kamar;
    ELSEIF NEW.status IN ('Selesai', 'Dibatalkan') THEN
        UPDATE tb_kamar
        SET status = 'Tersedia'
        WHERE no_kamar = NEW.no_kamar;
    END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_status_reservasi` AFTER UPDATE ON `tb_reservasi` FOR EACH ROW BEGIN
    IF NEW.status = 'Selesai' THEN
        UPDATE tb_kamar
        SET status = 'Tersedia'
        WHERE no_kamar = NEW.no_kamar;
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` varchar(15) NOT NULL,
  `id_reservasi` varchar(10) NOT NULL,
  `tgl_transaksi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `total_harga` int(10) UNSIGNED NOT NULL,
  `status_transaksi` enum('Lunas','Belum Bayar') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_transaksi`, `id_reservasi`, `tgl_transaksi`, `total_harga`, `status_transaksi`) VALUES
('', '5676', '2024-06-05 03:52:02', 800000, 'Belum Bayar'),
('TR-202407030001', 'R-002', '2024-07-02 17:00:00', 400000, 'Lunas');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `password_reset_token` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(3, 'admin', 'yLyF7fQpJhTYIf-dHpZBfb1YOlz-lQNV', '$2y$13$GeyXxCP4URGhUVO42M3bs.cinF2whLkei8PtsS7HAozUgMjQJNUv6', NULL, 'admin@gmail.com', 10, 1717263198, 1717263198, 'wJPOH9aHjWaXwTVavikmkLtOXx_rBAD5_1717263198');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `tb_kamar`
--
ALTER TABLE `tb_kamar`
  ADD PRIMARY KEY (`no_kamar`);

--
-- Indexes for table `tb_pengunjung`
--
ALTER TABLE `tb_pengunjung`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `tb_reservasi`
--
ALTER TABLE `tb_reservasi`
  ADD PRIMARY KEY (`id_reservasi`),
  ADD KEY `nik` (`nik`),
  ADD KEY `no_kamar` (`no_kamar`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_reservasi` (`id_reservasi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_reservasi`
--
ALTER TABLE `tb_reservasi`
  ADD CONSTRAINT `tb_reservasi_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `tb_pengunjung` (`nik`),
  ADD CONSTRAINT `tb_reservasi_ibfk_2` FOREIGN KEY (`no_kamar`) REFERENCES `tb_kamar` (`no_kamar`),
  ADD CONSTRAINT `tb_reservasi_ibfk_3` FOREIGN KEY (`id_transaksi`) REFERENCES `tb_transaksi` (`id_transaksi`);

--
-- Constraints for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `tb_transaksi_ibfk_1` FOREIGN KEY (`id_reservasi`) REFERENCES `tb_reservasi` (`id_reservasi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
