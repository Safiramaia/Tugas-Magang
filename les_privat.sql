-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 13, 2024 at 08:07 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `les_privat`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `nidn` int UNSIGNED NOT NULL,
  `nama_dosen` varchar(255) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `kode_jadwal` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nama_pengajar` varchar(30) DEFAULT NULL,
  `nama_mapel` varchar(30) DEFAULT NULL,
  `hari` varchar(20) DEFAULT NULL,
  `ruang` varchar(20) DEFAULT NULL,
  `kelas` varchar(30) DEFAULT NULL,
  `waktu_mulai` time DEFAULT NULL,
  `waktu_selesai` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`kode_jadwal`, `nama_pengajar`, `nama_mapel`, `hari`, `ruang`, `kelas`, `waktu_mulai`, `waktu_selesai`) VALUES
('J.01', 'Purboyo Broto', 'Bahasa Indonesia', 'Senin', 'R.2', 'Kelas 4', '15:30:00', '17:00:00'),
('J.02', 'Novita Dian', 'Fisika', 'Rabu', 'R.1', 'Kelas 8', '19:00:00', '20:30:00'),
('J.03', 'Fadillah Romdona', 'Kimia', 'Kamis', 'R.3', 'Kelas 6', '13:00:00', '14:30:00'),
('J.04', 'Fiqhi Naura', 'Fisika', 'Selasa', 'R.5', 'Kelas 9', '13:00:00', '14:30:00'),
('J.05', 'Tegar Panggalih', 'Biologi', 'Kamis', 'R.7', 'Kelas 10', '13:00:00', '14:30:00'),
('J.06', 'Ahmad Choerul', 'Matematika', 'Jumat', 'R.9', 'Kelas 12', '19:00:00', '20:30:00'),
('J.07', 'Emaloroes Jernih', 'IPA', 'Senin', 'R.4', 'Kelas 5', '15:30:00', '17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `kehadiran`
--

CREATE TABLE `kehadiran` (
  `id_hadir` int NOT NULL,
  `id` int NOT NULL,
  `nama_siswa` varchar(100) DEFAULT NULL,
  `tgl_hadir` date DEFAULT NULL,
  `status_hadir` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kehadiran`
--

INSERT INTO `kehadiran` (`id_hadir`, `id`, `nama_siswa`, `tgl_hadir`, `status_hadir`) VALUES
(1, 10021, 'Safira Maia  Prasasti', '2024-01-03', 'Hadir');

-- --------------------------------------------------------

--
-- Table structure for table `kehadiran_pengajar`
--

