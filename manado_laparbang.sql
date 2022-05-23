-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 23, 2022 at 01:29 PM
-- Server version: 10.3.34-MariaDB-cll-lve
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manado_laparbang`
--

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
(36, 0, 22, 'c_penunjukan_pp', 'Menurut saya ini sudah bagus', '19-08-2021 06:25:12'),
(37, 0, 22, 'c_surat_gugatan', 'kurang benarmhjkl', '19-08-2021 06:29:35'),
(38, 0, 29, 'c_surat_gugatan', 'okey', '19-08-2021 06:39:14'),
(39, 0, 29, 'c_bukti_pemb_panjar', 'okey', '19-08-2021 06:41:11'),
(40, 0, 29, 'c_ba_sidang', 'perkara perdata \nharusnya perdata tertentu\nselasa...\nharusnya selasa tanggal.....', '19-08-2021 06:45:03'),
(41, 0, 30, 'c_surat_gugatan', 'cukup', '20-08-2021 00:56:19'),
(42, 0, 30, 'c_ba_sidang', 'Berita acara sidang tanggal 11 Mei 2021 telah dinyatakan sidang ditunda sampai tanggal 27 Mei 2021 untuk musyawarah majelis, kemudian pada BAS tanggal 27 Mei 2021  sebelum  putusan dibacakan, ada lagi musyawarah majelis hakim', '20-08-2021 01:42:18'),
(43, 0, 22, 'c_surat_gugatan', 'ok oce komentar dicoba oke\n', '20-08-2021 05:27:08'),
(54, 0, 34, 'c_akta_pemberitahuan_banding', 'Pembanding semula sebagai Tergugat bertempat tinggal di Jl. Soa Konora kelurahan Soa Kecamatan Ternate Utara Kota Ternate,\nPembanding bertempat tinggal diluar wilayah PA Tondano, maka Pembanding  masa bandingnya selama 4 Minggu sebagaimana ketentuan  199 ayat 3 Rbg.', '01-09-2021 00:18:56'),
(55, 0, 34, 'c_salinan_putusan_pa', 'menarik untuk dikaji amar putusan PA tersebut, Penggugat mengajukan  gugatan agar Penggugat ditetapkan sebagai hak asuh, anak...PA menolak gugatan penggugat selanjutnya dibarengi dengan amar Poin 2 dan 3, padahal amar tersebut tidak diminta oleh Penggugat dan juga Tergugat tidak mengajukan rekonpensinya agar ia ditetapkan sebagai Pengasuh anak P&T,  dengan demikian cukup sajja amar putusan, menolak gugatan penggugat, selanjutnya biaya perkara', '01-12-2021 02:19:58'),
(56, 0, 34, 'c_salinan_putusan_pa', 'amarnya menolak gugatan penggugat seluruhnya karena beberapa poin amar yang diminta', '01-12-2021 02:22:05'),
(57, 0, 34, 'c_ba_sidang', 'di BAS keterangan Tergugat, dalam putusan perceraian, Penggugat telah dibebani nafkah anak setiap bulannya Rp. 1.500.000,., maka kal au penggugat rekonpensi tidak lagi rekonpensi mengajukan gugatan nafkah anak, maka tidak perlu lagi ditetapkan nafkah secara ex officio agar tidak mengakibatkan putusan tumpang tindih dalam subyek dan obyek yang sama', '20-12-2021 01:11:43'),
(58, 0, 34, 'c_ba_sidang', '', '20-12-2021 01:27:29'),
(59, 0, 34, 'c_ba_sidang', 'Penetapan mediasi, mediator diberikan waktu untuk melaksanakan mediasi selama  30 hari, akan tetapi setelah penetapan tersebut KM menunda langsung sidang kurang dari 30 hari, hal itu bertentangan dengan penetapannya sendiri. seharusnya setelah penetapan KM menentukan sidang setelah ada laporan mediator, ...jd sidang ditentukan kemudian.', '20-12-2021 01:52:12');

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
(9, 'Wakaf', 1),
(10, 'Penguasaan Anak', 1);

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
  `tgl_reg_banding` date NOT NULL,
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

INSERT INTO `list_perkara` (`id_perkara`, `id_user`, `no_perkara`, `nm_pihak_penggugat`, `nm_pihak_tergugat`, `jns_perkara`, `tgl_register`, `tgl_reg_banding`, `no_surat_pengantar`, `pejabat_berwenang`, `nm_pejabat`, `nip_pejabat`, `banyaknya`, `keterangan`, `status_perkara`, `sp_perkara`, `no_perkara_banding`, `putusan_banding`, `is_nomor`, `surat_gugatan`, `sk_bundelA`, `bukti_pemb_panjar`, `majelis_hakim`, `penunjukan_pp`, `penunjukan_js`, `penetapan_hari_sidang`, `relaas_panggilan`, `ba_sidang`, `penetapan_sita`, `ba_sita`, `lampiran_surat`, `surat_bukti_penggugat`, `surat_bukti_tergugat`, `tanggapan_bukti_tergugat`, `tanggapan_bukti_penggugat`, `gambar_situasi`, `surat_lain`, `salinan_putusan_pa`, `salinan_putusan_pa_rtf`, `sk_bundelb`, `akta_banding`, `akta_penerimaan_mb`, `memori_banding`, `memori_banding_rtf`, `akta_pemberitahuan_banding`, `pemberitahuan_penyerahan_mb`, `akta_penerimaankontra_mb`, `kontra_mb`, `kontra_mb_rtf`, `pemberitahuan_penyerahankontra_mb`, `relaas_periksa_berkas_pb`, `sk_khusus`, `bukt_pengiriman_bpb`, `bukti_setor_bp_kasnegara`, `surat_lainnya_b`) VALUES
(57, 9, '16/Pdt.G/2021/PA.Ktg', 'Rusmi Dewi Mochtar bin Mohammad Mochtar, dkk', 'Fauzia Mochtar', 'Kewarisan', '2021-08-11', '2021-08-24', 'W18.A2/552/HK.05/08/2021', 'Panitera', 'Dra. Sunarti Puasa', '196702231994032002', 1, '', 'Pengiriman Salinan Putusan', 'dokumen_surat_pengantar__19082021_(1).pdf', '9/Pdt.G/2021/PTA.Mdo', 'PUT_No__9__2021_waris_PA_Mdo_No_16_2021_NO_.docx', NULL, 'Surat_Gugatan4.pdf', 'Surat_Kuasa_Hukum5.pdf', 'SKUM7.pdf', 'PMH7.pdf', 'Penunjukkan_PP7.pdf', 'Penunjukkan_JS5.pdf', 'Penetapan_Hari_Sidang5.pdf', 'Relaas-relaas2.pdf', 'BAS2.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'PA_Ktg_2021_Pdt_G_16_putusan_akhir2.pdf', 'PA_Ktg_2021_Pdt_G_16_putusan_akhir1.rtf', 'surat_kuasa_P_dan_T2.pdf', 'Akta_Permohonan_Banding2.pdf', 'TT_MEMO1.pdf', 'Memori_Banding_FAUZIAH_MOCHTAR_OK2.pdf', 'Memori_Banding_FAUZIAH_MOCHTAR_OK1.rtf', 'RELAAS_PBT_PERNYATAAN4.pdf', 'RELAAS_PBT_PERNYATAAN5.pdf', 'TT_KONTRA2.pdf', 'Kontra_Memori_Banding_Rusmi_Dewie_Mochtar,dkk_2.pdf', 'Kontra_Memori_Banding_Rusmi_Dewie_Mochtar,dkk_.rtf', 'PBT_Penyerahan_Kontra_kepada_pembanding2.pdf', 'relaas_pbt_memeriksa_berkas1.pdf', NULL, 'bukti_setoran2.pdf', 'PNBP2.pdf', NULL),
(58, 5, '14/Pdt.G/2021/PA.Tdo', 'Nurjanah Alimulah binti Rahmat Nur Alimulah', 'Resky F. Kamaluddin bin Nurdin Kamaluddin ', 'Cerai Gugat', '2021-08-12', '2021-08-19', 'W18.A4/393/HK.05/7/2021', 'Panitera', 'H. Sjaogil Ahmad. S.HI.,MH', '197204081992021001', 2, 'Bundel A dan Bundel B', 'Pengiriman Salinan Putusan', 'Pengantar.pdf', '8/Pdt.G/2021/PTA.Mdo', 'Ptsan_NO_8_G_21_PTAMdo_CG-Kuat.doc', NULL, 'dokumen_gugatan_1615792556_2241801.pdf', NULL, 'skum_bukti_bayar1.pdf', 'penetapan_hakim_majelis_hakim_1624420653_7321.pdf', 'penunjukan_panitera_pengganti_1624420932_7321.pdf', 'penunjukan_jurusita_jsp_1624421199_7321.pdf', 'penetapan_hari_sidang_1624421542_7321.pdf', 'relaas_Panggilan_P_dan_T1.pdf', 'Berita_acara_sidang1.pdf', NULL, NULL, NULL, 'bukti_awal_1624434740_732.pdf', NULL, NULL, NULL, NULL, 'relaas_pemberitahuan.pdf', 'salinan_putusan.pdf', 'salinan_putusan1.pdf', NULL, 'akta_banding_1623995902_237687.pdf', 'memori_banding_1625192905_732.pdf', NULL, NULL, 'akta_banding_1623995902_2376871.pdf', 'akta_banding_1623995902_2376872.pdf', NULL, NULL, NULL, NULL, 'akta_banding_1623995902_2376873.pdf', NULL, 'akta_banding_1623995902_2376874.pdf', 'Skum.pdf', NULL),
(61, 9, '96/Pdt.G/2021/PA.Ktg', 'Yudit Indriati Podutolo Binti Hi. Mul\'Alif Podutolo, SE. M.Si', 'Ninik Silfani Podutolo Binti Arsad Podutolo', 'Kewarisan', '2021-08-19', '2021-08-26', 'W18.A2/563/HK.05/08/2021', 'Panitera', 'Dra. Sunarti Puasa', '196702231994032002', 1, '', 'Pengiriman Salinan Putusan', 'dokumen_surat_pengantar__19082021_(2).pdf', '10/Pdt.G/2021/PTA.Mdo', NULL, NULL, 'GUGATAN1.pdf', 'KUASA1.pdf', 'SKUM5.pdf', 'PMH5.pdf', 'Penunjukkan_PP5.pdf', 'JS1.pdf', 'PHS1.pdf', 'RELAAS1.pdf', 'BAS.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SALINAN_PUTUSAN.pdf', 'PA_Ktg_2021_Pdt_G_96_putusan_akhir.rtf', 'KUASA.pdf', 'AKTA_BANDING.pdf', 'TT_MEMO_BANDING.pdf', 'MEMO_BANDING.pdf', 'Memo_Banding_No_96_PTA_Mdo.rtf', 'PEMBERITAHUAN_BANDING.pdf', 'PEMBERITAHUAN_BANDING1.pdf', 'TT_KONTRA3.pdf', 'Kontra_Memori_Banding_Yudith_Arisaldi_Podutolo.pdf', 'Kontra_Memori_Banding_Yudith_Arisaldi_Podutolo.rtf', 'PBT_KONTRA.pdf', 'INZAGE.pdf', NULL, 'SETORAN.pdf', 'PNBP3.pdf', NULL),
(74, 4, '37/Pdt.G/2021/PA.Blu', 'Deki Olii alias Dekky Olii bin Abdul Hamid', 'Dahniar Sabaya binti Hasim Sabaya', 'Cerai Talak', '2021-09-02', '2021-10-18', 'W18.A8/262/HK.05/08/2021', 'Panitera', 'Maskuri, S.Ag., M.H.', '197212211998031001', 8, 'Bundel A += 1 Asli 3 Fotokopi, Bundel B = 1 Asli 3 Fotokopi', NULL, NULL, '4/Pdt.G/2021/PTA.Mdo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(76, 2, '7/Pdt.G/2021/PA.Mdo', 'Supriyadi bin Soeroso', 'Melinda Wetik binti Welly Wetik', 'Harta Bersama', '2021-09-03', '2021-10-18', 'W18.A1/416/HK.05/7/2021', 'Panitera', 'Dra. Vahria', '196908291994032003', 8, '', NULL, NULL, '6/Pdt.G/2021/PTA.Mdo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(77, 6, '189/Pdt.G/2021/PA.Llk', 'Shintia Mamonto binti Suparman Mamonto', 'Richard Winmar Datau bin Aswinata Datau  ', 'Cerai Gugat', '2021-09-10', '2021-09-15', 'W18.A7/616/HK.05/09/2021', 'Panitera', 'Hasna B.  Nurdin Harun', '196907271998032001', 2, '-', 'Pengiriman Salinan Putusan', '189_Surat_Pengantar.pdf', '11/Pdt.G/2021/PTA.Mdo', 'Salinan_Putusan_No_11-2021.docx', NULL, '189_Bundel_A-halaman-4-5.pdf', NULL, '189_Bundel_A-halaman-6-7.pdf', '189_Bundel_A-halaman-8.pdf', '189_Bundel_A-halaman-9.pdf', '189_Bundel_A-halaman-10.pdf', '189_Bundel_A-halaman-11-12.pdf', '189_Bundel_A-halaman-13-14,17,28-29.pdf', '189_Bundel_A-halaman-15-16,18-27,30-53.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '189_Bundel_B-halaman-3-161.pdf', 'PA_Llk_2021_Pdt_G_189_putusan_akhir_(1)1.rtf', '189_Bundel_B-halaman-17-221.pdf', '189_Bundel_B-halaman-231.pdf', '189_Bundel_B-halaman-241.pdf', '189_Bundel_B-halaman-25-351.pdf', NULL, '189_Bundel_B-halaman-361.pdf', '189_Bundel_B-halaman-371.pdf', '189_Bundel_B-halaman-381.pdf', '189_Bundel_B-halaman-39-411.pdf', NULL, '189_Bundel_B-halaman-421.pdf', '189_Bundel_B-halaman-43-461.pdf', NULL, '189G_Bundel_B_all-halaman-47.pdf', '189_Bundel_B-halaman-491.pdf', NULL),
(78, 9, '178/Pdt.G/2021/PA.Ktg', 'Hensi Monoarfa Bin Noho Monoarfa Dkk', 'Djawahir Potabuga Alias Lulung Dkk', 'Kewarisan', '2021-09-17', '2021-10-06', 'W18.A2/715/HK.05/09/2021', 'Panitera', 'Dra Sunarti Puasa', '196702231994032002', 1, 'Dikirim dengan hormat untuk diperiksa - Terima kasih', 'Pengiriman Salinan Putusan', 'surat_pengantar.pdf', '12/Pdt.G/2021/PTA.Mdo', 'Baik_-_PUTUSAN_NOMOR_12_TAHUN_2021_PTA_Mdo.docx', NULL, 'gugatan.pdf', 'KUASA_P_dan_T.pdf', 'skum.pdf', 'pmh.pdf', 'pp.pdf', 'js.pdf', 'phs.pdf', 'relaas.pdf', 'BAS3.pdf', 'sita.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Cabut_Kuasa_Penggugat.pdf', 'salput-dikompresi1.pdf', 'Salinan_Putusan1.rtf', 'Surat_Kuasa_Pembanding_dan_Terbanding1.pdf', 'akta_permohonan_banding1.pdf', 'Surat_Tanda_Terima_Memori_Banding1.pdf', 'Memori_Banding1.pdf', 'Memori_Banding1.rtf', 'Relaas_Pemberitahuan_Pernyataan_Banding1.pdf', 'Relaas_Pemberitahuan_dan_Penyerahan_Memori_Banding1.pdf', 'Surat_Tanda_Terima_Kontra_Memori_Banding1.pdf', 'Kontra_Memori_Banding1.pdf', NULL, 'Surat_Pemberitahuan_dan_Penyerahan_Kontra_Memori1.pdf', 'Relaas_Pemberitahuan_Memeriksa_Berkas_Banding_Kepada_Pembanding1.pdf', NULL, 'bukti_pengiriman_biaya_proses_perkara_banding1.pdf', 'Bukti_Setor_Biaya_Pendaftaran_ke_Kas_Negara1.pdf', NULL),
(81, 2, '226/Pdt.G/2021/PA.Mdo', 'ERMAN SAMIR BIN SAMIR', 'AJENG WIGATI BINTI SOEYATNA', 'Cerai Gugat', '2021-11-03', '2021-11-05', 'W18.A1/571/HK.05/11/2021', 'Panitera', 'Dra. Vahria', '196908291994032003', 2, '', 'Pengiriman Salinan Putusan', 'Surat_Pengantar_Pengiriman_Berkas_Banding.pdf', '13/Pdt.G/2021/PTA.Mdo', 'PUT_PTA_Nomor_13.docx', NULL, 'Surat_Gugatan_2261.pdf', NULL, 'bukti_pembayaran_skum_2261.pdf', 'pmh_2261.pdf', 'penunjukan_pp_2261.pdf', 'penunjukan_js_2261.pdf', 'pmh_2262.pdf', 'relaas_2261.pdf', 'bas_2261.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'salinan_putusan_2262.pdf', 'SALINAN_PUTUSAN2.rtf', NULL, 'akta_banding_2263.pdf', 'surat_keterangan_memori_banding_2264.pdf', NULL, NULL, 'akta_banding_2264.pdf', 'surat_keterangan_memori_banding_2265.pdf', NULL, NULL, NULL, NULL, 'relaas_inzage_226_.pdf', NULL, 'bukti_pembayaran_banding_2262.pdf', 'bukti_setor_kas_negara_2262.pdf', 'surat_keterangan_tidak_inzage_2261.pdf'),
(82, 2, '245/Pdt.G/2021/PA.Mdo', 'Abdul Haris Febriansyah bin Karaeng', 'Alfi Kader binti Djafar Kader', 'Cerai Gugat', '2021-11-03', '2021-11-05', 'W18.A1/580/HK.05/11/2021', 'Panitera', 'Dra. Vahria', '196908291994032003', 2, '', 'Pengiriman Salinan Putusan', 'Surat_Pengantar_Banding_245.pdf', '14/Pdt.G/2021/PTA.Mdo', 'PUTUSAN_NOMOR_14_TAHUN_2021_PTA_Mdo_Menguatkan_1r.rtf', NULL, 'surat_gugatan_245.pdf', 'surat_kuasa_khusus_245.pdf', 'bukti_pembayaran.pdf', 'pmh_245.pdf', 'penunjukkan_pp_245.pdf', 'penunjukkan_js_245.pdf', 'phs_245.pdf', 'relaas_245.pdf', 'bas_245.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'salput_2454.pdf', 'SALINAN_P_U_T_U_S_A_N_docx1.rtf', 'surat_kuasa_2458.pdf', 'akta_banding_2454.pdf', 'tanda_terima_memori_banding_2454.pdf', 'memori_banding_2454.pdf', 'memori_banding_haris_docx1.rtf', 'relaas_pemberitahuan_banding_2454.pdf', 'relaas_pemberitahuan_penyerahan_memori_banding_2454.pdf', 'akta_penerimaan_kontra_memori_banding_2454.pdf', 'kontra_memori_banding_2454.pdf', NULL, 'relaas_pemberitahuan_kontra_banding_2454.pdf', 'relaas_inzage_banding_2454.pdf', 'surat_kuasa_2459.pdf', 'bukti_pembayaran_2454.pdf', 'setor_kas_negara_2454.pdf', 'Surat_Keterangan_Inzage_2451.pdf'),
(83, 2, '258/Pdt.G/2021/PA.Mdo', 'Agung Disaputra Hasan bin Haryanto Hasan', 'Zela Anggrayni Lasama binti Asri Lasama', 'Penguasaan Anak', '2021-11-30', '2021-12-01', 'W18.A1/627/HK.05/11/2021', 'Panitera', 'Dra. Vahria', '196908291994032003', 2, '', 'Pengiriman Salinan Putusan', '1__Surat_Pengantar_Pengiriman_Berkas_Banding(1).pdf', '15/Pdt.G/2021/PTA.Mdo', '5__BA-HADONAH_-_15-PTA_Mdo-_2021__(_Dikuatkan_dengan_tambahan_biaya_hadonah_)_-_Copy.doc', NULL, 'Surat_Gugatan_258_G.pdf', 'surat_kuasa_258_G.pdf', 'SKUM_258_G.pdf', 'PMH_258_G.pdf', 'Penunjukkan_PP_258_G.pdf', 'Penunjukkan_JS_258_G.pdf', 'PHS_258_G.pdf', 'Relaas_258_G.pdf', 'BAS_258_G_compressed.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3__Salinan_Putusan_258.pdf', '3__Salinan_Putusan_258.rtf', '4__Surat_Kuasa_Pembanding(2).pdf', '5__Akta_Permohonan_Banding(4).pdf', '7__Tanda_terima_memori_banding(2).pdf', '8__Memori_Banding(1).pdf', '8__Memori_Banding(1).rtf', '9__Relaas_Pemberitahuan_dan_Penyerahan_Memori_Banding.pdf', '9__Relaas_Pemberitahuan_dan_Penyerahan_Memori_Banding1.pdf', '10__Tanda_Terima_Kontra_Memori_Banding.pdf', '11__Kontra_Memori_Banding(1).pdf', 'Kontra_memori_banding_perkara_no_258-Pdt_G-2021-PA_Mdo.rtf', '12__Relaas_Penyerahan_Kontra_Memori_Banding.pdf', '13__Relaas_Inzage.pdf', NULL, '15__SKUM_Tanda_bukti_Setoran_panjar_biaya_banding.pdf', '17__Bukti_Pengiriman_Biaya_Banding_fix.pdf', NULL),
(84, 2, '248/Pdt.G/2021/PA.Mdo', 'Ivana Wiwiyanti binti Ario K. Yunus', 'Syarwani Yahya bin Mohamad Yahya', 'Cerai Gugat', '2021-12-07', '2021-12-08', 'W18.A1/648/HK.05/12/2021', 'Panitera', 'Dra. Vahria', '196908291994032003', 2, '', 'Pengiriman Salinan Putusan', 'Surat_Pengantar_Banding_no_248.pdf', '16/Pdt.G/2021/PTA.Mdo', '16_CG_2021___PTA_Mdo_Tolak_PA_Mdo_248_21.doc', NULL, 'Surat_Gugatan_248.pdf', 'Surat_Kuasa_248.pdf', '16__Skum_dan_bukti_bayar_panjar_biaya_banding_.pdf', 'PMH_248.pdf', 'Penunjukkan_PP_248.pdf', 'Penunjukkan_JS_248.pdf', 'PHS_248.pdf', 'Relaas_248.pdf', 'BAS_248.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Salinan_Putusan_248.pdf', 'Salinan_Putusan_248.rtf', 'Surat_Kuasa_Kedua_Pihak.pdf', '5__Akta_permohonan_banding(3).pdf', '7__Tanda_Terima_Memori_Banding(3).pdf', '8__Memori_Banding_248_2021.pdf', '8__Memori_Banding_248_2021.rtf', '9__Pemberitahuan_Memori_Banding(1).pdf', '6__Pemberitahuan_Pernyataan_Banding.pdf', '10__Tanda_terima_kontra_memori_banding(1).pdf', '11__kontra_memori_banding(2).pdf', 'Kontra_Memori_Banding_-_Syarwani_Yahya.rtf', '12__Pemberitahuan_Kontra_Memori_Banding.pdf', '13__Pemberitahuan_inzage(1).pdf', NULL, '16__Skum_dan_bukti_bayar_panjar_biaya_banding_.pdf', '19__Bukti_setoran_PNBP_menyampaian_Kontra.pdf', NULL),
(85, 9, '309/Pdt.G/2021/PA.Ktg', 'Ewin Daniel bin Suardi Daniel', 'Ralna Dompas', 'Cerai Talak', '2021-12-23', '2022-01-05', 'W18.A2/1015/HK.05/12/2021', 'Panitera', 'Dra. Sunarti Puasa', '196702231994032002', 1, 'Dikirim dengan hormat untuk diperiksa - Terima kasih', 'Pengiriman Salinan Putusan', 'surat_pengantar_fixxx.pdf', '1/Pdt.G/2022/PTA.Mdo', '1_G_22_PTAMdo_CTHad-R-Kuat-Perbaikan.doc', NULL, '1__Surat_Permohonan_Cerai_Talak1.pdf', '2__Surat_Kuasa_Khusus_Pemohon1.pdf', '3__Surat_Kuasa_Untuk_Membayar_(SKUM)1.pdf', '4__Penetapan_Majelis_Hakim_(PMH)1.pdf', '5__Penunjukan_Panitera_Pengganti1.pdf', '6__Penunjukan_Jurusita_Pengganti1.pdf', '7__Penetapan_Hari_Sidang_(PHS)1.pdf', 'relas_panggilan1.pdf', 'Perubahan_Berita_Acara_Sidang.pdf', NULL, NULL, NULL, '19__alat_bukti_pemohon1.pdf', '20__alat_bukti_termohon1.pdf', NULL, NULL, NULL, NULL, '1__Salinan_Putusan3.pdf', '1__Salinan_Putusan_(wecompress_com)3.rtf', '2__Surat_Kuasa_Pembanding_dan_Terbanding2.pdf', '3__Akta_Permohonan_Banding3.pdf', 'Tanda_Terima_Memori_Banding3.pdf', '5__Memori_Banding2.pdf', '5__Memori_Banding2.rtf', '6__Relaas_Pemberitahuan_Pernyataan_Banding.pdf', '7__Relaas_Pemberitahuan_dan_Penyerahan_Memori_Banding_Kepada_Kuasa_Hukum_Terbanding6.pdf', '8__Surat_Tanda_Terima_Kontra_Memori_Banding1.pdf', '9__Kontra_Memori_Banding1.pdf', '9_-Kontra-Memori-Banding-_wecompress_com_1.rtf', '10__Surat_Pemberitahuan_Dan_Penyerahan_Kontra_Memori_Banding_Kepada_Kuasa_Hukum_Pembanding1.pdf', 'Berita_Acara_Inzage.pdf', NULL, 'Biaya_Proses3.pdf', 'PNBP_Banding3.pdf', NULL),
(87, 6, '409/Pdt.G/2022/PA.Llk', 'Richard Winmar Datau', 'Shuntia Mamonto Binti Suparman Mamonto', 'Cerai Talak', '2022-01-13', '2022-01-19', 'W18.A7/33/HK.05/01/2022', 'Panitera', 'Maskuri, S.Ag., M.H.', '197212211998031001', 1, 'Berkas elektronik  perkara Banding Ecourt Litigasi ', 'Pengiriman Salinan Putusan', 'CamScanner_01-13-2022_14_07.pdf', '2/Pdt.G/2022/PTA.Mdo', 'PUT_NOMOR_02_thn_2022.docx', NULL, 'SURAT_GUGATAN.pdf', 'SURAT_KUASA_.pdf', 'SKUM8.pdf', 'Surat_penetapan_majelis_hakim.pdf', 'Penunjukan_Panitera.pdf', 'Penunjukan_Jurusita.pdf', 'Penetapan_Hari_Sidang6.pdf', '409G-halaman-18,21-22,37-39.pdf', '409G-digabungkan-halaman-19-20,27-36,40-118.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'salinan_putusan2.pdf', 'PA_Llk_2021_Pdt_G_409_putusan_akhir_.rtf', 'SURAT_KUASA_.pdf', 'akta_banding_1640658917_231672.pdf', 'CamScanner_01-14-2022_14_58.pdf', 'memori_banding_1641188347_231672_(1).pdf', NULL, 'PBT_BANDING_T.pdf', 'Memori_Banding2.pdf', 'CamScanner_01-14-2022_14_581.pdf', 'Kontra_Memori_Banding2.pdf', NULL, 'Kontra_Memori_Banding3.pdf', 'Inzage_P.pdf', NULL, 'biaya_banding_PTA_(1).pdf', 'PNBP_Banding_Perk_409_G.pdf', 'BA_inzage_P.pdf'),
(88, 2, '420/Pdt.G/2021/PA.Mdo', 'Dr. HJ Herlina M.Pd Binti Usman Sira', 'Prof.Dr H. Noldy Pelenkahu M.Pd Bin J.A', 'Cerai Talak', '2022-03-01', '2022-03-02', 'W18.A1/105/HK.05/02/2022', 'Panitera', 'Dra. Vahria', '196908291994032003', 2, '', 'Pengiriman Salinan Putusan', 'Surat_pengantar_banding.pdf', '3/Pdt.G/2022/PTA.Mdo', 'Putusan_NO_3_2022_CT_PA_Mdo_Eksepsi_Dikabulkan.doc', NULL, 'Surat_Gugatan_420_G.pdf', NULL, 'bukti_bayar_420_g_(skum).pdf', 'pmh_420_g.pdf', 'penunjukkan_pp_420_g.pdf', 'penunjukkan_js_420_g.pdf', 'phs_420_g.pdf', 'relaas_panggilan_420_g.pdf', 'bas_420_g.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'salput_420_g.pdf', 'Putusan_Akhir_420_OK.rtf', 'surat_kuasa_b_420_g.pdf', 'akta_banding_420_g.pdf', 'akta_penerimaan_memori_banding_420_g.pdf', 'MEMORI_BANDING_Prof_Hj__Herlina.pdf', 'MEMORI_BANDING_PROF_HERLINA.rtf', 'akta_pemberitahuan_banding_420_g.pdf', 'pemberitahuan_penyerahan_memori_banding.pdf', 'tanda_terima_memori_banding_420_g.pdf', 'kontra_memori_banding_420_g.pdf', 'kontra_memori_banding_420_g1.rtf', 'pemberitahuan_kontra_memori_banding_420_g.pdf', 'pemberitahuan_inzage_420_g.pdf', 'surat_kuasa_b_420_g1.pdf', 'bukti_biaya_banding.pdf', 'bukti_setor_biaya_banding.pdf', NULL);

--
-- Triggers `list_perkara`
--
DELIMITER $$
CREATE TRIGGER `inser_id_perkara` AFTER INSERT ON `list_perkara` FOR EACH ROW BEGIN
    INSERT INTO penunjukan_pp (id_perkara)
    VALUES(NEW.id_perkara);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insert_id_perkara_pmh` AFTER INSERT ON `list_perkara` FOR EACH ROW BEGIN
    INSERT INTO pmh (id_perkara)
    VALUES(NEW.id_perkara);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insert_log_inbox` AFTER INSERT ON `list_perkara` FOR EACH ROW BEGIN
    INSERT INTO log_inbox (id_log_inbox, id_perkara, no_perkara, is_read, change_date)
    VALUES ("", new.id_perkara, new.no_perkara, 1, now());
END
$$
DELIMITER ;

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
(61, 'User <b>Pengadilan Agama Kotamobagu</b> telah menambah data perkara', '2021-08-11 08:03:15', 'Pengadilan Agama Kotamobagu'),
(62, 'User <b>Pengadilan Agama Kotamobagu</b> telah update data perkara', '2021-08-12 05:35:05', 'Pengadilan Agama Kotamobagu'),
(63, 'User <b>Pengadilan Agama Kotamobagu</b> telah upload surat pengantar pada id perkara <b>57</b>', '2021-08-12 05:35:35', 'Pengadilan Agama Kotamobagu'),
(64, 'User <b>Pengadilan Agama Tondano</b> telah menambah data perkara', '2021-08-12 08:57:14', 'Pengadilan Agama Tondano'),
(65, 'User <b>Pengadilan Agama Tondano</b> telah upload surat pengantar pada id perkara <b>58</b>', '2021-08-13 02:20:57', 'Pengadilan Agama Tondano'),
(66, 'User <b>Pengadilan Agama Tondano</b> telah upload berkas bundel A pada id perkara <b>58</b>', '2021-08-13 02:27:53', 'Pengadilan Agama Tondano'),
(67, 'User <b>Pengadilan Agama Kotamobagu</b> telah upload berkas bundel A pada id perkara <b>57</b>', '2021-08-13 07:47:24', 'Pengadilan Agama Kotamobagu'),
(68, 'User <b>Pengadilan Agama Kotamobagu</b> telah upload surat pengantar pada id perkara <b>57</b>', '2021-08-15 02:31:11', 'Pengadilan Agama Kotamobagu'),
(69, 'User <b>Pengadilan Agama Kotamobagu</b> telah upload berkas bundel A pada id perkara <b>57</b>', '2021-08-15 03:10:55', 'Pengadilan Agama Kotamobagu'),
(70, 'User <b>Pengadilan Agama Kotamobagu</b> telah update data perkara', '2021-08-18 03:23:37', 'Pengadilan Agama Kotamobagu'),
(71, 'User <b>Pengadilan Tinggi Agama Manado</b> telah update data user pada id <b>22</b>', '2021-08-18 15:36:57', 'Pengadilan Tinggi Agama Manado'),
(72, 'User <b>Pengadilan Tinggi Agama Manado</b> telah menambahkan user <b>', '2021-08-18 15:38:46', 'Pengadilan Tinggi Agama Manado'),
(73, 'User <b>Pengadilan Tinggi Agama Manado</b> telah menambahkan user <b>', '2021-08-18 15:39:19', 'Pengadilan Tinggi Agama Manado'),
(74, 'User <b>Pengadilan Tinggi Agama Manado</b> telah menambahkan user <b>', '2021-08-18 15:39:48', 'Pengadilan Tinggi Agama Manado'),
(75, 'User <b>Pengadilan Tinggi Agama Manado</b> telah menambahkan user <b>', '2021-08-18 15:41:19', 'Pengadilan Tinggi Agama Manado'),
(76, 'User <b>Pengadilan Tinggi Agama Manado</b> telah menambahkan user <b>', '2021-08-18 15:41:49', 'Pengadilan Tinggi Agama Manado'),
(77, 'User <b>Pengadilan Tinggi Agama Manado</b> telah menambahkan user <b>', '2021-08-18 15:42:43', 'Pengadilan Tinggi Agama Manado'),
(78, 'User <b>Pengadilan Agama Tutuyan</b> telah menambah data perkara', '2021-08-18 15:47:34', 'Pengadilan Agama Tutuyan'),
(79, 'User <b>Pengadilan Tinggi Agama Manado</b> telah update data user pada id <b>29</b>', '2021-08-19 00:22:11', 'Pengadilan Tinggi Agama Manado'),
(80, 'User <b>Pengadilan Agama Manado</b> telah menambah data perkara', '2021-08-19 00:30:58', 'Pengadilan Agama Manado'),
(81, 'User <b>Pengadilan Tinggi Agama Manado</b> telah update data user pada id <b>22</b>', '2021-08-19 00:33:17', 'Pengadilan Tinggi Agama Manado'),
(82, 'User <b>Pengadilan Agama Manado</b> telah upload berkas bundel A pada id perkara <b>60</b>', '2021-08-19 00:43:11', 'Pengadilan Agama Manado'),
(83, 'User <b>Pengadilan Tinggi Agama Manado</b> telah menambahkan user <b>', '2021-08-19 06:19:36', 'Pengadilan Tinggi Agama Manado'),
(84, 'User <b>Pengadilan Tinggi Agama Manado</b> telah menambahkan user <b>', '2021-08-19 06:20:14', 'Pengadilan Tinggi Agama Manado'),
(85, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input nomor perkara banding pada id perkara <b>60</b>', '2021-08-19 06:23:15', 'Pengadilan Tinggi Agama Manado'),
(86, 'User <b>Drs. H. Abdul Hakim, M.HI.</b> telah memberikan catatan', '2021-08-19 06:25:12', 'Drs. H. Abdul Hakim, M.HI.'),
(87, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>60</b>', '2021-08-19 06:26:30', 'Pengadilan Tinggi Agama Manado'),
(88, 'User <b>Drs. H. Abdul Hakim, M.HI.</b> telah memberikan catatan', '2021-08-19 06:29:35', 'Drs. H. Abdul Hakim, M.HI.'),
(89, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input nomor perkara banding pada id perkara <b>58</b>', '2021-08-19 06:36:12', 'Pengadilan Tinggi Agama Manado'),
(90, 'User <b>Dr. H. Barmawi, M.H.</b> telah memberikan catatan', '2021-08-19 06:39:14', 'Dr. H. Barmawi, M.H.'),
(91, 'User <b>Dr. H. Barmawi, M.H.</b> telah memberikan catatan', '2021-08-19 06:41:11', 'Dr. H. Barmawi, M.H.'),
(92, 'User <b>Dr. H. Barmawi, M.H.</b> telah memberikan catatan', '2021-08-19 06:45:03', 'Dr. H. Barmawi, M.H.'),
(93, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>60</b>', '2021-08-19 06:51:11', 'Pengadilan Tinggi Agama Manado'),
(94, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>60</b>', '2021-08-19 06:55:11', 'Pengadilan Tinggi Agama Manado'),
(95, 'User <b>Pengadilan Agama Kotamobagu</b> telah menambah data perkara', '2021-08-19 08:49:03', 'Pengadilan Agama Kotamobagu'),
(96, 'User <b>Pengadilan Agama Kotamobagu</b> telah upload surat pengantar pada id perkara <b>57</b>', '2021-08-19 08:52:05', 'Pengadilan Agama Kotamobagu'),
(97, 'User <b>Pengadilan Agama Kotamobagu</b> telah upload surat pengantar pada id perkara <b>61</b>', '2021-08-19 08:54:15', 'Pengadilan Agama Kotamobagu'),
(98, 'User <b>Pengadilan Tinggi Agama Manado</b> telah menambahkan user <b>', '2021-08-19 14:46:12', 'Pengadilan Tinggi Agama Manado'),
(99, 'User <b>Drs. Zainal Aripin, S.H.,M.Hum.</b> telah memberikan catatan', '2021-08-20 00:56:19', 'Drs. Zainal Aripin, S.H.,M.Hum.'),
(100, 'User <b>Drs. Zainal Aripin, S.H.,M.Hum.</b> telah memberikan catatan', '2021-08-20 01:42:18', 'Drs. Zainal Aripin, S.H.,M.Hum.'),
(101, 'User <b>Drs. H. Abdul Hakim, M.HI.</b> telah memberikan catatan', '2021-08-20 05:27:08', 'Drs. H. Abdul Hakim, M.HI.'),
(102, 'User <b>Pengadilan Agama Percobaan</b> telah menambah data perkara', '2021-08-20 05:44:14', 'Pengadilan Agama Percobaan'),
(103, 'User <b>Pengadilan Agama Tutuyan</b> telah menambah data perkara', '2021-08-20 05:50:01', 'Pengadilan Agama Tutuyan'),
(104, 'User <b>Pengadilan Agama Tutuyan</b> telah menambah data perkara', '2021-08-20 05:53:56', 'Pengadilan Agama Tutuyan'),
(105, 'User <b>Pengadilan Agama Manado</b> telah menambah data perkara', '2021-08-20 06:36:21', 'Pengadilan Agama Manado'),
(106, 'User <b>Pengadilan Agama Manado</b> telah upload surat pengantar pada id perkara <b>65</b>', '2021-08-20 06:38:07', 'Pengadilan Agama Manado'),
(107, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>65</b>', '2021-08-20 06:48:50', 'Pengadilan Tinggi Agama Manado'),
(108, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input nomor perkara banding pada id perkara <b>65</b>', '2021-08-20 06:48:50', 'Pengadilan Tinggi Agama Manado'),
(109, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>65</b>', '2021-08-20 06:50:26', 'Pengadilan Tinggi Agama Manado'),
(110, 'User <b>Pengadilan Agama Tutuyan</b> telah menambah data perkara', '2021-08-22 04:16:40', 'Pengadilan Agama Tutuyan'),
(111, 'User <b>Pengadilan Agama Tutuyan</b> telah upload berkas bundel B pada id perkara <b>66</b>', '2021-08-22 04:20:01', 'Pengadilan Agama Tutuyan'),
(112, 'User <b>Pengadilan Agama Tutuyan</b> telah upload berkas bundel B pada id perkara <b>66</b>', '2021-08-22 04:22:54', 'Pengadilan Agama Tutuyan'),
(113, 'User <b>Pengadilan Agama Percobaan</b> telah menambah data perkara', '2021-08-22 04:26:12', 'Pengadilan Agama Percobaan'),
(114, 'User <b>Pengadilan Agama Percobaan</b> telah upload berkas bundel B pada id perkara <b>67</b>', '2021-08-22 04:27:54', 'Pengadilan Agama Percobaan'),
(115, 'User <b>Pengadilan Agama Kotamobagu</b> telah upload berkas bundel B pada id perkara <b>57</b>', '2021-08-22 05:12:39', 'Pengadilan Agama Kotamobagu'),
(116, 'User <b>Pengadilan Agama Kotamobagu</b> telah upload berkas bundel A pada id perkara <b>61</b>', '2021-08-23 05:26:47', 'Pengadilan Agama Kotamobagu'),
(117, 'User <b>Pengadilan Agama Kotamobagu</b> telah upload berkas bundel B pada id perkara <b>61</b>', '2021-08-23 06:05:36', 'Pengadilan Agama Kotamobagu'),
(118, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input nomor perkara banding pada id perkara <b>57</b>', '2021-08-24 03:50:26', 'Pengadilan Tinggi Agama Manado'),
(119, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>58</b>', '2021-08-24 03:50:59', 'Pengadilan Tinggi Agama Manado'),
(120, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>57</b>', '2021-08-24 03:51:14', 'Pengadilan Tinggi Agama Manado'),
(121, 'User <b>Pengadilan Agama Tondano</b> telah upload berkas bundel B pada id perkara <b>58</b>', '2021-08-24 06:11:21', 'Pengadilan Agama Tondano'),
(122, 'User <b>Pengadilan Agama Tutuyan</b> telah menambah data perkara', '2021-08-24 06:51:16', 'Pengadilan Agama Tutuyan'),
(123, 'User <b>Pengadilan Agama Manado</b> telah menambah data perkara', '2021-08-24 08:35:22', 'Pengadilan Agama Manado'),
(124, 'User <b>Pengadilan Agama Tutuyan</b> telah menambah data perkara', '2021-08-24 08:39:53', 'Pengadilan Agama Tutuyan'),
(125, 'User <b>Pengadilan Tinggi Agama Manado</b> telah menambahkan user <b>', '2021-08-25 01:45:07', 'Pengadilan Tinggi Agama Manado'),
(126, 'User <b>Pengadilan Agama Percobaan</b> telah menambah data perkara', '2021-08-25 07:28:59', 'Pengadilan Agama Percobaan'),
(127, 'User <b>Pengadilan Agama Tondano</b> telah upload berkas bundel A pada id perkara <b>58</b>', '2021-08-25 07:40:50', 'Pengadilan Agama Tondano'),
(128, 'User <b>Pengadilan Agama Percobaan</b> telah upload berkas bundel A pada id perkara <b>71</b>', '2021-08-25 08:41:48', 'Pengadilan Agama Percobaan'),
(129, 'User <b>Pengadilan Agama Percobaan</b> telah upload berkas bundel A pada id perkara <b>71</b>', '2021-08-25 08:57:15', 'Pengadilan Agama Percobaan'),
(130, 'User <b>Pengadilan Agama Percobaan</b> telah upload berkas bundel A pada id perkara <b>71</b>', '2021-08-26 02:02:00', 'Pengadilan Agama Percobaan'),
(131, 'User <b>Pengadilan Agama Percobaan</b> telah upload berkas bundel A pada id perkara <b>71</b>', '2021-08-26 02:04:52', 'Pengadilan Agama Percobaan'),
(132, 'User <b>Pengadilan Agama Percobaan</b> telah upload berkas bundel A pada id perkara <b>71</b>', '2021-08-26 08:34:38', 'Pengadilan Agama Percobaan'),
(133, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input nomor perkara banding pada id perkara <b>61</b>', '2021-08-26 08:37:01', 'Pengadilan Tinggi Agama Manado'),
(134, 'User <b>Pengadilan Agama Percobaan</b> telah menambah data perkara', '2021-08-27 06:49:08', 'Pengadilan Agama Percobaan'),
(135, 'User <b>Pengadilan Agama Percobaan</b> telah menambah data perkara', '2021-08-27 08:14:48', 'Pengadilan Agama Percobaan'),
(136, 'User <b>Pengadilan Agama Kotamobagu</b> telah upload berkas bundel A pada id perkara <b>57</b>', '2021-08-30 04:39:20', 'Pengadilan Agama Kotamobagu'),
(137, 'User <b>Pengadilan Tinggi Agama Manado</b> telah menambahkan user <b>', '2021-08-30 05:49:16', 'Pengadilan Tinggi Agama Manado'),
(138, 'User <b>Hakim Percobaan</b> telah memberikan catatan', '2021-08-30 05:51:12', 'Hakim Percobaan'),
(139, 'User <b>Hakim Percobaan</b> telah memberikan catatan', '2021-08-30 07:52:12', 'Hakim Percobaan'),
(140, 'User <b>Hakim Percobaan</b> telah memberikan catatan', '2021-08-30 08:11:19', 'Hakim Percobaan'),
(141, 'User <b>Hakim Percobaan</b> telah memberikan catatan', '2021-08-30 08:12:42', 'Hakim Percobaan'),
(142, 'User <b>Hakim Percobaan</b> telah memberikan catatan', '2021-08-30 08:14:24', 'Hakim Percobaan'),
(143, 'User <b>Hakim Percobaan</b> telah memberikan catatan', '2021-08-30 08:16:31', 'Hakim Percobaan'),
(144, 'User <b>Hakim Percobaan</b> telah memberikan catatan', '2021-08-30 08:23:07', 'Hakim Percobaan'),
(145, 'User <b>Hakim Percobaan</b> telah memberikan catatan', '2021-08-30 08:31:54', 'Hakim Percobaan'),
(146, 'User <b>Hakim Percobaan</b> telah memberikan catatan', '2021-08-30 08:40:26', 'Hakim Percobaan'),
(147, 'User <b>Hakim Percobaan</b> telah memberikan catatan', '2021-08-30 08:44:41', 'Hakim Percobaan'),
(148, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>57</b>', '2021-08-31 05:28:12', 'Pengadilan Tinggi Agama Manado'),
(149, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>61</b>', '2021-08-31 05:29:30', 'Pengadilan Tinggi Agama Manado'),
(150, 'User <b>Iskandar Paputungan</b> telah memberikan catatan', '2021-09-01 00:18:56', 'Iskandar Paputungan'),
(151, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>61</b>', '2021-09-01 04:22:28', 'Pengadilan Tinggi Agama Manado'),
(152, 'User <b>Pengadilan Agama Bolaang Uki</b> telah menambah data perkara', '2021-09-02 01:38:20', 'Pengadilan Agama Bolaang Uki'),
(153, 'User <b>Pengadilan Agama Percobaan</b> telah menambah data perkara', '2021-09-03 01:30:52', 'Pengadilan Agama Percobaan'),
(154, 'User <b>Pengadilan Agama Percobaan</b> telah upload surat pengantar pada id perkara <b>75</b>', '2021-09-03 02:54:06', 'Pengadilan Agama Percobaan'),
(155, 'User <b>Pengadilan Agama Percobaan</b> telah upload surat pengantar pada id perkara <b>75</b>', '2021-09-03 02:59:27', 'Pengadilan Agama Percobaan'),
(156, 'User <b>Pengadilan Agama Manado</b> telah menambah data perkara', '2021-09-03 03:06:31', 'Pengadilan Agama Manado'),
(157, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>58</b>', '2021-09-06 00:53:33', 'Pengadilan Tinggi Agama Manado'),
(158, 'User <b>Hasbiah</b> telah input status perkara banding pada id perkara <b>57</b>', '2021-09-07 02:42:17', 'Hasbiah'),
(159, 'User <b>Hasbiah</b> telah input status perkara banding pada id perkara <b>57</b>', '2021-09-07 02:42:26', 'Hasbiah'),
(160, 'User <b>Hasbiah</b> telah upload putusan perkara banding pada id perkara <b>57</b>', '2021-09-07 02:42:46', 'Hasbiah'),
(161, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>58</b>', '2021-09-08 01:57:58', 'Pengadilan Tinggi Agama Manado'),
(162, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>58</b>', '2021-09-08 01:58:08', 'Pengadilan Tinggi Agama Manado'),
(163, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>58</b>', '2021-09-08 01:58:17', 'Pengadilan Tinggi Agama Manado'),
(164, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>58</b>', '2021-09-08 01:58:38', 'Pengadilan Tinggi Agama Manado'),
(165, 'User <b>Pengadilan Tinggi Agama Manado</b> telah upload putusan perkara banding pada id perkara <b>58</b>', '2021-09-08 01:58:56', 'Pengadilan Tinggi Agama Manado'),
(166, 'User <b>Pengadilan Agama Lolak</b> telah menambah data perkara', '2021-09-10 01:43:46', 'Pengadilan Agama Lolak'),
(167, 'User <b>Pengadilan Agama Lolak</b> telah upload surat pengantar pada id perkara <b>77</b>', '2021-09-10 03:43:41', 'Pengadilan Agama Lolak'),
(168, 'User <b>Pengadilan Agama Lolak</b> telah upload berkas bundel A pada id perkara <b>77</b>', '2021-09-10 05:56:57', 'Pengadilan Agama Lolak'),
(169, 'User <b>Pengadilan Agama Lolak</b> telah upload berkas bundel B pada id perkara <b>77</b>', '2021-09-10 07:39:07', 'Pengadilan Agama Lolak'),
(170, 'User <b>Hasbiah</b> telah input status perkara banding pada id perkara <b>61</b>', '2021-09-14 02:04:54', 'Hasbiah'),
(171, 'User <b>Pengadilan Agama Lolak</b> telah upload berkas bundel B pada id perkara <b>77</b>', '2021-09-14 03:03:40', 'Pengadilan Agama Lolak'),
(172, 'User <b>Hasbiah</b> telah input nomor perkara banding pada id perkara <b>77</b>', '2021-09-15 00:55:17', 'Hasbiah'),
(173, 'User <b>Pengadilan Agama Kotamobagu</b> telah menambah data perkara', '2021-09-17 01:08:51', 'Pengadilan Agama Kotamobagu'),
(174, 'User <b>Pengadilan Agama Kotamobagu</b> telah update data perkara', '2021-09-17 01:10:53', 'Pengadilan Agama Kotamobagu'),
(175, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>77</b>', '2021-09-23 01:26:34', 'Pengadilan Tinggi Agama Manado'),
(176, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>61</b>', '2021-09-23 01:30:43', 'Pengadilan Tinggi Agama Manado'),
(177, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>61</b>', '2021-09-23 01:31:01', 'Pengadilan Tinggi Agama Manado'),
(178, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>77</b>', '2021-09-23 10:05:17', 'Pengadilan Tinggi Agama Manado'),
(179, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>77</b>', '2021-09-23 10:05:36', 'Pengadilan Tinggi Agama Manado'),
(180, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>77</b>', '2021-09-23 10:05:52', 'Pengadilan Tinggi Agama Manado'),
(181, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>77</b>', '2021-09-23 10:06:03', 'Pengadilan Tinggi Agama Manado'),
(182, 'User <b>Pengadilan Agama Kotamobagu</b> telah upload berkas bundel A pada id perkara <b>78</b>', '2021-09-25 14:11:37', 'Pengadilan Agama Kotamobagu'),
(183, 'User <b>Pengadilan Agama Kotamobagu</b> telah update data perkara', '2021-09-25 14:12:41', 'Pengadilan Agama Kotamobagu'),
(184, 'User <b>Pengadilan Agama Percobaan</b> telah menambah data perkara', '2021-09-27 06:06:05', 'Pengadilan Agama Percobaan'),
(185, 'User <b>Pengadilan Agama Kotamobagu</b> telah update data perkara', '2021-09-28 01:20:25', 'Pengadilan Agama Kotamobagu'),
(186, 'User <b>Pengadilan Agama Kotamobagu</b> telah update data perkara', '2021-09-28 01:21:33', 'Pengadilan Agama Kotamobagu'),
(187, 'User <b>Pengadilan Agama Kotamobagu</b> telah update data perkara', '2021-09-28 06:09:03', 'Pengadilan Agama Kotamobagu'),
(188, 'User <b>Pengadilan Agama Kotamobagu</b> telah update data perkara', '2021-09-28 06:19:33', 'Pengadilan Agama Kotamobagu'),
(189, 'User <b>Pengadilan Agama Kotamobagu</b> telah update data perkara', '2021-09-28 06:23:59', 'Pengadilan Agama Kotamobagu'),
(190, 'User <b>Pengadilan Agama Kotamobagu</b> telah update data perkara', '2021-09-28 07:45:19', 'Pengadilan Agama Kotamobagu'),
(191, 'User <b>Pengadilan Agama Kotamobagu</b> telah update data perkara', '2021-09-28 07:55:37', 'Pengadilan Agama Kotamobagu'),
(192, 'User <b>Pengadilan Agama Percobaan</b> telah menambah data perkara', '2021-09-29 01:16:57', 'Pengadilan Agama Percobaan'),
(193, 'User <b>Pengadilan Agama Kotamobagu</b> telah upload berkas bundel B pada id perkara <b>78</b>', '2021-09-29 03:11:25', 'Pengadilan Agama Kotamobagu'),
(194, 'User <b>Pengadilan Agama Kotamobagu</b> telah upload berkas bundel B pada id perkara <b>78</b>', '2021-09-29 03:13:21', 'Pengadilan Agama Kotamobagu'),
(195, 'User <b>Pengadilan Agama Kotamobagu</b> telah upload surat pengantar pada id perkara <b>78</b>', '2021-09-29 03:54:39', 'Pengadilan Agama Kotamobagu'),
(196, 'User <b>Hasbiah</b> telah input nomor perkara banding pada id perkara <b>78</b>', '2021-10-06 05:52:54', 'Hasbiah'),
(197, 'User <b>Hasbiah</b> telah input status perkara banding pada id perkara <b>77</b>', '2021-10-06 05:54:18', 'Hasbiah'),
(198, 'User <b>Hasbiah</b> telah input status perkara banding pada id perkara <b>78</b>', '2021-10-06 05:56:22', 'Hasbiah'),
(199, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>77</b>', '2021-10-11 01:18:17', 'Pengadilan Tinggi Agama Manado'),
(200, 'User <b>Pengadilan Tinggi Agama Manado</b> telah upload putusan perkara banding pada id perkara <b>77</b>', '2021-10-11 01:18:56', 'Pengadilan Tinggi Agama Manado'),
(201, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>78</b>', '2021-10-11 01:19:24', 'Pengadilan Tinggi Agama Manado'),
(202, 'User <b>Hasbiah</b> telah input status perkara banding pada id perkara <b>78</b>', '2021-10-11 03:55:35', 'Hasbiah'),
(203, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>78</b>', '2021-10-14 07:16:50', 'Pengadilan Tinggi Agama Manado'),
(204, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>78</b>', '2021-10-18 01:51:09', 'Pengadilan Tinggi Agama Manado'),
(205, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>61</b>', '2021-10-18 01:55:35', 'Pengadilan Tinggi Agama Manado'),
(206, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input nomor perkara banding pada id perkara <b>76</b>', '2021-10-18 02:11:37', 'Pengadilan Tinggi Agama Manado'),
(207, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input nomor perkara banding pada id perkara <b>74</b>', '2021-10-18 02:12:09', 'Pengadilan Tinggi Agama Manado'),
(208, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>78</b>', '2021-10-25 06:55:44', 'Pengadilan Tinggi Agama Manado'),
(209, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>78</b>', '2021-10-27 02:33:30', 'Pengadilan Tinggi Agama Manado'),
(210, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>78</b>', '2021-10-27 02:33:38', 'Pengadilan Tinggi Agama Manado'),
(211, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>78</b>', '2021-10-27 02:33:46', 'Pengadilan Tinggi Agama Manado'),
(212, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>78</b>', '2021-10-27 02:33:57', 'Pengadilan Tinggi Agama Manado'),
(213, 'User <b>Pengadilan Tinggi Agama Manado</b> telah upload putusan perkara banding pada id perkara <b>78</b>', '2021-10-27 02:34:09', 'Pengadilan Tinggi Agama Manado'),
(214, 'User <b>Pengadilan Agama Manado</b> telah menambah data perkara', '2021-11-03 08:29:42', 'Pengadilan Agama Manado'),
(215, 'User <b>Pengadilan Agama Manado</b> telah update data perkara', '2021-11-03 08:34:26', 'Pengadilan Agama Manado'),
(216, 'User <b>Pengadilan Agama Manado</b> telah menambah data perkara', '2021-11-03 10:40:58', 'Pengadilan Agama Manado'),
(217, 'User <b>Pengadilan Agama Manado</b> telah upload surat pengantar pada id perkara <b>81</b>', '2021-11-03 10:42:33', 'Pengadilan Agama Manado'),
(218, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input nomor perkara banding pada id perkara <b>81</b>', '2021-11-05 06:24:33', 'Pengadilan Tinggi Agama Manado'),
(219, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input nomor perkara banding pada id perkara <b>82</b>', '2021-11-05 06:24:45', 'Pengadilan Tinggi Agama Manado'),
(220, 'User <b>Pengadilan Tinggi Agama Manado</b> telah menambahkan user <b>', '2021-11-05 08:29:55', 'Pengadilan Tinggi Agama Manado'),
(221, 'User <b>Pengadilan Agama Manado</b> telah upload berkas bundel A pada id perkara <b>82</b>', '2021-11-08 09:54:08', 'Pengadilan Agama Manado'),
(222, 'User <b>Pengadilan Agama Manado</b> telah upload berkas bundel A pada id perkara <b>81</b>', '2021-11-08 09:57:26', 'Pengadilan Agama Manado'),
(223, 'User <b>Pengadilan Agama Manado</b> telah upload berkas bundel B pada id perkara <b>81</b>', '2021-11-08 10:15:30', 'Pengadilan Agama Manado'),
(224, 'User <b>Pengadilan Agama Manado</b> telah upload berkas bundel B pada id perkara <b>82</b>', '2021-11-09 00:56:34', 'Pengadilan Agama Manado'),
(225, 'User <b>Pengadilan Agama Manado</b> telah upload berkas bundel A pada id perkara <b>82</b>', '2021-11-09 01:15:48', 'Pengadilan Agama Manado'),
(226, 'User <b>Pengadilan Agama Manado</b> telah upload surat pengantar pada id perkara <b>82</b>', '2021-11-09 01:21:41', 'Pengadilan Agama Manado'),
(227, 'User <b>Pengadilan Agama Manado</b> telah upload berkas bundel B pada id perkara <b>81</b>', '2021-11-10 04:12:31', 'Pengadilan Agama Manado'),
(228, 'User <b>Pengadilan Agama Manado</b> telah upload berkas bundel B pada id perkara <b>82</b>', '2021-11-10 04:41:32', 'Pengadilan Agama Manado'),
(229, 'User <b>Pengadilan Agama Manado</b> telah upload berkas bundel B pada id perkara <b>81</b>', '2021-11-10 05:26:37', 'Pengadilan Agama Manado'),
(230, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>82</b>', '2021-11-11 01:18:23', 'Pengadilan Tinggi Agama Manado'),
(231, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>81</b>', '2021-11-11 01:18:30', 'Pengadilan Tinggi Agama Manado'),
(232, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>81</b>', '2021-11-29 05:11:37', 'Pengadilan Tinggi Agama Manado'),
(233, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>82</b>', '2021-11-29 05:11:43', 'Pengadilan Tinggi Agama Manado'),
(234, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>82</b>', '2021-11-30 03:55:00', 'Pengadilan Tinggi Agama Manado'),
(235, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>81</b>', '2021-11-30 03:55:06', 'Pengadilan Tinggi Agama Manado'),
(236, 'User <b>Pengadilan Agama Manado</b> telah menambah data perkara', '2021-11-30 05:31:37', 'Pengadilan Agama Manado'),
(237, 'User <b>Pengadilan Agama Manado</b> telah upload surat pengantar pada id perkara <b>83</b>', '2021-11-30 05:33:22', 'Pengadilan Agama Manado'),
(238, 'User <b>Pengadilan Agama Manado</b> telah upload berkas bundel A pada id perkara <b>83</b>', '2021-11-30 08:10:36', 'Pengadilan Agama Manado'),
(239, 'User <b>Pengadilan Agama Manado</b> telah upload berkas bundel B pada id perkara <b>83</b>', '2021-11-30 08:28:16', 'Pengadilan Agama Manado'),
(240, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input nomor perkara banding pada id perkara <b>83</b>', '2021-12-01 00:38:31', 'Pengadilan Tinggi Agama Manado'),
(241, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>83</b>', '2021-12-01 00:38:48', 'Pengadilan Tinggi Agama Manado'),
(242, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>83</b>', '2021-12-01 00:38:52', 'Pengadilan Tinggi Agama Manado'),
(243, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>83</b>', '2021-12-01 00:38:57', 'Pengadilan Tinggi Agama Manado'),
(244, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>83</b>', '2021-12-01 00:39:17', 'Pengadilan Tinggi Agama Manado'),
(245, 'User <b>Pengadilan Tinggi Agama Manado</b> telah update data user pada id <b>25</b>', '2021-12-01 02:04:19', 'Pengadilan Tinggi Agama Manado'),
(246, 'User <b>Iskandar Paputungan</b> telah memberikan catatan', '2021-12-01 02:19:58', 'Iskandar Paputungan'),
(247, 'User <b>Iskandar Paputungan</b> telah memberikan catatan', '2021-12-01 02:22:05', 'Iskandar Paputungan'),
(248, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>81</b>', '2021-12-01 02:26:37', 'Pengadilan Tinggi Agama Manado'),
(249, 'User <b>Pengadilan Tinggi Agama Manado</b> telah upload putusan perkara banding pada id perkara <b>81</b>', '2021-12-01 02:27:08', 'Pengadilan Tinggi Agama Manado'),
(250, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>82</b>', '2021-12-01 03:15:59', 'Pengadilan Tinggi Agama Manado'),
(251, 'User <b>Pengadilan Tinggi Agama Manado</b> telah update data user pada id <b>39</b>', '2021-12-02 15:43:27', 'Pengadilan Tinggi Agama Manado'),
(252, 'User <b>Pengadilan Tinggi Agama Manado</b> telah menambahkan user <b>', '2021-12-02 15:44:29', 'Pengadilan Tinggi Agama Manado'),
(253, 'User <b>Pengadilan Tinggi Agama Manado</b> telah menambahkan user <b>', '2021-12-02 15:45:39', 'Pengadilan Tinggi Agama Manado'),
(254, 'User <b>Pengadilan Tinggi Agama Manado</b> telah menambahkan user <b>', '2021-12-02 15:56:27', 'Pengadilan Tinggi Agama Manado'),
(255, 'User <b>Pengadilan Tinggi Agama Manado</b> telah menambahkan user <b>', '2021-12-02 15:59:09', 'Pengadilan Tinggi Agama Manado'),
(256, 'User <b>Pengadilan Tinggi Agama Manado</b> telah menambahkan user <b>', '2021-12-02 16:15:00', 'Pengadilan Tinggi Agama Manado'),
(257, 'User <b>Pengadilan Tinggi Agama Manado</b> telah menambahkan user <b>', '2021-12-02 16:19:37', 'Pengadilan Tinggi Agama Manado'),
(258, 'User <b>Pengadilan Agama Manado</b> telah menambah data perkara', '2021-12-07 03:16:05', 'Pengadilan Agama Manado'),
(259, 'User <b>Pengadilan Agama Manado</b> telah upload surat pengantar pada id perkara <b>84</b>', '2021-12-07 03:18:35', 'Pengadilan Agama Manado'),
(260, 'User <b>Pengadilan Agama Manado</b> telah upload berkas bundel B pada id perkara <b>84</b>', '2021-12-07 22:53:55', 'Pengadilan Agama Manado'),
(261, 'User <b>Pengadilan Agama Manado</b> telah upload berkas bundel A pada id perkara <b>84</b>', '2021-12-08 01:28:44', 'Pengadilan Agama Manado'),
(262, 'User <b>Hasbiah</b> telah input nomor perkara banding pada id perkara <b>84</b>', '2021-12-08 03:05:41', 'Hasbiah'),
(263, 'User <b>Hasbiah</b> telah input status perkara banding pada id perkara <b>84</b>', '2021-12-08 03:06:10', 'Hasbiah'),
(264, 'User <b>Hasbiah</b> telah input status perkara banding pada id perkara <b>84</b>', '2021-12-08 03:06:37', 'Hasbiah'),
(265, 'User <b>Hasbiah</b> telah input status perkara banding pada id perkara <b>84</b>', '2021-12-08 03:08:01', 'Hasbiah'),
(266, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>83</b>', '2021-12-08 07:58:08', 'Pengadilan Tinggi Agama Manado'),
(267, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>83</b>', '2021-12-08 07:58:45', 'Pengadilan Tinggi Agama Manado'),
(268, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>83</b>', '2021-12-13 00:34:13', 'Pengadilan Tinggi Agama Manado'),
(269, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>84</b>', '2021-12-13 00:34:21', 'Pengadilan Tinggi Agama Manado'),
(270, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>83</b>', '2021-12-17 01:26:26', 'Pengadilan Tinggi Agama Manado'),
(271, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>83</b>', '2021-12-17 01:26:32', 'Pengadilan Tinggi Agama Manado'),
(272, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>83</b>', '2021-12-17 01:26:44', 'Pengadilan Tinggi Agama Manado'),
(273, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>83</b>', '2021-12-17 01:26:52', 'Pengadilan Tinggi Agama Manado'),
(274, 'User <b>Pengadilan Tinggi Agama Manado</b> telah upload putusan perkara banding pada id perkara <b>83</b>', '2021-12-17 01:27:24', 'Pengadilan Tinggi Agama Manado'),
(275, 'User <b>Iskandar Paputungan</b> telah memberikan catatan', '2021-12-20 01:11:43', 'Iskandar Paputungan'),
(276, 'User <b>Iskandar Paputungan</b> telah memberikan catatan', '2021-12-20 01:27:29', 'Iskandar Paputungan'),
(277, 'User <b>Iskandar Paputungan</b> telah memberikan catatan', '2021-12-20 01:52:12', 'Iskandar Paputungan'),
(278, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>84</b>', '2021-12-22 08:06:45', 'Pengadilan Tinggi Agama Manado'),
(279, 'User <b>Pengadilan Tinggi Agama Manado</b> telah upload putusan perkara banding pada id perkara <b>84</b>', '2021-12-22 08:07:04', 'Pengadilan Tinggi Agama Manado'),
(280, 'User <b>Pengadilan Agama Kotamobagu</b> telah menambah data perkara', '2021-12-23 07:47:12', 'Pengadilan Agama Kotamobagu'),
(281, 'User <b>Pengadilan Agama Kotamobagu</b> telah upload berkas bundel A pada id perkara <b>85</b>', '2021-12-23 07:55:57', 'Pengadilan Agama Kotamobagu'),
(282, 'User <b>Pengadilan Agama Kotamobagu</b> telah upload berkas bundel B pada id perkara <b>85</b>', '2021-12-27 01:32:09', 'Pengadilan Agama Kotamobagu'),
(283, 'User <b>Pengadilan Agama Kotamobagu</b> telah upload berkas bundel B pada id perkara <b>85</b>', '2021-12-27 01:43:44', 'Pengadilan Agama Kotamobagu'),
(284, 'User <b>Pengadilan Agama Kotamobagu</b> telah upload surat pengantar pada id perkara <b>85</b>', '2021-12-27 05:41:15', 'Pengadilan Agama Kotamobagu'),
(285, 'User <b>Pengadilan Agama Kotamobagu</b> telah update data perkara', '2021-12-27 05:44:56', 'Pengadilan Agama Kotamobagu'),
(286, 'User <b>Pengadilan Agama Kotamobagu</b> telah update data perkara', '2021-12-27 05:46:20', 'Pengadilan Agama Kotamobagu'),
(287, 'User <b>Pengadilan Agama Kotamobagu</b> telah update data perkara', '2021-12-27 05:47:18', 'Pengadilan Agama Kotamobagu'),
(288, 'User <b>Pengadilan Agama Kotamobagu</b> telah update data perkara', '2021-12-27 05:48:43', 'Pengadilan Agama Kotamobagu'),
(289, 'User <b>Pengadilan Agama Kotamobagu</b> telah update data perkara', '2021-12-27 06:03:36', 'Pengadilan Agama Kotamobagu'),
(290, 'User <b>Pengadilan Agama Kotamobagu</b> telah update data perkara', '2021-12-27 06:05:21', 'Pengadilan Agama Kotamobagu'),
(291, 'User <b>Pengadilan Agama Kotamobagu</b> telah update data perkara', '2021-12-27 06:06:03', 'Pengadilan Agama Kotamobagu'),
(292, 'User <b>Pengadilan Agama Percobaan</b> telah menambah data perkara', '2021-12-27 07:22:07', 'Pengadilan Agama Percobaan'),
(293, 'User <b>Pengadilan Agama Kotamobagu</b> telah upload surat pengantar pada id perkara <b>85</b>', '2021-12-27 07:46:38', 'Pengadilan Agama Kotamobagu'),
(294, 'User <b>Pengadilan Agama Kotamobagu</b> telah upload berkas bundel B pada id perkara <b>85</b>', '2022-01-03 08:15:18', 'Pengadilan Agama Kotamobagu'),
(295, 'User <b>Pengadilan Agama Kotamobagu</b> telah upload berkas bundel B pada id perkara <b>85</b>', '2022-01-04 01:05:11', 'Pengadilan Agama Kotamobagu'),
(296, 'User <b>Hasbiah</b> telah input nomor perkara banding pada id perkara <b>85</b>', '2022-01-05 00:45:41', 'Hasbiah'),
(297, 'User <b>Hasbiah</b> telah input status perkara banding pada id perkara <b>85</b>', '2022-01-05 00:46:24', 'Hasbiah'),
(298, 'User <b>Hasbiah</b> telah input nomor perkara banding pada id perkara <b>85</b>', '2022-01-05 00:47:13', 'Hasbiah'),
(299, 'User <b>Pengadilan Agama Kotamobagu</b> telah upload berkas bundel A pada id perkara <b>85</b>', '2022-01-06 06:09:40', 'Pengadilan Agama Kotamobagu'),
(300, 'User <b>Pengadilan Agama Lolak</b> telah menambah data perkara', '2022-01-13 03:01:33', 'Pengadilan Agama Lolak'),
(301, 'User <b>Pengadilan Agama Lolak</b> telah update data perkara', '2022-01-13 04:48:16', 'Pengadilan Agama Lolak'),
(302, 'User <b>Pengadilan Agama Lolak</b> telah upload berkas bundel A pada id perkara <b>87</b>', '2022-01-13 04:56:27', 'Pengadilan Agama Lolak'),
(303, 'User <b>Pengadilan Agama Lolak</b> telah upload surat pengantar pada id perkara <b>87</b>', '2022-01-13 06:32:17', 'Pengadilan Agama Lolak'),
(304, 'User <b>Pengadilan Agama Lolak</b> telah update data perkara', '2022-01-13 09:10:16', 'Pengadilan Agama Lolak'),
(305, 'User <b>Pengadilan Agama Lolak</b> telah upload berkas bundel B pada id perkara <b>87</b>', '2022-01-14 07:20:00', 'Pengadilan Agama Lolak'),
(306, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>85</b>', '2022-01-17 01:53:37', 'Pengadilan Tinggi Agama Manado'),
(307, 'User <b>Pengadilan Agama Lolak</b> telah upload berkas bundel B pada id perkara <b>87</b>', '2022-01-17 11:47:59', 'Pengadilan Agama Lolak'),
(308, 'User <b>Hasbiah</b> telah input nomor perkara banding pada id perkara <b>87</b>', '2022-01-19 07:19:04', 'Hasbiah'),
(309, 'User <b>Hasbiah</b> telah input status perkara banding pada id perkara <b>87</b>', '2022-01-19 07:19:26', 'Hasbiah'),
(310, 'User <b>Hasbiah</b> telah input status perkara banding pada id perkara <b>87</b>', '2022-01-19 07:19:53', 'Hasbiah'),
(311, 'User <b>Hasbiah</b> telah input status perkara banding pada id perkara <b>87</b>', '2022-01-19 07:20:17', 'Hasbiah'),
(312, 'User <b>Hasbiah</b> telah input status perkara banding pada id perkara <b>87</b>', '2022-01-19 07:20:59', 'Hasbiah'),
(313, 'User <b>Hasbiah</b> telah input status perkara banding pada id perkara <b>87</b>', '2022-01-19 07:21:08', 'Hasbiah'),
(314, 'User <b>Hasbiah</b> telah input status perkara banding pada id perkara <b>87</b>', '2022-01-20 02:21:06', 'Hasbiah'),
(315, 'User <b>Hasbiah</b> telah memilih panitera pengganti pada perkara <b>87</b>', '2022-01-20 02:21:20', 'Hasbiah'),
(316, 'User <b>Hasbiah</b> telah input status perkara banding pada id perkara <b>85</b>', '2022-01-20 02:21:54', 'Hasbiah'),
(317, 'User <b>Pengadilan Agama Lolak</b> telah upload berkas bundel B pada id perkara <b>87</b>', '2022-01-20 07:20:29', 'Pengadilan Agama Lolak'),
(318, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>85</b>', '2022-01-27 00:36:59', 'Pengadilan Tinggi Agama Manado'),
(319, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>85</b>', '2022-01-27 00:37:08', 'Pengadilan Tinggi Agama Manado'),
(320, 'User <b>Pengadilan Tinggi Agama Manado</b> telah upload putusan perkara banding pada id perkara <b>85</b>', '2022-01-27 00:37:17', 'Pengadilan Tinggi Agama Manado'),
(321, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>87</b>', '2022-01-27 00:39:58', 'Pengadilan Tinggi Agama Manado'),
(322, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>87</b>', '2022-02-07 07:09:02', 'Pengadilan Tinggi Agama Manado'),
(323, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>87</b>', '2022-02-14 07:59:05', 'Pengadilan Tinggi Agama Manado'),
(324, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>87</b>', '2022-02-14 07:59:18', 'Pengadilan Tinggi Agama Manado'),
(325, 'User <b>Pengadilan Tinggi Agama Manado</b> telah upload putusan perkara banding pada id perkara <b>87</b>', '2022-02-14 07:59:32', 'Pengadilan Tinggi Agama Manado'),
(326, 'User <b>Pengadilan Agama Manado</b> telah menambah data perkara', '2022-03-01 00:27:07', 'Pengadilan Agama Manado'),
(327, 'User <b>Pengadilan Agama Manado</b> telah upload surat pengantar pada id perkara <b>88</b>', '2022-03-01 00:28:02', 'Pengadilan Agama Manado'),
(328, 'User <b>Pengadilan Agama Manado</b> telah upload berkas bundel A pada id perkara <b>88</b>', '2022-03-01 07:04:53', 'Pengadilan Agama Manado'),
(329, 'User <b>Pengadilan Agama Manado</b> telah upload berkas bundel B pada id perkara <b>88</b>', '2022-03-01 07:41:17', 'Pengadilan Agama Manado'),
(330, 'User <b>Hasbiah</b> telah input nomor perkara banding pada id perkara <b>88</b>', '2022-03-02 06:41:31', 'Hasbiah'),
(331, 'User <b>Hasbiah</b> telah input status perkara banding pada id perkara <b>88</b>', '2022-03-02 06:41:57', 'Hasbiah'),
(332, 'User <b>Hasbiah</b> telah memilih panitera pengganti pada perkara <b>88</b>', '2022-03-02 06:42:56', 'Hasbiah'),
(333, 'User <b>Hasbiah</b> telah input status perkara banding pada id perkara <b>88</b>', '2022-03-02 06:45:13', 'Hasbiah'),
(334, 'User <b>Hasbiah</b> telah input status perkara banding pada id perkara <b>88</b>', '2022-03-02 06:45:33', 'Hasbiah'),
(335, 'User <b>Pengadilan Agama Manado</b> telah upload berkas bundel B pada id perkara <b>88</b>', '2022-03-02 08:12:00', 'Pengadilan Agama Manado'),
(336, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>88</b>', '2022-03-08 23:59:36', 'Pengadilan Tinggi Agama Manado'),
(337, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>88</b>', '2022-03-17 03:58:21', 'Pengadilan Tinggi Agama Manado'),
(338, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>88</b>', '2022-03-17 03:58:28', 'Pengadilan Tinggi Agama Manado'),
(339, 'User <b>Pengadilan Tinggi Agama Manado</b> telah upload putusan perkara banding pada id perkara <b>88</b>', '2022-03-17 03:58:41', 'Pengadilan Tinggi Agama Manado'),
(340, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>88</b>', '2022-03-17 04:03:36', 'Pengadilan Tinggi Agama Manado'),
(341, 'User <b>Pengadilan Tinggi Agama Manado</b> telah upload putusan perkara banding pada id perkara <b>88</b>', '2022-03-17 04:04:03', 'Pengadilan Tinggi Agama Manado'),
(342, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>88</b>', '2022-03-22 02:19:19', 'Pengadilan Tinggi Agama Manado'),
(343, 'User <b>Pengadilan Tinggi Agama Manado</b> telah menambahkan user <b>', '2022-03-28 05:48:59', 'Pengadilan Tinggi Agama Manado'),
(344, 'User <b>Pengadilan Agama Manado</b> telah update data perkara', '2022-03-29 04:17:46', 'Pengadilan Agama Manado'),
(345, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>82</b>', '2022-03-29 05:35:33', 'Pengadilan Tinggi Agama Manado'),
(346, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>82</b>', '2022-03-29 05:35:43', 'Pengadilan Tinggi Agama Manado'),
(347, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>82</b>', '2022-03-29 05:37:36', 'Pengadilan Tinggi Agama Manado'),
(348, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>82</b>', '2022-03-29 05:41:09', 'Pengadilan Tinggi Agama Manado'),
(349, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>82</b>', '2022-03-29 05:48:53', 'Pengadilan Tinggi Agama Manado'),
(350, 'User <b>Pengadilan Tinggi Agama Manado</b> telah upload putusan perkara banding pada id perkara <b>82</b>', '2022-03-29 05:48:59', 'Pengadilan Tinggi Agama Manado'),
(351, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>77</b>', '2022-03-29 05:53:53', 'Pengadilan Tinggi Agama Manado'),
(352, 'User <b>Pengadilan Tinggi Agama Manado</b> telah input status perkara banding pada id perkara <b>77</b>', '2022-03-29 05:57:38', 'Pengadilan Tinggi Agama Manado');

-- --------------------------------------------------------

--
-- Table structure for table `log_inbox`
--

CREATE TABLE `log_inbox` (
  `id_log_inbox` int(11) NOT NULL,
  `id_perkara` int(11) NOT NULL,
  `no_perkara` varchar(50) NOT NULL,
  `is_read` int(11) NOT NULL,
  `change_date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log_inbox`
--

INSERT INTO `log_inbox` (`id_log_inbox`, `id_perkara`, `no_perkara`, `is_read`, `change_date`) VALUES
(0, 47, '23455/Pdt.G/2021/PA.Mdo', 2, 2147483647),
(0, 48, '12345/Pdt.G/2021/PA.Blu', 2, 2147483647),
(0, 49, '123456/Pdt.G/2021/PA.Blu', 2, 2147483647),
(0, 50, '12345/Pdt.G/2021/PA.Blu', 2, 2147483647),
(0, 51, '123456/Pdt.G/2021/PA.Blu', 2, 2147483647),
(0, 52, '21432/Pdt.G/2021/PA.Mdo', 2, 2147483647),
(0, 53, '12344/Pdt.G/2021/PA.Blu', 2, 2147483647),
(0, 54, '1235/Pdt.G/2021/PA.Tty', 2, 2147483647),
(0, 55, '4343/Pdt.G/2021/PA.Tty', 2, 2147483647),
(0, 56, '344/Pdt.G/2021/PA.Tty', 2, 2147483647),
(0, 57, '16/Pdt.G/2021/PA.Ktg', 2, 2147483647),
(0, 58, '14/Pdt.G/2021/PA.Tdo', 2, 2147483647),
(0, 59, '2580/Pdt.G/2021/PA.Tty', 2, 2147483647),
(0, 60, '1234/Pdt.G/2021/PA.Mdo', 2, 2147483647),
(0, 61, '96/Pdt.G/2021/PA.Ktg', 2, 2147483647),
(0, 62, '1111/Pdt.G/2021/PA.Per', 2, 2147483647),
(0, 63, '152/Pdt.G/2021/PA.Tty', 2, 2147483647),
(0, 64, '1111/Pdt.G/2021/PA.Tty', 2, 2147483647),
(0, 65, '43/Pdt.G/2021/PA.Mdo', 2, 2147483647),
(0, 66, '454/Pdt.G/2021/PA.Tty', 2, 2147483647),
(0, 67, '0000/Pdt.G/2021/PA.Per', 2, 2147483647),
(0, 68, '152/Pdt.G/2021/PA.Tty', 2, 2147483647),
(0, 69, '51/Pdt.G/2021/PA.Mdo', 2, 2147483647),
(0, 70, '222/Pdt.G/2021/PA.Tty', 2, 2147483647),
(0, 71, '2/Pdt.G/2021/PA.Per', 2, 2147483647),
(0, 72, '4444/Pdt.G/2021/PA.Per', 2, 2147483647),
(0, 73, '222/Pdt.G/2021/PA.Per', 2, 2147483647),
(0, 74, '37/Pdt.G/2021/PA.Blu', 2, 2147483647),
(0, 75, '122/Pdt.G/2021/PA.Per', 2, 2147483647),
(0, 76, '7/Pdt.G/2021/PA.Mdo', 2, 2147483647),
(0, 77, '189/Pdt.G/2021/PA.Llk', 2, 2147483647),
(0, 78, '178/Pdt.G/2021/PA.Ktg', 2, 2147483647),
(0, 79, '111/Pdt.G/2021/PA.Per', 2, 2147483647),
(0, 80, '1111/Pdt.G/2021/PA.Per', 2, 2147483647),
(0, 81, '226/Pdt.G/2021/PA.Mdo', 2, 2147483647),
(0, 82, '245/Pdt.G/2021/PA.Mdo', 2, 2147483647),
(0, 83, '258/Pdt.G/2021/PA.Mdo', 2, 2147483647),
(0, 84, '248/Pdt.G/2021/PA.Mdo', 2, 2147483647),
(0, 85, '309/Pdt.G/2021/PA.Ktg', 2, 2147483647),
(0, 86, '000/Pdt.G/2021/PA.Per', 2, 2147483647),
(0, 87, '409/Pdt.G/2022/PA.Llk', 2, 2147483647),
(0, 88, '420/Pdt.G/2021/PA.Mdo', 2, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `majelis_hakim`
--

CREATE TABLE `majelis_hakim` (
  `id_mh` int(11) NOT NULL,
  `id_user_mh` int(11) DEFAULT NULL,
  `majelis` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penunjukan_pp`
