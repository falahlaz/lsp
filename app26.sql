-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Feb 2020 pada 03.04
-- Versi server: 10.4.10-MariaDB
-- Versi PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app26`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `assessor_answers`
--

CREATE TABLE `assessor_answers` (
  `id` int(11) NOT NULL,
  `id_participant` int(11) NOT NULL,
  `id_asesor` int(11) NOT NULL,
  `id_pertanyaan` int(11) NOT NULL,
  `jawaban` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `assessor_answers`
--

INSERT INTO `assessor_answers` (`id`, `id_participant`, `id_asesor`, `id_pertanyaan`, `jawaban`, `created_at`, `updated_at`) VALUES
(1, 2, 3, 2, 'V', '2020-02-12 14:22:22', '2020-02-12 14:22:22'),
(2, 2, 3, 3, 'A', '2020-02-12 14:22:22', '2020-02-12 14:22:22'),
(3, 2, 3, 5, 'A', '2020-02-12 14:22:22', '2020-02-12 14:22:22'),
(4, 2, 3, 6, 'A', '2020-02-12 14:22:22', '2020-02-12 14:22:22'),
(5, 2, 3, 7, 'A', '2020-02-12 14:22:22', '2020-02-12 14:22:22'),
(6, 2, 3, 8, 'V', '2020-02-12 14:22:22', '2020-02-12 14:22:22'),
(7, 2, 3, 9, 'A', '2020-02-12 14:22:22', '2020-02-12 14:22:22'),
(8, 2, 3, 10, 'V', '2020-02-12 14:22:22', '2020-02-12 14:22:22'),
(9, 2, 3, 11, 'A', '2020-02-12 14:22:22', '2020-02-12 14:22:22'),
(10, 2, 3, 12, 'V', '2020-02-12 14:22:22', '2020-02-12 14:22:22'),
(11, 2, 3, 13, 'A', '2020-02-12 14:22:22', '2020-02-12 14:22:22'),
(12, 7, 2, 2, 'T', '2020-02-13 02:24:00', '2020-02-13 02:24:00'),
(13, 7, 2, 3, 'V', '2020-02-13 02:24:00', '2020-02-13 02:24:00'),
(14, 7, 2, 5, 'A', '2020-02-13 02:24:00', '2020-02-13 02:24:00'),
(15, 7, 2, 6, 'T', '2020-02-13 02:24:00', '2020-02-13 02:24:00'),
(16, 7, 2, 7, 'T', '2020-02-13 02:24:00', '2020-02-13 02:24:00'),
(17, 7, 2, 8, 'M', '2020-02-13 02:24:00', '2020-02-13 02:24:00'),
(18, 7, 2, 9, 'T', '2020-02-13 02:24:00', '2020-02-13 02:24:00'),
(19, 7, 2, 10, 'V', '2020-02-13 02:24:00', '2020-02-13 02:24:00'),
(20, 7, 2, 11, 'A', '2020-02-13 02:24:00', '2020-02-13 02:24:00'),
(21, 7, 2, 12, 'A', '2020-02-13 02:24:00', '2020-02-13 02:24:00'),
(22, 7, 2, 13, 'T', '2020-02-13 02:24:00', '2020-02-13 02:24:00'),
(23, 7, 2, 19, 'M', '2020-02-13 02:24:00', '2020-02-13 02:24:00'),
(24, 7, 2, 20, 'T', '2020-02-13 02:24:00', '2020-02-13 02:24:00'),
(25, 7, 2, 21, 'A', '2020-02-13 02:24:00', '2020-02-13 02:24:00'),
(26, 7, 2, 22, 'T', '2020-02-13 02:24:00', '2020-02-13 02:24:00'),
(27, 7, 2, 23, 'A', '2020-02-13 02:24:00', '2020-02-13 02:24:00'),
(28, 7, 2, 24, 'T', '2020-02-13 02:24:00', '2020-02-13 02:24:00'),
(29, 7, 2, 25, 'V', '2020-02-13 02:24:00', '2020-02-13 02:24:00'),
(30, 7, 2, 26, 'A', '2020-02-13 02:24:00', '2020-02-13 02:24:00'),
(31, 7, 2, 27, 'M', '2020-02-13 02:24:00', '2020-02-13 02:24:00'),
(32, 7, 2, 28, 'T', '2020-02-13 02:24:00', '2020-02-13 02:24:00'),
(33, 7, 2, 29, 'A', '2020-02-13 02:24:00', '2020-02-13 02:24:00'),
(34, 7, 2, 30, 'V', '2020-02-13 02:24:00', '2020-02-13 02:24:00'),
(90, 12, 2, 31, 'V', '2020-02-13 08:28:18', '2020-02-13 08:28:18'),
(91, 12, 2, 32, 'V', '2020-02-13 08:28:18', '2020-02-13 08:28:18'),
(92, 12, 2, 33, 'V', '2020-02-13 08:28:18', '2020-02-13 08:28:18'),
(93, 12, 2, 34, 'V', '2020-02-13 08:28:18', '2020-02-13 08:28:18'),
(94, 12, 2, 35, 'V', '2020-02-13 08:28:18', '2020-02-13 08:28:18'),
(95, 12, 2, 36, 'V', '2020-02-13 08:28:18', '2020-02-13 08:28:18'),
(96, 12, 2, 37, 'V', '2020-02-13 08:28:18', '2020-02-13 08:28:18'),
(97, 12, 2, 38, 'V', '2020-02-13 08:28:18', '2020-02-13 08:28:18'),
(98, 12, 2, 39, 'V', '2020-02-13 08:28:18', '2020-02-13 08:28:18'),
(99, 12, 2, 40, 'V', '2020-02-13 08:28:18', '2020-02-13 08:28:18'),
(100, 12, 2, 41, 'V', '2020-02-13 08:28:18', '2020-02-13 08:28:18'),
(101, 12, 2, 42, 'V', '2020-02-13 08:28:18', '2020-02-13 08:28:18'),
(102, 12, 2, 43, 'V', '2020-02-13 08:28:18', '2020-02-13 08:28:18'),
(103, 12, 2, 44, 'V', '2020-02-13 08:28:18', '2020-02-13 08:28:18'),
(104, 12, 2, 45, 'V', '2020-02-13 08:28:18', '2020-02-13 08:28:18'),
(105, 12, 2, 46, 'V', '2020-02-13 08:28:18', '2020-02-13 08:28:18'),
(106, 12, 2, 47, 'V', '2020-02-13 08:28:18', '2020-02-13 08:28:18'),
(107, 12, 2, 48, 'V', '2020-02-13 08:28:18', '2020-02-13 08:28:18'),
(108, 12, 2, 49, 'V', '2020-02-13 08:28:18', '2020-02-13 08:28:18'),
(109, 12, 2, 50, 'V', '2020-02-13 08:28:18', '2020-02-13 08:28:18'),
(110, 12, 2, 51, 'V', '2020-02-13 08:28:18', '2020-02-13 08:28:18'),
(111, 12, 2, 52, 'V', '2020-02-13 08:28:18', '2020-02-13 08:28:18'),
(112, 12, 2, 53, 'V', '2020-02-13 08:28:18', '2020-02-13 08:28:18'),
(113, 12, 2, 54, 'V', '2020-02-13 08:28:18', '2020-02-13 08:28:18'),
(114, 12, 2, 55, 'V', '2020-02-13 08:28:18', '2020-02-13 08:28:18'),
(115, 12, 2, 56, 'V', '2020-02-13 08:28:19', '2020-02-13 08:28:19'),
(116, 12, 2, 57, 'V', '2020-02-13 08:28:19', '2020-02-13 08:28:19'),
(117, 12, 2, 58, 'V', '2020-02-13 08:28:19', '2020-02-13 08:28:19'),
(118, 12, 2, 59, 'V', '2020-02-13 08:28:19', '2020-02-13 08:28:19'),
(119, 12, 2, 60, 'V', '2020-02-13 08:28:19', '2020-02-13 08:28:19'),
(120, 12, 2, 61, 'V', '2020-02-13 08:28:19', '2020-02-13 08:28:19'),
(121, 12, 2, 62, 'V', '2020-02-13 08:28:19', '2020-02-13 08:28:19'),
(122, 12, 2, 63, 'V', '2020-02-13 08:28:19', '2020-02-13 08:28:19'),
(123, 12, 2, 64, 'V', '2020-02-13 08:28:19', '2020-02-13 08:28:19'),
(124, 12, 2, 65, 'V', '2020-02-13 08:28:19', '2020-02-13 08:28:19'),
(125, 12, 2, 66, 'V', '2020-02-13 08:28:19', '2020-02-13 08:28:19'),
(126, 12, 2, 67, 'V', '2020-02-13 08:28:19', '2020-02-13 08:28:19'),
(127, 12, 2, 68, 'V', '2020-02-13 08:28:19', '2020-02-13 08:28:19'),
(128, 12, 2, 69, 'V', '2020-02-13 08:28:19', '2020-02-13 08:28:19'),
(129, 12, 2, 70, 'V', '2020-02-13 08:28:19', '2020-02-13 08:28:19'),
(130, 12, 2, 71, 'V', '2020-02-13 08:28:19', '2020-02-13 08:28:19'),
(131, 12, 2, 72, 'V', '2020-02-13 08:28:19', '2020-02-13 08:28:19'),
(132, 12, 2, 73, 'V', '2020-02-13 08:28:19', '2020-02-13 08:28:19'),
(133, 12, 2, 74, 'V', '2020-02-13 08:28:19', '2020-02-13 08:28:19'),
(134, 12, 2, 75, 'V', '2020-02-13 08:28:19', '2020-02-13 08:28:19'),
(135, 12, 2, 76, 'V', '2020-02-13 08:28:19', '2020-02-13 08:28:19'),
(136, 12, 2, 77, 'V', '2020-02-13 08:28:19', '2020-02-13 08:28:19'),
(137, 12, 2, 78, 'V', '2020-02-13 08:28:19', '2020-02-13 08:28:19'),
(138, 12, 2, 79, 'V', '2020-02-13 08:28:19', '2020-02-13 08:28:19'),
(139, 12, 2, 80, 'V', '2020-02-13 08:28:19', '2020-02-13 08:28:19'),
(140, 12, 2, 81, 'V', '2020-02-13 08:28:19', '2020-02-13 08:28:19'),
(141, 12, 2, 82, 'V', '2020-02-13 08:28:19', '2020-02-13 08:28:19'),
(142, 12, 2, 83, 'V', '2020-02-13 08:28:19', '2020-02-13 08:28:19'),
(143, 12, 2, 84, 'V', '2020-02-13 08:28:19', '2020-02-13 08:28:19'),
(144, 12, 2, 85, 'V', '2020-02-13 08:28:19', '2020-02-13 08:28:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `clusters`
--

CREATE TABLE `clusters` (
  `id` int(11) NOT NULL,
  `no_cluster` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul_cluster` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `clusters`
