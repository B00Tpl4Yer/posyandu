-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 21, 2024 at 05:04 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikels`
--

CREATE TABLE `artikels` (
  `id` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penulis` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_posting` date NOT NULL,
  `konten` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `public` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artikels`
--

INSERT INTO `artikels` (`id`, `judul`, `penulis`, `tanggal_posting`, `konten`, `user_id`, `foto`, `public`, `created_at`, `updated_at`) VALUES
(1, 'Pertumbuhan Balita', 'dr. Fadhli Rizal Makarim', '2024-03-21', ' <p>Masa balita (bayi di bawah lima tahun) merupakan waktu saat otak anak mengalami pertumbuhan yang sangat pesat. Periode ini juga umumnya dikenal dengan istilah masa keemasan (the golden age). Meski begitu, pertumbuhan balita bisa bervariasi, jadi mungkin sulit untuk mengetahui apakah pertumbuhan anak cukup sehat dan optimal dalam hal tinggi dan berat badannya.\n            </p> <br> <p>\n            Orangtua biasanya mudah khawatir jika balita terlibat lebih besar atau lebih kecil dibandingkan anak seusianya. Hal yang perlu digarisbawahi, banyak faktor yang mendukung pertumbuhan balita. Beberapa faktor mungkin tidak mengkhawatirkan, tapi faktor lainnya mungkin perlu diwaspadai.\n            </p> <br><br>\n            <h1>Tahap Tumbuh Kembang Balita yang Ideal</h1>\n            <br> <p>\n            Seiring usia Si Kecil bertambah, tentunya hal ini akan diiringi dengan bertambahnya perkembangan dan pertumbuhannya dari segala aspek. Tumbuh kembang balita dapat diperhatikan dari dua aspek, yaitu:\n            </p> <br>\n            <ul>\n            <li>Tumbuh yang menggambarkan perubahan fisik pada anak.</li>\n            <li>Perkembangan yang menggambarkan kemampuan struktur dan fungsi tubuh yang lebih kompleks.</li>\n            </ul>\n            <br>\n            <p>\n            Menurut banyak ahli, bayi terlahir dengan sejumlah refleks bawaan. Selain itu, mereka juga terlahir dengan dorongan untuk mengeksplorasi dunianya.\n            </p> <br> <p>\n            Pada tahap ini anak mampu mengasimilasi dan mengakomodasi informasi dengan cara melihat, mendengar, menyentuh dan aktivitas motorik. Semua kegiatan yang dilakukan berfokus pada mulut (oral).\n\n            Sejak di dalam kandungan hingga anak lahir dan tumbuh menjadi dewasa, mata pun rasanya tidak pernah ingin lepas dari si buah hati. Ibaratnya, seorang ibu bisa tahu bila ada setitik saja noda tambahan pada tubuh anaknya. Naluri orangtua selalu memantau perkembangan dan pertumbuhan anak hingga kapan pun juga.\n            </p> <br> <p>\n            Dari fase-fase pertumbuhan anak, usia 0-3 tahun merupakan waktu ketika tumbuh kembang anak terjadi dengan pesat. Di masa ini, ibu tak boleh melupakan asupan nutrisi dan gizi yang diperlukan anak. Alasannya sederhana, tercukupi kebutuhan gizi bisa membantu tumbuh kembangnya menjadi lebih baik. Perhatikan kehidupan anak saat dalam proses tumbuh kembang, tumbuh kembang yang baik tentu akan memengaruhi kesehatan dan kehidupan anak kedepannya.\n            </p> <br> <br>\n            <h1>Bagaimana Pertumbuhan Balita Terjadi?</h1>\n            <br> <p>\n            Rata-rata bayi cukup bulan akan menggandakan berat badannya dalam empat bulan pertama. Setelah itu, pertumbuhan melambat, tapi hanya sedikit. Pada akhir tahun pertama, tinggi dan berat badan anak akan menjadi sekitar tiga kali berat dan panjang lahirnya.\n            </p> <br> <p>\n            Pada tahun kedua, pertumbuhan melambat dan rata-rata balita akan bertambah sekitar 4 kg dan 10 atau 12 sentimeter. Sementara itu pada tahun ketiga, berat dan tinggi badan naik secara lambat sekitar 2 kg dan 5 atau 8 sentimeter selama 12 bulan.\n            </p> <br> <p>\n            Tinggi dan berat badan balita dapat dilacak pada grafik standar yang direkomendasikan World Health Organization (WHO). Namun, ada grafik yang berbeda untuk bayi yang lahir prematur dan bayi dengan kondisi medis tertentu. Sebab kedua kondisi tersebut dapat mempengaruhi pertumbuhan anak ke depannya.\n            </p> <br><br>\n            <h1>Faktor yang Menyebabkan Balita Terlihat Lebih Besar atau Lebih Kecil</h1>\n            <br> <p>\n            Ada berbagai alasan mengapa balita mungkin terlihat lebih besar atau lebih kecil dari teman sebayanya. Berikut alasan umum yang perlu diketahui:\n            </p> <br>\n            <h3>1.Genetik</h3> <br>\n            <p>\n            Ayah dan ibu perlu melihat apakan anak mungkin mewarisi genetik rata-rata dalam keluarga. Meskipun ayah dan ibu mungkin memiliki tinggi badan yang melebihi rata-rata, bisa jadi Si Kecil mewarisi gen anggota keluarga lainnya. Misalnya, jika nenek atau kakek dari anak memiliki tinggi badan rendah, maka balita pun mungkin bisa saja mewarisinya.\n            </p> <br>\n            <h3>2.nutrisi yg tidak tepat</h3> <br>\n            <p>\n            Anak-anak yang tidak mendapatkan makanan dengan nilai gizi yang sesuai mungkin memiliki pertumbuhan yang terhambat. Sehingga ia akan memiliki berat atau tinggi badan yang tidak optimal. Pola makan atau nutrisi yang tidak tepat bisa membuat tubuh anak kekurangan gizi dan kalori yang dibutuhkannya tubuhnya untuk tumbuh.\n            </p> <br>\n            <h3>3.Masalah pada Hormon Pertumbuhan</h3> <br>\n            <p>\n            Seorang anak mungkin memiliki terlalu banyak atau terlalu sedikit hormon pertumbuhan. Seperti yang diketahui, terlalu banyak hormon pertumbuhan akan menyebabkan seorang anak tumbuh lebih cepat. Hal sebaliknya berlaku, bila terlalu sedikit maka akan menghambat pertumbuhannya.\n            </P> <br>\n            <h3>4.gangguan tiroid</h3> <br> <p>\n            Bahan kimia yang dikeluarkan oleh tiroid memengaruhi pertumbuhan tulang. Jadi, jika seorang anak mengalami hipotiroidisme  tubuh mereka tidak menghasilkan cukup hormon tiroid, sehingga pertumbuhannya pun dapat terhambat.\n            </P> <br>\n            <h3>5.Penyakit sistemik</h3> <br> <p>\n            Anak-anak yang hidup dengan kondisi kesehatan kronis atau penyakit jangka panjang, mungkin terhambat tumbuh pada tingkat rata-rata. Hal ini bisa terjadi karena penyakit secara langsung memengaurhi pertumbuhan. Karena nutrisi “terbakar” melawan penyakit, atau karena seorang anak merasa terlalu tidak sehat untuk menerima kalori yang cukup.\n            </p> <br>\n            <h3>6.Gagal untuk berkembang</h3> <br> <p>\n            Selain penyakit atau kondisi tertentu, gagal tumbuh adalah istilah umum untuk anak yang tidak tumbuh pada tingkat yang diharapkan. Penyebab gagal tumbuh dapat bervariasi, dan terkadang ada penyebab khusus yang pernah diidentifikasi.\n            </p> <br>\n            <h3>7. Kesehatan Ibu Selama Kehamilan</h3> <br> <p>\n            Jika ibu merokok, menggunakan obat-obatan, atau tidak memiliki pola makan yang baik selama kehamilan, kemungkinan besar akan melahirkan bayi yang kecil. Jika berat badan ibu bertambah banyak selama kehamilan atau mengidap diabetes gestasional, kemungkinan besar akan melahirkan bayi yang lebih besar.\n            </p> <br>\n           <h3> 8. Jenis Kelamin Bayi</h3> <br> <p>\n            Bayi perempuan biasanya sedikit lebih kecil (panjang dan berat) saat lahir dibandingkan bayi laki-laki.\n            </p> <br>\n            <h3>9. Diberi ASI atau Susu Formula</h3> <br> <P>\n            Pada tahun pertamanya, bayi yang diberi ASI bertambah berat badan lebih lambat dibandingkan bayi yang diberi susu formula. Untuk beberapa bulan pertama, bayi yang diberi ASI sebenarnya tumbuh lebih cepat, tapi pada usia 3 bulan hal ini akan berubah. Kemudian pada usia 2 tahun, berat bayi yang diberi ASI dan susu formula hampir sama.\n            </p> <br>\n            <h3>10. Pola Tidur</h3> <br> <p><p\n            Percepatan pertumbuhan pada balita juga terkait dengan pola dan kualitas tidurnya. Sebuah studi menemukan bahwa tidur lebih banyak secara langsung meningkatkan kemungkinan balita tumbuh lebih cepat. Faktanya, lonjakan pertumbuhan terjadi pada waktu 48 jam setelah tidur siang.\n            </p> <br><br>\n            <h1>Bagaimana Agar Balita Memiliki Tubuh Sehat?</h1> <br> <br> <p>\n            Agar kesehatan tubuhnya senantiasa terjaga, berikut beberapa cara yang bisa orangtua lakukan:\n            </P> <br> <p>\n            Beri balita air putih dan susu biasa sebagai pengganti minuman manis. Setelah tahun pertama, ketika balita menyusui makan lebih banyak dan mengonsumsi makanan padat, ASI merupakan tambahan yang ideal untuk pola makannya.\n             </p> <br> <p>   Anak mungkin menjadi pemilih makanan dan pilihannya tidak menentu. Namun, pastikan untuk menawarkan pilihan makanan sehat dan biarkan dia memilih apa yang diinginkannya. Teruslah mencoba makanan baru, mungkin perlu waktu bagi balita untuk belajar menyukai setiap makanan berbeda.\n             </p> <br> <p>Batasi atau hindari sama sekali anak melihat layar gadget atau TV. </p> <br>\n            <p> Balita tampaknya akan terus aktif, berlari, menendang, memanjat, atau melompat. Biarkan dia aktif agar tubuhnya mengembangkan koordinasi dan menjadi kuat.\n           </P> <br> <p> Pastikan balita mendapatkan jumlah tidur yang disarankan setiap malam. Untuk balita 1-2 tahun, 11-14 jam sehari (termasuk tidur siang).\n            <p/> <br> <br>\n         ', 1, NULL, 1, '2024-03-20 21:03:51', '2024-03-20 21:03:51');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint UNSIGNED NOT NULL,
  `pesan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dibaca` tinyint(1) NOT NULL DEFAULT '0',
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hasil_berat_badans`
--

CREATE TABLE `hasil_berat_badans` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `berat_badan` decimal(5,2) NOT NULL,
  `tinggi` decimal(5,2) NOT NULL,
  `tanggal` date NOT NULL,
  `hasil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hasil_status_gizis`
--

CREATE TABLE `hasil_status_gizis` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `usia_bulan` int NOT NULL,
  `berat_badan` double(8,2) NOT NULL,
  `tinggi` double(8,2) NOT NULL,
  `status_gizi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_09_25_100046_create_permission_tables', 1),
