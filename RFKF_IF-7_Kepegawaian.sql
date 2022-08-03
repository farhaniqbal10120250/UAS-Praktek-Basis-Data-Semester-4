-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2022 at 02:59 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kepegawaian`
--

-- --------------------------------------------------------

--
-- Table structure for table `cuti`
--

CREATE TABLE `cuti` (
  `id_cuti` int(11) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `tanggal_cuti` date NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cuti`
--

INSERT INTO `cuti` (`id_cuti`, `id_karyawan`, `tanggal_cuti`, `jumlah`) VALUES
(101, 1012059, '2021-01-01', 5),
(102, 1012059, '2021-01-02', 6),
(103, 1012059, '2021-01-03', 7),
(104, 10120250, '2021-01-26', 1),
(105, 10120250, '2021-01-27', 2),
(106, 10120250, '2021-01-30', 3),
(107, 10120276, '2021-02-14', 7),
(108, 10120276, '2021-02-24', 8),
(109, 10120276, '2021-02-24', 9);

-- --------------------------------------------------------

--
-- Table structure for table `gaji`
--

CREATE TABLE `gaji` (
  `id_gaji` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` text NOT NULL,
  `jumlah_gaji` int(11) NOT NULL,
  `jumlah_lembur` int(11) NOT NULL,
  `total_gaji` int(11) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `jumlah_cuti` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gaji`
--

INSERT INTO `gaji` (`id_gaji`, `tanggal`, `keterangan`, `jumlah_gaji`, `jumlah_lembur`, `total_gaji`, `id_karyawan`, `jumlah_cuti`) VALUES
(1, '2022-07-30', 'GAJI DAN THR BULAN JANUARI', 50000000, 5, 55000000, 10120276, NULL),
(2, '2022-07-30', 'GAJI DAN THR BULAN JANUARI', 50000000, 1, 55000000, 10120250, NULL),
(3, '2022-07-30', 'GAJI DAN THR BULAN JANUARI', 50000000, 8, 58000000, 1012059, NULL),
(4, '2022-07-30', 'GAJI DAN THR BULAN JANUARI', 50000000, 10, 80000000, 10120710, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `kd_jabatan` varchar(5) NOT NULL,
  `nama_jabatan` varchar(11) DEFAULT NULL,
  `tingkatan` varchar(1) DEFAULT NULL,
  `gaji_pokok` float DEFAULT NULL,
  `transport` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`kd_jabatan`, `nama_jabatan`, `tingkatan`, `gaji_pokok`, `transport`) VALUES
('12342', 'pembina', '4', 120000, 12900),
('12344', 'penyambung', '1', 23000000, 10000),
('12345', 'penegak', '3', 50000000, 10000),
('40001', 'MANAGER AI', '1', 50000000, 10000000),
('40002', 'MANAGER JR', '1', 40000000, 10000000),
('40003', 'MANAGER PG', '1', 70000000, 10000000),
('40004', 'MANAGER AK', '1', 40000000, 10000000),
('40005', 'MANAGER PS', '1', 60000000, 10000000),
('40006', 'DIREKTUR PS', '2', 90000000, 10000000),
('40007', 'DIREKTUR AK', '2', 90000000, 10000000),
('40008', 'DIREKTUR PG', '2', 90000000, 10000000),
('40009', 'DIREKTUR JR', '2', 90000000, 10000000),
('40010', 'DIREKTUR AI', '2', 90000000, 10000000);

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(1) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `telepon` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama`, `tgl_lahir`, `jk`, `alamat`, `telepon`) VALUES
(1012056, 'gawr gura', '2003-08-13', 'P', 'jl. jakarta no 123', '081235729152'),
(1012059, 'KHALID AHMAD ', '2002-07-24', 'L', 'jL adi pati unus no42', '08457234591'),
(10120250, 'MUHAMMAD FURQAN', '2002-08-25', 'L', 'jL adi simatupang no52', '084554674646'),
(10120276, 'FARHAN MAULANA IQBAL', '2002-06-23', 'L', 'JL. bandung no 123', '081265738298'),
(10120710, 'MUHAMMAD RIJAL HASANUDDIN', '2002-09-26', 'L', 'jL adi pancing no62', '084587635214');

--
-- Triggers `karyawan`
--
DELIMITER $$
CREATE TRIGGER `updatealamat` BEFORE UPDATE ON `karyawan` FOR EACH ROW BEGIN
		INSERT INTO logkaryawan
		SET id_karyawan = OLD.id_karyawan,
		alamat_lama = old.alamat,
		alamat_baru = new.alamat;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `lembur`
--

CREATE TABLE `lembur` (
  `id_lembur` varchar(20) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `tanggal_lembur` date NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lembur`
--

INSERT INTO `lembur` (`id_lembur`, `id_karyawan`, `tanggal_lembur`, `jumlah`) VALUES
('1', 10120250, '2022-08-02', 5),
('2', 10120250, '2022-08-23', 5);

--
-- Triggers `lembur`
--
DELIMITER $$
CREATE TRIGGER `updatejumlah` BEFORE UPDATE ON `lembur` FOR EACH ROW BEGIN
		INSERT INTO loglembur
		SET id_karyawan = OLD.id_karyawan,
		jumlah_lama = old.jumlah,
		jumlah_baru = new.jumlah;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `logkaryawan`
--

CREATE TABLE `logkaryawan` (
  `id_log` int(11) NOT NULL,
  `id_karyawan` int(11) DEFAULT NULL,
  `alamat_lama` varchar(100) DEFAULT NULL,
  `alamat_baru` varchar(100) DEFAULT NULL,
  `keterangan` varchar(30) DEFAULT NULL,
  `waktu` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logkaryawan`
--

INSERT INTO `logkaryawan` (`id_log`, `id_karyawan`, `alamat_lama`, `alamat_baru`, `keterangan`, `waktu`) VALUES
(2, 1012059, 'jL adi pati unus no42', 'jL adi pati unus no42', NULL, NULL),
(3, 10120276, 'jL adi nugroho no32', 'JL. kita masih panjang', NULL, NULL),
(4, 10120250, 'jL adi simatupang no52', 'jL adi simatupang no52', NULL, NULL),
(5, 10120276, 'JL. kita masih panjang', 'JL. bandung no 123', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `loglembur`
--

CREATE TABLE `loglembur` (
  `id_log` int(11) NOT NULL,
  `id_karyawan` int(11) DEFAULT NULL,
  `jumlah_lama` varchar(100) NOT NULL,
  `jumlah_baru` varchar(100) NOT NULL,
  `keterangan` varchar(30) DEFAULT NULL,
  `waktu` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loglembur`
--

INSERT INTO `loglembur` (`id_log`, `id_karyawan`, `jumlah_lama`, `jumlah_baru`, `keterangan`, `waktu`) VALUES
(1, 10120710, '4', '5', NULL, NULL),
(2, 10120250, '1', '5', NULL, NULL),
(3, 10120250, '3', '5', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(101, 'gura', '12345678'),
(102, 'user', '12345678'),
(103, 'amelia', 'ohnyo123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`id_cuti`),
  ADD KEY `id_karyawan` (`id_karyawan`);

--
-- Indexes for table `gaji`
--
ALTER TABLE `gaji`
  ADD PRIMARY KEY (`id_gaji`),
  ADD KEY `id_karyawan` (`id_karyawan`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`kd_jabatan`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `lembur`
--
ALTER TABLE `lembur`
  ADD PRIMARY KEY (`id_lembur`),
  ADD KEY `id_karyawan` (`id_karyawan`);

--
-- Indexes for table `logkaryawan`
--
ALTER TABLE `logkaryawan`
  ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `loglembur`
--
ALTER TABLE `loglembur`
  ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gaji`
--
ALTER TABLE `gaji`
  MODIFY `id_gaji` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `logkaryawan`
--
ALTER TABLE `logkaryawan`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `loglembur`
--
ALTER TABLE `loglembur`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
