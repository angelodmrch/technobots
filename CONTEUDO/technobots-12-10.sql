-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 12-Out-2020 às 13:42
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `technobots`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `dmrch_banner_banners`
--

DROP TABLE IF EXISTS `dmrch_banner_banners`;
CREATE TABLE IF NOT EXISTS `dmrch_banner_banners` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn_title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_on` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` enum('_blank','_self') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `sort_order` int(11) DEFAULT NULL,
  `area` text COLLATE utf8mb4_unicode_ci,
  `published_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `dmrch_banner_banners`
--

INSERT INTO `dmrch_banner_banners` (`id`, `title`, `description`, `link`, `btn_title`, `link_on`, `target`, `status`, `sort_order`, `area`, `published_at`, `created_at`, `updated_at`) VALUES
(1, '', '', '', '', '0', '_blank', 1, 1, '[\"home\"]', NULL, '2020-10-11 16:02:52', '2020-10-11 16:02:52');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dmrch_catalog_categories`
--

DROP TABLE IF EXISTS `dmrch_catalog_categories`;
CREATE TABLE IF NOT EXISTS `dmrch_catalog_categories` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `nest_left` int(11) DEFAULT NULL,
  `nest_right` int(11) DEFAULT NULL,
  `nest_depth` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `dmrch_catalog_categories_slug_index` (`slug`),
  KEY `dmrch_catalog_categories_parent_id_index` (`parent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dmrch_catalog_products`
--

DROP TABLE IF EXISTS `dmrch_catalog_products`;
CREATE TABLE IF NOT EXISTS `dmrch_catalog_products` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `videos` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `dmrch_catalog_products_slug_index` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `dmrch_catalog_products`
--

INSERT INTO `dmrch_catalog_products` (`id`, `status`, `name`, `slug`, `description`, `videos`, `created_at`, `updated_at`) VALUES
(1, 1, 'Calha Vibratoria', 'calha-vibratoria', '<p>Remove o excesso de farinha após o empanamento evitando o excesso de resíduos na fritadeira e na embalagem.\r\n	<br>Equipamento em aço inox.\r\n	<br>Equipamento elétrico.\r\n	<br>Adequado a NR12.</p>', '[]', '2020-10-11 17:01:20', '2020-10-12 16:17:35'),
(2, 1, 'Decoratech 60', 'decoratech-60', '<p>Cobre tortas com chantilly;\r\n	<br>Dosa e aplica recheios cremosos;\r\n	<br>Dosa massas moles como pão de ló;\r\n	<br>Equipamento eletropneumatico;\r\n	<br>Adequado a NR12.</p>', '[]', '2020-10-12 16:16:00', '2020-10-12 16:16:00'),
(3, 1, 'Techpress 160', 'techpress-160', '<p>Equipamento formador de tortas doces e salgadas, empada, empadão, torta biscuit etc.\r\n	<br>Equipamento eletropneumatico.\r\n	<br>Adequado a NR12.</p>', '[]', '2020-10-12 16:16:46', '2020-10-12 16:16:46');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dmrch_catalog_products_categories`
--

DROP TABLE IF EXISTS `dmrch_catalog_products_categories`;
CREATE TABLE IF NOT EXISTS `dmrch_catalog_products_categories` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`product_id`,`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `system_files`
--

DROP TABLE IF EXISTS `system_files`;
CREATE TABLE IF NOT EXISTS `system_files` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `disk_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_size` int(11) NOT NULL,
  `content_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `field` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_public` tinyint(1) NOT NULL DEFAULT '1',
  `sort_order` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `system_files_field_index` (`field`),
  KEY `system_files_attachment_id_index` (`attachment_id`),
  KEY `system_files_attachment_type_index` (`attachment_type`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `system_files`
--

INSERT INTO `system_files` (`id`, `disk_name`, `file_name`, `file_size`, `content_type`, `title`, `description`, `field`, `attachment_id`, `attachment_type`, `is_public`, `sort_order`, `created_at`, `updated_at`) VALUES
(1, '5f83027abdd56259068293.png', 'logo.png', 52846, 'image/png', NULL, NULL, 'image', '1', 'Dmrch\\Banner\\Models\\Banner', 1, 1, '2020-10-11 16:02:50', '2020-10-11 16:02:52'),
(3, '5f84567ba6c8e198119081.png', 'Sem-Título-1.png', 384562, 'image/png', NULL, NULL, 'thumb', '1', 'Dmrch\\Catalog\\Models\\Product', 1, 3, '2020-10-12 16:13:31', '2020-10-12 16:14:31'),
(4, '5f845702be65f978671041.png', 'Sem-Título-2.png', 324209, 'image/png', NULL, NULL, 'thumb', '2', 'Dmrch\\Catalog\\Models\\Product', 1, 4, '2020-10-12 16:15:46', '2020-10-12 16:16:00'),
(5, '5f84573aa0529029003984.png', 'Sem-Título-3.png', 326359, 'image/png', NULL, NULL, 'thumb', '3', 'Dmrch\\Catalog\\Models\\Product', 1, 5, '2020-10-12 16:16:42', '2020-10-12 16:16:46');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