(6, '2023_09_25_103538_create_hasil_status_gizis_table', 1),
(7, '2023_09_25_105107_create_hasil_berat_badans_table', 1),
(8, '2023_09_25_105637_create_artikels_table', 1),
(9, '2023_09_25_110114_create_resets_table', 1),
(10, '2023_09_25_110350_create_feedback_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reseps`
--

CREATE TABLE `reseps` (
  `id` bigint UNSIGNED NOT NULL,
  `namaobat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pemberi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggalpemberian` date NOT NULL,
  `dosis` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2024-03-20 21:03:31', '2024-03-20 21:03:31'),
(2, 'pengguna terdaftar', 'web', '2024-03-20 21:03:31', '2024-03-20 21:03:31');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@example.com', NULL, '$2y$10$DD8SehyWad.vRg5sTYFbF.sxyb/ZZrJsRONDIe4MQgpq.GRivG22W', NULL, '2024-03-20 21:03:41', '2024-03-20 21:03:41'),
(2, 'pengguna', 'pengguna@example.com', NULL, '$2y$10$6qnFi/4PsPi8flZcohqbc.sOwoRT1bVB0N4Y1z7DpjxmxDP/LmciK', NULL, '2024-03-20 21:03:41', '2024-03-20 21:03:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikels`
--
ALTER TABLE `artikels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artikels_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hasil_berat_badans`
--
ALTER TABLE `hasil_berat_badans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hasil_berat_badans_user_id_foreign` (`user_id`);

--
-- Indexes for table `hasil_status_gizis`
--
ALTER TABLE `hasil_status_gizis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hasil_status_gizis_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `reseps`
--
ALTER TABLE `reseps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reseps_user_id_foreign` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikels`
--
ALTER TABLE `artikels`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hasil_berat_badans`
--
ALTER TABLE `hasil_berat_badans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hasil_status_gizis`
--
ALTER TABLE `hasil_status_gizis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reseps`
--
ALTER TABLE `reseps`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artikels`
--
ALTER TABLE `artikels`
  ADD CONSTRAINT `artikels_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `hasil_berat_badans`
--
ALTER TABLE `hasil_berat_badans`
  ADD CONSTRAINT `hasil_berat_badans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `hasil_status_gizis`
--
ALTER TABLE `hasil_status_gizis`
  ADD CONSTRAINT `hasil_status_gizis_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reseps`
--
ALTER TABLE `reseps`
  ADD CONSTRAINT `reseps_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
