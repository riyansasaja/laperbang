-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2021 at 08:38 AM
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

--
-- Dumping data for table `bundel_a`
--

INSERT INTO `bundel_a` (`id_bundelA`, `id_perkara`, `jam_upload`, `surat_gugatan`, `sk_bundelA`, `bukti_pemb_panjar`, `majelis_hakim`, `penunjukan_pp`, `penunjukan_js`, `penetapan_hari_sidang`, `relaas_panggilan`, `ba_sidang`, `penetapan_sita`, `ba_sita`, `lampiran_surat`, `surat_bukti_penggugat`, `surat_bukti_tergugat`, `tanggapan_bukti_tergugat`, `tanggapan_bukti_penggugat`, `gambar_situasi`, `surat_lain`) VALUES
(1, 7, '00:00:00', 'Kel_4_Riz_Afdian_Rancangan_Aktualisasi_Perbaikan.pdf', 'Kel_4_Riz_Afdian_Rancangan_Aktualisasi_Perbaikan1.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 7, '00:00:00', 'Kel_4__Riz_Afdian_Bab_III_IV.pdf', 'Kel_4__Riz_Afdian_Bab_III_IV1.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 22, '10:29:40', 'e-hac1.pdf', 'Kel_4_Riz_Afdian_Tugas_Aneka_Mind_Mapping.pdf', NULL, 'e-hac2.pdf', 'Kel_4_Riz_Afdian_Tugas_Aneka_Mind_Mapping1.pdf', 'Pembatasan-Cuti-dan-Bepergian-ke-Luar-Daerah1.pdf', 'Kel_4_Riz_Afdian_Tugas_Aneka_Mind_Mapping2.pdf', 'Pembatasan-Cuti-dan-Bepergian-ke-Luar-Daerah2.pdf', 'Pembatasan-Cuti-dan-Bepergian-ke-Luar-Daerah3.pdf', 'Pembatasan-Cuti-dan-Bepergian-ke-Luar-Daerah4.pdf', 'Kel_4_Riz_Afdian_Tugas_Aneka_Mind_Mapping3.pdf', 'e-hac3.pdf', 'Kel_4_Riz_Afdian_Tugas_Aneka_Mind_Mapping4.pdf', 'e-hac4.pdf', 'Kel_4_Riz_Afdian_Tugas_Aneka_Mind_Mapping5.pdf', 'e-hac5.pdf', 'Kel_4_Riz_Afdian_Tugas_Aneka_Mind_Mapping6.pdf', 'e-hac6.pdf');

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

--
-- Dumping data for table `bundel_b`
--

