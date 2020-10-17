-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.26 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando estrutura para tabela technobots.dmrch_catalog_products
DROP TABLE IF EXISTS `dmrch_catalog_products`;
CREATE TABLE IF NOT EXISTS `dmrch_catalog_products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
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

-- Copiando dados para a tabela technobots.dmrch_catalog_products: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `dmrch_catalog_products` DISABLE KEYS */;
INSERT INTO `dmrch_catalog_products` (`id`, `status`, `name`, `slug`, `description`, `videos`, `created_at`, `updated_at`) VALUES
  (1, 1, 'Calha Vibratoria', 'calha-vibratoria', '<p>Remove o excesso de farinha após o empanamento evitando o excesso de resíduos na fritadeira e na embalagem.\r\n  <br>Equipamento em aço inox.\r\n  <br>Equipamento elétrico.\r\n <br>Adequado a NR12.</p>', '[{"link":"https:\\/\\/www.youtube.com\\/watch?v=RkdSywbPaRU"}]', '2020-10-11 14:01:20', '2020-10-13 23:23:33'),
  (2, 1, 'Decoratech 60', 'decoratech-60', '<p>Cobre tortas com chantilly;\r\n  <br>Dosa e aplica recheios cremosos;\r\n  <br>Dosa massas moles como pão de ló;\r\n <br>Equipamento eletropneumatico;\r\n <br>Adequado a NR12.</p>', '[{"link":"https:\\/\\/www.youtube.com\\/watch?v=ps1gzJp_MT8"}]', '2020-10-12 13:16:00', '2020-10-13 23:28:55'),
  (3, 1, 'Techpress 160', 'techpress-160', '<p>Equipamento formador de tortas doces e salgadas, empada, empadão, torta biscuit etc.\r\n <br>Equipamento eletropneumatico.\r\n <br>Adequado a NR12.</p>', '[{"link":"https:\\/\\/www.youtube.com\\/watch?v=GC8KS_rap6g"}]', '2020-10-12 13:16:46', '2020-10-13 23:28:29');
/*!40000 ALTER TABLE `dmrch_catalog_products` ENABLE KEYS */;

-- Copiando estrutura para tabela technobots.dmrch_conteudo_conteudos
DROP TABLE IF EXISTS `dmrch_conteudo_conteudos`;
CREATE TABLE IF NOT EXISTS `dmrch_conteudo_conteudos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texto` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela technobots.dmrch_conteudo_conteudos: 1 rows
/*!40000 ALTER TABLE `dmrch_conteudo_conteudos` DISABLE KEYS */;
INSERT INTO `dmrch_conteudo_conteudos` (`id`, `texto`, `created_at`, `updated_at`) VALUES
  (1, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid voluptates tempora magnam similique atque eligendi animi enim quaerat repellat impedit? Quam cum atque assumenda aperiam laudantium impedit fugit. Modi, impedit.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid voluptates tempora magnam similique atque eligendi animi enim quaerat repellat impedit? Quam cum atque assumenda aperiam laudantium impedit fugit. Modi, impedit.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid voluptates tempora magnam similique atque eligendi animi enim quaerat repellat impedit? Quam cum atque assumenda aperiam laudantium impedit fugit. Modi, impedit.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid voluptates tempora magnam similique atque eligendi animi enim quaerat repellat impedit? Quam cum atque assumenda aperiam laudantium impedit fugit. Modi, impedit.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid voluptates tempora magnam similique atque eligendi animi enim quaerat repellat impedit? Quam cum atque assumenda aperiam laudantium impedit fugit. Modi, impedit.</p>', '2020-10-12 13:57:17', '2020-10-12 14:00:38');
/*!40000 ALTER TABLE `dmrch_conteudo_conteudos` ENABLE KEYS */;

-- Copiando estrutura para tabela technobots.system_files
DROP TABLE IF EXISTS `system_files`;
CREATE TABLE IF NOT EXISTS `system_files` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
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
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela technobots.system_files: ~24 rows (aproximadamente)
/*!40000 ALTER TABLE `system_files` DISABLE KEYS */;
INSERT INTO `system_files` (`id`, `disk_name`, `file_name`, `file_size`, `content_type`, `title`, `description`, `field`, `attachment_id`, `attachment_type`, `is_public`, `sort_order`, `created_at`, `updated_at`) VALUES
  (1, '5f83027abdd56259068293.png', 'logo.png', 52846, 'image/png', NULL, NULL, 'image', '1', 'Dmrch\\Banner\\Models\\Banner', 1, 1, '2020-10-11 13:02:50', '2020-10-11 13:02:52'),
  (3, '5f84567ba6c8e198119081.png', 'Sem-Título-1.png', 384562, 'image/png', NULL, NULL, 'thumb', '1', 'Dmrch\\Catalog\\Models\\Product', 1, 3, '2020-10-12 13:13:31', '2020-10-12 13:14:31'),
  (4, '5f845702be65f978671041.png', 'Sem-Título-2.png', 324209, 'image/png', NULL, NULL, 'thumb', '2', 'Dmrch\\Catalog\\Models\\Product', 1, 4, '2020-10-12 13:15:46', '2020-10-12 13:16:00'),
  (5, '5f84573aa0529029003984.png', 'Sem-Título-3.png', 326359, 'image/png', NULL, NULL, 'thumb', '3', 'Dmrch\\Catalog\\Models\\Product', 1, 5, '2020-10-12 13:16:42', '2020-10-12 13:16:46'),
  (6, '5f846198cc697046515320.jpeg', 'WhatsApp Image 2020-10-12 at 06.51.35.jpeg', 22473, 'image/jpeg', 'Spazio di Pane', '', 'clientes', '1', 'Dmrch\\Conteudo\\Models\\Conteudos', 1, 6, '2020-10-12 14:00:56', '2020-10-12 14:02:57'),
  (7, '5f846198d30b0860209289.jpeg', 'WhatsApp Image 2020-10-12 at 07.00.59.jpeg', 15905, 'image/jpeg', 'Doce D\'ocê', '', 'clientes', '1', 'Dmrch\\Conteudo\\Models\\Conteudos', 1, 7, '2020-10-12 14:00:56', '2020-10-12 14:02:57'),
  (8, '5f8461993d0b4647059403.jpeg', 'WhatsApp Image 2020-10-12 at 07.01.15.jpeg', 36569, 'image/jpeg', 'Leve Sabor', '', 'clientes', '1', 'Dmrch\\Conteudo\\Models\\Conteudos', 1, 8, '2020-10-12 14:00:57', '2020-10-12 14:02:57'),
  (9, '5f8461994a484424267020.jpeg', 'WhatsApp Image 2020-10-12 at 07.03.04.jpeg', 31733, 'image/jpeg', 'Sr. Pão', '', 'clientes', '1', 'Dmrch\\Conteudo\\Models\\Conteudos', 1, 9, '2020-10-12 14:00:57', '2020-10-12 14:02:57'),
  (10, '5f8461998ea7a207652123.jpeg', 'WhatsApp Image 2020-10-12 at 07.03.52.jpeg', 18538, 'image/jpeg', 'Lopes Padaria', '', 'clientes', '1', 'Dmrch\\Conteudo\\Models\\Conteudos', 1, 10, '2020-10-12 14:00:57', '2020-10-12 14:02:57'),
  (11, '5f846199a5d12042744882.jpeg', 'WhatsApp Image 2020-10-12 at 07.04.42.jpeg', 6825, 'image/jpeg', 'Vitor Supermercado', '', 'clientes', '1', 'Dmrch\\Conteudo\\Models\\Conteudos', 1, 11, '2020-10-12 14:00:57', '2020-10-12 14:02:57'),
  (12, '5f846199d9a72541966733.jpeg', 'WhatsApp Image 2020-10-12 at 07.05.53.jpeg', 11300, 'image/jpeg', 'Festval', '', 'clientes', '1', 'Dmrch\\Conteudo\\Models\\Conteudos', 1, 12, '2020-10-12 14:00:57', '2020-10-12 14:02:57'),
  (13, '5f84619a0dc55747056531.jpeg', 'WhatsApp Image 2020-10-12 at 07.06.48.jpeg', 46626, 'image/jpeg', 'Doce Sabor', '', 'clientes', '1', 'Dmrch\\Conteudo\\Models\\Conteudos', 1, 13, '2020-10-12 14:00:58', '2020-10-12 14:02:57'),
  (14, '5f863579b3361118157797.jpeg', 'WhatsApp Image 2020-10-11 at 11.14.57 (1).jpeg', 50910, 'image/jpeg', NULL, NULL, 'gallery', '1', 'Dmrch\\Catalog\\Models\\Product', 1, 14, '2020-10-13 23:17:13', '2020-10-13 23:17:16'),
  (15, '5f863579b3361942692919.jpeg', 'WhatsApp Image 2020-10-11 at 11.14.56 (1).jpeg', 103692, 'image/jpeg', NULL, NULL, 'gallery', '1', 'Dmrch\\Catalog\\Models\\Product', 1, 15, '2020-10-13 23:17:13', '2020-10-13 23:17:16'),
  (16, '5f86357a4e487397341864.jpeg', 'WhatsApp Image 2020-10-11 at 11.14.57.jpeg', 63840, 'image/jpeg', NULL, NULL, 'gallery', '1', 'Dmrch\\Catalog\\Models\\Product', 1, 16, '2020-10-13 23:17:14', '2020-10-13 23:17:16'),
  (17, '5f8638198c2c6612705174.jpeg', 'WhatsApp Image 2020-10-11 at 11.33.49.jpeg', 73530, 'image/jpeg', NULL, NULL, 'gallery', '3', 'Dmrch\\Catalog\\Models\\Product', 1, 17, '2020-10-13 23:28:25', '2020-10-13 23:28:29'),
  (18, '5f863819926df484608336.jpeg', 'WhatsApp Image 2020-10-11 at 11.37.16.jpeg', 47970, 'image/jpeg', NULL, NULL, 'gallery', '3', 'Dmrch\\Catalog\\Models\\Product', 1, 18, '2020-10-13 23:28:25', '2020-10-13 23:28:29'),
  (19, '5f86381a03ee2272907912.jpeg', 'WhatsApp Image 2020-10-11 at 11.37.17 (1).jpeg', 62251, 'image/jpeg', NULL, NULL, 'gallery', '3', 'Dmrch\\Catalog\\Models\\Product', 1, 19, '2020-10-13 23:28:26', '2020-10-13 23:28:29'),
  (20, '5f86381a0b4b0431302482.jpeg', 'WhatsApp Image 2020-10-11 at 11.37.17.jpeg', 59036, 'image/jpeg', NULL, NULL, 'gallery', '3', 'Dmrch\\Catalog\\Models\\Product', 1, 20, '2020-10-13 23:28:26', '2020-10-13 23:28:29'),
  (21, '5f86383451ff7292694068.jpeg', 'WhatsApp Image 2020-10-11 at 11.26.54 (1).jpeg', 54779, 'image/jpeg', NULL, NULL, 'gallery', '2', 'Dmrch\\Catalog\\Models\\Product', 1, 21, '2020-10-13 23:28:52', '2020-10-13 23:28:55'),
  (22, '5f863834544bb020018068.jpeg', 'WhatsApp Image 2020-10-11 at 11.26.53.jpeg', 56849, 'image/jpeg', NULL, NULL, 'gallery', '2', 'Dmrch\\Catalog\\Models\\Product', 1, 22, '2020-10-13 23:28:52', '2020-10-13 23:28:55'),
  (23, '5f863834bf55c515075017.jpeg', 'WhatsApp Image 2020-10-11 at 11.26.54 (2).jpeg', 41720, 'image/jpeg', NULL, NULL, 'gallery', '2', 'Dmrch\\Catalog\\Models\\Product', 1, 23, '2020-10-13 23:28:52', '2020-10-13 23:28:55'),
  (24, '5f863834cfac0790412425.jpeg', 'WhatsApp Image 2020-10-11 at 11.26.54 (3).jpeg', 56991, 'image/jpeg', NULL, NULL, 'gallery', '2', 'Dmrch\\Catalog\\Models\\Product', 1, 24, '2020-10-13 23:28:52', '2020-10-13 23:28:55'),
  (25, '5f86383522c85258469466.jpeg', 'WhatsApp Image 2020-10-11 at 11.26.54.jpeg', 37381, 'image/jpeg', NULL, NULL, 'gallery', '2', 'Dmrch\\Catalog\\Models\\Product', 1, 25, '2020-10-13 23:28:53', '2020-10-13 23:28:55');
/*!40000 ALTER TABLE `system_files` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
