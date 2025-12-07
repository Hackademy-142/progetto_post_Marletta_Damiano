-- phpMyAdmin SQL Dump
-- version 6.0.0-dev+20251205.f291fcc13c
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 07, 2025 at 02:09 PM
-- Server version: 8.4.3
-- PHP Version: 8.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `progetto_finale`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `is_accepted` tinyint(1) DEFAULT NULL,
  `category_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `slug`, `subtitle`, `body`, `image`, `user_id`, `is_accepted`, `category_id`, `created_at`, `updated_at`) VALUES
(18, 'The Last Of Us', 'the-last-of-us', 'Naughty Dog', 'The Last of Us è un videogioco action-adventure del 2013, sviluppato da Naughty Dog, diretto da Neil Druckmann e Bruce Straley, pubblicato da Sony Interactive Entertainment per PlayStation 3, PlayStation 4 e PlayStation 5.\r\n\r\nCon ben 204 premi è uno dei videogiochi più premiati[1] ed è considerato, da gran parte della critica videoludica, uno dei migliori videogiochi di tutti i tempi.\r\n\r\nÈ stato annunciato il 10 dicembre 2011 durante gli Spike Video Game Awards[11][12]. Il gioco si è dimostrato il migliore durante l\'Electronic Entertainment Expo 2012, aggiudicandosi 5 premi, tra cui il premio per la miglior presentazione, per il miglior gioco per console e per il miglior gioco originale[13].\r\n\r\nIl gioco è uscito il 14 giugno 2013[14] e il 20 giugno in Giappone[15], sia in versione fisica che digitale (scaricabile dal PlayStation Store). È il primo titolo a poter essere giocato ancora prima del completamento del download stesso (dal 70% del completamento riuscito in poi), funzione oggi presente in tutti i videogiochi PlayStation 4[16].\r\n\r\nIl 9 aprile 2014 viene annunciata sul PlayStation Blog una versione del gioco \"rimasterizzata\" per PlayStation 4, intitolata The Last of Us Remastered. Questa presenta texture più definite, luci e ombre migliorate, una risoluzione nativa di 1080p e un framerate di 60 fps. Contiene inoltre un documentario sulle cinematiche di gioco e tutti i contenuti scaricabili inclusi nel gioco originale, con l\'aggiunta di un nuovo capitolo giocabile solo al termine dell\'avventura principale. Il capitolo è intitolato The Last of Us: Left Behind. A differenza degli altri capitoli della storia, parte di questo è cronologicamente avvenuta prima degli eventi di The Last of Us. L\'uscita per PlayStation 4 è avvenuta il 29 luglio 2014[17].\r\n\r\nL\'11 novembre 2014 viene pubblicato The Last of Us: Game of the Year Edition per PlayStation 3. Quest\'edizione include le espansioni scaricabili direttamente nel disco di gioco, così come era avvenuto nella versione per PlayStation 4.', 'public/images/ENt7ghZYoUVg3EJQepSBH7hlAjLTprUp72GqyZyi.jpg', 1, 1, 6, '2025-12-07 12:24:07', '2025-12-07 12:24:07'),
(19, 'Fallout 4', 'fallout-4', 'Bethesda Game Studio', 'Fallout 4 è un videogioco action RPG sviluppato da Bethesda Game Studios e pubblicato da Bethesda Softworks per Microsoft Windows, PlayStation 4 e Xbox One il 10 novembre 2015[2][3] e il 25 aprile 2024 anche per PlayStation 5 e Xbox Series X/S.[4]\r\n\r\nÈ il quarto capitolo della serie videoludica Fallout. Il gioco è ambientato in una Boston post-apocalittica nell\'anno 2287, 210 anni dopo una guerra nucleare, in cui il protagonista emerge da un bunker sotterraneo noto come Vault 111.[5]\r\n\r\nL\'esperienza di gioco è simile a quella dei precedenti capitoli (Fallout 3 e Fallout: New Vegas): con la possibilità di giocare sia in prima sia in terza persona. Il giocatore può esplorare il mondo aperto di Fallout 4 a proprio piacimento (essendo il gioco non lineare), e il personaggio giocante ha anche la possibilità di essere accompagnato da diversi alleati.[6] Il giocatore ha inoltre la nuova abilità di riciclare oggetti, usando i materiali cosí ricavati per modificare le proprie armi e armature oppure costruire i propri insediamenti, che possono attrarre ed essere abitati da personaggi non giocanti.[7] Per la prima volta nella serie è possibile ascoltare la voce del proprio personaggio.[8]\r\n\r\nIl gioco è stato soggetto a diverse voci[9][10][11][12] prima del suo annuncio ufficiale, avvenuto il 3 giugno 2015[2] tramite il sito ufficiale del gioco dopo un conto alla rovescia lanciato il giorno prima, con il primo video di gioco mostrato da Bethesda alla propria conferenza all\'E3 2015.[13]\r\n\r\nFallout 4 è stato ben accolto dalla critica, con molti che hanno elogiato la profondità del mondo di gioco, la libertà data al giocatore, la totale quantità di contenuti, storia, costruzione degli edifici, i personaggi e la colonna sonora.[14] Il titolo ha anche ricevuto diversi premi come gioco dell\'anno[15][16][17][18] e ha venduto dodici milioni di copie,[19] oltre ad aver fatturato 12 milioni di dollari nel primo giorno di lancio.[20]', 'public/images/hpIz02OMm13lkCTn3P8vqXgZ74jGCq5l91OLy4oD.jpg', 1, 1, 5, '2025-12-07 12:27:37', '2025-12-07 12:27:37'),
(20, 'God Of War', 'god-of-war', 'Santa Monica Studio', 'God of War è una serie di videogiochi action-adventure sviluppati da Santa Monica Studio e pubblicati da Sony Interactive Entertainment a partire dal 2005.[1]\r\n\r\nAl 2024 la serie conta cinque capitoli principali (God of War, God of War II, God of War III, God of War e God of War Ragnarök) e quattro prequel (God of War: Ascension, God of War: Betrayal, God of War: Chains of Olympus, e God of War: Ghost of Sparta).\r\n\r\nLa storia, che ha come protagonista il dio Kratos, pone le sue fondamenta sulla mitologia greca e norrena.[1]', 'public/images/FET8NofjGf1HzBfUK2pGF3w378yrhhg2RBoaJeQ4.jpg', 1, 1, 6, '2025-12-07 12:29:36', '2025-12-07 12:29:36'),
(21, 'Grand Theft Auto 5', 'grand-theft-auto-5', 'Rockstar North', 'Grand Theft Auto V, spesso abbreviato in GTA V, è un videogioco action-adventure del 2013, sviluppato da Rockstar North e pubblicato da Rockstar Games per PlayStation 3, PlayStation 4, PlayStation 5, Xbox 360, Xbox One, Xbox Series X/S e Windows; si tratta del settimo capitolo principale della celebre saga di Grand Theft Auto, l\'undicesimo includendo gli spin-off e il quattordicesimo includendo le espansioni.[1]\r\n\r\nIl videogioco è stato pubblicato il 17 settembre 2013 per PlayStation 3 e Xbox 360, il 18 novembre 2014 per PlayStation 4 e Xbox One, il 14 aprile 2015 per Windows e il 15 marzo 2022 per PlayStation 5 e Xbox Series X/S;[2] ciò lo rende, di fatto, uno dei pochi prodotti della storia videoludica ad essere commercializzato per tre diverse generazioni di console.[3]\r\n\r\nCon il passare degli anni, Grand Theft Auto V è diventato un fenomeno di massa senza precedenti, vendendo oltre duecento milioni di copie in tutto il mondo e piazzandosi al secondo posto nella classifica dei videogiochi più redditizi della storia alle spalle di Minecraft;[4] è inoltre entrato nel libro del Guinness World Records per aver incassato un miliardo di dollari in soli tre giorni.[5] Ad oggi rimane uno dei prodotti di intrattenimento di maggior successo nella storia dell\'umanità, avendo incassato oltre dieci miliardi di dollari dalla sua prima pubblicazione nel 2013.[4]MODIFICA', 'public/images/hQx60M6cPsEOBWmN7pNysAgl0MNhLz0nMVonCRL7.jpg', 1, 1, 1, '2025-12-07 12:31:05', '2025-12-07 12:31:09');

-- --------------------------------------------------------

--
-- Table structure for table `article_tag`
--

CREATE TABLE `article_tag` (
  `id` bigint UNSIGNED NOT NULL,
  `article_id` bigint UNSIGNED NOT NULL,
  `tag_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `article_tag`
