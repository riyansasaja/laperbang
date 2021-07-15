-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2021 at 03:34 AM
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
-- Table structure for table `catatan_hakim`
--

CREATE TABLE `catatan_hakim` (
  `id_catatan` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_perkara` int(11) DEFAULT NULL,
  `c_surat_gugatan` text DEFAULT NULL,
  `c_sk_bundelA` text DEFAULT NULL,
  `c_bukti_pemb_panjar` text DEFAULT NULL,
  `c_majelis_hakim` text DEFAULT NULL,
  `c_penunjukan_pp` text DEFAULT NULL,
  `c_penunjukan_js` text DEFAULT NULL,
  `c_penetapan_hari_sidang` text DEFAULT NULL,
  `c_relaas_panggilan` text DEFAULT NULL,
  `c_ba_sidang` text DEFAULT NULL,
  `c_penetapan_sita` text DEFAULT NULL,
  `c_ba_sita` text DEFAULT NULL,
  `c_lampiran_surat` text DEFAULT NULL,
  `c_surat_bukti_penggugat` text DEFAULT NULL,
  `c_surat_bukti_tergugat` text DEFAULT NULL,
  `c_tanggapan_bukti_tergugat` text DEFAULT NULL,
  `c_tanggapan_bukti_penggugat` text DEFAULT NULL,
  `c_gambar_situasi` text DEFAULT NULL,
  `c_surat_lain` text DEFAULT NULL,
  `c_salinan_putusan_pa` text DEFAULT NULL,
  `c_sk_bundelb` text DEFAULT NULL,
  `c_akta_banding` text DEFAULT NULL,
  `c_akta_penerimaan_mb` text DEFAULT NULL,
  `c_memori_banding` text DEFAULT NULL,
  `c_akta_pemberitahuan_banding` text DEFAULT NULL,
  `c_pemberitahuan_penyerahan_mb` text DEFAULT NULL,
  `c_kontra_mb` text DEFAULT NULL,
  `c_pemberitahuan_penyerahankontra_mb` text DEFAULT NULL,
  `c_relaas_periksa_berkas_pb` text DEFAULT NULL,
  `c_sk_khusus` text DEFAULT NULL,
  `c_bukt_pengiriman_bpb` text DEFAULT NULL,
  `c_bukti_setor_bp_kasnegara` text DEFAULT NULL,
  `c_surat_lainnya_b` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catatan_hakim`
--

INSERT INTO `catatan_hakim` (`id_catatan`, `id_user`, `id_perkara`, `c_surat_gugatan`, `c_sk_bundelA`, `c_bukti_pemb_panjar`, `c_majelis_hakim`, `c_penunjukan_pp`, `c_penunjukan_js`, `c_penetapan_hari_sidang`, `c_relaas_panggilan`, `c_ba_sidang`, `c_penetapan_sita`, `c_ba_sita`, `c_lampiran_surat`, `c_surat_bukti_penggugat`, `c_surat_bukti_tergugat`, `c_tanggapan_bukti_tergugat`, `c_tanggapan_bukti_penggugat`, `c_gambar_situasi`, `c_surat_lain`, `c_salinan_putusan_pa`, `c_sk_bundelb`, `c_akta_banding`, `c_akta_penerimaan_mb`, `c_memori_banding`, `c_akta_pemberitahuan_banding`, `c_pemberitahuan_penyerahan_mb`, `c_kontra_mb`, `c_pemberitahuan_penyerahankontra_mb`, `c_relaas_periksa_berkas_pb`, `c_sk_khusus`, `c_bukt_pengiriman_bpb`, `c_bukti_setor_bp_kasnegara`, `c_surat_lainnya_b`) VALUES
(1, 12, 40, 'test komentar hakim 1', 'test komentar hakim 1 sk bundel A', 'test bukti pemb panjar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 13, 40, 'tes komentar hakim 2', 'tes komentar hakim 2 di sk bundel a', 'tes komentar hakim 2 bukt pemb panjar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 13, 40, 'test ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `catatan_hakim_baru`
--

CREATE TABLE `catatan_hakim_baru` (
  `id_catatan` int(11) NOT NULL,
  `id_perkara` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nm_berkas` varchar(250) DEFAULT NULL,
  `catatan` text DEFAULT NULL,
  `time` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catatan_hakim_baru`
--

INSERT INTO `catatan_hakim_baru` (`id_catatan`, `id_perkara`, `id_user`, `nm_berkas`, `catatan`, `time`) VALUES
(12, 40, 12, 'c_surat_gugatan', 'test surat gugatan', '29-06-2021 11:18:22'),
(13, 40, 12, 'c_sk_bundelA', 'tes ehac', '29-06-2021 11:18:40'),
(14, 40, 12, 'c_surat_gugatan', 'tes ehac', '29-06-2021 11:18:40'),
(15, 40, 12, 'c_surat_gugatan', 'surat pertama', '29-06-2021 11:24:35'),
(16, 40, 12, 'c_surat_gugatan', 'surat kedua', '29-06-2021 11:25:03'),
(17, 40, 12, 'c_sk_bundelA', 'surat kedua', '29-06-2021 11:25:03'),
(18, 40, 12, 'c_sk_bundelA', 'tes lagi', '29-06-2021 11:28:15'),
(19, 40, 12, 'c_sk_bundelA', 'coba lagi', '29-06-2021 11:29:16'),
(20, 40, 12, 'c_surat_gugatan', 'yuk bisa\n', '29-06-2021 11:56:30'),
(21, 40, 12, 'c_sk_bundelA', 'tes', '29-06-2021 11:59:50'),
(22, 40, 12, 'c_sk_bundelA', 'tes234', '29-06-2021 12:02:46'),
(23, 40, 12, 'c_sk_bundelA', 'coba', '29-06-2021 12:04:41'),
(24, 40, 12, 'c_sk_bundelA', 'nah', '29-06-2021 12:04:56'),
(25, 40, 12, 'c_sk_bundelA', 'nah', '29-06-2021 12:04:56'),
(26, 40, 12, 'c_surat_gugatan', 'nah', '29-06-2021 12:04:56'),
(27, 40, 12, 'c_surat_gugatan', 'coba', '29-06-2021 12:05:51'),
(28, 40, 12, 'c_sk_bundelA', 'sekali lagi', '29-06-2021 12:06:19'),
(29, 40, 12, 'c_sk_bundelA', 'lagi 123', '29-06-2021 12:06:41'),
(30, 40, 12, 'c_surat_gugatan', 'lagi 123', '29-06-2021 12:06:41'),
(31, 41, 22, 'c_surat_gugatan', 'Mohon untuk ditindak lanjuti', '10-07-2021 11:44:41');

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
(3, 'Cerai Talak', 1),
(4, 'Cerai Gugat', 1),
(5, 'Harta Bersama', 1),
(6, 'Kewarisan', 1),
(7, 'Wasiat', 1),
(8, 'Hibah', 1),
(9, 'Wakaf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `list_perkara`
--

CREATE TABLE `list_perkara` (
  `id_perkara` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `no_perkara` varchar(50) NOT NULL,
  `nm_pihak_penggugat` varchar(100) DEFAULT NULL,
  `nm_pihak_tergugat` varchar(100) NOT NULL,
  `jns_perkara` varchar(50) NOT NULL,
  `tgl_register` date NOT NULL,
  `no_surat_pengantar` varchar(250) NOT NULL,
  `pejabat_berwenang` varchar(100) NOT NULL,
  `nm_pejabat` varchar(250) NOT NULL,
  `nip_pejabat` varchar(18) NOT NULL,
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
  `salinan_putusan_pa_rtf` varchar(250) DEFAULT NULL,
  `sk_bundelb` varchar(250) DEFAULT NULL,
  `akta_banding` varchar(250) DEFAULT NULL,
  `akta_penerimaan_mb` varchar(250) DEFAULT NULL,
  `memori_banding` varchar(250) DEFAULT NULL,
  `memori_banding_rtf` varchar(250) DEFAULT NULL,
  `akta_pemberitahuan_banding` varchar(250) DEFAULT NULL,
  `pemberitahuan_penyerahan_mb` varchar(250) DEFAULT NULL,
  `akta_penerimaankontra_mb` varchar(250) DEFAULT NULL,
  `kontra_mb` varchar(250) DEFAULT NULL,
  `kontra_mb_rtf` varchar(250) DEFAULT NULL,
  `pemberitahuan_penyerahankontra_mb` varchar(250) DEFAULT NULL,
  `relaas_periksa_berkas_pb` varchar(250) DEFAULT NULL,
  `sk_khusus` varchar(250) DEFAULT NULL,
  `bukt_pengiriman_bpb` varchar(250) DEFAULT NULL,
  `bukti_setor_bp_kasnegara` varchar(250) DEFAULT NULL,
  `surat_lainnya_b` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `list_perkara`
--

INSERT INTO `list_perkara` (`id_perkara`, `id_user`, `no_perkara`, `nm_pihak_penggugat`, `nm_pihak_tergugat`, `jns_perkara`, `tgl_register`, `no_surat_pengantar`, `pejabat_berwenang`, `nm_pejabat`, `nip_pejabat`, `banyaknya`, `keterangan`, `status_perkara`, `sp_perkara`, `no_perkara_banding`, `putusan_banding`, `is_nomor`, `surat_gugatan`, `sk_bundelA`, `bukti_pemb_panjar`, `majelis_hakim`, `penunjukan_pp`, `penunjukan_js`, `penetapan_hari_sidang`, `relaas_panggilan`, `ba_sidang`, `penetapan_sita`, `ba_sita`, `lampiran_surat`, `surat_bukti_penggugat`, `surat_bukti_tergugat`, `tanggapan_bukti_tergugat`, `tanggapan_bukti_penggugat`, `gambar_situasi`, `surat_lain`, `salinan_putusan_pa`, `salinan_putusan_pa_rtf`, `sk_bundelb`, `akta_banding`, `akta_penerimaan_mb`, `memori_banding`, `memori_banding_rtf`, `akta_pemberitahuan_banding`, `pemberitahuan_penyerahan_mb`, `akta_penerimaankontra_mb`, `kontra_mb`, `kontra_mb_rtf`, `pemberitahuan_penyerahankontra_mb`, `relaas_periksa_berkas_pb`, `sk_khusus`, `bukt_pengiriman_bpb`, `bukti_setor_bp_kasnegara`, `surat_lainnya_b`) VALUES
(40, 3, '1/Pdt.G/2021/PA.Tty', 'ani', 'dani', 'Kewarisan', '2021-06-25', 'W18.A10/2/HK.05/06/2021', 'Panitera', 'rian', '123423453454564567', 1, '', 'Pengiriman Salinan Putusan', 'e-hac6.pdf', '3456/Pdt.G/2021/PTA.Mdo', 'Putusan_48_PDT_G_2019_PA_BLU2.pdf', NULL, 'CamScanner_06-03-2021_08_409.pdf', 'e-hac12.pdf', 'Kel_4_Riz_Afdian_Tugas_Aneka_Mind_Mapping8.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'The_Importance_of_IT_in_Goverment_Sector_(1)3.pdf', 'Surat_Pengantar_-_pa_thn4.rtf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, 2, '1234/Pdt.G/2021/PA.Mdo', 'wewe', 'wewe', 'Cerai Gugat', '2021-07-01', 'W18.A1/233/HK.05/07/2021', 'Panitera', 'wedf', '324534566556757576', 1, 'tes', 'Pengiriman Salinan Putusan', NULL, '2344444/Pdt.G/2021/PTA.Mdo', 'Putusan_48_PDT_G_2019_PA_BLU1.pdf', NULL, '1__Surat_Permohonan_Pemohon.pdf', NULL, '2__Kwitansi-SKUM.pdf', '3__PMH.pdf', '4__Surat_Penunjukan_Panitera.pdf', '5__Surat_Penunjukan_Jurusita.pdf', '6__PHS.pdf', '7__Relas_Panggilan.pdf', '8__BAS_PERTAMA_25_JUNI_2019.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, 2, '24324/Pdt.G/2021/PA.Mdo', 'sadi', 'sasa', 'Harta Bersama', '2021-07-01', 'W18.A1/6777/HK.05/07/2021', 'Panmud Hukum', 'rara', '123445465767867867', 1, 'tes', NULL, NULL, NULL, NULL, NULL, 'CamScanner_06-03-2021_08_40.pdf', '11__BAS_LANJUTAN_02_JULI_2019.pdf', '2__Kwitansi-SKUM.pdf', '3__PMH.pdf', '4__Surat_Penunjukan_Panitera.pdf', '5__Surat_Penunjukan_Jurusita.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, 3, '12/Pdt.G/2021/PA.Tty', 'wew', 'wewee', 'Cerai Talak', '2021-07-01', 'W18.A10/12/HK.05/07/2021', 'Panitera', 'aaaa', '123124124123121212', 1, 'wew', NULL, NULL, NULL, NULL, NULL, '1__Surat_Permohonan_Pemohon1.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, 2, '547567/Pdt.G/2021/PA.Mdo', 'adit', 'ka poy', 'Hibah', '2021-07-01', 'W18.A1/3444444/HK.05/07/2021', 'Panitera', 'jay', '123242534543645645', 1, 'tes', NULL, NULL, NULL, NULL, NULL, '1__Surat_Permohonan_Pemohon2.pdf', NULL, '2__Kwitansi-SKUM1.pdf', '3__PMH2.pdf', '4__Surat_Penunjukan_Panitera1.pdf', '5__Surat_Penunjukan_Jurusita1.pdf', '6__PHS1.pdf', '7__Relas_Panggilan1.pdf', '8__BAS_PERTAMA_25_JUNI_20191.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(45, 2, '123444/Pdt.G/2021/PA.Mdo', 'runa', 'rika', 'Cerai Talak', '2021-07-02', 'W18.A1/122222/HK.05/07/2021', 'Panmud Gugatan', 'nana', '121323434345345465', 1, 'tes', NULL, 'CamScanner_06-03-2021_08_40.pdf', NULL, NULL, NULL, '1__Surat_Permohonan_Pemohon1.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, 3, '1278990/Pdt.G/2021/PA.Tty', 'raka', 'rika', 'Harta Bersama', '2021-07-13', 'W18.A10/3440/HK.05/07/2021', 'Panitera', 'Tika', '024923423434354545', 1, '', NULL, NULL, '11124/Pdt.G/2021/PTA.Mdo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `log_audittrail`
--

CREATE TABLE `log_audittrail` (
  `log_id` int(5) NOT NULL,
  `isi_log` text CHARACTER SET latin1 DEFAULT NULL,
  `rekam_log` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `nama_log` varchar(50) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log_audittrail`
--

INSERT INTO `log_audittrail` (`log_id`, `isi_log`, `rekam_log`, `nama_log`) VALUES
(1, 'User <b>Pengadilan Agama Tutuyan</b> telah menambah data perkara', '2021-07-13 14:34:50', 'Pengadilan Agama Tutuyan'),
(2, 'User <b>Pengadilan Agama Tutuyan</b> telah upload surat pengantar pada nomor perkara <b></b>', '2021-07-13 14:54:29', 'Pengadilan Agama Tutuyan'),
(3, 'User <b>Pengadilan Agama Tutuyan</b> telah upload surat pengantar pada nomor perkara <b>46</b>', '2021-07-13 14:56:45', 'Pengadilan Agama Tutuyan'),
(4, 'User <b>Pengadilan Agama Tutuyan</b> telah upload surat pengantar pada id perkara <b>46</b>', '2021-07-13 14:58:17', 'Pengadilan Agama Tutuyan'),
(5, 'User <b>Pengadilan Agama Tutuyan</b> telah upload surat pengantar pada id perkara <b>46</b>', '2021-07-13 14:58:51', 'Pengadilan Agama Tutuyan'),
(6, 'User <b>Pengadilan Agama Tutuyan</b> telah upload surat pengantar pada id perkara <b>46</b>', '2021-07-13 15:00:04', 'Pengadilan Agama Tutuyan'),
(7, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input nomor perkara banding pada id perkara <b>46</b>', '2021-07-13 15:18:06', 'Pengadilan Tinggi Agama Manado'),
(8, 'User <b>Pengadilan Agama Tutuyan</b> telah upload surat pengantar pada id perkara <b>46</b>', '2021-07-14 03:14:22', 'Pengadilan Agama Tutuyan'),
(9, 'User <b>Pengadilan Agama Tutuyan</b> telah upload surat pengantar pada id perkara <b>46</b>', '2021-07-14 03:17:17', 'Pengadilan Agama Tutuyan'),
(10, 'User <b>Pengadilan Agama Tutuyan</b> telah upload surat pengantar pada id perkara <b>46</b>', '2021-07-14 03:19:15', 'Pengadilan Agama Tutuyan');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `kode_pa` varchar(20) NOT NULL,
  `is_active` int(11) DEFAULT NULL,
  `data_created` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `username`, `password`, `role_id`, `kode_pa`, `is_active`, `data_created`) VALUES
(1, 'Pengadilan Tinggi Agama Manado', '', 'pta-manado', '$2y$10$zKNxC63heZCgpGadi9mWVO9.zBp5FcUE/mjdJjMrDBj/z/6IctVue', 1, 'PTA.Mdo', 1, '2021-05-27'),
(2, 'Pengadilan Agama Manado', '', 'pa-manado', '$2y$10$zKNxC63heZCgpGadi9mWVO9.zBp5FcUE/mjdJjMrDBj/z/6IctVue', 2, 'PA.Mdo', 1, '2021-05-27'),
(3, 'Pengadilan Agama Tutuyan', '', 'pa-tutuyan', '$2y$10$zKNxC63heZCgpGadi9mWVO9.zBp5FcUE/mjdJjMrDBj/z/6IctVue', 2, 'PA.Tty', 1, '2021-05-27'),
(4, 'Pengadilan Agama Bolaang Uki', '', 'pa-blu', '$2y$10$zKNxC63heZCgpGadi9mWVO9.zBp5FcUE/mjdJjMrDBj/z/6IctVue', 2, 'PA.Blu', 1, '2021-05-27'),
(5, 'Pengadilan Agama Tondano', '', 'pa-tondano', '$2y$10$zKNxC63heZCgpGadi9mWVO9.zBp5FcUE/mjdJjMrDBj/z/6IctVue', 2, 'PA.Tdo', 1, '2021-05-27'),
(6, 'Pengadilan Agama Lolak', '', 'pa-lolak', '$2y$10$zKNxC63heZCgpGadi9mWVO9.zBp5FcUE/mjdJjMrDBj/z/6IctVue', 2, 'PA.Llk', 1, '2021-05-27'),
(7, 'Pengadilan Agama Boroko', '', 'pa-boroko', '$2y$10$zKNxC63heZCgpGadi9mWVO9.zBp5FcUE/mjdJjMrDBj/z/6IctVue', 2, 'PA.Brk', 1, '2021-05-27'),
(8, 'Pengadilan Agama Amurang', '', 'pa-amurang', '$2y$10$zKNxC63heZCgpGadi9mWVO9.zBp5FcUE/mjdJjMrDBj/z/6IctVue', 2, 'PA.Amg', 1, '2021-05-27'),
(9, 'Pengadilan Agama Kotamobagu', '', 'pa-kotamobagu', '$2y$10$zKNxC63heZCgpGadi9mWVO9.zBp5FcUE/mjdJjMrDBj/z/6IctVue', 2, 'PA.Ktg', 1, '2021-05-27'),
(10, 'Pengadilan Agama Tahuna', '', 'pa-tahuna', '$2y$10$zKNxC63heZCgpGadi9mWVO9.zBp5FcUE/mjdJjMrDBj/z/6IctVue', 2, 'PA.Thn', 1, '2021-05-27'),
(11, 'Pengadilan Agama Bitung', '', 'pa-bitung', '$2y$10$zKNxC63heZCgpGadi9mWVO9.zBp5FcUE/mjdJjMrDBj/z/6IctVue', 2, 'PA.Btg', 1, '2021-05-27'),
(12, 'rizafdi', 'rizaf@gmail.com', 'rizaf', '$2y$10$xOcfOniDzDbK6hwYJLfTB.rP9FaZwukTLzvo.RDcUbV7rg9dXhsiK', 3, '', 1, '2021-06-25'),
(13, 'rian', 'rian@gmail.com', 'rian', '$2y$10$zKNxC63heZCgpGadi9mWVO9.zBp5FcUE/mjdJjMrDBj/z/6IctVue', 3, 'PTA.Mdo', 1, '2021-06-29'),
(20, 'Ramla A', 'ramla@gm.com', 'ramlaaa', '$2y$10$UReJvi8Zz4LOHTY4INqnLemEHKdycpNMDT.tZ3Vq7FnnTWcQimIt.', 3, '', 1, NULL),
(22, 'Drs. H. Abdul Hakim, M.HI.', 'afdianriz@gmail.com', 'Abdul Hakim', '$2y$10$9n4va8VaJGjcHZE5haMAru5fAWbDQNveUn8Yoa7mYUavFfd/4Rp/O', 3, '', 1, NULL);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_all_perkara`
-- (See below for the actual view)
--
CREATE TABLE `v_all_perkara` (
`id_perkara` int(11)
,`id_user` int(11)
,`no_perkara` varchar(50)
,`nm_pihak_penggugat` varchar(100)
,`nm_pihak_tergugat` varchar(100)
,`jns_perkara` varchar(50)
,`tgl_register` date
,`no_surat_pengantar` varchar(250)
,`pejabat_berwenang` varchar(100)
,`nm_pejabat` varchar(250)
,`nip_pejabat` varchar(18)
,`banyaknya` int(11)
,`keterangan` text
,`status_perkara` varchar(50)
,`sp_perkara` varchar(250)
,`no_perkara_banding` text
,`putusan_banding` varchar(255)
,`is_nomor` int(11)
,`surat_gugatan` varchar(250)
,`sk_bundelA` varchar(250)
,`bukti_pemb_panjar` varchar(250)
,`majelis_hakim` varchar(250)
,`penunjukan_pp` varchar(250)
,`penunjukan_js` varchar(250)
,`penetapan_hari_sidang` varchar(250)
,`relaas_panggilan` varchar(250)
,`ba_sidang` varchar(250)
,`penetapan_sita` varchar(250)
,`ba_sita` varchar(250)
,`lampiran_surat` varchar(250)
,`surat_bukti_penggugat` varchar(250)
,`surat_bukti_tergugat` varchar(250)
,`tanggapan_bukti_tergugat` varchar(250)
,`tanggapan_bukti_penggugat` varchar(250)
,`gambar_situasi` varchar(250)
,`surat_lain` varchar(250)
,`salinan_putusan_pa` varchar(250)
,`salinan_putusan_pa_rtf` varchar(250)
,`sk_bundelb` varchar(250)
,`akta_banding` varchar(250)
,`akta_penerimaan_mb` varchar(250)
,`memori_banding` varchar(250)
,`memori_banding_rtf` varchar(250)
,`akta_pemberitahuan_banding` varchar(250)
,`pemberitahuan_penyerahan_mb` varchar(250)
,`akta_penerimaankontra_mb` varchar(250)
,`kontra_mb` varchar(250)
,`kontra_mb_rtf` varchar(250)
,`pemberitahuan_penyerahankontra_mb` varchar(250)
,`relaas_periksa_berkas_pb` varchar(250)
,`sk_khusus` varchar(250)
,`bukt_pengiriman_bpb` varchar(250)
,`bukti_setor_bp_kasnegara` varchar(250)
,`surat_lainnya_b` varchar(250)
,`id` int(11)
,`nama` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_berkas_hakim`
-- (See below for the actual view)
--
CREATE TABLE `v_berkas_hakim` (
`id_perkara` int(11)
,`id_user` int(11)
,`no_perkara` varchar(50)
,`nm_pihak_penggugat` varchar(100)
,`nm_pihak_tergugat` varchar(100)
,`jns_perkara` varchar(50)
,`tgl_register` date
,`no_surat_pengantar` varchar(250)
,`pejabat_berwenang` varchar(100)
,`nm_pejabat` varchar(250)
,`nip_pejabat` varchar(18)
,`banyaknya` int(11)
,`keterangan` text
,`status_perkara` varchar(50)
,`sp_perkara` varchar(250)
,`no_perkara_banding` text
,`putusan_banding` varchar(255)
,`is_nomor` int(11)
,`surat_gugatan` varchar(250)
,`sk_bundelA` varchar(250)
,`bukti_pemb_panjar` varchar(250)
,`majelis_hakim` varchar(250)
,`penunjukan_pp` varchar(250)
,`penunjukan_js` varchar(250)
,`penetapan_hari_sidang` varchar(250)
,`relaas_panggilan` varchar(250)
,`ba_sidang` varchar(250)
,`penetapan_sita` varchar(250)
,`ba_sita` varchar(250)
,`lampiran_surat` varchar(250)
,`surat_bukti_penggugat` varchar(250)
,`surat_bukti_tergugat` varchar(250)
,`tanggapan_bukti_tergugat` varchar(250)
,`tanggapan_bukti_penggugat` varchar(250)
,`gambar_situasi` varchar(250)
,`surat_lain` varchar(250)
,`salinan_putusan_pa` varchar(250)
,`salinan_putusan_pa_rtf` varchar(250)
,`sk_bundelb` varchar(250)
,`akta_banding` varchar(250)
,`akta_penerimaan_mb` varchar(250)
,`memori_banding` varchar(250)
,`memori_banding_rtf` varchar(250)
,`akta_pemberitahuan_banding` varchar(250)
,`pemberitahuan_penyerahan_mb` varchar(250)
,`akta_penerimaankontra_mb` varchar(250)
,`kontra_mb` varchar(250)
,`kontra_mb_rtf` varchar(250)
,`pemberitahuan_penyerahankontra_mb` varchar(250)
,`relaas_periksa_berkas_pb` varchar(250)
,`sk_khusus` varchar(250)
,`bukt_pengiriman_bpb` varchar(250)
,`bukti_setor_bp_kasnegara` varchar(250)
,`surat_lainnya_b` varchar(250)
,`nama` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_catatan_hakim`
-- (See below for the actual view)
--
CREATE TABLE `v_catatan_hakim` (
`id_catatan` int(11)
,`id_user` int(11)
,`id_perkara` int(11)
,`c_surat_gugatan` text
,`c_sk_bundelA` text
,`c_bukti_pemb_panjar` text
,`c_majelis_hakim` text
,`c_penunjukan_pp` text
,`c_penunjukan_js` text
,`c_penetapan_hari_sidang` text
,`c_relaas_panggilan` text
,`c_ba_sidang` text
,`c_penetapan_sita` text
,`c_ba_sita` text
,`c_lampiran_surat` text
,`c_surat_bukti_penggugat` text
,`c_surat_bukti_tergugat` text
,`c_tanggapan_bukti_tergugat` text
,`c_tanggapan_bukti_penggugat` text
,`c_gambar_situasi` text
,`c_surat_lain` text
,`c_salinan_putusan_pa` text
,`c_sk_bundelb` text
,`c_akta_banding` text
,`c_akta_penerimaan_mb` text
,`c_memori_banding` text
,`c_akta_pemberitahuan_banding` text
,`c_pemberitahuan_penyerahan_mb` text
,`c_kontra_mb` text
,`c_pemberitahuan_penyerahankontra_mb` text
,`c_relaas_periksa_berkas_pb` text
,`c_sk_khusus` text
,`c_bukt_pengiriman_bpb` text
,`c_bukti_setor_bp_kasnegara` text
,`c_surat_lainnya_b` text
,`nama` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_c_hakim`
-- (See below for the actual view)
--
CREATE TABLE `v_c_hakim` (
`id_catatan` int(11)
,`id_perkara` int(11)
,`id_user` int(11)
,`nm_berkas` varchar(250)
,`catatan` text
,`time` varchar(50)
,`nama` varchar(50)
);

-- --------------------------------------------------------

--
-- Structure for view `v_all_perkara`
--
DROP TABLE IF EXISTS `v_all_perkara`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_all_perkara`  AS SELECT `list_perkara`.`id_perkara` AS `id_perkara`, `list_perkara`.`id_user` AS `id_user`, `list_perkara`.`no_perkara` AS `no_perkara`, `list_perkara`.`nm_pihak_penggugat` AS `nm_pihak_penggugat`, `list_perkara`.`nm_pihak_tergugat` AS `nm_pihak_tergugat`, `list_perkara`.`jns_perkara` AS `jns_perkara`, `list_perkara`.`tgl_register` AS `tgl_register`, `list_perkara`.`no_surat_pengantar` AS `no_surat_pengantar`, `list_perkara`.`pejabat_berwenang` AS `pejabat_berwenang`, `list_perkara`.`nm_pejabat` AS `nm_pejabat`, `list_perkara`.`nip_pejabat` AS `nip_pejabat`, `list_perkara`.`banyaknya` AS `banyaknya`, `list_perkara`.`keterangan` AS `keterangan`, `list_perkara`.`status_perkara` AS `status_perkara`, `list_perkara`.`sp_perkara` AS `sp_perkara`, `list_perkara`.`no_perkara_banding` AS `no_perkara_banding`, `list_perkara`.`putusan_banding` AS `putusan_banding`, `list_perkara`.`is_nomor` AS `is_nomor`, `list_perkara`.`surat_gugatan` AS `surat_gugatan`, `list_perkara`.`sk_bundelA` AS `sk_bundelA`, `list_perkara`.`bukti_pemb_panjar` AS `bukti_pemb_panjar`, `list_perkara`.`majelis_hakim` AS `majelis_hakim`, `list_perkara`.`penunjukan_pp` AS `penunjukan_pp`, `list_perkara`.`penunjukan_js` AS `penunjukan_js`, `list_perkara`.`penetapan_hari_sidang` AS `penetapan_hari_sidang`, `list_perkara`.`relaas_panggilan` AS `relaas_panggilan`, `list_perkara`.`ba_sidang` AS `ba_sidang`, `list_perkara`.`penetapan_sita` AS `penetapan_sita`, `list_perkara`.`ba_sita` AS `ba_sita`, `list_perkara`.`lampiran_surat` AS `lampiran_surat`, `list_perkara`.`surat_bukti_penggugat` AS `surat_bukti_penggugat`, `list_perkara`.`surat_bukti_tergugat` AS `surat_bukti_tergugat`, `list_perkara`.`tanggapan_bukti_tergugat` AS `tanggapan_bukti_tergugat`, `list_perkara`.`tanggapan_bukti_penggugat` AS `tanggapan_bukti_penggugat`, `list_perkara`.`gambar_situasi` AS `gambar_situasi`, `list_perkara`.`surat_lain` AS `surat_lain`, `list_perkara`.`salinan_putusan_pa` AS `salinan_putusan_pa`, `list_perkara`.`salinan_putusan_pa_rtf` AS `salinan_putusan_pa_rtf`, `list_perkara`.`sk_bundelb` AS `sk_bundelb`, `list_perkara`.`akta_banding` AS `akta_banding`, `list_perkara`.`akta_penerimaan_mb` AS `akta_penerimaan_mb`, `list_perkara`.`memori_banding` AS `memori_banding`, `list_perkara`.`memori_banding_rtf` AS `memori_banding_rtf`, `list_perkara`.`akta_pemberitahuan_banding` AS `akta_pemberitahuan_banding`, `list_perkara`.`pemberitahuan_penyerahan_mb` AS `pemberitahuan_penyerahan_mb`, `list_perkara`.`akta_penerimaankontra_mb` AS `akta_penerimaankontra_mb`, `list_perkara`.`kontra_mb` AS `kontra_mb`, `list_perkara`.`kontra_mb_rtf` AS `kontra_mb_rtf`, `list_perkara`.`pemberitahuan_penyerahankontra_mb` AS `pemberitahuan_penyerahankontra_mb`, `list_perkara`.`relaas_periksa_berkas_pb` AS `relaas_periksa_berkas_pb`, `list_perkara`.`sk_khusus` AS `sk_khusus`, `list_perkara`.`bukt_pengiriman_bpb` AS `bukt_pengiriman_bpb`, `list_perkara`.`bukti_setor_bp_kasnegara` AS `bukti_setor_bp_kasnegara`, `list_perkara`.`surat_lainnya_b` AS `surat_lainnya_b`, `users`.`id` AS `id`, `users`.`nama` AS `nama` FROM (`list_perkara` join `users` on(`list_perkara`.`id_user` = `users`.`id`)) ORDER BY `list_perkara`.`id_perkara` ASC ;

-- --------------------------------------------------------

--
-- Structure for view `v_berkas_hakim`
--
DROP TABLE IF EXISTS `v_berkas_hakim`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_berkas_hakim`  AS SELECT `list_perkara`.`id_perkara` AS `id_perkara`, `list_perkara`.`id_user` AS `id_user`, `list_perkara`.`no_perkara` AS `no_perkara`, `list_perkara`.`nm_pihak_penggugat` AS `nm_pihak_penggugat`, `list_perkara`.`nm_pihak_tergugat` AS `nm_pihak_tergugat`, `list_perkara`.`jns_perkara` AS `jns_perkara`, `list_perkara`.`tgl_register` AS `tgl_register`, `list_perkara`.`no_surat_pengantar` AS `no_surat_pengantar`, `list_perkara`.`pejabat_berwenang` AS `pejabat_berwenang`, `list_perkara`.`nm_pejabat` AS `nm_pejabat`, `list_perkara`.`nip_pejabat` AS `nip_pejabat`, `list_perkara`.`banyaknya` AS `banyaknya`, `list_perkara`.`keterangan` AS `keterangan`, `list_perkara`.`status_perkara` AS `status_perkara`, `list_perkara`.`sp_perkara` AS `sp_perkara`, `list_perkara`.`no_perkara_banding` AS `no_perkara_banding`, `list_perkara`.`putusan_banding` AS `putusan_banding`, `list_perkara`.`is_nomor` AS `is_nomor`, `list_perkara`.`surat_gugatan` AS `surat_gugatan`, `list_perkara`.`sk_bundelA` AS `sk_bundelA`, `list_perkara`.`bukti_pemb_panjar` AS `bukti_pemb_panjar`, `list_perkara`.`majelis_hakim` AS `majelis_hakim`, `list_perkara`.`penunjukan_pp` AS `penunjukan_pp`, `list_perkara`.`penunjukan_js` AS `penunjukan_js`, `list_perkara`.`penetapan_hari_sidang` AS `penetapan_hari_sidang`, `list_perkara`.`relaas_panggilan` AS `relaas_panggilan`, `list_perkara`.`ba_sidang` AS `ba_sidang`, `list_perkara`.`penetapan_sita` AS `penetapan_sita`, `list_perkara`.`ba_sita` AS `ba_sita`, `list_perkara`.`lampiran_surat` AS `lampiran_surat`, `list_perkara`.`surat_bukti_penggugat` AS `surat_bukti_penggugat`, `list_perkara`.`surat_bukti_tergugat` AS `surat_bukti_tergugat`, `list_perkara`.`tanggapan_bukti_tergugat` AS `tanggapan_bukti_tergugat`, `list_perkara`.`tanggapan_bukti_penggugat` AS `tanggapan_bukti_penggugat`, `list_perkara`.`gambar_situasi` AS `gambar_situasi`, `list_perkara`.`surat_lain` AS `surat_lain`, `list_perkara`.`salinan_putusan_pa` AS `salinan_putusan_pa`, `list_perkara`.`salinan_putusan_pa_rtf` AS `salinan_putusan_pa_rtf`, `list_perkara`.`sk_bundelb` AS `sk_bundelb`, `list_perkara`.`akta_banding` AS `akta_banding`, `list_perkara`.`akta_penerimaan_mb` AS `akta_penerimaan_mb`, `list_perkara`.`memori_banding` AS `memori_banding`, `list_perkara`.`memori_banding_rtf` AS `memori_banding_rtf`, `list_perkara`.`akta_pemberitahuan_banding` AS `akta_pemberitahuan_banding`, `list_perkara`.`pemberitahuan_penyerahan_mb` AS `pemberitahuan_penyerahan_mb`, `list_perkara`.`akta_penerimaankontra_mb` AS `akta_penerimaankontra_mb`, `list_perkara`.`kontra_mb` AS `kontra_mb`, `list_perkara`.`kontra_mb_rtf` AS `kontra_mb_rtf`, `list_perkara`.`pemberitahuan_penyerahankontra_mb` AS `pemberitahuan_penyerahankontra_mb`, `list_perkara`.`relaas_periksa_berkas_pb` AS `relaas_periksa_berkas_pb`, `list_perkara`.`sk_khusus` AS `sk_khusus`, `list_perkara`.`bukt_pengiriman_bpb` AS `bukt_pengiriman_bpb`, `list_perkara`.`bukti_setor_bp_kasnegara` AS `bukti_setor_bp_kasnegara`, `list_perkara`.`surat_lainnya_b` AS `surat_lainnya_b`, `users`.`nama` AS `nama` FROM (`list_perkara` join `users` on(`list_perkara`.`id_user` = `users`.`id`)) WHERE `list_perkara`.`no_perkara_banding` <> '' ;

-- --------------------------------------------------------

--
-- Structure for view `v_catatan_hakim`
--
DROP TABLE IF EXISTS `v_catatan_hakim`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_catatan_hakim`  AS SELECT `catatan_hakim`.`id_catatan` AS `id_catatan`, `catatan_hakim`.`id_user` AS `id_user`, `catatan_hakim`.`id_perkara` AS `id_perkara`, `catatan_hakim`.`c_surat_gugatan` AS `c_surat_gugatan`, `catatan_hakim`.`c_sk_bundelA` AS `c_sk_bundelA`, `catatan_hakim`.`c_bukti_pemb_panjar` AS `c_bukti_pemb_panjar`, `catatan_hakim`.`c_majelis_hakim` AS `c_majelis_hakim`, `catatan_hakim`.`c_penunjukan_pp` AS `c_penunjukan_pp`, `catatan_hakim`.`c_penunjukan_js` AS `c_penunjukan_js`, `catatan_hakim`.`c_penetapan_hari_sidang` AS `c_penetapan_hari_sidang`, `catatan_hakim`.`c_relaas_panggilan` AS `c_relaas_panggilan`, `catatan_hakim`.`c_ba_sidang` AS `c_ba_sidang`, `catatan_hakim`.`c_penetapan_sita` AS `c_penetapan_sita`, `catatan_hakim`.`c_ba_sita` AS `c_ba_sita`, `catatan_hakim`.`c_lampiran_surat` AS `c_lampiran_surat`, `catatan_hakim`.`c_surat_bukti_penggugat` AS `c_surat_bukti_penggugat`, `catatan_hakim`.`c_surat_bukti_tergugat` AS `c_surat_bukti_tergugat`, `catatan_hakim`.`c_tanggapan_bukti_tergugat` AS `c_tanggapan_bukti_tergugat`, `catatan_hakim`.`c_tanggapan_bukti_penggugat` AS `c_tanggapan_bukti_penggugat`, `catatan_hakim`.`c_gambar_situasi` AS `c_gambar_situasi`, `catatan_hakim`.`c_surat_lain` AS `c_surat_lain`, `catatan_hakim`.`c_salinan_putusan_pa` AS `c_salinan_putusan_pa`, `catatan_hakim`.`c_sk_bundelb` AS `c_sk_bundelb`, `catatan_hakim`.`c_akta_banding` AS `c_akta_banding`, `catatan_hakim`.`c_akta_penerimaan_mb` AS `c_akta_penerimaan_mb`, `catatan_hakim`.`c_memori_banding` AS `c_memori_banding`, `catatan_hakim`.`c_akta_pemberitahuan_banding` AS `c_akta_pemberitahuan_banding`, `catatan_hakim`.`c_pemberitahuan_penyerahan_mb` AS `c_pemberitahuan_penyerahan_mb`, `catatan_hakim`.`c_kontra_mb` AS `c_kontra_mb`, `catatan_hakim`.`c_pemberitahuan_penyerahankontra_mb` AS `c_pemberitahuan_penyerahankontra_mb`, `catatan_hakim`.`c_relaas_periksa_berkas_pb` AS `c_relaas_periksa_berkas_pb`, `catatan_hakim`.`c_sk_khusus` AS `c_sk_khusus`, `catatan_hakim`.`c_bukt_pengiriman_bpb` AS `c_bukt_pengiriman_bpb`, `catatan_hakim`.`c_bukti_setor_bp_kasnegara` AS `c_bukti_setor_bp_kasnegara`, `catatan_hakim`.`c_surat_lainnya_b` AS `c_surat_lainnya_b`, `users`.`nama` AS `nama` FROM (`catatan_hakim` join `users` on(`catatan_hakim`.`id_user` = `users`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_c_hakim`
--
DROP TABLE IF EXISTS `v_c_hakim`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_c_hakim`  AS SELECT `catatan_hakim_baru`.`id_catatan` AS `id_catatan`, `catatan_hakim_baru`.`id_perkara` AS `id_perkara`, `catatan_hakim_baru`.`id_user` AS `id_user`, `catatan_hakim_baru`.`nm_berkas` AS `nm_berkas`, `catatan_hakim_baru`.`catatan` AS `catatan`, `catatan_hakim_baru`.`time` AS `time`, `users`.`nama` AS `nama` FROM (`catatan_hakim_baru` join `users` on(`catatan_hakim_baru`.`id_user` = `users`.`id`)) ;

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
-- Indexes for table `catatan_hakim`
--
ALTER TABLE `catatan_hakim`
  ADD PRIMARY KEY (`id_catatan`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_perkara` (`id_perkara`);

--
-- Indexes for table `catatan_hakim_baru`
--
ALTER TABLE `catatan_hakim_baru`
  ADD PRIMARY KEY (`id_catatan`),
  ADD KEY `id_perkara` (`id_perkara`),
  ADD KEY `id_user` (`id_user`);

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
-- Indexes for table `log_audittrail`
--
ALTER TABLE `log_audittrail`
  ADD PRIMARY KEY (`log_id`);

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
-- AUTO_INCREMENT for table `catatan_hakim`
--
ALTER TABLE `catatan_hakim`
  MODIFY `id_catatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `catatan_hakim_baru`
--
ALTER TABLE `catatan_hakim_baru`
  MODIFY `id_catatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `kategori_perkara`
--
ALTER TABLE `kategori_perkara`
  MODIFY `id_kaper` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `list_perkara`
--
ALTER TABLE `list_perkara`
  MODIFY `id_perkara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `log_audittrail`
--
ALTER TABLE `log_audittrail`
  MODIFY `log_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

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
-- Constraints for table `catatan_hakim`
--
ALTER TABLE `catatan_hakim`
  ADD CONSTRAINT `catatan_hakim_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `catatan_hakim_ibfk_2` FOREIGN KEY (`id_perkara`) REFERENCES `list_perkara` (`id_perkara`);

--
-- Constraints for table `catatan_hakim_baru`
--
ALTER TABLE `catatan_hakim_baru`
  ADD CONSTRAINT `catatan_hakim_baru_ibfk_1` FOREIGN KEY (`id_perkara`) REFERENCES `list_perkara` (`id_perkara`),
  ADD CONSTRAINT `catatan_hakim_baru_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `list_perkara`
--
ALTER TABLE `list_perkara`
  ADD CONSTRAINT `idx_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
