-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for katalog_diwarna
CREATE DATABASE IF NOT EXISTS `katalog_diwarna` /*!40100 DEFAULT CHARACTER SET armscii8 COLLATE armscii8_bin */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `katalog_diwarna`;

-- Dumping structure for table katalog_diwarna.katalog_awal
CREATE TABLE IF NOT EXISTS `katalog_awal` (
  `katalog_awal_id` int NOT NULL AUTO_INCREMENT,
  `alt_k_awal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `text_k_awal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `desc_k_awal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `url_k_awal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_sub_kategori` int NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`katalog_awal_id`),
  KEY `id_sub_kategori` (`id_sub_kategori`) USING BTREE,
  CONSTRAINT `FK-id_sub_kategori` FOREIGN KEY (`id_sub_kategori`) REFERENCES `sub_kategori` (`id_sub_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table katalog_diwarna.katalog_awal: ~9 rows (approximately)
DELETE FROM `katalog_awal`;
INSERT INTO `katalog_awal` (`katalog_awal_id`, `alt_k_awal`, `text_k_awal`, `desc_k_awal`, `url_k_awal`, `id_sub_kategori`, `slug`) VALUES
	(1, 'badge-bordir', 'Badge Bordir', 'Murah, Bahan Berkualitas. Disesuaikan Dengan Keinginan Anda.', '/assets/images/katalog/badge bordir - diwarna.com.jpg', 5, 'badge-bordir'),
	(2, 'badge-rajut', 'Badge Rajut', 'Murah, Bahan Berkualitas. Disesuaikan Dengan Keinginan Anda.', '/assets/images/katalog/badge rajut - diwarna.com.jpg', 5, 'badge-rajut'),
	(3, 'badge-sablon', 'Badge Sablon', 'Murah, Bahan Berkualitas. Disesuaikan Dengan Keinginan Anda.', '/assets/images/katalog/badge sablon - diwarna.com.jpg', 5, 'badge-sablon'),
	(4, 'topi-sekolah', 'Topi Sekolah', 'Murah, Bahan Berkualitas. Disesuaikan Dengan Keinginan Anda.', '/assets/images/thumbs/topi sekolah - diwarna.com.jpg', 1, 'topi-sekolah'),
	(5, 'topi-promosi', 'Topi Promosi', 'Murah, Bahan Berkualitas. Disesuaikan Dengan Keinginan Anda.', '/assets/images/thumbs/topi promosi - diwarna.com.jpg', 1, 'topi-promosi'),
	(6, 'dasi-sekolah', 'Dasi Sekolah', 'Murah, Bahan Berkualitas. Disesuaikan Dengan Keinginan Anda.', '/assets/images/thumbs/dasi sekolah - diwarna.com.jpg', 4, 'dasi-sekolah'),
	(7, 'sabuk-sekolah', 'Sabuk Sekolah', 'Murah, Bahan Berkualitas. Disesuaikan Dengan Keinginan Anda.', '/assets/images/thumbs/sabuk sekolah - diwarna.com.jpg', 3, 'sabuk-sekolah'),
	(8, 'evolet-sekolah', 'Evolet Sekolah', 'Murah, Bahan Berkualitas. Disesuaikan Dengan Keinginan Anda.', '/assets/images/thumbs/evolet sekolah - diwarna.com.jpg', 19, 'evolet-sekolah'),
	(9, 'kaos-kaki-sekolah', 'Kaos Kaki Sekolah', 'Murah, Bahan Berkualitas. Disesuaikan Dengan Keinginan Anda.', '/assets//images/thumbs/kaos kaki sekolah - diwarna.com.jpg', 18, 'kaos-kaki-sekolah');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