--

INSERT INTO `article_tag` (`id`, `article_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(12, 18, 2, NULL, NULL),
(14, 19, 1, NULL, NULL),
(16, 20, 1, NULL, NULL),
(18, 21, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('357bebbe87f46ac4b5b81300b7acffdd', 'i:1;', 1765112695),
('357bebbe87f46ac4b5b81300b7acffdd:timer', 'i:1765112695;', 1765112695),
('444738a1c99305bd654b78b7cdd869bd', 'i:2;', 1765112629),
('444738a1c99305bd654b78b7cdd869bd:timer', 'i:1765112629;', 1765112629),
('admin@theaulabpost.it|127.0.0.1', 'i:2;', 1765112630),
('admin@theaulabpost.it|127.0.0.1:timer', 'i:1765112630;', 1765112630);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Politica', '2025-12-06 12:56:29', '2025-12-06 12:56:29'),
(2, 'Economia', '2025-12-06 12:56:29', '2025-12-06 12:56:29'),
(3, 'Food&Dink', '2025-12-06 12:56:29', '2025-12-06 12:56:29'),
(4, 'Sport', '2025-12-06 12:56:29', '2025-12-06 12:56:29'),
(5, 'Intrattenimento', '2025-12-06 12:56:29', '2025-12-06 12:56:29'),
(6, 'Tech', '2025-12-06 12:56:29', '2025-12-06 12:56:29'),
(7, 'succo', '2025-12-07 12:32:30', '2025-12-07 12:32:30');

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_05_14_080050_add_two_factor_columns_to_users_table', 1),
(5, '2024_05_15_142254_create_categories_table', 1),
(6, '2024_05_15_142316_create_articles_table', 1),
(7, '2024_05_20_090807_add_roles_to_users_table', 1),
(8, '2024_05_22_100228_add_is_accepted_to_articles_table', 1),
(9, '2024_05_27_154535_create_tags_table', 1),
(10, '2024_05_27_155819_create_article_tag_table', 1),
(11, '2024_06_04_124338_add_slug_to_articles_table', 1);

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
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('9wq5r1QFZFwCZM182Am5TTjnuX6VwhIenjhx5kyB', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiWkJEM2tRbEhVbUh4VzZ4M1pzcXN4ZUNvUk5vaVd0ZUszSnh3RXRRVSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9kYXNoYm9hcmQiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTozO30=', 1765115934),
('RLCXpSm8vdejWLsvpuzCFOVh7RVWIN7YN39QK4Gb', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVW9WNGtIN0tYYmlaQmdpWlU3MkU2Q1phRkVoYWlaQVAwQTJ3NDZhZyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1765111163);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'arte', '2025-12-07 12:33:18', '2025-12-07 12:33:18'),
(2, 'tech', '2025-12-07 12:33:42', '2025-12-07 12:33:42'),
(3, 'tecnologia', '2025-12-07 12:33:55', '2025-12-07 12:33:55'),
(4, 'cultura', '2025-12-07 12:34:10', '2025-12-07 12:34:10'),
(6, 'mela', '2025-12-07 12:28:40', '2025-12-07 12:32:03'),
(7, 'banana', '2025-12-07 12:28:40', '2025-12-07 12:32:10'),
(8, 'pippo', '2025-12-07 12:28:40', '2025-12-07 12:32:15'),
(9, 'fantasy', '2025-12-07 12:57:40', '2025-12-07 12:57:40'),
(10, 'open world', '2025-12-07 12:57:40', '2025-12-07 12:57:40'),
(11, 'rpg', '2025-12-07 12:57:40', '2025-12-07 12:57:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) DEFAULT '0',
  `is_revisor` tinyint(1) DEFAULT '0',
  `is_writer` tinyint(1) DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `is_admin`, `is_revisor`, `is_writer`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@theaulabpost.it', 0, 0, 0, NULL, '$2y$12$RbeP0Pa/Lh/Ybno1AR26Z.nbH2SNAaK0ve.R72Toe2ZobcqCI2j82', NULL, NULL, NULL, NULL, '2025-12-06 12:56:30', '2025-12-06 12:56:30'),
(2, 'bananaJoe', 'gggggg@gmail.com', 0, 0, 0, NULL, '$2y$12$tZDdTzI7aFH1lGlbU/zjV.6m1wP9c/qZrXm2Fjwi6yJXTB6oQxbt6', NULL, NULL, NULL, NULL, '2025-12-06 17:09:03', '2025-12-06 17:09:03'),
(3, 'BananaJoe', 'sebastienedenna@gmail.com', 1, 1, 1, NULL, '$2y$12$I0B.rcVR.1Z2QVolDlMiDOB.kyCCrdxJdNTPpuQlZGQ5n34Shw2GG', NULL, NULL, NULL, NULL, '2025-12-07 11:39:17', '2025-12-07 12:32:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `articles_slug_unique` (`slug`),
  ADD KEY `articles_user_id_foreign` (`user_id`),
  ADD KEY `articles_category_id_foreign` (`category_id`);

--
-- Indexes for table `article_tag`
--
ALTER TABLE `article_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_tag_article_id_foreign` (`article_id`),
  ADD KEY `article_tag_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `article_tag`
--
ALTER TABLE `article_tag`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `articles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `article_tag`
--
ALTER TABLE `article_tag`
  ADD CONSTRAINT `article_tag_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`),
  ADD CONSTRAINT `article_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
