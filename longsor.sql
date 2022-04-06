-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Apr 2022 pada 19.27
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `longsor_cmeans`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `longsor`
--

CREATE TABLE `longsor` (
  `Id` int(20) UNSIGNED NOT NULL,
  `uuid` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_tahun` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl` date NOT NULL,
  `kb_meninggal` int(10) NOT NULL,
  `kb_hilang` int(10) NOT NULL,
  `kb_luka` int(10) NOT NULL,
  `kb_mengungsi` int(10) NOT NULL,
  `kr_rumah_rb` int(10) NOT NULL,
  `kr_rumah_rr` int(10) NOT NULL,
  `kr_rumah_terendam` int(10) NOT NULL,
  `kantor` int(10) NOT NULL,
  `sekolah` int(10) NOT NULL,
  `t_ibadah` int(10) NOT NULL,
  `sarana_kesehatan` int(10) NOT NULL,
  `bangunan_lain` int(10) NOT NULL,
  `jembatan` int(10) NOT NULL,
  `jalan` int(10) NOT NULL,
  `sawah` int(10) NOT NULL,
  `hutan` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `longsor`
--

INSERT INTO `longsor` (`Id`, `uuid`, `id_tahun`, `alamat`, `kecamatan`, `tgl`, `kb_meninggal`, `kb_hilang`, `kb_luka`, `kb_mengungsi`, `kr_rumah_rb`, `kr_rumah_rr`, `kr_rumah_terendam`, `kantor`, `sekolah`, `t_ibadah`, `sarana_kesehatan`, `bangunan_lain`, `jembatan`, `jalan`, `sawah`, `hutan`, `created_at`, `updated_at`) VALUES
(532, '719dcaf73f334d5f89c5aa9987232901', '452bbfc86d684faf9025a2a2eff6fb8f', ' Transat Km.8 Jl. Mulawarman No. 52 dan 62. RT. 2 Kel. Karang Joang ', 'Balikpapan Utara', '2017-01-04', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, '2022-04-06 09:17:18', '2022-04-06 09:17:18'),
(533, '618e806c893844fcbd9bebc5b3100ca7', '452bbfc86d684faf9025a2a2eff6fb8f', ' Dusun Rapak Rejo RT. 16 dan 17 Kel. Kerta Buana', 'Tenggarong Seberang', '2017-01-03', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 7, 0, '2022-04-06 09:17:18', '2022-04-06 09:17:18'),
(534, '89eefb03f2884de4955e595884581616', '452bbfc86d684faf9025a2a2eff6fb8f', ' Jl. Poros Sanggata-Bengalon', 'Sangatta Utara', '2017-02-03', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:18', '2022-04-06 09:17:18'),
(535, 'b710a2c753f74f179ca4c1a61187a56a', '452bbfc86d684faf9025a2a2eff6fb8f', ' RT.05 dan RT.06 Desa Kelinjau Ilir ', 'Muara Ancalong', '2017-02-15', 0, 0, 0, 136, 29, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:18', '2022-04-06 09:17:18'),
(536, '7d10f2c0f0e84e3db6c2ac23be6c646b', '452bbfc86d684faf9025a2a2eff6fb8f', ' Jl.Poros SangattaRantau Pulung ', 'Sangatta Utara', '2017-02-18', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:18', '2022-04-06 09:17:18'),
(537, '5d60fbb7054347a1ae7582ae901c7eeb', '452bbfc86d684faf9025a2a2eff6fb8f', ' Jl. Kalan RT. 17 Kel. Mugirejo ', 'Sungai Pinang ', '2017-03-30', 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:18', '2022-04-06 09:17:18'),
(538, '5108ad225e154971ad306c0215479445', '452bbfc86d684faf9025a2a2eff6fb8f', ' Jl. Ruhui Rahayu II Gg. Puyuh RT. 3 No. 59 Kel. Sepinggan ', 'Balikpapan Selatan', '2017-03-30', 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:18', '2022-04-06 09:17:18'),
(539, 'a0e51d4adc3f49dab444f77aee1ec99d', '452bbfc86d684faf9025a2a2eff6fb8f', ' Desa Sumber Bahagia Sp V ', 'Kaliorang', '2017-03-08', 0, 0, 0, 11, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:18', '2022-04-06 09:17:18'),
(540, '3b9a891803ea4c158e9a8430aa75181e', '452bbfc86d684faf9025a2a2eff6fb8f', ' Dusun Rimbawan Rt. 08, Kel. Tanah Merah, ', 'Samarinda Utara', '2017-04-05', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:18', '2022-04-06 09:17:18'),
(541, '412018fbc1784b8dac0d63c467ef13ca', '452bbfc86d684faf9025a2a2eff6fb8f', ' Jl. Mayjen Sutoyo RT. 42 No. 15 dan 16 Kel. Klandayan ', 'Balikpapan Kota', '2017-04-10', 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:18', '2022-04-06 09:17:18'),
(542, '0341111991d947f89a6a99aa3581a080', '452bbfc86d684faf9025a2a2eff6fb8f', ' Jl. Wira Tirta Rt. 17 Kel. Sidodadi', 'Samarinda Ulu', '2017-05-13', 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:18', '2022-04-06 09:17:18'),
(543, 'db9eed4ba239406ebc655e0f7c49694c', '452bbfc86d684faf9025a2a2eff6fb8f', ' Jl. Wiraguna Dalam Gg. Rukun Rt. 5 Kel. Sidodadi', 'Samarinda Ulu', '2017-05-28', 0, 0, 0, 0, 1, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:18', '2022-04-06 09:17:18'),
(544, '515eb8d426f9445ea310c48c4398edf5', '452bbfc86d684faf9025a2a2eff6fb8f', ' Jl. Borobudur No. 43 Rt. 36 Kel. Ma. Rapak', 'Balikpapan Utara', '2017-05-17', 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:18', '2022-04-06 09:17:18'),
(545, 'f88da91753a64485bf5025e769ee4a85', '452bbfc86d684faf9025a2a2eff6fb8f', ' Kampung Long Bagun', 'Long Bagun', '2017-05-08', 5, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:18', '2022-04-06 09:17:18'),
(546, '2cd4455c512c49209f0c485803eb57cb', '452bbfc86d684faf9025a2a2eff6fb8f', '  Jl. Bukit Barisan Rt. 23 Kel. Jawa', 'Samarinda Ulu', '2017-06-03', 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:18', '2022-04-06 09:17:18'),
(547, '41549f9c8a744239b4bca207c1773a64', '452bbfc86d684faf9025a2a2eff6fb8f', ' Jl. Kedondong Dalam Rt. 23, Kel. Gn. Kelua', 'Samarinda Ulu', '2017-06-18', 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:18', '2022-04-06 09:17:18'),
(548, '047441988b964abebbc9c171b3ca2b20', '452bbfc86d684faf9025a2a2eff6fb8f', ' Jl. Suwandi V No. 80 Rt. 24 Kel. Gn. Kelua', 'Samarinda Ulu', '2017-06-19', 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:18', '2022-04-06 09:17:18'),
(549, '956b692821584932bbb134cff4205bcf', '452bbfc86d684faf9025a2a2eff6fb8f', ' Jl. Markisa Rt. 08 No. 46 Kel. Gn. Kelua', 'Samarinda Ulu', '2017-06-19', 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:18', '2022-04-06 09:17:18'),
(550, '9902ed6f6e884cbca6f8174198c0d61a', '452bbfc86d684faf9025a2a2eff6fb8f', ' Jl. M. Said Gg. 6 Blok 5 No. 63 Kel. Loa Bahu', 'Sungai Kunjang', '2017-06-21', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:18', '2022-04-06 09:17:18'),
(551, 'c7c2ee41f34f4ee69e04a85914802d58', '452bbfc86d684faf9025a2a2eff6fb8f', ' Perum Graha Indah Blok R, Kel. Air Putih', 'Samarinda Ulu', '2017-06-21', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:18', '2022-04-06 09:17:18'),
(552, '17927aa9230c4259b628ad55282979b2', '452bbfc86d684faf9025a2a2eff6fb8f', ' Perum Kelapa Gading No. 12 Rt. 37 Kel. Terong Ulu', 'Sungai Kunjang', '2017-06-21', 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:18', '2022-04-06 09:17:18'),
(553, '90530458462341b5b4a7bc7692ca7ce6', '452bbfc86d684faf9025a2a2eff6fb8f', ' Jl. Padat Karya Km. 2 Rt. 1 & Rt. 2, Kel. Ma. Rapak', 'Balikpapan Utara', '2017-07-02', 0, 0, 0, 0, 0, 14, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:18', '2022-04-06 09:17:18'),
(554, '46fd74ef4433495ebe074c1c2d4e3893', '452bbfc86d684faf9025a2a2eff6fb8f', '  Jl. Wanasari Rt. 25 No. 28, Kel. Gn. Sari Ilir', 'Balikpapan Tengah', '2017-07-16', 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:18', '2022-04-06 09:17:18'),
(555, 'd6a2e50ef0c941359ea1a29acfb7b33e', '452bbfc86d684faf9025a2a2eff6fb8f', ' Jl. RE Martadinata Rt. 22, Kel. Mekar Sari', 'Balikpapan Tengah', '2017-07-17', 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, '2022-04-06 09:17:18', '2022-04-06 09:17:18'),
(556, '3ba72da7624a498dac48992b68a4da61', '452bbfc86d684faf9025a2a2eff6fb8f', ' Km. 38 Kelay (Jalur Prov. Jalan Berau  Sangatta)', 'Kelay', '2017-07-10', 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:18', '2022-04-06 09:17:18'),
(557, 'd3fc62496a4d4c7d9cfe5bb3f3a5fe43', '452bbfc86d684faf9025a2a2eff6fb8f', ' Jl. Batu Indah Rt. 41, Kel. Sempaja Utara', 'Samarinda Utara', '2017-08-13', 0, 0, 0, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:18', '2022-04-06 09:17:18'),
(558, '3de3822029fc40d382dae4280bb92fd1', '452bbfc86d684faf9025a2a2eff6fb8f', ' Jl. A. Wahab. Syahrani Gg. Wangi Rt. 14, Kel. Gn. Kelua', 'Samarinda Ulu', '2017-08-16', 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:18', '2022-04-06 09:17:18'),
(559, 'e1f60f65c756444fa2489b7aad62c24a', '452bbfc86d684faf9025a2a2eff6fb8f', ' Jl. Nur Eka Rt. 07 No.112 Kel. Sepinggan baru ', 'Balikpapan Selatan', '2017-09-03', 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:18', '2022-04-06 09:17:18'),
(560, '7c2c2b424fb44be79b4ad8e7612f983c', '452bbfc86d684faf9025a2a2eff6fb8f', ' Kel. Ma. Kembang', 'Muara Jawa', '2017-11-08', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:18', '2022-04-06 09:17:18'),
(561, '87335dad9037469d8657af62375d4c42', '452bbfc86d684faf9025a2a2eff6fb8f', ' Desa Tepian Batang Km 05   ', 'Tanah Grogot', '2017-11-27', 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:18', '2022-04-06 09:17:18'),
(562, 'b9dd3daf3d1c415d9cdcbbed5b6c62ad', '452bbfc86d684faf9025a2a2eff6fb8f', ' Rt. 08 Kelurahan Lawelawe', 'Penajam', '2017-11-29', 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:18', '2022-04-06 09:17:18'),
(563, '7c70b67529c8420685234614f2d1c6fc', '452bbfc86d684faf9025a2a2eff6fb8f', ' Jl. Sultan Hasanuddin Rt. 1, Kel. Kariangau', 'Balikpapan Barat', '2017-12-13', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:18', '2022-04-06 09:17:18'),
(564, 'e3154d3eb0af4ec3998896469e4ea889', '452bbfc86d684faf9025a2a2eff6fb8f', ' Jl. Pelayaran Rt. 14, Kel. Prapatan', 'Balikpapan Kota', '2017-12-19', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:18', '2022-04-06 09:17:18'),
(565, '46c5a6f0744846268a28c4e530c0bc56', '452bbfc86d684faf9025a2a2eff6fb8f', ' Jl. Mahoni Rt. 08, Kel. Maridan (SMP ITCI)', 'Sepaku', '2017-12-05', 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:18', '2022-04-06 09:17:18'),
(566, '8b4623fc89034b14af3d8b88998a1b0c', '452bbfc86d684faf9025a2a2eff6fb8f', ' Jl. Kampung Pilanjau Mantaritip', 'Sambaliung', '2017-12-07', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:18', '2022-04-06 09:17:18'),
(567, '1be97febeabb4a8cad3ad3042318b0ba', '3daa758eb3ff4f70b19700546486f2de', ' Rt.19, Rt.02, Rt.18 dan Rt.06 Kel. Gunung Sari Ilir ', 'Balikpapan Tengah', '2015-01-21', 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:46', '2022-04-06 09:17:46'),
(568, '1e17f2bc22fc4b8dbdc4164e9e27b5ca', '3daa758eb3ff4f70b19700546486f2de', ' Jl. Gn. Polisi Rt.57 dan Rt.62 Kel. Baru Ilir ', 'Balikpapan Barat', '2015-01-22', 0, 0, 0, 12, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:46', '2022-04-06 09:17:46'),
(569, '5cb499090fa8482aa78e54c64efd1c3c', '3daa758eb3ff4f70b19700546486f2de', ' Jl. Lumba-Lumba Rt.1 Kel. Selili ', 'Samarinda Ilir', '2015-02-07', 0, 0, 0, 5, 3, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:46', '2022-04-06 09:17:46'),
(570, '4c4ac89021544bbe8cdf128af6fd0237', '3daa758eb3ff4f70b19700546486f2de', ' Jl. Jend. Sudirman Stal Kuda Perum Pajak Rt.26 No.32 & 33 Kel. Damai Bahagia', 'Balikpapan Selatan', '2015-02-02', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:46', '2022-04-06 09:17:46'),
(571, 'caf160068a95460683c3e513146c3b42', '3daa758eb3ff4f70b19700546486f2de', ' Jl. Letjend S. Parman Rt.23 Kel. Gunung Sari Ulu ', 'Balikpapan Tengah', '2015-02-03', 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:46', '2022-04-06 09:17:46'),
(572, 'dac32848a47d444885010edece21e520', '3daa758eb3ff4f70b19700546486f2de', ' Jl. Bunga Rampai Rt.37 No.08 Kel. Gn. Sari Ilir ', 'Balikpapan Tengah', '2015-02-04', 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:46', '2022-04-06 09:17:46'),
(573, 'd59850fd799b4e04b5fa63bcede70bb1', '3daa758eb3ff4f70b19700546486f2de', ' Jl. Prapatan Dalam Rt.30 No.44 & 45 Kel. Prapatan ', 'Balikpapan Kota', '2015-02-05', 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:46', '2022-04-06 09:17:46'),
(574, '1045d40a86894c4993b1bbdb174a3caa', '3daa758eb3ff4f70b19700546486f2de', ' Jl. Jend. A.Yani Rt.19 No.75 kel. Karang Jati ', 'Balikpapan Tengah', '2015-02-05', 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:46', '2022-04-06 09:17:46'),
(575, '649bac3737844df7acd8d05e94c6dcac', '3daa758eb3ff4f70b19700546486f2de', ' Jl. Soekarno Hatta Km.4,5 Perum Graha Indah Kel. Kariangau', 'Balikpapan Utara', '2015-02-05', 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:46', '2022-04-06 09:17:46'),
(576, '464942f3218b4ae2ae507cff4db0fa02', '3daa758eb3ff4f70b19700546486f2de', ' Jl. Karang Jawa No.20 Rt.10 Kel. Karang Jati', 'Balikpapan Tengah', '2015-02-09', 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:46', '2022-04-06 09:17:46'),
(577, 'ff332105adab47768d8e966a38a525d5', '3daa758eb3ff4f70b19700546486f2de', ' Jl. Mayjen Sutoyo Sahabat Rt.49 Kel. Gn. Sari Ilir', 'Balikpapan Tengah', '2015-02-09', 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:46', '2022-04-06 09:17:46'),
(578, '8a288425db784c82bbc3542a136e0063', '3daa758eb3ff4f70b19700546486f2de', ' Jl. Bunto Bulaeng Kel. Karang Rejo', 'Balikpapan Utara', '2015-02-09', 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:46', '2022-04-06 09:17:46'),
(579, 'e17cee95d4534daf88fe1687e8676242', '3daa758eb3ff4f70b19700546486f2de', ' Jl. Abadi No.13 Rt.10 Kel. Gn. Sari Ilir', 'Balikpapan Tengah', '2015-02-09', 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:46', '2022-04-06 09:17:46'),
(580, '64e689cd66ce453b8f20d772dc4c1e3d', '3daa758eb3ff4f70b19700546486f2de', ' Jl. Abadi No.55 Rt.11 Kel. Gn. Sari Ilir', 'Balikpapan Tengah', '2015-02-09', 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:46', '2022-04-06 09:17:46'),
(581, '94cb7cf3955f4dbcab79931f4636b457', '3daa758eb3ff4f70b19700546486f2de', ' Jl. RE. Martadinata Gg. Merdeka No.111 Rt.18 Kel. Mekar Sari', 'Balikpapan Tengah', '2015-02-09', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:46', '2022-04-06 09:17:46'),
(582, 'a45de6c640fd40b6bdab5b6774dc8d1f', '3daa758eb3ff4f70b19700546486f2de', ' Rt.02,19,37,41 dan 46 Kel. Telaga Sari', 'Balikpapan Kota', '2015-02-09', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:46', '2022-04-06 09:17:46'),
(583, 'c23d21ea0cba44798bea8e6dd6ab2c0c', '3daa758eb3ff4f70b19700546486f2de', ' Jl. DI. Panjaitan Rt.49 Kel. Sumber Rejo', 'Balikpapan Tengah', '2015-02-10', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:46', '2022-04-06 09:17:46'),
(584, '83d2b5c79bf040308340cba6d799bd42', '3daa758eb3ff4f70b19700546486f2de', ' Jl. Indrakila Gg. Wonorejo 4 Rt.35 No.117 Kel. Gunung Samarinda', 'Balikpapan Utara', '2015-02-13', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:46', '2022-04-06 09:17:46'),
(585, 'd269ab23ec2c42978e9db7e26df858e3', '3daa758eb3ff4f70b19700546486f2de', ' Jl. Mayjen Sutoyo Belakang Gajah Mada Kel. Gunung Sari Ulu', 'Balikpapan Tengah', '2015-02-13', 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:46', '2022-04-06 09:17:46'),
(586, '8cc617e71e8e40e487cd0e98ab3b42c2', '3daa758eb3ff4f70b19700546486f2de', ' TPA Manggar Kel. Manggar Baru', 'Balikpapan Timur', '2015-02-13', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:46', '2022-04-06 09:17:46'),
(587, '7c71b6c308c242dfb3581d99ad6a04a4', '3daa758eb3ff4f70b19700546486f2de', ' Rt.16 dan Rt.07 Kel. Mekar Sari', 'Balikpapan Tengah', '2015-02-13', 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:46', '2022-04-06 09:17:46'),
(588, '21bc4ee602c74977b77df9ed8bcc594d', '3daa758eb3ff4f70b19700546486f2de', ' Rt.36 Kel. Gunung Samarinda', 'Balikpapan Utara', '2015-02-23', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:46', '2022-04-06 09:17:46'),
(589, '57fb6af9b9c546d48478ad8d12a9e1a1', '3daa758eb3ff4f70b19700546486f2de', ' Jl. Negara Km.19 Desa Seiriye', 'Kuaro', '2015-02-09', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:46', '2022-04-06 09:17:46'),
(590, '9ec8196363b644b29735bf7701ed5dda', '3daa758eb3ff4f70b19700546486f2de', ' Jl. Ahmad Rifaldin Bukit Batu', 'Loa Janan Ilir', '2015-03-05', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:46', '2022-04-06 09:17:46'),
(591, '10b01c6d168c434ba7349d1ad9fffdc0', '3daa758eb3ff4f70b19700546486f2de', ' Jl. Dahor Rt. 54, 61 dan Rt.62 Kel. Baru Ilir', 'Balikpapan Barat', '2015-03-12', 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:46', '2022-04-06 09:17:46'),
(592, 'a427c60a0cae4d4f864b6001c845e1bb', '3daa758eb3ff4f70b19700546486f2de', ' Kel. Margomulyo Siring No.38,39,41 Rt.50', 'Balikpapan Barat', '2015-03-13', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:46', '2022-04-06 09:17:46'),
(593, 'a72a613591924ca1b78b93e4650bddd4', '3daa758eb3ff4f70b19700546486f2de', ' Rt. 25 No.40 Kel. Margomulyo', 'Balikpapan Barat', '2015-03-13', 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:46', '2022-04-06 09:17:46'),
(594, 'db2fa9aa471a4d358e0c719ac17b3d96', '3daa758eb3ff4f70b19700546486f2de', ' Jl. Gunung Polisi Rt. 66 No.21 Muara Rapak', 'Balikpapan Utara', '2015-03-13', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:46', '2022-04-06 09:17:46'),
(595, 'f0b3b0d197084594b0d4296ef103f307', '3daa758eb3ff4f70b19700546486f2de', ' Jl. Inpres IV Rt.16', 'Balikpapan Utara', '2015-03-21', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:46', '2022-04-06 09:17:46'),
(596, '9434e2cd1d6842d5868c496070979e03', '3daa758eb3ff4f70b19700546486f2de', ' Jl. Poros Kampung Pesayan', 'Sambaliung', '2015-03-03', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, '2022-04-06 09:17:46', '2022-04-06 09:17:46'),
(597, 'bf116780494f480281d920d99c48c156', '3daa758eb3ff4f70b19700546486f2de', ' Kawasan Purwodadi Gg.05 Rt.10 Kel. Lempake', 'Samarinda Utara', '2015-04-26', 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:46', '2022-04-06 09:17:46'),
(598, '17534e8f4e624a66ab0cba2533727345', '3daa758eb3ff4f70b19700546486f2de', ' Jl. Suwandi Kel. Gunung Kelua', 'Samarinda Ulu', '2015-04-26', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:46', '2022-04-06 09:17:46'),
(599, '77284f75ec84482ca5e8d1693b38c677', '3daa758eb3ff4f70b19700546486f2de', ' Jl. Kadrie Oening Perum. PWI Rt.10 No.09 Kel. Air Hitam', 'Samarinda Ulu', '2015-04-30', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:46', '2022-04-06 09:17:46'),
(600, '0781a2327b284081bc542732e35d907c', '3daa758eb3ff4f70b19700546486f2de', ' Jl. Bunga Rampai Rt.37 No.12 Kel. Gn. Sari Ilir', 'Balikpapan Tengah', '2015-04-08', 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:46', '2022-04-06 09:17:46'),
(601, 'b1ddf3ceefc94713ba96acc832503e9a', '3daa758eb3ff4f70b19700546486f2de', ' Desa Jembayan Tengah', 'Loa Kulu', '2015-04-09', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:46', '2022-04-06 09:17:46'),
(602, '1971de3c55ee41f3bfa447ca26cb1c45', '3daa758eb3ff4f70b19700546486f2de', ' Rt.07 Kel. Graha Indah', 'Balikpapan Utara', '2015-06-11', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:46', '2022-04-06 09:17:46'),
(603, '0fcb982c95df492b83cd0d0431900073', '3daa758eb3ff4f70b19700546486f2de', ' Jl. Imus Payau Rt.36 No.40 dan No.41 Kel. Muara Rapak', 'Balikpapan Utara', '2015-06-12', 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:46', '2022-04-06 09:17:46'),
(604, '96f011b0909d418c89ce0f6c07117900', '3daa758eb3ff4f70b19700546486f2de', ' Rt.07 Kel. Graha Indah', 'Balikpapan Utara', '2015-06-16', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:46', '2022-04-06 09:17:46'),
(605, '8b13a1c202a14d9e822811ac809631ce', '3daa758eb3ff4f70b19700546486f2de', ' Jl. Prapatan Dalam Rt.32 No.24 Kel. Prapatan', 'Balikpapan Kota', '2015-06-16', 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:46', '2022-04-06 09:17:46'),
(606, 'dc2985ea15bd45439d11ba5e73514646', '3daa758eb3ff4f70b19700546486f2de', ' Jl. Bunga Rampai Rt.37 Balikpapan Tengah Kel. Gn. Sari Ilir', 'Balikpapan Tengah', '2015-06-17', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:46', '2022-04-06 09:17:46'),
(607, 'eafcbf90dcfa4773b3e33c1f6ee75969', '3daa758eb3ff4f70b19700546486f2de', ' Jl. Soekarno Hatta Km.7 Rt.37 Kel. Graha Indah', 'Balikpapan Utara', '2015-06-17', 0, 0, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:46', '2022-04-06 09:17:46'),
(608, '1e50229e57b1404cb30529dd79910db8', '3daa758eb3ff4f70b19700546486f2de', ' Jl. Letjend Suprapto Rt.51 Kel. Baru Ulu', 'Balikpapan Barat', '2015-06-19', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:46', '2022-04-06 09:17:46'),
(609, 'e94762f6f90b4afe86432d4d2d928219', '3daa758eb3ff4f70b19700546486f2de', ' Perum Bukit Taman Sari Rt.27 No.16', 'Balikpapan Utara', '2015-06-19', 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:46', '2022-04-06 09:17:46'),
(610, '80e5c37a8696430bb7b29171184760ae', '3daa758eb3ff4f70b19700546486f2de', ' Jl. Penggalang Rt.28 Gg.05 Kel. Damai', 'Balikpapan Kota', '2015-06-20', 0, 0, 0, 8, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:46', '2022-04-06 09:17:46'),
(611, '38171c89aab640a185a15d5153923b97', '3daa758eb3ff4f70b19700546486f2de', ' Rt.30 No.38 Kel. Prapatan', 'Balikpapan Kota', '2015-06-20', 0, 0, 0, 0, 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:46', '2022-04-06 09:17:46'),
(612, '7f9ce64ec65341568002c328123de128', '3daa758eb3ff4f70b19700546486f2de', ' Perumahan Regency Rt.5 Masjid Al Mujahidin Kel. Sepinggan Raya', 'Balikpapan Selatan', '2015-06-25', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:46', '2022-04-06 09:17:46'),
(613, '68528a946c774eba948c2566a487c1e9', '3daa758eb3ff4f70b19700546486f2de', ' Jl. Serobong Rt.22 Kel. Prapatan', 'Balikpapan Kota', '2015-07-30', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:46', '2022-04-06 09:17:46'),
(614, '3c32aea8b0c14b45a1c42b145e463762', '3daa758eb3ff4f70b19700546486f2de', ' Jl. Gerbang Dayaku Rt.13 Rw.04 Desa Bakungan', 'Loa Janan', '2015-07-15', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:46', '2022-04-06 09:17:46'),
(615, '082ff18044ea4939b981bf51c83d58d0', '3daa758eb3ff4f70b19700546486f2de', ' Desa Kayu Muara Muntai, Muara Muntai Ulu, Muara Muntai Ilir, Rebak Rinding, Pulau Harapan Indah, Batuq', 'Muara Muntai', '2015-07-19', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:46', '2022-04-06 09:17:46'),
(616, '690107e421304043bc7d339d61da81e3', '3daa758eb3ff4f70b19700546486f2de', ' Sebulu Ilir dan Sebulu Ulu Perbatasan Wilayah Rt.01 dan Rt.03', 'Sebulu', '2015-07-30', 0, 0, 0, 20, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:46', '2022-04-06 09:17:46'),
(617, '5316df56a9194fad9180ecd171e4aea4', '3daa758eb3ff4f70b19700546486f2de', ' Kel. Wonotirto', 'Samboja', '2015-08-21', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:46', '2022-04-06 09:17:46'),
(618, '3ef04ee2160b43fa9543f5177e269980', '3daa758eb3ff4f70b19700546486f2de', ' Jl. WR. Supratman Rt.07 Kel. Bugis', 'Samarinda Kota', '2015-12-13', 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:46', '2022-04-06 09:17:46'),
(619, '05426973d2114deb83b95f393bb11649', '3daa758eb3ff4f70b19700546486f2de', ' Jl. Sambu (depan pintu 3 Jl. Minyak) RT. 02 No. 53 Kel. Prapatan', 'Balikpapan Kota', '2015-12-12', 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:17:46', '2022-04-06 09:17:46'),
(620, '27b94fbf714544728b171ef9428a1fef', '7a13554f4cd24bae9cbfcf53e5c4fe8b', ' Jl. M. Said Gg. Karet RT 27 Kel. Lok Bahu', 'Sungai Kunjang', '2019-01-26', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:09', '2022-04-06 09:18:09'),
(621, 'afc62f8c86174ed088e71f77aef54707', '7a13554f4cd24bae9cbfcf53e5c4fe8b', ' Jl. Abadi RT 10 Kel. Gunung Sari', 'Balikpapan Tengah', '2019-01-09', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:09', '2022-04-06 09:18:09'),
(622, 'c3d835efba6649ceac2046159147d7d2', '7a13554f4cd24bae9cbfcf53e5c4fe8b', ' Jn Prapatan RT 29 No. 37 Kel. Prapatan', 'Balikpapan Kota', '2019-01-22', 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:09', '2022-04-06 09:18:09'),
(623, '9c26c17fe745494cace7379dd39ae693', '7a13554f4cd24bae9cbfcf53e5c4fe8b', ' Jl. Trikora Kel. Mangkupalas', 'Samarinda Seberang', '2019-03-31', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:09', '2022-04-06 09:18:09'),
(624, '1d175e21bfe34424abbb5a8dad5e56bc', '7a13554f4cd24bae9cbfcf53e5c4fe8b', ' Jl. Negara KM 42  RT 10 Kel. Bukit Raya', 'Sepaku', '2019-05-11', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:09', '2022-04-06 09:18:09'),
(625, '07bbb25485984a20b7eb218c5452d4c2', '7a13554f4cd24bae9cbfcf53e5c4fe8b', ' SDN 032 Sotek ', 'Penajam', '2019-05-25', 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:09', '2022-04-06 09:18:09'),
(626, 'f70412bd6e274f81896bcad73e9d5b40', '7a13554f4cd24bae9cbfcf53e5c4fe8b', ' Jl. LumbaLumba RT 15 Kel. Selili', 'Samarinda Ilir', '2019-06-01', 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:09', '2022-04-06 09:18:09'),
(627, '01e6c61f750f4472b7020a964d2d6fc8', '7a13554f4cd24bae9cbfcf53e5c4fe8b', ' Jl. Kelengkeng RT 32 Kel. Gunung Kelua', 'Samarinda Ulu', '2019-06-04', 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:09', '2022-04-06 09:18:09'),
(628, '0eeb7e4b38e34dbb94bb2b6fc11789ca', '7a13554f4cd24bae9cbfcf53e5c4fe8b', ' Jl Cendana GG 11 Kel. Karang anyar ', 'Sungai Kunjang', '2019-06-07', 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:09', '2022-04-06 09:18:09'),
(629, '7351b4aca9bf4841835e809dd19bde06', '7a13554f4cd24bae9cbfcf53e5c4fe8b', ' Jl. Lempake Jaya RT 16 Lempake', 'Samarinda Utara', '2019-06-19', 0, 0, 0, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:09', '2022-04-06 09:18:09'),
(630, '445897b94b7149749410c819de062b11', '7a13554f4cd24bae9cbfcf53e5c4fe8b', ' JL. Robert Wolter Mongisidi Kel. Dadi Mulya', 'Samarinda Ulu', '2019-06-30', 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:09', '2022-04-06 09:18:09'),
(631, '947da35cacaf4008a00d23ce3ae13460', '7a13554f4cd24bae9cbfcf53e5c4fe8b', ' RT 15 Kelurahan Sumber Rejo', 'Balikpapan Selatan', '2019-06-17', 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:09', '2022-04-06 09:18:09'),
(632, 'fb4ad7b7ecca46488ffd189370db876c', '7a13554f4cd24bae9cbfcf53e5c4fe8b', ' Jl. Kencana RT 03 Desa Perjiwa', 'Tenggarong Seberang', '2019-06-09', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:09', '2022-04-06 09:18:09'),
(633, '355f01fb451d4532ad69bd4669447bfc', '7a13554f4cd24bae9cbfcf53e5c4fe8b', ' Jl. Jl. Gunung Sentul RT 42 KEL. Melayu', 'Tenggarong Seberang', '2019-06-09', 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:09', '2022-04-06 09:18:09'),
(634, 'f02195d1194f487884d98ea7123bbaad', '7a13554f4cd24bae9cbfcf53e5c4fe8b', ' Pemakaman Cina Kel Panji', 'Tenggarong', '2019-06-09', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:09', '2022-04-06 09:18:09'),
(635, '16044f01cc4245568bdd1260466e88c4', '7a13554f4cd24bae9cbfcf53e5c4fe8b', ' RT 006 Desa Pait', 'Long Ikis', '2019-06-20', 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:09', '2022-04-06 09:18:09'),
(636, '6e5b0685e00d40c6ab3320a6ad0db76c', '7a13554f4cd24bae9cbfcf53e5c4fe8b', ' Area Tambang PT Multindo Tritama Abadi Rombong 17 Rt 15 Kel. Makroman', 'Sambutan', '2019-07-01', 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:09', '2022-04-06 09:18:09'),
(637, '2fa58f99bb534d148063f9f6b73c4624', '7a13554f4cd24bae9cbfcf53e5c4fe8b', ' Jl. Karang Jawa RT 06 No. 90 Kel. Karang Jati', 'Balikpapan Tengah', '2019-07-14', 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:09', '2022-04-06 09:18:09'),
(638, '615c2c08d75a44e2b90082c16e417d93', '7a13554f4cd24bae9cbfcf53e5c4fe8b', ' Tepi Sungai kedang Pahu Rt 02 Kel. Muara Baroh', 'Muara Pahu', '2019-07-22', 0, 0, 0, 0, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:09', '2022-04-06 09:18:09'),
(639, 'bff67efb7897441d9fd5c226eb6e0f60', '7a13554f4cd24bae9cbfcf53e5c4fe8b', ' Jln. Belanak No. 57 RT 23 Tanjung Laut Indah', 'Bontang Selatan', '2019-07-21', 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:09', '2022-04-06 09:18:09'),
(640, '5cb566068a7b4589882cf5235d9fdfaa', '7a13554f4cd24bae9cbfcf53e5c4fe8b', 'Jl. Yos Sudarso, Kampung Margasari RT 4 Jembayan', 'Loa Kulu', '2019-08-21', 0, 0, 0, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:09', '2022-04-06 09:18:09'),
(641, '8944ffb0fb5b47e99a974178438a61cb', '7a13554f4cd24bae9cbfcf53e5c4fe8b', 'Jl. Gerbang Dayaku Jembayan', 'Loa Kulu', '2019-09-29', 0, 0, 0, 0, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:09', '2022-04-06 09:18:09'),
(642, 'db7e41ac3bf94be696a3e7827a785302', '7a13554f4cd24bae9cbfcf53e5c4fe8b', 'Jl. Bukit Barisan RT 34 ', 'Samarinda Ulu', '2019-10-20', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:09', '2022-04-06 09:18:09'),
(643, 'c566ff31322c40b2b38f857df280462d', '7a13554f4cd24bae9cbfcf53e5c4fe8b', 'Batu Besaung RT 28 ', 'Samarinda Utara', '2019-11-18', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:09', '2022-04-06 09:18:09'),
(644, '37619666e4b540f390e9e121c515f845', '7a13554f4cd24bae9cbfcf53e5c4fe8b', 'Jl. Gerilya GG Keluarga RT 102 No. 66 B', 'Sungai Pinang', '2019-12-12', 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:09', '2022-04-06 09:18:09'),
(645, '315195fbe50d4a52b9157a02f4f38fff', '694d296cc6944d16b41c5fa2e0704744', ' Jl. Permasit Batu Besaung Rt. 28 Kel. Sempaja Utara', 'Samarinda Utara', '2018-01-06', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:28', '2022-04-06 09:18:28'),
(646, 'ed751fa0a1fd4a669252607dd21890b3', '694d296cc6944d16b41c5fa2e0704744', ' Jl. Prapatan Dalam Rt. 03, No. 37 Kel. Telaga Sari ', 'Balikpapan Kota', '2018-02-20', 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:28', '2022-04-06 09:18:28'),
(647, '75411e42964e4c0d8fcaa62551a18f76', '694d296cc6944d16b41c5fa2e0704744', ' Jl. Taruna Sari I Rt. 60, Kel. Gn. Sari', 'Balikpapan Tengah', '2018-02-20', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:28', '2022-04-06 09:18:28'),
(648, '1a180d6152ab4edcb5db85600053f653', '694d296cc6944d16b41c5fa2e0704744', ' Jl. S. Parman Gg. Merdeka Rt. 22 Rw. 07 No. 28 Kel. Gn. Sari Ulu', 'Balikpapan Tengah', '2018-02-21', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:28', '2022-04-06 09:18:28'),
(649, '87a23cda900146828c110df646a7c84d', '694d296cc6944d16b41c5fa2e0704744', ' Jl. Penggalang Perumahan Pelangi Rt. 33, Kel. Damai', 'Balikpapan Kota', '2018-02-27', 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:28', '2022-04-06 09:18:28'),
(650, '9144ba443d0b4e81878add16a23c1121', '694d296cc6944d16b41c5fa2e0704744', '  Gn Rejo RT. 15 Kelurahan Gunung Sari Ulu\n', 'Balikpapan Tengah', '2018-02-27', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:28', '2022-04-06 09:18:28'),
(651, '87e81e19c5f94bb7b5b93dbc2b0f690c', '694d296cc6944d16b41c5fa2e0704744', ' Rt. 01 Dusun 1, Desa Bukit Raya   ', 'Sepaku', '2018-02-08', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:28', '2022-04-06 09:18:28'),
(652, '5d28d35699694c9eb53eeec4ca3abb15', '694d296cc6944d16b41c5fa2e0704744', ' Jl. Mariko Kel. Riko', 'Penajam', '2018-02-27', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:28', '2022-04-06 09:18:28'),
(653, '5578d8a7a2814b88b826d64c0afdc5de', '694d296cc6944d16b41c5fa2e0704744', ' Kel. Loa Buah RT. 10 dan RT. 11', 'Sungai Kunjang', '2018-03-21', 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:28', '2022-04-06 09:18:28'),
(654, '34d8926916e44380ab31799a5aaabf6f', '694d296cc6944d16b41c5fa2e0704744', ' Jln. Karang Jawa, Gang Inpres RT: 10, No: 25 Kelurahan Karang Jari', 'Balikpapan Utara', '2018-03-19', 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:28', '2022-04-06 09:18:28'),
(655, '4ed1579f74a34e0a9acf0b0b48d656c0', '694d296cc6944d16b41c5fa2e0704744', ' Jln. Karang Anyar, RT. 62, No.53 Kelurahan Baru Ilir', 'Balikpapan Barat', '2018-03-21', 0, 0, 0, 0, 1, 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:28', '2022-04-06 09:18:28'),
(656, '5411404fb4b94047802f82b6e9b97897', '694d296cc6944d16b41c5fa2e0704744', ' Gg. Patriot RT. 12, Kel. Margo Mulyo', 'Balikpapan Barat', '2018-03-22', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, '2022-04-06 09:18:28', '2022-04-06 09:18:28'),
(657, 'c37643d64ff541cdbe690096d251f97b', '694d296cc6944d16b41c5fa2e0704744', ' S. Parman Gg. Bersama RT. 29 Kel. Gunung Sari Ulu', 'Balikpapan Tengah', '2018-03-26', 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:28', '2022-04-06 09:18:28'),
(658, 'e46495574b744eff87cc741330766356', '694d296cc6944d16b41c5fa2e0704744', ' Jl. Gunung Empat, RT. 25  Gg. Sendang No. 35, Kel. Margo Mulyo', 'Balikpapan Barat', '2018-03-27', 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:28', '2022-04-06 09:18:28'),
(659, 'faf2c96b69de471f8d7c7e84728f27f7', '694d296cc6944d16b41c5fa2e0704744', ' Desa Karya Jaya', 'Samboja', '2018-03-21', 0, 0, 0, 12, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:28', '2022-04-06 09:18:28'),
(660, '8075ed1d5e7e41ca8289b5a85863365f', '694d296cc6944d16b41c5fa2e0704744', ' Jl. Safir RT. 48 Kel. Brebes Tengah', 'Bontang Selatan', '2018-03-29', 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:28', '2022-04-06 09:18:28'),
(661, '16078d83453a48e78e6b7aaa7a4d641d', '694d296cc6944d16b41c5fa2e0704744', ' Kaw. Kel. Sepaku, Kab. Penajam Paser Utara (belakang kantor kelurahan Sepaku) ', 'Sepaku', '2018-03-18', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:28', '2022-04-06 09:18:28'),
(662, '5e952451db1a4adbb93e952540192522', '694d296cc6944d16b41c5fa2e0704744', ' Jl. Wahab Syahrani Rt.19, No:66 (kilometer 3), Kelurahan Batu Ampar,\n', 'Balikpapan Utara', '2018-04-22', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:28', '2022-04-06 09:18:28'),
(663, '1c40713aafa849ebba58d296b39b804d', '694d296cc6944d16b41c5fa2e0704744', ' Desa Telemow, Rt. 01 & Rt. 02', 'Sepaku', '2018-04-11', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:28', '2022-04-06 09:18:28'),
(664, '788ed63370314327ad5c3a99e492943c', '694d296cc6944d16b41c5fa2e0704744', ' Rt. 17, Rt. 24 Kel. Sungai Dama ', 'Samarinda Ilir', '2018-05-12', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, '2022-04-06 09:18:28', '2022-04-06 09:18:28'),
(665, '5ecd3900df654900b925aabd1c8c4938', '694d296cc6944d16b41c5fa2e0704744', ' Jl. Rumbia Gg. 02 Rt. 30 Kel. Sidomulyo', 'Samarinda Ilir', '2018-05-21', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:28', '2022-04-06 09:18:28'),
(666, 'ff9e839e41f845a787828a65f631984b', '694d296cc6944d16b41c5fa2e0704744', ' Jl. Jelawat Gg. 09, Kel. Sidomulyo', 'Samarinda Ilir', '2018-05-21', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:28', '2022-04-06 09:18:28'),
(667, 'cff0c3e68cdc4325899001adf8eeb509', '694d296cc6944d16b41c5fa2e0704744', ' Jl. KS. Tubun Dalam Rt. 14 Kel. Sidodadi', 'Samarinda Ulu', '2018-05-21', 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:28', '2022-04-06 09:18:28'),
(668, 'af408f83a97a458e9d2d3cfec7cb4c65', '694d296cc6944d16b41c5fa2e0704744', ' Jl. Lumba  Lumba Rt. 01, Kel. Selili', 'Samarinda Ilir', '2018-05-21', 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:28', '2022-04-06 09:18:28'),
(669, 'fb723d385738487ab17ceda09bd40b3a', '694d296cc6944d16b41c5fa2e0704744', ' Jl. Damai Gg. 04 Rt. 9, Jl Damai  Gg. Syarinah Rt. 27, Jl. Damai Rt. 27, Rt. 17, Rt. 24 Kel. Sidodadi ', 'Samarinda Ulu', '2018-05-21', 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:29', '2022-04-06 09:18:29'),
(670, '47642b851e9d4e36bde00fdf844e5c99', '694d296cc6944d16b41c5fa2e0704744', ' Jl. Kakap Rt. 17 Kel. Selili', 'Samarinda Ilir', '2018-05-21', 0, 0, 0, 0, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:29', '2022-04-06 09:18:29'),
(671, 'dda432e90d32438997508c7f3be36667', '694d296cc6944d16b41c5fa2e0704744', ' Jl. Mugirejo Rt. 08, Kel.Mugirejo', 'Sungai Pinang', '2018-05-21', 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:29', '2022-04-06 09:18:29'),
(672, 'f303820302e6474282701705b6b2d865', '694d296cc6944d16b41c5fa2e0704744', ' Jl. Bukit Niaga Musolla Darussalam Rt. 12 No. 9  Kel. Klandasan Ilir', 'Balikpapan Kota', '2018-05-31', 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:29', '2022-04-06 09:18:29'),
(673, 'eda7f772e99646f4b805fae014c2b8a6', '694d296cc6944d16b41c5fa2e0704744', ' Jl. Telagasari 4 Rt. 32, No. 9, Kel. Telagasari', 'Balikpapan Kota', '2018-05-31', 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:29', '2022-04-06 09:18:29'),
(674, '93141aa194824351b1b008aa9adb4d23', '694d296cc6944d16b41c5fa2e0704744', ' Jl. P. Antasari Rt. 14 No.44 Kel. Sumber Rejo', 'Balikpapan Tengah', '2018-05-31', 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:29', '2022-04-06 09:18:29'),
(675, '762cd25b90184e4bbc7de2f34cc67f70', '694d296cc6944d16b41c5fa2e0704744', ' Jl. Soekarno Hatta KM.14 RT.23 Jl.Giri Mulyo Kelurahan Karang Joang ', 'Balikpapan Utara', '2018-05-31', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:29', '2022-04-06 09:18:29'),
(676, '880b4d0fe05c4da8b1d7a5871626a041', '694d296cc6944d16b41c5fa2e0704744', ' Jl. Kertajaya Hanyar Rt. 31, Kel. Loa Bakung', 'Sungai Kunjang', '2018-06-07', 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:29', '2022-04-06 09:18:29'),
(677, '6f4b905fe84a4b26b33a71c9bf3fb147', '694d296cc6944d16b41c5fa2e0704744', ' Jl. Bela 1 Kampung Birang', 'Gunung Tabur', '2018-07-06', 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:29', '2022-04-06 09:18:29'),
(678, '1539d25e73164d1990ed430032fc7c0e', '694d296cc6944d16b41c5fa2e0704744', ' Jl.Kapal Layar RT 12 No.54 Kel. Loktuan', 'Bontang utara', '2018-10-31', 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:29', '2022-04-06 09:18:29'),
(679, '10da7a2d022f4a9997cf29ca0af6cbfe', '694d296cc6944d16b41c5fa2e0704744', ' jl. Kawasan RT 09 Kel Kampung Jawa', 'Sanga-Sanga', '2018-11-29', 0, 0, 0, 0, 5, 10, 0, 0, 0, 0, 0, 0, 0, 200, 0, 0, '2022-04-06 09:18:29', '2022-04-06 09:18:29'),
(680, 'd74e82e18e8140969e892d17faecad89', '694d296cc6944d16b41c5fa2e0704744', ' Jl. Riko GG. Aman RT 20 No. 57 Kel. Baru Tengah', 'Balikpapan barat', '2018-12-08', 0, 0, 0, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:29', '2022-04-06 09:18:29'),
(681, '3e3632c586b54761930c4ed4be85c11f', '694d296cc6944d16b41c5fa2e0704744', ' Jl. Sumber Mulya No.3 Rt 61 Kel. Muara Rapak', 'Balikpapan Utara', '2018-12-21', 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:29', '2022-04-06 09:18:29'),
(682, '1e30131d12eb4bdd8b4ae35bd1b1de78', '694d296cc6944d16b41c5fa2e0704744', ' Desa Bukit Raya RT 1,2,6,7,8,,10,6', 'Sepaku', '2018-12-02', 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:29', '2022-04-06 09:18:29'),
(683, '4264c4afdac048b99fc8224bb5a2734f', '1874d1aa3a3244248c5aa6120aeb23dc', ' Jl. LumbaLumba Rt.17 Kel. Selili ', 'Samarinda Ilir', '2016-01-21', 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:56', '2022-04-06 09:18:56'),
(684, '103f9d02b971409cb763de70a8bfd982', '1874d1aa3a3244248c5aa6120aeb23dc', ' Jl. Juanda Rt.14 No.79 Kel. Air Putih', 'Samarinda Ulu', '2016-01-22', 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:56', '2022-04-06 09:18:56'),
(685, '820f68e284264ab08aa14dd69eb2eab7', '1874d1aa3a3244248c5aa6120aeb23dc', ' Kel. Bukit Merdeka KM.48 ', 'Samboja', '2016-01-28', 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:56', '2022-04-06 09:18:56'),
(686, 'ffaebae6cd634fa9aa1d165700b599fe', '1874d1aa3a3244248c5aa6120aeb23dc', ' Jl. Batu Sahasa 4 Rt.12 No.04 Kel. Bontang Kuala', 'Bontang Utara', '2016-01-14', 0, 0, 0, 6, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:56', '2022-04-06 09:18:56'),
(687, '63fb19c409504ae58dfb3253ff350bd1', '1874d1aa3a3244248c5aa6120aeb23dc', ' Jl. Tanjung Selor RT. 09 Kel. Manggar Baru ', 'Balikpapan Timur', '2016-02-04', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:56', '2022-04-06 09:18:56'),
(688, '2aef1952f1664360b3e7e622ee558e91', '1874d1aa3a3244248c5aa6120aeb23dc', ' Jl. Perjuangan RT. 52 No. 54 dan Jl. Sangga Buana RT. 29 No. 263 Kel. Graha Indah', 'Balikpapan Utara', '2016-02-04', 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:56', '2022-04-06 09:18:56'),
(689, 'afb2002764bc4a0f9cb7ef1ccf8e6782', '1874d1aa3a3244248c5aa6120aeb23dc', ' Jl. Dahor RT. 54 Kel. Baru Ilir', 'Balikpapan Barat', '2016-02-15', 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:56', '2022-04-06 09:18:56'),
(690, 'b9e0818403a3412eba7b83db14f243c9', '1874d1aa3a3244248c5aa6120aeb23dc', ' Jl. Manunggal RT. 22 Kel. Sungai Nangka', 'Balikpapan Selatan', '2016-02-16', 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:56', '2022-04-06 09:18:56'),
(691, '96af29ceb53e47edb65fd9c2b52deb6c', '1874d1aa3a3244248c5aa6120aeb23dc', ' Kampung Karang Rejo', 'Barong Tongkok', '2016-02-17', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:56', '2022-04-06 09:18:56'),
(692, '34622673a8d446fbb631c63b18ea2c55', '1874d1aa3a3244248c5aa6120aeb23dc', ' Jl. Bujangga', 'Tanjung Redeb', '2016-02-22', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:56', '2022-04-06 09:18:56'),
(693, '7bcc311ca7aa4103838ce924a6b85b15', '1874d1aa3a3244248c5aa6120aeb23dc', ' KP. PT. Energi Cahaya Industri (ECI) Kel. Bukuan', 'Palaran', '2016-03-08', 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:56', '2022-04-06 09:18:56'),
(694, '717a418dfe444f0aafc0130fb85d0087', '1874d1aa3a3244248c5aa6120aeb23dc', ' Jl. Syarifudin Yoes RT.11 No.107 dan 108 Kel. Sepinggan Raya', 'Balikpapan Selatan', '2016-03-14', 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:56', '2022-04-06 09:18:56'),
(695, '57e8f2d45f0c4e45b99dd61bda2247bd', '1874d1aa3a3244248c5aa6120aeb23dc', ' Jl. Pelita Gg. Padaidi RT.35 Kel. Harapan Baru', 'Loa Janan Ilir', '2016-04-17', 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:56', '2022-04-06 09:18:56'),
(696, 'eff592259c1245b9b9174d5476c6fd8c', '1874d1aa3a3244248c5aa6120aeb23dc', ' Jl. KS. Tubun Dalam RT.14 No.24 Kel. Sidodadi  ', 'Samarinda Ulu', '2016-04-13', 0, 0, 0, 0, 2, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:56', '2022-04-06 09:18:56'),
(697, '719ef54b584c4a80b8a40e791abab94d', '1874d1aa3a3244248c5aa6120aeb23dc', ' Jl. Delima Dalam RT.53 Kel. Sidodadi ', 'Samarinda Ulu', '2016-04-16', 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:56', '2022-04-06 09:18:56'),
(698, 'fabbc4598c064e7794210b2da7be97a0', '1874d1aa3a3244248c5aa6120aeb23dc', ' Jl. Penangkaran Buaya RT.15 Kel. Makroman', 'Sambutan ', '2016-04-25', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:56', '2022-04-06 09:18:56'),
(699, '5d49f3ad6b6a4719bcde4d9e5be6d7ed', '1874d1aa3a3244248c5aa6120aeb23dc', ' Jl. RE Martadinata RT.19 Kel. Mekar Sari', 'Balikpapan Tengah', '2016-04-10', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:56', '2022-04-06 09:18:56'),
(700, '6f9210109c2d4bd5b9b746e17fb78f0b', '1874d1aa3a3244248c5aa6120aeb23dc', ' RT.12 Kel. Margo Mulyo Balikpapan', 'Balikpapan Barat', '2016-04-22', 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:56', '2022-04-06 09:18:56'),
(701, 'eb2f532f694741758bf2a24240b7a89e', '1874d1aa3a3244248c5aa6120aeb23dc', ' Jl. Video RT.62 No.33 Kel. Gn. Sari Ilir ', 'Balikpapan Tengah', '2016-04-22', 0, 0, 0, 0, 1, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:56', '2022-04-06 09:18:56'),
(702, '534d6cc9b37540a4a4fe7f2132db7a5b', '1874d1aa3a3244248c5aa6120aeb23dc', ' Jl. Provinsi Desa Songka RT.01 ', 'Batu Sopang', '2016-04-20', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:56', '2022-04-06 09:18:56'),
(703, '4c2c66d17ea04f82afaeeb310fcd3cdf', '1874d1aa3a3244248c5aa6120aeb23dc', ' Jl. Merdeka/RE. Martadinata RT.18 No.111 Kel. Mekar Sari ', 'Balikpapan Tengah', '2016-05-18', 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:56', '2022-04-06 09:18:56'),
(704, 'bce016eb5b164c82a585f3a8e07b298b', '1874d1aa3a3244248c5aa6120aeb23dc', ' Ds. Sungai Terik RT.05 ', 'Batu Sopang', '2016-05-19', 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:56', '2022-04-06 09:18:56'),
(705, '51fb08a8457d4cfdac4c87744c92e96b', '1874d1aa3a3244248c5aa6120aeb23dc', ' Jl. Damanhuri Kel. Mugirejo RT.29', 'Sungai Pinang', '2016-06-11', 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:56', '2022-04-06 09:18:56'),
(706, 'bd045d4a619a4eb3bbfcedca120af1de', '1874d1aa3a3244248c5aa6120aeb23dc', ' Jl. Nusa Indah  Jembatan Mariyati RT.37 No. 2730 Kel. Gn. Sari Ilir ', 'Balikpapan Tengah', '2016-06-28', 0, 0, 0, 31, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:56', '2022-04-06 09:18:56'),
(707, '9457f6607502465fb7122888cc486f1c', '1874d1aa3a3244248c5aa6120aeb23dc', ' Jl. Milono RT.45 No.74 Kel. Klandasan Ulu ', 'Balikpapan Kota', '2016-07-22', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:56', '2022-04-06 09:18:56'),
(708, '7844447abd20459c876332930ad547a5', '1874d1aa3a3244248c5aa6120aeb23dc', ' Jl. Prapatan Dalam RT.07 No.9 Kel. Telaga Sari ', 'Balikpapan Kota', '2016-07-29', 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:56', '2022-04-06 09:18:56'),
(709, 'd0d6e6878c614677a303b3e4a852a9ae', '1874d1aa3a3244248c5aa6120aeb23dc', ' Perum. Gran Valley RT.38 Kel. Gn. Sari Ulu ', 'Balikpapan Tengah', '2016-07-30', 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:56', '2022-04-06 09:18:56'),
(710, '6f2ece511ad74f6c81809cb3a181d2c9', '1874d1aa3a3244248c5aa6120aeb23dc', ' RT.5 dan RT.6 Desa Kelinjau Ilir ', 'Muara Ancalong', '2016-07-21', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:56', '2022-04-06 09:18:56'),
(711, 'a61a645054454cc383a6a476a72a4084', '1874d1aa3a3244248c5aa6120aeb23dc', ' Jl. Cendana Gg.11 RT.36 Kel. Karang Anyar ', 'Sungai Kunjang ', '2016-08-31', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:56', '2022-04-06 09:18:56'),
(712, '7f8ff2c0e3694220a37fbc729a52910b', '1874d1aa3a3244248c5aa6120aeb23dc', ' Jl. DI. Panjaitan No.09 RT.30 Kel. Sumber Rejo ', 'Balikpapan Tengah', '2016-08-04', 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:56', '2022-04-06 09:18:56'),
(713, 'd34bc491959d4471b5bff54cee08331b', '1874d1aa3a3244248c5aa6120aeb23dc', ' Jl. Giri Rejo II KM.15 RT.32 Masjid Baitu Sallam Kel. Karang Joang ', 'Balikpapan Utara', '2016-08-05', 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:56', '2022-04-06 09:18:56'),
(714, '41957e1e031440e8b39155b401212091', '1874d1aa3a3244248c5aa6120aeb23dc', ' Jl. Bukit Barisan RT.14 Kel. Jawa ', 'Samarinda Ulu ', '2016-09-09', 0, 0, 0, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:56', '2022-04-06 09:18:56'),
(715, '27d2a6d0b8ec4008a2c7909a07256638', '1874d1aa3a3244248c5aa6120aeb23dc', ' Jl. Batu Cermin RT.05 Kel. Sempaja Utara ', 'Samarinda Utara', '2016-09-08', 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:56', '2022-04-06 09:18:56'),
(716, '05cbca06c401411aa6225a48219ad641', '1874d1aa3a3244248c5aa6120aeb23dc', ' Jl. Poros sangatta Rantau Pulung ', 'Rantau Pulung', '2016-09-13', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:56', '2022-04-06 09:18:56'),
(717, 'e00d817863c34fb3b3513e33a121ef5e', '1874d1aa3a3244248c5aa6120aeb23dc', ' Jl. Kapal Fery RT.11 Kel. Loktuan ', 'Bontang Utara ', '2016-09-06', 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:56', '2022-04-06 09:18:56'),
(718, '6764cefba466403e88df1bc9b8ac8eb3', '1874d1aa3a3244248c5aa6120aeb23dc', ' Jl. Trans Kaltim Poros BerauBulungan ', 'Gunung Tabur ', '2016-10-18', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:56', '2022-04-06 09:18:56'),
(719, '4caaf8d1c72b4394b17ed356b174e8c1', '1874d1aa3a3244248c5aa6120aeb23dc', ' Jl. H. Suwandi Blok B No.42 RT.23 Kel. Gn. Kelua ', 'Samarinda Ulu', '2016-11-27', 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:56', '2022-04-06 09:18:56'),
(720, '888129c2f469487c9f067b0e95f04b73', '1874d1aa3a3244248c5aa6120aeb23dc', ' Jl. H.AW. Syahrani Gg.3 RT.10 Kel. Gn. Kelua ', 'Samarinda Ulu', '2016-11-27', 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:56', '2022-04-06 09:18:56'),
(721, 'a6a84a4bd25e46eca31630802a48a8a2', '1874d1aa3a3244248c5aa6120aeb23dc', ' Jl. H. Suwandi RT.23 Kel. Gn. Kelua ', 'Samarinda Ulu', '2016-11-28', 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:56', '2022-04-06 09:18:56'),
(722, '7274d26c61f14993bd19e80c86e25c44', '1874d1aa3a3244248c5aa6120aeb23dc', ' Jl. Letjend Soeprapto RT.05 No.65 Kel. Baru Ilir ', 'Balikpapan Barat', '2016-11-30', 0, 0, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:56', '2022-04-06 09:18:56'),
(723, '55be7882cd874dac9038017ddc3a043f', '1874d1aa3a3244248c5aa6120aeb23dc', ' Jl. Marsma Iswahyudi RT 2 Kel. Sepinggan Raya ', 'Balikpapan Selatan', '2016-11-01', 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, '2022-04-06 09:18:56', '2022-04-06 09:18:56'),
(724, '8131b1aa9a944e36b33caf69c2bde48d', '1874d1aa3a3244248c5aa6120aeb23dc', ' Jl. Perum WIKA RT 15 Blok C3 No 14 Kel. Gn. Samarinda Baru', 'Balikpapan Utara', '2016-11-01', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:56', '2022-04-06 09:18:56'),
(725, 'cd71936ddae849eb85cc2879d9a4a565', '1874d1aa3a3244248c5aa6120aeb23dc', ' Kampung Melapeh Baru', 'Linggang Bigung', '2016-11-22', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, '2022-04-06 09:18:56', '2022-04-06 09:18:56'),
(726, 'e4a42cfae9ba4e3a9b89710565f9ea10', '1874d1aa3a3244248c5aa6120aeb23dc', ' Jl. Gurami Gg. Bersama Kel. Selili  ', 'Samarinda Ilir ', '2016-12-29', 0, 2, 116, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:56', '2022-04-06 09:18:56'),
(727, 'e4ca651679fe4b528aa2b51f80cfc8f7', '1874d1aa3a3244248c5aa6120aeb23dc', ' Jl. Tirtakencana Kel. Jawa', 'Samarinda Ulu ', '2016-12-04', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:56', '2022-04-06 09:18:56'),
(728, '08ded93dbb2c4a0aa90718ff7e97ab79', '1874d1aa3a3244248c5aa6120aeb23dc', ' Jl. Raudah RT.20 dan RT.22 Kel. Teluk Lerong Ilir', 'Samarinda Ulu ', '2016-12-08', 0, 0, 0, 0, 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:56', '2022-04-06 09:18:56'),
(729, '6cfe11fd9361416f82e7a3a2e247b40f', '1874d1aa3a3244248c5aa6120aeb23dc', ' Jl. Raudah III RT. 29 Kel. Teluk Lerong ', 'Samarinda Ulu ', '2016-12-09', 0, 0, 0, 0, 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:56', '2022-04-06 09:18:56'),
(730, '15c1d11103dc4b049c0e78d8d387ca11', '1874d1aa3a3244248c5aa6120aeb23dc', ' Jl. PGRI I Blok DE RT.06 Perum Talang Sari Kel. Tanah Merah', 'Samarinda Utara ', '2016-12-11', 0, 0, 0, 0, 2, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:56', '2022-04-06 09:18:56');
INSERT INTO `longsor` (`Id`, `uuid`, `id_tahun`, `alamat`, `kecamatan`, `tgl`, `kb_meninggal`, `kb_hilang`, `kb_luka`, `kb_mengungsi`, `kr_rumah_rb`, `kr_rumah_rr`, `kr_rumah_terendam`, `kantor`, `sekolah`, `t_ibadah`, `sarana_kesehatan`, `bangunan_lain`, `jembatan`, `jalan`, `sawah`, `hutan`, `created_at`, `updated_at`) VALUES
(731, '723a4053246f4c61b3ff3202c5b800d8', '1874d1aa3a3244248c5aa6120aeb23dc', ' RT. 50 No. 07 Kel. Margomulyo', 'Balikpapan Barat', '2016-12-31', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, '2022-04-06 09:18:56', '2022-04-06 09:18:56'),
(732, 'ed9e2cadc1ca4c7a8c876995ecfc51c8', '1874d1aa3a3244248c5aa6120aeb23dc', ' Jl. Siaga RT. 8 No. 50 Kel. Damai', 'Balikpapan Kota', '2016-12-11', 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:56', '2022-04-06 09:18:56'),
(733, '9e0eee779c1641fb8c29769bbb6fc9db', '1874d1aa3a3244248c5aa6120aeb23dc', ' Jl. Martadinata RT. 63 Kel. Gn. Sari Ilir', 'Balikpapan Tengah', '2016-12-07', 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:56', '2022-04-06 09:18:56'),
(734, '87f9b1c80c884960a585fec44303f359', '1874d1aa3a3244248c5aa6120aeb23dc', ' Perum Pondok Anggun RT.19 Kel. Batu Ampar', 'Balikpapan Utara', '2016-12-05', 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:56', '2022-04-06 09:18:56'),
(735, '05f52f5d82784ea3a197b5be21948dc8', '1874d1aa3a3244248c5aa6120aeb23dc', ' Jl. Pondok Anggun RT. 19 No. 94 Kel. Batu Ampar', 'Balikpapan Utara', '2016-12-05', 0, 0, 0, 0, 1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:56', '2022-04-06 09:18:56'),
(736, '87a4549eb1ed497dac98a18caf1426aa', '1874d1aa3a3244248c5aa6120aeb23dc', ' Jl. Letjend Soeprapto RT. 51 Kel. Baru Ulu ', 'Balikpapan Barat', '2016-12-09', 0, 0, 0, 10, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:56', '2022-04-06 09:18:56'),
(737, '7642f1d7c2f04395b7e0abf064bf067c', '1874d1aa3a3244248c5aa6120aeb23dc', ' Jl. Poros kelay', 'Kelay', '2016-06-12', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:18:56', '2022-04-06 09:18:56'),
(738, 'c3199a78b1a447d2aa01f82f3e555390', 'f76d153c236e40f5a048a9400f158bd3', 'Rt.01, Rt.5 dan Rt.6 Desa Kelinjau Ilir ', 'Muara Ancalong', '2014-01-31', 0, 0, 0, 0, 15, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:19:16', '2022-04-06 09:19:16'),
(739, '8a327b745ccc429fab5a8ac3e6c7c10d', 'f76d153c236e40f5a048a9400f158bd3', 'Desa Atang Pait', 'Long Ikis', '2014-01-14', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:19:16', '2022-04-06 09:19:16'),
(740, 'cee8c203015a448daa6ec80207f56fa7', 'f76d153c236e40f5a048a9400f158bd3', 'Jl. Mas. Mansyur Rt. 32 Kel. Loa Bakung  ', 'Sungai Kunjang', '2014-02-27', 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, '2022-04-06 09:19:16', '2022-04-06 09:19:16'),
(741, 'cc697b5cc06e4c9eafd648da285c2ba3', 'f76d153c236e40f5a048a9400f158bd3', 'Desa Kelinjau Ilir Rt.5 & 6  ', 'Muara Ancalong', '2014-02-02', 0, 0, 0, 0, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:19:16', '2022-04-06 09:19:16'),
(742, 'fe33802c691d4296a0f42fa706c010ed', 'f76d153c236e40f5a048a9400f158bd3', 'Jl. Suryanata Gg. Tinggiran Kel. Air  Putih Samarinda', 'Samarinda Ulu', '2014-03-06', 0, 0, 0, 0, 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:19:16', '2022-04-06 09:19:16'),
(743, 'da10f061fb974ba3bdbab6c57406a7fe', 'f76d153c236e40f5a048a9400f158bd3', 'Rantau Bintungan ', 'Muara Samu', '2014-03-14', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:19:16', '2022-04-06 09:19:16'),
(744, 'f78d32f43208477b851c98a9589060e1', 'f76d153c236e40f5a048a9400f158bd3', 'Desa Ratau Bintungan ', 'Muara Samu', '2014-03-26', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, '2022-04-06 09:19:16', '2022-04-06 09:19:16'),
(745, 'dfb3744b80af4d7591eda7b9edbd6ecc', 'f76d153c236e40f5a048a9400f158bd3', 'Dusun Mataritim ', 'Makajang', '2014-03-25', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:19:16', '2022-04-06 09:19:16'),
(746, 'db649c5155084497ad51f6b04137c0fd', 'f76d153c236e40f5a048a9400f158bd3', 'Jl. MT. Haryono Gg. Sepakat 2 Rt. 43   Kel. Graha Indah ', 'Balikpapan Utara', '2014-04-25', 0, 0, 0, 0, 1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:19:16', '2022-04-06 09:19:16'),
(747, 'd4a68196232e489c964cabc7a009ef82', 'f76d153c236e40f5a048a9400f158bd3', 'Jl. Poros SangattaBontang KM.18   Desa Sangatta Selatan ', 'Sangatta Selatan', '2104-04-12', 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:19:16', '2022-04-06 09:19:16'),
(748, '84c389def55844fba2b2cb75ebbaf45f', 'f76d153c236e40f5a048a9400f158bd3', 'Kel. Sebengkok Tiram Rt.33/80 Rw.05', 'Tarakan Tengah', '2014-04-15', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:19:16', '2022-04-06 09:19:16'),
(749, '2ae6d4c3ea8d4bf5be68b4b54c603ada', 'f76d153c236e40f5a048a9400f158bd3', 'Rt.22 Tanjung Batu/Tanjung Pasir Kel. Mamburungan', 'Tarakan Timur', '2014-04-21', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:19:16', '2022-04-06 09:19:16'),
(750, '8d3f88b7dc21476f85e6ba5d83981258', 'f76d153c236e40f5a048a9400f158bd3', 'Jl.P.Antasari Rt.20 Kel. Pamusian', 'Tarakan Tengah', '2014-04-24', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:19:16', '2022-04-06 09:19:16'),
(751, '539b40db001e45d09de7cbd2e4525b7c', 'f76d153c236e40f5a048a9400f158bd3', 'Jl. Aki Balak Gg. Anggrek Rt.XI Kel. Karang Harapan', 'Tarakan Barat', '2014-04-29', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:19:16', '2022-04-06 09:19:16'),
(752, '0e725a0a8e0e4e90b3c838bc2c2af15e', 'f76d153c236e40f5a048a9400f158bd3', 'Jl. Sei Batumapan Rt.03/45 Kel. Mamburungan (Benyamin Marsal)', 'Tarakan Timur', '2014-04-29', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:19:16', '2022-04-06 09:19:16'),
(753, 'c879aa4de23b44c49f22bd41a2cde161', 'f76d153c236e40f5a048a9400f158bd3', ' Sekatak Kab. Bulungan', 'Sekatak', '2014-04-25', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:19:16', '2022-04-06 09:19:16'),
(754, '0f102be61df4425494f1f66e6ccfe19e', 'f76d153c236e40f5a048a9400f158bd3', 'Jl. Semarang Rt. 4 Kel. Simpang Pasir', 'Palaran', '2014-05-28', 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:19:16', '2022-04-06 09:19:16'),
(755, '1fe6e64577344e138287a781e17d5b1b', 'f76d153c236e40f5a048a9400f158bd3', 'P. Antasari Rt. 33 Kel. Bukuan', 'Palaran', '2014-05-29', 0, 0, 0, 0, 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:19:16', '2022-04-06 09:19:16'),
(756, 'cd32449b3ea64ecf93cf861931f9aa8e', 'f76d153c236e40f5a048a9400f158bd3', 'Jl. Padat Karya Rt.83 Gg. Citra 1 Kel. Loa  Bakung ', 'Sungai Kunjang', '2014-05-31', 0, 0, 0, 0, 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:19:16', '2022-04-06 09:19:16'),
(757, 'f09c0be44f8048d9b8454d9b7d4bc94e', 'f76d153c236e40f5a048a9400f158bd3', 'Kawasan Perbukitan Jl. Biawan Gg. II Rt.16   Kel. Sidomulyo ', 'Samarinda Ilir', '2014-05-31', 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:19:16', '2022-04-06 09:19:16'),
(758, '5629766b276249b6aa63cb567e87817e', 'f76d153c236e40f5a048a9400f158bd3', 'Jl. Sultan Hasanuddin Rt.63 (Tebing) Kel. Baru Ilir ', 'Balikpapan Barat', '2014-05-04', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:19:16', '2022-04-06 09:19:16'),
(759, '345ea611c389409d90ac97a3f618a48f', 'f76d153c236e40f5a048a9400f158bd3', 'Jl. Prapatan Dalam Rt.33 No.42 Kel. Prapatan ', 'Balikpapan Selatan', '2014-05-16', 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:19:16', '2022-04-06 09:19:16'),
(760, '1e8874e7131d452d8de8788b972d206a', 'f76d153c236e40f5a048a9400f158bd3', 'Jl. Prapatan Dalam Rt. 35 No. 67 Kel. Prapatan ', 'Balikpapan Selatan', '2014-05-28', 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:19:16', '2022-04-06 09:19:16'),
(761, '4bd5ab8247034ac6a4682e0aa3b5b6c8', 'f76d153c236e40f5a048a9400f158bd3', 'Jl. Gunung Sentral Rt. 24 Gang. Swadaya 2 Kel. Melayu ', 'Tenggarong', '2014-05-15', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:19:16', '2022-04-06 09:19:16'),
(762, 'dc3452fb7da747059af8c144f4a99e0d', 'f76d153c236e40f5a048a9400f158bd3', 'Jl. Kapal Layar Rt. 23 Kel. Loktuan', 'Bontang Utara', '2014-05-19', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:19:16', '2022-04-06 09:19:16'),
(763, '2df5e7157a0448ed892342d15927dc3f', 'f76d153c236e40f5a048a9400f158bd3', 'Perum. Permata Hijau Rt.26   Blok D Kel. Teluk Lerong Ilir ', 'Samarinda Ulu', '2014-06-01', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:19:16', '2022-04-06 09:19:16'),
(764, '111a3ad59ae6409985fbc95a313231c7', 'f76d153c236e40f5a048a9400f158bd3', 'Jl. Patimura No. 82 Rt.104 Kel. Batu Ampar ', 'Balikpapan Utara', '2014-06-20', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:19:16', '2022-04-06 09:19:16'),
(765, '86d3c3484e1b4607980455ba28506ea6', 'f76d153c236e40f5a048a9400f158bd3', 'Jl. Jend. Sudirman Rt.14 Karang Anyar ', 'Tarakan Barat', '2014-09-15', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:19:16', '2022-04-06 09:19:16'),
(766, 'd1c50073d90c497cac0b0e2686bdf5de', 'f76d153c236e40f5a048a9400f158bd3', 'Desa Sungai Urang', 'Tanjung Palas', '2014-09-11', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:19:16', '2022-04-06 09:19:16'),
(767, 'c60e38be921f424e846366f8314200de', 'f76d153c236e40f5a048a9400f158bd3', 'Jl. Patriot Rt.27 Kel. Baru Ilir ', 'Balikpapan Barat', '2014-11-10', 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:19:16', '2022-04-06 09:19:16'),
(768, '3154cd3b9ad9443e933be9621010abd7', 'f76d153c236e40f5a048a9400f158bd3', 'Jl. Sentosa Dalam 2A Gg.12 Rt.78 Kel. Sungai Pinang Dalam ', 'Sungai Pinang', '2014-12-03', 0, 0, 0, 0, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:19:16', '2022-04-06 09:19:16'),
(769, '3a214624547c43efb7bcee7bbbd9b0fa', 'f76d153c236e40f5a048a9400f158bd3', 'Jl. Otto Iskandar Dinata (Otista) Rt.31 Kel. Sei Dama ', 'Samarinda Ilir', '2014-12-10', 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:19:16', '2022-04-06 09:19:16'),
(770, '0ed74a7c74ef48e29a0f4f91ebbfe1c0', 'f76d153c236e40f5a048a9400f158bd3', 'Jl. Wiraswasta Gg.3 Bersaudara Kel. Sidodadi ', 'Samarinda Ulu', '2014-12-16', 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:19:16', '2022-04-06 09:19:16'),
(771, 'a1aa8fa610c4430a8926f6d02e17d14b', 'f76d153c236e40f5a048a9400f158bd3', 'Jl. Kartini Rt.39 Kel. Lempake ', 'Samarinda Utara', '2014-12-24', 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:19:16', '2022-04-06 09:19:16'),
(772, 'a6392a63749b4f2783d8674b741d73ef', 'f76d153c236e40f5a048a9400f158bd3', 'Jl. Tepo Rt.50 Perumahan Kr.Joang Lestari Kel. Kr.Joang ', 'Balikpapan Utara', '2014-12-17', 0, 0, 0, 15, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:19:16', '2022-04-06 09:19:16'),
(773, '4ead563d7f5241668ee6ecbe1cf2993c', 'f76d153c236e40f5a048a9400f158bd3', 'Kel. Karang Joang  ', 'Balikpapan Utara', '2014-12-22', 0, 0, 0, 0, 3, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:19:16', '2022-04-06 09:19:16'),
(774, '3ea80d8900a44a138a695e3844b476f2', 'f76d153c236e40f5a048a9400f158bd3', 'Jl. Aki Balak Rt.1 Karang Harapan ', 'Tarakan Barat', '2014-12-10', 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-04-06 09:19:16', '2022-04-06 09:19:16');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `longsor`
--
ALTER TABLE `longsor`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `longsor`
--
ALTER TABLE `longsor`
  MODIFY `Id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=775;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
