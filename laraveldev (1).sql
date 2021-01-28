-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 28 Jan 2021 pada 02.16
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laraveldev`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cat_project`
--

CREATE TABLE `cat_project` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Nama_Filter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Link_Filter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cat_project`
--

INSERT INTO `cat_project` (`id`, `Nama_Filter`, `Link_Filter`, `created_at`, `updated_at`) VALUES
(31, 'Web', 'Web', '2021-01-26 06:13:27', '2021-01-26 06:13:27'),
(32, 'E-Government', 'E-Government', '2021-01-26 06:13:42', '2021-01-26 06:13:42'),
(33, 'Web aplikasi', 'Web aplikasi', '2021-01-26 06:15:29', '2021-01-26 06:15:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cliens`
--

CREATE TABLE `cliens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Poster` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cliens`
--

INSERT INTO `cliens` (`id`, `Poster`, `Name`) VALUES
(2, 'http://localhost/CODE/Company-PP/storage/photos/1/CLIENS/kominfo_2_0.jpg', 'KOMINFO'),
(3, 'http://localhost/CODE/Company-PP/storage/photos/1/NB.png', 'SMK NUSA BANGSA'),
(4, 'http://localhost/CODE/Company-PP/storage/photos/1/CLIENS/download (1).jpeg', 'SMK AlMUHAJIRIN DEPOK'),
(5, 'http://localhost/CODE/Company-PP/storage/photos/1/CLIENS/download.jpeg', 'SMK Al-ASIYAH'),
(6, 'http://localhost/CODE/Company-PP/storage/photos/1/CLIENS/tvri.png', 'TVRI'),
(7, 'http://localhost/CODE/Company-PP/storage/photos/1/CLIENS/main_1489740282.jpg', 'POHO'),
(8, 'http://192.168.43.238/CODE/Company-PP/public//storage/photos/1/CLIENS/tvri.png', 'POHO'),
(9, 'http://192.168.43.238/CODE/Company-PP/public//storage/photos/1/NB.png', 'POHO');

-- --------------------------------------------------------

--
-- Struktur dari tabel `developer`
--

CREATE TABLE `developer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name_Developer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `github` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Bidang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Poster` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `developer`
--

INSERT INTO `developer` (`id`, `Name_Developer`, `facebook`, `github`, `Bidang`, `Deskripsi`, `Poster`) VALUES
(12, 'Dasep Purnama Hidayatullah, S.T', 'https://www.facebook.com/dasep.purnama.hidayatullah', 'Dasepur', 'Ahli Sistem Analis', 'http://dasep.net/', 'http://192.168.43.238/CODE/Company-PP/public//storage/photos/1/developers/WhatsApp Image 2021-01-27 at 09.04.22.jpeg'),
(13, 'Aldiyar, S.Kom', 'https://www.facebook.com/aldiyart92', '#', ' Front-End & Mobile', 'Belum Tersedia', 'http://192.168.43.238/CODE/Company-PP/public//storage/photos/1/developers/WhatsApp Image 2021-01-27 at 09.39.41.jpeg'),
(14, 'Muhammad Fauzan Aldi', '#', '#', 'Backend', 'Belum Tersedia', 'http://192.168.43.238/CODE/Company-PP/public//storage/photos/1/developers/WhatsApp Image 2021-01-27 at 10.38.49.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name_Menu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id`, `Name_Menu`, `link`) VALUES
(1, 'HOME', '#'),
(2, 'Cliens', '#hero'),
(3, 'Tentang Kami', '#about'),
(4, 'Layanan Kami', '#services'),
(5, 'Developers', '#team'),
(6, 'Portfolio', '#portfolio'),
(7, 'Contact', '#contact');

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
(2, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2021_01_15_065014_create_sessions_table', 1),
(10, '2014_10_12_100000_create_password_resets_table', 2),
(11, '2020_05_21_100000_create_teams_table', 2),
(12, '2020_05_21_200000_create_team_user_table', 2),
(13, '2020_05_21_300000_create_team_invitations_table', 2),
(14, '2021_01_13_014620_create_menu_table', 2),
(15, '2021_01_13_014649_create_setting_table', 2),
(16, '2021_01_13_014706_create_developer_table', 2),
(17, '2021_01_13_014723_create_project_table', 2),
(18, '2021_01_13_064638_create_cat_project_table', 2),
(19, '2021_01_17_115421_create_views_table', 3),
(20, '2021_01_18_034520_create_testimonies_table', 4),
(24, '2021_01_25_142529_create_servides_table', 5),
(25, '2021_01_25_142552_create_cliens_table', 5),
(26, '2021_01_25_142619_create_q_a_s_table', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@admin.com', '$2y$10$51GpN.oLvHjiyDv1TGXV/e6ndVip4Gey.aCjgUUUcAw.Ha5TEr7gy', '2021-01-25 05:12:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `project`
--

CREATE TABLE `project` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name_Project` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Pemesan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `filter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `project`
--

INSERT INTO `project` (`id`, `Name_Project`, `Img`, `Pemesan`, `link`, `Deskripsi`, `filter`, `created_at`, `updated_at`) VALUES
(20, 'SMK Nusa Bangsa', 'http://localhost/CODE/Company-PP/storage/photos/1/SMK Nusa Bangsa.png', 'SMK Nusa Bangsa', 'http://smknusabangsabogor.sch.id/', 'Web', 'Web', '2021-01-26 08:26:21', '2021-01-26 08:26:21'),
(21, 'PUSTEKOLAH.ORG', 'http://localhost/CODE/Company-PP/storage/photos/1/pustekolah.jpg', 'Pusat Penelitian dan Pengembangan Hasil Hutan', 'www.pustekolah.org', 'pustekolah yang saat ini berganti dengan nama P3HH (Pusat Penelitian dan Pengembangan Hasil Hutan) merupakan salahsatu bagian dari Badan Penelitian, Pengembangan dan Inovasi dibawah Kemeterian Kehutanan dan Lingkungan Hidup.\r\n\r\nSalahsatu produk P3HH adalah berupa hasil penelitian untuk pengelolaan hasil hutan. Website ini merupakan sarana untuk memberikan informasi kepada publik mengenai semua kegiatan dan hasil penelitian yang dilakukan P3HH.', 'Web', '2021-01-26 21:44:10', '2021-01-26 21:44:10'),
(22, 'PUSLITBANGHUT.OR.ID', 'http://localhost/CODE/Company-PP/storage/photos/1/puskonser.jpg', 'Pusat Penelitian dan Pengembangan Hutan', 'www.puslitbanghut.or.id', 'Website Pusat Penelitian dan Pengembangan Hutan, berisi profil\r\n', 'Web', '2021-01-26 21:48:12', '2021-01-26 21:48:12'),
(23, 'GALVINDO.CO.ID', 'http://localhost/CODE/Company-PP/storage/photos/1/galvindo.jpg', 'PT. Galvindo Inti Selaras', 'www.galvindo.co.id', 'PT Galvindo adalah perusahaan', 'Web', '2021-01-26 21:49:25', '2021-01-26 21:49:25'),
(24, 'ARKN-FPD.ORG', 'http://localhost/CODE/Company-PP/storage/photos/1/arkn-fpd.jpg', 'Badan Litbang Kehutanan', 'http://www.arkn-fpd.org', 'ARKN adalah singkatan dari ASEAN Regional Knowledge Network on Forest Products Development, adalah organisasi yang mewadahi organisasi tingkat ASEAN untuk penelitian dan pengembangan hasil hutan.\r\n\r\nWebsite ARKN.ORG pada awalnya dibangun sekitar tahun 2011, dan diresmikan langsung pada kongres ARKN di Bandung yang dihadiri semua negara anggota ASEAN.\r\n\r\nWebsite ini mengintegrasikan pengelola dari berbagai negara, yang dapat melakukan update posting serta mengelola konten pada halaman masing – masing setiap negara. dan halaman utamanya ada pada homepage arkn-fpd.org', 'Web', '2021-01-26 21:50:40', '2021-01-26 21:50:40'),
(25, 'SISTEM INFORMASI DISTANHUT', 'http://localhost/CODE/Company-PP/storage/photos/1/distanhut-login.jpg', 'Dinas Pertanian dan Kehutanan', '-', 'Dinas Pertanian dan Kehutanan Kabupaten Bogor, pada tahun 2016, memiliki permasalahan pada rekapitulasi mengenai pemberian hibah kepada kelompok tani di Kabupaten Bogor. Sistem ini salah satunya yang memberikan solusi mengenai hal tersebut, selain itu tersedia modul – modul unggulan lainnya, diantaranya :\r\n\r\nPengelolaan monitoring evaluasi pengadaan barang dan jasa yang ada di internal dinas\r\nDatabase kelompok tani dan arsip pelaporan pemberian hibah\r\nPengelolaan data pelaporan mengenai komoditi hasil pertanian, perkebunan dan kehutanan di Kabupaten Bogor, yang teritegrasi dengan seluruh UPT dibawah Dinas Pertanian dan Kehutanan.\r\nDashboard dan pemetaan semua komoditi unggulan berdasarkan kecamatan  dan komoditinya.\r\nOtomatisasi rekap pelaporan dan statistik pertahun sesuai dengan kebutuhan.', 'E-Government', '2021-01-26 21:52:00', '2021-01-26 21:52:00'),
(26, 'E-DIKLAT.TVRI.CO.ID', 'http://localhost/CODE/Company-PP/storage/photos/1/tvri-ediklat.jpg', 'TVRI Pusat DKI Jakarta', 'http://e-diklat.tvri.co.id', 'Sistem iformasi e-diklat TVRI adalah sistem yang dibangun untuk memberikan solusi bagi badan diklat TVRI yang pada awalnya mengalami kesulitan dalam melakukan proses administrasi dan pendaftaran diklat yang rutin dilakukan di internal TVRI Pusat, untuk meningkatkan kompetensi SDM TVRI di seluruh stsiun daerah di Indonesia.\r\n\r\nBisnis proses yang dilakukan adalah mulai dari pengumuman secara online, pendaftaran dan pengelolaan tiket serta distribusi pateri ajar. Output yang dihasilkan adalah database SDM yang sudah memiliki sertifikat yang dilakukan oleh sistem secara otomatis.', 'Web aplikasi', '2021-01-26 21:53:23', '2021-01-26 21:56:31'),
(27, 'SMK Al-Asiyah', 'http://192.168.43.238/CODE/Company-PP/public//storage/photos/1/SMK Al-Asiyah.png', 'SMK AL-ASIYAH', '#', 'WEB dari SMK AL-ASIYAH', 'Web', '2021-01-26 21:56:37', '2021-01-27 16:00:14'),
(28, 'SMK Al-Muhajirin', 'http://192.168.43.238/CODE/Company-PP/public//storage/photos/1/SMK Al-Muhajirin.png', 'SMK Al-Muhajirin', '#', 'WEB dari SMK Al-Muhajirin', 'Web', '2021-01-26 22:05:25', '2021-01-27 15:59:38'),
(29, 'Tes', 'http://192.168.43.238/CODE/Company-PP/public//storage/photos/1/images.jpeg', 'Dem', 'G', 'Cgbj', 'Web', '2021-01-27 16:00:28', '2021-01-27 16:00:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `q_a_s`
--

CREATE TABLE `q_a_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Q` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `A` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `q_a_s`
--

INSERT INTO `q_a_s` (`id`, `Q`, `A`) VALUES
(1, 'try', 'try');

-- --------------------------------------------------------

--
-- Struktur dari tabel `servides`
--

CREATE TABLE `servides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `servides`
--

INSERT INTO `servides` (`id`, `icon`, `Title`, `Desc`) VALUES
(2, 'fab fa-accusoft', 'Web Developer', 'Kami Menghadirkan Service Web Developer Untuk Anda '),
(3, 'fas fa-chart-line', 'Analystics', 'Kami Menghadirkan Service Analystics Untuk Anda '),
(4, 'fas fa-chart-pie', 'Database Structure', 'Kami Menghadirkan Database Structure Developer Untuk Anda '),
(5, 'fas fa-bullhorn', 'Advertising', 'Kami Menghadirkan Service Advertising Untuk Anda '),
(6, 'fas fa-search', 'SEO', 'Kami Menghadirkan SEO Developer Untuk Anda '),
(7, 'fas fa-leaf ', 'Corporate Branding', 'Kami Menghadirkan Corporate Branding Untuk Anda '),
(8, 'fas fa-tachometer-alt', 'Graphic Design', 'Kami Menghadirkan Service Graphic Design Untuk Anda '),
(9, 'fas fa-fw fa-mobile-alt', 'Mobile Interface', 'Kami Menghadirkan Service Mobile Interface Untuk Anda ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('bU8cGp8cDowDTdBHZoSLrtqQ6x9OLPxNXAzpJyee', 1, '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.96 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiZVpxOFhHWEZiZE5WTVNCN3hlejl1MmtYTlFqY2xaa1NWSFNWa09rayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjI6Imh0dHA6Ly9sb2NhbGhvc3QvQ09ERS9Db21wYW55LVBQL3B1YmxpYy9maWxlbWFuYWdlcj90eXBlPWltYWdlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJGZiYzNXZjlLbG53QUp3QTlCMHBOSS4yWmhaa2owazBVaHZwWTVPa0pFSVdRbUY2dmhQTkppIjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRmYmMzV2Y5S2xud0FKd0E5QjBwTkkuMlpoWmtqMGswVWh2cFk1T2tKRUlXUW1GNnZoUE5KaSI7fQ==', 1611790519),
('CetexJA84Xh6UWIYH7YI6Ga9Hep15VGTnfWItHuD', 1, '192.168.43.238', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.96 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiblJHQ2tsdmRGcDlFaHpUajVlRXdDbk9vaE9mUTZYdmZieGl4Y3JkYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTg6Imh0dHA6Ly8xOTIuMTY4LjQzLjIzOC9DT0RFL0NvbXBhbnktUFAvcHVibGljL2FkbWluL3Byb2plY3QiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjM6InVybCI7YTowOnt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJGZiYzNXZjlLbG53QUp3QTlCMHBOSS4yWmhaa2owazBVaHZwWTVPa0pFSVdRbUY2dmhQTkppIjt9', 1611763037),
('KAcRQG93pcTApLBxsTmiA64ez2RTRC05wjh5ZZYL', 1, '192.168.43.238', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.96 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiVFh3V3NlWGxjT3dMTUFaU0FqMmFpRGh3NTI5UldwU0ZYOWY0U1hlRiI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjY3OiJodHRwOi8vMTkyLjE2OC40My4yMzgvQ09ERS9Db21wYW55LVBQL3B1YmxpYy9maWxlbWFuYWdlcj90eXBlPWltYWdlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJGZiYzNXZjlLbG53QUp3QTlCMHBOSS4yWmhaa2owazBVaHZwWTVPa0pFSVdRbUY2dmhQTkppIjt9', 1611790603),
('qYSvdEfxJDlpDN1qBRn7ZgRAIXZju943YqPJo134', 1, '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.96 Mobile Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiTWtXbnZVSElEeTBoaEpjVDJXNEhIV0xrWVphUEd0M0FtSnJYVzZtNiI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM5OiJodHRwOi8vbG9jYWxob3N0L0NPREUvQ29tcGFueS1QUC9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkZmJjM1dmOUtsbndBSndBOUIwcE5JLjJaaFprajBrMFVodnBZNU9rSkVJV1FtRjZ2aFBOSmkiO30=', 1611758635),
('v4FnoTOXuVLlQqP8q3dy5F1Jb89dvf65416JPaVl', NULL, '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.96 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRGh1MWtNSjJWZzh2OTZtOWhSSjBlWmN0Q1hPeWd2cjFWb0JUNllpRiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly9sb2NhbGhvc3QvQ09ERS9Db21wYW55LVBQL3B1YmxpYyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1611762277),
('XuJf3cvpUuykjYqyf1r6dXB7w7Dbyr0ZtC3bkEqw', 1, '192.168.43.1', 'Mozilla/5.0 (Linux; Android 4.4.4; SM-J110G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Mobile Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiTW9HbVJLVnBQc2JCR1pNVWhGQVRWNjVYM2JmdHRiczFLcTdFQ0theSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHA6Ly8xOTIuMTY4LjQzLjIzOC9DT0RFL0NvbXBhbnktUFAvcHVibGljIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRmYmMzV2Y5S2xud0FKd0E5QjBwTkkuMlpoWmtqMGswVWh2cFk1T2tKRUlXUW1GNnZoUE5KaSI7fQ==', 1611763546);

-- --------------------------------------------------------

--
-- Struktur dari tabel `setting`
--

CREATE TABLE `setting` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `Attribut` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `grup` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `setting`
--

INSERT INTO `setting` (`id`, `Name`, `Attribut`, `link`, `grup`, `created_at`, `updated_at`) VALUES
(1, 'PT Bonet Utama', 'Nama_perusahaan', '#', 'general', NULL, NULL),
(2, 'Analysis, Design, Create & Development', 'Simpel_Slogan', '#', 'general', NULL, NULL),
(3, 'Kenapa harus kami? \r\nKarena Kami selalu memberikan rancangan dan inovasi terbaik dari semua harapan baik', 'long_Slogan', '#', 'general', NULL, NULL),
(4, 'Mobile Apps, E-Gevernment, Forntend Detail, Integrasi Sistem, Aplikasi yang ringan, Riset dan Development, Implementasi ,Desain Spesial', 'Kelebihan', '#', 'general', NULL, NULL),
(5, 'W3B Project memiliki pengalaman lebih dari 25 tahun dan akan terus berkembang untuk bisa melayani masyarakat pada bidang teknologi informasi', 'text_about', '#', 'general', NULL, NULL),
(6, '(0251) 8337555', 'Contak_Whatapps', '#', 'general', NULL, NULL),
(7, 'https://assets.jenius.com/assets/2018/11/13063851/img_feature_banner.png', 'Img_head', '#', 'general', NULL, NULL),
(8, 'http://w3b-project.com/wp-content/uploads/2019/02/Logo-w3b-2.png', 'LOGO', '#', 'general', NULL, NULL),
(9, 'Tajur Vila Bogor Raya', 'Alamat', '#', 'general', '2021-01-25 13:38:49', '2021-01-25 13:38:49'),
(10, 'Lagustinus211@gmail.com', 'Email', '#', 'general', '2021-01-25 13:39:20', '2021-01-25 13:39:20'),
(13, 'Compeny-PP', 'URL', '#', 'general', '2021-01-27 01:57:38', '2021-01-27 01:57:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_team` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `team_invitations`
--

CREATE TABLE `team_invitations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `team_user`
--

CREATE TABLE `team_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimonies`
--

CREATE TABLE `testimonies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `compeny` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `testimonies`
--

INSERT INTO `testimonies` (`id`, `Nama`, `Gambar`, `compeny`, `Deskripsi`, `created_at`, `updated_at`) VALUES
(2, 'test', 'http://localhost/CODE/Company-PP/storage/photos/1/676646.jpg', 'test', 'lorem', '2021-01-18 08:45:13', '2021-01-18 08:45:13'),
(4, 'test', 'http://localhost/CODE/Company-PP/storage/photos/1/676646.jpg', 'as', 'asd', '2021-01-18 15:17:50', '2021-01-18 15:17:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'agustinus', 'admin@admin.com', NULL, '$2y$10$fbc3Wf9KlnwAJwA9B0pNI.2ZhZkj0k0UhvpY5OkJEIWQmF6vhPNJi', NULL, NULL, 'Gowu158vTk0ate6IKjdS5YjhgvgvwCsbfDULykpZimfvJWuEizA8LV1od7qz', NULL, NULL, '2021-01-15 01:11:29', '2021-01-15 01:11:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `views`
--

CREATE TABLE `views` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `view` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `views`
--

INSERT INTO `views` (`id`, `view`, `active`) VALUES
(1, 'Template1', '0'),
(2, 'Template3', '1'),
(3, 'Template2', '0');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cat_project`
--
ALTER TABLE `cat_project`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cliens`
--
ALTER TABLE `cliens`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `developer`
--
ALTER TABLE `developer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

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
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `q_a_s`
--
ALTER TABLE `q_a_s`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `servides`
--
ALTER TABLE `servides`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teams_user_id_index` (`user_id`);

--
-- Indeks untuk tabel `team_invitations`
--
ALTER TABLE `team_invitations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_invitations_email_unique` (`email`),
  ADD KEY `team_invitations_team_id_foreign` (`team_id`);

--
-- Indeks untuk tabel `team_user`
--
ALTER TABLE `team_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_user_team_id_user_id_unique` (`team_id`,`user_id`);

--
-- Indeks untuk tabel `testimonies`
--
ALTER TABLE `testimonies`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cat_project`
--
ALTER TABLE `cat_project`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `cliens`
--
ALTER TABLE `cliens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `developer`
--
ALTER TABLE `developer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `project`
--
ALTER TABLE `project`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `q_a_s`
--
ALTER TABLE `q_a_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `servides`
--
ALTER TABLE `servides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `setting`
--
ALTER TABLE `setting`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `team_invitations`
--
ALTER TABLE `team_invitations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `team_user`
--
ALTER TABLE `team_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `testimonies`
--
ALTER TABLE `testimonies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `views`
--
ALTER TABLE `views`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `team_invitations`
--
ALTER TABLE `team_invitations`
  ADD CONSTRAINT `team_invitations_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