--

INSERT INTO `clusters` (`id`, `no_cluster`, `judul_cluster`, `id_jurusan`, `created_at`, `updated_at`) VALUES
(1, '5.7.1', 'Instalasi Jaringan Komputer Berbasis Kabel', 1, '2020-01-27 10:36:00', '2020-01-27 10:36:00'),
(2, '5.7.2', 'Konfigurasi Perangkat Jaringan Komputer', 1, '2020-01-27 10:36:34', '2020-01-27 10:36:34'),
(3, '5.7.3', 'Konfigurasi Routing Pada Perangkat Jaringan Komputer', 1, '2020-01-27 10:37:02', '2020-01-27 10:37:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `competences`
--

CREATE TABLE `competences` (
  `id` int(11) NOT NULL,
  `kode_unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul_unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_standar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_klaster` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `competences`
--

INSERT INTO `competences` (`id`, `kode_unit`, `judul_unit`, `jenis_standar`, `id_klaster`, `created_at`, `updated_at`) VALUES
(1, 'J.611000.001.01', 'Mengumpulkan Kebutuhan Teknis Pengguna yang Menggunakan Jaringan', 'KKNI', 1, '2020-01-27 10:38:01', '2020-01-27 10:38:01'),
(2, 'J.611000.002.01', 'Mengumpulkan Data Perakitan Jaringan Dengan Teknologi yang Sesuai', 'KKNI', 1, '2020-01-27 10:38:25', '2020-02-11 01:39:14'),
(3, 'J.611000.008.02', 'Menyiapkan Kabel Jaringan', 'KKNI', 1, '2020-01-27 10:38:48', '2020-01-27 10:38:48'),
(4, 'J.611000.009.02', 'Memasang Kabel Jaringan', 'KKNI', 1, '2020-01-27 10:39:09', '2020-01-27 10:39:09'),
(5, 'J.611000.005.02', 'Menentukan Spesifikasi Perangkat Jaringan', 'KKNI', 2, '2020-01-27 10:39:52', '2020-01-27 10:39:52'),
(6, 'J.611000.010.02', 'Memasang Jaringan Nirkabel', 'KKNI', 2, '2020-01-27 10:40:20', '2020-01-27 10:40:20'),
(7, 'J.611000.003.02', 'Merancang Topologi Jaringan', 'KKNI', 2, '2020-01-27 10:40:47', '2020-01-27 10:40:47'),
(8, 'J.611000.004.01', 'Merancang Pengaiamatan Jaringan', 'KKNI', 2, '2020-01-27 10:42:06', '2020-01-27 10:42:06'),
(9, 'J.611000.012.02', 'Mengkonfigurasi Switch pada Jaringan', 'KKNI', 2, '2020-01-27 10:42:22', '2020-01-27 10:42:22'),
(10, 'J.611000.011.02', 'Memasang Perangkat Jaringan ke daiam Sistem Jaringan', 'KKNI', 2, '2020-01-27 10:42:43', '2020-01-27 10:42:43'),
(11, 'J.611000.013.02', 'Mengkonfigurasi Routing pada Perangkat Jaringan dalam Satu Autonomous System', 'KKNI', 3, '2020-01-27 10:43:03', '2020-01-27 20:35:57'),
(12, 'J.611000.015.01', 'Memonitor Keamanan dan Pengaturan Akun Pengguna dalam Jaringan Komputer', 'KKNI', 3, '2020-01-27 10:43:33', '2020-01-27 10:43:33'),
(13, 'J.611000.023.01', 'Mengganti Perangkat Jaringan Sesuai dengan Kebutuhan Baru', 'KKNI', 3, '2020-01-27 10:43:57', '2020-01-27 10:43:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `competency_element`
--

CREATE TABLE `competency_element` (
  `id` int(11) NOT NULL,
  `id_kompetensi` int(11) NOT NULL,
  `elemen_kompetensi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `competency_element`
--

INSERT INTO `competency_element` (`id`, `id_kompetensi`, `elemen_kompetensi`, `created_at`, `updated_at`) VALUES
(1, 3, 'Mempersiapkan peralatan dan bahan yang diperlukan', '2020-01-31 04:18:49', '2020-01-31 04:18:49'),
(2, 3, 'Memasang konektor pada kabel jaringan', '2020-01-31 04:19:54', '2020-01-31 04:19:54'),
(3, 3, 'Menguji koneksi kabel', '2020-01-31 04:20:22', '2020-01-31 04:20:22'),
(4, 4, 'Merencanakan pengkabelan horizontal', '2020-01-31 04:22:53', '2020-01-31 04:22:53'),
(5, 4, 'Menginstalasi pengkabelan horizontal', '2020-01-31 04:23:26', '2020-01-31 04:23:26'),
(6, 4, 'Membuat dokumentasi pengkabelan terstruktur horizontal', '2020-01-31 04:23:54', '2020-01-31 04:23:54'),
(9, 5, 'Mempersiapkan peralatan dan bahan/materi yang dibutuhkan', '2020-02-04 12:09:27', '2020-02-04 12:09:27'),
(10, 5, 'Mengumpulkan Informasi mengenai perangkat jaringan yang berada dipasaran', '2020-02-04 12:09:48', '2020-02-04 12:09:48'),
(11, 5, 'Menuliskan spesifikasi perangkat jaringan untuk keperluan pengguna', '2020-02-04 12:10:13', '2020-02-04 12:10:13'),
(12, 6, 'Menentukan spesifikasi perangkat', '2020-02-04 12:10:47', '2020-02-04 12:10:47'),
(13, 6, 'Menginstalasi perangkat', '2020-02-04 12:11:46', '2020-02-04 12:11:46'),
(14, 6, 'Menguji perangkat', '2020-02-04 12:12:21', '2020-02-04 12:12:21'),
(15, 7, 'Mempersiapkan peralatan dan bahan/materi yang diperlukan', '2020-02-04 12:12:45', '2020-02-04 12:12:45'),
(16, 7, 'Membuat spesifikasi topologi jaringan', '2020-02-04 12:13:07', '2020-02-04 12:13:07'),
(17, 8, 'Mengidentifikasi sistem operasi pada jaringan', '2020-02-04 12:13:28', '2020-02-04 12:13:28'),
(18, 8, 'Membagi alamat jaringan pada perangkat jaringan', '2020-02-04 12:13:48', '2020-02-04 12:13:48'),
(19, 8, 'Membagi alamat jaringan pada perangkat jaringan', '2020-02-04 12:14:15', '2020-02-04 12:14:15'),
(20, 9, 'Menentukan spesifikasi switch', '2020-02-04 12:14:42', '2020-02-04 12:14:42'),
(21, 9, 'Memilih Switch yang Tepat', '2020-02-04 12:14:58', '2020-02-04 12:14:58'),
(22, 9, 'Memasang switch', '2020-02-04 12:15:17', '2020-02-04 12:15:17'),
(23, 9, 'Menguji Switch pada Jaringan', '2020-02-04 12:15:37', '2020-02-04 12:15:37'),
(24, 10, 'Menetapkan persyaratan perangkat jaringan dari pengguna', '2020-02-04 12:16:01', '2020-02-04 12:16:01'),
(25, 10, 'Menyiapkan Perangkat Jaringan', '2020-02-04 12:16:20', '2020-02-04 12:16:20'),
(26, 10, 'Meng-install Perangkat Keras Jaringan', '2020-02-04 12:16:34', '2020-02-04 12:16:34'),
(27, 10, 'Menyediakan dukungan untuk produk-produk yang diinstal', '2020-02-04 12:16:49', '2020-02-04 12:16:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `nama_jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level_jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `departments`
--

INSERT INTO `departments` (`id`, `nama_jurusan`, `level_jurusan`, `created_at`, `updated_at`) VALUES
(1, 'Teknik Komputer dan Jaringan', 'Level II', '2020-01-27 10:30:14', '2020-01-27 10:30:14'),
(2, 'Teknik Kendaraan Ringan', 'Level II', '2020-01-27 10:30:14', '2020-01-27 10:30:14'),
(3, 'Teknik Audio Video', 'Level II', '2020-01-27 10:30:14', '2020-01-27 10:30:14'),
(4, 'Teknik Pemesinan', 'Level II', '2020-01-27 10:30:14', '2020-01-27 10:30:14'),
(5, 'Bisnis Konstruksi dan Properti', 'Level II', '2020-01-27 10:30:14', '2020-01-27 10:30:14'),
(6, 'Desain Pemodelan dan Informasi Bangunan', 'Level II', '2020-01-27 10:30:14', '2020-01-27 10:30:14'),
(7, 'Teknik Instalasi Tenaga Listrik', 'Level II', '2020-01-27 10:30:14', '2020-01-27 10:30:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_01_26_231509_create_departments_table', 1),
(5, '2020_01_27_012354_create_clusters_table', 1),
(6, '2020_01_27_012604_create_competences_table', 1),
(7, '2020_01_27_013147_create_tokens_table', 1),
(8, '2020_01_27_013208_create_registrations_table', 1),
(9, '2020_01_27_013235_create_participants_table', 1),
(10, '2020_01_27_140702_create_competency_element_table', 2),
(11, '2020_01_27_140913_create_questions_table', 2),
(12, '2020_01_27_141059_create_participant_answers_table', 2),
(13, '2020_01_27_141131_create_assessor_answers_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `participants`
--

CREATE TABLE `participants` (
  `id` int(11) NOT NULL,
  `id_registrasi` int(11) NOT NULL,
  `id_asesor` int(11) NOT NULL,
  `id_klaster` int(11) NOT NULL,
  `tempat_asesi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_mulai_asesi` date NOT NULL,
  `tanggal_selesai_asesi` date NOT NULL,
  `ket_bukti_kelengkapan_persyaratan_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket_bukti_kelengkapan_persyaratan_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket_bukti_kelengkapan_persyaratan_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket_bukti_kelengkapan_persyaratan_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ket_bukti_kompetensi_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket_bukti_kompetensi_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket_bukti_kompetensi_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket_bukti_kompetensi_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `participants`
--

INSERT INTO `participants` (`id`, `id_registrasi`, `id_asesor`, `id_klaster`, `tempat_asesi`, `tanggal_mulai_asesi`, `tanggal_selesai_asesi`, `ket_bukti_kelengkapan_persyaratan_1`, `ket_bukti_kelengkapan_persyaratan_2`, `ket_bukti_kelengkapan_persyaratan_3`, `ket_bukti_kelengkapan_persyaratan_4`, `ket_bukti_kompetensi_1`, `ket_bukti_kompetensi_2`, `ket_bukti_kompetensi_3`, `ket_bukti_kompetensi_4`, `status`, `keterangan`, `created_at`, `updated_at`) VALUES
(2, 1, 3, 1, 'SMK Negeri 26 Jakarta', '2020-01-02', '2020-02-19', 'Memenuhi Syarat', 'Memenuhi Syarat', 'Memenuhi Syarat', NULL, 'Ada', 'Ada', 'Ada', NULL, 'complete', NULL, '2020-01-27 13:48:52', '2020-02-12 14:53:01'),
(7, 2, 2, 1, 'SMK Negeri 26 Jakarta', '2020-02-20', '2019-12-25', 'Memenuhi Syarat', 'Memenuhi Syarat', 'Memenuhi Syarat', NULL, 'Ada', 'Ada', 'Ada', NULL, 'complete', NULL, '2020-02-08 01:39:14', '2020-02-12 19:26:17'),
(12, 4, 2, 2, 'SMK Negeri 26 Jakarta', '2021-02-01', '2021-02-01', 'Memenuhi Syarat', 'Memenuhi Syarat', 'Memenuhi Syarat', NULL, 'Ada', 'Ada', 'Ada', NULL, 'complete', NULL, '2020-02-13 08:03:31', '2020-02-13 01:28:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `participant_answers`
--

CREATE TABLE `participant_answers` (
  `id` int(11) NOT NULL,
  `id_participant` int(11) NOT NULL,
  `id_pertanyaan` int(11) NOT NULL,
  `jawaban` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `participant_answers`
--

INSERT INTO `participant_answers` (`id`, `id_participant`, `id_pertanyaan`, `jawaban`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 'K', '2020-02-11 02:19:18', '2020-02-11 02:19:18'),
(2, 2, 3, 'K', '2020-02-11 02:19:18', '2020-02-11 02:19:18'),
(3, 2, 5, 'BK', '2020-02-11 02:19:18', '2020-02-12 10:19:59'),
(4, 2, 6, 'K', '2020-02-11 02:19:18', '2020-02-11 02:19:18'),
(5, 2, 7, 'BK', '2020-02-11 02:19:18', '2020-02-12 10:20:03'),
(6, 2, 8, 'K', '2020-02-11 02:19:18', '2020-02-11 02:19:18'),
(7, 2, 9, 'K', '2020-02-11 02:19:18', '2020-02-11 02:19:18'),
(8, 2, 10, 'K', '2020-02-11 02:19:18', '2020-02-11 02:19:18'),
(9, 2, 11, 'BK', '2020-02-11 02:19:18', '2020-02-12 10:20:09'),
(10, 2, 12, 'K', '2020-02-11 02:19:18', '2020-02-11 02:19:18'),
(11, 2, 13, 'K', '2020-02-11 02:19:18', '2020-02-11 02:19:18'),
(12, 7, 2, 'K', '2020-02-13 02:12:43', '2020-02-13 02:12:43'),
(13, 7, 3, 'BK', '2020-02-13 02:12:43', '2020-02-13 02:12:43'),
(14, 7, 5, 'K', '2020-02-13 02:12:43', '2020-02-13 02:12:43'),
(15, 7, 6, 'BK', '2020-02-13 02:12:43', '2020-02-13 02:12:43'),
(16, 7, 7, 'K', '2020-02-13 02:12:43', '2020-02-13 02:12:43'),
(17, 7, 8, 'BK', '2020-02-13 02:12:43', '2020-02-13 02:12:43'),
(18, 7, 9, 'K', '2020-02-13 02:12:43', '2020-02-13 02:12:43'),
(19, 7, 10, 'K', '2020-02-13 02:12:43', '2020-02-13 02:12:43'),
(20, 7, 11, 'K', '2020-02-13 02:12:43', '2020-02-13 02:12:43'),
(21, 7, 12, 'BK', '2020-02-13 02:12:43', '2020-02-13 02:12:43'),
(22, 7, 13, 'BK', '2020-02-13 02:12:43', '2020-02-13 02:12:43'),
(23, 7, 19, 'K', '2020-02-13 02:12:43', '2020-02-13 02:12:43'),
(24, 7, 20, 'K', '2020-02-13 02:12:43', '2020-02-13 02:12:43'),
(25, 7, 21, 'BK', '2020-02-13 02:12:43', '2020-02-13 02:12:43'),
(26, 7, 22, 'K', '2020-02-13 02:12:43', '2020-02-13 02:12:43'),
(27, 7, 23, 'BK', '2020-02-13 02:12:43', '2020-02-13 02:12:43'),
(28, 7, 24, 'BK', '2020-02-13 02:12:43', '2020-02-13 02:12:43'),
(29, 7, 25, 'K', '2020-02-13 02:12:43', '2020-02-13 02:12:43'),
(30, 7, 26, 'K', '2020-02-13 02:12:43', '2020-02-13 02:12:43'),
(31, 7, 27, 'K', '2020-02-13 02:12:43', '2020-02-13 02:12:43'),
(32, 7, 28, 'BK', '2020-02-13 02:12:43', '2020-02-13 02:12:43'),
(33, 7, 29, 'K', '2020-02-13 02:12:43', '2020-02-13 02:12:43'),
(34, 7, 30, 'BK', '2020-02-13 02:12:43', '2020-02-13 02:12:43'),
(35, 12, 31, 'K', '2020-02-13 08:20:13', '2020-02-13 08:20:13'),
(36, 12, 32, 'BK', '2020-02-13 08:20:14', '2020-02-13 08:20:14'),
(37, 12, 33, 'K', '2020-02-13 08:20:14', '2020-02-13 08:20:14'),
(38, 12, 34, 'K', '2020-02-13 08:20:14', '2020-02-13 08:20:14'),
(39, 12, 35, 'K', '2020-02-13 08:20:14', '2020-02-13 08:20:14'),
(40, 12, 36, 'K', '2020-02-13 08:20:14', '2020-02-13 08:20:14'),
(41, 12, 37, 'BK', '2020-02-13 08:20:14', '2020-02-13 08:20:14'),
(42, 12, 38, 'K', '2020-02-13 08:20:14', '2020-02-13 08:20:14'),
(43, 12, 39, 'K', '2020-02-13 08:20:14', '2020-02-13 08:20:14'),
(44, 12, 40, 'K', '2020-02-13 08:20:14', '2020-02-13 08:20:14'),
(45, 12, 41, 'K', '2020-02-13 08:20:14', '2020-02-13 08:20:14'),
(46, 12, 42, 'K', '2020-02-13 08:20:14', '2020-02-13 08:20:14'),
(47, 12, 43, 'K', '2020-02-13 08:20:14', '2020-02-13 08:20:14'),
(48, 12, 44, 'K', '2020-02-13 08:20:14', '2020-02-13 08:20:14'),
(49, 12, 45, 'K', '2020-02-13 08:20:14', '2020-02-13 08:20:14'),
(50, 12, 46, 'K', '2020-02-13 08:20:14', '2020-02-13 08:20:14'),
(51, 12, 47, 'K', '2020-02-13 08:20:14', '2020-02-13 08:20:14'),
(52, 12, 48, 'K', '2020-02-13 08:20:14', '2020-02-13 08:20:14'),
(53, 12, 49, 'K', '2020-02-13 08:20:14', '2020-02-13 08:20:14'),
(54, 12, 50, 'K', '2020-02-13 08:20:14', '2020-02-13 08:20:14'),
(55, 12, 51, 'K', '2020-02-13 08:20:14', '2020-02-13 08:20:14'),
(56, 12, 52, 'K', '2020-02-13 08:20:14', '2020-02-13 08:20:14'),
(57, 12, 53, 'K', '2020-02-13 08:20:14', '2020-02-13 08:20:14'),
(58, 12, 54, 'K', '2020-02-13 08:20:14', '2020-02-13 08:20:14'),
(59, 12, 55, 'K', '2020-02-13 08:20:14', '2020-02-13 08:20:14'),
(60, 12, 56, 'K', '2020-02-13 08:20:14', '2020-02-13 08:20:14'),
(61, 12, 57, 'K', '2020-02-13 08:20:14', '2020-02-13 08:20:14'),
(62, 12, 58, 'K', '2020-02-13 08:20:14', '2020-02-13 08:20:14'),
(63, 12, 59, 'K', '2020-02-13 08:20:14', '2020-02-13 08:20:14'),
(64, 12, 60, 'K', '2020-02-13 08:20:14', '2020-02-13 08:20:14'),
(65, 12, 61, 'K', '2020-02-13 08:20:15', '2020-02-13 08:20:15'),
(66, 12, 62, 'K', '2020-02-13 08:20:15', '2020-02-13 08:20:15'),
(67, 12, 63, 'K', '2020-02-13 08:20:15', '2020-02-13 08:20:15'),
(68, 12, 64, 'K', '2020-02-13 08:20:15', '2020-02-13 08:20:15'),
(69, 12, 65, 'K', '2020-02-13 08:20:15', '2020-02-13 08:20:15'),
(70, 12, 66, 'K', '2020-02-13 08:20:15', '2020-02-13 08:20:15'),
(71, 12, 67, 'K', '2020-02-13 08:20:15', '2020-02-13 08:20:15'),
(72, 12, 68, 'K', '2020-02-13 08:20:15', '2020-02-13 08:20:15'),
(73, 12, 69, 'K', '2020-02-13 08:20:15', '2020-02-13 08:20:15'),
(74, 12, 70, 'K', '2020-02-13 08:20:15', '2020-02-13 08:20:15'),
(75, 12, 71, 'K', '2020-02-13 08:20:15', '2020-02-13 08:20:15'),
(76, 12, 72, 'K', '2020-02-13 08:20:15', '2020-02-13 08:20:15'),
(77, 12, 73, 'K', '2020-02-13 08:20:15', '2020-02-13 08:20:15'),
(78, 12, 74, 'K', '2020-02-13 08:20:15', '2020-02-13 08:20:15'),
(79, 12, 75, 'K', '2020-02-13 08:20:15', '2020-02-13 08:20:15'),
(80, 12, 76, 'K', '2020-02-13 08:20:15', '2020-02-13 08:20:15'),
(81, 12, 77, 'K', '2020-02-13 08:20:15', '2020-02-13 08:20:15'),
(82, 12, 78, 'K', '2020-02-13 08:20:15', '2020-02-13 08:20:15'),
(83, 12, 79, 'K', '2020-02-13 08:20:15', '2020-02-13 08:20:15'),
(84, 12, 80, 'K', '2020-02-13 08:20:15', '2020-02-13 08:20:15'),
(85, 12, 81, 'K', '2020-02-13 08:20:15', '2020-02-13 08:20:15'),
(86, 12, 82, 'K', '2020-02-13 08:20:15', '2020-02-13 08:20:15'),
(87, 12, 83, 'K', '2020-02-13 08:20:15', '2020-02-13 08:20:15'),
(88, 12, 84, 'K', '2020-02-13 08:20:15', '2020-02-13 08:20:15'),
(89, 12, 85, 'K', '2020-02-13 08:20:15', '2020-02-13 08:20:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `id_elemen_kompetensi` int(11) NOT NULL,
  `no_kuk` char(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `daftar_pertanyaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `questions`
--

INSERT INTO `questions` (`id`, `id_elemen_kompetensi`, `no_kuk`, `daftar_pertanyaan`, `created_at`, `updated_at`) VALUES
(2, 1, '1.1', 'Apakah anda dapat mengidentifikasi spesifikasi jaringan?', '2020-02-04 12:52:11', '2020-02-04 07:18:27'),
(3, 1, '1.2', 'Apakah anda dapat menyiapkan bahan-bahan yang diperlukan sesuai spesifikasi?', '2020-02-04 14:19:19', '2020-02-04 14:19:19'),
(5, 1, '1.3', 'Apakah anda dapat menyiapkan peralatan yang sesuai?', '2020-02-05 00:00:50', '2020-02-05 00:00:50'),
(6, 1, '1.4', 'Apakah anda dapat menyiapkan alat ukur untuk pengujian ?', '2020-02-05 00:00:50', '2020-02-05 00:00:50'),
(7, 2, '2.1', 'Apakah anda dapat memotong kabel sesuai keperluan dengan mempertimbangkan standar batasan panjang maksimum kabel ?', '2020-02-05 00:00:50', '2020-02-05 00:00:50'),
(8, 2, '2.2', 'Apakah anda dapat mengupas kabel sesuai dengan ukuran konektor ?', '2020-02-05 00:00:50', '2020-02-05 00:00:50'),
(9, 2, '2.3', 'Apakah anda dapat memasang konektor pada kabel sesuai dengan standar urutan warna?', '2020-02-05 00:00:50', '2020-02-05 00:00:50'),
(10, 2, '2.4', 'Apakah anda dapat memastikan urutan warna kabel (jika ada warna) sudah sesuai standar ?', '2020-02-05 00:00:50', '2020-02-05 00:00:50'),
(11, 2, '2.5', 'Apakah anda dapat memasang bagian kabel ke dalam konektor ?', '2020-02-05 00:00:50', '2020-02-05 00:00:50'),
(12, 3, '3.1', 'Apakah anda dapat menguji konektivitas antar pin pada kedua konektor yang berada di ujung kabel dengan menggunakan alat ukur ?', '2020-02-05 00:00:50', '2020-02-05 00:00:50'),
(13, 3, '3.2', 'Apakah anda dapat menguji hubungan antar perangkat jaringan untuk memastikan konektivitas pada jaringan ?', '2020-02-05 00:00:50', '2020-02-05 00:00:50'),
(19, 4, '1.1', 'Apakah anda dapat menyiapkan prosedur instalasi jaringan yang aman baik dari segi elektris maupun konstruksi ?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(20, 4, '1.2', 'Apakah anda dapat membuat diagram jalur perkabelan ?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(21, 4, '1.3', 'Apakah anda dapat menentukan Jadwal dan urutan penyelesaian pekerjaan ?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(22, 5, '2.1', 'Apakah anda dapat memasang soket RJ-45 pada dinding di wiring close ?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(23, 5, '2.2', 'Apakah anda dapat memasang perangkat dalam wiring closet ?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(24, 5, '2.3', 'Apakah anda dapat memasang terminal utama (main distribution frame) atau terminal cabang (intermediate distribution frame) jika diperlukan ?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(25, 5, '2.4', 'Apakah anda dapat menyiapkan Jalur kabel ?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(26, 5, '2.5', 'Apakah anda dapat melakukan pelabelan kabel dengan benar ?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(27, 6, '3.1', 'Apakah anda dapat menggambarkan topologi fisik jaringan ?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(28, 6, '3.2', 'Apakah anda dapat menggambarkan topologi logis jaringan ?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(29, 6, '3.3', 'Apakah anda dapat mencatat outlet dan jalur kabel ?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(30, 6, '3.4', 'Apakah anda dapat mendokumentasikan perangkat, MAC address dan IP address ?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(31, 9, '1.1', 'Apakah anda dapat menentukan topologi jaringan yang dibutuhkan perangkat baru?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(32, 9, '1.2', 'Apakah anda dapat membuat daftar perangkat jaringan dan membuat rancangan kapasitasnya?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(33, 9, '1.3', 'Apakah anda dapat mempersiapkan perangkat komputer yang akan terhubung ke jaringan?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(34, 10, '2.1', 'Apakah anda dapat membuat daftar perangkat jaringan yang dapat memenuhi kebutuhan dari berbagai vendor ?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(35, 10, '2.2', 'Apakah anda dapat menuliskan rentang kapasitas yang mencakup perangkat jaringan yang berada dipasaran ?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(36, 10, '2.3', 'Apakah anda dapat menentukan nilai kapasitas yang dapat dipenuhi oleh beberapa vendor ?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(37, 11, '3.1', 'Apakah anda dapat membuat dokumen spesifikasi perangkat jaringan ?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(38, 11, '3.2', 'Apakah anda dapat mengumpulkan spesifikasi yang sesuai dengan pasar dan kebutuhan ?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(39, 12, '1.1', 'Apakah anda dapat menetapkan kebutuhan detail dari perangkat sesuai dengan kebutuhan jaringan saat ini dan masa yang akan dating ?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(40, 12, '1.2', 'Apakah anda dapat menetapkan kapasitas jaringan saat ini dan masa yang akan datang sesuai dengan kebutuhan jumlah pengguna saat ini dan masa yang akan dating ?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(41, 12, '1.3', 'Apakah anda dapat menetapkan kebutuhan keamanan dan manajemen jaringan sesuai dengan kebutuhan jaringan ?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(42, 13, '2.1', 'Apakah anda dapat memilih perangkat dengan fitur yang tepat berdasarkan kebutuhan teknis ?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(43, 13, '2.2', 'Apakah anda dapat memasang perangkat sesuai dengan kebutuhan teknis ?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(44, 13, '2.3', 'Apakah anda dapat mengkonfigurasi perangkat nirkabel untuk dapat berinteraksi dengan perangkat jaringan lainnya ?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(45, 14, '3.1', 'Apakah anda dapat menetapkan rencana pengujian berdasarkan standar pengujian yang berlaku ?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(46, 14, '3.2', 'Apakah anda dapat melakukan penyesuaian jaringan sesuai dengan hasil pengujian ?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(47, 15, '1.1', 'Apakah anda dapat mengidentifikasi ruang lingkup jaringan sesuai dengan usulan ?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(48, 15, '1.2', 'Apakah anda dapat menghitung besarnya kapasitas jaringan berdasarkan kebutuhan bisnis ?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(49, 16, '2.1', 'Apakah anda dapat menentukan besaran bandwidth setiap segmen ?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(50, 16, '2.2', 'Apakah anda dapat memilih topologi lokasi penempatan perangkat jaringan dengan mempertimbangkan jarak dan jumlah pengguna ?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(51, 16, '2.3', 'Apakah anda dapat mempertimbangkan fitur-fitur fisik sebagai hasil dari desain jaringan ?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(52, 16, '2.4', 'Apakah anda dapat membuat peta jaringan sesuai dengan keadaan gedung/lapangan ?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(53, 16, '2.5', 'Apakah anda dapat menyusun rancangan kebutuhan perkabelan ?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(54, 16, '2.6', 'Apakah anda dapat memperhitungkan biaya keseluruhan ?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(55, 16, '2.7', 'Apakah anda dapat membuat analisis proyeksi pengembangan jaringan ?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(56, 17, '1.1', 'Apakah anda dapat mengidentifikasi sistem operasi yang berjalan di jaringan ?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(57, 17, '1.2', 'Apakah anda dapat mengumpulkan informasi cara menginstal dan mengkonfigurasi jaringan pada sistem operasi yang dipakai ?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(58, 18, '2.1', 'Apakah anda dapat menentukan jumlah node (host) jaringan berdasarkan kebutuhan pengguna ?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(59, 18, '2.2', 'Apakah anda dapat menentukan kelas atau segmen alamat jaringan berdasarkan besarnya jumlah node (host) jaringan ?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(60, 18, '2.3', 'Apakah anda dapat memberi alamat pada Node atau perangkat jaringan ?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(61, 19, '3.1', 'Apakah anda dapat mencatat alamat masing-masing node atau perangkat jaringan ?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(62, 19, '3.2', 'Apakah anda dapat membuat dokumentasi pengalamatan jaringan ?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(63, 20, '1.1', 'Apakah anda dapat menyesuaikan kapasitas jaringan berdasarkan dokumentasi kebutuhan bisnis saat ini ?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(64, 20, '1.2', 'Apakah anda dapat menetapkan tipe dan jumlah switch berdasarkan kebutuhan jaringan saat ini ?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(65, 21, '2.1', 'Apakah anda dapat memilih switch dengan fitur yang cocok sesuai kebutuhan ?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(66, 21, '2.2', 'Apakah anda dapat menyesuaikan jumlah port dengan kebutuhan jaringan. ?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(67, 22, '3.1', 'Apakah anda dapat memasang switch dan perangkat pendukungnya berdasarkan kebutuhan jaringan ?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(68, 22, '3.2', 'Apakah anda dapat menyambungkan kabel jaringan untuk menghubungkan antar switch atau perangkat jaringan lain ?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(69, 22, '3.3', 'Apakah anda dapat mengkonfigurasi switch dikonfigurasi berdasarkan kebutuhan jaringan ?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(70, 22, '3.4', 'Apakah anda dapat menempatkan switch di area yang aman ?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(71, 23, '4.1', 'Apakah anda dapat menguji perangkat switch berdasarkan petunjuk pengujian ?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(72, 23, '4.2', 'Apakah anda dapat memastikan ketersambungan perangkat switch dengan perangkat jaringan yang lain ?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(73, 24, '1.1', 'Apakah anda dapat mengidentifikasi perangkat jaringan sesuai dengan kebutuhan jaringan ?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(74, 24, '1.2', 'Apakah anda dapat menganalisa persyaratan sesuai kebutuhan teknis dan pengguna ?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(75, 24, '1.3', 'Apakah anda dapat mengevaluasi persyaratan pengguna sesuai pedoman organisasi ?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(76, 25, '2.1', 'Apakah anda dapat memilih perangkat jaringan sesuai dengan kebutuhan ?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(77, 25, '2.2', 'Apakah anda dapat mengevaluasi perangkat jaringan sesuai dengan kebutuhan ?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(78, 25, '2.3', 'Apakah anda dapat  menetapkan perangkat jaringan sesuai dengan kebutuhan ?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(79, 25, '2.4', 'Apakah anda dapat menetapkan peraturan lisensi dan keamanan ?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(80, 26, '3.1', 'Apakah anda dapat mengatur instalasi agar tidak ada gangguan pada operasional jaringan ?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(81, 26, '3.2', 'Apakah anda dapat memasang perangkat keras sesuai dengan prosedur instalasi ?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(82, 26, '3.3', 'Apakah anda dapat mengkonfigurasi instalasi sesuai kebutuhan pengguna ?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(83, 26, '3.4', 'Instalasi yang telah terpasang diuji untuk menjamin terpenuhinya kebutuhan pengguna.', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(84, 27, '4.1', 'Apakah anda dapat membuat dokumentasi petunjuk pengoperasian untuk pengguna ?', '2020-02-05 07:31:37', '2020-02-05 07:31:37'),
(85, 27, '4.2', 'Apakah anda dapat memberikan instruksi secara individu pada pengguna sesuai kebutuhan?', '2020-02-05 07:31:37', '2020-02-05 07:31:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `registrations`
--

CREATE TABLE `registrations` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` char(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kebangsaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_rumah` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_pos_rumah` int(11) NOT NULL,
  `no_telp_rumah` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_kantor` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan_terakhir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_perusahaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_perusahaan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_pos_perusahaan` int(11) NOT NULL,
  `no_telp_perusahaan` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_perusahaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_fax_perusahaan` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skema_sertifikasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_klaster` int(11) NOT NULL,
  `tujuan_asesmen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bukti_kelengkapan_persyaratan_1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bukti_kelengkapan_persyaratan_2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bukti_kelengkapan_persyaratan_3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bukti_kelengkapan_persyaratan_4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bukti_kompetensi_1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bukti_kompetensi_2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bukti_kompetensi_3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bukti_kompetensi_4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `registrations`
--

INSERT INTO `registrations` (`id`, `nama_lengkap`, `nik`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `kebangsaan`, `alamat_rumah`, `kode_pos_rumah`, `no_telp_rumah`, `no_hp`, `no_kantor`, `email`, `pendidikan_terakhir`, `nama_perusahaan`, `jabatan`, `alamat_perusahaan`, `kode_pos_perusahaan`, `no_telp_perusahaan`, `email_perusahaan`, `no_fax_perusahaan`, `skema_sertifikasi`, `id_klaster`, `tujuan_asesmen`, `bukti_kelengkapan_persyaratan_1`, `bukti_kelengkapan_persyaratan_2`, `bukti_kelengkapan_persyaratan_3`, `bukti_kelengkapan_persyaratan_4`, `bukti_kompetensi_1`, `bukti_kompetensi_2`, `bukti_kompetensi_3`, `bukti_kompetensi_4`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ashandi Leo', '111111111222', 'Jakarta', '2020-01-28', 'Laki-Laki', 'Indonesia', 'Pondok Bambu', 13430, '09021918108', '13123131312', '1231312313131', 'sandi@gmail.com', 'SMK', 'SMK 26', 'Siswa', 'Rawamangun', 14131, '123123131231', '26@gmail.com', '12313123131333', 'KKNI', 1, 'Sertifikasi', 'public/kelengkapan1/mSylipAPbX6H6qCd92ROUKFdL1Ncn1D2xuAkbj5C.png', 'public/kelengkapan2/tIWHTDfjsO7JoBLx3JEy3TT0ru2U0yJx8fdssYQE.png', 'public/kelengkapan3/PTbbO9bbhy9ngZ1hZgH8szkeAxIIIQyvJvY2X4pQ.png', NULL, 'public/kompetensi1/Nx63iROyi07AMTJb0jFlHoC75ExfcUMfFSdKTFSg.png', 'public/kompetensi2/e0L9vOkyXwlRe8dxhbJ0pEht04J4sSFTIn0nMoi3.png', 'public/kompetensi3/cPHuwb40Bk3A7dIFRW9bobCfXh8ulaYbnvlbYDxf.png', NULL, 'complete', '2020-01-27 10:54:48', '2020-02-12 14:53:56'),
(2, 'Al Falah Lazuardi M', '219312931803', 'Jakarta', '2020-02-13', 'Laki-Laki', 'Indonesia', 'Jalan Pondok Kelapa Raya', 123123, '01290310929', '10920929310', '8129092090', 'myprajurit@gmail.com', 'SMK', 'SMK Negeri 26 Jakarta', 'Siswa', 'Jalan Balai Pustaka Baru', 123112, '1231231123122', 'smkn26jkt@gmail.com', '12313123131313', 'KKNI', 1, 'Sertifikasi', 'public/kelengkapan1/4DL7sNXILHNhoa83QEbPozSMKQReZbKGKOqnl5PZ.png', 'public/kelengkapan2/cac0ftIAeWfwfBW12xKtwN0GVQZvxFli0EX6HRkh.png', 'public/kelengkapan3/qpImGYruaFv3gnNNEhFFxHegvhovLdObUegQ4fhC.png', NULL, 'public/kompetensi1/F5Yiu6jJFN1Az9UMXLciTsSKy30HGUAnkUQcMr4v.png', 'public/kompetensi2/Rphz919SgQj2TpPAfAsjZBP21MCveIS45tymfn3s.png', 'public/kompetensi3/oDSTolctKB8K52MmD8lTMLhmYT7NlnG3zEmxXJkO.png', NULL, 'complete', '2020-02-06 00:21:13', '2020-02-12 19:26:17'),
(3, 'aklsdmaskldma', '1231231311', 'akldmaslkdmlaks', '2020-02-12', 'Laki-Laki', 'Indonesia', 'aksdmalksdm', 13131231, '13123132', '131313123', '1231313', 'asdklmd@gmail.com', 'SMK', 'lkasmlaksdm', 'kasdmlkadskmlad', 'lkmaslkmsdkm', 109010, '1901209', 'kjadkmad@gmail.com', '12099012', 'KKNI', 1, 'Sertifikasi', 'kelengkapan1/gUrf1FPavwyVcXwdxHVkPkUwOeQ3t1WgeZoH81fR.png', 'kelengkapan2/Z4Y6atVkeDnBPNHsLbCeZIBrkSH5VSZVI6QMY8qd.png', 'kelengkapan3/Cv0rMa7qUtIg8HAoDST6yl0ifX0jM5EvdFf4br5Q.png', NULL, 'kompetensi1/Vc3bDewkzkaC5z93xU54iydHHbyhtrqze4zvuPRc.png', 'kompetensi2/pOP56uIXrCVSRZmKuZpHR8ayC5k0hxYeTGDQaAmR.png', 'kompetensi3/yMpCNCFGzpcSizDeWkKE6xWuhVwOIO86m4awzMv3.png', NULL, 'pending', '2020-02-12 09:58:07', '2020-02-13 08:02:58'),
(4, 'aklsdmaskldma', '1231231311', 'akldmaslkdmlaks', '2020-02-12', 'Laki-Laki', 'Indonesia', 'aksdmalksdm', 13131231, '13123132', '131313123', '1231313', 'asdklmd@gmail.com', 'SMK', 'lkasmlaksdm', 'kasdmlkadskmlad', 'lkmaslkmsdkm', 109010, '1901209', 'kjadkmad@gmail.com', '12099012', 'KKNI', 2, 'Sertifikasi', 'public/kelengkapan1/EfoV2R3pmoUozxLuxmSsecd4GxFZks7KhwDJqY2z.png', 'public/kelengkapan2/42Egw1igPMzYOaziZpuHCRTrlFro5WvL87r6N6E9.png', 'public/kelengkapan3/YrFWj7Sbt7IjQJamji710wJrJQZQieVhklvaK6Ld.png', NULL, 'public/kompetensi1/FYnDp71nfRrnffCwbiH8BljEFs2KVrtClui5qWch.png', 'public/kompetensi2/X4Bf9OVQUZIf2lZAHSusSghonwET1uILfJAFtdCU.png', 'public/kompetensi3/kc8coRuqlhvQJqTHCHiBaK4eUi5OK26QejblNbO6.png', NULL, 'complete', '2020-02-12 10:02:24', '2020-02-13 01:28:26'),
(5, 'skadlsdklsalkakl', '212313123231', 'slddskladskml', '2020-02-21', 'Laki-Laki', 'aslkadsklklm', 'lkmassadkml', 1312, '123123123', '12312312', '12312321', 'asksdak@gmail.com', 'jadsk', 'klmasdmlk', 'amldmaslkdm', 'asklmdaskldm', 1213, '112312', 'aklsdmsal@gmail.com', '312312312', 'KKNI', 1, 'Sertifikasi', 'public/kelengkapan1/aZOAzE9IEZOQLDBUNQpeNWTdESrim0tJllEvWlWf.png', 'public/kelengkapan2/tF1h4p0jSbwxcnKi0nQpdfr2C4mrqgnzm7QKFghT.png', 'public/kelengkapan3/e8mJGZfRk3YnNmSXkQuHuOBTQbkGT3A8v28LxcIX.png', NULL, 'public/kompetensi1/oEpeyjArpsWe02NbJCgFClyhuErtwnAFbcmh21IQ.png', 'public/kompetensi2/Tp3vlhCcIPfRTK6Euzopbzr2roqwvYYP8PeFKLZc.png', 'public/kompetensi3/mePASsnB2BW7g2eIHTd8Kad2aZokJvswXPuopUAH.png', NULL, 'pending', '2020-02-14 07:39:26', '2020-02-14 07:39:26'),
(6, 'Adam', '12938129031', 'askdakj', '2021-01-01', 'Laki-Laki', 'alskdmalk', 'masldmaslk', 213123, '2312414', '1312312123', '1231231312', 'adam@gmail.com', 'askdaknj', 'askjnkadsj', 'kjansdkads', 'kjsaddjkasdn', 211221, '12212', 'askjdas@gmail.com', '12312321', 'KKNI', 3, 'Sertifikasi', '1581817955.png', '1581817955.png', '1581817955.png', NULL, '1581817955.png', '1581817955.png', '1581817955.png', NULL, 'pending', '2020-02-16 01:52:35', '2020-02-16 01:52:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tokens`
--

CREATE TABLE `tokens` (
  `id` int(11) NOT NULL,
  `id_participant` int(11) NOT NULL,
  `token` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tokens`
--

INSERT INTO `tokens` (`id`, `id_participant`, `token`, `created_at`, `updated_at`) VALUES
(6, 2, 'FMqVCSfx1JBpL4tp6pVPLC25lu2vx6', '2020-02-08 01:37:09', '2020-02-11 01:10:16'),
(8, 45, 'X0nlj4bQPqOKEjw7WSfQrErbY3v0', '2020-02-11 01:20:20', '2020-02-11 01:20:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `no_reg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_jurusan` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `no_reg`, `nama_lengkap`, `email`, `password`, `role`, `id_jurusan`, `created_at`, `updated_at`) VALUES
(1, 'asknlknlad', 'smkn26', 'smkn26jkt@gmail.com', '$2y$10$obEUp0mC9oLeJehanaiepe1TpUeuyRBaVNCby8o3.9O/Tfy3x61ny', 'admin', NULL, '2020-01-26 20:41:26', '2020-02-08 10:25:03'),
(2, 'Met. 000.007622.2016', 'Al Falah Lazuardi M', 'falah@gmail.com', '$2y$10$HSPJ/HVsYzzOhqarGOH4yOhQlbqh2aMidBXhTfmuBb0itP9heCt92', 'asesor', 1, '2020-01-27 10:31:52', '2020-02-08 10:25:18'),
(3, 'Met. 000.007622.2017', 'M Faris Rizky', 'faris@gmail.com', '$2y$10$/yCCtSWfJFZUwcRzU1AhC.HCbnawEDxWnjUSkXuoEs6voiTLoOE5G', 'asesor', 1, '2020-01-27 13:09:01', '2020-02-08 10:25:24');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `assessor_answers`
--
ALTER TABLE `assessor_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `clusters`
--
ALTER TABLE `clusters`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `competences`
--
ALTER TABLE `competences`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `competency_element`
--
ALTER TABLE `competency_element`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `participant_answers`
--
ALTER TABLE `participant_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `assessor_answers`
--
ALTER TABLE `assessor_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT untuk tabel `clusters`
--
ALTER TABLE `clusters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `competences`
--
ALTER TABLE `competences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `competency_element`
--
ALTER TABLE `competency_element`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `participants`
--
ALTER TABLE `participants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `participant_answers`
--
ALTER TABLE `participant_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT untuk tabel `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT untuk tabel `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