INSERT INTO `bundel_b` (`id_bundelB`, `id_perkara`, `jam_upload`, `salinan_putusan_pa`, `sk_bundelb`, `akta_banding`, `akta_penerimaan_mb`, `memori_banding`, `akta_pemberitahuan_banding`, `pemberitahuan_penyerahan_mb`, `akta_penerimaankontra_mb`, `kontra_mb`, `pemberitahuan_penyerahankontra_mb`, `relaas_periksa_berkas_pb`, `sk_khusus`, `bukt_pengiriman_bpb`, `bukti_setor_bp_kasnegara`) VALUES
(1, 9, '00:00:00', 'e-hac.pdf', 'Kel_4_Riz_Afdian_Tugas_Aneka_Mind_Mapping.pdf', 'Pembatasan-Cuti-dan-Bepergian-ke-Luar-Daerah.pdf', 'e-hac1.pdf', 'Kel_4_Riz_Afdian_Tugas_Aneka_Mind_Mapping1.pdf', 'e-hac2.pdf', 'Kel_4_Riz_Afdian_Tugas_Aneka_Mind_Mapping2.pdf', 'e-hac3.pdf', 'Kel_4_Riz_Afdian_Tugas_Aneka_Mind_Mapping3.pdf', 'Kel_4_Riz_Afdian_Tugas_Aneka_Mind_Mapping4.pdf', 'e-hac4.pdf', 'Kel_4_Riz_Afdian_Tugas_Aneka_Mind_Mapping5.pdf', 'e-hac5.pdf', 'Kel_4_Riz_Afdian_Tugas_Aneka_Mind_Mapping6.pdf');

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
  `status_perkara` varchar(50) DEFAULT NULL,
  `sp_perkara` varchar(250) DEFAULT NULL,
  `no_perkara_banding` text DEFAULT NULL,
  `putusan_banding` varchar(255) DEFAULT NULL,
  `is_nomor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `list_perkara`
--

INSERT INTO `list_perkara` (`id_perkara`, `id_user`, `no_perkara`, `nm_pihak`, `jns_perkara`, `tgl_register`, `status_perkara`, `sp_perkara`, `no_perkara_banding`, `putusan_banding`, `is_nomor`) VALUES
(1, 2, '24234', 'sfsdf', 'cerai', '0000-00-00', '', '', '', NULL, NULL),
(2, 3, 'ewfefw', 'fefewfwe', 'poligami', '0000-00-00', '', 'sambarang', '', NULL, NULL),
(3, 3, 'fefe', 'fefe', 'poligami', '0000-00-00', '', 'tessssss.docx', '', NULL, NULL),
(4, 3, 'dde', 'dede', 'poligami', '0000-00-00', '', 'tessssss.docx', '', NULL, NULL),
(5, 3, 'ssdfsdf', 'sdfsdfsd', 'cerai', '0000-00-00', '', 'Kel_4__Riz_Afdian_Bab_III_IV.docx', '', NULL, NULL),
(6, 3, '', '', 'cerai', '0000-00-00', '', '', '', NULL, NULL),
(7, 3, '34rfsfs', 'sdfsdfdsf', 'cerai', '0000-00-00', '', 'Kel_4__Riz_Afdian_Bab_III_IV1.docx', '', NULL, NULL),
(8, 3, '342566666', 's', 'cerai', '2021-06-07', '', 'CamScanner_06-03-2021_08_40.pdf', '', NULL, NULL),
(9, 3, 'as', 'ssd', 'poligami', '2021-06-07', '', 'CamScanner_06-03-2021_08_401.pdf', '', NULL, NULL),
(10, 2, '123/XII', 'Jika', 'poligami', '2021-06-07', '', 'CamScanner_06-03-2021_08_402.pdf', '', NULL, NULL),
(11, 2, 'XII/12/02/21', 'ESTERLITA', 'cerai', '2021-06-08', '', NULL, '', NULL, NULL),
(12, 2, 'X12/qwerty', 'lita', 'cerai', '2021-06-11', '', NULL, '', NULL, NULL),
(13, 2, 'Xii/2021', 'naki', 'cerai', '2021-06-11', '', NULL, '', NULL, NULL),
(16, 2, 'XI/13/06/2021', 'dodit', 'poligami', '2021-06-13', '', 'e-hac1.pdf', '', NULL, NULL),
(17, 2, '111', 'dwi', 'poligami', '2021-06-13', '', NULL, '', NULL, NULL),
(18, 6, 'XII/12/20', 'jani', 'cerai', '2021-06-13', '', 'e-hac2.pdf', '', NULL, NULL),
(19, 6, '123', 'noni', 'cerai', '2021-06-13', '', 'e-hac3.pdf', '', NULL, NULL),
(20, 6, '789', 'dodot', 'poligami', '2021-06-14', '', 'Kel_4_Riz_Afdian_Tugas_Aneka_Mind_Mapping4.pdf', '', NULL, NULL),
(21, 6, '777', 'gaga', 'cerai', '2021-06-14', '', 'Kel_4_Riz_Afdian_Tugas_Aneka_Mind_Mapping3.pdf', '', NULL, NULL),
(22, 6, 'XI/12', 'dodo', 'poligami', '2021-06-14', '', 'e-hac4.pdf', '', NULL, NULL);

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
  MODIFY `id_bundelA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `bundel_b`
--
ALTER TABLE `bundel_b`
  MODIFY `id_bundelB` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori_perkara`
--
ALTER TABLE `kategori_perkara`
  MODIFY `id_kaper` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `list_perkara`
--
ALTER TABLE `list_perkara`
  MODIFY `id_perkara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

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
