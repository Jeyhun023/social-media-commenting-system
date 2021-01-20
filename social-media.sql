-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 20 Oca 2021, 12:44:12
-- Sunucu sürümü: 10.4.14-MariaDB
-- PHP Sürümü: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `social-media`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `comment_id` int(11) DEFAULT 0,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `user_id`, `comment`, `comment_id`, `created_at`, `updated_at`) VALUES
(1, 5, 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 0, '2021-01-19 23:01:21', '2021-01-19 23:01:21'),
(2, 5, 1, 'Nice', 1, '2021-01-19 23:01:24', '2021-01-19 23:01:24'),
(3, 5, 6, 'Beautifulll', 1, '2021-01-19 23:01:30', '2021-01-19 23:01:30'),
(4, 3, 7, 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 0, '2021-01-19 23:01:38', '2021-01-19 23:01:38'),
(5, 7, 2, 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 0, '2021-01-19 23:01:43', '2021-01-19 23:01:43'),
(6, 8, 9, 'It is a long established fact that a reader will be distracted by the readable', 0, '2021-01-19 23:02:50', '2021-01-19 23:02:50'),
(7, 4, 1, 'Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 0, '2021-01-19 23:02:59', '2021-01-19 23:02:59'),
(8, 4, 2, 'Contrary to popular belief, Lorem Ipsum is not simply random text', 0, '2021-01-19 23:03:12', '2021-01-19 23:03:12'),
(9, 3, 3, 'Greatt', 4, '2021-01-19 23:03:18', '2021-01-19 23:03:18'),
(10, 6, 5, 'I like this photo', 0, '2021-01-19 23:03:25', '2021-01-19 23:03:25'),
(11, 1, 1, 'Pretty', 17, '2021-01-19 23:03:30', '2021-01-19 23:03:30'),
(12, 2, 9, 'Contrary to popular belief, Lorem Ipsum is not simply random text', 0, '2021-01-19 23:03:34', '2021-01-19 23:03:34'),
(13, 2, 9, 'Wonderfulll', 0, '2021-01-19 23:03:37', '2021-01-19 23:03:37'),
(14, 9, 8, 'Nice work', 16, '2021-01-19 23:03:44', '2021-01-19 23:03:44'),
(15, 9, 7, 'Contrary to popular belief, Lorem Ipsum is not simply random text', 16, '2021-01-19 23:03:47', '2021-01-19 23:03:47'),
(16, 9, 5, 'Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC.', 0, '2021-01-19 23:03:57', '2021-01-19 23:03:57'),
(17, 1, 2, 'Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC.', 0, '2021-01-19 23:04:03', '2021-01-19 23:04:03'),
(18, 8, 7, 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,', 6, '2021-01-19 23:08:11', '2021-01-19 23:08:11'),
(19, 8, 3, 'Great idea', 6, '2021-01-19 23:08:17', '2021-01-19 23:08:17'),
(20, 8, 8, 'Perfect', 0, '2021-01-19 23:08:21', '2021-01-19 23:08:21'),
(21, 4, 5, 'Very nice', 7, '2021-01-19 23:08:29', '2021-01-19 23:08:29'),
(22, 4, 6, 'Of course', 8, '2021-01-19 23:08:36', '2021-01-19 23:08:36'),
(23, 3, 4, 'I agree with you', 0, '2021-01-19 23:08:50', '2021-01-19 23:08:50');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `image` varchar(150) DEFAULT NULL,
  `video` varchar(150) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `likes` int(11) NOT NULL DEFAULT 0,
  `dislikes` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `image`, `video`, `text`, `likes`, `dislikes`, `created_at`, `updated_at`) VALUES
(1, 5, '780409c1.jpg', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0, 0, '2021-01-19 20:02:15', '2021-01-19 20:02:15'),
(2, 2, 'cc9f1485.jpg', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 0, 0, '2021-01-19 20:02:32', '2021-01-19 20:02:32'),
(3, 1, NULL, NULL, 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', 0, 0, '2021-01-19 20:02:44', '2021-01-19 20:02:44'),
(4, 3, '19bf5be3.jpg', NULL, 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt', 0, 0, '2021-01-19 20:03:01', '2021-01-19 20:03:01'),
(5, 9, '918067f12.jpg', NULL, 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.', 0, 0, '2021-01-19 20:03:15', '2021-01-19 20:03:15'),
(6, 7, '945feae7.jpg', NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 0, 0, '2021-01-19 20:03:41', '2021-01-19 20:03:41'),
(7, 4, '374dc616.jpg', NULL, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', 0, 0, '2021-01-19 20:03:53', '2021-01-19 20:03:53'),
(8, 3, NULL, '5712bb7videoplayback.mp4', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.', 0, 0, '2021-01-19 20:04:03', '2021-01-19 20:04:03'),
(9, 2, '8df32e48.jpg', NULL, 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', 0, 0, '2021-01-19 20:04:44', '2021-01-19 20:04:44');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT 'no-photo.png',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `image`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ceyhun Reshidov', 'Jeyhun Rashidov2.jpg', 'creshidov23@gmail.com', NULL, '$2y$10$x3uI3u2943dk8QgpXuIjXuktm/WlekReJ1ZHG/CfXllefZXQASwk.', NULL, '2021-01-19 13:59:39', '2021-01-19 13:59:39'),
(2, 'Diana Amber', 'user-11.jpg', 'dianaamber@gmail.com', NULL, '$2y$10$Wci6JCCJwCM5EdIQ/nY/7OLoosWU0C5SdgK1L0bOWfkRKXBXLFYGC', NULL, '2021-01-19 14:12:19', '2021-01-19 14:12:19'),
(3, 'Cris Haris', 'user-12.jpg', 'crisharis@mail.ru', NULL, '$2y$10$Had7IolH4CEyaBdq1zAOUuG7bRkCz6.d0oLyntlHkuzGcD9OGVJry', NULL, '2021-01-19 14:14:50', '2021-01-19 14:14:50'),
(4, 'Brian Walton', 'user-13.jpg', 'brainwalton@mail.ru', NULL, '$2y$10$2eiTrjcvx/DUjDwwqpxfTuyh/8mKBvyA6wkA2OI3FzLUTf.na/E2a', NULL, '2021-01-19 14:15:22', '2021-01-19 14:15:22'),
(5, 'Olivia Steward', 'user-14.jpg', 'olivia@gmail.com', NULL, '$2y$10$CJwhtYCeUsJP4t81D.kHb.WxzwBxacxUKn8me.vCz90WnC5ldDwCi', NULL, '2021-01-19 14:15:39', '2021-01-19 14:15:39'),
(6, 'Sophia Page', 'user-15.jpg', 'sophia@mail.ru', NULL, '$2y$10$idCSgjj8JHfmKvs9fkRe8.wqEVVCMDt8qgaDP/NuReoUwoWjaTnRO', NULL, '2021-01-19 14:15:57', '2021-01-19 14:15:57'),
(7, 'Linda Lohan', 'user-16.jpg', 'lohanlinda@mail.ru', NULL, '$2y$10$qDcAJToWTSnhD0pwm02PCO/.SvcxV8rsJp0zFMa7tEPTJv3Ju2Gmy', NULL, '2021-01-19 14:16:19', '2021-01-19 14:16:19'),
(8, 'John Doe', 'user-17.jpg', 'johnd@mail.ru', NULL, '$2y$10$USMRBmVtYW.L6fkSgqZule5AkiiyYTrN2rMIXxHJlgD74Qp9LC5xW', NULL, '2021-01-19 14:16:56', '2021-01-19 14:16:56'),
(9, 'Julia Cox', 'user-18.jpg', 'julia@mail.ru', NULL, '$2y$10$..C/32RgDFPIjwsf1cbJ/.LceLQNLaX.GXuEwcoC2CZuHezpvOUti', NULL, '2021-01-19 14:17:18', '2021-01-19 14:17:18'),
(10, 'Nihat Memmedov', 'no-photo.png', 'nihatmemmedov@mail.ru', NULL, '$2y$10$PhUV3t272EA6j8FOqdzFYO9UXbTP6pYboCh4MIISyIfU3Tx0eAf66', NULL, '2021-01-20 07:10:47', '2021-01-20 07:10:47'),
(11, 'Admin', 'no-photo.png', 'admin@friend.com', NULL, '$2y$10$DYedXexqrPnZD8W3qnFr5eP5g/Jqq1cSZzmiQIJ5S8rVCIkhJm8lO', NULL, '2021-01-20 07:11:54', '2021-01-20 07:11:54');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Tablo için indeksler `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Tablo için AUTO_INCREMENT değeri `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
