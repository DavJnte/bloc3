-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 23 mai 2023 à 13:55
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mercadona`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `category`, `created_at`, `updated_at`) VALUES
(2, 'Multimédia', '2023-05-12 06:25:19', '2023-05-12 06:25:19'),
(3, 'Équipements', '2023-05-12 06:25:33', '2023-05-21 07:55:24');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_05_12_081353_create_categories_table', 2),
(8, '2023_05_12_103523_create_promos_table', 4),
(10, '2023_05_12_074831_create_products_table', 5);

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` int NOT NULL,
  `prix_promo` decimal(5,2) NOT NULL DEFAULT '0.00',
  `date_debut` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `code`, `author`, `libelle`, `description`, `prix`, `prix_promo`, `date_debut`, `date_fin`, `category`, `image`, `created_at`, `updated_at`) VALUES
(5, '6928', 'Administrateur\r\n', 'Casque bluetooth', '<p>Que vous soyez un professionnel en d&eacute;placement, un &eacute;tudiant ou un passionn&eacute; de technologie, Casque bluetooth vous offre la performance, la portabilit&eacute; et la s&eacute;curit&eacute; dont vous avez besoin pour rester productif et connect&eacute; o&ugrave; que vous soyez.\"</p>\r\n', 700, '350.00', '2023-05-20', '2023-08-26', 'Multimédia', '1683910007.png', '2023-05-12 14:46:47', '2023-05-20 11:18:47'),
(6, '8559', 'Administrateur\r\n', 'Montre Connecté', '<p>La Montre Connecté est le compagnon id&eacute;al pour les professionnels en d&eacute;placement. Avec son processeur puissant et sa m&eacute;moire vive g&eacute;n&eacute;reuse, celle-ci vous offre des performances exceptionnelles pour toutes vos t&acirc;ches professionnelles. Son &eacute;cran HD vous permet de visualiser vos contenus avec une nettet&eacute; et une clart&eacute; remarquables.</p>\r\n', 432, '0.00', NULL, NULL, 'Multimédia', '1683910076.png', '2023-05-12 14:47:56', '2023-05-21 15:39:27');

-- --------------------------------------------------------

--
-- Structure de la table `promos`
--

DROP TABLE IF EXISTS `promos`;
CREATE TABLE IF NOT EXISTS `promos` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `reduction` decimal(5,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `promos`
--

INSERT INTO `promos` (`id`, `code`, `date_debut`, `date_fin`, `reduction`, `created_at`, `updated_at`) VALUES
(2, '1786', '2023-05-27', '2023-05-31', '10.00', '2023-05-12 08:48:24', '2023-05-12 08:48:24'),
(3, '2574', '2023-05-12', '2023-05-27', '20.00', '2023-05-12 09:37:37', '2023-05-12 09:37:37'),
(4, '1794', '2023-05-20', '2023-08-26', '50.00', '2023-05-20 06:28:20', '2023-05-20 06:28:20'),
(5, '5111', '2023-05-20', '2023-08-26', '50.00', '2023-05-20 06:28:20', '2023-05-20 06:28:20');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Administrateur', 'admin@gmail.com', '$2y$10$6GBaOyxZ4opx8HVWiTdN.utkrnJuMyaPATYbJv8ieXDM3ZVFGSWmi', '2023-05-12 05:35:11', '2023-05-12 05:35:11');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
