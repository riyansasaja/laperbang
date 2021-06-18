-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2021 at 04:46 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manado_laperbang`
--

-- --------------------------------------------------------

--
-- Table structure for table `bundel_a`
--

CREATE TABLE `bundel_a` (
  `id_bundelA` int(11) NOT NULL,
  `id_perkara` int(11) NOT NULL,
  `jam_upload` time NOT NULL,
  `surat_gugatan` varchar(250) DEFAULT NULL,
  `sk_bundelA` varchar(250) DEFAULT NULL,
  `bukti_pemb_panjar` varchar(250) DEFAULT NULL,
  `majelis_hakim` varchar(250) DEFAULT NULL,
  `penunjukan_pp` varchar(250) DEFAULT NULL,
  `penunjukan_js` varchar(250) DEFAULT NULL,
  `penetapan_hari_sidang` varchar(250) DEFAULT NULL,
  `relaas_panggilan` varchar(250) DEFAULT NULL,
  `ba_sidang` varchar(250) DEFAULT NULL,
  `penetapan_sita` varchar(250) DEFAULT NULL,
  `ba_sita` varchar(250) DEFAULT NULL,
  `lampiran_surat` varchar(250) DEFAULT NULL,
  `surat_bukti_penggugat` varchar(250) DEFAULT NULL,
  `surat_bukti_tergugat` varchar(250) DEFAULT NULL,
  `tanggapan_bukti_tergugat` varchar(250) DEFAULT NULL,
  `tanggapan_bukti_penggugat` varchar(250) DEFAULT NULL,
  `gambar_situasi` varchar(250) DEFAULT NULL,
  `surat_lain` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bundel_b`
--

