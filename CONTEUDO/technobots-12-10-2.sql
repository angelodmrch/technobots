-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 12-Out-2020 às 14:51
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
-- Estrutura da tabela `dmrch_conteudo_conteudos`
--

DROP TABLE IF EXISTS `dmrch_conteudo_conteudos`;
CREATE TABLE IF NOT EXISTS `dmrch_conteudo_conteudos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texto` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `dmrch_conteudo_conteudos`
--

INSERT INTO `dmrch_conteudo_conteudos` (`id`, `texto`, `created_at`, `updated_at`) VALUES
(1, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid voluptates tempora magnam similique atque eligendi animi enim quaerat repellat impedit? Quam cum atque assumenda aperiam laudantium impedit fugit. Modi, impedit.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid voluptates tempora magnam similique atque eligendi animi enim quaerat repellat impedit? Quam cum atque assumenda aperiam laudantium impedit fugit. Modi, impedit.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid voluptates tempora magnam similique atque eligendi animi enim quaerat repellat impedit? Quam cum atque assumenda aperiam laudantium impedit fugit. Modi, impedit.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid voluptates tempora magnam similique atque eligendi animi enim quaerat repellat impedit? Quam cum atque assumenda aperiam laudantium impedit fugit. Modi, impedit.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid voluptates tempora magnam similique atque eligendi animi enim quaerat repellat impedit? Quam cum atque assumenda aperiam laudantium impedit fugit. Modi, impedit.</p>', '2020-10-12 16:57:17', '2020-10-12 17:00:38');

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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `system_files`
--

INSERT INTO `system_files` (`id`, `disk_name`, `file_name`, `file_size`, `content_type`, `title`, `description`, `field`, `attachment_id`, `attachment_type`, `is_public`, `sort_order`, `created_at`, `updated_at`) VALUES
(1, '5f83027abdd56259068293.png', 'logo.png', 52846, 'image/png', NULL, NULL, 'image', '1', 'Dmrch\\Banner\\Models\\Banner', 1, 1, '2020-10-11 16:02:50', '2020-10-11 16:02:52'),
(3, '5f84567ba6c8e198119081.png', 'Sem-Título-1.png', 384562, 'image/png', NULL, NULL, 'thumb', '1', 'Dmrch\\Catalog\\Models\\Product', 1, 3, '2020-10-12 16:13:31', '2020-10-12 16:14:31'),
(4, '5f845702be65f978671041.png', 'Sem-Título-2.png', 324209, 'image/png', NULL, NULL, 'thumb', '2', 'Dmrch\\Catalog\\Models\\Product', 1, 4, '2020-10-12 16:15:46', '2020-10-12 16:16:00'),
(5, '5f84573aa0529029003984.png', 'Sem-Título-3.png', 326359, 'image/png', NULL, NULL, 'thumb', '3', 'Dmrch\\Catalog\\Models\\Product', 1, 5, '2020-10-12 16:16:42', '2020-10-12 16:16:46'),
(6, '5f846198cc697046515320.jpeg', 'WhatsApp Image 2020-10-12 at 06.51.35.jpeg', 22473, 'image/jpeg', 'Spazio di Pane', '', 'clientes', '1', 'Dmrch\\Conteudo\\Models\\Conteudos', 1, 6, '2020-10-12 17:00:56', '2020-10-12 17:02:57'),
(7, '5f846198d30b0860209289.jpeg', 'WhatsApp Image 2020-10-12 at 07.00.59.jpeg', 15905, 'image/jpeg', 'Doce D\'ocê', '', 'clientes', '1', 'Dmrch\\Conteudo\\Models\\Conteudos', 1, 7, '2020-10-12 17:00:56', '2020-10-12 17:02:57'),
(8, '5f8461993d0b4647059403.jpeg', 'WhatsApp Image 2020-10-12 at 07.01.15.jpeg', 36569, 'image/jpeg', 'Leve Sabor', '', 'clientes', '1', 'Dmrch\\Conteudo\\Models\\Conteudos', 1, 8, '2020-10-12 17:00:57', '2020-10-12 17:02:57'),
(9, '5f8461994a484424267020.jpeg', 'WhatsApp Image 2020-10-12 at 07.03.04.jpeg', 31733, 'image/jpeg', 'Sr. Pão', '', 'clientes', '1', 'Dmrch\\Conteudo\\Models\\Conteudos', 1, 9, '2020-10-12 17:00:57', '2020-10-12 17:02:57'),
(10, '5f8461998ea7a207652123.jpeg', 'WhatsApp Image 2020-10-12 at 07.03.52.jpeg', 18538, 'image/jpeg', 'Lopes Padaria', '', 'clientes', '1', 'Dmrch\\Conteudo\\Models\\Conteudos', 1, 10, '2020-10-12 17:00:57', '2020-10-12 17:02:57'),
(11, '5f846199a5d12042744882.jpeg', 'WhatsApp Image 2020-10-12 at 07.04.42.jpeg', 6825, 'image/jpeg', 'Vitor Supermercado', '', 'clientes', '1', 'Dmrch\\Conteudo\\Models\\Conteudos', 1, 11, '2020-10-12 17:00:57', '2020-10-12 17:02:57'),
(12, '5f846199d9a72541966733.jpeg', 'WhatsApp Image 2020-10-12 at 07.05.53.jpeg', 11300, 'image/jpeg', 'Festval', '', 'clientes', '1', 'Dmrch\\Conteudo\\Models\\Conteudos', 1, 12, '2020-10-12 17:00:57', '2020-10-12 17:02:57'),
(13, '5f84619a0dc55747056531.jpeg', 'WhatsApp Image 2020-10-12 at 07.06.48.jpeg', 46626, 'image/jpeg', 'Doce Sabor', '', 'clientes', '1', 'Dmrch\\Conteudo\\Models\\Conteudos', 1, 13, '2020-10-12 17:00:58', '2020-10-12 17:02:57');

-- --------------------------------------------------------

--
-- Estrutura da tabela `system_plugin_history`
--

DROP TABLE IF EXISTS `system_plugin_history`;
CREATE TABLE IF NOT EXISTS `system_plugin_history` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `version` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `system_plugin_history_code_index` (`code`),
  KEY `system_plugin_history_type_index` (`type`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `system_plugin_history`
--

INSERT INTO `system_plugin_history` (`id`, `code`, `type`, `version`, `detail`, `created_at`) VALUES
(1, 'Dmrch.Banner', 'comment', '1.0.1', 'First version of Banner', '2020-10-06 16:04:35'),
(2, 'Dmrch.Banner', 'script', '1.0.2', 'create_banners_table.php', '2020-10-06 16:04:35'),
(3, 'Dmrch.Banner', 'comment', '1.0.2', 'Update of Banner', '2020-10-06 16:04:35'),
(10, 'Dmrch.Catalog', 'script', '1.0.2', 'create_categories_table.php', '2020-10-06 16:21:21'),
(11, 'Dmrch.Catalog', 'script', '1.0.2', 'create_products_table.php', '2020-10-06 16:21:21'),
(12, 'Dmrch.Catalog', 'comment', '1.0.2', 'Initialize plugin.', '2020-10-06 16:21:21'),
(13, 'Dmrch.Contact', 'script', '1.0.1', 'create_contacts_table.php', '2020-10-06 16:21:21'),
(14, 'Dmrch.Contact', 'script', '1.0.1', 'create_newsletters_table.php', '2020-10-06 16:21:21'),
(15, 'Dmrch.Contact', 'comment', '1.0.1', 'First version of Contact', '2020-10-06 16:21:21'),
(16, 'Dmrch.Contact', 'script', '1.0.2', 'create_forms_table.php', '2020-10-06 16:21:21'),
(17, 'Dmrch.Contact', 'script', '1.0.2', 'seed_forms_table.php', '2020-10-06 16:21:21'),
(18, 'Dmrch.Contact', 'comment', '1.0.2', 'Added custom forms', '2020-10-06 16:21:21');

-- --------------------------------------------------------

--
-- Estrutura da tabela `system_plugin_versions`
--

DROP TABLE IF EXISTS `system_plugin_versions`;
CREATE TABLE IF NOT EXISTS `system_plugin_versions` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `version` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `is_disabled` tinyint(1) NOT NULL DEFAULT '0',
  `is_frozen` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `system_plugin_versions_code_index` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `system_plugin_versions`
--

INSERT INTO `system_plugin_versions` (`id`, `code`, `version`, `created_at`, `is_disabled`, `is_frozen`) VALUES
(1, 'Dmrch.Banner', '1.0.2', '2020-10-06 16:04:35', 0, 0),
(4, 'Dmrch.Catalog', '1.0.2', '2020-10-06 16:21:21', 0, 0),
(5, 'Dmrch.Contact', '1.0.2', '2020-10-06 16:21:21', 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
