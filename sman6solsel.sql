-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jun 2020 pada 10.47
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
-- Database: `sman6solsel`
--

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
(3, '2014_10_12_000000_create_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_guru`
--

CREATE TABLE `tbl_guru` (
  `id` int(11) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `nama_guru` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `alamat_guru` varchar(100) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` varchar(20) NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_guru`
--

INSERT INTO `tbl_guru` (`id`, `nip`, `nama_guru`, `jenis_kelamin`, `no_telp`, `alamat_guru`, `tempat_lahir`, `tgl_lahir`, `status`, `created_at`, `updated_at`) VALUES
(22, '196807021992031006', 'Syamsuria, S.Pd. MM', 'L', '-', '-', 'Barung-Barung Belanti', '1968-07-02', 'Kepala Sekolah', '2020-03-27 00:36:59', '2020-04-02 01:26:28'),
(23, '196810031993032003 ', 'Mintarsia Hazda,S.Pd.Ing', 'P', '-', '-', 'Padang Panjang', '1968-10-03', 'Wakil Sarana Prasarana', '2020-03-27 00:39:07', '2020-03-27 00:39:07'),
(24, '197805202003122006', 'Elva Darnita,S.Pd', 'P', '-', '-', 'Palembang', '1978-05-20', 'Wakil Kesiswaan', '2020-03-27 00:40:48', '2020-03-27 00:40:48'),
(26, '197410312006042001', 'Helda Hayani,S.Pd', 'P', '-', '-', 'Kinari', '1974-10-31', 'Wakil Kurikulum', '2020-03-27 00:53:30', '2020-03-27 00:53:30'),
(27, '198205072014062010', 'Eldina Salma Suriani', 'P', '-', '-', 'Surian', '1982-05-07', 'Kepala Tata Usaha', '2020-03-27 00:54:39', '2020-03-27 00:54:39'),
(28, '197608162005011008', 'Dany Syahputra,S.Pd', 'L', '-', '-', 'Kuala', '1976-08-16', 'Guru Tetap', '2020-03-27 00:56:15', '2020-03-27 00:56:15'),
(29, '197306112005012008', 'Hendra Eka Putri,S.Pd', 'P', '-', '-', 'Ladang Lawas', '1973-06-11', 'Guru Tetap', '2020-03-27 00:58:14', '2020-03-27 00:58:14'),
(30, '197801252006042002', 'Sri Mulyati,S.Pd', 'P', '-', '-', 'Padang', '1978-01-25', 'Guru Tetap', '2020-03-27 00:59:12', '2020-03-27 00:59:12'),
(31, '197708142006042026', 'Leni Setyowati,S.Pd', 'P', '-', '-', 'Padang', '1977-08-14', 'Guru Tetap', '2020-03-27 01:00:56', '2020-03-27 01:00:56'),
(32, '198201302006042027', 'Tetri Alia Nova,S.Pd', 'P', '-', '-', 'Solok', '1982-01-30', 'Guru Tetap', '2020-03-27 01:02:00', '2020-03-27 01:02:00'),
(34, '198206202009012006', 'Loly Asvitasari,SE', 'P', '-', '-', 'Padang', '1982-06-20', 'Guru Tetap', '2020-03-27 01:04:33', '2020-03-27 01:04:33'),
(35, '197708232010012006', 'Roza Ardianti Zain,S.Sos', 'P', '-', '-', 'Padang', '1977-08-23', 'Guru Tetap', '2020-03-27 01:05:30', '2020-03-27 01:05:30'),
(36, '197908202010012015', 'Siti Aisyah,S.Sos I', 'P', '-', '-', 'Padang Aro', '1979-08-20', 'Guru Tetap', '2020-03-27 01:07:16', '2020-03-27 01:07:16'),
(37, '198312282010011017', 'Afrinaldi,S.Si', 'L', '-', '-', 'Bariang', '1983-12-28', 'Guru Tetap', '2020-03-27 01:08:15', '2020-03-27 01:08:15'),
(38, '198802182010012021', 'Melzi Febrika,M.Pd', 'P', '-', '-', 'Durian Tarung', '1988-02-18', 'Guru Tetap', '2020-03-27 01:09:17', '2020-03-27 01:09:17'),
(39, '198409192010012040', 'Rini Putriyanita,S.Psi', 'P', '-', '-', 'Bedeng Dua', '1984-09-18', 'Guru Tetap', '2020-03-27 01:10:31', '2020-03-27 01:10:31'),
(40, '197606212010012009', 'Hendrawati, S.Pd', 'P', '-', '-', 'Padang', '1976-06-21', 'Guru Tetap', '2020-03-27 01:11:35', '2020-03-27 01:11:35'),
(41, '198107132011012004', 'Fitriani,S.Pd', 'P', '-', '-', 'Jujun', '1981-07-12', 'Guru Tetap', '2020-03-27 01:12:36', '2020-03-27 01:12:36'),
(42, '198004082014062006', 'Sasmawarni, S.Pd', 'P', '-', '-', 'Simp. Padang Aro', '1980-04-08', 'Guru Tetap', '2020-03-27 01:13:41', '2020-03-27 01:13:41'),
(43, '197811082014062007', 'Wetra Yulita, S.Hi', 'P', '-', '-', 'Bariang', '1978-09-08', 'Guru Tetap', '2020-03-27 01:14:43', '2020-03-27 01:14:43'),
(56, '197407291999032001', 'Helda,S.Pd', 'P', '-', '-', 'Pulau Kijang', '1974-07-29', 'Guru Tetap', '2020-04-12 07:07:08', '2020-04-12 07:07:08'),
(57, '197312052005012004', 'Desriwanti,S.Pd', 'P', '-', '-', 'Bandar Buat', '1973-12-05', 'Guru Tetap', '2020-04-12 07:09:06', '2020-04-12 07:09:06'),
(58, '197608022005012006', 'Tristina,S.Si', 'P', '-', '-', 'Lolo', '1976-08-02', 'Guru Tetap', '2020-04-12 07:27:08', '2020-04-12 07:27:08'),
(59, '000000000000000001', 'Sri Marnila,S.Pd', 'P', '-', '-', '-', '2020-04-01', 'Guru Tetap', '2020-04-12 23:46:00', '2020-04-12 23:46:00'),
(60, '000000000000000002', 'Yuni Damayanti,S.Pd', 'P', '-', '-', '-', '2020-04-01', 'Guru Tetap', '2020-04-12 23:47:19', '2020-04-12 23:47:19'),
(61, '000000000000000003', 'Sentia Elsori,S.Pd', 'P', '-', '-', '-', '2020-04-01', 'Guru Tetap', '2020-04-12 23:48:31', '2020-04-12 23:48:31'),
(62, '000000000000000004', 'Risha Khairati, S.Pd', 'P', '-', '-', '-', '2020-04-01', 'Guru Tetap', '2020-04-12 23:49:37', '2020-04-12 23:49:37'),
(63, '000000000000000005', 'Debi Gusnedi', 'L', '-', '-', '-', '2020-04-01', 'Guru Tetap', '2020-04-14 03:23:31', '2020-04-14 03:23:31'),
(64, '000000000000000006', 'Delni Nota Rosman', 'P', '-', '-', '-', '2020-04-01', 'Guru Tetap', '2020-04-14 03:24:34', '2020-04-14 03:24:34'),
(65, '000000000000000007', 'Zurvareni', 'P', '-', '-', '-', '2020-04-01', 'Guru Tetap', '2020-04-14 03:25:25', '2020-04-14 03:25:25'),
(66, '000000000000000008', 'Nadia Permata Sari', 'P', '-', '-', '-', '2020-04-01', 'Guru Tetap', '2020-04-14 03:26:46', '2020-04-14 03:26:46'),
(67, '000000000000000009', 'Anova Liona', 'P', '-', '-', '-', '2020-04-01', 'Guru Tetap', '2020-04-14 03:27:40', '2020-04-14 03:27:40'),
(68, '000000000000000010', 'Rafika Yani', 'P', '-', '-', '-', '2020-04-01', 'Guru Tetap', '2020-04-14 03:29:19', '2020-04-14 03:29:19'),
(69, '000000000000000011', 'Fiza Gusyerni', 'P', '-', '-', '-', '2020-04-01', 'Guru Tetap', '2020-04-14 03:30:21', '2020-04-14 03:30:21'),
(70, '000000000000000012', 'Atin Martalina', 'P', '-', '-', '-', '2020-04-01', 'Guru Tetap', '2020-04-14 03:31:13', '2020-04-14 03:31:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jadwal`
--

CREATE TABLE `tbl_jadwal` (
  `id` int(5) NOT NULL,
  `semester` enum('Ganjil','Genap') NOT NULL,
  `thn_ajar` varchar(10) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `j_masuk` varchar(10) NOT NULL,
  `j_keluar` varchar(7) NOT NULL,
  `id_kelas` varchar(10) NOT NULL,
  `mata_pelajaran` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kelas`
--

CREATE TABLE `tbl_kelas` (
  `id` int(11) NOT NULL,
  `id_siswa` varchar(255) NOT NULL,
  `id_walas` int(3) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`id`, `id_siswa`, `id_walas`, `created_at`, `updated_at`) VALUES
(92, '0041938597', 46, NULL, NULL),
(93, '0047013587', 46, NULL, NULL),
(94, '0035457138', 47, NULL, NULL),
(95, '0041698348', 47, NULL, NULL),
(96, '000000000000099', 50, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_nilai`
--

CREATE TABLE `tbl_nilai` (
  `id` int(5) NOT NULL,
  `id_siswa` int(5) NOT NULL,
  `id_pelajaran` int(5) NOT NULL,
  `nilai` int(5) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_nilai`
--

INSERT INTO `tbl_nilai` (`id`, `id_siswa`, `id_pelajaran`, `nilai`, `created_at`, `updated_at`) VALUES
(1, 26, 99, 100, NULL, NULL),
(2, 27, 81, 90, '2020-04-19 14:11:36', '2020-04-19 14:11:36'),
(3, 31, 81, 50, '2020-04-19 14:44:21', '2020-04-19 14:44:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pelajaran`
--

CREATE TABLE `tbl_pelajaran` (
  `id` int(3) NOT NULL,
  `id_guru` int(3) NOT NULL,
  `mata_pelajaran` varchar(100) NOT NULL,
  `cakupan` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pelajaran`
--

INSERT INTO `tbl_pelajaran` (`id`, `id_guru`, `mata_pelajaran`, `cakupan`, `created_at`, `updated_at`) VALUES
(81, 43, 'PKN', 'X', '2020-04-14 02:54:50', '2020-04-14 02:54:50'),
(82, 38, 'Matematika', 'X', '2020-04-14 02:56:30', '2020-04-14 02:56:30'),
(83, 56, 'Sejarah', 'X', '2020-04-14 02:57:23', '2020-04-14 02:57:23'),
(84, 40, 'Bahasa Inggris', 'X', '2020-04-14 02:58:01', '2020-04-14 02:58:01'),
(85, 61, 'Matematika', 'X', '2020-04-14 03:02:45', '2020-04-14 03:02:45'),
(86, 28, 'PJOK', 'X', '2020-04-14 03:09:27', '2020-04-14 03:09:27'),
(87, 60, 'Prakarya/ Ekonomi', 'X', '2020-04-14 03:11:17', '2020-04-14 03:11:17'),
(88, 26, 'Matematika', 'X', '2020-04-14 03:12:09', '2020-04-14 03:12:09'),
(92, 57, 'Geografi', 'X', '2020-04-14 03:17:56', '2020-04-14 03:17:56'),
(93, 59, 'Sosiologi', 'X', '2020-04-14 03:19:03', '2020-04-14 03:19:03'),
(94, 35, 'Sosiologi', 'X', '2020-04-14 03:19:33', '2020-04-14 03:19:33'),
(95, 34, 'Ekonomi', 'X', '2020-04-14 03:20:14', '2020-04-14 03:20:14'),
(96, 41, 'Layanan TIK', 'X', '2020-04-14 03:21:09', '2020-04-14 03:21:09'),
(99, 66, 'Seni Budaya', 'X', '2020-04-14 03:35:26', '2020-04-14 03:35:26'),
(102, 67, 'Fisika', 'X', '2020-04-14 03:37:33', '2020-04-14 03:37:33'),
(105, 30, 'Kimia', 'X', '2020-04-14 03:52:53', '2020-04-14 03:52:53'),
(106, 29, 'Biologi', 'X', '2020-04-14 04:01:56', '2020-04-14 04:01:56'),
(107, 70, 'Pendidikan Agama Islam', 'X', '2020-04-14 04:06:03', '2020-04-14 04:06:03'),
(108, 65, 'Bahasa Indonesia', 'X', '2020-04-14 04:06:24', '2020-04-14 04:06:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pel_perkelas`
--

CREATE TABLE `tbl_pel_perkelas` (
  `id` int(11) NOT NULL,
  `id_walas` int(11) NOT NULL,
  `id_matapelajaran` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pel_perkelas`
--

INSERT INTO `tbl_pel_perkelas` (`id`, `id_walas`, `id_matapelajaran`, `created_at`, `updated_at`) VALUES
(1, 46, 99, '2020-04-19 04:34:25', '2020-04-19 04:34:25'),
(2, 46, 81, '2020-04-19 04:34:56', '2020-04-19 04:34:56'),
(3, 46, 82, '2020-04-19 04:36:30', '2020-04-19 04:36:30'),
(4, 46, 83, '2020-04-19 04:36:42', '2020-04-19 04:36:42'),
(5, 46, 84, '2020-04-19 04:36:55', '2020-04-19 04:36:55'),
(6, 47, 81, '2020-04-19 04:37:41', '2020-04-19 04:37:41'),
(7, 47, 82, '2020-04-19 04:37:52', '2020-04-19 04:37:52'),
(8, 47, 83, '2020-04-19 04:38:03', '2020-04-19 04:38:03'),
(9, 47, 84, '2020-04-19 04:38:14', '2020-04-19 04:38:14'),
(10, 47, 86, '2020-04-19 04:38:27', '2020-04-19 04:38:27'),
(11, 46, 86, '2020-04-19 07:21:06', '2020-04-19 07:21:06'),
(12, 46, 96, '2020-06-20 01:25:07', '2020-06-20 01:25:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengguna`
--

CREATE TABLE `tbl_pengguna` (
  `id` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`id`, `foto`) VALUES
(32, 'admin.png'),
(34, 'user.jpg'),
(41, 'admin.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `id` int(3) NOT NULL,
  `nis` varchar(30) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tgl_lahir` varchar(20) NOT NULL,
  `alamat_siswa` varchar(100) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `status_siswa` enum('Aktif','Alumni') NOT NULL,
  `tahun_daftar` varchar(5) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`id`, `nis`, `nama_siswa`, `tempat_lahir`, `tgl_lahir`, `alamat_siswa`, `jenis_kelamin`, `no_hp`, `status_siswa`, `tahun_daftar`, `created_at`, `updated_at`) VALUES
(26, '0041938597', 'Aniatul Wasni', '-', '2020-04-01', '-', 'P', '-', 'Aktif', '2019', '2020-04-12 23:57:08', '2020-04-12 23:57:08'),
(27, '0047013587', 'Arijal Siddik', '-', '2020-04-01', '-', 'L', '-', 'Aktif', '2019', '2020-04-12 23:58:04', '2020-04-12 23:58:04'),
(29, '0035457138', 'Agung Tri Setyo', '-', '2020-04-01', '-', 'L', '-', 'Aktif', '2019', '2020-04-13 00:02:09', '2020-04-13 00:02:09'),
(31, '0041698348', 'Alifa  Maulina', '-', '2020-04-01', '-', 'P', '-', 'Aktif', '2019', '2020-04-13 00:03:57', '2020-04-13 00:03:57'),
(32, '0033203774', 'Aldia Mukti', '-', '2020-04-01', '-', 'P', '-', 'Aktif', '2019', '2020-04-13 00:06:03', '2020-04-13 00:06:03'),
(33, '0032433840', 'Aliyasmin', '-', '2020-04-01', '-', 'L', '-', 'Aktif', '2019', '2020-04-13 00:07:01', '2020-04-13 00:07:01'),
(34, '0031573031', 'Andika Kurniawan', '-', '2020-04-01', '-', 'L', '-', 'Aktif', '2019', '2020-04-13 00:08:31', '2020-04-13 00:08:31'),
(35, '0046552519', 'Andini Fibrian Nafitri', '-', '2020-04-01', '-', 'P', '-', 'Aktif', '2019', '2020-04-13 00:09:59', '2020-04-13 00:09:59'),
(37, '0041089812', 'Akhzan Pranata', '-', '2020-04-01', '-', 'L', '-', 'Aktif', '2019', '2020-04-13 00:11:59', '2020-04-13 00:11:59'),
(38, '0041699936', 'Bunga Citra Cantika', '-', '2020-04-01', '-', 'P', '-', 'Aktif', '2019', '2020-04-13 00:13:02', '2020-04-13 00:13:02'),
(39, '0041759217', 'Dzal Fahmi', '-', '2020-04-01', '-', 'L', '-', 'Aktif', '2019', '2020-04-13 00:13:48', '2020-04-13 00:13:48'),
(40, '0031591102', 'Abel Julita', '-', '2020-04-01', '-', 'P', '-', 'Aktif', '2019', '2020-04-13 00:14:56', '2020-04-13 00:14:56'),
(41, '0036019424', 'Ahmad Afrianto', '-', '2020-04-01', '-', 'L', '-', 'Aktif', '2019', '2020-04-13 00:15:37', '2020-04-13 00:15:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(3) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `alamat_user` varchar(100) NOT NULL,
  `level` enum('Admin','Guru','Siswa') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `nama_lengkap`, `jenis_kelamin`, `no_telp`, `alamat_user`, `level`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'Administrator', 'Laki-Laki', '083181707070', 'Jl. Belakang Pondok No 26', 'Admin', NULL, NULL),
(7, '103039791810048', '12345', 'Abdullah Azam', 'Laki-Laki', '-', 'Paguah Duku', 'Siswa', NULL, NULL),
(8, '103039791810047', '12345', 'Ade Septio', 'Laki-Laki', '-', 'Paguah Duku', 'Siswa', NULL, NULL),
(10, '1157735637200013', '1234', 'Jauhar Muiz', 'Laki-Laki', '-', 'Kurai Taji', 'Guru', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_walas`
--

CREATE TABLE `tbl_walas` (
  `id` int(11) NOT NULL,
  `nama_walas` varchar(50) NOT NULL,
  `kelas_walas` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_walas`
--

INSERT INTO `tbl_walas` (`id`, `nama_walas`, `kelas_walas`, `created_at`, `updated_at`) VALUES
(46, 'Melzi Febrika,M.Pd', 'X-MIA-1', '2020-04-12 23:26:07', '2020-04-12 23:26:07'),
(47, 'Hendrawati, S.Pd', 'X-MIA-2', '2020-04-12 23:27:01', '2020-04-12 23:27:01'),
(48, 'Dany Syahputra,S.Pd', 'X-MIA-3', '2020-04-12 23:27:41', '2020-04-12 23:27:41'),
(49, 'Roza Ardianti Zain,S.Sos', 'X-IIS-1', '2020-04-12 23:28:36', '2020-04-12 23:28:36'),
(50, 'Desriwanti,S.Pd', 'X-IIS-2', '2020-04-12 23:29:29', '2020-04-12 23:29:29'),
(51, 'Wetra Yulita, S.Hi', 'X-IIS-3', '2020-04-12 23:30:05', '2020-04-12 23:30:05'),
(52, 'Loly Asvitasari,SE', 'X-IIS-4', '2020-04-12 23:30:37', '2020-04-12 23:30:37'),
(53, 'Tristina,S.Si', 'XI-MIA-1', '2020-04-12 23:32:18', '2020-04-12 23:32:18'),
(54, 'Afrinaldi,S.Si', 'XI-MIA-2', '2020-04-12 23:32:52', '2020-04-12 23:32:52'),
(55, 'Sri Marnila,S.Pd', 'XI-IIS-1', '2020-04-12 23:34:29', '2020-04-12 23:35:21'),
(56, 'Yuni Damayanti,S.Pd', 'XI-IIS-2', '2020-04-12 23:35:09', '2020-04-12 23:35:09'),
(57, 'Sentia Elsori,S.Pd', 'XI-IIS-3', '2020-04-12 23:36:06', '2020-04-12 23:36:06'),
(58, 'Risha Khairati, S.Pd', 'XII-MIA-1', '2020-04-12 23:37:00', '2020-04-12 23:37:00'),
(59, 'Hendra Eka Putri,S.Pd', 'XII-MIA-2', '2020-04-12 23:37:37', '2020-04-12 23:37:37'),
(60, 'Sri Mulyati, S.Pd', 'XII-MIA-3', '2020-04-12 23:38:44', '2020-04-12 23:38:44'),
(61, 'Siti Aisyah, S.Sos I', 'XII-IIS-1', '2020-04-12 23:39:33', '2020-04-12 23:39:33'),
(62, 'Tetri Alia Nova,S.Pd', 'XII-IIS-2', '2020-04-12 23:40:24', '2020-04-12 23:40:24'),
(63, 'Helda,S.Pd', 'XII-IIS-3', '2020-04-12 23:41:03', '2020-04-12 23:41:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `password`, `created_at`, `updated_at`) VALUES
(1, 'a', 'a@gmail.com', '2', '$2y$10$KLz5QWitORLlj6c/9F1lLeiaaQZ4nFuYHdNz65MtLZPQcKxKqJKbG', '2020-06-20 02:39:38', '2020-06-20 02:39:38'),
(2, 'Admin', 'admin@gmail.com', '1', '$2y$10$9m.GlikON0YZXzo4VccnkOqJhQRay2JJv328191B3nqKUcbGbFn52', '2020-06-20 22:22:08', '2020-06-20 22:22:08'),
(3, 'Joni', 'joni', '3', '$2y$10$etiGKYRWmAxRZv8/ZR/nT./VCfMNYT6Y5.MbGRv0cscCsIu7c9d1C', '2020-06-20 23:47:22', '2020-06-20 23:47:22'),
(4, 'Doyok', '131100096', '3', '$2y$10$3kSti1oN7.b58f3dOa9pi.CVzEmAvmroyc3Ype5cXuJX8LRPKaCCS', '2020-06-20 23:51:01', '2020-06-20 23:51:01');

--
-- Indexes for dumped tables
--

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
-- Indeks untuk tabel `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_pelajaran`
--
ALTER TABLE `tbl_pelajaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_pel_perkelas`
--
ALTER TABLE `tbl_pel_perkelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_walas`
--
ALTER TABLE `tbl_walas`
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
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_guru`
--
ALTER TABLE `tbl_guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT untuk tabel `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT untuk tabel `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;

--
-- AUTO_INCREMENT untuk tabel `tbl_pelajaran`
--
ALTER TABLE `tbl_pelajaran`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT untuk tabel `tbl_pel_perkelas`
--
ALTER TABLE `tbl_pel_perkelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tbl_walas`
--
ALTER TABLE `tbl_walas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