CREATE TABLE `bundel_b` (
  `id_bundelB` int(11) NOT NULL,
  `id_perkara` int(11) NOT NULL,
  `jam_upload` time NOT NULL,
  `salinan_putusan_pa` varchar(250) DEFAULT NULL,
  `sk_bundelb` varchar(250) DEFAULT NULL,
  `akta_banding` varchar(250) DEFAULT NULL,
  `akta_penerimaan_mb` varchar(250) DEFAULT NULL,
  `memori_banding` varchar(250) DEFAULT NULL,
  `akta_pemberitahuan_banding` varchar(250) DEFAULT NULL,
  `pemberitahuan_penyerahan_mb` varchar(250) DEFAULT NULL,
  `akta_penerimaankontra_mb` varchar(250) DEFAULT NULL,
  `kontra_mb` varchar(250) DEFAULT NULL,
  `pemberitahuan_penyerahankontra_mb` varchar(250) DEFAULT NULL,
  `relaas_periksa_berkas_pb` varchar(250) DEFAULT NULL,
  `sk_khusus` varchar(250) DEFAULT NULL,
  `bukt_pengiriman_bpb` varchar(250) DEFAULT NULL,
  `bukti_setor_bp_kasnegara` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kategori_perkara`
--

CREATE TABLE `kategori_perkara` (
  `id_kaper` int(11) NOT NULL,
  `jns_kaper` varchar(50) DEFAULT NULL,
  `status_kaper` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_perkara`
--

INSERT INTO `kategori_perkara` (`id_kaper`, `jns_kaper`, `status_kaper`) VALUES
(1, 'cerai', 1),
(2, 'poligami', 1);

-- --------------------------------------------------------

--
-- Table structure for table `list_perkara`
--

CREATE TABLE `list_perkara` (
  `id_perkara` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `no_perkara` varchar(50) NOT NULL,
  `nm_pihak` varchar(100) DEFAULT NULL,
  `jns_perkara` varchar(50) NOT NULL,
  `tgl_register` date NOT NULL,
  `no_surat_pengantar` varchar(250) NOT NULL,
  `nm_panitera` varchar(250) NOT NULL,
  `nip_panitera` varchar(250) NOT NULL,
  `banyaknya` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `status_perkara` varchar(50) DEFAULT NULL,
  `sp_perkara` varchar(250) DEFAULT NULL,
  `no_perkara_banding` text DEFAULT NULL,
  `putusan_banding` varchar(255) DEFAULT NULL,
  `is_nomor` int(11) DEFAULT NULL,
  `surat_gugatan` varchar(250) DEFAULT NULL,
  `sk_bundelA` varchar(250) DEFAULT NULL,
  `bukti_pemb_panjar` varchar(250) DEFAULT NULL,
  `majelis_hakim` varchar(250) DEFAULT NULL,
  `penunjukan_pp` varchar(250) DEFAULT NULL,
  `penunjukan_js` varchar(250) DEFAULT NULL,
  `penetapan_hari_sidang` varchar(250) DEFAULT NULL,
  `relaas_panggilan` varchar(250) DEFAULT NULL,
  `ba_sidang` varchar(250) DEFAULT NULL,
  `penetapan_sita` varchar(250) DEFAULT NULL,
  `ba_sita` varchar(250) DEFAULT NULL,
  `lampiran_surat` varchar(250) DEFAULT NULL,
  `surat_bukti_penggugat` varchar(250) DEFAULT NULL,
  `surat_bukti_tergugat` varchar(250) DEFAULT NULL,
  `tanggapan_bukti_tergugat` varchar(250) DEFAULT NULL,
  `tanggapan_bukti_penggugat` varchar(250) DEFAULT NULL,
  `gambar_situasi` varchar(250) DEFAULT NULL,
  `surat_lain` varchar(250) DEFAULT NULL,
  `salinan_putusan_pa` varchar(250) DEFAULT NULL,
  `sk_bundelb` varchar(250) DEFAULT NULL,
  `akta_banding` varchar(250) DEFAULT NULL,
  `akta_penerimaan_mb` varchar(250) DEFAULT NULL,
  `memori_banding` varchar(250) DEFAULT NULL,
  `akta_pemberitahuan_banding` varchar(250) DEFAULT NULL,
  `pemberitahuan_penyerahan_mb` varchar(250) DEFAULT NULL,
  `akta_penerimaankontra_mb` varchar(250) DEFAULT NULL,
  `kontra_mb` varchar(250) DEFAULT NULL,
  `pemberitahuan_penyerahankontra_mb` varchar(250) DEFAULT NULL,
  `relaas_periksa_berkas_pb` varchar(250) DEFAULT NULL,
  `sk_khusus` varchar(250) DEFAULT NULL,
  `bukt_pengiriman_bpb` varchar(250) DEFAULT NULL,
  `bukti_setor_bp_kasnegara` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `list_perkara`
--

INSERT INTO `list_perkara` (`id_perkara`, `id_user`, `no_perkara`, `nm_pihak`, `jns_perkara`, `tgl_register`, `no_surat_pengantar`, `nm_panitera`, `nip_panitera`, `banyaknya`, `keterangan`, `status_perkara`, `sp_perkara`, `no_perkara_banding`, `putusan_banding`, `is_nomor`, `surat_gugatan`, `sk_bundelA`, `bukti_pemb_panjar`, `majelis_hakim`, `penunjukan_pp`, `penunjukan_js`, `penetapan_hari_sidang`, `relaas_panggilan`, `ba_sidang`, `penetapan_sita`, `ba_sita`, `lampiran_surat`, `surat_bukti_penggugat`, `surat_bukti_tergugat`, `tanggapan_bukti_tergugat`, `tanggapan_bukti_penggugat`, `gambar_situasi`, `surat_lain`, `salinan_putusan_pa`, `sk_bundelb`, `akta_banding`, `akta_penerimaan_mb`, `memori_banding`, `akta_pemberitahuan_banding`, `pemberitahuan_penyerahan_mb`, `akta_penerimaankontra_mb`, `kontra_mb`, `pemberitahuan_penyerahankontra_mb`, `relaas_periksa_berkas_pb`, `sk_khusus`, `bukt_pengiriman_bpb`, `bukti_setor_bp_kasnegara`) VALUES
(26, 2, 'XI/15/06', 'dani', 'poligami', '2021-06-15', 'XI/2021', 'rani', '1239999', 1, 'tes', '', '', '', '', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 2, 'XI/13/06/2021', 'zana', 'poligami', '2021-06-15', '12345', 'raka hj', '12346788889', 12, 'tesi', '', 'e-hac11.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 6, '1111', 'dade', 'cerai', '2021-06-15', '2222', 'wer', '123', 2, 'testes', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 6, '123', 'nana', 'poligami', '0000-00-00', '345', 'dadat', '1234567', 2, 'tes', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 3, '12334355466', 'tyyyy', 'cerai', '0000-00-00', '344444', 'tyyyy', '455555', 2, 'tessss', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 3, '5677777', 'rika', 'poligami', '2021-06-15', '4565677', 'yani', '343464557', 3, 'tes', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `is_active` int(11) NOT NULL,
  `data_created` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `role_id`, `is_active`, `data_created`) VALUES
(1, 'Pengadilan Tinggi Agama Manado', 'pta-manado', '$2y$10$zKNxC63heZCgpGadi9mWVO9.zBp5FcUE/mjdJjMrDBj/z/6IctVue', 1, 1, '2021-05-27'),
(2, 'Pengadilan Agama Manado', 'pa-manado', '$2y$10$zKNxC63heZCgpGadi9mWVO9.zBp5FcUE/mjdJjMrDBj/z/6IctVue', 2, 1, '2021-05-27'),
(3, 'Pengadilan Agama Tutuyan', 'pa-tutuyan', '$2y$10$zKNxC63heZCgpGadi9mWVO9.zBp5FcUE/mjdJjMrDBj/z/6IctVue', 2, 1, '2021-05-27'),
(4, 'Pengadilan Agama Bolaang Uki', 'pa-blu', '$2y$10$zKNxC63heZCgpGadi9mWVO9.zBp5FcUE/mjdJjMrDBj/z/6IctVue', 2, 1, '2021-05-27'),
(5, 'Pengadilan Agama Tondano', 'pa-tondano', '$2y$10$zKNxC63heZCgpGadi9mWVO9.zBp5FcUE/mjdJjMrDBj/z/6IctVue', 2, 1, '2021-05-27'),
(6, 'Pengadilan Agama Lolak', 'pa-lolak', '$2y$10$zKNxC63heZCgpGadi9mWVO9.zBp5FcUE/mjdJjMrDBj/z/6IctVue', 2, 1, '2021-05-27'),
(7, 'Pengadilan Agama Boroko', 'pa-boroko', '$2y$10$zKNxC63heZCgpGadi9mWVO9.zBp5FcUE/mjdJjMrDBj/z/6IctVue', 2, 1, '2021-05-27'),
(8, 'Pengadilan Agama Amurang', 'pa-amurang', '$2y$10$zKNxC63heZCgpGadi9mWVO9.zBp5FcUE/mjdJjMrDBj/z/6IctVue', 2, 1, '2021-05-27'),
(9, 'Pengadilan Agama Kotamobagu', 'pa-kotamobagu', '$2y$10$zKNxC63heZCgpGadi9mWVO9.zBp5FcUE/mjdJjMrDBj/z/6IctVue', 2, 1, '2021-05-27'),
(10, 'Pengadilan Agama Tahuna', 'pa-tahuna', '$2y$10$zKNxC63heZCgpGadi9mWVO9.zBp5FcUE/mjdJjMrDBj/z/6IctVue', 2, 1, '2021-05-27'),
(11, 'Pengadilan Agama Bitung', 'pa-bitung', '$2y$10$zKNxC63heZCgpGadi9mWVO9.zBp5FcUE/mjdJjMrDBj/z/6IctVue', 2, 1, '2021-05-27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bundel_a`
--
ALTER TABLE `bundel_a`
  ADD PRIMARY KEY (`id_bundelA`),
  ADD KEY `id_perkara` (`id_perkara`);

--
-- Indexes for table `bundel_b`
--
ALTER TABLE `bundel_b`
  ADD PRIMARY KEY (`id_bundelB`),
  ADD KEY `id_perkara` (`id_perkara`);

--
-- Indexes for table `kategori_perkara`
--
ALTER TABLE `kategori_perkara`
  ADD PRIMARY KEY (`id_kaper`);

--
-- Indexes for table `list_perkara`
--
ALTER TABLE `list_perkara`
  ADD PRIMARY KEY (`id_perkara`),
  ADD KEY `idx_user` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bundel_a`
--
ALTER TABLE `bundel_a`
  MODIFY `id_bundelA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `bundel_b`
--
ALTER TABLE `bundel_b`
  MODIFY `id_bundelB` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kategori_perkara`
--
ALTER TABLE `kategori_perkara`
  MODIFY `id_kaper` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `list_perkara`
--
ALTER TABLE `list_perkara`
  MODIFY `id_perkara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bundel_a`
--
ALTER TABLE `bundel_a`
  ADD CONSTRAINT `bundel_a_ibfk_1` FOREIGN KEY (`id_perkara`) REFERENCES `list_perkara` (`id_perkara`);

--
-- Constraints for table `bundel_b`
--
ALTER TABLE `bundel_b`
  ADD CONSTRAINT `bundel_b_ibfk_1` FOREIGN KEY (`id_perkara`) REFERENCES `list_perkara` (`id_perkara`);

--
-- Constraints for table `list_perkara`
--
ALTER TABLE `list_perkara`
  ADD CONSTRAINT `idx_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