--

CREATE TABLE `penunjukan_pp` (
  `id_pp` int(11) NOT NULL,
  `id_perkara` int(11) NOT NULL,
  `id_user_pp` int(11) DEFAULT NULL,
  `file_pp` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penunjukan_pp`
--

INSERT INTO `penunjukan_pp` (`id_pp`, `id_perkara`, `id_user_pp`, `file_pp`) VALUES
(1, 83, 44, NULL),
(2, 84, 41, NULL),
(3, 81, 42, NULL),
(7, 85, 43, NULL),
(8, 87, 45, NULL),
(9, 88, 40, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pmh`
--

CREATE TABLE `pmh` (
  `id_pmh` int(11) NOT NULL,
  `id_perkara` int(11) DEFAULT NULL,
  `majelis_hakim` varchar(5) DEFAULT NULL,
  `file_pmh` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pmh`
--

INSERT INTO `pmh` (`id_pmh`, `id_perkara`, `majelis_hakim`, `file_pmh`) VALUES
(1, 83, NULL, NULL),
(2, 84, NULL, NULL),
(3, 85, NULL, NULL),
(5, 87, NULL, NULL),
(6, 88, NULL, NULL);

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
(2, 'Pengadilan Agama Manado', 'pa.manado307225@gmail.com', 'pa-manado', '$2y$10$XgCSCiSV50OVnB0kCNAgFeCA7JQuKxD5HuvJ/yJGgmjdS8TXsbqVy', 2, 'PA.Mdo', 1, '2021-05-27'),
(3, 'Pengadilan Agama Tutuyan', '', 'pa-tutuyan', '$2y$10$zKNxC63heZCgpGadi9mWVO9.zBp5FcUE/mjdJjMrDBj/z/6IctVue', 2, 'PA.Tty', 1, '2021-05-27'),
(4, 'Pengadilan Agama Bolaang Uki', 'pa.bolaanguki@gmail.com', 'pa-blu', '$2y$10$lgR9YMOK/wxME3ZgJNpon.biuAgjzwvL6TQxJ8YjfGCZdqDYarvLm', 2, 'PA.Blu', 1, '2021-05-27'),
(5, 'Pengadilan Agama Tondano', 'pa.tondano@gmail.com', 'pa-tondano', '$2y$10$Jzl9b95ASJHkehkK6wrTeOBhDXPZ64A.dT3NMWsPOw3PdcsnOPFlS', 2, 'PA.Tdo', 1, '2021-05-27'),
(6, 'Pengadilan Agama Lolak', 'pa.lolak.sulut@gmail.com', 'pa-lolak', '$2y$10$hhI.UlPPjUlXuhfGGVBIpeF8bz9ls.wcC3MxUWzy4EF.1uXBZjSfe', 2, 'PA.Llk', 1, '2021-05-27'),
(7, 'Pengadilan Agama Boroko', '', 'pa-boroko', '$2y$10$zKNxC63heZCgpGadi9mWVO9.zBp5FcUE/mjdJjMrDBj/z/6IctVue', 2, 'PA.Brk', 1, '2021-05-27'),
(8, 'Pengadilan Agama Amurang', '', 'pa-amurang', '$2y$10$MlJvFdjkTcwx0V/AFRGdSe5Ys4Ky/pgQeUXSRPxfFKiA5CyrDGoGe', 2, 'PA.Amg', 1, '2021-05-27'),
(9, 'Pengadilan Agama Kotamobagu', 'pa.kotamobagu@gmail.com', 'pa-kotamobagu', '$2y$10$QrSYnuMTBbsJb3pGPfr5VeT5XoBAhQ36GJzJ8c6pXSNstGoKtz8Ei', 2, 'PA.Ktg', 1, '2021-05-27'),
(10, 'Pengadilan Agama Tahuna', 'patahuna3@gmail.com', 'pa-tahuna', '$2y$10$R80xcFUpZPXovPrrZuNpi.Yz5O.w3WxIz4NP6iIri0XtQvNLveB76', 2, 'PA.Thn', 1, '2021-05-27'),
(11, 'Pengadilan Agama Bitung', '', 'pa-bitung', '$2y$10$zKNxC63heZCgpGadi9mWVO9.zBp5FcUE/mjdJjMrDBj/z/6IctVue', 2, 'PA.Btg', 1, '2021-05-27'),
(22, 'Drs. H. Abdul Hakim, M.HI.', '', 'ht-hakim', '$2y$10$Iqkt35Uui8ZrhmrPJPwlVOKawxfckxMdcRyQ/ybhU1VqHbsWzARR.', 3, '', 1, NULL),
(25, 'Riyan', 'riyanboyuhu@gmail.com', 'riyan', '$2y$10$zBqkwdXsGc5dNraCKR5ucepPHX5znT6UlGhIJM7dqv0rXbFzISLw6', 1, '', 1, NULL),
(26, 'Dedy', 'papah.dika@gmail.com', 'dedy', '$2y$10$kvHN/pCmOg27OaahgAmrb.1d0leqCuHxUOgYjx.Rz1y8/3s25/Zr6', 1, '', 1, NULL),
(28, ' Drs.H. Muhamad Camuda, M.H.', '', 'ht-camuda', '$2y$10$oFjGVOMKpRFLb05R/QV5WuaSQihQb.iiyhEa/AYeaV9WWda97zYKO', 3, '', 1, NULL),
(29, 'Dr. H. Barmawi, M.H.', '', 'ht-barmawi', '$2y$10$OH7hcK0u64ACNdWhjMsCFeK60b/7lOQNrrL2WohYd.b/ABSwDwnAW', 3, '', 1, NULL),
(30, 'Drs. Zainal Aripin, S.H.,M.Hum.', '', 'ht-zainal', '$2y$10$Whp2JFKwyPwlHcQjmK.9u.bX/mpRNOKrXVxyy/GjXkuYy4WS22sAu', 3, '', 1, NULL),
(31, ' Drs. H. Wachid Ridwan, M.H.', '', 'ht-wachid', '$2y$10$oPHSMZQSH3kmnanurlFjKeR/5T0CQ.M1pTd5ktRlarcMVKRDRjLFa', 3, '', 1, NULL),
(32, 'Drs. Faizal Kamil,S.H.,M.H.', '', 'ht-faizal', '$2y$10$6Rb2U0acG23hoZoahMFUfuS/.h0Y2VSLQdLEE9KSOal2FGFhkpmpe', 3, '', 1, NULL),
(34, 'Iskandar Paputungan', 'iskandar@.com', 'ht-iskandar', '$2y$10$i8Jgi54G1Op9620XgoOcsOeYSC9EvFWJjCwMKs./lu361yc.7hyz6', 3, '', 1, NULL),
(35, 'Muhammad Alwi', 'alwi@gmail.com', 'ht-alwi', '$2y$10$ykJ7H3kTChw1UeXDlXP4Y.aGoRavkP.iRcKAaWZlSxT7YIG7d5E1C', 3, '', 1, NULL),
(36, 'Pengadilan Agama Percobaan', '', 'pa-percobaan', '$2y$10$JPTNRHK/FEP0akWoVeoXUeELQdfZYrMkFg2YwX2EBSCp8rAwF4rjy', 2, 'PA.Per', 1, NULL),
(37, 'Hasbiah', '', 'pm-hasbiah', '$2y$10$0zIjxIJCI9ITIKDSJCUXqe8Y9GJMxFetU.LLOyL3/XmvktXiCqvD6', 4, '', 1, NULL),
(38, 'Hakim Percobaan', '', 'ht-percobaan', '$2y$10$yN4U93XVthSP9j4.g/mocOR36k6Chvlm93eJZGresXUFRx2VTiNwi', 3, '', 1, NULL),
(39, 'Bambang Suroso', '', 'pp-bambang', '$2y$10$teMlwxqq4uWcH6epgK21teqpqNvVx./.Ry5eugltGQyfvKJ5db4LC', 5, '', 1, NULL),
(40, 'Dra.Hj.Sa\'i Sumaila', '', 'pp-sai', '$2y$10$5VjXU0.3/meWjLSObwx4iOC5jqtHTq56rPtRnog.jn1cPsG8rKNpW', 5, '', 1, NULL),
(41, 'Musa Antu, S.H.', '', 'pp-musa', '$2y$10$IJKUdS58DCtoIL42enDqYudohdUyzjoAiHyMlAkNOnfuru8LkAqJC', 5, '', 1, NULL),
(42, 'Hj. Rusna Poli, S.H., M.H.', '', 'pp-rusna', '$2y$10$dxQFHOFaB7rZyrXMf2p.d.jXNjFGEFL2aURggzwNdYc5H/rKfNA/q', 5, '', 1, NULL),
(43, ' Masita Mayang, S.Ag.', '', 'pp-masita', '$2y$10$xsyRCZ7YDQ98AWEYsM.xbuldyaHvyFlocPi1gyFX5CnQ1CRdlP25e', 5, '', 1, NULL),
(44, 'Rosna Ali, S.Ag.', '', 'pp-rosna', '$2y$10$EdTrXbcCGDko54Q64WiSbOncXHkgRZxduHqyQszlBDtvMn8VBnntO', 5, '', 1, NULL),
(45, 'Drs. Abdul Haris Makaminan', '', 'pp-haris', '$2y$10$CpqojFYJbtcfWeUWwCodz.F/sGXFPtZ.T1LetIFeayDs3iEqnzYfa', 5, '', 1, NULL),
(46, 'Drs. H. DAMSIR, S.H., M.H.', 'damsir.md@gmail.com', 'Damsir', '$2y$10$I7Uh/QnkSru0ie9ts0blqu0zyTLAh1fvOe9SR9DMCT4HQYwSBDsdm', 3, '', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `token` varchar(255) NOT NULL,
  `date_created` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
,`tgl_reg_banding` date
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
,`tgl_reg_banding` date
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
-- Stand-in structure for view `v_perkara_pp`
-- (See below for the actual view)
--
CREATE TABLE `v_perkara_pp` (
`id_user_pp` int(11)
,`file_pp` varchar(255)
,`nama` varchar(50)
,`id_perkara` int(11)
,`id_user` int(11)
,`no_perkara` varchar(50)
,`nm_pihak_penggugat` varchar(100)
,`nm_pihak_tergugat` varchar(100)
,`jns_perkara` varchar(50)
,`tgl_register` date
,`tgl_reg_banding` date
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
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_user_hakim`
-- (See below for the actual view)
--
CREATE TABLE `v_user_hakim` (
`id` int(11)
,`nama` varchar(50)
,`email` varchar(100)
,`username` varchar(50)
,`password` varchar(255)
,`role_id` int(11)
,`kode_pa` varchar(20)
,`is_active` int(11)
,`data_created` date
,`id_mh` int(11)
,`id_user_mh` int(11)
,`majelis` varchar(10)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_user_pp`
-- (See below for the actual view)
--
CREATE TABLE `v_user_pp` (
`id` int(11)
,`nama` varchar(50)
,`email` varchar(100)
,`username` varchar(50)
,`password` varchar(255)
,`role_id` int(11)
,`kode_pa` varchar(20)
,`is_active` int(11)
,`data_created` date
);

-- --------------------------------------------------------

--
-- Structure for view `v_all_perkara`
--
DROP TABLE IF EXISTS `v_all_perkara`;

CREATE ALGORITHM=UNDEFINED DEFINER=`manado`@`localhost` SQL SECURITY DEFINER VIEW `v_all_perkara`  AS SELECT `list_perkara`.`id_perkara` AS `id_perkara`, `list_perkara`.`id_user` AS `id_user`, `list_perkara`.`no_perkara` AS `no_perkara`, `list_perkara`.`nm_pihak_penggugat` AS `nm_pihak_penggugat`, `list_perkara`.`nm_pihak_tergugat` AS `nm_pihak_tergugat`, `list_perkara`.`jns_perkara` AS `jns_perkara`, `list_perkara`.`tgl_register` AS `tgl_register`, `list_perkara`.`tgl_reg_banding` AS `tgl_reg_banding`, `list_perkara`.`no_surat_pengantar` AS `no_surat_pengantar`, `list_perkara`.`pejabat_berwenang` AS `pejabat_berwenang`, `list_perkara`.`nm_pejabat` AS `nm_pejabat`, `list_perkara`.`nip_pejabat` AS `nip_pejabat`, `list_perkara`.`banyaknya` AS `banyaknya`, `list_perkara`.`keterangan` AS `keterangan`, `list_perkara`.`status_perkara` AS `status_perkara`, `list_perkara`.`sp_perkara` AS `sp_perkara`, `list_perkara`.`no_perkara_banding` AS `no_perkara_banding`, `list_perkara`.`putusan_banding` AS `putusan_banding`, `list_perkara`.`is_nomor` AS `is_nomor`, `list_perkara`.`surat_gugatan` AS `surat_gugatan`, `list_perkara`.`sk_bundelA` AS `sk_bundelA`, `list_perkara`.`bukti_pemb_panjar` AS `bukti_pemb_panjar`, `list_perkara`.`majelis_hakim` AS `majelis_hakim`, `list_perkara`.`penunjukan_pp` AS `penunjukan_pp`, `list_perkara`.`penunjukan_js` AS `penunjukan_js`, `list_perkara`.`penetapan_hari_sidang` AS `penetapan_hari_sidang`, `list_perkara`.`relaas_panggilan` AS `relaas_panggilan`, `list_perkara`.`ba_sidang` AS `ba_sidang`, `list_perkara`.`penetapan_sita` AS `penetapan_sita`, `list_perkara`.`ba_sita` AS `ba_sita`, `list_perkara`.`lampiran_surat` AS `lampiran_surat`, `list_perkara`.`surat_bukti_penggugat` AS `surat_bukti_penggugat`, `list_perkara`.`surat_bukti_tergugat` AS `surat_bukti_tergugat`, `list_perkara`.`tanggapan_bukti_tergugat` AS `tanggapan_bukti_tergugat`, `list_perkara`.`tanggapan_bukti_penggugat` AS `tanggapan_bukti_penggugat`, `list_perkara`.`gambar_situasi` AS `gambar_situasi`, `list_perkara`.`surat_lain` AS `surat_lain`, `list_perkara`.`salinan_putusan_pa` AS `salinan_putusan_pa`, `list_perkara`.`salinan_putusan_pa_rtf` AS `salinan_putusan_pa_rtf`, `list_perkara`.`sk_bundelb` AS `sk_bundelb`, `list_perkara`.`akta_banding` AS `akta_banding`, `list_perkara`.`akta_penerimaan_mb` AS `akta_penerimaan_mb`, `list_perkara`.`memori_banding` AS `memori_banding`, `list_perkara`.`memori_banding_rtf` AS `memori_banding_rtf`, `list_perkara`.`akta_pemberitahuan_banding` AS `akta_pemberitahuan_banding`, `list_perkara`.`pemberitahuan_penyerahan_mb` AS `pemberitahuan_penyerahan_mb`, `list_perkara`.`akta_penerimaankontra_mb` AS `akta_penerimaankontra_mb`, `list_perkara`.`kontra_mb` AS `kontra_mb`, `list_perkara`.`kontra_mb_rtf` AS `kontra_mb_rtf`, `list_perkara`.`pemberitahuan_penyerahankontra_mb` AS `pemberitahuan_penyerahankontra_mb`, `list_perkara`.`relaas_periksa_berkas_pb` AS `relaas_periksa_berkas_pb`, `list_perkara`.`sk_khusus` AS `sk_khusus`, `list_perkara`.`bukt_pengiriman_bpb` AS `bukt_pengiriman_bpb`, `list_perkara`.`bukti_setor_bp_kasnegara` AS `bukti_setor_bp_kasnegara`, `list_perkara`.`surat_lainnya_b` AS `surat_lainnya_b`, `users`.`nama` AS `nama` FROM (`list_perkara` join `users` on(`list_perkara`.`id_user` = `users`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_berkas_hakim`
--
DROP TABLE IF EXISTS `v_berkas_hakim`;

CREATE ALGORITHM=UNDEFINED DEFINER=`manado`@`localhost` SQL SECURITY DEFINER VIEW `v_berkas_hakim`  AS SELECT `list_perkara`.`id_perkara` AS `id_perkara`, `list_perkara`.`id_user` AS `id_user`, `list_perkara`.`no_perkara` AS `no_perkara`, `list_perkara`.`nm_pihak_penggugat` AS `nm_pihak_penggugat`, `list_perkara`.`nm_pihak_tergugat` AS `nm_pihak_tergugat`, `list_perkara`.`jns_perkara` AS `jns_perkara`, `list_perkara`.`tgl_register` AS `tgl_register`, `list_perkara`.`tgl_reg_banding` AS `tgl_reg_banding`, `list_perkara`.`no_surat_pengantar` AS `no_surat_pengantar`, `list_perkara`.`pejabat_berwenang` AS `pejabat_berwenang`, `list_perkara`.`nm_pejabat` AS `nm_pejabat`, `list_perkara`.`nip_pejabat` AS `nip_pejabat`, `list_perkara`.`banyaknya` AS `banyaknya`, `list_perkara`.`keterangan` AS `keterangan`, `list_perkara`.`status_perkara` AS `status_perkara`, `list_perkara`.`sp_perkara` AS `sp_perkara`, `list_perkara`.`no_perkara_banding` AS `no_perkara_banding`, `list_perkara`.`putusan_banding` AS `putusan_banding`, `list_perkara`.`is_nomor` AS `is_nomor`, `list_perkara`.`surat_gugatan` AS `surat_gugatan`, `list_perkara`.`sk_bundelA` AS `sk_bundelA`, `list_perkara`.`bukti_pemb_panjar` AS `bukti_pemb_panjar`, `list_perkara`.`majelis_hakim` AS `majelis_hakim`, `list_perkara`.`penunjukan_pp` AS `penunjukan_pp`, `list_perkara`.`penunjukan_js` AS `penunjukan_js`, `list_perkara`.`penetapan_hari_sidang` AS `penetapan_hari_sidang`, `list_perkara`.`relaas_panggilan` AS `relaas_panggilan`, `list_perkara`.`ba_sidang` AS `ba_sidang`, `list_perkara`.`penetapan_sita` AS `penetapan_sita`, `list_perkara`.`ba_sita` AS `ba_sita`, `list_perkara`.`lampiran_surat` AS `lampiran_surat`, `list_perkara`.`surat_bukti_penggugat` AS `surat_bukti_penggugat`, `list_perkara`.`surat_bukti_tergugat` AS `surat_bukti_tergugat`, `list_perkara`.`tanggapan_bukti_tergugat` AS `tanggapan_bukti_tergugat`, `list_perkara`.`tanggapan_bukti_penggugat` AS `tanggapan_bukti_penggugat`, `list_perkara`.`gambar_situasi` AS `gambar_situasi`, `list_perkara`.`surat_lain` AS `surat_lain`, `list_perkara`.`salinan_putusan_pa` AS `salinan_putusan_pa`, `list_perkara`.`salinan_putusan_pa_rtf` AS `salinan_putusan_pa_rtf`, `list_perkara`.`sk_bundelb` AS `sk_bundelb`, `list_perkara`.`akta_banding` AS `akta_banding`, `list_perkara`.`akta_penerimaan_mb` AS `akta_penerimaan_mb`, `list_perkara`.`memori_banding` AS `memori_banding`, `list_perkara`.`memori_banding_rtf` AS `memori_banding_rtf`, `list_perkara`.`akta_pemberitahuan_banding` AS `akta_pemberitahuan_banding`, `list_perkara`.`pemberitahuan_penyerahan_mb` AS `pemberitahuan_penyerahan_mb`, `list_perkara`.`akta_penerimaankontra_mb` AS `akta_penerimaankontra_mb`, `list_perkara`.`kontra_mb` AS `kontra_mb`, `list_perkara`.`kontra_mb_rtf` AS `kontra_mb_rtf`, `list_perkara`.`pemberitahuan_penyerahankontra_mb` AS `pemberitahuan_penyerahankontra_mb`, `list_perkara`.`relaas_periksa_berkas_pb` AS `relaas_periksa_berkas_pb`, `list_perkara`.`sk_khusus` AS `sk_khusus`, `list_perkara`.`bukt_pengiriman_bpb` AS `bukt_pengiriman_bpb`, `list_perkara`.`bukti_setor_bp_kasnegara` AS `bukti_setor_bp_kasnegara`, `list_perkara`.`surat_lainnya_b` AS `surat_lainnya_b`, `users`.`nama` AS `nama` FROM (`list_perkara` join `users` on(`list_perkara`.`id_user` = `users`.`id`)) WHERE `list_perkara`.`no_perkara_banding` <> '' ;

-- --------------------------------------------------------

--
-- Structure for view `v_c_hakim`
--
DROP TABLE IF EXISTS `v_c_hakim`;

CREATE ALGORITHM=UNDEFINED DEFINER=`manado`@`localhost` SQL SECURITY DEFINER VIEW `v_c_hakim`  AS SELECT `catatan_hakim_baru`.`id_catatan` AS `id_catatan`, `catatan_hakim_baru`.`id_perkara` AS `id_perkara`, `catatan_hakim_baru`.`id_user` AS `id_user`, `catatan_hakim_baru`.`nm_berkas` AS `nm_berkas`, `catatan_hakim_baru`.`catatan` AS `catatan`, `catatan_hakim_baru`.`time` AS `time`, `users`.`nama` AS `nama` FROM (`catatan_hakim_baru` join `users` on(`catatan_hakim_baru`.`id_user` = `users`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_perkara_pp`
--
DROP TABLE IF EXISTS `v_perkara_pp`;

CREATE ALGORITHM=UNDEFINED DEFINER=`manado`@`localhost` SQL SECURITY DEFINER VIEW `v_perkara_pp`  AS SELECT `penunjukan_pp`.`id_user_pp` AS `id_user_pp`, `penunjukan_pp`.`file_pp` AS `file_pp`, `users`.`nama` AS `nama`, `list_perkara`.`id_perkara` AS `id_perkara`, `list_perkara`.`id_user` AS `id_user`, `list_perkara`.`no_perkara` AS `no_perkara`, `list_perkara`.`nm_pihak_penggugat` AS `nm_pihak_penggugat`, `list_perkara`.`nm_pihak_tergugat` AS `nm_pihak_tergugat`, `list_perkara`.`jns_perkara` AS `jns_perkara`, `list_perkara`.`tgl_register` AS `tgl_register`, `list_perkara`.`tgl_reg_banding` AS `tgl_reg_banding`, `list_perkara`.`no_surat_pengantar` AS `no_surat_pengantar`, `list_perkara`.`pejabat_berwenang` AS `pejabat_berwenang`, `list_perkara`.`nm_pejabat` AS `nm_pejabat`, `list_perkara`.`nip_pejabat` AS `nip_pejabat`, `list_perkara`.`banyaknya` AS `banyaknya`, `list_perkara`.`keterangan` AS `keterangan`, `list_perkara`.`status_perkara` AS `status_perkara`, `list_perkara`.`sp_perkara` AS `sp_perkara`, `list_perkara`.`no_perkara_banding` AS `no_perkara_banding`, `list_perkara`.`putusan_banding` AS `putusan_banding`, `list_perkara`.`is_nomor` AS `is_nomor`, `list_perkara`.`surat_gugatan` AS `surat_gugatan`, `list_perkara`.`sk_bundelA` AS `sk_bundelA`, `list_perkara`.`bukti_pemb_panjar` AS `bukti_pemb_panjar`, `list_perkara`.`majelis_hakim` AS `majelis_hakim`, `list_perkara`.`penunjukan_pp` AS `penunjukan_pp`, `list_perkara`.`penunjukan_js` AS `penunjukan_js`, `list_perkara`.`penetapan_hari_sidang` AS `penetapan_hari_sidang`, `list_perkara`.`relaas_panggilan` AS `relaas_panggilan`, `list_perkara`.`ba_sidang` AS `ba_sidang`, `list_perkara`.`penetapan_sita` AS `penetapan_sita`, `list_perkara`.`ba_sita` AS `ba_sita`, `list_perkara`.`lampiran_surat` AS `lampiran_surat`, `list_perkara`.`surat_bukti_penggugat` AS `surat_bukti_penggugat`, `list_perkara`.`surat_bukti_tergugat` AS `surat_bukti_tergugat`, `list_perkara`.`tanggapan_bukti_tergugat` AS `tanggapan_bukti_tergugat`, `list_perkara`.`tanggapan_bukti_penggugat` AS `tanggapan_bukti_penggugat`, `list_perkara`.`gambar_situasi` AS `gambar_situasi`, `list_perkara`.`surat_lain` AS `surat_lain`, `list_perkara`.`salinan_putusan_pa` AS `salinan_putusan_pa`, `list_perkara`.`salinan_putusan_pa_rtf` AS `salinan_putusan_pa_rtf`, `list_perkara`.`sk_bundelb` AS `sk_bundelb`, `list_perkara`.`akta_banding` AS `akta_banding`, `list_perkara`.`akta_penerimaan_mb` AS `akta_penerimaan_mb`, `list_perkara`.`memori_banding` AS `memori_banding`, `list_perkara`.`memori_banding_rtf` AS `memori_banding_rtf`, `list_perkara`.`akta_pemberitahuan_banding` AS `akta_pemberitahuan_banding`, `list_perkara`.`pemberitahuan_penyerahan_mb` AS `pemberitahuan_penyerahan_mb`, `list_perkara`.`akta_penerimaankontra_mb` AS `akta_penerimaankontra_mb`, `list_perkara`.`kontra_mb` AS `kontra_mb`, `list_perkara`.`kontra_mb_rtf` AS `kontra_mb_rtf`, `list_perkara`.`pemberitahuan_penyerahankontra_mb` AS `pemberitahuan_penyerahankontra_mb`, `list_perkara`.`relaas_periksa_berkas_pb` AS `relaas_periksa_berkas_pb`, `list_perkara`.`sk_khusus` AS `sk_khusus`, `list_perkara`.`bukt_pengiriman_bpb` AS `bukt_pengiriman_bpb`, `list_perkara`.`bukti_setor_bp_kasnegara` AS `bukti_setor_bp_kasnegara`, `list_perkara`.`surat_lainnya_b` AS `surat_lainnya_b` FROM ((`list_perkara` join `penunjukan_pp` on(`list_perkara`.`id_perkara` = `penunjukan_pp`.`id_perkara`)) join `users` on(`list_perkara`.`id_user` = `users`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_user_hakim`
--
DROP TABLE IF EXISTS `v_user_hakim`;

CREATE ALGORITHM=UNDEFINED DEFINER=`manado`@`localhost` SQL SECURITY DEFINER VIEW `v_user_hakim`  AS SELECT `users`.`id` AS `id`, `users`.`nama` AS `nama`, `users`.`email` AS `email`, `users`.`username` AS `username`, `users`.`password` AS `password`, `users`.`role_id` AS `role_id`, `users`.`kode_pa` AS `kode_pa`, `users`.`is_active` AS `is_active`, `users`.`data_created` AS `data_created`, `majelis_hakim`.`id_mh` AS `id_mh`, `majelis_hakim`.`id_user_mh` AS `id_user_mh`, `majelis_hakim`.`majelis` AS `majelis` FROM (`users` join `majelis_hakim` on(`users`.`id` = `majelis_hakim`.`id_user_mh`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_user_pp`
--
DROP TABLE IF EXISTS `v_user_pp`;

CREATE ALGORITHM=UNDEFINED DEFINER=`manado`@`localhost` SQL SECURITY DEFINER VIEW `v_user_pp`  AS SELECT `users`.`id` AS `id`, `users`.`nama` AS `nama`, `users`.`email` AS `email`, `users`.`username` AS `username`, `users`.`password` AS `password`, `users`.`role_id` AS `role_id`, `users`.`kode_pa` AS `kode_pa`, `users`.`is_active` AS `is_active`, `users`.`data_created` AS `data_created` FROM `users` WHERE `users`.`role_id` = 5 ;

--
-- Indexes for dumped tables
--

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
-- Indexes for table `majelis_hakim`
--
ALTER TABLE `majelis_hakim`
  ADD PRIMARY KEY (`id_mh`),
  ADD KEY `id_user_mh` (`id_user_mh`);

--
-- Indexes for table `penunjukan_pp`
--
ALTER TABLE `penunjukan_pp`
  ADD PRIMARY KEY (`id_pp`),
  ADD KEY `id_perkara` (`id_perkara`),
  ADD KEY `id_user_pp` (`id_user_pp`);

--
-- Indexes for table `pmh`
--
ALTER TABLE `pmh`
  ADD PRIMARY KEY (`id_pmh`),
  ADD KEY `id_perkara` (`id_perkara`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catatan_hakim`
--
ALTER TABLE `catatan_hakim`
  MODIFY `id_catatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `catatan_hakim_baru`
--
ALTER TABLE `catatan_hakim_baru`
  MODIFY `id_catatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `kategori_perkara`
--
ALTER TABLE `kategori_perkara`
  MODIFY `id_kaper` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `list_perkara`
--
ALTER TABLE `list_perkara`
  MODIFY `id_perkara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `log_audittrail`
--
ALTER TABLE `log_audittrail`
  MODIFY `log_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=353;

--
-- AUTO_INCREMENT for table `majelis_hakim`
--
ALTER TABLE `majelis_hakim`
  MODIFY `id_mh` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penunjukan_pp`
--
ALTER TABLE `penunjukan_pp`
  MODIFY `id_pp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pmh`
--
ALTER TABLE `pmh`
  MODIFY `id_pmh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `catatan_hakim`
--
ALTER TABLE `catatan_hakim`
  ADD CONSTRAINT `catatan_hakim_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `catatan_hakim_ibfk_2` FOREIGN KEY (`id_perkara`) REFERENCES `list_perkara` (`id_perkara`);

--
-- Constraints for table `majelis_hakim`
--
ALTER TABLE `majelis_hakim`
  ADD CONSTRAINT `majelis_hakim_ibfk_1` FOREIGN KEY (`id_user_mh`) REFERENCES `users` (`id`);

--
-- Constraints for table `penunjukan_pp`
--
ALTER TABLE `penunjukan_pp`
  ADD CONSTRAINT `penunjukan_pp_ibfk_1` FOREIGN KEY (`id_perkara`) REFERENCES `list_perkara` (`id_perkara`),
  ADD CONSTRAINT `penunjukan_pp_ibfk_2` FOREIGN KEY (`id_user_pp`) REFERENCES `users` (`id`);

--
-- Constraints for table `pmh`
--
ALTER TABLE `pmh`
  ADD CONSTRAINT `pmh_ibfk_1` FOREIGN KEY (`id_perkara`) REFERENCES `list_perkara` (`id_perkara`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
