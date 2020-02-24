-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jan 2020 pada 16.25
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lsp26`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `clusters`
--

CREATE TABLE `clusters` (
  `id` int(11) NOT NULL,
  `no_cluster` varchar(255) NOT NULL,
  `judul_cluster` varchar(255) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `clusters`
--

INSERT INTO `clusters` (`id`, `no_cluster`, `judul_cluster`, `id_jurusan`, `created_at`, `updated_at`) VALUES
(1, '5.7.1', 'Instalasi Jaringan Komputer', 5, '2020-01-06 14:23:28', '2020-01-06 14:23:28'),
(3, '5.7.2', 'Instalasi Komputasi Awan', 5, '2020-01-07 13:29:35', '2020-01-07 13:29:35'),
(4, '5.7.3', 'Membuat Perangkat Lunak dengan Database', 5, '2020-01-07 13:29:44', '2020-01-07 06:34:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `competences`
--

CREATE TABLE `competences` (
  `id` int(11) NOT NULL,
  `kode_unit` varchar(255) NOT NULL,
  `judul_unit` varchar(255) NOT NULL,
  `jenis_standar` varchar(255) NOT NULL,
  `id_klaster` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `competences`
--

INSERT INTO `competences` (`id`, `kode_unit`, `judul_unit`, `jenis_standar`, `id_klaster`, `created_at`, `updated_at`) VALUES
(4, 'J.611000.012.02', 'Mengkonfigurasi Switch pada Jaringan', 'KKNI', 1, '2020-01-07 14:07:39', '2020-01-07 14:07:39'),
(6, 'J.611000.013.02', 'Mengkonfigurasi Routing pada Perangkat Jaringan dalam  Satu Autonomous System', 'KKNI', 1, '2020-01-07 14:27:00', '2020-01-07 14:27:00'),
(8, 'J.611000.014.02', 'Mengkonfigurasi Routing pada Perangkat Jaringan antar  Autonomous System', 'KKNI', 1, '2020-01-07 14:29:00', '2020-01-07 07:29:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `nama_jurusan` varchar(255) NOT NULL,
  `level_jurusan` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `departments`
--

INSERT INTO `departments` (`id`, `nama_jurusan`, `level_jurusan`, `created_at`, `updated_at`) VALUES
(1, 'Teknik Tenaga Listrik', 'Level III', '2020-01-06 13:59:13', '2020-01-06 13:59:13'),
(2, 'Teknik Fabrikasi Logam dan Manufaktur', 'Level III', '2020-01-06 13:59:13', '2020-01-06 13:59:13'),
(3, 'Teknik Elektronika Daya dan Komunikasi', 'Level III', '2020-01-06 14:00:45', '2020-01-06 14:00:45'),
(4, 'Teknik dan Manajemen Perawatan Otomotif', 'Level III', '2020-01-06 14:00:45', '2020-01-06 14:00:45'),
(5, 'Sistem Informatika Jaringan dan Aplikasi', 'Level III', '2020-01-06 14:00:45', '2020-01-06 14:00:45'),
(6, 'Desain Interior dan Teknik Furnitur', 'Level III', '2020-01-06 14:00:45', '2020-01-06 14:00:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `registrations`
--

CREATE TABLE `registrations` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `kebangsaan` varchar(255) NOT NULL,
  `alamat_rumah` text NOT NULL,
  `kode_pos_rumah` int(11) NOT NULL,
  `no_telp_rumah` int(11) NOT NULL,
  `no_hp` int(11) NOT NULL,
  `no_kantor` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pendidikan_terakhir` varchar(255) NOT NULL,
  `nama_perusahaan` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `alamat_perusahaan` text NOT NULL,
  `kode_pos_perusahaan` int(11) NOT NULL,
  `no_telp_perusahaan` int(11) NOT NULL,
  `email_perusahaan` varchar(255) NOT NULL,
  `no_fax_perusahaan` int(11) NOT NULL,
  `skema_sertifikasi` varchar(255) NOT NULL,
  `id_klaster` int(11) NOT NULL,
  `tujuan_asesmen` varchar(255) NOT NULL,
  `bukti_kelengkapan_persyaratan_1` text NOT NULL,
  `bukti_kelengkapan_persyaratan_2` text NOT NULL,
  `bukti_kelengkapan_persyaratan_3` text NOT NULL,
  `bukti_kelengkapan_persyaratan_4` text NOT NULL,
  `bukti_kompetensi_1` text NOT NULL,
  `bukti_kompetensi_2` text NOT NULL,
  `bukti_kompetensi_3` text NOT NULL,
  `bukti_kompetensi_4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `role` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'smkn26jkt@gmail.com', 'admin', '$2y$10$ux.9SL3XQy9Pn6Liudc8o.3uAOdpuBRzVgF07fUi6hKmQEgRyceci', 'admin', '2020-01-04 17:24:36', '2020-01-05 09:32:56'),
(3, 'falah@gmail.com', 'falahlazass', '$2y$10$oTRoTv4IAtiuLBDh5mGr4OY85mDi9L8gCQi7JdqxuywyahN.SNr3O', 'admin', '2020-01-05 13:09:23', '2020-01-05 07:55:37');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `clusters`
--
ALTER TABLE `clusters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_jurusan` (`id_jurusan`);

--
-- Indeks untuk tabel `competences`
--
ALTER TABLE `competences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_klaster` (`id_klaster`);

--
-- Indeks untuk tabel `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_klaster` (`id_klaster`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `clusters`
--
ALTER TABLE `clusters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `competences`
--
ALTER TABLE `competences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `clusters`
--
ALTER TABLE `clusters`
  ADD CONSTRAINT `clusters_ibfk_1` FOREIGN KEY (`id_jurusan`) REFERENCES `departments` (`id`);

--
-- Ketidakleluasaan untuk tabel `competences`
--
ALTER TABLE `competences`
  ADD CONSTRAINT `competences_ibfk_1` FOREIGN KEY (`id_klaster`) REFERENCES `clusters` (`id`);

--
-- Ketidakleluasaan untuk tabel `registrations`
--
ALTER TABLE `registrations`
  ADD CONSTRAINT `registrations_ibfk_1` FOREIGN KEY (`id_klaster`) REFERENCES `clusters` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
