-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Mar 2022 pada 17.23
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
-- Struktur dari tabel `foto_usaha`
--

CREATE TABLE `foto_usaha` (
  `id` int(10) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `foto` varchar(191) DEFAULT NULL,
  `usaha_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `foto_usaha`
--

INSERT INTO `foto_usaha` (`id`, `uuid`, `foto`, `usaha_id`, `created_at`, `updated_at`) VALUES
(1, '40f599d504a84973a5e78bbede9750b8', '/storage/foto-usaha/40f599d504a84973a5e78bbede9750b8-foto.jpg', 1, '2019-11-20 10:24:54', '2019-11-20 10:24:54');

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
  `tgl` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(65, '3cf7fe98a01542d0855dce49410f0d34', '8e4b876246154f458223a2e3da9dd076', '0 Rt.19, Rt.02, Rt.18 dan Rt.06 Kel. Gunung Sari Ilir Kec. Balikpapan Tengah', 'Kec. Balikpapan Tengah', '42025', 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-03-21 09:21:52', '2022-03-21 09:21:52'),
(66, '0c75a080a3ce4737b239ee482674bff0', '8e4b876246154f458223a2e3da9dd076', '- Jl. Gn. Polisi Rt.57 dan Rt.62 Kel. Baru Ilir Kec. Balikpapan Barat Kota Balikpapan', 'Kec. Balikpapan Barat', '42026', 0, 0, 0, 12, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-03-21 09:21:52', '2022-03-21 09:21:52'),
(67, 'fba66268a1b6492883b8fc4a02bbc910', '8e4b876246154f458223a2e3da9dd076', '- Jl. Lumba-Lumba Rt.1 Kel. Selili Kec. Samarinda Ilir', 'Kec. Samarinda Ilir', '42042', 0, 0, 0, 5, 3, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-03-21 09:21:52', '2022-03-21 09:21:52'),
(68, '93aad69c51f64956b7350f2e268d8df6', '8e4b876246154f458223a2e3da9dd076', '- Jl. Jend. Sudirman Stal Kuda Perum Pajak Rt.26 No.32 & 33 Kel. Damai Bahagia  Balikpapan Selatan', 'Kec. Balikpapan Selatan', '42037', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-03-21 09:21:52', '2022-03-21 09:21:52'),
(69, '9cfcac36a4f541cb84cf3095833caeca', '8e4b876246154f458223a2e3da9dd076', '- Jl. Letjend S. Parman Rt.23 Kel. Gunung Sari Ulu Balikpapan Tengah', 'Kec. Balikpapan Tengah', '42038', 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-03-21 09:21:52', '2022-03-21 09:21:52'),
(70, 'f7173b8774f34e14b9e078876fd3e666', '8e4b876246154f458223a2e3da9dd076', '- Jl. Bunga Rampai Rt.37 No.08 Kel. Gn. Sari Ilir Balikpapan Tengah', 'Kec. Balikpapan Tengah', '42039', 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-03-21 09:21:52', '2022-03-21 09:21:52'),
(71, '85be7ec2c5b7403590046f34caf42d5e', '8e4b876246154f458223a2e3da9dd076', '- Jl. Prapatan Dalam Rt.30 No.44 & 45 Kel. Prapatan Balikpapan Kota', 'Kec. Balikpapan Kota', '42040', 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-03-21 09:21:52', '2022-03-21 09:21:52'),
(72, 'befc884909664598b1be06b26307400f', '8e4b876246154f458223a2e3da9dd076', '- Jl. Jend. A.Yani Rt.19 No.75 kel. Karang Jati Balikpapan Tengah ', 'Kec. Balikpapan Tengah', '42040', 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-03-21 09:21:52', '2022-03-21 09:21:52'),
(73, '2efd93f4751f49dd85addbfc4cef5091', '8e4b876246154f458223a2e3da9dd076', '- Jl. Soekarno Hatta Km.4,5 Perum Graha Indah Kel. Kariangau Balikpapan Utara', 'Kec. Balikpapan Utara', '42040', 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-03-21 09:21:52', '2022-03-21 09:21:52'),
(74, '7945707e5bc04fee9c0796061708f487', '8e4b876246154f458223a2e3da9dd076', '- Jl. Karang Jawa No.20 Rt.10 Kel. Karang Jati Balikpapan Tengah', 'Kec. Balikpapan Tengah', '42044', 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-03-21 09:21:52', '2022-03-21 09:21:52'),
(75, '20a221970deb4d27b980ee6087d9f301', '8e4b876246154f458223a2e3da9dd076', '- Jl. Mayjen Sutoyo Sahabat Rt.49 Kel. Gn. Sari Ilir Balikpapan Tengah', 'Kec. Balikpapan Tengah', '42044', 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-03-21 09:21:52', '2022-03-21 09:21:52'),
(76, '26dff92ade8645c886219b586d366d9a', '8e4b876246154f458223a2e3da9dd076', '- Jl. Bunto Bulaeng Kel. Karang Rejo Balikpapan Utara', 'Kec. Balikpapan Utara', '42044', 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-03-21 09:21:52', '2022-03-21 09:21:52'),
(77, '0be3d3a6be814dd4ac253024d5b75b44', '8e4b876246154f458223a2e3da9dd076', '- Jl. Abadi No.13 Rt.10 Kel. Gn. Sari Ilir Balikpapan Tengah', 'Kec. Balikpapan Tengah', '42044', 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-03-21 09:21:52', '2022-03-21 09:21:52'),
(78, '9997e8d6fc9341478875f754cca0a1f5', '8e4b876246154f458223a2e3da9dd076', '- Jl. Abadi No.55 Rt.11 Kel. Gn. Sari Ilir Balikpapan Tengah', 'Kec. Balikpapan Tengah', '42044', 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-03-21 09:21:52', '2022-03-21 09:21:52'),
(79, '92db01f8b37c4fcdaf929bc30677da0a', '8e4b876246154f458223a2e3da9dd076', '- Jl. RE. Martadinata Gg. Merdeka No.111 Rt.18 Kel. Mekar Sari Balikpapan Tengah', 'Kec. Balikpapan Tengah', '42044', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-03-21 09:21:52', '2022-03-21 09:21:52'),
(80, 'e9308f06860d4df7a36d954ee787c312', '8e4b876246154f458223a2e3da9dd076', '- Rt.02,19,37,41 dan 46 Kel. Telaga Sari Kec. Balikpapan Kota', 'Kec. Balikpapan Kota', '42044', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-03-21 09:21:52', '2022-03-21 09:21:52'),
(81, '67d7320f206544fa8f99cdf96340f0c9', '8e4b876246154f458223a2e3da9dd076', '- Jl. DI. Panjaitan Rt.49 Kel. Sumber Rejo Balikpapan Tengah', 'Kec. Balikpapan Tengah', '42045', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-03-21 09:21:52', '2022-03-21 09:21:52'),
(82, 'd7793717d55a44568cea32b87e6bfea1', '8e4b876246154f458223a2e3da9dd076', '- Jl. Indrakila Gg. Wonorejo 4 Rt.35 No.117 Kel. Gunung Samarinda Balikpapan Utara', 'Kec. Balikpapan Utara', '42048', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-03-21 09:21:52', '2022-03-21 09:21:52'),
(83, 'eb90c0e99f514ba58082f97716382900', '8e4b876246154f458223a2e3da9dd076', '- Jl. Mayjen Sutoyo Belakang Gajah Mada Kel. Gunung Sari Ulu Balikpapan Tengah', 'Kec. Balikpapan Tengah', '42048', 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-03-21 09:21:52', '2022-03-21 09:21:52'),
(84, '676fad03acd24e20a0dce89add9894b9', '8e4b876246154f458223a2e3da9dd076', '- TPA Manggar Kel. Manggar Baru Balikpapan Timur', 'Kec. Balikpapan Timur', '42048', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-03-21 09:21:52', '2022-03-21 09:21:52'),
(85, '5afbfb635f874c209388a83cac5940de', '8e4b876246154f458223a2e3da9dd076', '- Rt.16 dan Rt.07 Kel. Mekar Sari Kec. Balikpapan Tengah', 'Kec. Balikpapan Tengah', '42048', 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-03-21 09:21:52', '2022-03-21 09:21:52'),
(86, 'e39d91ba64f0450ea82ee48b5f21f33c', '8e4b876246154f458223a2e3da9dd076', '- Rt.36 Kel. Gunung Samarinda Balikpapan Utara', 'Kec. Balikpapan Utara', '42058', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-03-21 09:21:52', '2022-03-21 09:21:52'),
(87, '0f2e0b8890fb447d9c608735b1d4141b', '8e4b876246154f458223a2e3da9dd076', '- Jl. Negara Km.19 Desa Seiriye Kec. Kuaro', 'Kec. Kuaro', '42044', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-03-21 09:21:52', '2022-03-21 09:21:52'),
(88, 'e49589e593e44a9e954a1637dc43a9e9', '8e4b876246154f458223a2e3da9dd076', '- Jl. Ahmad Rifaldin Bukit Batu', 'Kec. Loa Janan Ilir', '42068', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-03-21 09:21:52', '2022-03-21 09:21:52'),
(89, 'b0eb06d93c9340389c0614ae8e41da06', '8e4b876246154f458223a2e3da9dd076', '- Jl. Dahor Rt. 54, 61 dan Rt.62 Kel. Baru Ilir Kec. Balikpapan Barat', 'Kec. Balikpapan Barat', '42075', 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-03-21 09:21:52', '2022-03-21 09:21:52'),
(90, '8ffc87048a78475bac9991b3653a129a', '8e4b876246154f458223a2e3da9dd076', '- Kel. Margomulyo Siring No.38,39,41 Rt.50 Kec. Balikpapan Barat', 'Kec. Balikpapan Barat', '42076', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-03-21 09:21:52', '2022-03-21 09:21:52'),
(91, '25c8e865cf9842c399ffabc2d29c1190', '8e4b876246154f458223a2e3da9dd076', '- Rt. 25 No.40 Kel. Margomulyo Kec. Balikpapan Barat', 'Kec. Balikpapan Barat', '42076', 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-03-21 09:21:52', '2022-03-21 09:21:52'),
(92, '61a9d92e12b14aa89dae3f11090db8eb', '8e4b876246154f458223a2e3da9dd076', '- Jl. Gunung Polisi Rt. 66 No.21 Muara Rapak Balikpapan Utara', 'Kec. Balikpapan Utara', '42076', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-03-21 09:21:52', '2022-03-21 09:21:52'),
(93, 'e398faaa71cb4019928002dbbb1769b2', '8e4b876246154f458223a2e3da9dd076', '- Jl. Inpres IV Rt.16 Kec. Balikpapan Utara', 'Kec. Balikpapan Utara', '42084', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-03-21 09:21:52', '2022-03-21 09:21:52'),
(94, '8abd16d050824dd5809f026c8f93ccd2', '8e4b876246154f458223a2e3da9dd076', '- Jl. Poros Kampung Pesayan Kec. Sambaliung', 'Kec. Sambaliung', '42066', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, '2022-03-21 09:21:52', '2022-03-21 09:21:52'),
(95, 'ad824eef65594ba0aa8748c0c8968483', '8e4b876246154f458223a2e3da9dd076', '- Kawasan Purwodadi Gg.05 Rt.10 Kel. Lempake Kec. Samarinda Utara', 'Kec. Samarinda Utara', '42120', 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-03-21 09:21:52', '2022-03-21 09:21:52'),
(96, 'ed3d9e30b4064fcdbd589c587e9dd2c1', '8e4b876246154f458223a2e3da9dd076', '- Jl. Suwandi Kel. Gunung Kelua Kec. Samarinda Ulu', 'Kec. Samarinda Ulu', '42120', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-03-21 09:21:52', '2022-03-21 09:21:52'),
(97, 'dbc07a59c2564a4dae1445a8b5ae3dce', '8e4b876246154f458223a2e3da9dd076', '- Jl. Kadrie Oening Perum. PWI Rt.10 No.09 Kel. Air Hitam', 'Kec. Samarinda Ulu', '42124', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-03-21 09:21:52', '2022-03-21 09:21:52'),
(98, 'bdb4afa85db84e36b81bd52c587f320f', '8e4b876246154f458223a2e3da9dd076', '- Jl. Bunga Rampai Rt.37 No.12 Kel. Gn. Sari Ilir Kec. Balikpapan Tengah', 'Kec. Balikpapan Tengah', '42102', 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-03-21 09:21:52', '2022-03-21 09:21:52'),
(99, 'aa8146c133b14e58b3e321ad31ca611a', '8e4b876246154f458223a2e3da9dd076', '- Desa Jembayan Tengah Kec. Loa Kulu', 'Kec. Loa Kulu', '42103', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-03-21 09:21:52', '2022-03-21 09:21:52'),
(100, 'f8bd9d1edb46465d8b439b88a28ecad0', '8e4b876246154f458223a2e3da9dd076', '- Rt.07 Kel. Graha Indah Kec. Balikpapan Utara', 'Kec. Balikpapan Utara', '42166', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-03-21 09:21:52', '2022-03-21 09:21:52'),
(101, '1ea608f186ba4f5fae61fbb0c1543a03', '8e4b876246154f458223a2e3da9dd076', '- Jl. Imus Payau Rt.36 No.40 dan No.41 Kel. Muara Rapak Kec. Balikpapan Utara', 'Kec. Balikpapan Utara', '42167', 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-03-21 09:21:52', '2022-03-21 09:21:52'),
(102, '465f4c27075e4d1da67b4e566ceba1bf', '8e4b876246154f458223a2e3da9dd076', '- Rt.07 Kel. Graha Indah Kec. Balikpapan Utara', 'Kec. Balikpapan Utara', '42171', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-03-21 09:21:52', '2022-03-21 09:21:52'),
(103, 'f803a18e3ef34edf842a82c65bb253de', '8e4b876246154f458223a2e3da9dd076', '- Jl. Prapatan Dalam Rt.32 No.24 Kel. Prapatan Kec. Balikpapan Kota ', 'Kec. Balikpapan Kota', '42171', 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-03-21 09:21:52', '2022-03-21 09:21:52'),
(104, '66b2cf2ab17a425786bd220b70bb5160', '8e4b876246154f458223a2e3da9dd076', '- Jl. Bunga Rampai Rt.37 Kec. Balikpapan Tengah Kel. Gn. Sari Ilir', 'Kec. Balikpapan Tengah', '42172', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-03-21 09:21:52', '2022-03-21 09:21:52'),
(105, 'b7ad1be7623149718d35b83c8e868daa', '8e4b876246154f458223a2e3da9dd076', '- Jl. Soekarno Hatta Km.7 Rt.37 Kel. Graha Indah Kec. Balikpapan Utara', 'Kec. Balikpapan Utara', '42172', 0, 0, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-03-21 09:21:52', '2022-03-21 09:21:52'),
(106, '941f185c9b9c45c5885344820287bc19', '8e4b876246154f458223a2e3da9dd076', '- Jl. Letjend Suprapto Rt.51 Kel. Baru Ulu Kec. Balikpapan Barat', 'Kec. Balikpapan Barat', '42174', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-03-21 09:21:52', '2022-03-21 09:21:52'),
(107, 'c81c82804bad44dab39951ba7c05ceab', '8e4b876246154f458223a2e3da9dd076', '- Perum Bukit Taman Sari Rt.27 No.16 Kec. Balikpapan Utara', 'Kec. Balikpapan Utara', '42174', 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-03-21 09:21:52', '2022-03-21 09:21:52'),
(108, 'a3ef8d7e0f23426e8f62b319b7c82284', '8e4b876246154f458223a2e3da9dd076', '- Jl. Penggalang Rt.28 Gg.05 Kel. Damai Kec. Balikpapan Kota', 'Kec. Balikpapan Kota', '42175', 0, 0, 0, 8, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-03-21 09:21:52', '2022-03-21 09:21:52'),
(109, 'c47f0399224d40ab97135ce5506e5edd', '8e4b876246154f458223a2e3da9dd076', '- Rt.30 No.38 Kel. Prapatan Kec. Balikpapan Kota', 'Kec. Balikpapan Kota', '42175', 0, 0, 0, 0, 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-03-21 09:21:52', '2022-03-21 09:21:52'),
(110, '0e9609926aad4878ab082c09d8a4e7cb', '8e4b876246154f458223a2e3da9dd076', '- Perumahan Regency Rt.5 Masjid Al Mujahidin Kel. Sepinggan Raya  Kec. Balikpapan Selatan', 'Kec. Balikpapan Selatan', '42180', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-03-21 09:21:52', '2022-03-21 09:21:52'),
(111, 'd7b33ab9ffcd486e9c0584b78397bb4a', '8e4b876246154f458223a2e3da9dd076', '- Jl. Serobong Rt.22 Kel. Prapatan Kec. Balikpapan Kota', 'Kec. Balikpapan Kota', '42215', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-03-21 09:21:52', '2022-03-21 09:21:52'),
(112, 'd1978301faf54d08ba0e0f8af391e962', '8e4b876246154f458223a2e3da9dd076', '- Jl. Gerbang Dayaku Rt.13 Rw.04 Desa Bakungan  Kec. Loa Janan Kab. Kukar', 'Kec. Loa Janan', '42200', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-03-21 09:21:52', '2022-03-21 09:21:52'),
(113, 'c1b2ff9a7f1247ed9821d048ec029dd3', '8e4b876246154f458223a2e3da9dd076', '- Desa Kayu Kec. Muara Muntai, Muara Muntai Ulu, Muara Muntai Ilir,   Rebak Rinding, Pulau Harapan Indah, Batuq', 'Kec. Muara Muntai', '42204', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-03-21 09:21:52', '2022-03-21 09:21:52'),
(114, 'c516979f4eae42ea88eb1e2a56f7fe6e', '8e4b876246154f458223a2e3da9dd076', '- Sebulu Ilir dan Sebulu Ulu Perbatasan Wilayah Rt.01 dan Rt.03', 'Kec. Sebulu', '42215', 0, 0, 0, 20, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-03-21 09:21:52', '2022-03-21 09:21:52'),
(115, '226ac1ead1c7457fbea5c67ca8c30ab9', '8e4b876246154f458223a2e3da9dd076', '- Kel. Wonotirto Kec. Samboja Kab. Kukar', 'Kec. Samboja', '42237', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-03-21 09:21:52', '2022-03-21 09:21:52'),
(116, '744e3cdffddf455e8724389ba5d3b263', '8e4b876246154f458223a2e3da9dd076', '- Jl. WR. Supratman Rt.07 Kel. Bugis', 'Kec. Samarinda Kota', '42351', 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, '2022-03-21 09:21:52', '2022-03-21 09:21:52'),
(117, 'fc314c188c1d44fc9ba23348a24ef1bd', '8e4b876246154f458223a2e3da9dd076', '- Jl. Sambu (depan pintu 3 Jl. Minyak) RT. 02 No. 53 Kel. Prapatan   Kec. Balikpapan Kota', 'Kec. Balikpapan Kota', '42350', 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-03-21 09:21:52', '2022-03-21 09:21:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `uuid` varchar(191) DEFAULT NULL,
  `nama` varchar(191) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `foto` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `slider`
--

INSERT INTO `slider` (`id`, `uuid`, `nama`, `deskripsi`, `foto`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, '5e72b65276004a418692b6806c7f02fb', 'Kerajinan Tangan', '...', '/storage/foto-slider/KerajinanTangan-foto.jpg', '2019-11-04 12:41:11', '2019-11-04 12:41:11', NULL),
(3, '47c0787d86dd472a818b4a155cdfcfe4', 'Manik-manik', '...', '/storage/foto-slider/Manik-manik-foto.jpg', '2019-11-04 13:08:46', '2019-11-04 13:08:46', NULL),
(4, '335498496bdf44ccbffa54b65a066bef', 'Pasar Tradisional', '...', '/storage/foto-slider/PasarTradisional-foto.jpg', '2019-11-04 13:09:17', '2019-11-04 13:09:17', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahun`
--

CREATE TABLE `tahun` (
  `id` int(10) UNSIGNED NOT NULL,
  `uuid` varchar(45) NOT NULL,
  `label` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tahun`
--

INSERT INTO `tahun` (`id`, `uuid`, `label`, `created_at`, `updated_at`) VALUES
(2, 'f76d153c236e40f5a048a9400f158bd3', '2014', '2022-03-14 06:39:08', '2022-03-14 08:46:44'),
(3, '8e4b876246154f458223a2e3da9dd076', '2015', '2022-03-14 08:18:40', '2022-03-14 08:18:40'),
(4, '1874d1aa3a3244248c5aa6120aeb23dc', '2016', '2022-03-21 08:27:59', '2022-03-21 08:27:59'),
(5, '2eddc5e9e167441b91eb0211f71f614c', '2017', '2022-03-21 08:28:06', '2022-03-21 08:28:06'),
(6, '694d296cc6944d16b41c5fa2e0704744', '2018', '2022-03-21 08:28:17', '2022-03-21 08:28:17'),
(7, '7a13554f4cd24bae9cbfcf53e5c4fe8b', '2019', '2022-03-21 08:28:30', '2022-03-21 08:28:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `usaha`
--

CREATE TABLE `usaha` (
  `id` int(10) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `nama_usaha` varchar(100) DEFAULT NULL,
  `nama_pemilik` varchar(100) DEFAULT NULL,
  `nomor_izin_usaha` varchar(45) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `jenis_usaha` varchar(100) DEFAULT NULL,
  `jml_tkerja` int(11) DEFAULT NULL,
  `modal` int(11) DEFAULT NULL,
  `omzet_bln` int(11) DEFAULT NULL,
  `omzet_thn` int(11) DEFAULT NULL,
  `telpon` varchar(45) DEFAULT NULL,
  `kategori` varchar(45) DEFAULT NULL,
  `lat` varchar(191) DEFAULT NULL,
  `lng` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `usaha`
--

INSERT INTO `usaha` (`id`, `uuid`, `nama_usaha`, `nama_pemilik`, `nomor_izin_usaha`, `alamat`, `jenis_usaha`, `jml_tkerja`, `modal`, `omzet_bln`, `omzet_thn`, `telpon`, `kategori`, `lat`, `lng`, `created_at`, `updated_at`) VALUES
(1, '5b3704ac528e4f5987f3ddab7f205801', 'Warung Sederhana', 'Imam Fathoni Djauhari', 'Tidak ada', 'Perum PKL Blok.D No.283', 'Makanan dan minuman', 0, 1000000, 1500000, 18000000, '085245894449', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(2, 'b514a86c58f044beaaf55e4ce1841a3d', 'Bengkel dan Teralis', 'H.Sahrudin', 'tidak ada', 'Jl.Sungai Kapih Rt.01', 'Usaha Dibidang Otomotif', 1, 2000000, 4000000, 48000000, '081350558755', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(3, '74cc3b0134d44a3597fcc4c7f6dcb578', 'warung sembako ', 'HJ. Arsiah', 'tidak ada ', 'Hj marhusen RT. 01 ', 'Usaha Agrobisnis', 0, 5000000, 1500000, 18000000, '085346374542', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(4, 'c854d0a51e4540e58b906f49e15f21ab', 'Warung Makan Mama Ali', 'Ratna Dewi', 'Tidak Ada', 'Jl.Tatako Gg.Kartini Rt.08', 'Usaha Kuliner', 0, 600000, 480000, 5760000, '082353189842', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(5, '49954ebda7e9439a966deff8375de941', 'Ayam Potong Hamdallah', 'Wahyudi', 'Wahyudi', 'Jl.Sungai Kapih Rt.05', 'Usaha Agrobisnis', 2, 20000000, 8000000, 96000000, '085250010115', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(6, '003c3500400f4128879a1336bd9bc892', '1', 'Saidah', 'Tidak ada', 'Jl.Kesehatan, Rt.10, No.656', 'Usaha Kuliner, Kerupuk berkah', 1, 3000000, 1000000, 12000000, '085250288143', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(7, '9ee4e39c92464fbb8d83332daec692f9', '2', 'Suparti', '503/253/IUMK-SBTN/11/', 'Perum PKL Rt.10 no.630 sungai kapih', 'Rengginang', 0, 10000000, 5000000, 60000000, '085347527695', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(8, '4a35b988e2214ea58393fe9696027c5a', 'Rahman', 'Dasrul', '503/003/IUMK-SBTN/I/2018', 'Perum PKL Blok.B Rt.09', 'Usaha Depot Air Minum Isi Ulang', 0, 20000000, 1500000, 18000000, '081350147451', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(9, '65e23033a99f4b50bf7ae69d0fbc453f', 'Warung Ubay', 'Arbayah', 'Tidak Ada', 'Perum PKL Blok.B Rt.09', 'Usaha Kuliner', 0, 8000000, 30000000, 360000000, '081253702989', 'Kecil', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(10, '4577b7b4f6d44986a5b2613c6afa0b87', 'Krupuk Udang Dewi Mekar', 'Endang Sulistiani', '503/101/UKM-SBTN/XII/2015', 'Perum PKL Blok.B Rt.09', 'Usaha Kuliner', 0, 20000000, 1500000, 18000000, '082157109885', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(11, 'c8d781e84f034ca0ab4b0c2371904e8d', 'TITIK MANDIRI', 'TITIK', '8120210262405', 'PERUM PKL JL.KESEHATAN BLOK D NO. 632 RT.10 SEI KAPIH, SAMBUTAN, SAMARINDA', 'Usaha Kuliner', 4, 20000000, 20000000, 240000000, '085249672788', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(12, '9cdf0243ab9c4f2ab7cf8c0106c81dbe', 'Sembako', 'Muhammad noorluansyah', '503/39/IUMK-SBTAN/I/2018', 'Jl h.m.saleh arsyad rt.07', 'Usaha Sembako', 2, 50000000, 15000000, 1800000000, '085345878385', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(13, '85d2f07557754e4f91260d665ab19f16', 'Warung Sembako', 'Nagawulan', 'Tidak ada', 'Jl.Sungai kapih Rt.07', 'Usaha Sembako', 0, 1500000, 100000, 1200000, '0', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(14, 'eecc2896b3d74378961f959012b58c95', 'Kartini', 'Kartini', '-', 'Prum. Puri Indah', 'Usaha Kuliner', 1, 500000, 1500000, 18000000, '085393369644', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(15, '9c7735623fdf4975962d9b81efe8c2ea', 'Warung Sembako', 'Jamsah', 'Tidak ada', 'Jl.H.saleh Arsyad Rt.07', 'Usaha Sembako', 0, 2000000, 500000, 6000000, '0895704369078', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(16, '93f137767b2e4e5cbf14c1128491acfa', 'Jualan Tahu', 'Paiman', 'Tidak ada', 'Jl.Sejati Rt.18', 'Usaha Kuliner', 0, 750000, 6000000, 72000000, '082154721651', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(17, '8842b163ac374036ac75722a3f68f202', 'Warung sembako', 'Fathul Jannah', 'Tidak ada', 'Jl.Sungai  Kapih Rt.07', 'Usaha Sembako', 0, 2000000, 750000, 9000000, '085386894357', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(18, 'd4dd387cf85c4bb6a9fb85527efb9bf3', 'Ali Tailor', 'Juli', 'Tidak ada', 'Jl.HM.Saleh Arsyad Rt.07', 'Usaha Bidang Fashion', 2, 20000000, 5000000, 60000000, '081347550364', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(19, '3ab47d75d14e4a4f9bcb58948e92c7c4', 'Warung Sembako', 'Hj.Arsiah', 'Tidak ada', 'Jl.H.Marhusin Rt.01', 'Usaha Sembako', 0, 5000000, 1500000, 18000000, '085346374542', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(20, 'ca9f19d2f77f42ada0b47039637bbd1f', 'Krupuk Udang Mekar Indah', 'Sulastri', 'Tidak Ada', 'Perum PKL Blok.B  No. 698 Rt.09 ', 'Usaha Kuliner', 1, 20000000, 3000000, 36000000, '085348998336', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(21, 'f8875138d45e4723862aba91013afe9b', 'Warung Akmal', 'Arbainah', 'Tidak Ada', 'Jl.Sungai Kapih Gg.Swarga Rt.04', 'Usaha Sembako', 0, 1500000, 2000000, 24000000, '085250851423', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(22, '07a9f5d0fdf044f5a28eb70dfb4b9bb7', 'Batako', 'Muhrosi', 'Tidak Ada', 'Jl.Kehewanan Rt.08', 'Pembuatan Batako/ loster', 2, 20000000, 2000000, 24000000, '085334294833', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(23, '5800eec4a9f94a099fb4768fa1164ff0', 'Bengkel', 'Agus Sumianto', 'Ada', 'Jl.Kehewanan RT.08', 'Usaha Dibidang Otomotif', 1, 20000000, 2000000, 24000000, '085348105757', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(24, '86f5e3ea27b64348b81c5bc6616f1303', 'Toko Jesica', 'Nesya', 'Tidak Ada', 'Jl.Kehewanan Rt.08', 'Usaha Sembako', 1, 20000000, 3000000, 36000000, '081350443278', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(25, 'a7deff03d8cc4eb49f25fb375e19d582', 'Warung Gorengan', 'Fitri', 'Tidak Ada', 'Jl.Kehewanan Rt.08', 'Usaha Kuliner', 0, 300000, 3000000, 36000000, '087704508663', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(26, 'a2e5b56ce1fc4d68a006635422f0f6c7', 'Depo isi Ulang Tirta Bening', 'Bunidi', 'Tidak Ada', 'Jl.Kehewanan Rt.08', 'Usaha Depot Air Minum Isi Ulang', 0, 35000000, 1500000, 18000000, '087815063788', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(27, '2f6b6e5b0645429da4a3a2acb51b7202', 'Warung Artono', 'Sukiyem', 'Tidak Ada', 'Jl.Kehewanan Rt.08', 'Usaha Sembako', 0, 5000000, 300000, 3600000, '081334400065', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(28, '534975f3937e4af6a208427352700ccf', 'Warung Makan Mami Mani', 'Sumiati', 'Tidak Ada', 'Jl.Kehewanan Rt.08', 'Usaha Kuliner', 0, 350000, 350000, 4200000, '081253481423', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(29, '1c38013b0ea34a75baff6f3d677ded2c', 'Toko Condro', 'Yatno', 'Tidak Ada', 'Jl.Kehewanan Rt.08', 'Usaha Sembako', 0, 15000000, 300000, 3600000, '081250480148', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(30, '5f2934e55230474f9dece46f057e1939', 'Toko Hafizah', 'Ahmad  Badowi', 'Tidak Ada', 'Jl.Kehewanan Rt.08', 'Usaha Sembako', 0, 5000000, 1000000, 12000000, '08125325905', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(31, '0f71087d6190496d9cee7cac4b3ceb32', 'Toko Mama Supri', 'Sumarti', 'Tidak Ada', 'Jl.Kehewanan Rt.08', 'Usaha Sembako', 0, 15000000, 500000, 6000000, '081253093925', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(32, '23d4c4f643b6499b891de628edfd086d', 'Jualan Gorengan', 'Kustaniah', 'Tidak Ada', 'Jl.Tatako Rt.08', 'Usaha Kuliner', 0, 1000000, 900000, 10800000, '085246296961', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(33, '8412bc1b63dc4f41ad69872ad6dc9a82', 'Toko Aris', 'Abraha', 'Tidak Ada', 'Jl.Tatako Rt.08', 'Usaha Sembako', 0, 200000000, 1000000, 12000000, '081350863398', 'Kecil', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(34, 'ab8eb84aaa364267b8e25f9a9a10017c', 'Depo Isi Ulang Fadhil', 'Jumiatul Islamiah', 'Tidak Ada', 'Jl.Tatako Rt.08', 'Usaha Depot Air Minum Isi Ulang', 0, 50000000, 1000000, 12000000, '081258894422', 'Kecil', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(35, '42365948a189475ca7fb09f1102abcbd', 'Jualan Makanan', 'Fatimah', 'Tidak Ada', 'Jl.Tatako Rt.08', 'Usaha Kuliner', 0, 1000000, 2000000, 24000000, '082254757530', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(36, 'af0f50444b234a70aea22f95051199ed', 'Foto Copy Naura', 'Rabhiatul  Adawiah', '503/014/IUMK-SBTN/I/2018', 'Jl.Tatako Rt.08', 'Foto Copy', 0, 30000000, 2000000, 24000000, '085250182867', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(37, '5c9b28cc42d1431b8f0a63003d3af108', 'Warung Mie Ayam', 'Sumiati', 'Tidak Ada', 'Jl.Kehewanan Rt.08', 'Usaha Kuliner', 0, 1500000, 6000000, 72000000, '081250141986', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(38, 'b0eccc5c06c743908489b7152e5e85cb', 'Warung Barokah', 'Sutikno', '503/044/IUMK-SBTN/III/2017', 'Perum PKL Blok.B Rt.12', 'Usaha Kuliner', 3, 10000000, 9000000, 108000000, '082352614170', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(39, 'cbe0c465fabf4609b61f5b752076ba4b', 'Warung Nurjamila', 'Nurjamila', 'Tidak Ada', 'Jl.Sungai Kapih Gg.Rambai Rt.06', 'Usaha Sembako', 0, 10000000, 1200000, 14400000, '0', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(40, 'c9839e431b894e7abd0b9d504a7d3d5b', 'Depo Air Minum Malaka', 'Yakob Tefa', 'Tidak Ada', 'Jl.Sungai Kapih Gg.Rambai Rt.06', 'Usaha Depot Air Minum Isi Ulang', 0, 20000000, 10000000, 120000000, '085388149695', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(41, 'dd7649df06d34e0bab407916e42808b5', 'Warung Nada', 'Nada', 'Tidak Ada', 'Jl.Sungai Kapih Rt.06', 'Warung Kopi', 0, 1500000, 650000, 7800000, '0', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(42, '1d27fb7b36564a41951380dc6dedfa7e', 'Warung 2 Saudara', 'Santi Yunarti', 'Tidak Ada', 'Jl.Sungai Kapih Rt.06', 'Usaha Sembako', 0, 26000000, 3000000, 36000000, '0', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(43, '693935b6777641d5922bbfc307c3ea6a', 'Warung Dahlia', 'Dahlia', 'Tidak Ada', 'Jl.Sungai Kapih Gg.Widyagama Rt.06', 'Usaha Sembako', 0, 3500000, 1500000, 18000000, '0', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(44, '0a52baebe8b44eb0bcf1a333eb7a5f6f', 'Online Shop Umanya Dina', 'Mega', 'Tidak Ada', 'Jl.Sungai Kapih gg.Rambai Rt.06', 'online shop', 0, 500000, 2000000, 24000000, '085229116084', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(45, '7b54b5f8e5c04d7cbcf1adef15418bdd', 'Warung Isah', 'Siti Hanisah', 'Tidak Ada', 'Jl.Sungai Kapih Rt.06', 'Usaha Sembako', 0, 1000000, 800000, 9600000, '081254837373', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(46, '9f45844984134de88d0aa51f218265a4', 'Warung Rara', 'Lena', 'Tidak Ada', 'Jl.Sungai Kapih Rt.06', 'Usaha Sembako', 0, 20000000, 3000000, 36000000, '082377777818', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(47, '12765d791a4141a4bcc8569f6a9c3717', 'Warung Bu Nur', 'Nur', 'Tidak Ada', 'Jl.Sungai Kapih Rt.05', 'Usaha Sembako', 0, 10000000, 2000000, 24000000, '0', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(48, '6c456cb56c8d439facf00d6d357e6c55', 'Toko Nani', 'Nani Karlina', '503/015/IUMK', 'Jl.Sungai Kapih Rt.01', 'Usaha Sembako', 2, 50000000, 5000000, 60000000, '08125845247', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(49, 'b2fdfec65a7a45cba2bf59d36530d280', 'Belvina Cell', 'Nurul Hidayah', 'Tidak Ada', 'Jl.Sungai Kapih Rt.03', 'Jual pulsa dan pembayaran listrik', 3, 5000000, 1500000, 18000000, '08125303533', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(50, '0c3798aaada2459b8040a4b18ff70a8b', 'Depo Mahkota 2', 'Muhammad HS', 'Tidak Ada', 'Jl.Sungai Kapih Rt.03', 'Usaha Depot Air Minum Isi Ulang', 2, 35000000, 4000000, 48000000, '085249909292', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(51, 'd5d991ea29ce472aad1c51f380c64437', 'Kay On Celuler', 'Mita', 'Tidak Ada', 'Perum Puri Indah Rt.04', 'jual Pulsa', 1, 20000000, 5000000, 60000000, '087867183930', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(52, 'ec3bd37c07704b859f0472d4478d283b', 'Depo Air Minum Ikhza Tirta Barokah', 'Muhammad Taufik', 'Tidak Ada', 'Jl.Puri Indah Rt.04', 'Usaha Depot Air Minum Isi Ulang', 1, 50000000, 3000000, 36000000, '081350031501', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(53, 'dac045cc421d490da8de65ec0b8dae31', 'Toko Mahkota 2', 'Sadi', '9120009781569', 'Jl. Sei Kapih RT 03, Sambutan', 'Usaha Sembako', 2, 10000000, 20000000, 240000000, '081578407519', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(54, '9c558016b1fb4407b169eb98c4af97bd', 'Toko Mahkota 2', 'Sadi', '9120009781569', 'Jl. Sei Kapih RT 03, Sambutan', 'Usaha Sembako', 2, 10000000, 20000000, 240000000, '081578407519', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(55, '0faf4141a44d4a22a5eb78624d9efc82', 'Depot Air Minum Zahra', 'M.Zulkifli', 'Tidak Ada', 'Jl.HM.Saleh Arsyad Rt.07', 'Usaha Depot Air Minum Isi Ulang', 0, 40000000, 500000, 6000000, '085250227222', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(56, 'ee9035ff65d84dd8a1aa6ed9a3cb1296', 'Tpko Ocha Frozen', 'Endang Wahyuni', 'Tidak Ada', 'Perum PKL Blok.D Rt.10', 'Usaha Sembako', 0, 50000000, 500000, 15000000, '081253557744', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(57, '70b28ee5f480441fafae8892ab9ac702', 'Warung Tipan', 'Maskanah', '503/251/IUMK-SBTN/II/2016', 'Perum PKL Blok.D No.621 Rt.10', 'Usaha Sembako', 2, 15000000, 2000000, 24000000, '085250795552', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(58, 'b6442f13262149f3bb12eb1d18eda421', 'Rengginang Rahmat', 'Suparti', '503/253/IUMK-SBTN/I', 'Perum PKL Blok.D No.630 Rt.10', 'Usaha Kuliner', 0, 5000000, 1000000, 12000000, '085347527695', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(59, 'b0bd043e706d447d94c11f83b5c3a55f', 'Warung Nakan Nenek Abay', 'Arsiah', 'Tidak Ada', 'Jl.HM.saleh Arsyad Rt.07', 'Usaha Kuliner', 0, 1000000, 6000000, 72000000, '082151705121', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(60, 'faf05d3adfde4e7d90c5fa4fe254ccf1', 'Toko Aqilla', 'Wa Ode Suryani', 'Tidak Ada', 'Jl.HM.Saleh Arsyad Rt.07', 'Usaha Sembako', 0, 30000000, 9000000, 108000000, '081256669718', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(61, '722b51312d1344c5a9bb960b9e3ee460', 'Tukang Jahit Hilmah', 'Dani', 'Tidak Ada', 'Jl.HM.Saleh Arsyad Rt.07', 'Usaha Bidang Fashion', 0, 3000000, 2500000, 30000000, '085248873502', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(62, 'df7c589b7e234b84acd7593ca462b198', 'Djoragan Amplang', 'Khairul Anwar', '503/161/IUMK-SBTN/VII', 'Jl.HM.Saleh Arsyad Rt.07', 'Usaha Kuliner', 0, 20000000, 5000000, 60000000, '085247553340', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(63, 'b228d2fe019c4da3a4a394700796ab4a', 'Bengkel Andi Motor', 'Andi', 'Tidak Ada', 'Jl.HM.Saleh Arsyad Rt.07', 'Usaha Dibidang Otomotif', 0, 15000000, 4000000, 48000000, '085332867226', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(64, '2764d00f09be4f8eb5157f91de9806de', 'Warung Gado-gado Pasar Malam', 'Sumarsih', 'Tidak Ada', 'Jl.HM.saleh Arsyad Rt.07', 'Usaha Kuliner', 0, 800000, 3000000, 36000000, '082149233511', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(65, '58f2b1c44194423896f20d1787346882', 'Produk Herbal', 'Dasuki', 'Tidak Ada', 'Jl.HM.Saleh Arsyad Rt.07', 'Usaha produk herbal', 0, 400000, 1500000, 18000000, '082149233511', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(66, 'd49a1c1606fb432fa291dbf1d15693dd', 'Toko Dewi', 'Dewi', 'Tidak Ada', 'Jl.HM.saleh Arsyad Rt.24', 'Usaha Sembako', 0, 10000000, 1000000, 12000000, '08125576410', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(67, '21c67ca08512403c9730b256d8eef766', 'Loundry Mama Putri', 'Sundari', 'Tidak Ada', 'Jl.Baru Lestari Rt.07', 'Usaha Laundry', 0, 20000000, 1000000, 12000000, '082252161022', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(68, '227f44db4a3c463998a62b26ad48c605', 'Jual Baju dan Tas', 'Masrati', 'Tidak Ada', 'Jl.HM.Saleh Arsyad Rt.07', 'Usaha Bidang Fashion', 0, 6000000, 1000000, 12000000, '085346250400', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(69, '8eff01388f2d4f46ac3c88f871f0a4ef', 'Depo Air Minum MM', 'Mukio', 'Tidak Ada', 'Perum PKL Blok.B No.704 Rt.09', 'Usaha Depot Air Minum Isi Ulang', 0, 40000000, 5000000, 60000000, '081350777086', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(70, '77f88729ad1a4effb1175fa96b289db1', 'Warung HSK', 'Umriyah', 'Tidak Ada', 'Jl.Sungai Kapih Rt.03', 'Usaha Sembako', 0, 2000000, 1000000, 12000000, '087810320254', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(71, 'f567cad6d1464b558a6dbf6a1469aac9', 'Warung Epan', 'Anik Dwi Lestari', 'Tidak Ada', 'Jl.Puri Indah Perum Puri Blok.o No.2 Rt.002', 'Usaha Sembako', 0, 5000000, 1000000, 12000000, '081254207414', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(72, '44dd84fcb4a242bb9c72801e32e52282', 'Toko Risqi', 'Ismahatin', 'Tidak Ada', 'perum Puri Blok.G Rt.02', 'Usaha Sembako', 0, 200000, 700000, 8400000, '081346585820', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(73, '5a7899fa81c24763a229d8437ee8d5ff', 'Warung Aziy', 'Jumiati', 'Tidak Ada', 'Jl.Sungai Kapih Gg.Swarga Rt.04', 'Usaha Sembako', 0, 5000000, 6000000, 72000000, '081347665200', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(74, 'b6afe05295c7444f8023164ecbb0cb60', 'Warung Ibu Uyung', 'Arbainah', 'Tidak Ada', 'Jl.Sungai Kapih Gg.Swarga Rt.04', 'Usaha Sembako', 0, 5000000, 6000000, 72000000, '085250816316', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(75, '01cd696caf5e4a2db8de49e9134267ec', 'Usaha Gorengan', 'Misah', 'Tidak Ada', 'Jl.Sungai Kapih Gg.Swarga Rt.04', 'Usaha Kuliner', 0, 3000000, 4000000, 48000000, '0', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(76, 'b31c7bfb7dea4120abe1e1cc880923b8', 'Warung Donny', 'Ardiansyah', 'Tidak Ada', 'Jl.Sungai Kapih Gg.Swarga No.37 Rt.04', 'Usaha Sembako', 0, 5000000, 1000000, 12000000, '085250549277', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(77, '5bf56164c9f44988a55f03cce1971e70', 'Kacang Sembunyi Aurora', 'Selvi Riawati', 'Tidak Ada', 'Jl.Sungai Kapih Rt.03', 'Usaha Kuliner', 0, 600000, 1200000, 14400000, '082148245007', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(78, 'b7ae58c1652b42948acbf09efa0083d9', 'Toko Baju', 'Rusdiana', 'Tidak Ada', 'perum PKL Blok.B No.637 Rt.09', 'Usaha Bidang Fashion', 0, 20000000, 2000000, 20000000, '085246262029', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(79, '94086cd7d2fe47518b92026ecc114156', 'Toko Kaca', 'Budi Setiawan', 'Tidak Ada', 'Perum PKL Blok.D Rt.23', 'Usaha Kaca', 3, 10000000, 1000000, 12000000, '081346642192', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(80, 'a8047762febf41bf870ac04c71986ed2', 'Depo Air Minum MM', 'Muhammad Mukio', 'Tidak ada', 'Perum PKL Blok.B No.704 Rt.09', 'Usaha Depot Air Minum Isi Ulang', 0, 40000000, 5000000, 60000000, '081350777086', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(81, '689abed3269c4901b84fca98769e4b8d', 'Toko Risqi', 'Ismanatin', 'Tidak ada', 'Perum Puri Indah Blok.G Rt.02', 'Usaha Sembako', 0, 200000, 700000, 8400000, '081346585820', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(82, 'fedd3a10f28a453b8af40eadfecc1cfb', 'Warung Epan', 'Anik Dwi Lestari', 'Tidak Ada', 'Perum Puri Indah Blok.D No.2 Rt.02', 'Usaha Sembako', 0, 5000000, 1000000, 12000000, '081254207414', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(83, '200403dc144345b5978ae6cc0e969a57', 'Bahan Bangunan', 'Selvi Rianawati', 'Tidak Ada', 'Jl.sungai Kapih No.47 Rt.03', 'Bahan Bangunan', 0, 30000000, 2500000, 30000000, '082148245007', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(84, '3d9ee095d28d449eb0cf1cd02825c0f9', 'Kacang Sembunyi :Aurora\"', 'Selvi Rianawati', 'Tidak Ada', 'Jl.Sungai Kapih Rt.03', 'Usaha Kuliner', 0, 600000, 1200000, 14400000, '082148245007', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(85, 'a09171cc7c0840059b4059ae94902386', 'Warung HSK', 'Umriyah', 'Tidak Ada', 'Jl.Sungai Kapih Rt.03', 'Usaha Sembako', 0, 2000000, 1000000, 12000000, '087810320254', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(86, 'a27e65fc01c44062b74f95b20d6a2677', 'Warung Jawa Timur', 'Hj.Supiyati', 'Tidak Ada', 'Jl.Tatako Rt.08', 'Usaha Kuliner', 0, 2500000, 750000, 9000000, '082353291557', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(87, '4ebf8b3d6f57458f962c7629782116a0', 'Warung Acil', 'Rina', 'Tidak Ada', 'Jl.Tatako Rt.08', 'Usaha Kuliner', 0, 1500000, 2000000, 24000000, '085250708200', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(88, 'a9c40388b64e46e09b8b1693d6feca28', 'Toko Faisal', 'Suliadi', 'Tidak Ada', 'Jl.Tatako rt.08', 'Usaha Sembako', 0, 25000000, 2500000, 30000000, '081258177747', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(89, 'c8300f79e6fe485fa0b26869d46e475f', 'Warung Erwin', 'Erwin', 'Tidak Ada', 'Jl.Tatako Rt.08', 'Usaha Sembako', 0, 8000000, 2000000, 24000000, '082150773231', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(90, 'f86cbeee4d1e4056a69427a9fda787c2', 'Tidak Ada', 'Jaiyah', 'Tidak Ada', 'Jl.HM.Saleh Arsyad Rt.07', 'Usaha Sembako', 0, 3000000, 300000, 3600000, '0', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(91, '291a838878124e57a8949c419419060c', 'Tidak Ada', 'Isal', 'Tidak Ada', 'Jl.HM.Saleh Arsyad Rt.07', 'Usaha Sembako', 0, 1000000, 200000, 2400000, '081350063407', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(92, 'b7d511d7e9f947a7928f0958289e1dd8', 'Tidak Ada', 'Markasi', 'Tidak Ada', 'Jl.HM.saleh Arsyad Rt.07', 'Usaha Sembako', 0, 4000000, 350000, 4200000, '0', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(93, '4b2d23c20afa41978c259c287f9fb163', 'Tidak Ada', 'Basrah', 'Tidak Ada', 'Jl.HM.saleh Arsyad Gg.Masjid Rt.07', 'Usaha Sembako', 0, 5000000, 500000, 6000000, '085349744190', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(94, '51497808922347f998c5ab79139da1b7', 'Tidak Ada', 'Sukarno', 'Tidak Ada', 'Jl.HM.Saleh Arsyad Rt.07', 'Usaha Sembako', 0, 4000000, 400000, 4800000, '082156672653', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(95, '58a93a0e406b420385603edc60317400', 'Tidak Ada', 'Salmiah', 'Tidak Ada', 'Jl.HM.Saleh Arsyad Rt.07', 'Usaha Sembako', 0, 3000000, 300000, 3600000, '082154209609', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(96, '8c3eac461b144d9385017498a3cff2ca', 'Toko Ana', 'Ana', 'Tidak Ada', 'Jl.Sungai Kapih Rt.05', 'Usaha Kuliner', 0, 1000000, 500000, 6000000, '085346304221', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(97, 'e3aeeb1a469f480baf9a05d30baf054f', 'Tidak Ada', 'Saiful Ramadhan', 'Tidak ada', 'Jl.sungai Kapih Rt.01', 'Usaha Sembako', 0, 15000000, 1000000, 12000000, '082302300888', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(98, '52526882f904476a89311e53d4200ffa', 'Warung Aziy', 'Jumiati', 'Tidak Ada', 'Jl.Sungai Kapih Rt.04', 'Usaha Sembako', 0, 5000000, 6000000, 72000000, '081347665200', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(99, '25dce02a61bc459cbf0bf7029e365141', 'Tidak Ada', 'Jaiyah', 'Tidak Ada', 'Hl.HM.saleh Arsyad Rt.07', 'Usaha Sembako', 0, 3000000, 300000, 3600000, '0', 'Mikro', NULL, NULL, '2019-11-17 18:34:12', '2019-11-17 18:34:12'),
(199, 'c3ffad7fddb6488f96c3c57f0934323c', 'Penggilingan Daging SEjATI', 'Zaki Sahrin', '9120308701302', 'Perum PKL Blok B Gf.Ontorejo Rt.12', 'Usaha Kuliner', 1, 10150000, 2000000, 24000000, '81350607712', 'Mikro', '-0.45173083886408977', '117.17611083192139', '2019-11-20 12:34:29', '2019-11-20 12:43:02'),
(200, '2382029033ea48e2a99f424711a4841b', 'Kedai Bunda', 'Halimah', 'Tidal Ada', 'Perum PKL Blok B Rt.9', 'Usaha Kuliner', 15, 80000000, 60000000, 720000000, '81257483849', 'Kecil', '-0.47005509790086736', '117.1345258633545', '2019-11-20 12:36:07', '2019-11-20 12:42:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin Admin', 'admin@material.com', '2019-10-07 06:30:27', '$2y$10$/4k71BygZsAgtf3bQkatY.4G8Wtv6yAZhBg1y9uv4iuddwraZr8P6', NULL, '2019-10-07 06:30:27', '2019-10-07 06:30:27');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `foto_usaha`
--
ALTER TABLE `foto_usaha`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foto_usaha_id_idx` (`usaha_id`);

--
-- Indeks untuk tabel `longsor`
--
ALTER TABLE `longsor`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tahun`
--
ALTER TABLE `tahun`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `usaha`
--
ALTER TABLE `usaha`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `foto_usaha`
--
ALTER TABLE `foto_usaha`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `longsor`
--
ALTER TABLE `longsor`
  MODIFY `Id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tahun`
--
ALTER TABLE `tahun`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `usaha`
--
ALTER TABLE `usaha`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `foto_usaha`
--
ALTER TABLE `foto_usaha`
  ADD CONSTRAINT `foto_usaha_id` FOREIGN KEY (`usaha_id`) REFERENCES `usaha` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
