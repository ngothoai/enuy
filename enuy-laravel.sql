-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 28 Janvier 2018 à 18:31
-- Version du serveur :  5.6.26
-- Version de PHP :  5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `enuy-laravel`
--

-- --------------------------------------------------------

--
-- Structure de la table `category_product`
--

CREATE TABLE IF NOT EXISTS `category_product` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `category_product`
--

INSERT INTO `category_product` (`id`, `name`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'Hoa oải hương khô', 0, '2018-01-04 01:40:13', '2018-01-04 01:40:13'),
(2, 'Lavender tặng bạn', 0, '2018-01-04 01:40:32', '2018-01-04 02:33:11'),
(3, 'Lavender tặng sinh nhật', 0, '2018-01-04 01:40:54', '2018-01-04 02:33:44'),
(4, 'Hộp quà lavender', 0, '2018-01-04 01:41:04', '2018-01-04 01:41:04'),
(5, 'Tinh dầu Lavender', 0, '2018-01-04 01:41:23', '2018-01-04 01:41:23'),
(7, 'Trà lavender', 0, '2018-01-04 01:41:49', '2018-01-04 01:41:49'),
(10, 'Túi thơm', 0, '2018-01-04 02:45:58', '2018-01-04 02:45:58');

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(10) unsigned NOT NULL,
  `id_post` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url_image` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_12_17_122303_create_products_table', 2),
(4, '2017_12_17_144608_add_level_user', 3),
(5, '2018_01_03_111329_category-product', 4),
(6, '2018_01_04_083427_add_column_idcat_to_table_product', 5),
(7, '2018_01_04_102829_table_image', 6),
(8, '2018_01_04_114742_add_column_short_des_to_product_table', 7);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `imgProduct` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `idcat` int(11) NOT NULL,
  `des_short` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `products`
--

INSERT INTO `products` (`id`, `created_at`, `updated_at`, `imgProduct`, `title`, `description`, `price`, `idcat`, `des_short`) VALUES
(1, '2017-12-17 05:39:14', '2018-01-04 07:13:48', '1515050028_qqtO_23517532_1796586463974952_4824817335290821877_n.jpg', 'Hoa oải hương', '<p>Hoa oải hương d&agrave;nh cho bạn g&aacute;i ng&agrave;y Gi&aacute;ng sinh</p>\r\n', 300000, 1, '                            Hộp hoa khô dành cho bạn gái ngày Giáng sinh\r\n                        '),
(2, '2017-12-17 05:39:14', '2018-01-04 07:13:27', '1515050007_t07H_23844497_1800362690263996_7020076248969463199_n.jpg', 'Hoa oải hương', '<p>Hoa oải hương d&agrave;nh cho bạn g&aacute;i ng&agrave;y Gi&aacute;ng sinh</p>\r\n', 300000, 2, '                            Hộp hoa khô dành cho bạn gái ngày Giáng sinh\r\n                        '),
(4, '2017-12-17 05:39:15', '2018-01-04 07:13:02', '1515049982_X5GR_23517532_1796586463974952_4824817335290821877_n (1).jpg', 'Hộp hoa khô', '<p>Hộp hoa kh&ocirc; d&agrave;nh cho bạn g&aacute;i ng&agrave;y Gi&aacute;ng sinh</p>\r\n', 500000, 4, '                            Hộp hoa khô dành cho bạn gái ngày Giáng sinh\r\n                        '),
(5, '2018-01-04 04:39:05', '2018-01-04 07:10:09', '1515049809_iKWZ_23517532_1796586463974952_4824817335290821877_n.jpg', 'Túi thơm 50k', '<p>T&uacute;i thơm 50k</p>\r\n', 50000, 10, '                                                        Túi thơm 50k\r\n\r\n                        \r\n                        \r\n                        '),
(6, '2018-01-04 10:36:21', '2018-01-04 11:04:21', '1515062181_3FhI_IMG_6549-e1501905712230.jpg', 'Lọ hoa Lavender và hoa hồng vĩnh cửu 7 màu ', '<p><img alt="" src="http://localhost/sanbatdongsan/public/uploads/posts/images/Posts/Product/IMG_6547-e1501905409417.jpg" style="height:100%; width:100%" /></p>\r\n', 70000, 1, '                            LỌ HOA LAVENDER VÀ HOA HỒNG VĨNH CỬU 7 MÀU\r\n                        '),
(7, '2018-01-05 10:47:30', '2018-01-05 10:47:30', '1515149250_R171_FullSizeRender-41.jpg', 'HOA PHALARIS KHÔ', '<p>Hoa phalaris kh&ocirc; nhập khẩu từ H&agrave; Lan, c&oacute; độ bền 2-3 năm. B&igrave;nh hoa nhỏ xinh l&agrave;m s&aacute;ng bừng cả một g&oacute;c kh&ocirc;ng gian. C&oacute; thể d&ugrave;ng l&agrave;m qu&agrave; tặng sinh nhật, trang tr&iacute; nh&agrave; cửa&hellip;</p>\r\n\r\n<p>Hiện shop c&oacute; 7 m&agrave;u: xanh dương, xanh l&aacute;, v&agrave;ng chanh, cam, đỏ, t&iacute;m xanh, hồng</p>\r\n\r\n<p>G&iacute;a: 300k/b&oacute; 100gr</p>\r\n\r\n<p>450k/lọ (gồm b&oacute; 100gr v&agrave; lọ sứ trắng)</p>\r\n', 300000, 1, 'Hoa phalaris khô nhập khẩu từ Hà Lan, có độ bền 2-3 năm.');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `level`) VALUES
(1, 'Ngô Văn Thoại', 'thoaingo.vnkingnet@gmail.com', '$2a$04$AMCi6RVQ2uUN9ijwZ1ZR5eZgQJEVT3DMaBb5ICzqdT8M8ncD4erwy', 'jmfVy6EDDGSalP5iSJpsdXdUCgl8VW1rjMpqrDuAo2zD4SEhhUw1xn9iThkd', '2017-12-13 03:24:38', '2018-01-03 03:41:46', 0),
(2, 'Ngô Cheng', 'ngovancheng.bn@gmail.com', '$2a$04$AMCi6RVQ2uUN9ijwZ1ZR5eZgQJEVT3DMaBb5ICzqdT8M8ncD4erwy', 'JZH7nUf8mPDTUA6vC8hTw7zlG35rJ13KpLluY1pmlYIcFtxWLYvXRtmZBfYV', '2017-12-13 03:31:25', '2018-01-03 11:54:01', 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `category_product`
--
ALTER TABLE `category_product`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `category_product`
--
ALTER TABLE `category_product`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