CREATE TABLE `kehadiran_pengajar` (
  `id` int NOT NULL,
  `id_pengajar` int NOT NULL,
  `nama_pengajar` varchar(30) DEFAULT NULL,
  `tgl_hadir` date DEFAULT NULL,
  `pokok_bahasan` varchar(50) DEFAULT NULL,
  `status_hadir` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kehadiran_pengajar`
--

INSERT INTO `kehadiran_pengajar` (`id`, `id_pengajar`, `nama_pengajar`, `tgl_hadir`, `pokok_bahasan`, `status_hadir`) VALUES
(3, 20011, 'Purboyo Broto', '2023-12-01', 'Atom dan Partikel', 'Hadir'),
(7, 20012, 'Novita Dian', '2023-12-03', 'Makhluk Hidup', 'Hadir');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `level` enum('admin','siswa','pengajar') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `email`, `password`, `level`) VALUES
(15, 'admin', 'admin123@gmail.com', '$2y$10$EKkm6DW4dZbuoMFQExBQteunkSn8TnQ//gtpn9L.Bdodp/eon2V6q', 'admin'),
(16, 'pengajar', 'pengajar123@gmail.com', '$2y$10$l.ci8BgfmtGCVZ72vfbChu0itO9FkE4vhGnqgCYbm.YknbjKThKsO', 'pengajar'),
(17, 'siswa', 'siswa123@gmail.com', '$2y$10$ybJnMiDzx.z1siwNntMFCObxOGUgkNwvKod6vY77beU4ZEAO9CUxa', 'siswa'),
(18, 'kaila', 'kailanazael@gmail.com', '$2y$10$520wrhhJqX3soxds5uf1be6Afv8gfJlmMvGiFELKwiuXcKDgRRvMe', 'siswa'),
(19, 'raditya', 'raditya12@gmail.com', '$2y$10$APbxdOtG0n7ff6M6quoqR.WZiGEf8B0KMDSS/HHT.gtiwm0ER2Ry.', 'siswa');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `kode_mapel` int NOT NULL,
  `nama_mapel` varchar(30) DEFAULT NULL,
  `jenjang` varchar(15) DEFAULT NULL,
  `kelas` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`kode_mapel`, `nama_mapel`, `jenjang`, `kelas`) VALUES
(70010, 'Matematika', 'SD', 'Kelas 4'),
(70011, 'Bahasa Indonesia', 'SD', 'Kelas 5'),
(80011, 'Bahasa Indonesia', 'SMP', 'Kelas 7'),
(80015, 'Matematika', 'SMP', 'Kelas 9'),
(90011, 'Bahasa Indonesia', 'SMA', 'Kelas 10'),
(90012, 'Kimia', 'SMA', 'Kelas 10'),
(90016, 'Fisika', 'SMA', 'Kelas 11'),
(90020, 'Biologi', 'SMA', 'Kelas 12');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int NOT NULL,
  `batch` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2024-03-06-132333', 'App\\Database\\Migrations\\Latihan', 'default', 'App', 1709731723, 1),
(2, '2024-03-06-133635', 'App\\Database\\Migrations\\Latihan2', 'default', 'App', 1709732428, 2);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int NOT NULL,
  `nama_siswa` varchar(30) DEFAULT NULL,
  `kelas` varchar(30) DEFAULT NULL,
  `tgl_pembayaran` date DEFAULT NULL,
  `jumlah` decimal(10,3) DEFAULT NULL,
  `status_pembayaran` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `nama_siswa`, `kelas`, `tgl_pembayaran`, `jumlah`, `status_pembayaran`) VALUES
(10021, 'Safira Maia  Prasasti', 'Kelas 9', '2023-12-30', '500.000', 'Lunas'),
(10024, 'Amalia Dyah', 'Kelas 4', '2023-12-30', '500.000', 'Lunas');

-- --------------------------------------------------------

--
-- Table structure for table `pengajar`
--

CREATE TABLE `pengajar` (
  `id` int NOT NULL,
  `nama_pengajar` varchar(50) DEFAULT NULL,
  `jenis_kelamin` varchar(9) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `mapel_binaan` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pengajar`
--

INSERT INTO `pengajar` (`id`, `nama_pengajar`, `jenis_kelamin`, `alamat`, `no_hp`, `email`, `mapel_binaan`) VALUES
(20011, 'Purboyo Broto', 'Laki-laki', 'Mentasan, Cilacap', '085723456711', 'purboyobroto11@gmail.com', 'Bahasa Inggris'),
(20012, 'Novita Dian', 'Perempuan', 'Jalan Swadaya, Cilacap', '081345627890', 'novitadian10@gmail.com', 'Fisika'),
(20013, 'Tegar Panggalih', 'Laki-laki', 'Donan, Cilacap', '089934678123', 'tegarpanggalih03@gmail.com', 'Biologi'),
(20017, 'Yanuar Prayoga', 'Laki-laki', 'Kebumen, Cilacap', '088978561234', 'yanuarprayoga11@gmail.com', 'Bahasa Indonesia'),
(20020, 'Ahmad Choerul', 'Laki-laki', 'Sumpiuh, Kroya', '081213467890', 'ahmadchoerul78@gmail.com', 'Matematika');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int NOT NULL,
  `nama_siswa` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `jenis_kelamin` varchar(9) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `alamat` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `no_hp` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `jenjang` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nama_siswa`, `jenis_kelamin`, `alamat`, `no_hp`, `email`, `jenjang`) VALUES
(10021, 'Safira Maia ', 'Perempuan', 'Jalan Jendral Sudirman RT 09/RW 06 Kroya Cilacap', '085713333394', 'safiraprasasti19@gmail.com', 'SMA'),
(10022, 'Nesya Syafa', 'Perempuan', 'Jalan Radjiman RT 02/RW 12 Cilacap Tengah', '089526824568', 'nesyasyafa22@gmail.com', 'SMA'),
(10024, 'Amalia Dyah', 'Perempuan', 'Jalan Baru, Balikpapan', '087856234512', 'amaliadyah16@gmail.com', 'SD'),
(10027, 'Aurelli Elyzia', 'Perempuan', 'Perumahan Green Hils, Jeruk Legi', '087645214590', 'aurelia18@gmail.com', 'SMA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nidn`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`kode_jadwal`);

--
-- Indexes for table `kehadiran`
--
ALTER TABLE `kehadiran`
  ADD PRIMARY KEY (`id_hadir`),
  ADD KEY `id_siswa` (`id`);

--
-- Indexes for table `kehadiran_pengajar`
--
ALTER TABLE `kehadiran_pengajar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_pengajar` (`id_pengajar`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`kode_mapel`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `pengajar`
--
ALTER TABLE `pengajar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `nidn` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kehadiran_pengajar`
--
ALTER TABLE `kehadiran_pengajar`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kehadiran`
--
ALTER TABLE `kehadiran`
  ADD CONSTRAINT `kehadiran_ibfk_1` FOREIGN KEY (`id`) REFERENCES `siswa` (`id`);

--
-- Constraints for table `kehadiran_pengajar`
--
ALTER TABLE `kehadiran_pengajar`
  ADD CONSTRAINT `fk_id_pengajar` FOREIGN KEY (`id_pengajar`) REFERENCES `pengajar` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `kehadiran_pengajar_ibfk_1` FOREIGN KEY (`id_pengajar`) REFERENCES `pengajar` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
